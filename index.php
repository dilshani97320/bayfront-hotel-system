<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="icon" type="image/png" href="img/favicon.png"/>
<!-- <link rel="icon" type="image/png" href="https://example.com/favicon.png"/> -->
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/header-style.css">
	<link rel="stylesheet" type="text/css" href="css/footer-style.css">
	<link rel="stylesheet" type="text/css" href="css/basic-style.css">
	<title>BAYFRONT HOTEL</title>
</head>
<style>
h1{
		text-align: center;
	}
.container-fluid{
  -webkit-column-count:4;
  -moz-column-count:4;
  column-count:4;
  
  -webkit-column-gap:30px;
  -moz-column-gap:30px;
  column-gap:30px;
  margin-bottom: 40px;

}
.container-fluid .img-responsive{
  width:100%;
  height:auto;
  margin: auto;
  box-shadow:-3px 3px 10px #000;
  cursor: pointer;
  -webkit-transition: all 0.2s;
  transition: all 0.2s;
}


@media (max-width:1200px){
  #gallery{
  -webkit-column-count:3;
  -moz-column-count:3;
  column-count:3;
    
  -webkit-column-gap:20px;
  -moz-column-gap:20px;
  column-gap:20px;
}
}
@media (max-width:800px){
  #gallery{
  -webkit-column-count:2;
  -moz-column-count:2;
  column-count:2;
    
  -webkit-column-gap:20px;
  -moz-column-gap:20px;
  column-gap:20px;
}
}
@media (max-width:600px){
  #gallery{
  -webkit-column-count:1;
  -moz-column-count:1;
  column-count:1;
}  
}
/*activity*/
.activity-container {
	display: flex;
	flex-wrap: wrap;
	justify-content: space-between;
	margin: 0 10px;
	 width:1400px;
    margin: auto;
    height: 700px;
}
.act{
	flex-basis:650px;
	 width: 100%;
	 text-align: center;
}
.act:hover{
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.activity-container .spa h1{
	margin: 0;
}

.activity-container p{
	font-family: 'Josefin Sans', sans-serif;
	font-weight: bold;
	margin: 40px 0;
	color: #5a5a5a;
	padding: 5px;
	letter-spacing: 1px;
    font-weight: 500;
}

/*.activity-container button{
	padding: 10px;
	background-color: #fff;
	border: 1px solid #262626;
	letter-spacing: 1px;
    text-transform: uppercase;
    transition: transform 80ms ease-in;
    margin: 20px 0;
    width: 150px;
}*/
.activity-container .button {
    background-color: #fff;
    border: 2px solid #262626;
    color: #262626;
    font-weight: 400px;
    padding: 3px;
    text-align: center;
    letter-spacing: 1px;
    text-transform: uppercase;
    text-decoration: none;
    font-family: 'Josefin Sans', sans-serif;
    display: inline-block;
    font-size: 12px;
    margin: 20px 2px;
    cursor: pointer;
    width: 180px;
        
}

.activity-container .button span{
    font-size: 20px;

}

.activity-img{
	overflow: hidden;
	display: flex;
	justify-content: space-around;
}

.activity-container .spa img, .activity-container .dining img{
	width: 100%;
	height: 300px;
	object-fit: cover;
}

/*.activity-container .spa img:hover {
    transform: scale(1.1);
}*/


/*.activity-container .dining img{
	width: 50%;
	height: 320px;
	float: left;
	transition: all 0.3s;
	transform: scale(1);
	object-fit: cover;

}
*/
/*.activity-container .dining img:hover {
    transform: scale(1.5);
}
*/
/*second row*/
.activity2-container{
	/*border:3px solid #c19b76;*/
	margin: 40px 50px;
	height: 570px;
	display: flex;
	flex-direction: row;
	justify-content: space-between; 
}

.activity2-container p{
	font-family: 'Josefin Sans', sans-serif;
	font-weight: bold;
	color: #5a5a5a;
	padding: 5px;
	letter-spacing: 1px;
	text-align: left;
    font-weight: 500;
}

.activity2-container .button{
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
	object-fit: cover;
	
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
.line-style { 
  border: 0; 
  height: 3px; 
  background-image: -webkit-linear-gradient(left, #f0f0f0, #6C2E45, #f0f0f0);
  background-image: -moz-linear-gradient(left, #f0f0f0, #6C2E45, #f0f0f0);
  background-image: -ms-linear-gradient(left, #f0f0f0, #6C2E45, #f0f0f0);
  background-image: -o-linear-gradient(left, #f0f0f0, #6C2E45, #f0f0f0); 
}
	


	@import url(https://fonts.googleapis.com/css?family=Raleway:400,500,700);
@import url(https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css);
figure.imgBlock {
  font-family: 'Raleway', Arial, sans-serif;
  position: relative;
  overflow: hidden;
  margin: 15px;
  min-width: 300px;
  max-width: 350px;
  width: 100%;
  color: #ffffff;
  text-align: center;
  font-size: 16px;
  background-color: #000000;

}
figure.imgBlock *,
figure.imgBlock *:before,
figure.imgBlock *:after {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all 0.55s ease;
  transition: all 0.55s ease;
}
figure.imgBlock img {
  max-width: 100%;
  backface-visibility: hidden;
  vertical-align: top;
  opacity: 0.9;
}
figure.imgBlock .title {
  position: absolute;
  top: 58%;
  left: 25px;
  padding: 5px 10px 10px;
}
figure.imgBlock .title:before,
figure.imgBlock .title:after {
  height: 2px;
  width: 400px;
  position: absolute;
  content: '';
  background-color: #ffffff;
}
figure.imgBlock .title:before {
  top: 0;
  left: 10px;
  -webkit-transform: translateX(100%);
  transform: translateX(100%);
}
figure.imgBlock .title:after {
  bottom: 0;
  right: 10px;
  -webkit-transform: translateX(-100%);
  transform: translateX(-100%);
}
figure.imgBlock .title div:before,
figure.imgBlock .title div:after {
  width: 2px;
  height: 400px;
  position: absolute;
  content: '';
  background-color: #ffffff;
}
figure.imgBlock .title div:before {
  top: 10px;
  right: 0;
  -webkit-transform: translateY(100%);
  transform: translateY(100%);
}
figure.imgBlock .title div:after {
  bottom: 10px;
  left: 0;
  -webkit-transform: translateY(-100%);
  transform: translateY(-100%);
}
figure.imgBlock h4,
figure.imgBlock h6 {
  margin: 0;
  text-transform: uppercase;
}
figure.imgBlock h4 {
  font-weight: 500;
}
figure.imgBlock h6 {
  display: block;
  font-weight: 750;
  background-color: #ffffff;
  padding: 5px 10px;
  color: #000000;
}

figure.imgBlock a {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
}
figure.imgBlock:hover img,
figure.imgBlock.hover img {
  zoom: 1;
  filter: alpha(opacity=50);
  -webkit-opacity: 0.5;
  opacity: 0.5;
}
figure.imgBlock:hover .title:before,
figure.imgBlock.hover .title:before,
figure.imgBlock:hover .title:after,
figure.imgBlock.hover .title:after,
figure.imgBlock:hover .title div:before,
figure.imgBlock.hover .title div:before,
figure.imgBlock:hover .title div:after,
figure.imgBlock.hover .title div:after {
  -webkit-transform: translate(0, 0);
  transform: translate(0, 0);
}
figure.imgBlock:hover .title:before,
figure.imgBlock.hover .title:before,
figure.imgBlock:hover .title:after,
figure.imgBlock.hover .title:after {
  -webkit-transition-delay: 0.15s;
  transition-delay: 0.15s;
}


</style>
<body>
	 <?php include("common/header-home.php"); ?>
	 <?php include("common/service-section.php"); ?>
	 <?php include("common/room-slider.php"); ?>

	 <div class="activity-container">
		<div class="act spa">
			<div class="activity-img">
				<figure class="imgBlock"><img src="img/yoga1.jpg" alt="sample35" />
  					<div class="title">
    					<div>
					      <h4>Spa</h4>
					      <!-- <h6>Hikkaduwa</h6> -->
					    </div>
					</div>
				</figure>
				<figure class="imgBlock"><img src="img/yoga2.png" alt="sample35" />
  					<div class="title">
    					<div>
					      <h4>Yoga</h4>
					      <!-- <h6>Hikkaduwa</h6> -->
					    </div>
					</div>
				</figure>
				<!-- <img src="img/yoga1.jpg" alt=""> -->
				<!-- <img src="img/yoga2.png" alt=""> -->
			</div>
			<br>
			<div>
				<h1>SPA & YOGA</h1>
				<hr class="line-style"><br>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt autem, numquam, eligendi veniam dignissimos sunt. Repellendus, cum perspiciatis impedit, cumque debitis vero odit quas commodi aspernatur blanditiis, voluptatibus illum ipsum. ipsum dolor sit amet, consectetur adipisicing elit..</p>
			  <a class="btn" href="landing.php?article=0">FIND OUT MORE <i class="fa fa-chevron-right" aria-hidden="true"></i></a>

			</div>
		</div>
		<div class="act dining">
			<div>
				<h1>DINING</h1>
				<hr class="line-style"><br>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore vero natus, esse dolores id sit beatae repudiandae? Ea molestias quo similique accusamus minima est explicabo commodi, praesentium temporibus dolore cumque. ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, quas quasi nulla aut blanditiis, minima omnis molestiae! Necessitatibus, adipisci nam id quis natus, adipisci nam id quis natusadipisci nam id quis natus, adipisci nam id quis natus.</p>
			  <a class="btn" href="#">FIND OUT MORE <i class="fa fa-chevron-right" aria-hidden="true"></i></a>

			</div>
			<br>
			<div class="activity-img">
			<figure class="imgBlock"><img src="img/dining1.jpg" alt="sample35" />
  					<div class="title">
    					<div>
					      <h4>Traditional Food</h4>
					      <!-- <h6>Hikkaduwa</h6>/ -->
					    </div>
					</div>
				</figure>
				<figure class="imgBlock"><img src="img/dining2.jpg" alt="sample35" />
  					<div class="title">
    					<div>
					      <h4>Western Food</h4>
					      <!-- <h6>Hikkaduwa</h6> -->
					    </div>
					</div>
				</figure>
			</div>
		</div>
	</div>

	<div class="activity2-container">

		<dev class="activity2-text">
			<h1>EXPERIENCE <br>BAYFRONT WELIGAMA</h1>
			<hr class="line-style"><br>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora ad modi recusandae sint reiciendis officia libero, nostrum enim numquam amet velit! Inventore autem consequuntur expedita facere laborum repudiandae facilis quidem voluptates impedit unde nulla explicabo atque, consequatur. Sit culpa aliquam quo.</p>	
			  <a class="btn" href="#">FIND OUT MORE <i class="fa fa-chevron-right" aria-hidden="true"></i></a>

		</dev>

		<div class="activity2-img">
			<div class="img1">
				<figure class="imgBlock"><img src="img/act1.jpg" alt="sample35" />
  					<div class="title">
    					<div>
					      <h4>Diving</h4>
					      <h6>Hikkaduwa</h6>
					    </div>
					</div>
					<a href="landing.php?article=7"></a>
				</figure>
			</div>
			<div class="img2">
				<figure class="imgBlock"><img src="img/act2.jpg" alt="" class="img1">
  					<div class="title">
    					<div>
					      <h4>Hiking</h4>
					      <h6>Upper Country</h6>
					    </div>
					</div>
					<a href="landing.php?article=9"></a>
				</figure>
				
			</div>
			<div class="img3">
				<figure class="imgBlock"><img src="img/act3.jpg" alt="" class="img1">
  					<div class="title">
    					<div>
					      <h4>Train Ride</h4>
					      <h6>Ella</h6>
					    </div>
					</div>
 					<a href="landing.php?article=8"></a>
				</figure>
				
			</div>
			<div class="img4">
				<figure class="imgBlock"><img src="img/act4.jpg" alt="" class="img1">
  					<div class="title">
    					<div>
					      <h4>Whale Watching</h4>
					      <h6>Mirissa</h6>
					    </div>
					</div>
 					<a href="landing.php?article=6"></a>
				</figure>
			</div>
			<div class="img5">
				<figure class="imgBlock"><img src="img/act5.jpg" alt="" class="img1">
  					<div class="title">
    					<div>
					      <h4>Swinging On a Rope</h4>
					      <h6>Thalpe</h6>
					    </div>
					</div>
 					<a href="landing.php?article=10"></a>
				</figure>
				
			</div>
		</div>
	</div>
	
		
	<!-- <hr class="line-style"><br> -->
	
	<?php include("common/surf-block.php"); ?>
<!-- 	
	<h1>Bayfront Gallery</h1> 
	<hr class="line-style"><br> -->

  <div id="gallery" class="container-fluid">  
    <img src="other/15.jpg" class="img-responsive">
    <img src="other/2.jpg" class="img-responsive">
    <!-- <img src="other/3.jpg" class="img-responsive"> -->
    <!-- <img src="other/4.jpg" class="img-responsive"> -->
    <img src="other/17.jpg" class="img-responsive">
    <img src="other/12.jpg" class="img-responsive">
    <!-- <img src="other/7.jpg" class="img-responsive"> -->
    <img src="other/8.jpg" class="img-responsive">
    <img src="other/9.jpg" class="img-responsive">
    <img src="other/10.jpg" class="img-responsive">
    <img src="other/11.jpg" class="img-responsive">
    <img src="other/6.jpg" class="img-responsive">
    <img src="other/13.jpg" class="img-responsive">
    <img src="other/19.jpg" class="img-responsive">
    <img src="other/1.jpg" class="img-responsive">
    <!-- <img src="other/16.jpg" class="img-responsive"> -->
    <!-- <img src="other/5.jpg" class="img-responsive"> -->
    <img src="other/18.jpg" class="img-responsive">
    <img src="other/20.jpg" class="img-responsive">
    <img src="other/14.jpg" class="img-responsive">
    <img src="other/21.jpg" class="img-responsive">
    <img src="other/22.jpg" class="img-responsive">
    <!-- <img src="other/23.jpg" class="img-responsive"> -->
    <!-- <img src="other/24.jpg" class="img-responsive"> -->
  </div>
<!--   <br>
	<h1>Special shout-outs</h1> 
	<hr class="line-style"><br> -->
	 <?php include("common/review-block.php"); ?>
	 <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15872.630594741284!2d80.4331891!3d5.9730164!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc30788ae9b82a0c7!2sBayfront!5e0!3m2!1sen!2slk!4v1594919424506!5m2!1sen!2slk" width="100%" height="450" frameborder="0" style="border:0; margin-bottom: 30px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

	 <?php include("common/footer.php"); ?>
	 
	 <script>
	 	$(".hover").mouseleave(
  function () {
    $(this).removeClass("hover");
  }
);
	 </script>
</body>
</html>