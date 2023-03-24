<?php

$link = mysqli_connect("localhost","root","","portal");

session_start();

 $username= $_POST['username'];
 $password = $_POST['password'];

$query = "SELECT `username`, `password`  FROM `faculty` WHERE `username` = '$username' AND `password` = '$password'";
$result = mysqli_query($link,$query);
if(mysqli_num_rows($result)== 1){
  $_SESSION['username'] = $username;
  header('location:facultyportal.php');
} else{
  echo "<script>alert('Username or Password is Incorrect, Please Try Again :)');
        document.location.href='faculty.php';
        </script>";
}

 ?>
