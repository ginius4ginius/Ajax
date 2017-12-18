<?php

include_once('include/class.pdo.inc.php');

$arr = $_REQUEST['arrondissements'];

$pdo = PdoEtablissement::getPdoEtablissement();
$lesLignes = $pdo->getLesEtablissementsParArr($arr);



?>
