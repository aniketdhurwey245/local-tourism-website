<?php
include 'index.php';
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $last=$_POST['last'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirm=$_POST['confirm'];
    
    $sql="insert into login(name,last,email,password,confirm)
    value('$name','$last','$email','$password','$confirm')";

    if ($confirm='') {
        $error[]='Please confirm the password';
    }
    if ($password != $confirm) {
        $error[]='Password do not match';
    }
    if (strlen($password)>5) {
        $error[]='The password is 6 characters long';
    }
 $sql= "select * from login where(email = '$email');";
 $res=mysqli_query($conn,$sql);
 if (mysqli_num_rows($res)>0) {
    $row = mysqli_fetch_assoc($res);
 }
     if ($email==$row['email']) {
        $error[]='email already exist';
     }


    if (mysqli_query($conn,$sql)) {
        echo "<script>alert('new record inserted')</script>";
    }
    else {
        echo "error:".mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>