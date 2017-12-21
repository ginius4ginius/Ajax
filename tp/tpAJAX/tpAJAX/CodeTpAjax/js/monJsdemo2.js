$(function(){
/*
$("select[name='table']").on("change",//lorsqu'une nouvelle table est sélectionnée"
function(){
      $("#pied").load("import1quart.php",{"table" : $(this).val() });
});


$("select[name='table']").on("change",//lorsqu'une nouvelle table est sélectionnée"
function(){
      $.get("import1quart.php",{"table" : $(this).val() },
      function(data){alert(data)});
});


$("select[name='table']").on("change",//lorsqu'une nouvelle table est sélectionnée"
function(){
      $.get("import1quart.php",{"table" : $(this).val() },
foncRetour);
});

function foncRetour(data){
  alert(data);
}
*/
$("select[name='table']").on("change",//lorsqu'une nouvelle table est sélectionnée"
function(){
      $.get("import1quart.php",{"table" : $(this).val() },
      function(data){$("#pied").html(data)});
});


//fin de la fonction principale.
});
