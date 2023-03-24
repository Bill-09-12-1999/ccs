<?php
$link = mysqli_connect("localhost","root","","portal");
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>View ROG</title>
    <style>
    body{
      margin:0;
      padding:0;
      background:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url('images/building.jpeg');
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      background-attachment: fixed;
    }
    *{
      margin:0;
      padding:0;
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
    .links{
      position: absolute;
      width: auto;
      height: 50%;
      margin-left: 30%;
      margin-top: 5%;
      padding: 20px;
    }
    @keyframes Appear{
      from{
        opacity: 0;
        transform: rotateY(100deg);
      }to{
        opacity: 1;
        transform: rotateY(0);
      }
    }
    .links a{
      background: rgb(34 25 169 / 43%);
      padding: 70px 50px 70px 50px;
      margin: 20px 20px;
      text-decoration: none;
      border-radius: 5px;
      font-family: arial black;
      color: rgb(255 255 255);
      margin-top: 5%;
      box-shadow: 3px 3px 5px rgb(0 0 0 / 63%);
      animation: Appear 5s;
      display: inline-flex;
    }
    .links a:hover{
      transition: 0.5s;
      background: rgb(255 255 255 / 43%);
      color: black;
    }
    .formmsgtoadmin{
      width: 100%;
      height: 100%;
      background: rgba(0,0,0,0.9);
      position: absolute;
      top: 0;
      left: 0;
      z-index: 2;
      display: none;
      animation: open 1.2s;
    }
    .formmsgtoadmin input{
      width: 90%;
      padding: 10px;
      border: 2px solid black;
      outline: none;
      border-top-color: white;
      border-right-color: white;
      border-left-color: white;
      text-align: center;
      text-transform: capitalize;
      font-family: Arial Black;
      font-size: 15px;
      margin: 6px auto;
      color: red;
    }
    .formmsgtoadmin input:focus{
      border: 2px solid blue;
      outline: none;
      border-top-color: white;
      border-right-color: white;
      border-left-color: white;
      animation: animate 1s;
    }
    @keyframes animate{
      from{
        opacity: 0;
        transform: rotateY(230deg);
      }to{
        opacity: 1;
        transform: rotateY(0);
      }
    }
    .formmsgtoadmin p{
      letter-spacing: 1.2px;
      margin-inline: 50px;
      margin-top: 5%;
      margin-bottom: 5%;
      text-align: justify;
      animation: animated 2s;
      line-height: 1.5em;
    }
    @keyframes animated{
      from{
        opacity: 0;
        transform: translateY(40px);
      }to{
        opacity: 1;
        transform: translateY(0);
      }
    }
    .formmsgtoadmin h1{
      font-family: impact;
      letter-spacing: 1.2px;
      margin-inline: 50px;
      margin-top: 20%;
      text-align: center;
    }
    .formmsgtoadmin button{
      padding: 30px 80px 30px 80px;
      border: none;
      background: green;
      font-size: 15px;
      font-family: arial black;
      color: white;
      text-shadow: 3px 3px 3px black;
      box-shadow: 3px 3px 3px black;
      margin-top: 20%;
      margin-bottom: 20%;
      border-radius: 10px;
      cursor: pointer;
    }
    .formmsgtoadmin #close{
      position: relative;
      top: 0;
      left: 0;
      padding: 10px 20px 10px 20px;
      background: red;
      font-size: 15px;
      font-family: arial black;
      color: white;
      text-shadow: 3px 3px 3px black;
      box-shadow: 3px 3px 3px black;
      cursor: pointer;
      border: none;
      margin-left:-10px;
      margin-top: -2%;
      border-radius: 50%;
    }
    .formmsgtoadmin #exform{
      animation: open 3s;
    }
    #accessbutton #open{
      position: absolute;
      top: 0;
      right: 0;
      padding: 10px 40px 10px 40px;
      background: red;
      font-size: 15px;
      font-family: arial black;
      color: white;
      text-shadow: 3px 3px 3px black;
      box-shadow: 3px 3px 3px black;
      cursor: pointer;
      border: none;
      margin-right: 3%;
      margin-top: 2%;
      border-radius: 5px;
      animation: open 4s;
    }
    @keyframes open{
      from{
        opacity: 0;
      }to{
        opacity: 1;
      }
    }
    </style>
  </head>
  <body>
    <div class="sidemenu">
      <img src="images/logo.png" id="img1"></img>
      <img src="images/ccs.jpg" id="img2"></img>
        <ul>
          <a href="facultyportal.php"><li class="l3">Dashboard</li></a>
        </ul>
        <ul>
          <a href="facultycreaterog.php"><li class="l3">Create ROG</li></a>
        </ul>
        <ul>
          <a href="facultyupdaterog.php"><li class="l3">Update ROG(s)</li></a>
        </ul>
        <ul>
          <a href="facultyviewrog.php"><li class="l1">View ROG(s)</li></a>
        </ul>
        
      <a href="facultylogout.php" class="lo">Log out</a>
    </div>



    <div class="links">
      <a href="facultyitviewrog1.php">First Year</a>
      <a href="facultyitviewrog2.php">Second Year</a>
      <a href="facultyitviewrog3.php">Third Year</a><br><br><br><br>
      <a href="facultyitviewrog3_1.php" style="padding:70px 60px;">Mid Year</a>
      <a href="facultyitviewrog4.php">Fourth Year</a>
    </div>



  </body>
</html>
