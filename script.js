$(document).ready(function(){

   $("button").click(function()
    {
	  $.post("index.php",$("#meal").serialize()).done 
	      ( 
		    function() {
			   $("body").append("New Recipe");
			}
		  )
	  return false;
	})
})