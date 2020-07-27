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
	

.boxes{
	margin-top: 20px;
	padding: 10px;
	height: 550px;
	display: grid;
	/*  Setup 6 columns of equal size  */
	grid-template-columns: repeat(9, 1fr);
	/*  Setup 6 rows of equal size  */
	grid-template-rows: repeat(3, 1fr);
	align-items: center;
	justify-content: center;
	
}
.boxes .title{
	grid-column: 2;
  	grid-row: 1;
}
.boxes .details{
	grid-column: 2 / span 4;
  	grid-row: 2;
}
.boxes .img1{
	grid-column: 2 ;
  	grid-row: 3;
}
.boxes .img2{
	grid-column: 3;
  	grid-row: 3;
}
.boxes .img3{
	grid-column: 4 ;
  	grid-row: 3;
}
.boxes .img4{
	grid-column: 5;
  	grid-row: 3;
}
.boxes .img5{
	grid-column:  6/ span 2;
  	grid-row: 1/ span 3;
}

.boxes .box{
	float: left;
	text-align: left;
	width: 45%;
	padding: 10px;

}

.boxes .galleryimg img{
  width:240px;
  height: 240px;
  padding: 5px;
  
}
.boxes .img5 img{
  width:400px;
  height: 540px;
  
}

#boxes2{
	margin-top: 20px;
	padding: 10px;
}

h1.text{
	position: absolute;
	left: 600px;
	text-align: center;
	top: 1060px;
	font-size: 35px;

}

.dineset{
	display: flex;
     justify-content: center;
     flex-wrap: wrap;
}
.dineset-block {
  font-family: 'Raleway', Arial, sans-serif;
  position: relative;
  overflow: hidden;
  margin: 30px;
  min-width: 260px;
  max-width: 355px;
  width: 100%;
  background: red;
  text-align: left;
  color: #ffffff;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
  font-size: 16px;
}
.dineset-block * {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all 0.3s ease-out;
  transition: all 0.3s ease-out;
}
.dineset-block > img,
.dineset-block .image img {
  -webkit-transform: scale(1.05);
  transform: scale(1.05);
  max-width: 100%;
}
.dineset-block > img {
  vertical-align: top;
  position: relative;
  -webkit-filter: blur(5px);
  filter: blur(5px);
  opacity: 0.6;
}
.dineset-block figcaption,
.dineset-block .image {
  -webkit-transition-delay: 0.2s;
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
  -webkit-transform: translateX(-20px);
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
  -webkit-transform: translateX(0px);
  transform: translateX(0px);
}
.dineset-block:hover figcaption,
.dineset-block.hover figcaption,
.dineset-block:hover .image,
.dineset-block.hover .image {
  -webkit-transition-delay: 0s;
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
  -webkit-transition-delay: 0.2s;
  transition-delay: 0.2s;
}


/*New Section*/

.wrapper{
	width: 1200px;
	margin: 10px auto;
}

.title{
	text-align: center;
	/*margin-bottom: 60px;*/
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
  border-bottom:1px dashed #333;
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
</style>
<body>
    <?php include("common/header-dining.php"); ?>
	<!-- Restuarant part -->
	<div class="boxes">
		<div class="title">
				<h4>Restaurant</h4>
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
	
	<figure class="dineset-block green">
  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/pr-sample15.jpg" alt="pr-sample15" />
  <div class="image"><img src="other/food1.jpg" alt="pr-sample15" /></div>
  <figcaption>
    <h3>Breakfast</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia magnam sunt iure nemo sint est doloremque blanditiis, maiores. Repellat, vero.</p>
  </figcaption><span class="read-more">
     
    Read More <i class="ion-android-arrow-forward"></i></span>
  <a href="#"></a>
</figure>
<figure class="dineset-block blue "><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/pr-sample18.jpg" alt="pr-sample18" />
  <div class="image"><img src="other/food2.jpg" /></div>
  <figcaption>
    <h3>Lunch</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe enim dignissimos odit facilis quisquam suscipit totam laboriosam. Labore, harum, fugiat.</p>
  </figcaption><span class="read-more">
     
    Read More <i class="ion-android-arrow-forward"></i></span>
  <a href="#"></a>
</figure>
<figure class="dineset-block orange"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/pr-sample16.jpg" alt="pr-sample16" />
  <div class="image"><img src="other/food3.jpg" alt="pr-sample16" /></div>
  <figcaption>
    <h3>Dinner</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore unde suscipit eaque nostrum numquam accusamus hic earum perspiciatis maiores dicta?</p>
  </figcaption><span class="read-more">
     
    Read More <i class="ion-android-arrow-forward"></i></span>
  <a href="#"></a>
</figure>
</div>
	<!-- Menu Part -->
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
	 <?php include("common/footer.php"); ?>

</body>
</html>