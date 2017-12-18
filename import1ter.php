<?php
$plat = $_REQUEST['plat'];
if($plat=="chou")
    $texte="Vous aimez les saucisses alors !!";
if($plat=="piz")
    $texte="Vous aimez l'Italie alors !!";
if($plat=="cous")
    $texte="Vous aimez les merguez alors !!";
echo"<h2> $texte </h2>";
?>
