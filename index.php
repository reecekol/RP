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
      $db= new PDO("mysql:host=localhost;dbname=RP",'root','');
  }
  catch(PDOException $e){
  
    echo "Unable to connect to database";
  }
  
  
  
  
  $result=$db->query('SELECT * FROM recipes');
  
  while($row=$result->fetch())
  {
    echo "<div class='row'>". $row['description']. " ". $row['chef']."<br/><div>";
  
  }
?>

<button>Update</button>