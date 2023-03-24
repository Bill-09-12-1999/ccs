<?php
$link = mysqli_connect("localhost","root","","portal");
?>
<?php session_start();
if(!isset($_SESSION['role']))
{
    header("Location: index.php");
}
else
{
ob_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Faculty Portal</title>
    <style>
    body{
      margin:0;
      padding:0;
      background:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)),url('images/building.jpeg');
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      background-attachment: fixed;
    }
    *{
      margin:0;
      padding:0;
    }
    h1{
      font-family: arial black;
    margin-left: 20%;
    margin-top: 15%;
    color: skyblue;
    letter-spacing: 2px;
    text-shadow: 5px 2px 3px #111344, 7px 2px 5px rgb(111 55 221 / 30%);
    background: rgb(7 4 10 / 75%);
    border-radius: 10px;
    width: 70%;
    padding: 20px 40px;
    font-size: 40px;
    }
    .sidemenu{
      width:17vw;
      height:100%;
      position: Fixed;
      left:0;
      top:0;
      background:gray;
    }
    .sidemenu #img1{
      width:90px;
      height:90px;
      border-radius:50%;
      margin-left: 20px;
      margin-top: 1%;
    }
    .sidemenu #img2{
      width:90px;
      height:90px;
      border-radius:50%;
      margin-top: 1%;
    }
    ul li{
      list-style: none;
      display: block;
      font-size: 18px;
      width:60%;
      padding:8px;
      padding-left:50px;
      margin-top: 20px;
    }
    ul li:hover{
      transition: 0.3s;
      transform: translateX(10px);
      box-shadow: 0px 5px 6px rgba(0,0,0,0.6),0px -5px 6px rgba(255,255,255,0.1);
    }
    .lo{
      text-decoration: none;
      font-size:1.2em;
      font-weight: bold;
      font-family:arial;
      color:black;
      padding:20px;
      padding-left:50px;
      padding-right:50px;
      position:absolute;
      left:5;
      bottom:0;
      margin-bottom: 15px;
    }
    .lo:hover{
      transition: 0.3s;
      transform: translateX(10px);
      box-shadow: 0px 5px 6px rgba(0,0,0,0.6),0px -5px 6px rgba(255,255,255,0.1);
    }
    .l1{
      transform: translateX(10px);
      box-shadow: 0px 5px 6px rgba(0,0,0,0.6),0px -5px 6px rgba(255,255,255,0.1);
      font-family: cooper Black;
    }
    .l2{
      transform: translateX(10px);
      font-family: cooper Black;
    }
    .l3{
      transform: translateX(10px);
      font-family: cooper Black;
    }
    .sidemenu a{
      text-decoration: none;
      color:black;
    }
    </style>
  </head>
  <body>
    <div class="sidemenu">
      <img src="images/logo.png" id="img1"></img>
      <img src="images/ccs.jpg" id="img2"></img>
        <ul>
          <a href="facultyportal.php"><li class="l1">Dashboard</li></a>
        </ul>
        <ul>
          <a href="facultycreaterog.php"><li class="l3">Create ROG</li></a>
        </ul>
        <ul>
          <a href="facultyupdaterog.php"><li class="l3">Update ROG(s)</li></a>
        </ul>
      <a href="facultylogout.php" class="lo">Log out</a>
    </div>
    <center><h1>Hi <?Php echo $_SESSION['username'];?><br>Welcome to Your Portal</h1></center>

  <?php } ?>
  </body>
</html>
