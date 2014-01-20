<!DOCTYPE html>
<html>
  <head>
    <link href="style.css" rel="stylesheet" type="text/css"/>
	 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="script.js"> </script>
  </head>
  <body>
     <h1>Recipe App </h1>

<div class='container'>
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

<form>
 <label>Meal Type</label>
  <select> 
    <option value='1'>Starter </option>
    <option value='2'>Main Course</option>
    <option value='3'>Dessert </option>
  </select>
  <br/>
  <input type='submit' value='Find'/>
</form>
<button>Update</button>

</div>

  </body>
</html>