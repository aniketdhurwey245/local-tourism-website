<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="login.css">

</head>
<body>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $Server = "localhost";
  $username = "root";
  $psrd = "";
  $dbname = "localtourism";
  $connection = mysqli_connect($Server, $username, $psrd, $dbname);

  $uname = $_POST['email'];
  $Pass = $_POST['Pass'];

  $query = "select * from User where Email='$uname' and Password='$Pass'";



  $Complete = mysqli_query($connection, $query) or die("unable to connect");


  $Rows = mysqli_fetch_array($Complete);

  if ($Rows['Email'] == $uname && $Rows['Password'] == $Pass) {
    session_start();
    if(session_start()){
      echo 'yes';
    }else{
      echo 'no';
    }
    $_SESSION['uname'] = $uname;
    $_SESSION['Pass'] = $Pass;
    header("Location:dashbord.php");
    exit();

  } else {

    echo "<script>window.alert('Wrong User Name Or Password Try Again');</script>";
  }

  mysqli_close($connection);
}



?>
    <div class="head"> 
      <div class="image"></div>

  <div  class="container"> WELCOME TO THE WORLD OF LOCAL TOURISM
     <p>EXPLORE THE NATURAL BEAUTY AND HERITAGE OF GWALIOR</p>  
       (MURROR GWALIOR MADHYA PRADESH)
      </div>
</div>
  <header>
    <div class="logo">
        <div class="border">Home</div> 
        <div class="border">Explore</div>
        <div class="border">Book</div>
        <div class="border">user Login</div>
        <div class="border"><a href="admindeleteuser.php" >Admin Login</a></div>
        <div class="border"><a href="sinup.php" >Registration</a></div>        
    </div>
</header>
<div class="backgroundChange border">
  <h3>Welcome To Gwalior</h3>
			<h1>DO COME & VISIT <span class="change_content"> </span> <span style="margin-top: -10px;"> | </span> </h1>
			<p>"India once is not enough"</p>
    <div class="login">
    <form class="form-signin" action="" method="POST" name="UserLogin" onsubmit="return ValidUser();">
      <input class="email border" type="email" name ="email" placeholder="Email or User name">
      <br><br>
      <input class="password border" type="password" name ="Pass" placeholder="Password">
      <br><br>
      <button type = "submit" class="border">Login</button>
      <br><br>
      <a href="##" >Forgot password ?</a>
      <br><br><br>
      <button class="border">Register</button></a>
      <br><br>
      <img> <i class="fa-brands fa-google"></i>
      <a href="###" >Login With Google</a>
      </form>

      
    </div></div>

    <div class="moto">
      <div> 
      The traveler sees what he sees, the tourist sees what he has come to see....
      <br>
      <br>
      The worst thing about being a tourist is having other tourists recognise you as a tourist
     </div></div>
    
</body>
  <script type="text/javascript">

    function ValidUser() {
      var name = UserLogin.uname;
      var Password = UserLogin.Pass;

      if (name.value == "") {
        window.alert("Name Field Can Not Be Empty");
        name.focus();
        return false;
      }
      if (Password.value == "") {
        window.alert("Password Field Can Not Be Empty");
        Password.focus();
        return false;
      }
      return true;
    }


  </script>
</html>