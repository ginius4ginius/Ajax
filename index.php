<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/monJsdemo1.js" type="text/javascript"></script>
    </head>
    <body>

<?php

  require_once ("include/class.pdo.inc.php");

  //$pdo = PdoEtablissement::getPdoEtablissement();
  //$lesLignes = $pdo->getLesEtablissementsParArr(2);
//  var_dump($lesLignes);

?>
<h2>Choisir votre école primaire</h2>

Sélectionner un arrondissement
<select id="arrondissements">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
</select>


Sélectionner une école de cet arrondissement
<select id="ecoles">


</select>
<div id ="detail">

</div>
</body>
</html>
