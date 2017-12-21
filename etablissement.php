<?php

require_once('include/class.pdo.inc.php');

$vArr = $_REQUEST['arrondissements'];

$pdo = PdoEtablissement::getPdoEtablissement();
$lesLignes = $pdo->getLesEtablissementsParArr($vArr);
//var_dump($lesLignes);
echo json_encode($lesLignes);




?>
