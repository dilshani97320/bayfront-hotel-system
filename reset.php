<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="img/favicon.png"/>
<!-- <link rel="icon" type="image/png" href="https://example.com/favicon.png"/> -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/header-style.css">
    <link rel="stylesheet" type="text/css" href="css/footer-style.css">
    <link rel="stylesheet" type="text/css" href="css/basic-style.css">
       
<title>Reset Password</title>
</head>
<style>

.top{
  background-image: linear-gradient(139deg, #fb8817, #ff4b01, #c12127, #e02aff);
  width: 100%;
  height: 10px;
}


   .container{
 background-image: linear-gradient(to right, #9ddd96, #8cdca0, #7bdbaa, #6ad9b5, #5ad7bf, #4cd1ba, #3ccab5, #28c4b0, #0fb99a, #00ae82, #00a26a, #0d9651);
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
      text-align: center;
  border-radius: 10px;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin: 70px auto;
  width: 1000px;
  height: 450px;
}

.form-container {
  padding: 60px;
    
}
.img-container{
  flex: 2;
}
.img-container img{
  width: 300px;
  height: 300px;
  object-fit: cover;
}
.resetpwd-container{
  flex: 3;
}
.resetpwd-container img{
  width: 100px;

  height: 100px;
  object-fit: cover;
}
.resetpwd-container label{
  font-size: 20px;
  font-weight: bold;
}
.resetpwd-container input {
    background-color: #eee;
    border: none;
    padding: 15px 15px;
    margin: 8px 2px;
    width: 100%;
}
.resetpwd-container .btnnn{
  float: right; display: flex; flex-direction: row;  margin-left: auto;  width: 100%;
  text-align: center;
}

.btn{
  margin: 10px;
  width: 150px;


}  

</style>
<body>
  <div class="top"></div>
    <div class="container" id="container">
        <div class="form-container img-container">
            <img src="resetpwd.png" height="400" width="400">
        </div>
           
        <div class="form-container resetpwd-container">
            <img src="img/logo.png" height="100" width="100">
             <!-- <h1>Set new password</h1>  -->
                  <div>
                    <label>Password</label>
            <input type="password" name="Password_1" />
            <label> Confirm Password</label>
            <input type="password" name="Password_2">
                  </div>
            

            <div class="btnnn">
              <a class="btn" href="#">SIGN IN <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
             <a class="btn" href="index.php">CANSEL <i class="fa fa-chevron-right" aria-hidden="true"></i></a> 
            </div>       


        </div>
    </div>
        </body>
</html>


   