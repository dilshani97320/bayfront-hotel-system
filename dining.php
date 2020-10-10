<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/header-style.css">
	<link rel="stylesheet" type="text/css" href="css/footer-style.css">
	<link rel="stylesheet" type="text/css" href="css/basic-style.css">
	<title>Restuarant</title>
	
</head>
<style>
	
@import url('https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap');


.boxes{
	margin: 10px auto;
	padding: 10px;
	height: 550px;
	display: grid;
	width: 1400px;
	/*  Setup 6 columns of equal size  */
	grid-template-columns: repeat(6, 1fr);
	/*  Setup 6 rows of equal size  */
	grid-template-rows: repeat(3, 1fr);
	align-items: center;
	justify-content: center;
	
}
.boxes .title{
	grid-column: 1/ span 1;
  	grid-row: 1 span 1;
}
.boxes .details{
	grid-column: 1/ span 4;
  	grid-row: 2/ span 1;
}
.boxes .img1{
	grid-column: 1/span 1 ;
  	grid-row: 3/span 1;
}
.boxes .img2{
	grid-column: 2/span 1;
  	grid-row: 3/span 1;
}
.boxes .img3{
	grid-column: 3/span 1 ;
  	grid-row: 3/span 1;
}
.boxes .img4{
	grid-column: 4/span 1;
  	grid-row: 3/span 1;
}
.boxes .img5{
	overflow: hidden;
	grid-column:  5/ span 3;
  	grid-row: 1/ span 3;
}

.boxes .box{
	float: left;
	text-align: left;
	width: 45%;
	padding: 10px;

}

.boxes .galleryimg img{
  width:200px;
  height: 200px;
  /*padding: 5px;*/
  object-fit: cover;
  
}
.boxes .img5 img{
  width:400px;
  height: 525px;
  object-fit: cover;
}
.title h5{
	margin-top: 40px;
	font-size: 30px;
}
#boxes2{
	margin-top: 20px;
	padding: 10px;
}

h1.text{
	position: absolute;
	/*left: 500px;*/
	text-align: center;
	/*top: 100px;*/
	font-size: 35px;

}



/*hover food block*/
.dineset{
	display: flex;
     justify-content: center;
     flex-wrap: wrap;
     margin: 50px auto;
     width: 1400px;	
}
.dineset .center{
	height: 460px;
}
.dineset-block {
  font-family: 'Raleway', Arial, sans-serif;
  position: relative;
  overflow: hidden;
  margin: 30px;
  min-width: 260px;
  max-width: 355px;
  height: 425px;
  width: 100%;
  background: red;
  text-align: left;
  color: #ffffff;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
  font-size: 16px;
}
.dineset-block * {
  box-sizing: border-box;
  transition: all 0.3s ease-out;
}
.dineset-block > img,
.dineset-block .image img {
  transform: scale(1.05);
  max-width: 100%;
}
.dineset-block > img {
  vertical-align: top;
  position: relative;
  filter: blur(1px);
  opacity: 0.6;
}
.dineset-block figcaption,
.dineset-block .image {
  /*-webkit-transition-delay: 0.2s;*/
  transition-delay: 0.2s;
}
.dineset-block .image {
  position: absolute;
  top: 0;
  bottom: 25%;
  right: 0;
  left: 0;
  overflow: hidden;
  box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1), 0px 1px 0 rgba(255, 255, 255, 0.2);
}
.dineset-block .image img {
  position: absolute;
  top: 0;
}
.dineset-block figcaption {
  position: absolute;
  top: 75%;
  bottom: 46px;
  left: 20px;
  right: 20px;
  border-bottom: 2px solid #ffffff;
  padding-top: 20px;
  z-index: 1;
}
.dineset-block h3,
.dineset-block p {
	letter-spacing: 2px;
  margin: 0;
}
.dineset-block h3 {
  font-weight: 700;
  margin-bottom: 5px;
  text-transform: uppercase;
}
.dineset-block p {
  font-size: 0.9em;
  letter-spacing: 1px;
  font-weight: 400;
  opacity: 0;
}
.dineset-block .read-more {
  display: block;
  opacity: 0;
  transform: translateX(-20px);
  line-height: 48px;
  text-transform: uppercase;
  letter-spacing: 1px;
  padding: 0 20px;
  color: #ffffff;
  right: 0;
  bottom: 0;
  font-weight: 500;
  position: absolute;
}
.dineset-block a {
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  position: absolute;
  z-index: 1;
}
.dineset-block:hover .read-more,
.dineset-block.hover .read-more,
.dineset-block:hover figcaption,
.dineset-block.hover figcaption {
  opacity: 1;
  transform: translateX(0px);
}
.dineset-block:hover figcaption,
.dineset-block.hover figcaption,
.dineset-block:hover .image,
.dineset-block.hover .image {
  transition-delay: 0s;
}
.dineset-block:hover figcaption,
.dineset-block.hover figcaption {
  top: 50%;
}
.dineset-block:hover .image,
.dineset-block.hover .image {
  bottom: 50%;
}
.dineset-block:hover p,
.dineset-block.hover p {
  opacity: 1;
  transition-delay: 0.2s;
}


/*New Section*/

.wrapper{
	width: 1200px;
	margin: 10px auto;
}

.title{
	text-align: center;
	margin-top: 60px;*
}

.title h4{
	
	font-size: 36px;
	position: relative;
	display: inline-block;
	padding-bottom: 10px;
	text-transform: uppercase;
}

/*.title h4 span{
	display: block;
	font-size: 18px;
	font-style: italic;
	margin-bottom: -10px;
}*/

/*.title h4:before{
	position: absolute;
	content: "";
	width: 100px;
	height: 2px;
	background-color: #ff7720;
	bottom: 0;
	left: 50%;
	transform: translateX(-50%);
}*/

.menu{
	display: flex;
	flex-wrap: wrap;
	justify-content: space-between;
}

.single-menu{
	flex-basis:520px;
	margin-bottom: 40px;
	padding-bottom: 40px;
	border-bottom: 1px solid #ddd;
}

.single-menu:nth-child(5), .single-menu:nth-child(6){
  border-bottom:0;
}
.single-menu{
  display:flex;
  flex-direction:row;
  align-items:center;
}

.single-menu:hover img{
  border-radius:0;
}

.single-menu img{
  max-width:100px;
  height: 100px;
  margin-right:30px;
  border-radius:50%;
  border:1px solid #ddd;
  padding:3px;
  transition:.5s;
}

.single-menu h4{
  text-transform:uppercase;
  font-size:20px;
  border-bottom: 2px dashed #333;
  margin-bottom:5px;
  padding-bottom:5px;
}

.single-menu h4 span{
  float:right;
  color:#ff7720;
  font-style:italic;
}

.line-style { 
  border: 0; 
  height: 3px; 
  background-image: -webkit-linear-gradient(left, #f0f0f0, #ff7720, #f0f0f0);
  background-image: -moz-linear-gradient(left, #f0f0f0, #ff7720, #f0f0f0);
  background-image: -ms-linear-gradient(left, #f0f0f0, #ff7720, #f0f0f0);
  background-image: -o-linear-gradient(left, #f0f0f0, #ff7720, #f0f0f0); 
}






	.pimg1{
		position: relative;
		opacity: 0.9;
		background-position: center;
		background-size: cover;
		background-repeat: no-repeat;
		background-attachment: fixed;
	}
	.pimg1{
		background-image: url('1.jpg');
		min-height: 550px;
	}
/*	.pimg2{
		background-image: url('2.jpg');
		min-height: 100%;
	}
	.pimg3{
		background-image: url('3.jpg');
		min-height: 100%;
	}
	.section{
		padding: 50px 80px;
		text-align: center;
	}
	.section-light{
		background-color: #f4f4f4;
		color: #666;
	}
	.section-dark{
		background-color: #282e34;
		color: #ddd;
	}*/
	.ptext{
	position: absolute;
	top: 50%;
	width: 100%;
	text-align: center;
	color: #fff;
	font-size: 27px;
	letter-spacing: 2px;
	text-transform: uppercase;
	
	}
	.ptext span{
		font-family: 'Kaushan Script', cursive;
	}





figure.drinks {
  font-family: 'Raleway', Arial, sans-serif;
  position: relative;
  overflow: hidden;
  margin: 30px ;
  min-width: 230px;
  max-width: 350px;
  height: 400px;
  width: 100%;
  background: #1a1a1a;
  color: #ffffff;
  text-align: center;
  border-radius: 8px;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
}

figure.drinks * {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all 0.35s cubic-bezier(0.25, 0.5, 0.5, 0.9);
  transition: all 0.35s cubic-bezier(0.25, 0.5, 0.5, 0.9);
}
figure.drinks .image {
  background-color: #000000;
  width: 100%;
  overflow: hidden;
}
/*figure.drinks .image:after {
  background-color: rgba(0, 0, 0, 0.85);
  position: absolute;
  content: '';
  top: 0;
  right: 0;
  left: 95%;
  bottom: 0;
}*/
figure.drinks img {
  width: 350px;
  vertical-align: top;
  height: 400px;
  object-fit: cover;
}
figure.drinks figcaption {
  position: absolute;
  width: 50%;
  right: 0;
  top: 50%;
  -webkit-transform: translateY(-50%);
  transform: translateY(-50%);
  padding: 10px 25px;
}
figure.drinks h4,
figure.drinks p,
figure.drinks .price {
  margin: 0 0 8px;
}
figure.drinks h3 {
  position: absolute;
  width: 50%;
  top: 10px;
  text-transform: uppercase;
  font-weight: 600;

  color: #ffffff;
  letter-spacing: 1px;
  z-index: 1;
}
figure.drinks p {
  font-size: 13px;
  font-weight: 500;
  line-height: 1.6em;
}
figure.drinks .rating {
  position: absolute;
  width: 50%;
  line-height: 44px;
  color: #ffffff;
  left: 0;
  bottom: 0;
  background-color: rgba(0, 0, 0, 0.3);
}
figure.drinks .price {
  color: #ffffff;
  font-size: 25px;
  opacity: 1;
}
figure.drinks .price s {
  display: inline-block;
  padding: 0 8px 0 0;
  font-size: 22px;
  color: #ff5b03;
}
figure.drinks .add-to-cart  {
  text-decoration: none;
  position: absolute;
  bottom: 0;
  right: 0;
  font-weight: 600;
  width: 50%;
  line-height: 44px;
  font-size: 1em;
  text-transform: uppercase;
  color: #ffffff;
}
figure.drinks:hover img,
figure.drinks.hover img {
  opacity: 0.6;
  transform: scale(1.1);
}
figure.drinks:hover .add-to-cart i{
  color: red;
}
</style>
<body>
    <?php include("common/header-dining.php"); ?>
	<!-- Restuarant part -->
	<div class="boxes">
		<div class="title">
				<h5>Restaurant</h5>
				<hr class="line-style"><br>
		</div>
		<!-- <h1></h1> -->
		<div class="details">
		<div class="box">
			<p class="text">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
		</div>

		<div class="box">
			<p class="text">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
			</p>
		</div>
	    </div>
	  
		<div class="galleryimg img1">
			<img src="img/12.jpg">
			
		</div>
		<div class="galleryimg img2">
			
			<img src="img/4.jpg">
			
		</div>
		<div class="galleryimg img3">
			
			<img src="img/5.jpg">
			
		</div>
		<div class="galleryimg img4">
			
			<img src="img/11.jpg">
		</div>
		<div class="galleryimg i img5">
			<img src="img/2.jpg">
		</div>
	  

	</div>
    <!-- End Restuarant Part -->
		
    <!-- Services Part -->

		<?php include("common/Dining-service-section.php"); ?>
	
	<!-- End Of Services Part -->
    
		<div class="title">
				<h4>Explore Our Menu</h4>
				<hr class="line-style"><br>
		</div>
	
<div class="dineset">
	
	<figure class="dineset-block">
<img src="other/food1.jpeg" alt="" />
  <div class="image"><img src="other/food1.jpeg" alt="pr-sample15" /></div>
  <figcaption>
    <h3>Breakfast</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia magnam sunt iure nemo sint est doloremque blanditiis, maiores. Repellat, vero.</p>
  </figcaption><span class="read-more">
     
    Read More <i class="ion-android-arrow-forward"></i></span>
  <a href="landing3.php?article=1"></a>
</figure>
<figure class="dineset-block center ">
<img src="other/food2.jpg" />
  <div class="image"><img src="other/food2.jpg" /></div>
  <figcaption>
    <h3>Lunch</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe enim dignissimos odit facilis quisquam suscipit totam laboriosam. Labore, harum, fugiat.</p>
  </figcaption><span class="read-more">
     
    Read More <i class="ion-android-arrow-forward"></i></span>
  <a href="landing3.php?article=2"></a>
</figure>
<figure class="dineset-block">
<img src="other/food3.jpg" alt="pr-sample16" />
  <div class="image"><img src="other/food3.jpg" alt="pr-sample16" /></div>
  <figcaption>
    <h3>Dinner</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore unde suscipit eaque nostrum numquam accusamus hic earum perspiciatis maiores dicta?</p>
  </figcaption><span class="read-more">
     
    Read More <i class="ion-android-arrow-forward"></i></span>
  <a href="landing3.php?article=3"></a>
</figure>
</div>



		
	<!-- Menu Part -->
	<div class="pimg1">
		<div class="ptext">
			<span class="boader">Find Your Favourite</span>

		</div>
	</div>
	
<div class="title">
				<h4>Our Specialties</h4>
				<hr class="line-style"><br>
		</div>
	<div class="wrapper">
		
		<div class="menu">
			<div class="single-menu">
				<img src="img/4.jpg">
				<div class="menu-content">
					<h4>Chicken Fried Salad <span>$45</span></h4>
					<p class="text">Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis</p>
				</div>
			</div>

			<div class="single-menu">
				<img src="img/4.jpg">
				<div class="menu-content">
					<h4>Chicken Fried Salad <span>$45</span></h4>
					<p class="text">Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis</p>
				</div>
			</div>

			<div class="single-menu">
				<img src="img/4.jpg">
				<div class="menu-content">
					<h4>Chicken Fried Salad <span>$45</span></h4>
					<p class="text">Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis</p>
				</div>
			</div>

			<div class="single-menu">
				<img src="img/4.jpg">
				<div class="menu-content">
					<h4>Chicken Fried Salad <span>$45</span></h4>
					<p class="text">Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis</p>
				</div>
			</div>
			<div class="single-menu">
				<img src="img/4.jpg">
				<div class="menu-content">
					<h4>Chicken Fried Salad <span>$45</span></h4>
					<p class="text">Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis</p>
				</div>
			</div>
			<div class="single-menu">
				<img src="img/4.jpg">
				<div class="menu-content">
					<h4>Chicken Fried Salad <span>$45</span></h4>
					<p class="text">Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis</p>
				</div>
			</div>

		</div>
	</div>
	<!-- End of Menu Part -->



	<div class="dineset">
		
<figure class="drinks a">
  <h3>Iced Tea Lemonade</h3>
  <div class="image">
    <img src="img/tea2.png" alt="sq-sample6"/>
  </div>
  <!-- <div class="rating"><i class="ion-ios-star"></i><i class="ion-ios-star"></i><i class="ion-ios-star"></i><i class="ion-ios-star"></i><i class="ion-ios-star-outline"></i></div> -->
  <figcaption>
    <p>Bring the litre of water to a boil, remove from heat and add tea leaves. Keep for 3-5 minutes.Adding ginger, lemon and honey will also help to soothe a sore throat.</p>
    <div class="price">
      <s>$24.00</s>$19.00
    </div>
  </figcaption>
  <a href="#" class="add-to-cart"><i class="fa fa-heart" aria-hidden="true"></i></a>
</figure>
<figure class="drinks b">
  <h3> Ceylon Tea</h3>
  <div class="image">
    <img src="img/tea1.jpg" alt="sq-sample17"/>
  </div>
  <figcaption>
    <p>
      Drinking ceylon tea acts as a backup to your immune system and gives it the extra jolt of minerals and antioxidants it needs to help you recover faster. 
    </p>
    <div class="price">
      <s>$18.00</s>$12.00
    </div>
  </figcaption>
  <a href="#" class="add-to-cart"><i class="fa fa-heart" aria-hidden="true"></i></a>
</figure>
<figure class="drinks c">
  <h3> king coconut </h3>
  <div class="image">
    <img src="img/tea3.jpg" alt="sq-sample22"/>
  </div>
  <figcaption>
    <p>  
      Its delicious water is a healthy and refreshing drink, with impressive medicinal, cosmetic, and nutritional contributions.
    </p>
    <div class="price">
      <s>$5.00</s>$3.00
    </div>
  </figcaption>
  <a href="#" class="add-to-cart"><i class="fa fa-heart" aria-hidden="true"></i></a>
</figure>
	</div>




	 <?php include("common/footer.php"); ?>
<br>

	 	


</body>
</html>