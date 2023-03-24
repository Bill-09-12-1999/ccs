<?php
$link = mysqli_connect("localhost","root","","portal");
?>
<?php
session_start();
$id=['id'];
$studentid=$_SESSION['studentid'];
if(!isset($_SESSION['studentid']))
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
    <title>Student Change Password</title>
    <style>
    body{
      margin:0;
      padding:0;
      background:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)),url('images/ispsc.jpeg');
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
      background: rgba(0,0,0,0.4);
      width:70%;
      border-radius:20px;
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
    .dialogbox{
      position: absolute;
      width: 300px;
      height: 70%;
      overflow: auto;
      margin-top: 3%;
      margin-left: 45%;
      padding: 50px;
      text-align: center;
      font-family: arial black;
      color: white;
      letter-spacing: 2px;
      background: rgba(255,255,255,0.2);
      text-shadow: 1px 1px 2px black;
      border-radius: 10px;
      box-shadow: 3px 3px 5px black;
      animation: Appear 0.5s;
    }
    @keyframes Appear{
      from{
        opacity: 0;
        transform: rotateY(230deg);
      }to{
        opacity: 1;
        transform: rotateY(0);
      }
    }
    .dialogbox input{
      width: 95%;
      padding: 20px 20px 20px 20px;
      margin-bottom: 15px;
      border: none;
      background: black;
      color: white;
      font-family: arial;
      outline: none;
      margin-left: -10px;
    }
    .dialogbox input:focus{
      font-weight: bold;
    }
    .dialogbox #submit{
      cursor: pointer;
      width: 200px;
      padding: 10px 20px 10px 20px;
    }
    .eye{
          position: absolute;
          margin-right: 60px;
          color: red;
          margin-top: -47%;
          right: 0;
    }
    .eye1{
          position: absolute;
          margin-right: 60px;
          color: red;
          margin-top: -50px;
          right: 0;
    }
    </style>
  </head>
  <body>




    <div class="sidemenu">
      <img src="images/logo.png" id="img1"></img>
      <img src="images/ccs.jpg" id="img2"></img>
        <ul>
          <a href="studentportal.php"><li class="l2">Dashboard</li></a>
        </ul>
        <ul>
          <a href="studentgrade.php"><li class="l3">Your Grades</li></a>
        </ul>
        <ul>
          <a href="changepass.php"><li class="l1">Change Password</li></a>
        </ul>
      <a href="userlogout.php" class="lo">Log out</a>
    </div>



    <div class="dialogbox">
    <form action="upuseraccount.php" method="POST">
              <?php
              $studentid=$_SESSION['studentid'];
              $password=$_SESSION['password'];
              ?>
              <?php
              $query = "SELECT studentid,password FROM `user` WHERE `studentid`= '$studentid'";
              $results = mysqli_query($link,$query);
              $result= mysqli_fetch_array($results);
               ?>


              <h2 style="color:skyblue;text-shadow:1px 1px 2px black;letter-spacing: 0;">Username:</h2><br>
              <?php echo $_SESSION['studentid']; ?><br><br><br>






               <h2 style="color:skyblue;text-shadow:1px 1px 2px black;letter-spacing: 0;">Old Password:</h2><br>
              <input type="password" name="oldpassword" placeholder="Enter Password..." id="password" required>


              <h2 style="color:skyblue;text-shadow:1px 1px 2px black;letter-spacing: 0;">Change password:</h2><br>
              <input type="password" name="password1" placeholder="Enter New Password..." id="password1" required>




              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="eye bi-eye-fill" viewBox="0 0 16 16" onclick="toggle()" style="cursor:pointer;">
                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
              </svg>


              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="eye1 bi-eye-fill" viewBox="0 0 16 16" onclick="toggle1()" style="cursor:pointer;">
                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
              </svg>



              <br><br><br>
              <input type="submit" value="Submit" id="submit">
          </form>
    </div>



<script>
  var state= false;
        function toggle(){
          if(state){
            document.getElementById("password").setAttribute("type","password");
            state=false;
          }else{
            document.getElementById("password").setAttribute("type","text");
            state=true;
          }
        }
        function toggle1(){
          if(state){
            document.getElementById("password1").setAttribute("type","password");
            state=false;
          }else{
            document.getElementById("password1").setAttribute("type","text");
            state=true;
          }
        }

</script>
<?php } ?>
  </body>
</html>
