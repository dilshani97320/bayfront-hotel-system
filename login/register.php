<?php
session_start(); // Right at the top of your script
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <h1>You are successfuly create account</h1>

 <?php 

   
      if($_SESSION['signup']==true)
      { 
        echo $_SESSION['sessionname'];
       
      }

?>
 

</body>
</html>