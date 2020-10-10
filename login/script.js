
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

