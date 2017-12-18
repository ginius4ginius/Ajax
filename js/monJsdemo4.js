$(function(){

$("select[name='table']").on("change",
function(){
      $.get("retourJson.php",{"table" : $(this).val() },
    foncRetour,"json");
});

function foncRetour(data){
  $("#tab").empty();//pour vider la liste
for(var key in data)
$("#tab").append("<tr><td>"+key+"</td><td>"+data[key]+"</td></tr>");
}


  }); // fin fonction principale
