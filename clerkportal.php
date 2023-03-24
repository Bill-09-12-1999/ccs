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
    <title>Clerk Portal</title>
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
    body h1{
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
    .formmsgtoadmin h1{
      font-family: impact;
      letter-spacing: 1.2px;
      margin-inline: 50px;
      margin-top: 20%;
      text-align: center;
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
      background: none;
      color: #38a700;
      text-shadow: 5px 2px 3px #08080c, 7px 2px 5px rgb(10 10 10 / 65%);
      letter-spacing: 7px;
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
    .tp1{
      position: absolute;
      right: 0;
      top: 0;
      margin-top: 1%;
      margin-right: 2%;
      z-index: 2;
      background: blue;
      color: white;
      padding: 5px;
      font-family: arial black;
      text-shadow: 1px 1px 2px black;
      font-size: 15px;
      border-radius: 50%;
      width: 2vw;
      height: 4vh;
      text-align: center;
      animation: open 4s;
    }
    #open svg{
      animation: svganimation 4s linear infinite;
    }
    @keyframes svganimation{
      0%{
        transform: rotateY(0deg);
        background: green;
        border-radius: 50%;
        padding: 5px;
      }100%{
        transform: rotateY(360deg);
        background: blue;
        border-radius: 50%;
        padding: 5px;
      }
    }
    </style>
  </head>
  <body>
    <div class="sidemenu">
      <img src="images/logo.png" id="img1"></img>
      <img src="images/ccs.jpg" id="img2"></img>
        <ul>
          <a href="clerkportal.php"><li class="l1">Dashboard</li></a>
        </ul>
        <ul>
          <a href="clerkrognew.php"><li class="l2">Grade Reports</li></a>
        </ul>
      <a href="clerklogout.php" class="lo">Log out</a>
    </div>


    <center><h1 style="text-transform: capitalize;">Hi <?Php echo $_SESSION['username'];?><br>Welcome to Your Portal</h1></center>






    <div id="accessbutton">
    <button onclick="openForm()" id="open">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-messenger" viewBox="0 0 16 16">
          <path d="M0 7.76C0 3.301 3.493 0 8 0s8 3.301 8 7.76-3.493 7.76-8 7.76c-.81 0-1.586-.107-2.316-.307a.639.639 0 0 0-.427.03l-1.588.702a.64.64 0 0 1-.898-.566l-.044-1.423a.639.639 0 0 0-.215-.456C.956 12.108 0 10.092 0 7.76zm5.546-1.459-2.35 3.728c-.225.358.214.761.551.506l2.525-1.916a.48.48 0 0 1 .578-.002l1.869 1.402a1.2 1.2 0 0 0 1.735-.32l2.35-3.728c.226-.358-.214-.761-.551-.506L9.728 7.381a.48.48 0 0 1-.578.002L7.281 5.98a1.2 1.2 0 0 0-1.735.32z"/>
          </svg>
    </button>

    <div class="tp1" id="tp1"></div>
    </div>


    <div class="formmsgtoadmin" id="form">
      <div style="position:absolute;top:0;margin-top: 4%; margin-left: 35%; background:white;width:500px;height:70%;border-radius: 10px;padding:20px;font-family: arial; font-size: 20px; overflow:auto;" id="exform">


        <button onclick="closeForm()" id="close">x</button>


      <?php
        $query = "SELECT * FROM `request1`";
        $results=mysqli_query($link,$query);
        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
      ?>

          <h1>REQUEST RESPONSE</h1><br><br>
          <p>
            Hi! This is
            <b style="text-transform: capitalize;"><?php echo $result['sender'];?></b> of Ilocos Sur Polytechnic State College. Your request on updating the grade of <b style="text-transform: capitalize;"><?php echo $result['student'];?></b> in the Course of <b style="text-transform: capitalize;"><?php echo $result['courseno'];?></b>, with the Descriptive Title of <b style="text-transform: capitalize;"><?php echo $result['des'];?></b> is being viewed and approved.<br><br><br><br>

            Your request may experience delays due to huge amount of transactions.<br><br><br><br><br><br>


            Thank You & Good Day.
          </p>
      <?php
      }
      } else {
      ?>
          <p> no data</p>
      <?php } ?>
      </div>
    </div>





    <script>
      function openForm(){
        document.getElementById('form').style.display='block';
        document.getElementById('close').style.display='block';
      }

      function closeForm(){
        document.getElementById('form').style.display='none';
        document.getElementById('close').style.display='none';
        document.getElementById('tp1').style.display='none';
      }
      var a=
      <?php
      $query = "SELECT * FROM `request1`";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>;

      document.getElementById('tp1').innerHTML=a;
    </script>
  <?php } ?>
  </body>
</html>
