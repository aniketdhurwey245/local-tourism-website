<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
<?php
// if($_SERVER["REQUEST_METHOD"]=="POST"){
// $servername="localhost";
// $username="root";
// $password=" ";
// $database="localtourism";

// $conn = new mysqli($servername,$username,$password,$database);
// if ($conn->connect_error) {
//     die("Connection failed: ". $conn->connect_error);
// }else {
//     $fname = $_POST['fname'];
//     $lname = $_POST['lname'];
//     $Password = $_POST['Password1'];
//     $CPassword = $_POST['CPassword'];
//     $email = $_POST['email'];
//     $uname = $_POST['uname'];

//     $stmt = $conn->prepare("insert into User(Fname,Lname,email,Uname,password,Cpassword) values(?,?,?,?,?,?)");
//     $stmt->bind_param("ssississ", $fname,$lname,$email,$uname,$Password,$CPassword);
//     $stmt->execute();
//         echo "Registration successfully";
//         $stmt->close();
//         $conn->close();

//     echo 'alert("Registration successfully")';

// }
// }
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Server = "localhost";
    $username = "root";
    $psrd = "";
    $dbname = "localtourism";
    $connection = mysqli_connect($Server, $username, $psrd, $dbname);

    $name = $_POST['name'];
    $uname = $_POST['uname'];
    $Password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];


    $query = "insert into User(Name,UserName,Password,Email,Phone,Gender,DOB,Address) values('$name','$uname','$Password','$email','$phone','$gender','$dob','$address')";
    $ret = mysqli_query($connection, $query);

    echo '<script language="javascript">';
    echo 'alert("Registration successfully")';
    echo '</script>';
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
            <div class="border">Login</div>
            <div class="border"><a href="sinup.php">Registration</a></div>        
        </div>
    </header>


    
    <div class="container1">
    <!-- <form method="POST" action="index.php">
        <div class="text">
            <h1>Signup Form</h1>
            <input class="name" type="text" name="fname" placeholder="First Name"   required>
            <input class="last" type="text" name="lname" placeholder="Last Name"   required>
            <input class="email" type="email" name="email" placeholder="Email"   required>
            <input class="last" type="text" name="uname" placeholder="User Name"   required>
            <input class="password" type="password" name="Password" placeholder="Password"   required>
            <input class="confirm" type="password" name="CPassword" placeholder="Confirm Password"  required>
            
            <button class="btn" type="submit" value="submit" name="submit">Signup</button>
            </form> -->
            <h3>User Registration Form</h5>
          <form method="POST" action="index.php" enctype="multipart/form-data" name="Registerform" onsubmit="return RegisterValid();">

            <div class="form-group">

              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Enter your Name" />
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="uname" id="uname" placeholder="Enter your User Name" />
                </div>
              </div>
            </div>

            <div class="form-group">

              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                  <input type="password" class="form-control" name="password" id="password"
                    placeholder="Enter your Password" />
                </div>
              </div>
            </div>


            <div class="form-group">

              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="email" id="email" placeholder="Enter your Email" />
                </div>
              </div>
            </div>

            <div class="form-group">

              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="phone" placeholder="Enter your Phone Number" />
                </div>
              </div>
            </div>


            <div class="form-group">

              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                  <input type="date" class="form-control" name="dob" />
                </div>
              </div>
            </div>

            <div class="form-group">

              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="address" placeholder="Your Address" />
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="cols-sm-2 control-label">Your Gender</label>
              <div class="cols-sm-10">
                <div class="input-group">

                  <input type="radio" name="gender" value="Male" />Male
                  <input type="radio" name="gender" value="Female" />Female
                </div>
              </div>
            </div>
            

            <div class="form-group ">
              <input type="submit" id="button" class="btn btn-primary btn-lg btn-block login-button">
            </div>
        </form>
</div>
    <script src="login.js"></script>
</body>
</html>