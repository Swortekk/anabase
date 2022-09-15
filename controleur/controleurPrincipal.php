<?php

function controleurPrincipal($action){
    $lesActions = array();

    $lesActions["defaut"] = "controleur.session.php";
    $lesActions["session"] = "controleur.session.php";

    
    if (array_key_exists ( $action , $lesActions )){
        return $lesActions[$action];
    }
    else{
        return $lesActions["defaut"];
    }

}

?>