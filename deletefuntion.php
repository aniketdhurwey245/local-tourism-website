<?php
if (isset($_GET['delete'])) {
  $name = $_GET['delete'];



  $Server = "localhost";
  $username = "root";
  $psrd = " ";
  $dbname = "localtourism";
  $connection = mysqli_connect($Server, $username, $psrd, $dbname);

  $query = "delete from User where UserName='$name'";



  mysqli_query($connection, $query);
  header('Location:admindeleteuser.php');
}
?>