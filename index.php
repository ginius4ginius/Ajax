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

try
{
  // On se connecte à MySQL
  $bdd = new PDO('mysql:host=localhost;dbname=ajax', 'root', '');
}
catch(Exception $e)
{
  // En cas d'erreur, on affiche un message et on arrête tout
      die('Erreur : '.$e->getMessage());
  // Si tout va bien, on peut continuer
}
  //$pdo = PdoEtablissement::getPdoEtablissement();
  //$lesLignes = $pdo->getLesEtablissementsParArr(2);
  //var_dump($lesLignes);

?>
<h2>Choisir votre école primaire</h2>

Sélectionner un arrondissement
<select name="arrondissements" tabindex="5">
  <optgroup label="Arrondissement">
          <option  selected value='1'></option>
    <?php $reponse = $bdd->query('SELECT DISTINCT arrondissement FROM etablissement');
     while ($ligne = $reponse->fetch())
            {
            echo '<option value = "'.$ligne["arrondissement"].'">'.$ligne["arrondissement"].'</option>'; // ne pas changer de ligne
            } ?>
        </optgroup>
</select>

 </div>

<select name="ecoles" tabindex="5">
  Sélectionner une école de cet arrondissement

    <optgroup label="Ecoles">
            <option  selected value='1'></option>
      <?php $reponse = $bdd->query('SELECT nom FROM etablissement WHERE arrondissement = "'.$_REQUEST["arrondissements"].'"');
       while ($lignes = $reponse->fetch())
              {
              echo '<option value = "'.$lignes["code"].'">'.$lignes["nom"].'</option>'; // ne pas changer de ligne
              } ?>
    </optgroup>

</select>

<div id ="detail">

</div>
</body>
</html>
