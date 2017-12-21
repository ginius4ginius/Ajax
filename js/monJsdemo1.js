$(function(){
  /*
//load après un click
    $("#section1").on("click",
  function(){
          $("#section1").load("import.html");
  });

//load après un click
  $("#section2").on("click",
function(){
    $("#section2").load("import.html");
});

$("#envoyer").on("click",
function(){
  $("#sectionnom").load("import1bis.php",
  {"nom" : $("#nom").val() });
});


$("input#plat").on("click",
function(){
      $("#pied").load("import1ter.php",{"plat" : $(this).val()});
});

$("select[name='arrondissements']").on("change",//lorsqu'une nouvelle table est sélectionnée"
function(){
      $.get("etablissement.php",{"arrondissements" : $(this).val() },
      function(data){$("#pied").html(data)});
});
*/
$("select[name='arrondissements']").on("change",//lorsqu'une nouvelle table est sélectionnée"
function(){
      $.get("etablissement.php",{"arrondissements" : $(this).val() },
      function(data){$("#detail").html(data)});
});



}); // fin fonction principale
