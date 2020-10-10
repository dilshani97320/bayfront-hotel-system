<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<title></title>
</head>
<style>
	.room-slider {
	display: grid;
	grid-template-columns: repeat(5, 1fr);
	grid-template-rows: repeat(5, 1fr);
	align-items: center;
	justify-content: center;
	margin-bottom: 40px;
}

.room-details {
	grid-column: 2 / 4;
	background: rgba(255, 255, 255, 0.8); 
	grid-row: 3 / 5;
	padding: 25px;
	z-index: 5;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.room-details h1{
	text-align: left;
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
.bttn{
	float: right;
	display: flex;
	margin-left: auto;	

	width: 100%;

}



#slideshow { 
    margin: 0 auto; 
    position: relative; 
    width: 100%;
    height: 650px; 
 }

#slideshow > div { 
    position: absolute; 
    top: 10px; 
    left: 10px; 
    right: 10px; 
    bottom: 10px; 
}

	

#slideshow:hover i, #slideshow:hover .slider-dots{
	opacity: 1;
	}

.slidebtn {
	z-index:99;
	background:transparent;
	outline:none;
	border:none;
	-webkit-transition: all 0.3s;
	-moz-transition: all 0.3s;
	transition: all 0.3s;
	
	}

.slidebtn:active,
.slidedtn:focus {
	outline:none;}
	
.slidebtn i {
	color: rgba(255, 255, 255, 0.);
	font-size:72px;
	opacity: 0.2;
	-webkit-transition: all 0.3s;
	-moz-transition: all 0.3s;
	transition: all 0.3s;

	}

.prev {
    position: absolute; 
    top: 5px; 
    left: 10px; 
    bottom: 10px;
}

.next {
    position: absolute; 
    top: 0px; 
    right: 10px; 
    bottom: 10px;
}


.slider-dots{
	visibility: hidden;
}

</style>
<body>


<div id="slideshow">
   <div class="slideitem current">
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
			<div class="bttn">
			 <a class="btn" href="#">VIEW MORE <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
			  <a class="btn" href="#">BOOK NOW <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
		</div>
		</div>
		<div class="room-img">
			<img src="img/room1.jpg" alt="">
		</div>

	</div>
   </div>
   <div class="slideitem">
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
			<div class="bttn">
				 <a class="btn" href="#">VIEW MORE <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
			  <a class="btn" href="#">BOOK NOW <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
		</div>
			
		</div>
		<div class="room-img">
			<img src="img/room2.jpg" alt="">
		</div>
	</div>
   </div>
   <div class="slideitem">
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
			<div class="bttn">
				 <a class="btn" href="#">VIEW MORE <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
			  <a class="btn" href="#">BOOK NOW <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
		</div>
			
		</div>
		<div class="room-img">
			<img src="img/room3.jpg" alt="">
		</div>
	</div>
   </div>
   <div class="slideitem">
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
			<div class="bttn">
				 <a class="btn" href="#">VIEW MORE <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
			  <a class="btn" href="#">BOOK NOW <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
		</div>
			
		</div>
		<div class="room-img">
			<img src="img/room1.jpg" alt="">
		</div>
	</div>
   </div>
   <div class="slideitem">
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
			<div class="bttn">
				 <a class="btn" href="#">VIEW MORE <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
			  <a class="btn" href="#">BOOK NOW <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
		</div>
			
		</div>
		<div class="room-img">
			<img src="img/room2.jpg" alt="">
		</div>
	</div>
   </div>
   <div class="slideitem">
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
			<div class="bttn">
				 <a class="btn" href="#">VIEW MORE <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
			  <a class="btn" href="#">BOOK NOW <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
		</div>
			
		</div>
		<div class="room-img">
			<img src="img/room3.jpg" alt="">
		</div>
	</div>
   </div>
   <!-- <div class="slideitem">
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
			<div class="bttn">
		</div>
			
		</div>
		<div class="room-img">
			<img src="img/room1.jpg" alt="">
		</div>
	</div>
   </div>
 -->
</div>

			


			
		  
		

<script type="text/javascript">
	$(document).ready(function(){

$("#slideshow > div:gt(0)").hide();

var buttons = "<button class=\"slidebtn prev\"><i class=\"fa fa-chevron-circle-left\"></i></button><button class=\"slidebtn next\"><i class=\"fa fa-chevron-circle-right\"></i></button\>";

var slidesl = $('.slideitem').length
var d = "<li class=\"dot active-dot\">&bull;</li>";
for (var i = 1; i < slidesl; i++) {
  d = d+"<li class=\"dot\">&bull;</li>";
}	
var dots = "<ul class=\"slider-dots\">" + d + "</ul\>";

$("#slideshow").append(dots).append(buttons);
var interval = setInterval(slide, 5000);

function intslide(func) {
	if (func == 'start') { 
 	interval = setInterval(slide,5000);
	} else {
		clearInterval(interval);		
		}
}

function slide() {
		sact('next', 0, 1200);
}
	
function sact(a, ix, it) {
        var currentSlide = $('.current');
        var nextSlide = currentSlide.next('.slideitem');
        var prevSlide = currentSlide.prev('.slideitem');
		    var reqSlide = $('.slideitem').eq(ix);

		    var currentDot = $('.active-dot');
    	  var nextDot = currentDot.next();
    	  var prevDot = currentDot.prev();
		    var reqDot = $('.dot').eq(ix);
		
        if (nextSlide.length == 0) {
      		nextDot = $('.dot').first();
            nextSlide = $('.slideitem').first();
            }

        if (prevSlide.length == 0) {
      		prevDot = $('.dot').last();
            prevSlide = $('.slideitem').last();
            }
			
		if (a == 'next') {
			var Slide = nextSlide;
			var Dot = nextDot;
			}
			else if (a == 'prev') {
				var Slide = prevSlide;
				var Dot = prevDot;
				}
				else {
					var Slide = reqSlide;
					var Dot = reqDot;
					}

        currentSlide.fadeOut(it).removeClass('current');
        Slide.fadeIn(it).addClass('current');
		
    	currentDot.removeClass('active-dot');
    	Dot.addClass('active-dot');
}	

$('.next').on('click', function(){
		intslide('stop');						
		sact('next', 0, 400);
		intslide('start');						
	});//next

$('.prev').on('click', function(){
		intslide('stop');						
		sact('prev', 0, 400);
		intslide('start');						
	});//prev

$('.dot').on('click', function(){
		intslide('stop');
		var index  = $(this).index();
		sact('dot', index, 400);
		intslide('start');						
	});//prev
//slideshow
});

/*
JQUERY SLIDER BY JohnRostislavovich - https://codepen.io/JohnRostislavovich
ALL YOU HAVE TO DO:
-copy the whole code html, css & js
-include jquery lib
-change the images
*/

</script>
	
</body>
</html>