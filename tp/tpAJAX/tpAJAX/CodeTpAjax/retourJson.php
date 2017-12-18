<?php
$table = $_REQUEST['table'];
for($i=1;$i<10;$i++)
   $lesLignes[$i] = $i * $table;
echo json_encode($lesLignes);
?>
