<?php
$link = mysqli_connect("localhost","root","","portal");
?>
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Faculty IT ROG Creator</title>
    <style>
    body{
      margin:0;
      padding:0;
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
      margin-bottom: 30px;
    }
    ul li{
      list-style: none;
      display: block;
      font-size: 15px;
      font-family: courier new;
      width:60%;
      margin-top: 20px;
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
      left: 0;
      top:0;
      padding:20px;
      padding-left:20px;
      padding-right:50px;
      font-size: 25px;
      font-family: cooper Black;
    }
    .l1:hover{
      box-shadow: 0px 5px 6px rgba(0,0,0,0.6),0px -5px 6px rgba(255,255,255,0.1);
      transition: 0.3s;
    }
    .l2{
      left: 0;
      padding:20px;
      padding-left:20px;
      padding-right:1px;
      font-family: cooper Black;
      font-size: 20px;
      position: absolute;
      box-shadow: 0px 5px 6px rgba(0,0,0,0.6),0px -5px 6px rgba(255,255,255,0.1);
      font-family: cooper Black;
    }
    .l3{
      left: 0;
      padding:20px;
      padding-left:19px;
      padding-right:5px;
      font-family: cooper Black;
      font-size: 20px;
      position: absolute;
    }
    .l3:hover{
      box-shadow: 0px 5px 6px rgba(0,0,0,0.6),0px -5px 6px rgba(255,255,255,0.1);
      transition: 0.3s;
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
    .rog{
    	box-shadow: 1px 1px 10px black;
      margin-bottom: 20%;
    }
    .rog input{
    	font-size: 20px;
    	font-weight: bold;
      text-align: center;
      outline: none;
      color: red;
      text-transform: capitalize;
    }
    .rog input:focus{
    	text-align: center;
    }
    .rog #submit{
      padding: 5px;
      background: green;
      border: none;
      cursor: pointer;
      color: white;
      text-shadow: 1px 1px 1px black;
    }
    .sidemenu-right #IT{
      width:60%;
      height:4vh;
      text-align: center;
      text-decoration: none;
      position:absolute;
      left:0;
      top:0;
      margin-top: 2%;
      margin-left: 20%;
      font-family:cooper Black;
      padding:10px;
      border-radius:5px;
      cursor: pointer;
      background: linear-gradient(to top, gray,silver);
      color:black;
      text-shadow: 2px 3px 2px green;
    }
    .sidemenu-right #IS{
      width:60%;
      height:4vh;
      text-align: center;
      text-decoration: none;
      position:absolute;
      left:0;
      top:0;
      margin-top: 50%;
      margin-left: 20%;
      font-family:cooper Black;
      padding:10px;
      border-radius:5px;
      cursor: pointer;
      background: rgba(0, 0, 0, 0.5);
      color: white;
    }
    .sidemenu-right #IS:hover{
      background: linear-gradient(to top, gray,silver);
      color:black;
      text-shadow: 2px 3px 2px green;
    }
    .info{
      position: absolute;
      right: 0;
      margin-right: 2%;
      margin-top: 10%;
    }
    .info button{
      border: none;
      outline: none;
      border-radius: 50px;
      cursor: pointer;
    }
    </style>
  </head>
  <body>
    <div class="bg"></div>
    <div class="sidemenu">
      <img src="images/logo.png"></img>
        <ul>
          <li><a href="facultyportal.php" class="l1">Dashboard</li></a>
        </ul><br>
        <ul>
          <li><a href="facultygradingsheet1.php" class="l2">Create Student ROG</li></a>
        </ul><br><br><br><br>
        <ul>
          <li><a href="studentrogrecords.php" class="l3">Created Student ROG(s)</li></a>
        </ul>
        
      <a href="facultylogout.php" class="lo">Log out</a>
    </div>

    <div style="width:10vw; height:20vh;position:absolute;right:0;" class="sidemenu-right">

        <center><a href="facultygradingsheet1.php" id="IT">IT</a><br>
        <a href="facultygradingsheet2.php" id="IS">IS</a></center>
    </div>







    <form action="facultygradingsheet1copy.php" method="POST">
    <div style="background: white;padding:20px; font-family: arial; width:70%;margin-top:1.4%;margin-left: 17%;" class="rog">
    	
    	<center>
    		<h4>Republic of the Phillipines</h4><br>
    		<h3>ILOCOS SUR POLYTECHNIC STATE COLLEGE</h3><br>
    		<h4>Sta.Maria, 2705 Ilocos Sur</h4><br>
    		<h2>REPORTS OF GRADES</h2><br>
    		<input type="text" name="sem" value="1st" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:10%;margin-right:2%;">

          </u> Semester, AY: <input type="text" name="AY" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:13%;margin-left:2%;"> 
    	</center><br><br>





    	<h3>
    		Name of student:<input type="text" name="name" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:40%;margin-right:12%;margin-left:2%;" required>
    		ID NO: <input type="text" name="studentid" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:20%;margin-left:1.2%;">
    	</h3><br>
    	<h3>
    		Course: <input type="text" name="course" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:48%;margin-right:12%;margin-left:2%;">
    		Year & Section:<input type="text" name="section" value="I - " style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:12.6%;margin-left:1.2%;">
    	</h3><br>








    	<table style="width:100%">
    		<tr>
    			<th>Subjects</th>
    			<th>Final Grades</th>
    		</tr>
    		<tr>
          <td> 
            <input type="text" name="sub1" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade1" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
    		</tr>
        <tr>
        <td> 
            <input type="text" name="sub2" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade2" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub3" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade3" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub4" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade4" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub5" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade5" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub6" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade6" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub7" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade7" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub8" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade8" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub9" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade9" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub10" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade10" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr style="height:4vh;">
        </tr>
      </table>





            <center><input type="text" name="sem2" value="2nd" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:10%;margin-right:2%;">
              Semester, AY: <input type="text" name="AY2" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:13%;margin-left:2%;margin-right:2%;"> Year & Section:<input type="text" name="section2" value="I - " style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:12.6%;margin-left:1.2%;"></center><br>




        <table style="width:100%">
        <tr>
          <th>Subjects</th>
          <th>Final Grades</th>
        </tr>
        <tr>
          <td> 
            <input type="text" name="sub11" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade11" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub12" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade12" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub13" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade13" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub14" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade14" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub15" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade15" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub16" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade16" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub17" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade17" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub18" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade18" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub19" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade19" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub20" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade20" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr style="height:4vh;">
        </tr>
      </table>
        





        <center><input type="text" name="sem3" value="1st" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:10%;margin-right:2%;">
              Semester, AY: <input type="text" name="AY3" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:13%;margin-left:2%;margin-right:2%;"> Year & Section:<input type="text" name="section3" value="II - " style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:12.6%;margin-left:1.2%;"></center><br>




        <table style="width:100%">
        <tr>
          <th>Subjects</th>
          <th>Final Grades</th>
        </tr>
        <tr>
          <td> 
            <input type="text" name="sub21" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade21" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub22" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade22" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub23" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade23" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub24" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade24" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub25" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade25" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub26" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade26" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub27" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade27" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub28" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade28" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub29" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade29" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub30" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade30" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr style="height:4vh;">
        </tr>
      </table>





      <center><input type="text" name="sem4" value="2nd" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:10%;margin-right:2%;">
              Semester, AY: <input type="text" name="AY4" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:13%;margin-left:2%;margin-right:2%;"> Year & Section:<input type="text" name="section4" value="II - " style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:12.6%;margin-left:1.2%;"></center><br>

        <table style="width:100%">
        <tr>
          <th>Subjects</th>
          <th>Final Grades</th>
        </tr>
        <tr>
          <td> 
            <input type="text" name="sub31" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade31" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub32" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade32" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub33" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade33" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub34" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade34" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub35" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade35" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub36" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade36" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub37" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade37" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub38" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade38" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub39" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade39" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub40" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade40" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr style="height:4vh;">
        </tr>
      </table>




      <center><input type="text" name="sem5" value="1st" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:10%;margin-right:2%;">
              Semester, AY: <input type="text" name="AY5" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:13%;margin-left:2%;margin-right:2%;"> Year & Section:<input type="text" name="section5" value="III - " style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:12.6%;margin-left:1.2%;"></center><br>

        <table style="width:100%">
        <tr>
          <th>Subjects</th>
          <th>Final Grades</th>
        </tr>
        <tr>
          <td> 
            <input type="text" name="sub41" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade41" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub42" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade42" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub43" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade43" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub44" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade44" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub45" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade45" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub46" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade46" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub47" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade47" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub48" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade48" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub49" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade49" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub50" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade50" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr style="height:4vh;">
        </tr>
      </table>






      <center><input type="text" name="sem6" value="2nd" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:10%;margin-right:2%;">
              Semester, AY: <input type="text" name="AY6" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:13%;margin-left:2%;margin-right:2%;"> Year & Section:<input type="text" name="section6" value="III - " style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:12.6%;margin-left:1.2%;"></center><br>

        <table style="width:100%">
        <tr>
          <th>Subjects</th>
          <th>Final Grades</th>
        </tr>
        <tr>
          <td> 
            <input type="text" name="sub51" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade51" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub52" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade52" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub53" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade53" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub54" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade54" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub55" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade55" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub56" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade56" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub57" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade57" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub58" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade58" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub59" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade59" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub60" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade60" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr style="height:4vh;">
        </tr>
      </table>







      <center><input type="text" name="sem7" value="Midyear" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:10%;margin-right:2%;">
              Semester, AY: <input type="text" name="AY7" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:13%;margin-left:2%;margin-right:2%;"> Year & Section:<input type="text" name="section7" value="III - " style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:12.6%;margin-left:1.2%;"></center><br>

        <table style="width:100%">
        <tr>
          <th>Subjects</th>
          <th>Final Grades</th>
        </tr>
        <tr>
          <td> 
            <input type="text" name="sub61" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade61" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub62" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade62" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub63" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade63" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub64" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade64" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub65" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade65" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub66" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade66" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub67" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade67" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub68" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade68" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub69" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade69" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub70" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade70" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr style="height:4vh;">
        </tr>
      </table>





      <center><input type="text" name="sem8" value="1st" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:10%;margin-right:2%;">
              Semester, AY: <input type="text" name="AY8" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:13%;margin-left:2%;margin-right:2%;"> Year & Section:<input type="text" name="section8" value="IV - " style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:12.6%;margin-left:1.2%;"></center><br>

        <table style="width:100%">
        <tr>
          <th>Subjects</th>
          <th>Final Grades</th>
        </tr>
        <tr>
          <td> 
            <input type="text" name="sub71" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade71" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub72" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade72" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub73" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade73" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub74" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade74" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub75" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade75" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub76" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade76" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub77" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade77" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub78" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade78" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub79" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade79" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub80" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade80" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr style="height:4vh;">
        </tr>
      </table>







      <center><input type="text" name="sem9" value="2nd" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:10%;margin-right:2%;">
              Semester, AY: <input type="text" name="AY9" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:13%;margin-left:2%;margin-right:2%;"> Year & Section:<input type="text" name="section9" value="IV - " style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:12.6%;margin-left:1.2%;"></center><br>

        <table style="width:100%">
        <tr>
          <th>Subjects</th>
          <th>Final Grades</th>
        </tr>
        <tr>
          <td> 
            <input type="text" name="sub81" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade81" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub82" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade82" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub83" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade83" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub84" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade84" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub85" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade85" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub86" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade86" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub87" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade87" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub88" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade88" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub89" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade89" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr>
        <td> 
            <input type="text" name="sub90" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
          <td>
            <input type="text" name="grade90" style="border-style: solid;border: 1px solid black;border-top-color: white;border-left-color: white;border-right-color:white;width:50%;margin-left:25%;">
          </td>
        </tr>
        <tr style="height:4vh;">
          <td><input type="hidden" name="acquire"></td>
        </tr>
        <tr>
            <td colspan="2"><center><input type="submit" value ="Submit" id="submit"></center></td>
        </tr>
      </table>
    </div></form>



    <script>
      alert('Before you create ROG here Please make sure that the student is not on the CREATED STUDENT ROGs');
    </script>
  </body>
</html>
