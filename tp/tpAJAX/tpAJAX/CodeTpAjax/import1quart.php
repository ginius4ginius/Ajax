<?php
 $table = $_REQUEST['table'];
 ?>
<table border="2">;
 <?php
 for($i = 1; $i<10; $i++){
 ?>
  <tr><td><?php echo $i?></td>
       <td><?php echo $table?></td>
       <td><?php echo $table*$i?></td>
  <?php }?>     
 </table>