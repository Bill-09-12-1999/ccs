<?php

$link = mysqli_connect("localhost","root","","portal");

session_start();

 $studentid= $_POST['studentid'];
 $password = $_POST['password'];

$query = "SELECT `studentid`,`password`  FROM `useris` WHERE `studentid` = '$studentid' AND `password` = '$password'";
$result = mysqli_query($link,$query);
if(mysqli_num_rows($result)== 1){
  $_SESSION['studentid'] = $studentid;
  $_SESSION['password'] = $password;
  header('location:isstudentportal.php');
} else{
  echo "<script>alert('Student ID # or name or Password is Incorrect, Please Try Again :)');
        document.location.href='BSISstudent.php';</script>";
}

 ?>
