<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/header-style.css">
	<link rel="stylesheet" type="text/css" href="css/footer-style.css">
	<link rel="stylesheet" type="text/css" href="css/basic-style.css">
	<title>BAYFRONT HOTEL</title>
</head>
<style>
	


/*activity*/
.activity-container {
	display: flex;
	flex-direction: row;
	justify-content: space-between;
	margin: 0 10px;
}

.activity-container .spa h1{
	margin: 0;
}

.activity-container p{
	font-family: 'Barlow Semi Condensed', sans-serif;
	font-weight: bold;
	margin: 40px 0;
	color: #5a5a5a;
	padding: 5px;
}

.activity-container button{
	padding: 10px;
	background-color: #fff;
	border: 1px solid #262626;
	letter-spacing: 1px;
    text-transform: uppercase;
    transition: transform 80ms ease-in;
    margin: 20px 0;
    width: 150px;
}

.activity-container .spa{
	flex: 1;
	flex: 0 0 50%; margin-right: 20px;
	/*border: 3px solid #c19b76;*/
	max-width: 100%;
    min-height: 630px;
    text-align: center;

}

.activity-img{
	overflow: hidden;
}

.activity-container .spa img{
	width: 50%;
	height: 320px;
	border: 1PX solid #fff;
	float: left;
	transition: all 0.3s;
	transform: scale(1);

}

.activity-container .spa img:hover {
    transform: scale(1.1);
}

.activity-container .dining {
	flex: 1;
	/*border: 3px solid #c19b76;*/
	max-width: 100%;
    min-height: 630px;
    text-align: center;

}

.activity-container .dining img{
	width: 50%;
	height: 320px;
	float: left;
	transition: all 0.3s;
	transform: scale(1);

}

.activity-container .dining img:hover {
    transform: scale(1.1);
}

/*second row*/
.activity2-container{
	/*border:3px solid #c19b76;*/
	margin: 10px 10px;
	height: 570px;
	display: flex;
	flex-direction: row;
	justify-content: space-between; 
}

.activity2-container p{
	font-family: 'Barlow Semi Condensed', sans-serif;
	font-weight: bold;
	margin: 40px 0;
	color: #5a5a5a;
	padding: 5px;
}

.activity2-container button{
	padding: 10px;
	background-color: #fff;
	border: 1px solid #262626;
	letter-spacing: 1px;
    text-transform: uppercase;
    transition: transform 80ms ease-in;
    margin: 20px 0;
    width: 150px;
}

.activity2-container .activity2-text{
	flex: 1;
	text-align: center;
	padding: 60px 10px;
}

.activity2-container .activity2-img{
	flex: 2;
	display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-template-rows: repeat(4, 1fr);
}

.activity2-container .activity2-img img{
	width: 100%;
	height: 285px;
	transition: all 0.3s;
	transform: scale(1);
	
}

.activity2-container .activity2-img img:hover {
    transform: scale(1.1);
}

.activity2-container .activity2-img .img5 img{
	width: 100%;
	height: 570px;
	
}

.activity2-container .activity2-img .img1{
	margin: 0;
	overflow: hidden;
	grid-column: 1;
  	grid-row: 1 / span 2;
 
}

.activity2-container .activity2-img .img2{
	margin: 0;
	overflow: hidden;
	grid-row: 3 /span 4;
  	grid-column: 1;
  
}
.activity2-container .activity2-img .img3{
	margin: 0;
		overflow: hidden;

	grid-row: 1 /span 2;
  grid-column: 2;

}
.activity2-container .activity2-img .img4{
	margin: 0;
	overflow: hidden;
	grid-row: 3 /span 4;
  	grid-column: 2;

}

.activity2-container .activity2-img .img5{
	margin: 0;
	overflow: hidden;
	grid-row: 1 /span 4;
  	grid-column: 3;

}
	
</style>
<body>
	 <?php include("common/header-home.php"); ?>
	 <?php include("common/room-slider.php"); ?>

	 <div class="activity-container">
		<div class="spa">
			<div class="activity-img">
				<img src="img/yoga1.jpg" alt="">
				<img src="img/yoga2.png" alt="">
			</div>
			<br>
			<div>
				<h1>SPA & YOGA</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt autem, numquam, eligendi veniam dignissimos sunt. Repellendus, cum perspiciatis impedit, cumque debitis vero odit quas commodi aspernatur blanditiis, voluptatibus illum ipsum. ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, quas quasi nulla aut blanditiis, minima omnis molestiae! Necessitatibus, adipisci nam id quis natus, adipisci nam id quis natus adipisci nam id quis natus, adipisci nam id quis natus.</p>
			<button>Find out more</button>
			</div>
		</div>
		<div class="dining">
			<div>
				<h1>DINING</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore vero natus, esse dolores id sit beatae repudiandae? Ea molestias quo similique accusamus minima est explicabo commodi, praesentium temporibus dolore cumque. ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, quas quasi nulla aut blanditiis, minima omnis molestiae! Necessitatibus, adipisci nam id quis natus, adipisci nam id quis natusadipisci nam id quis natus, adipisci nam id quis natus.</p>
			<button>Find out more</button>
			</div>
			<br>
			<div class="activity-img">
				
			<img src="img/dining1.jpg" alt="">
			<img src="img/dining2.jpg" alt="">
			</div>
		</div>
	</div>

	<div class="activity2-container">

		<dev class="activity2-text">
			<h1>EXPERIENCE <br>BAYFRONT WELIGAMA</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora ad modi recusandae sint reiciendis officia libero, nostrum enim numquam amet velit! Inventore autem consequuntur expedita facere laborum repudiandae facilis quidem voluptates impedit unde nulla explicabo atque, consequatur. Sit culpa aliquam quo, itaque magni ad alias maiores ex officiis, quibusdam at ipsum earum molestias provident quis nostrum blanditiis repellendus ea incidunt consequuntur iste modi dolor nulla rerum. Numquam eius quas quaerat, tempora a excepturi ut accusamus.</p>	
			<button>Find out more</button>
		</dev>

		<div class="activity2-img">
			<div class="img1">
				<img src="img/act1.jpg" alt="" class="img1">
			</div>
			<div class="img2">
				<img src="img/act2.jpg" alt="" class="img1">
			</div>
			<div class="img3">
				<img src="img/act3.jpg" alt="" class="img1">
			</div>
			<div class="img4">
				<img src="img/act4.jpg" alt="" class="img1">
			</div>
			<div class="img5">
				<img src="img/act5.jpg" alt="" class="img1">
			</div>
		</div>
	</div>

	 <?php include("common/surf-block.php"); ?>
	 <?php include("common/footer.php"); ?>
</body>
</html>