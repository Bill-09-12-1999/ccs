<?php
$link = mysqli_connect("localhost","root","","portal");
?>
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student Subjects</title>
    <style>
    body{
      margin:0;
      padding:0;
    }
    *{
      margin:0;
      padding:0;
    }
    .sidemenu{
      width:15vw;
      height:100%;
      position: fixed;
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
      font-size: 20px;
      font-family: courier new;
      width:60%;
      padding:20px;
      padding-left:50px;
      margin-top: 5px;
    }
    ul li:hover{
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
      transform: translateX(10px);
      box-shadow: 0px 5px 6px rgba(0,0,0,0.6),0px -5px 6px rgba(255,255,255,0.1);
    }
    .s1{
      transform: translateX(10px);
      box-shadow: 0px 5px 6px rgba(0,0,0,0.6),0px -5px 6px rgba(255,255,255,0.1);
      font-family: cooper Black;
    }
    .s2{
      transform: translateX(10px);
      font-family: cooper Black;
    }
    .l3{
      transform: translateX(10px);
      box-shadow: 0px 5px 6px rgba(0,0,0,0.6),0px -5px 6px rgba(255,255,255,0.1);
      font-family: cooper Black;
    }
    .l2{
      transform: translateX(10px);
      font-family: cooper Black;
    }
    .l1{
      transform: translateX(10px);
      font-family: cooper Black;
    }
    .sidemenu a{
      text-decoration: none;
      color:black;
    }
    .fee table{
      position: absolute;
      margin-left: 15.2%;;
      width:75%;
      background: rgba(109,154,187,0.7);
      top:0;
    }
    .fee #h1{
      font-family: courier new;
      font-size: 30px;
      text-align: left;
      padding: 10px;
    }
    .fee #h2{
      font-family: arial;
      font-size: 15px;
      text-align: left;
      padding: 3px;
    }
    .fee #h3{
      font-family: arial;
      font-size: 15px;
      text-align: left;
      padding: 10px;
    }
    .stamp img{

    }
    .stamp{
      right:0;
      margin-top:50%;
      margin-right: 8%;
      position: absolute;
      opacity:0.6;
    }
    .stamp img{
      width:20vw;
      height:10vw;
      transform:rotate(-20deg);
    }
    .course{
      position:fixed;
      right:0;
      width:180px;
      background:linear-gradient(to top left, green, maroon);
      height:100%;
      z-index: 2;
      text-align: center;
    }
    .course a{
      text-decoration: none;
      color:white;
      padding:40;
    }
    .course img{
      width:90px;
      height:90px;
      border-radius:50%;
      margin-left: 50px;
    }
    </style>
  </head>
  <body>
    <div class="sidemenu">
      <img src="images/logo.png"></img>
        <ul>
          <a href="studentportal.php"><li class="l1">Dashboard</li></a>
        </ul>
        <ul>
          <a href="grade.php"><li class="l2">Grades</li></a>
        </ul>
        <ul>
          <a href="enroll.php"><li class="l2">Enrollment Billing estimation</li></a>
        </ul>
        <ul>
          <a href="subjects.php"><li class="l3">Subjects</li></a>
        </ul>
        <ul>
          <a href="studgrade.php"><li class="l2">Your Grades</li></a>
        </ul>
      <a href="userlogout.php" class="lo">Log out</a>
    </div>









    
    <div class="course">
      <img src="images/ccs.jpg"></img>
      <ul>
        <li class="s2"><a href="subjects.php">BSIT, WDMT Major</li></a><br>
      </ul>
      <ul>
        <li class="s2"><a href="itnet.php">BSIT, NCT Major</li></a><br>
      </ul>
      <ul>
        <li class="s1"><a href="issub.php">BSIS, DA Major</li></a><br>
      </ul>
    </div>
    <div class="fee">
      <table>
        <tr>
          <th id="h1">Course Number</th>
          <th id="h1">Descriptive Title</th>
        </tr>
        <tr>
          <th id="h3">First Year, First Semester</th>
          <th id="h3"></th>
        </tr>
        <tr>
          <th id="h2"></th>
          <th id="h2"></th>
        </tr>
        <tr>
          <th id="h2"></th>
          <th id="h2"></th>
        </tr>
        <tr>
          <th id="h2"></th>
          <th id="h2"></th>
        </tr>
        <tr>
          <th id="h2"></th>
          <th id="h2"></th>
        </tr>
        <tr>
          <th id="h2"></th>
          <th id="h2"></th>
        </tr>
        <tr>
          <th id="h2"></th>
          <th id="h2"></th>
        </tr>
        <tr>
          <th id="h2"></th>
          <th id="h2"></th>
        </tr>
        <tr>
          <th id="h2"></th>
          <th id="h2"></th>
        </tr>
        <tr>
          <th id="h3">First Year, Second Semester</th>
          <th id="h3"></th>
        </tr>
        <tr>
          <th id="h2"></th>
          <th id="h2"></th>
        </tr>
        <tr>
          <th id="h2"></th>
          <th id="h2"></th>
        </tr>
        <tr>
          <th id="h2"></th>
          <th id="h2"></th>
        </tr>
        <tr>
          <th id="h2"></th>
          <th id="h2"></th>
        </tr>
        <tr>
          <th id="h2"></th>
          <th id="h2"></th>
        </tr>
        <tr>
          <th id="h2"></th>
          <th id="h2"></th>
        </tr>
        <tr>
          <th id="h2"></th>
          <th id="h2"></th>
        </tr>
        <tr>
          <th id="h2"></th>
          <th id="h2"></th>
        </tr>
        <tr>
          <th id="h3">Second Year, First Semester</th>
          <th id="h3"></th>
        </tr>
        <tr>
          <th id="h2"></th>
          <th id="h2"></th>
        </tr>
        <tr>
          <th id="h2"></th>
          <th id="h2"></th>
        </tr>
        <tr>
          <th id="h2"></th>
          <th id="h2"></th>
        </tr>
        <tr>
          <th id="h2"></th>
          <th id="h2"></th>
        </tr>
        <tr>
          <th id="h2"></th>
          <th id="h2"></th>
        </tr>
        <tr>
          <th id="h2"></th>
          <th id="h2"></th>
        </tr>
        <tr>
          <th id="h2"></th>
          <th id="h2"></th>
        </tr>
        <tr>
          <th id="h3">Second Year, Second Semester</th>
          <th id="h3"></th>
        </tr>
        <tr>
          <th id="h2"></th>
          <th id="h2"></th>
        </tr>
        <tr>
          <th id="h2"></th>
          <th id="h2"></th>
        </tr>
        <tr>
          <th id="h2"></th>
          <th id="h2"></th>
        </tr>
        <tr>
          <th id="h2"></th>
          <th id="h2"></th>
        </tr>
        <tr>
          <th id="h2"></th>
          <th id="h2"></th>
        </tr>
        <tr>
          <th id="h2"></th>
          <th id="h2"></th>
        </tr>
        <tr>
          <th id="h2"></th>
          <th id="h2"></th>
        </tr>
        <tr>
          <th id="h2"></th>
          <th id="h2"></th>
        </tr>
        <tr>
          <th id="h2"></th>
          <th id="h2"></th>
        </tr>
        <tr>
          <th id="h2"></th>
          <th id="h2"></th>
        </tr>
        <tr>
          <th id="h2"></th>
          <th id="h2"></th>
        </tr>
        <tr>
          <th id="h2"></th>
          <th id="h2"></th>
        </tr>
        <tr>
          <th id="h2"></th>
          <th id="h2"></th>
        </tr>
        <tr>
          <th id="h2"></th>
          <th id="h2"></th>
        </tr>
        <tr>
          <th id="h2"></th>
          <th id="h2"></th>
        </tr>
        <tr>
          <th id="h2"></th>
          <th id="h2"></th>
        </tr>
        <tr>
          <th id="h2"></th>
          <th id="h2"></th>
        </tr>
        <tr>
          <th id="h3">Third Year, Second Semester</th>
          <th id="h3"></th>
        </tr>
        <tr>
          <th id="h2"></th>
          <th id="h2"></th>
        </tr>
        <tr>
          <th id="h2"></th>
          <th id="h2"></th>
        </tr>
        <tr>
          <th id="h2"></th>
          <th id="h2"></th>
        </tr>
        <tr>
          <th id="h2"></th>
          <th id="h2"></th>
        </tr>
        <tr>
          <th id="h2"></th>
          <th id="h2"></th>
        </tr>
        <tr>
          <th id="h2"></th>
          <th id="h2"></th>
        </tr>
        <tr>
          <th id="h2"></th>
          <th id="h2"></th>
        </tr>
        <tr>
          <th id="h2"></th>
          <th id="h2"></th>
        </tr>
        <tr>
          <th id="h2"></th>
          <th id="h2"></th>
        </tr>
        <tr>
          <th id="h3">Midyear</th>
          <th id="h3"></th>
          <tr>
            <th id="h2"></th>
            <th id="h2"></th>
          </tr>
          <tr>
            <th id="h2"></th>
            <th id="h2"></th>
          </tr>
          <tr>
            <th id="h2"></th>
            <th id="h2"></th>
          </tr>
        <tr>
          <th id="h3">Fourth Year, First Semester</th>
          <th id="h3"></th>
          <tr>
            <th id="h2"></th>
            <th id="h2"></th>
          </tr>
          <tr>
            <th id="h2"></th>
            <th id="h2"></th>
          </tr>
          <tr>
            <th id="h2"></th>
            <th id="h2"></th>
          </tr>
          <tr>
            <th id="h2"></th>
            <th id="h2"></th>
          </tr>
          <tr>
            <th id="h2"></th>
            <th id="h2"></th>
          </tr>
        <tr>
          <th id="h3">Fourth Year, Second Semester</th>
          <th id="h3"></th>
          <tr>
            <th id="h2"></th>
            <th id="h2"></th>
          </tr>
      </div>
      </table>
    </div>
  </body>
</html>
