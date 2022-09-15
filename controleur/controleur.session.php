<?php
include ("./modele/modele.anabase.php");
Class Controleur_session{
	// --- champs de base du controleur
	public $vue=""; //vue appelée par le controleur
	
	public $message = "";
	public $erreur = "";
	
	public $data; // le tableau des données de la vue
	
	public $modele; // nom du modele
	
	public $m; // objet modele
	
	public $post; // renseigné par index
	
	// --- Constructeur
	public function __construct(){
		// déclarer la vue
		$this->vue = "hello";
		$this->modele = new Modele_anabase();	
	}
	
	public function todo_initialiser(){
		$this->post["nom"] = "";
		$this->data["liste"] = $this->modele->getListeNom();
	}
	
	public function todo_enregistrer(){
		if (empty($this->post["nom"])){
			echo "impossible";
			$this->data["liste"] = $this->modele->getListeNom();

		}else{
			$this->data["liste"] = $this->modele->insererNom($this->post["nom"]);
			$this->data["liste"] = $this->modele->getListeNom();
		}
		
	
	}
}
?>