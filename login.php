<?php

$con = mysqli_connect("localhost","root","","portal");

session_start();

  $username = $_POST['txt_username'];
  $password = $_POST['txt_password'];


  $admin = mysqli_query($con, "SELECT * from admin where username = '$username' and password = '$password' ");
  $numrow_admin = mysqli_num_rows($admin);

  $fac = mysqli_query($con, "SELECT * from faculty where username = '$username' and password = '$password'");
  $numrow_zone = mysqli_num_rows($fac);

  $staff = mysqli_query($con, "SELECT * from clerk  where username = '$username' and password = '$password' ");
  $numrow_staff = mysqli_num_rows($staff);

  $user = mysqli_query($con, "SELECT * from user where studentid = '$username' and password = '$password' ");
  $numrow_user = mysqli_num_rows($user);

  $user1 = mysqli_query($con, "SELECT * from useris where studentid = '$username' and password = '$password' ");
  $numrow_user1 = mysqli_num_rows($user1);



  if($numrow_admin > 0)
  {
      while($row = mysqli_fetch_array($admin)){
        $_SESSION['role'] = "Administrator";
        $_SESSION['userid'] = $row['id'];
        $_SESSION['username'] = $row['username'];
      }
      header ('location: adminportal.php');
  }
  elseif($numrow_zone > 0)
  {
      while($row = mysqli_fetch_array($fac)){
        $_SESSION['role'] = "faculty";
        $_SESSION['userid'] = $row['id'];
        $_SESSION['username'] = $row['username'];
      }
      header ('location: facultyportal.php');
  }
  elseif($numrow_staff > 0)
  {
      while($row = mysqli_fetch_array($staff)){
        $_SESSION['role'] = 'clerk';
        $_SESSION['userid'] = $row['id'];
        $_SESSION['username'] = $row['username'];
      }
      header ('location: clerkportal.php');
  }
  elseif($numrow_user > 0)
  {
      while($row = mysqli_fetch_array($user)){
        $_SESSION['studentid'] = $username;
        $_SESSION['password'] = $password;
      }
      header ('location: studentportal.php');
  }
  elseif($numrow_user1 > 0)
  {
      while($row = mysqli_fetch_array($user1)){
        $_SESSION['studentid'] = $username;
        $_SESSION['password'] = $password;
      }
      header ('location: isstudentportal.php');
  }
 else{
  echo "<script>alert('Student ID Number, Username, Password is Incorrect or your Information is not on database, Please Try Again :)');
        document.location.href='index.php';</script>";
}

 ?>
