<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/header-style.css">
	<link rel="stylesheet" type="text/css" href="css/footer-style.css">
	<link rel="stylesheet" type="text/css" href="css/basic-style.css">
	<title>Document</title>
</head>
<style>
	.slidecontainer {
  position: relative;
  overflow: hidden;
  margin:  0;
  width: 100%;
  height: 500px;
}

.image {
	object-fit: cover;
  position: absolute;
  opacity: 1;
  min-width: 100%;
  height: 120%;
  transition: opacity 1s ease-in-out;
  z-index: -1;
  -webkit-animation: zoom 40s; /* Chrome, Safari, Opera */
  animation: zoom 50s alternate;
  
}


/* Chrome, Safari, Opera */
@-webkit-keyframes zoom {
    from {
    	-webkit-transform: scale(1,1);
    }
    to {
    	-webkit-transform: scale(1.2,1.2);
    }
}

/* Standard syntax */
@keyframes zoom {
   from {
        transform: scale(1,1);
   }
   to {
        transform: scale(1.5,1.5);
   }
}

.bottom-left {
  position: absolute;
  bottom: 8px;
  left: 16px;
  font-size: 32px;
}
.bottom-left h1{
	color: #fff;
	text-shadow: 2px 2px #000;
	letter-spacing: 1px;
	font-weight: 600px;
	text-transform: capitalize;
}

	.headImg {
		margin: 50px ;
		width: 1400px;	
		display: flex;
		flex-direction: row;
		justify-content: space-between;
	}

	.headImg .first {
		
		flex: 2;
		margin-left: 50px;
		letter-spacing: 1px;
		font-weight: 500;

	}

	.headImg .second  {
		flex: 1;
		margin-left: 50px;
		
	}
	.headImg .second img{
		width: 500px;
		object-fit: cover;
	}
</style>
<body>

	<?php include("common/active.php"); ?>

	<?php 
		if(isset($_GET['article'])) {
			switch ($_GET['article']) {
				case '1':
	?>
		<div class="slidecontainer">
			<img class="image" src="img/post4.jpg" alt="beach side city view">
		 	<div class="bottom-left">
		 		<h1>The best turtle hatchery in Sri Lanka</h1>
		 	</div>
		</div>
		<div class="headImg">
			<div class="first">
			<i class="fa fa-heart" aria-hidden="true"></i>  <?php echo(rand(10,50));?>
			<i class="fa fa-eye" aria-hidden="true"></i> <?php echo(rand(10,100));?>
			<p class="">Lorem psum dolor sit amet consectetur adipisicing elit. Minima neque illo consectetur velit sint, necessitatibus, ipsum temporibus earum quod esse doloremque natus magni. Saepe, pariatur. Earum beatae, sit id pariatur? Get behind the wheel of the M4 and prepare for explosive performance and the M division’s renowned handling capabilities. Power comes from a 425-hp twin-turbo inline six-cylinder, mated to either a six-speed manual or a paddle-shifted seven-speed automatic and rear-wheel drive. For the ultimate M4, the Competition package makes 444 hp, with forged 20-inch wheels from the M4 GTS. Offered as a coupe or convertible, the M4 lives up to the legendary performance of the M cars that came before it.</p>	
			</div>
			<div class="second">
				<?php include("common/activity-catogery.php"); ?>
				 
			</div>
			
		</div>

	<?php
					break;
				case '0':
	?>

		<div class="slidecontainer">
			<img class="image" src="img/post0.jpg" alt="beach side city view">
		 	<div class="bottom-left">
		 		<h1>Spa & Yoga</h1>
		 	</div>
		</div>
		<div class="headImg">
			<div class="first">
			<i class="fa fa-heart" aria-hidden="true"></i>  <?php echo(rand(10,50));?>
			<i class="fa fa-eye" aria-hidden="true"></i> <?php echo(rand(10,100));?>
			<p class="">Lorem psum dolor sit amet consectetur adipisicing elit. Minima neque illo consectetur velit sint, necessitatibus, ipsum temporibus earum quod esse doloremque natus magni. Saepe, pariatur. Earum beatae, sit id pariatur? Get behind the wheel of the M4 and prepare for explosive performance and the M division’s renowned handling capabilities. Power comes from a 425-hp twin-turbo inline six-cylinder, mated to either a six-speed manual or a paddle-shifted seven-speed automatic and rear-wheel drive. For the ultimate M4, the Competition package makes 444 hp, with forged 20-inch wheels from the M4 GTS. Offered as a coupe or convertible, the M4 lives up to the legendary performance of the M cars that came before it.</p>	
			</div>
			<div class="second">
				<?php include("common/activity-catogery.php"); ?>
				 
				
			</div>
			
		</div>

     <?php 
			break;
			case '2':
	?>
		<div class="slidecontainer">
			<img class="image" src="img/post3.jpg" alt="beach side city view">
		 	<div class="bottom-left">
		 		<h1>White Water Rafting</h1>
		 	</div>
		</div>
		<div class="headImg">
			<div class="first">
			<i class="fa fa-heart" aria-hidden="true"></i>  <?php echo(rand(10,50));?>
			<i class="fa fa-eye" aria-hidden="true"></i> <?php echo(rand(10,100));?>
			<p class="">Lorem psum dolor sit amet consectetur adipisicing elit. Minima neque illo consectetur velit sint, necessitatibus, ipsum temporibus earum quod esse doloremque natus magni. Saepe, pariatur. Earum beatae, sit id pariatur? Get behind the wheel of the M4 and prepare for explosive performance and the M division’s renowned handling capabilities. Power comes from a 425-hp twin-turbo inline six-cylinder, mated to either a six-speed manual or a paddle-shifted seven-speed automatic and rear-wheel drive. For the ultimate M4, the Competition package makes 444 hp, with forged 20-inch wheels from the M4 GTS. Offered as a coupe or convertible, the M4 lives up to the legendary performance of the M cars that came before it.</p>	
			</div>
			<div class="second">
				<?php include("common/activity-catogery.php"); ?>
				 
			</div>
			
		</div>

	<?php 
			break;
			case '4':
	?>
		<div class="slidecontainer">
			<img class="image" src="img/post2.jpg" alt="beach side city view">
		 	<div class="bottom-left">
		 		<h1>Rural Bike Ride</h1>
		 	</div>
		</div>
		<div class="headImg">
			<div class="first">
			<i class="fa fa-heart" aria-hidden="true"></i>  <?php echo(rand(10,50));?>
			<i class="fa fa-eye" aria-hidden="true"></i> <?php echo(rand(10,100));?>
			<p class="">Lorem psum dolor sit amet consectetur adipisicing elit. Minima neque illo consectetur velit sint, necessitatibus, ipsum temporibus earum quod esse doloremque natus magni. Saepe, pariatur. Earum beatae, sit id pariatur? Get behind the wheel of the M4 and prepare for explosive performance and the M division’s renowned handling capabilities. Power comes from a 425-hp twin-turbo inline six-cylinder, mated to either a six-speed manual or a paddle-shifted seven-speed automatic and rear-wheel drive. For the ultimate M4, the Competition package makes 444 hp, with forged 20-inch wheels from the M4 GTS. Offered as a coupe or convertible, the M4 lives up to the legendary performance of the M cars that came before it.</p>	
			</div>
			<div class="second">
				<?php include("common/activity-catogery.php"); ?>
				 
			</div>
			
		</div>
		<?php 
			break;
			case '5':
	?>
		<div class="slidecontainer">
			<img class="image" src="img/post5.jpg" alt="beach side city view">
		 	<div class="bottom-left">
		 		<h1>Sea Kayaking</h1>
		 	</div>
		</div>
		<div class="headImg">
			<div class="first">
			<i class="fa fa-heart" aria-hidden="true"></i>  <?php echo(rand(10,50));?>
			<i class="fa fa-eye" aria-hidden="true"></i> <?php echo(rand(10,100));?>
			<p class="">Lorem psum dolor sit amet consectetur adipisicing elit. Minima neque illo consectetur velit sint, necessitatibus, ipsum temporibus earum quod esse doloremque natus magni. Saepe, pariatur. Earum beatae, sit id pariatur? Get behind the wheel of the M4 and prepare for explosive performance and the M division’s renowned handling capabilities. Power comes from a 425-hp twin-turbo inline six-cylinder, mated to either a six-speed manual or a paddle-shifted seven-speed automatic and rear-wheel drive. For the ultimate M4, the Competition package makes 444 hp, with forged 20-inch wheels from the M4 GTS. Offered as a coupe or convertible, the M4 lives up to the legendary performance of the M cars that came before it.</p>	
			</div>
			<div class="second">
				<?php include("common/activity-catogery.php"); ?>
				 
			</div>
			
		</div>
	<?php 
			break;
			case '6':
	?>
		<div class="slidecontainer">
			<img class="image" src="img/post7.jpg" alt="beach side city view">
		 	<div class="bottom-left">
		 		<h1>Blue whale watching in Sri Lanka</h1>
		 	</div>
		</div>
		<div class="headImg">
			<div class="first">
			<i class="fa fa-heart" aria-hidden="true"></i>  <?php echo(rand(10,50));?>
			<i class="fa fa-eye" aria-hidden="true"></i> <?php echo(rand(10,100));?>
			<p class="">Lorem psum dolor sit amet consectetur adipisicing elit. Minima neque illo consectetur velit sint, necessitatibus, ipsum temporibus earum quod esse doloremque natus magni. Saepe, pariatur. Earum beatae, sit id pariatur? Get behind the wheel of the M4 and prepare for explosive performance and the M division’s renowned handling capabilities. Power comes from a 425-hp twin-turbo inline six-cylinder, mated to either a six-speed manual or a paddle-shifted seven-speed automatic and rear-wheel drive. For the ultimate M4, the Competition package makes 444 hp, with forged 20-inch wheels from the M4 GTS. Offered as a coupe or convertible, the M4 lives up to the legendary performance of the M cars that came before it.</p>	
			</div>
			<div class="second">
				<?php include("common/activity-catogery.php"); ?>
				 
				
			</div>
			
		</div>

	<?php 
			break;
			case '7':
	?>
		<div class="slidecontainer">
			<img class="image" src="img/post8.jpg" alt="beach side city view">
		 	<div class="bottom-left">
		 		<h1>World's Best Coral Reefs for Scuba Diving</h1>
		 	</div>
		</div>
		<div class="headImg">
			<div class="first">
			<i class="fa fa-heart" aria-hidden="true"></i>  <?php echo(rand(10,50));?>
			<i class="fa fa-eye" aria-hidden="true"></i> <?php echo(rand(10,100));?>
			<p class="">Lorem psum dolor sit amet consectetur adipisicing elit. Minima neque illo consectetur velit sint, necessitatibus, ipsum temporibus earum quod esse doloremque natus magni. Saepe, pariatur. Earum beatae, sit id pariatur? Get behind the wheel of the M4 and prepare for explosive performance and the M division’s renowned handling capabilities. Power comes from a 425-hp twin-turbo inline six-cylinder, mated to either a six-speed manual or a paddle-shifted seven-speed automatic and rear-wheel drive. For the ultimate M4, the Competition package makes 444 hp, with forged 20-inch wheels from the M4 GTS. Offered as a coupe or convertible, the M4 lives up to the legendary performance of the M cars that came before it.</p>	
			</div>
			<div class="second">
				<?php include("common/activity-catogery.php"); ?>
				 
				
			</div>
			
		</div>

	<?php 
			break;
			case '8':
	?>
		<div class="slidecontainer">
			<img class="image" src="img/post8-1.jpg" alt="beach side city view">
		 	<div class="bottom-left">
		 		<h1>Most Scenic Train Ride in Sri Lanka</h1>
		 	</div>
		</div>
		<div class="headImg">
			<div class="first">
			<i class="fa fa-heart" aria-hidden="true"></i>  <?php echo(rand(10,50));?>
			<i class="fa fa-eye" aria-hidden="true"></i> <?php echo(rand(10,100));?>
			<p class="">Lorem psum dolor sit amet consectetur adipisicing elit. Minima neque illo consectetur velit sint, necessitatibus, ipsum temporibus earum quod esse doloremque natus magni. Saepe, pariatur. Earum beatae, sit id pariatur? Get behind the wheel of the M4 and prepare for explosive performance and the M division’s renowned handling capabilities. Power comes from a 425-hp twin-turbo inline six-cylinder, mated to either a six-speed manual or a paddle-shifted seven-speed automatic and rear-wheel drive. For the ultimate M4, the Competition package makes 444 hp, with forged 20-inch wheels from the M4 GTS. Offered as a coupe or convertible, the M4 lives up to the legendary performance of the M cars that came before it.</p>	
			</div>
			<div class="second">
				<?php include("common/activity-catogery.php"); ?>
				 
				
			</div>
			
		</div>

	<?php 
			break;
			case '9':
	?>
		<div class="slidecontainer">
			<img class="image" src="img/act2.jpg" alt="beach side city view">
		 	<div class="bottom-left">
		 		<h1>The Best Hiking and Trekking Trails in Sri Lanka</h1>
		 	</div>
		</div>
		<div class="headImg">
			<div class="first">
			<i class="fa fa-heart" aria-hidden="true"></i>  <?php echo(rand(10,50));?>
			<i class="fa fa-eye" aria-hidden="true"></i> <?php echo(rand(10,100));?>
			<p class="">Lorem psum dolor sit amet consectetur adipisicing elit. Minima neque illo consectetur velit sint, necessitatibus, ipsum temporibus earum quod esse doloremque natus magni. Saepe, pariatur. Earum beatae, sit id pariatur? Get behind the wheel of the M4 and prepare for explosive performance and the M division’s renowned handling capabilities. Power comes from a 425-hp twin-turbo inline six-cylinder, mated to either a six-speed manual or a paddle-shifted seven-speed automatic and rear-wheel drive. For the ultimate M4, the Competition package makes 444 hp, with forged 20-inch wheels from the M4 GTS. Offered as a coupe or convertible, the M4 lives up to the legendary performance of the M cars that came before it.</p>	
			</div>
			<div class="second">
				<?php include("common/activity-catogery.php"); ?>
				 
				
			</div>
			
		</div>

	<?php 
			break;
			case '10':
	?>
		<div class="slidecontainer">
			<img class="image" src="img/post8-2.jpg" alt="beach side city view">
		 	<div class="bottom-left">
		 		<h1>Swinging On a Rope Thalpe</h1>
		 	</div>
		</div>
		<div class="headImg">
			<div class="first">
			<i class="fa fa-heart" aria-hidden="true"></i>  <?php echo(rand(10,50));?>
			<i class="fa fa-eye" aria-hidden="true"></i> <?php echo(rand(10,100));?>
			<p class="">Lorem psum dolor sit amet consectetur adipisicing elit. Minima neque illo consectetur velit sint, necessitatibus, ipsum temporibus earum quod esse doloremque natus magni. Saepe, pariatur. Earum beatae, sit id pariatur? Get behind the wheel of the M4 and prepare for explosive performance and the M division’s renowned handling capabilities. Power comes from a 425-hp twin-turbo inline six-cylinder, mated to either a six-speed manual or a paddle-shifted seven-speed automatic and rear-wheel drive. For the ultimate M4, the Competition package makes 444 hp, with forged 20-inch wheels from the M4 GTS. Offered as a coupe or convertible, the M4 lives up to the legendary performance of the M cars that came before it.</p>	
			</div>
			<div class="second">
				<?php include("common/activity-catogery.php"); ?>
				 
				
			</div>
			
		</div>

	<?php 
			break;
			case '11':
	?>
		<div class="slidecontainer">
			<img class="image" src="img/post1.jpg" alt="beach side city view">
		 	<div class="bottom-left">
		 		<h1>Visits to Historic Sites and points of interest</h1>
		 	</div>
		</div>
		<div class="headImg">
			<div class="first">
			<i class="fa fa-heart" aria-hidden="true"></i>  <?php echo(rand(10,50));?>
			<i class="fa fa-eye" aria-hidden="true"></i> <?php echo(rand(10,100));?>
			<p class="">Lorem psum dolor sit amet consectetur adipisicing elit. Minima neque illo consectetur velit sint, necessitatibus, ipsum temporibus earum quod esse doloremque natus magni. Saepe, pariatur. Earum beatae, sit id pariatur? Get behind the wheel of the M4 and prepare for explosive performance and the M division’s renowned handling capabilities. Power comes from a 425-hp twin-turbo inline six-cylinder, mated to either a six-speed manual or a paddle-shifted seven-speed automatic and rear-wheel drive. For the ultimate M4, the Competition package makes 444 hp, with forged 20-inch wheels from the M4 GTS. Offered as a coupe or convertible, the M4 lives up to the legendary performance of the M cars that came before it.</p>	
			</div>
			<div class="second">
				<?php include("common/activity-catogery.php"); ?>
				 
				
			</div>
			
		</div>
	<?php
					break;
				default:
					# code...
					break;
			}
		} else {
			echo "not set";
		}
	?>
	 <?php include("common/room-slider.php"); ?>
	<?php include("common/footer.php"); ?>
</body>
</html>