$(function(){
    $("#section1").on("click",
	   function(){
		   $("#section1").load("import.html");
	   });
    
    
   $("#envoyer").on("click",
	   function(){
		   $("#sectionnom").load("import1bis.php",{"nom":$("#nom").val()});
	   });
	   
	   
     
   $("#input#plat").on("click",
	   function(){
		   $("#pied").load("import1ter.php",{"plat" : $(this).val()});
	   });
	   
    
    
    
    
    
    
    
    
    
    
    
}); // fin fonction principale