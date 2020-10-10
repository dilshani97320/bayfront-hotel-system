<?php
	require_once('database.php');
	require_once('login_inc.php');
	require_once('register_inc.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Login</title>
</head>
<style>
  
.topnav {
  overflow: hidden;
  position: absolute;
  width: 100%;
  background: rgba(255, 255, 255, 0.5); 
    
}
.topnav a {
    margin-top: 20px;
  float: left;
  font-weight: bold;
  display: block;
  color: black;
  text-align: center;
  padding: 20px 20px;
  text-decoration: none;
  font-size: 20px;
  color: black;
  
}
}

.topnav .icon {
  display: none;
}


.topnav a:active {
    transform: scale(0.96);
}



.container{
    /*display: none;*/
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
    overflow: hidden;
    position: relative;
    width: 768px;
    max-width: 100%;
    min-height: 520px;
    animation-name: modalopen;
    animation-duration: 1.5s;
    position: absolute;
}
@keyframes modalopen{
    from{ opacity: 0 }
    to{ opacity: 1 }
}
.form-container form{
    background: #fff;
    display: flex;
    flex-direction: column;
    padding: 0 50px;
    height: 100%;
    justify-content: center;
    align-items: center;
    text-align: center;
}

.social-container{
    margin: 15px 0;
}
.social-container a:hover{
    border: 2px solid #18c297;
    background: #18c297;
    color: #fff;
    background-color: #18c297;
}
.social-container a{
    border: 2px solid rgb(202, 200, 200);
    border-radius: 50%;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    margin: 0 5px;
    height: 40px;
    width: 40px;
    font-size: larger;
}

.form-container input{
    background: #fff no-repeat;
    border: 1px solid rgb(202, 200, 200);
    padding: 12px 15px;
    margin: 5px 0;
    width: 100%;
}

input:focus{
  /* sizes for the 2 images (focus state) */
  /*background-size: 100% 2px, 100% 1px;
  outline: none;*/
}

button{
    border-radius: 20px;
    border: 1.5px solid #18c297;
    background: #18c297;
    color: #fff;
    font-size: 12px;
    font-weight: bold;
    margin-top: 10px;
    padding: 12px 45px;
    font-size: 12px;
    letter-spacing: 1px;
    text-transform: uppercase;
    transition: transform 80ms ease-in;
}

button:active {
    transform: scale(0.96);
}

button:focus{
    outline: none;
}

button.ghost{
    background: transparent;
    border-color: white;
}

.form-container{
    position: absolute;
    top: 0;
    height: 100%;
    transition: all 0.6s ease-in-out;
}

.sign-in-container{
    left: 0;
    width: 50%;
    z-index: 2;
}

.sign-up-container{
    left: 0;
    width: 50%;
    opacity: 0;
    z-index: 1;
}
.closeBtn{
    color: #fff;
    font-size: 30px;
    z-index: 20;
    margin: 10px;
    position: absolute;
    font-weight: bolder;
    right: 0;
}

.closeBtn:hover, .closeBtn:focus{
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
.container.right-panel-active .closeBtn:hover, .closeBtn:focus{
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
.overlay-container{
    position: absolute;
    top: 0;
    left: 50%;
    width: 50%;
    height: 100%;
    overflow: hidden;
    transition: transform 0.6s ease-in-out;
    z-index: 10;
}

.overlay{
    background: #0f710f;
    background: linear-gradient(to right, #1aa196, #2f9c60) no-repeat 0 0 / cover;
    color: #fff;
    position: relative;
    left: -100%;
    height: 100%;
    width: 200%;
    transform:translateX(0) ;
    transition: transform 0.6s ease-in-out;
}

.overlay-panel{
    position: absolute;
    top: 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 0 40px;
    height: 100%;
    width: 50%;
    text-align: center;
    transform: translateX(0);
    transition: transform 0.6s ease-in-out;
}

.overlay-right{
    right: 0;
    transform: translateX(0);
}

.overlay-left{
    transform: translateX(-20px);
}

.container.right-panel-active .sign-in-container{
    transform: translateX(100%);
    opacity: 0;
}
.container.right-panel-active .overlay-container{
    transform: translateX(-100%);
}

.container.right-panel-active .sign-up-container{
    transform: translateX(100%);
    opacity: 1;
    z-index: 5;
}

.container.right-panel-active .overlay{
    transform: translateX(50%);
}

.container.right-panel-active .closeBtn{
    color: #ff0000;
}

.form-control{
  position: relative;
  height: 60px;
}

.form-control i {
  visibility: hidden;
  position: absolute;
  top: 20px;
  padding: 3px;
  right: 0;
}

.form-control.success i.fa-check-circle{
  color: #2ecc71;
  visibility: visible;
}

.form-control.error i.fa-exclamation-circle{
  color: #e74c3c;
  visibility: visible;
}
.form-control small{
  visibility: hidden;
  position: relative;
  bottom: 10px;
}


.form-control.success input {
  border-color: #2ecc71;
}

.form-control.error input {
  border-color: #e74c3c;
}

.form-control.error small {
  color: #e74c3c;
  visibility: visible;
}


</style>
<body>

	

	<div id="container" class="container">
	<span class="closeBtn" id="closeBtn">&times;</span>
	<div class="form-container sign-up-container">
	 <form id="signup_form"  action="form.php" method="post">
				<h1>Create Account</h1>
                <div class="social-container">
                    <a class="social"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a class="social"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    <a class="social"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                </div>
                <span>or use your emair for registation</span>

                <div class="form-control">
                  <input id="username" name="username" required="required" type="text" placeholder="Username  eg: John Smith">
                  <i class="fa fa-check-circle" aria-hidden="true"></i>
                  <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                  <small>Error message</small>
                </div>

                <div class="form-control ">
                  <input id="email" name="email" type="email"required="required" placeholder="Email eg: john@mail.com">
                  <i class="fa fa-check-circle" aria-hidden="true"></i>
                  <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                  <small>Error message</small>
                </div>

                <div class="form-control">
                  <input id="password" name="password" type="password" required="required" placeholder="Password eg: John@123">
                  <i class="fa fa-check-circle" aria-hidden="true"></i>
                  <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                  <small>Error message</small>
                </div>

                <div class="form-control">
                  <input id="rePassword" name="rePassword" type="password" required="required" placeholder="Re Enter Password">
                  <i class="fa fa-check-circle" aria-hidden="true"></i>
                  <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                  <small>Error message</small>
                </div>

                <button type="submit"  value="submit" name="submit" id="real_signup">submit</button>
            </form>
		</div>
		<div class="form-container sign-in-container">
       		<form id="signin_form" action="form.php" method="post">
       			<h1>Sign In</h1>
       			<div class="social-container">
       				<a class="social"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a class="social"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    <a class="social"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
       			</div>
       			<span>or use your account</span>
       			<div class="form-control">
                  <input id="login_username" name="loginName" type="text" placeholder="Username  eg: John Smith">
                  <i class="fa fa-check-circle" aria-hidden="true"></i>
                  <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                  <small>Error message</small>
              </div>
            <div class="form-control">
                  <input id="login_password" name="loginPassword" type="password" placeholder="Password eg: John@123">
                  <i class="fa fa-check-circle" aria-hidden="true"></i>
                  <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                  <small>Error message</small>
              </div>
       			
       			<a href="../forgot.php">Frogot your password?</a>
       			<button type="submit"  value="submit" name="submit1" id="real_signin">Sign In</button>
       		</form>

       	</div>
       	<div class="overlay-container">
       		<div class="overlay">
       			<div class="overlay-panel overlay-left">
       				<h1>Welcome Back</h1>
       				<p>To keep connected with us please log with your personal info</p>
       				<button id="signIn" class="ghost">Sign In</button>
       			</div>
       			<div class="overlay-panel overlay-right">
					   
					<h1>Hello Friend</h1>
       				<p>Enter your personal details and start with us</p>
       				<button id="signUp" class="ghost">Sign Up</button>
       			</div>
       		</div>
       	</div>
	</div>
	<script src="script.js">
   
console.log(11);
const signUpBtn = document.getElementById('signUp');
const signInBtn = document.getElementById('signIn');
const container = document.getElementById('container');

signUpBtn.addEventListener('click', () => container.classList.add('right-panel-active'));

signInBtn.addEventListener('click', () => container.classList.remove('right-panel-active'));


//pop up log in //
const loginBtn = document.getElementById('loginBtn');
const closeBtn = document.getElementById('closeBtn');
const bg = document.getElementById('bg');


loginBtn.addEventListener('click', openModal);
closeBtn.addEventListener('click', closeModal);
window.addEventListener('click', outsideClick);


function openModal(){

     container.style.display = 'block';
}

function closeModal(){
    container.style.display = 'none';
}

function outsideClick(e){
    if(e.target==bg ){
        container.style.display = 'none';
    }
}

function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }



// const real_signup = document.getElementById('real_signup');
// const real_signin = document.getElementById('real_signin');
// const signup_form = document.getElementById('signup_form');
// const username = document.getElementById('username');
// const login_username = document.getElementById('login_username');
// const email = document.getElementById('email');
// const password = document.getElementById('password');
// const login_password = document.getElementById('login_password');
// const rePassword = document.getElementById('rePassword');
// console.log(real_signup)
// signup_form.addEventListener('submit', (e) => {
//   e.preventDefault();

//   checkInputSignup();
// });
// real_signin.addEventListener('click', (e) => {
//   e.preventDefault();

//   checkInputSignin();
// });

// function checkInputSignin() {

//   const login_usernameValue= login_username.value.trim();
//   const login_passwordValue= login_password.value.trim();

//   console.log(login_usernameValue);
//   console.log(login_passwordValue);

//   if(login_usernameValue === ''){
//     setErrorFor(login_username, 'Username cannot be blank');
//   }else{
//     setSuccessFor(login_username);
//   }

//   if(login_passwordValue === ''){
//     setErrorFor(login_password, 'Password cannot be blank');
//   }else if(!isPassword(login_passwordValue)){
//     setErrorFor(login_password, 'Passwords must contain letter, number, special character');
//   }else{
//     setSuccessFor(login_password);
//   }
// }


// function checkInputSignup() {

//   const usernameValue= username.value.trim();
//   const emailValue= email.value.trim();
//   const passwordValue= password.value.trim();
//   const rePasswordValue= rePassword.value.trim();

//   if(usernameValue === ''){
//     setErrorFor(username, 'Username cannot be blank');
//   }else{
//     setSuccessFor(username);
//   }

//   if(emailValue === ''){
//     setErrorFor(email, 'Email cannot be blank');
//   }else if(!isEmail(emailValue)){
//     setErrorFor(email, 'Email is not valid');
//   }
//   else{
//     setSuccessFor(email);
//   }

//   if(passwordValue === ''){
//     setErrorFor(password, 'Password cannot be blank');
//   }else if(!isPassword(passwordValue)){
//     setErrorFor(password, 'Passwords must contain letter, number, special character');
//   }else{
//     setSuccessFor(password);
//   }

//   if(rePasswordValue === ''){
//     setErrorFor(rePassword, 'Confirm password cannot be blank');
//   }else if(passwordValue !== rePasswordValue){
//     setErrorFor(rePassword, 'Password does not match');
//   }
//   else{
//     setSuccessFor(rePassword);
//   }
// }

// function setErrorFor(input,message) {
//   const formControl= input.parentElement;
//   const small= formControl.querySelector('small');

//   small.innerText= message;

//   formControl.className= 'form-control error';
// }
// function setSuccessFor(input) {
//   const formControl= input.parentElement;
//   formControl.className= 'form-control success';
// }

// function isEmail(email) {
//   const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
//   return re.test(String(email).toLowerCase());
// }

// function isPassword(password) {
//   const re = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
//   return re.test(String(password));
// }
// function isPassword(login_password) {
//   const re = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
//   return re.test(String(login_password));
// }

 
  </script>
</body>
</html>
