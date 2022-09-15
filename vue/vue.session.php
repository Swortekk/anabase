<?php
include "./vue/entete.html.php";
?>
<h2>Formulaire session</h2>
<div class="form">
    <form class="form_content" action="./?controleur=session" method="POST">

        <div class="container">
            <input type="text" name="nomSession" placeholder="Saisir le nom de la session" value="<?= $c->post["nomSession"] ?>" /><br />
            <input type="text" name="numSession" placeholder="Saisir le numéro de la session" value="<?= $c->post["numSession"] ?>" /><br />
            <input type="date" name="dateSession"  value="<?= $c->post["dateSession"] ?>" /><br />
            <input type="time" name="heureSession"  value="<?= $c->post["heureSession"] ?>" /><br />
            <input type="text" name="prixSession" placeholder="Saisir le prix de la session" value="<?= $c->post["prixSession"] ?>" /><br />
       
            <input type="submit" class="btn" name="todo" value="Enregistrer" />
        </div>
</div>
</form>

</div>
</div>
</form>

<?php
include "./vue/pied.html.php";
?>