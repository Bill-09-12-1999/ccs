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
      font-size: 20px;
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
      box-shadow: 0px 5px 6px rgba(0,0,0,0.6),0px -5px 6px rgba(255,255,255,0.1);
      font-family: cooper Black;
    }
    .l2{
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
          <a href="clerkportal.php"><li class="l2">Dashboard</li></a>
        </ul>
        <ul>
          <a href="clerkrognew.php"><li class="l1">Grade Reports</li></a>
        </ul>

      <a href="clerklogout.php" class="lo">Log out</a>
    </div>

    <div id="accessbutton">
    <button onclick="openForm()" id="open">Send Request</button>
    </div>


    <div class="formmsgtoadmin" id="form">
      <div style="position:absolute;top:0;margin-top: 4%; margin-left: 35%; background:white;width:500px;height:70%;border-radius: 10px;padding:20px;font-family: arial; font-size: 20px; overflow:auto;" id="exform">


        <button onclick="closeForm()" id="close">x</button>

        <form action="requestcopy.php" method="POST">
          <h1>ENTER YOUR REQUEST</h1><br><br>
          <p>
            Hi! This is
            <input type="text" name="sender" placeholder="Enter your System's Department Position..." required> of Ilocos Sur Polytechnic State College. I would like to request that <input type="text" name="student" placeholder="Enter the Name of Student..." required> had been completed/accomplished the documents needed on updating his/her IP Grade on the Course <input type="text" name="courseno" placeholder="Enter the Course #..." required>, with the Descriptive Title of <input type="text" name="des" placeholder="Enter the Descriptive Title..." required>.<br><br><br><br><br><br>

            Hoping for your immediate response upon viewing this request.<br><br><br><br>


            Thank You & Good Day.
          </p>
          <center><button type="Submit">Send</button></center>
        </form>
      </div>
    </div>














    <div class="links">
      <a href="clerkitrog1.php">First Year</a>
      <a href="clerkitrog2.php">Second Year</a>
      <a href="clerkitrog3.php">Third Year</a><br><br><br><br>
      <a href="clerkitrog3_1.php" style="padding:70px 60px;">Mid Year</a>
      <a href="clerkitrog4.php">Fourth Year</a>
    </div>



    <script>
      function openForm(){
        document.getElementById('form').style.display='block';
        document.getElementById('close').style.display='block';
      }

      function closeForm(){
        document.getElementById('form').style.display='none';
        document.getElementById('close').style.display='none';
      }

    </script>
<?php } ?>
  </body>
</html>
