<?php
$link = mysqli_connect("localhost","root","","portal");
?>
<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student Updated Grade</title>
    <style>
    body{
      margin:0;
      padding:0;
      background:gray;
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
    a{
      text-decoration: none;
      color:black;
    }
    .regis{
        width: 70%;
        margin-top:1%;
        margin-left:20%;
        background: rgba(255,255,255,0.7);
        border-radius: 10px;
        box-shadow: 0 20px 30px rgba(0,0,0,0.8);
        padding: 10px;
        font-family: arial;
        position: absolute;
      }
      .regis img{
          border-radius: 50%;
          width:130px;
          height:130px;
          margin-top: 10px;
        }
        .regis table{
          width: 95%;
          margin-left: 5%;
        }
        .regis table th{
          width: 40%;
          font-size: 20px;
          text-align: left;
        }
    </style>
  </head>
  <body>
    <div class="sidemenu">
      <img src="images/logo.png"></img>
        <ul>
          <a href="isstudentportal.php"><li class="l3">Dashboard</li></a>
        </ul>
        <ul>
          <a href="studgrade2.php"><li class="l2">Your Grades</li></a>
        </ul>
        <ul>
          <a href="upstudgrade2.php"><li class="l1">Updated Grade</li></a>
        </ul>
        <ul>
          <a href="changepass2.php"><li class="l2">Change Password</li></a>
        </ul>
      <a href="userlogout2.php" class="lo">Log out</a>
    </div>

    <?php
    $studentid=$_SESSION['studentid'];
    ?>

    <?php
    $query = "SELECT * FROM `registrarisrecords` WHERE `studentid`= '$studentid'";
    $results = mysqli_query($link,$query);
    $result= mysqli_fetch_array($results);
     ?>
     <div class="regis">

        <center><img src="images/logo.png"></img><br>
        <h4>Republic of the Phillipines</h4><br>
        <h3>ILOCOS SUR POLYTECHNIC STATE COLLEGE</h3><br>
        <h4>Sta.Maria, 2705 Ilocos Sur</h4><br>
        <h2>REPORTS OF GRADES</h2><br>
        <h2><u><i>_<?php echo $result['sem']; ?>_</u></i> Semester, AY <u><i><?php echo $result['AY']; ?></u></i></h2>
        </center><br><br>









        <table style="margin-left: 5%; width:100%;">
          <tr>
            <th style="width:70%;">Name: <b><i><u><?php echo $result['name'];?></i></u></b></th>
            <th>ID NO: <b><i><u><?php echo $result['studentid'];?></i></u></b></th>
          </tr>
          <tr>
            <th style="width:70%;">Course: <b><i><u><?php echo $result['course'];?></i></u></b></th>
            <th>Year & Section: <b><i><u><?php echo $result['section'];?></i></u></b></th>
          </tr>
        </table>
        <table>
          <tr style="height:5vh";>
          </tr>
          <tr style="text-align: center;height:8vh">
            <td><h3>Subjects</h3></td>
            <td><h3>Final Grade</h3></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub1']; ?></td>
            <td><u><i>__<?php echo $result['grade1']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub2']; ?></td>
            <td><u><i>__<?php echo $result['grade2']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub3']; ?></td>
            <td><u><i>__<?php echo $result['grade3']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub4']; ?></td>
            <td><u><i>__<?php echo $result['grade4']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub5']; ?></td>
            <td><u><i>__<?php echo $result['grade5']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub6']; ?></td>
            <td><u><i>__<?php echo $result['grade6']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub7']; ?></td>
            <td><u><i>__<?php echo $result['grade7']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub8']; ?></td>
            <td><u><i>__<?php echo $result['grade8']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub9']; ?></td>
            <td><u><i>__<?php echo $result['grade9']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub10']; ?></td>
            <td><?php echo $result['grade10']; ?></td>
          </tr>
        </table><br><br>











        <center><h2><u><i>_<?php echo $result['sem2']; ?>_</u></i> Semester, AY __<u><i><?php echo $result['AY2']; ?></u></i>__, Section: <u><i> __<?php echo $result['section2']; ?>__</u></i></h2>
        </center><br>

        <table>
          <tr style="text-align: center;height:8vh">
            <td><h3>Subjects</h3></td>
            <td><h3>Final Grade</h3></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub11']; ?></td>
            <td><i><u>__<?php echo $result['grade11']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub12']; ?></td>
            <td><i><u>__<?php echo $result['grade12']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub13']; ?></td>
            <td><i><u>__<?php echo $result['grade13']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub14']; ?></td>
            <td><i><u>__<?php echo $result['grade14']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub15']; ?></td>
            <td><i><u>__<?php echo $result['grade15']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub16']; ?></td>
            <td><i><u>__<?php echo $result['grade16']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub17']; ?></td>
            <td><i><u>__<?php echo $result['grade17']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub18']; ?></td>
            <td><i><u>__<?php echo $result['grade18']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub19']; ?></td>
            <td><i><u>__<?php echo $result['grade19']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub20']; ?></td>
            <td><i><u>__<?php echo $result['grade20']; ?>__</i></u></td>
          </tr>
          <tr style="height:10vh;"></tr>
        </table>









        <center><h2><u><i>_<?php echo $result['sem3']; ?>_</u></i> Semester, AY __<u><i><?php echo $result['AY3']; ?></u></i>__, Section: <u><i> __<?php echo $result['section3']; ?>__</u></i></h2>
        </center><br>

        <table>
          <tr style="text-align: center;height:8vh">
            <td><h3>Subjects</h3></td>
            <td><h3>Final Grade</h3></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub21']; ?></td>
            <td><i><u>__<?php echo $result['grade21']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub22']; ?></td>
            <td><i><u>__<?php echo $result['grade22']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub23']; ?></td>
            <td><i><u>__<?php echo $result['grade23']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub24']; ?></td>
            <td><i><u>__<?php echo $result['grade24']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub25']; ?></td>
            <td><i><u>__<?php echo $result['grade25']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub26']; ?></td>
            <td><i><u>__<?php echo $result['grade26']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub27']; ?></td>
            <td><i><u>__<?php echo $result['grade27']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub28']; ?></td>
            <td><i><u>__<?php echo $result['grade28']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub29']; ?></td>
            <td><i><u>__<?php echo $result['grade29']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub30']; ?></td>
            <td><i><u>__<?php echo $result['grade30']; ?>__</i></u></td>
          </tr>
          <tr style="height:10vh;"></tr>
        </table><br><br>






        <center><h2><u><i>_<?php echo $result['sem4']; ?>_</u></i> Semester, AY __<u><i><?php echo $result['AY4']; ?></u></i>__, Section: <u><i> __<?php echo $result['section4']; ?>__</u></i></h2>
        </center><br>

        <table>
          <tr style="text-align: center;height:8vh">
            <td><h3>Subjects</h3></td>
            <td><h3>Final Grade</h3></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub31']; ?></td>
            <td><i><u>__<?php echo $result['grade31']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub32']; ?></td>
            <td><i><u>__<?php echo $result['grade32']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub33']; ?></td>
            <td><i><u>__<?php echo $result['grade33']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub34']; ?></td>
            <td><i><u>__<?php echo $result['grade34']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub35']; ?></td>
            <td><i><u>__<?php echo $result['grade35']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub36']; ?></td>
            <td><i><u>__<?php echo $result['grade36']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub37']; ?></td>
            <td><i><u>__<?php echo $result['grade37']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub38']; ?></td>
            <td><i><u>__<?php echo $result['grade38']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub39']; ?></td>
            <td><i><u>__<?php echo $result['grade39']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub40']; ?></td>
            <td><i><u>__<?php echo $result['grade40']; ?>__</i></u></td>
          </tr>
          <tr style="height:10vh;"></tr>
        </table><br><br>









        <center><h2><u><i>_<?php echo $result['sem5']; ?>_</u></i> Semester, AY __<u><i><?php echo $result['AY5']; ?></u></i>__, Section: <u><i> __<?php echo $result['section5']; ?>__</u></i></h2>
        </center><br>

        <table>
          <tr style="text-align: center;height:8vh">
            <td><h3>Subjects</h3></td>
            <td><h3>Final Grade</h3></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub41']; ?></td>
            <td><i><u>__<?php echo $result['grade41']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub42']; ?></td>
            <td><i><u>__<?php echo $result['grade42']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub43']; ?></td>
            <td><i><u>__<?php echo $result['grade43']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub44']; ?></td>
            <td><i><u>__<?php echo $result['grade44']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub45']; ?></td>
            <td><i><u>__<?php echo $result['grade45']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub46']; ?></td>
            <td><i><u>__<?php echo $result['grade46']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub47']; ?></td>
            <td><i><u>__<?php echo $result['grade47']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub48']; ?></td>
            <td><i><u>__<?php echo $result['grade48']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub49']; ?></td>
            <td><i><u>__<?php echo $result['grade49']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub50']; ?></td>
            <td><i><u>__<?php echo $result['grade50']; ?>__</i></u></td>
          </tr>
          <tr style="height:10vh;"></tr>
        </table><br><br>









        <center><h2><u><i>_<?php echo $result['sem6']; ?>_</u></i> Semester, AY __<u><i><?php echo $result['AY6']; ?></u></i>__, Section: <u><i> __<?php echo $result['section6']; ?>__</u></i></h2>
        </center><br>

        <table>
          <tr style="text-align: center;height:8vh">
            <td><h3>Subjects</h3></td>
            <td><h3>Final Grade</h3></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub51']; ?></td>
            <td><i><u>__<?php echo $result['grade51']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub52']; ?></td>
            <td><i><u>__<?php echo $result['grade52']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub53']; ?></td>
            <td><i><u>__<?php echo $result['grade53']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub54']; ?></td>
            <td><i><u>__<?php echo $result['grade54']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub55']; ?></td>
            <td><i><u>__<?php echo $result['grade55']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub56']; ?></td>
            <td><i><u>__<?php echo $result['grade56']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub57']; ?></td>
            <td><i><u>__<?php echo $result['grade57']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub58']; ?></td>
            <td><i><u>__<?php echo $result['grade58']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub59']; ?></td>
            <td><i><u>__<?php echo $result['grade59']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub60']; ?></td>
            <td><i><u>__<?php echo $result['grade60']; ?>__</i></u></td>
          </tr>
          <tr style="height:10vh;"></tr>
        </table><br><br>










        <center><h2><u><i>_<?php echo $result['sem7']; ?>_</u></i> Semester, AY __<u><i><?php echo $result['AY7']; ?></u></i>__, Section: <u><i> __<?php echo $result['section7']; ?>__</u></i></h2>
        </center><br>

        <table>
          <tr style="text-align: center;height:8vh">
            <td><h3>Subjects</h3></td>
            <td><h3>Final Grade</h3></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub61']; ?></td>
            <td><i><u>__<?php echo $result['grade61']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub62']; ?></td>
            <td><i><u>__<?php echo $result['grade62']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub63']; ?></td>
            <td><i><u>__<?php echo $result['grade63']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub64']; ?></td>
            <td><i><u>__<?php echo $result['grade64']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub65']; ?></td>
            <td><i><u>__<?php echo $result['grade65']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub66']; ?></td>
            <td><i><u>__<?php echo $result['grade66']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub67']; ?></td>
            <td><i><u>__<?php echo $result['grade67']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub68']; ?></td>
            <td><i><u>__<?php echo $result['grade68']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub69']; ?></td>
            <td><i><u>__<?php echo $result['grade69']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub70']; ?></td>
            <td><i><u>__<?php echo $result['grade70']; ?>__</i></u></td>
          </tr>
          <tr style="height:10vh;"></tr>
        </table><br><br>









        <center><h2><u><i>_<?php echo $result['sem8']; ?>_</u></i> Semester, AY __<u><i><?php echo $result['AY8']; ?></u></i>__, Section: <u><i> __<?php echo $result['section8']; ?>__</u></i></h2>
        </center><br>

        <table>
          <tr style="text-align: center;height:8vh">
            <td><h3>Subjects</h3></td>
            <td><h3>Final Grade</h3></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub71']; ?></td>
            <td><i><u>__<?php echo $result['grade71']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub72']; ?></td>
            <td><i><u>__<?php echo $result['grade72']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub73']; ?></td>
            <td><i><u>__<?php echo $result['grade73']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub74']; ?></td>
            <td><i><u>__<?php echo $result['grade74']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub75']; ?></td>
            <td><i><u>__<?php echo $result['grade75']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub76']; ?></td>
            <td><i><u>__<?php echo $result['grade76']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub77']; ?></td>
            <td><i><u>__<?php echo $result['grade77']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub78']; ?></td>
            <td><i><u>__<?php echo $result['grade78']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub79']; ?></td>
            <td><i><u>__<?php echo $result['grade79']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub80']; ?></td>
            <td><i><u>__<?php echo $result['grade80']; ?>__</i></u></td>
          </tr>
          <tr style="height:10vh;"></tr>
        </table><br>







        <center><h2><u><i>_<?php echo $result['sem9']; ?>_</u></i> Semester, AY __<u><i><?php echo $result['AY9']; ?></u></i>__, Section: <u><i> __<?php echo $result['section9']; ?>__</u></i></h2>
        </center><br>

        <table>
          <tr style="text-align: center;height:8vh">
            <td><h3>Subjects</h3></td>
            <td><h3>Final Grade</h3></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub81']; ?></td>
            <td><i><u>__<?php echo $result['grade81']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub82']; ?></td>
            <td><i><u>__<?php echo $result['grade82']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub83']; ?></td>
            <td><i><u>__<?php echo $result['grade83']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub84']; ?></td>
            <td><i><u>__<?php echo $result['grade84']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub85']; ?></td>
            <td><i><u>__<?php echo $result['grade85']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub86']; ?></td>
            <td><i><u>__<?php echo $result['grade86']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub87']; ?></td>
            <td><i><u>__<?php echo $result['grade87']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub88']; ?></td>
            <td><i><u>__<?php echo $result['grade88']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub89']; ?></td>
            <td><i><u>__<?php echo $result['grade89']; ?>__</i></u></td>
          </tr>
          <tr style="text-align: center; font-weight: bold; height:5vh">
            <td><?php echo $result['sub90']; ?></td>
            <td><i><u>__<?php echo $result['grade90']; ?>__</i></u></td>
          </tr>
          <tr style="height:10vh;"></tr>
        </table><br>
      </div>



  </body>
</html>
