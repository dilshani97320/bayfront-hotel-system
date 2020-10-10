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

	.image-gallery {
  margin: auto;
  width: 600px;
  position: relative;
}
.image-container {
  width: 100%;
  height: 400px;
  position: relative;
  overflow: hidden;
  background: #fff;
}
.thumbnails {
  width: 100%;
  display: flex;
}
.thumbnails label {
  display: inline-block;
  width: 150px;
  height: 100px;
  background-size: cover;
  margin: 0;
  flex: 1 1 150px;
  cursor: pointer;
}
.image-1, .image-2, .image-3, .image-4 {
  background-size: cover;
  width: 100%;
  height: 100%;
  position: absolute;
  opacity: 0;
  transition: all 1.2s ease-out;
}
.image-1,
.thumbnails label[for="image1"] {
  background-image: url('https://images.unsplash.com/photo-1568051243847-b6319fad107c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80');
}
.image-2,
.thumbnails label[for="image2"] {
  background-image: url('https://images.unsplash.com/photo-1568094328197-3d83d7cbfe94?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80');
}
.image-3,
.thumbnails label[for="image3"] {
  background-image: url('https://images.unsplash.com/photo-1562101806-b8ebd0e33011?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80');
}
.image-4,
.thumbnails label[for="image4"] {
  background-image: url('https://images.unsplash.com/photo-1568022316712-0886fa296902?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80');
}
#image1:checked + .image-1,
#image2:checked + .image-2,
#image3:checked + .image-3,
#image4:checked + .image-4 {
  opacity: 1;
}
.image-gallery input[type="radio"] {
  position: absolute;
  top: 370px;
  z-index: 100;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  display: inline-block;
  background-color: #00000033;
  height: 16px;
  width: 16px;
  border: 3px solid #f1f1f1;
  border-radius: 16px;
  cursor: pointer;
  outline: none;
  box-shadow: 0px 1px 4px #00000088;
}
.image-gallery input[type="radio"]:hover {
  background-color: #f7f7f780;
}
.image-gallery input[type="radio"]:checked {
  background-color: #f1f1f1;
}
.image-gallery input[type="radio"]:nth-of-type(1) {
  left: 50%;
  margin-left: -36px;
}
.image-gallery input[type="radio"]:nth-of-type(2) {
  left: 50%;
  margin-left: -12px;
}
.image-gallery input[type="radio"]:nth-of-type(3) {
  left: 50%;
  margin-left: 12px;
}
.image-gallery input[type="radio"]:nth-of-type(4) {
  left: 50%;
  margin-left: 36px;
}

.image-gallery label.prev,
.image-gallery label.next {
  position: absolute;
  top: 50%;
  z-index: 100;
  color: #f1f1f1;
  text-shadow: 0px 1px 4px #00000088;
  font-family: "Georgia", "Apple Symbols", serif;
  font-size:40px;
  font-weight: 700;
  line-height:40px;
  text-align:center;
  height: 40px;
  width: 40px;
  margin-top: -20px;
  cursor: pointer;
  opacity:0;
  transition: opacity 0.5s linear;
}
.image-gallery:hover label.prev,
.image-gallery:hover label.next {
  opacity:1;
}
.image-gallery label.prev:before {
  content: '\003c'
}
.image-gallery label.next:before{
  content: '\003e'
}
.image-gallery label.prev{
  left: 10px;
}
.image-gallery label.next{
  right: 10px;
}
.image-gallery label.prev:hover,
.image-gallery label.next:hover {
  margin-top: -22px;  
  text-shadow: 0px 3px 4px #00000088;
}
</style>
<body>
	<?php include("common/active.php"); ?>

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
			
			<div class="image-gallery">
				  <div class="image-container">
				    <input type="radio" name="gallery_group" id="image1" checked />
				    <div class="image-1">
				      <label class="prev" for="image4"></label>
				      <label class="next" for="image2"></label> 
				    </div>
				    <input type="radio" name="gallery_group" id="image2" />
				    <div class="image-2">
				      <label class="prev" for="image1"></label>
				      <label class="next" for="image3"></label> </div>
				    <input type="radio" name="gallery_group" id="image3" />
				    <div class="image-3">
				      <label class="prev" for="image2"></label>
				      <label class="next" for="image4"></label> </div>
				    <input type="radio" name="gallery_group" id="image4" />
				    <div class="image-4">
				      <label class="prev" for="image3"></label>
				      <label class="next" for="image1"></label> </div>
				  </div>
				  <div class="thumbnails">
				    <label for="image1"></label>
				    <label for="image2"></label>
				    <label for="image3"></label>
				    <label for="image4"></label>
				  </div>
				</div>
			<div class="package">
				
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
	
</body>
</html>