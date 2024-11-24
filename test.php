<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="test.css">
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Server = "localhost";
    $username = "root";
    $password = ""; // Ensure no extra spaces
    $dbname = "localtourism";

    // Create connection
    $connection = new mysqli($Server, $username, $password, $dbname);

    // Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    // Retrieve form data
    $name = $_POST['name'];
    $uname = $_POST['uname'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];

    // Use prepared statement to prevent SQL injection
    $stmt = $connection->prepare("INSERT INTO User (Name, UserName, Password, Email, Phone, Gender, DOB, Address) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $name, $uname, $password, $email, $phone, $gender, $dob, $address);

    if ($stmt->execute()) {
        echo '<script>alert("Registration successful!");</script>';
    } else {
        echo '<script>alert("Error: ' . $stmt->error . '");</script>';
    }

    $stmt->close();
    $connection->close();
}
?>
<div class="head">
    <div class="image"></div>
    <div class="container"> 
        WELCOME TO THE WORLD OF LOCAL TOURISM
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
        <div class="border"><a href="signup.php">Registration</a></div>        
    </div>
</header>

<div class="container1">
    <h3>User Registration Form</h3>
    <form method="POST" action="index.php" enctype="multipart/form-data" name="Registerform" onsubmit="return RegisterValid();">
        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Enter your Name" required />
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="uname" placeholder="Enter your User Name" required />
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Enter your Password" required />
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Enter your Email" required />
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="phone" placeholder="Enter your Phone Number" required />
        </div>
        <div class="form-group">
            <input type="date" class="form-control" name="dob" required />
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="address" placeholder="Your Address" required />
        </div>
        <div class="form-group">
            <label>Your Gender:</label><br>
            <input type="radio" name="gender" value="Male" required /> Male
            <input type="radio" name="gender" value="Female" required /> Female
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary btn-lg btn-block login-button" value="Register">
        </div>
    </form>
</div>
<script src="login.js"></script>
</body>
</html>
