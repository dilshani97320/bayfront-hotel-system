<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<style>
  *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Josefin Sans', sans-serif;
}

.information-container {
  background-size: cover;
  padding: 60px 0;
}

.inner-container {
  width: 100%;
  max-width: 1200px;
  margin: auto;
  padding: 0 20px;
  overflow: hidden;
}

.section-title {
  text-align: center;
  /*color: #ddd;*/
  text-transform: uppercase;
  font-size: 30px;
}

/*.border {
  width: 160px;
  height: 2px;
  background: #cb2d3e;
  margin: 40px auto;
}*/

.service-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.service-box {
  max-width: 25%;
  padding: 10px;
  text-align: center;
  /*color: #ddd;*/
  cursor: pointer;
}

.service-icon {
  display: inline-block;
  width: 70px;
  height: 70px;
  /*border: 3px solid #cb2d3e;*/
  /*transform: rotate(45deg);*/
  margin-bottom: 30px;
  margin-top: 16px;
}

.service-icon img{
  width: 65px;
  height: 65px;
}

.service-icon i {
  line-height: 70px;
  transform: rotate(-45deg);
  font-size: 26px;
}

/*.service-box:hover .service-icon {
  background: #cb2d3e;
  color: #ddd;
}*/

.service-title {
  font-size: 18px;
  text-transform: uppercase;
  margin-bottom: 10px;
.description {
  font-size: 14px;
}

@media screen and (max-width:960px) {
  .service-box {
    max-width: 45%;
  }
}

@media screen and (max-width:768px) {
  .service-box {
    max-width: 50%;
  }
}

@media screen and (max-width:480px) {
  .service-box {
    max-width: 100%;
  }
}
</style>
<body>
  <div class='information-container'>
  <div class='inner-container'>
   <!--  <h1 class='section-title'>Information</h1> -->
    <div class='border'></div>
      <div class='service-container'>
        
        <div class='service-box'>
          <div class='service-icon'>
            <!-- <i class='fa fa-paint-brush'></i> -->
            <img src="other/food.png" alt="">
          </div>
          <div class='service-title'>THE HOT COFFEE</div>
          <div class='description'>
            Lorem ipsum dolor sit amet, consectetur adipiscing              elit, sed do eiusmod tempor incididunt ut labore              et dolore magna aliqua
          </div>
        </div>
        
        <div class='service-box'>
          <div class='service-icon'>
            <!-- <i class='fa fa-code'></i> -->
            <img src="other/liquor.png" alt="">
          </div>
          <div class='service-title'>Bar Drinks</div>
          <div class='description'>
            Lorem ipsum dolor sit amet, consectetur adipiscing              elit, sed do eiusmod tempor incididunt ut labore              et dolore magna aliqua
          </div>
        </div>
        
        <div class='service-box'>
          <div class='service-icon'>
            <!-- <i class='fa fa-cut'></i> -->
            <img src="other/distance.png" alt="">
          </div>
          <div class='service-title'>Relax in a beautiful contest</div>
          <div class='description'>
            Lorem ipsum dolor sit amet, consectetur adipiscing              elit, sed do eiusmod tempor incididunt ut labore              et dolore magna aliqua
          </div>
        </div>
        
        <div class='service-box'>
          <div class='service-icon'>
            <!-- <i class='fa fa-object-ungroup'></i> -->
            <img src="other/time.png" alt="">
          </div>
          <div class='service-title'>Exceptional Food</div>
          <div class='description'>
            Lorem ipsum dolor sit amet, consectetur adipiscing              elit, sed do eiusmod tempor incididunt ut labore              et dolore magna aliqua
          </div>
        </div>
        
      </div>
    </div>
  </div>

</body>
</html>