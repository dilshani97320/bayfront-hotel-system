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
     margin-bottom: 40px;
}

 .card{
    max-width: 300px;
     min-height: 300px;
     /*background: #fff;*/
     padding: 20px;
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

.button {
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

.button span{
    font-size: 20px;

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
.slideshowArrow {
  font-size: 7em;
  color: rgba(105, 105, 105, 0.5);
  cursor: pointer;
  transition: opacity 0.2s ease-in-out;
}

</style>
<body>
	<div class="wrapper">
		<div class="card">
			<img src="img/surf1.png" alt="">
			<p class="card-content">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>

            <div class="read-more">
                <a class="btn" href="landing2.php?article=1">FIND OUT MORE <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
            </div>
			  

		</div>
		<div class="card">
			<img src="img/surf2.png" alt="">
			<p class="card-content">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
			 <div class="read-more">
                <a class="btn" href="landing2.php?article=2">FIND OUT MORE <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
            </div>

		</div>
		<div class="card">
			<img src="img/surf3.png" alt="">
			<p class="card-content">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
            <div class="read-more">
                <a class="btn" href="landing2.php?article=3">FIND OUT MORE <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
            </div>

		</div>
</div>
</body>
</html>