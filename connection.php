<?php
$servername="localhost";
$username="root";
$password="";
$database="localtourism";
$conn=mysqli_connect($servername,$username,$password,$database);
if($conn){
    echo "successfull";
}
else{
    echo "error";
}
echo "harshraj dawar";
?>