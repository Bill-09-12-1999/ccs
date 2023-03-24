<?php
$link = mysqli_connect("localhost","root","","portal");
?>
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Upload Student ROG</title>
    <style>
    body{
      margin:0;
      padding:0;
      background:url('images/ad.jpeg');
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
      margin-top:15%;
      margin-left:20%;
      color:skyblue;
      letter-spacing: 2px;
      text-shadow: 5px 2px 3px red, 7px 2px 5px yellow;
      background: rgba(255,255,255,0.4);
      width:70%;
      border-radius:20px;
      font-size: 40px;
      padding:20px;
    }
    .sidemenu{
      width:15vw;
      height:100%;
      position: Fixed;
      left:0;
      top:0;
      background:linear-gradient(to top right, orange,red);
    }
    .sidemenu img{
      width:90px;
      height:90px;
      border-radius:50%;
      margin-left: 50px;
    }
    ul li{
      list-style: none;
      display: block;
      font-size: 15px;
      font-family: courier new;
      width:60%;
      padding:20px;
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
    .l4{
      transform: translateX(10px);
      font-family: cooper Black;
    }
    .sidemenu a{
      text-decoration: none;
      color:black;
    }
    .bg{
      background: rgba(0,0,0,0.8);
      position:fixed;
      width:100%;
      height:100%;
      top:0;
      z-index: -1;
    }
    .ul{
      position:absolute;
      margin-left:35%;
      margin-top:2%;
      top:0;
      font-family: Arial Black;
      font-size: 25px;
      background: rgba(255,255,255,0.4);
      padding:70px;
      border-radius: 10px;
      width:30%;
    }
    .ul label{
      text-shadow: 1px 2px 4px blue;
    }
    .ul #button{
        padding:10px;
        width:60%;
        text-align: center;
        font-family: arial;
        background: gray;
        border:none;
        font-size: 25px;
      }
      .ul #button:hover{
        box-shadow: 0px 5px 6px rgba(0,0,0,0.6),0px -5px 6px rgba(255,255,255,0.1);
        transition: 0.2s;
        background: rgba(0,0,230,0.5);
        color: white;
        border:none;
        transform: scale(1.2);
      }
      .ul #image{
        padding:10px;
        margin:25px auto;
        width:100%;
        text-align: center;
        font-family: arial black;
        font-size: 15px;
        background: skyblue;
        outline: none;
        border: none;
      }
      .ul #image:hover{
        transform: scale(1.3);
        transition: 0.3s;
      }
      .ul #image:focus{
        transform: scale(1.5);
        transition: 0.3s;
      }
    </style>
  </head>
  <body>
    <div class="bg"></div>
    <div class="sidemenu">
      <img src="images/logo.png"></img>
        <ul>
          <a href="adminportal.php"><li class="l2">Dashboard</li></a>
        </ul>
        <ul>
          <a href="stulist.php"><li class="l2">Student list</li></a>
        </ul>
        <ul>
          <a href="uploadstudentrog.php"><li class="l1">Upload Student ROG</li></a>
        </ul>
        
      <a href="adlogout.php" class="lo">Log out</a>
    </div>



    <?php if(isset($_GET['error'])): ?>
      <p><?php echo $_GET['error']; ?>
    <?php endif ?>
    <div class="ul">
    <form action="uploadtest.php" method="POST" enctype="multipart/form-data">
        <label for="name">Enter Student Name : </label><br>
        <input type="text" name="name" id="image" value="" required><br>
        <label for="name">Enter Student ID No. : </label><br>
        <input type="text" name="studentid" id="image" value="" required><br>
        <label for="name">Course </label><br>
        <input type="text" name="course" id="image" value="" required><br>
        <label for="name">Date Today: </label><br>
        <input type="date" name="date" id="image" value="" required><br>
        <label for="image">Choose An Image : </label><br>
        <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png" value="" required><br><br>
        <center><input type="submit" name="submit" value="Upload" id="button"></center>
    </div>








  </body>
</html>
