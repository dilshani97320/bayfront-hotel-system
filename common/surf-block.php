<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<style>
	.wrapper{
     display: flex;
     justify-content: center;
     flex-wrap: wrap;
}

 .card{
    max-width: 300px;
     min-height: 300px;
     background: #fff;
     padding: 30px;
     box-sizing: border-box;
     color: black;
     margin:40px;
     box-shadow: 0px 2px 18px -4px rgba(0,0,0,0.75);
     text-align: center;
}
.card img{
	width: 300px;
    height: 250px;
}


 .card-content{
     font-size: 14px;
     letter-spacing: 0.5px;
     line-height: 1.5;
}
 .card-btn{
    padding: 10px;
	background-color: #fff;
	border: 1px solid #262626;
	letter-spacing: 1px;
    text-transform: uppercase;
    transition: transform 80ms ease-in;
    cursor: pointer;
    margin: 20px 0;
    width: 150px;
}



.container{
  width: 100%;
  margin: 0 auto;
  margin-top:50px;
}

#map_container{
  position: relative;
}
#map{
    height: 0;
    overflow: hidden;
    padding-bottom: 22.25%;
    padding-top: 30px;
    position: relative;
}

</style>
<body>
	<div class="wrapper">
		<div class="card">
			<img src="img/surf1.png" alt="">
			<p class="card-content">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
			<button class="card-btn">FIND OUT MORE</button>
		</div>
		<div class="card">
			<img src="img/surf2.png" alt="">
			<p class="card-content">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
			<button class="card-btn">FIND OUT MORE</button>
		</div>
		<div class="card">
			<img src="img/surf3.png" alt="">
			<p class="card-content">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
			<button class="card-btn">FIND OUT MORE</button>
		</div>
</div>
</body>
</html>