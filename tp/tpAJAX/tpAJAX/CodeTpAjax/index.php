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

  $pdo = PdoEtablissement::getPdoEtablissement();
  $lesLignes = $pdo->getLesEtablissements();
  var_dump($lesLignes[2]);
 
?>
<h2>Choisir votre école primaire</h2>

Sélectionner un arrondissement
<select id="arrondissements">
    

</select>
Sélectionner une école de cet arrondissement
<select id="ecoles">
    

</select>
<div id ="detail"> 

</div>
</body>
</html>