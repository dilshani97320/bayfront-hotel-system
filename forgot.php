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
    <title>Forgot Password</title>

</head>
<style>


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
  padding: 70px;
    
}
.img-container{
  flex: 2;
}
.img-container img{
  width: 300px;
  height: 300px;
  object-fit: cover;
}
.forgotpwd-container{
  flex: 3;
}
.forgotpwd-container img{
  width: 100px;
  height: 100px;
  object-fit: cover;
}
.forgotpwd-container p{
  margin:  0 40px;
}
.forgotpwd-container input {
    background-color: #eee;
    border: none;
    padding: 15px 15px;
    margin: 8px 2px;
    width: 100%;
}
.btnn{
  float: right;
  display: flex;
  flex-direction: row;
  margin-left: auto;  
    text-align: center;
  width: 100%;

}
.btn{
  margin: 10px;
  width: 150px;


}





</style>

<body>
     
 
    <div class="container" id="container">
            
        <div class="form-container img-container">
           
            <img src="forgotpwd.png" height="500" width="500">
             
        </div>
           
        <div class="form-container forgotpwd-container">
             
            <img src="img/logo.png" height="100" width="100">
             <h1>Forgot Password</h1>
                    
            <p>Enter the email associated with your account to recieve password reset instruction</p>
                    
            <input type="email" placeholder="Email" >
            <div class="btnn">
              <a class="btn" href="reset.php">SEND CODE <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
             <a class="btn" href="index.php">CANSEL<i class="fa fa-chevron-right" aria-hidden="true"></i></a> 
            </div>
            
        </div>
    </div>

</body>
</html>