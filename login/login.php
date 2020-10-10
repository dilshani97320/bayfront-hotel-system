
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
	<h1>You are successfuly logged in</h1>
	 <?php 

	 
  		if($_SESSION['logged']==true)
	    { 
	      echo $_SESSION['sessionUser'];
	     
	    }

?>
</body>
</html>