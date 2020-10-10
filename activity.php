<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/header-style.css">
	<link rel="stylesheet" type="text/css" href="css/footer-style.css">
	<link rel="stylesheet" type="text/css" href="css/basic-style.css">
	<title>BAYFRONT ACTIVITY </title>
</head>
<style>
	
.blog-wrapper{
	padding:15px 50px;
	display:flex;
	flex-direction:row;
	justify-content:center;
	flex-wrap:wrap;
}	
.blog-card{

		max-width:550px;
		min-height: 500px;
		margin:5px 30px;
		/*background:#fff;*/
		text-align:center;
		cursor:pointer;
	}
.card-img{
	position:relative;
	text-align:center;

}
.card-img img{

	height:350px;
	width:100%;
	object-fit: cover;

}
		

.card-details{
	margin-top:30px;
	font-family: 'Roboto', sans-serif;
	color:#3C3C3C;
}
.card-details span{		
	padding:0 30px;
}
.card-details i{
	margin-right:5px;
}

.card-text{
	padding:30px 15px;
	font-family: 'Roboto', sans-serif;
	line-height:22px;
}
.read-more button{
	padding: 10px;
	background-color: #fff;
	border: 1px solid #262626;
	letter-spacing: 1px;
    text-transform: uppercase;
    transition: transform 80ms ease-in;
    margin: 20px 0;
    width: 150px;
    text-align: center;
			
}

</style>
<body>
	<?php include("common/header_activity.php"); ?>

<div class="blog-wrapper">
	<div class="blog-card">
		<div class="card-img">
			<img src="img/post1.jpg">
			
		</div>
		<div class="card-details"><h1>Visits to Historic Sites and points of interest</h1></div>
		<div class="card-text">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas assumenda, culpa doloribus corporis, quaerat illum nobis aliquid consequuntur nesciunt! Perferendis? ipsum dolor sit amet, consectetur adipiscing elit. Si verbum sequimur, primum longius verbum praepositum quam bonum.</p>
		</div>
			<div class="read-more">
			<a href="landing.php?article=11">Read more</a>
			</div>
	</div>
	<div class="blog-card">
		<div class="card-img">
			<img src="img/post4.jpg">
			
		</div>
		<div class="card-details"><h1>The best turtle hatchery in Sri Lanka</h1></div>
		<div class="card-text">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla dolorem corporis, neque reprehenderit dolorum alias aliquid perferendis eveniet totam repellendus! ipsum dolor sit amet, consectetur adipiscing elit. Si verbum sequimur, primum longius verbum praepositum quam bonum.</p>
		</div>
			<div class="read-more">
			<a  class="btn" href="landing.php?article=1">Read more</a>
			</div>
	</div>
</div>
		<br>
<div class="blog-wrapper">
	<div class="blog-card">
		<div class="card-img">
			<img src="img/post3.jpg">
			
		</div>
		<div class="card-details"><h1>>White Water Rafting in Kitulgala, Sri Lanka</h1></div>
		<div class="card-text">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas assumenda, culpa doloribus corporis, quaerat illum nobis aliquid consequuntur nesciunt! Perferendis? ipsum dolor sit amet, consectetur adipiscing elit. Si verbum sequimur, primum longius verbum praepositum quam bonum.</p>
		</div>
			
			<div class="read-more">
			<a href="landing.php?article=2">Read more</a>
			</div>
		
	</div>
	<div class="blog-card">
		<div class="card-img">
			<img src="img/post2.jpg">
			
		</div>
		<div class="card-details"><h1>Rural Bike Ride</h1></div>
		<div class="card-text">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla dolorem corporis, neque reprehenderit dolorum alias aliquid perferendis eveniet totam repellendus! ipsum dolor sit amet, consectetur adipiscing elit. Si verbum sequimur, primum longius verbum praepositum quam bonum.</p>
		</div>
			<div class="read-more">
			<a href="landing.php?article=4">Read more</a>
			</div>
	</div>
</div>
	<br>
	<div class="blog-wrapper">
	<div class="blog-card">
		<div class="card-img">
			<img src="img/post5.jpg">
			
		</div>
		<div class="card-details"><h1>Sea Kayaking</h1></div>
		<div class="card-text">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas assumenda, culpa doloribus corporis, quaerat illum nobis aliquid consequuntur nesciunt! Perferendis? ipsum dolor sit amet, consectetur adipiscing elit. Si verbum sequimur, primum longius verbum praepositum quam bonum.</p>
		</div>
			<div class="read-more">
			<a href="landing.php?article=5">Read more</a>
			</div>
	</div>
	<div class="blog-card">
		<div class="card-img">
			<img src="img/post7.jpg">
			
		</div>
		<div class="card-details"><h1>Blue whale watching in Sri Lanka</h1></div>
		<div class="card-text">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla dolorem corporis, neque reprehenderit dolorum alias aliquid perferendis eveniet totam repellendus! ipsum dolor sit amet, consectetur adipiscing elit. Si verbum sequimur, primum longius verbum praepositum quam bonum.</p>
		</div>
			<div class="read-more">
			<a href="landing.php?article=6">Read more</a>
			</div>
	</div>
</div>		
	<?php include("common/footer.php"); ?>

</body>
</html>