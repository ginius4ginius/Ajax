<?php
$nom = $_REQUEST['nom'];
$prenom = $_REQUEST['prenom'];
$adresse = $_REQUEST['adresse'];
$tel = $_REQUEST['tel'];
echo"<h2> Bonjour $nom $prenom 
        <br> vous habitez au $adresse <br>
        et votre téléphone est $tel";
?>
