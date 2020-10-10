<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
	<title>Document</title>
</head>
<style>



</style>
<body>
	
		<?php include("common/header_navbar.php"); ?>

		
	


<script type="text/javascript">
	window.addEventListener("scroll",function () {
		const navbar= document.querySelector(".navbar");
		console.log(navbar);
		navbar.classList.toggle("sticky", window.scrollY>0);
	})

</script>
</body>
</html>