<?php

require_once('include/class.pdo.inc.php');

$vArr = $_REQUEST['arrondissements'];

$pdo = PdoEtablissement::getPdoEtablissement();
$lesLignes = $pdo->getLesEtablissementsParArr($vArr);
//var_dump($lesLignes);
<<<<<<< HEAD
=======
echo json_encode($lesLignes);
>>>>>>> 2a90c7b728c4a2302960fd1fb8b7595e867c8801




?>
