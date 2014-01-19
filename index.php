<!DOCTYPE html>
<html>
  <head>
    <link href="style.css" rel="stylesheet" type="text/css"/>
  </head>
  <body>
     <h1>Recipe App </h1>
  </body>
</html>
<?php
   
  try{
      $db= new PDO("mysql:host=localhost");
  }
  catch(PDOExvetption $e){
  
    echo "Unable to connect to database";
  }
?>