function signup(){
    let name1= document.querySelector(".name").value;
    let last1= document.querySelector(".last").value;
    let email1= document.querySelector(".email").value;
    let password1= document.querySelector(".password").value;
 
    window.localStorage.setItem("name ",name1)
    window.localStorage.setItem("last",last1)
    window.localStorage.setItem("email",email1)
    window.localStorage.setItem("password",password1)
 
      window.location.href="/login.html"
 }
 function validate(){
 
      var x= document.getElementById("password");
      var y = document.getElementById("confirm");
      if(x.value==y.value)
      return;
      else alert ("password not same"); 
 }
 let abc = document.getElementsByClassName(".btn");
 abc.addEventListener('click',function(){
      console.log("CLick hua!")
 })