<?php

include 'conn.php';

session_start();

$studentid=$_SESSION['studentid'];
$password1=$_POST['password1'];
$password=$_SESSION['password'];
$oldpassword=$_POST['oldpassword'];

if($oldpassword==$password){

$query="UPDATE `useris` SET `password`='$password1' WHERE `studentid`='$studentid'";
$result = mysqli_query($link,$query);
if ($result){
  echo "<script>alert('Your password is successfully changed'); document.location.href='userlogout2.php';</script>";
} 
}else{
  echo "<script>alert('Something Went Wrong... Old Password did not match');
  document.location.href='changepass2.php';</script>";
}
?>
