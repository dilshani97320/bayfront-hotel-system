<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<title></title>
</head>
<style>
	.room-slider {
	display: grid;
	/*  Setup 6 columns of equal size  */
	grid-template-columns: repeat(5, 1fr);
	/*  Setup 6 rows of equal size  */
	grid-template-rows: repeat(5, 1fr);
	align-items: center;
	justify-content: center;
	margin-top: 40px;
}

.room-details {
	grid-column: 2 / 4;
	background: rgba(255, 255, 255, 0.8); 
	grid-row: 3 / 5;
	padding: 25px;
	z-index: 5;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.room-details button{
	padding: 10px;
	margin-top: 5px;
	background-color: #fff;
	border: 1px solid #262626;
	letter-spacing: 1px;
    text-transform: uppercase;
    transition: transform 80ms ease-in;
    float: right;
    margin-left: 5px;
    width: 120px;
}

.room-details span{
	color: #c19b76;
}

.room-details p{
	font-family: 'Barlow Semi Condensed', sans-serif;
	font-weight: bold;
	color: #5a5a5a;
	padding: 5px;
}

.room-details i{
	border-right: 1px solid #262626;
	padding: 0 3px;
}

.room-img {

  grid-column: 3 / 5;
  grid-row: 1 / 6;
  z-index: 2;
  /*background: white;*/
}

.room-img img{
	width: 650px;
	height: 530px;
}

</style>
<body>
	<div class="room-slider">
		<div class="room-details">
			<h1>Room Name</h1>
			<span>room type</span>
			<p>Lorem20 ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, quas quasi nulla aut blanditiis, minima omnis molestiae! Necessitatibus, adipisci nam id quis natus.</p>
			
				<i class="fa fa-wifi" aria-hidden="true"></i>
				<i class="fa fa-cutlery" aria-hidden="true"></i>
				<i class="fa fa-coffee" aria-hidden="true"></i>
				<i class="fa fa-car" aria-hidden="true"></i>
			<br>
			<button>Book now</button>
			<button>view room</button>
			
		</div>
		<div class="room-img">
			<img src="img/room1.jpg" alt="">
		</div>
	</div>
</body>
</html>