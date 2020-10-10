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
        transform: scale(1.2,1.2);
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
	font-weight: 600;
	text-transform: capitalize;
}

.package {
	margin-top: 40px;	
	height: 400px;
	overflow: hidden;
	display: flex;
		flex-direction: row;
		justify-content: space-between;
}
.packImg{
	flex: 1;
}
.package img{
	width: 400px;
	object-fit: cover;
}
.price{
	flex: 1;
	margin-left: 30px;
}
.inline {
	margin-bottom: 20px;
	margin-left: 30px;
	font-size: 14px;
	font-weight: bold;
	color: #7d7d7d;

}


ul.inline li:after{
	display: block;
	content: " ";
	clear: left;
	 border-bottom: 2px dashed #ccc;
	 margin-bottom: 30px;
	 font-weight: 500;
	 font-size: 15px;
}


	.headImg {
		margin: 50px ;
		width: 1400px;	
		font-size: 16px;
		display: flex;

		flex-direction: row;
		justify-content: space-between;
	}

	.headImg .first {
		
		flex: 3;
		letter-spacing: 1px;
		font-weight: 500;

	}
	.headImg .first h3{
		margin: 20px 0;
	}

	.headImg .second  {
		flex: 1;
		margin-left: 50px;
		
	}
	.headImg .second img{
		width: 300px;
		object-fit: cover;
	}



.testimonial-quote blockquote {
  /* Negate theme styles */
  border: 0;
  margin: 0;
  padding: 0;
  background: none;
  color: gray;
  font-family: Georgia, serif;
  font-size: 1.5em;
  font-style: italic;
  line-height: 1.4 !important;
  margin: 0 25px 0;
  position: relative;
  text-shadow: 0 1px #fff;
  z-index: 1;
}



.testimonial-quote blockquote p {
  color: #75808a;
  line-height: 1.4 !important;
}

.testimonial-quote blockquote p:first-child:before { /* quotemarks */
  content: '\201C';
  color: #ff7720;
  font-size: 7.5em;
  font-weight: 700;
  opacity: .3;
  position: absolute;
  top: -.4em;
  left: -.2em;
  text-shadow: none;
  z-index: -300;
}

.testimonial-quote img {
  border: 4px solid #ff7720;
  border-radius: 50%;
  display: block;
  width: 120px;
  height: 120px;
  object-fit: cover;
  position: absolute;
  top: -.3em;
  left: 0;
}

.testimonial-quote cite {
  color: gray;
  margin-top: 10px;
  margin-left: -150px;
  display: block;
  font-size: .8em;
}

.testimonial-quote cite span {
  color: #ff7720;
  font-size: 1em;
  font-style: normal;
  font-weight: 700;
  letter-spacing: 1px;
  text-transform: uppercase;
  text-shadow: 0 1px white;
}

.testimonial-quote {
  position: relative;
  margin: 50px 0;
}

.testimonial-quote .quote-container {
  padding-left: 160px;
}

ul{
  list-style:none;
  list-style-type: square;

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
			<img class="image" src="img/post14.jpg" alt="beach side city view">
		 	<div class="bottom-left">
		 		<h1>Breakfast</h1>
		 	</div>
		</div>
		<div class="headImg">
			<div class="first">
			
			<p class="">The WCL version of the Sri Lankan cookery class – a more hands-on introduction to Sri Lankan food. Guests get to mix their own spices, season their ingredients and cook their own lunch, under the watchful eye and instruction of Chef Ranil. The experience is not a typical “demo” but an interactive learning on how to make some of our favourite and most popular dishes. However, it is safe to say that guest ability behind the stove will not obstruct an exquisite Sri Lankan “rice & curry” lunch from being presented to guests.</p>
			<h3> Traditional Menu</h3>
			
			<div class="package">

				<img src="img/sub11.png" alt="" class="packImg">
				<div class="price">
					<ul class="inline">
				
						<li>Red Rice & Curry</li>
						<li>Milk Rice</li>
						<li>Roti</li>
						<li>Kurakkan Pittu</li>
						<li>String Hoppers</li>
						<li>Parata</li>
					</ul>
				</div>
				
			</div>
			
				  
				    <div class="testimonial-quote group">
				        <img src="img/prof1.jpg">
				        <div class="quote-container">
				            <blockquote>
				                <p>It was an amazing hangout with great ambience and soothing music. And the staff is very friendly and welcoming. A clean and calm place to enjoy a delicious dinner. A great taste for the price you pay. ”</p>
				            </blockquote>  
				            <cite><span>Olivia Williams</span><br>
				                USA
				            </cite>
				        </div>
      
   					</div>
   				
   			
			<h3> Westerns Menu</h3>
			<div class="package">

				<img src="img/sub12.jpg" alt="" class="packImg">
				<div class="price">
					<ul class="inline">
				
						<li> Sausage and Egg Sandwich</li>
						<li>Stuffed Omelet</li>
						<li>Scrambled Eggs</li>
						<li>Ham and Egg Casserole</li>
						<li>Ham and Vegetable</li>
						<li>Fresh Milk</li>
					</ul>
				</div>
				
			</div>
			</div>

			<div class="second">
				<?php include("common/dinning-catogery.php"); ?>

			</div>
			
		</div>

	<?php
					break;
				case '2':
	?>
	<div class="slidecontainer">
			<img class="image" src="img/post15.jpg" alt="beach side city view">
		 	<div class="bottom-left">
		 		<h1>Lunch</h1>
		 	</div>
	</div>
		<div class="headImg">
			<div class="first">
			
			<p class="">The WCL version of the Sri Lankan cookery class – a more hands-on introduction to Sri Lankan food. Guests get to mix their own spices, season their ingredients and cook their own lunch, under the watchful eye and instruction of Chef Ranil. The experience is not a typical “demo” but an interactive learning on how to make some of our favourite and most popular dishes. However, it is safe to say that guest ability behind the stove will not obstruct an exquisite Sri Lankan “rice & curry” lunch from being presented to guests.</p>

			<h3> Traditional Menu</h3>
			
			<div class="package">

				<img src="img/sub13.jpg" alt="" class="packImg">
				<div class="price">
					<ul class="inline">
				
						<li>Red Rice & Curry</li>
						<li>Milk Rice</li>
						<li>Roti</li>
						<li>Kurakkan Pittu</li>
						<li>String Hoppers</li>
						<li>Parata</li>
					</ul>
				</div>
				
			</div>
			
				  
				    <div class="testimonial-quote group">
				        <img src="img/prof2.jpg">
				        <div class="quote-container">
				            <blockquote>
				                <p>Perfect for a perfect day. Recently they open up their at mirissa. Before walking in i was rather concerned about how the relaxed yet sophisticated touch of sea setting. Calm and quiet place with good service. However, the place is actually outside the container facing pool and mirissa sea. Their food menu was limited but food is perfect. Perfect location for catch up with some friends. ”</p>
				            </blockquote>  
				            <cite><span>Olivia Williams</span><br>
				                USA
				            </cite>
				        </div>
      
   					</div>
   				
   			
			<h3> Seafood Menu</h3>
			<div class="package">

				<img src="img/sub14.jpg" alt="" class="packImg">
				<div class="price">
					<ul class="inline">
				
						<li> Sausage and Egg Sandwich</li>
						<li>Stuffed Omelet</li>
						<li>Scrambled Eggs</li>
						<li>Ham and Egg Casserole</li>
						<li>Ham and Vegetable</li>
						<li>Fresh Milk</li>
					</ul>
				</div>
				
			</div>
			<h3> Pasta & Spegatti Menu</h3>
			<div class="package">

				<img src="img/sub15.jpg" alt="" class="packImg">
				<div class="price">
					<ul class="inline">
				
						<li> Sausage and Egg Sandwich</li>
						<li>Stuffed Omelet</li>
						<li>Scrambled Eggs</li>
						<li>Ham and Egg Casserole</li>
						<li>Ham and Vegetable</li>
						<li>Fresh Milk</li>
					</ul>
				</div>
				
			</div>

			</div>

			<div class="second">
				<?php include("common/dinning-catogery.php"); ?>

			</div>
			
		</div>
	<?php
					break;
				case '3':
	?>
	<div class="slidecontainer">
			<img class="image" src="img/post16.jpg" alt="beach side city view">
		 	<div class="bottom-left">
		 		<h1>Dinner</h1>
		 	</div>
	</div>
		<div class="headImg">
			<div class="first">
			
			<p class="">The level 3 lessons are for available for longboarders and shortboarders alike that want to take their surfing to the next level – we’ll match you with the best coach depending on what your expectation of the lesson and preference of board.  Have you been surfing some time, maybe even for a few years but feel stuck in your progression? With the level 3 lessons, we’ll take you out and analyze your surfing to pinpoint what you need to do to progress into becoming a styling longboarder or frothing shortboarder. Our surf teachers will take help you get over any obstacles you have and maximize your progression. We’ll take you to the best suitable surf spot for your level and requirements on the south coast and help you progress in your surfing as well as having a good time together.</p>
			
			<h3>Traditional Menu</h3>
		
			<div class="package">

				<img src="img/sub16.jpg" alt="" class="packImg">
				<div class="price">
					<ul class="inline">
				
						<li> Sausage and Egg Sandwich</li>
						<li>Stuffed Omelet</li>
						<li>Scrambled Eggs</li>
						<li>Ham and Egg Casserole</li>
						<li>Ham and Vegetable</li>
						<li>Fresh Milk</li>
					</ul>
				</div>
				
			</div>

			<div id="kudo-wrap"> 
				  <div class="adj-layer">
				    <!-- <h1>Kudos</h1> -->
				    <div class="testimonial-quote group">
				        <img src="img/prof3.jpg">
				        <div class="quote-container">
				            <blockquote>
				                <p>Such an incredible place, the view is amazing, very good service with very nice waiters. It's a very new restaurant, best place in all Sri Lanka. The food is super good and taste very good with great presentation. The only high standards place in Sri Lanka. Unique place like this in Mirissa, it worth to go for a good gastronomy diner.  ”</p>
				            </blockquote>  
				            <cite><span>Jan Baby</span><br>
				                RMT<br>
				                TLC Medical Massage
				            </cite>
				        </div>
      
   					</div>
   				</div>
   			</div>
   			<h3>Soup Menu</h3>
			<div class="package">

				<img src="img/sub18.jpg" alt="" class="packImg">
				<div class="price">
					<ul class="inline">
				
						<li> Sausage and Egg Sandwich</li>
						<li>Stuffed Omelet</li>
						<li>Scrambled Eggs</li>
						<li>Ham and Egg Casserole</li>
						<li>Ham and Vegetable</li>
						<li>Fresh Milk</li>
					</ul>
				</div>
				
			</div>

			<h3>Kottu Menu</h3>
			<div class="package">

				<img src="img/sub19.jpg" alt="" class="packImg">
				<div class="price">
					<ul class="inline">
				
						<li> Sausage and Egg Sandwich</li>
						<li>Stuffed Omelet</li>
						<li>Scrambled Eggs</li>
						<li>Ham and Egg Casserole</li>
						<li>Ham and Vegetable</li>
						<li>Fresh Milk</li>
					</ul>
				</div>
				
			</div>
				
			</div>
			
			<div class="second">
				<?php include("common/dinning-catogery.php"); ?>
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
	<?php include("common/footer.php"); ?>

	
</body>
</html>