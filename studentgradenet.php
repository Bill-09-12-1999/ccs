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
    <title>Student Grade</title>
    <style>
    body{
      margin:0;
      padding:0;
      font-family: arial;
      user-select: none;
      background: skyblue;
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
      z-index: 1;
    }
    .sidemenu #img1{
      width:100px;
      height:100px;
      border-radius:50%;
      margin-left: 20px;
      margin-top: 1%;
    }
    .sidemenu #img2{
      width: 100px;
      height: 100px;
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
    .grade{
        position: absolute;
        margin-left: 18%;
        width: 78%;
        padding: 10px 10px 10px 10px;
        border-style: solid;
        border: 5px solid black;
        font-size: 20px;
        background: white;
        border-radius: 10px;
    }
    .in{
      padding: 40px 40px 40px 40px;
      border-style: solid;
      border: 2px solid black;
      background: white;
      border-radius: 10px;
      animation: Appear 1s;
    }
    @keyframes Appear{
      from{
        opacity: 0;
        transform: rotateX(240deg);
      }to{
        opacity: 1;
        transform: rotateX(0);
      }
    }
    .grade table{
        width: 100%;
    }
    .grade table th{
      text-align: left;
      border: 1px solid black;
      border-top-color: white;
      border-left-color: white;
      border-right-color: white;
      border-bottom-color: black;
      background: white;
    }
    .grade table td{
      text-transform: capitalize;
      padding: 5px;
    }
    .grade .in #img1{
      width: 100px;
      height: 100px;
    }
    .grade .in #img2{
      position: relative;
      display: inline-flex;
      margin-left: 75%;
      width: 100px;
      height: 100px;
    }
    .grade .in h3{
      margin-top: -20px;
    }
    @media print{
      .sidemenu{
        visibility: hidden;
      }
      .grade{
        width: 100%;
        margin-left: 0;
        margin-top: 0;
      }
    }
    .BSIS a{
          padding: 10px 32px;
          text-align: center;
          text-decoration: none;
          position:fixed;
          right:0;
          bottom:0;
          margin-bottom: 7%;
          margin-right: 2%;
          font-family:arial black;
          border-radius:5px;
          cursor: pointer;
          z-index: 10;
          background: linear-gradient(to top, gray,silver);
          color:black;
          text-shadow: 2px 3px 2px green;
          box-shadow: 3px 3px 2px black;
        }
        .BSIT a:Hover{
          background: linear-gradient(to top, gray,silver);
          color:black;
          box-shadow: 3px 3px 2px black;
        }
        .BSIT a{
          padding: 10px 30px;
          text-align: center;
          text-decoration: none;
          position:fixed;
          right:0;
          bottom:0;
          margin-bottom: 2%;
          margin-right: 2%;
          font-family:arial black;
          border-radius:5px;
          cursor: pointer;
          z-index: 10;
          background: rgba(0,0,0,0.5);
          color:white;
          text-shadow: 2px 3px 2px green;
        }
        #BSIS{
          display: none;
        }
        #BSIT{
          display: none;
        }
        #arrowright{
          animation: animate 1s;
          display: none;
        }
        #arrowleft{
          animation: animate 1s;
        }
        @keyframes animate{
          from{
            transform: translateX(40px);
          }to{
            transform: translateX(0);
          }
        }
        @keyframes show{
          from{
            opacity: 0;
            transform: translateX(50px);
          }to{
            opacity: 1;
            transform: translateX(0);
          }
        }
    </style>
  </head>
  <body>
<button onclick="hide()" style="cursor:pointer;background: black;z-index: 1;color:white;position: fixed;bottom:0;right:0;padding:5px;margin-right: 10%;margin-bottom: 5%;" id="arrowright">
  >>
</button>

<button onclick="show()" style="cursor:pointer;background: black;z-index: 1;color:white;position: fixed;bottom:0;right:0;padding:5px;margin-bottom: 5%;" id="arrowleft">
  <<
</button>
<div class="BSIS" id="BSIS">
    <a href="studentgradenet.php">NET</a>
</div>
<div class="BSIT" id="BSIT">
    <a href="studentgrade.php">WEB</a>
</div>





    <div class="sidemenu">
      <img src="images/logo.png" id="img1"></img>
      <img src="images/ccs.jpg" id="img2"></img>
        <ul>
          <a href="studentportal.php"><li class="l3">Dashboard</li></a>
        </ul>
        <ul>
          <a href="studentgrade.php"><li class="l1">Your Grades</li></a>
        </ul>
        <ul>
          <a href="changepass.php"><li class="l2">Change Password</li></a>
        </ul>
      <a href="userlogout.php" class="lo">Log out</a>
    </div>




    <?php
    $studentid=$_SESSION['studentid'];
    ?>

    <?php
    $query = "SELECT * FROM `firstyear` WHERE `studentid`= '$studentid'";
    $results = mysqli_query($link,$query);
    $result= mysqli_fetch_array($results);
    ?>
    

        
    <div class="grade">
      <div class="in">

        <img src="images/ccs.jpg" id="img1"></img> 
        <img src="images/logo.png" id="img2"></img><br>
        <center>
        <h4>Republic of the Phillipines</h4><br>
        <h3>ILOCOS SUR POLYTECHNIC STATE COLLEGE</h3><br>
        <h4 style="margin-top: -20px;">Sta.Maria, 2705 Ilocos Sur</h4><br>
        <h2>REPORTS OF GRADES</h2><br><br>
        <h3><u style="margin-right: 10px;"><i>
          <?php echo $result['sem']; ?></u></i> Semester, AY <u><i><?php echo $result['AY']; ?></u></i></h3><br>
        </center>




       Student ID:<b style="margin-left: 30px;margin-right: 30px;"> <?php echo $result['studentid']; ?></b>
       Name: <b style="margin-left: 30px;margin-right: 30px; text-transform: uppercase;"> <?php echo $result['name']; ?></b><br>
       Course:<b style="margin-left: 30px;margin-right: 30px; text-transform: uppercase;"> <?php echo $result['course']; ?></b><br><br>
     <table cellspacing="0">
        <thead>
              <th>Course No.</th>
              <th>Descriptive Title</th>
              <th>Units</th>
              <th>Final Grade</th>
              <th></th>
              <th style="text-align: center;"><i>Signature</i></th>
        </thead>
        <tbody>
              <tr>
                <td><?php echo $result['sub']; ?></td>
                <td><?php echo $result['des']; ?></td>
                <td><?php echo $result['units'] ?></td>
                <td><b><?php echo $result['grade']; ?></b></td>
                <td id="sum1">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub2']; ?></td>
                <td><?php echo $result['des2']; ?></td>
                <td><?php echo $result['units2'] ?></td>
                <td><b><?php echo $result['grade2']; ?></b></td>
                <td id="sum2">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub3']; ?></td>
                <td><?php echo $result['des3']; ?></td>
                <td><?php echo $result['units3'] ?></td>
                <td><b><?php echo $result['grade3']; ?></b></td>
                <td id="sum3">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub4']; ?></td>
                <td><?php echo $result['des4']; ?></td>
                <td><?php echo $result['units4'] ?></td>
                <td><b><?php echo $result['grade4']; ?></b></td>
                <td id="sum4">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub5']; ?></td>
                <td><?php echo $result['des5']; ?></td>
                <td><?php echo $result['units5'] ?></td>
                <td><b><?php echo $result['grade5']; ?></b></td>
                <td id="sum5">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub6']; ?></td>
                <td><?php echo $result['des6']; ?></td>
                <td><?php echo $result['units6'] ?></td>
                <td><b><?php echo $result['grade6']; ?></b></td>
                <td id="sum6">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub7']; ?></td>
                <td><?php echo $result['des7']; ?></td>
                <td><?php echo $result['units7'] ?></td>
                <td><b><?php echo $result['grade7']; ?></b></td>
                <td id="sum7">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub8']; ?></td>
                <td><?php echo $result['des8']; ?></td>
                <td><?php echo $result['units8'] ?></td>
                <td><b><?php echo $result['grade8']; ?></b></td>
                <td id="sum8">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub9']; ?></td>
                <td><?php echo $result['des9']; ?></td>
                <td><?php echo $result['units9'] ?></td>
                <td><b><?php echo $result['grade9']; ?></b></td>
                <td id="sum9">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub10']; ?></td>
                <td><?php echo $result['des10']; ?></td>
                <td><?php echo $result['units10'] ?></td>
                <td><b><?php echo $result['grade10']; ?></b></td>
                <td id="sum10">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td style="border:1px solid black;border-left-color: white;border-right-color: white;border-bottom-color: white; padding:0;" colspan="6"></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td><b>AVERAGE:</b></td>
                <td id="avg" style="font-weight: 900;">0</td>
              </tr>
        </tbody>
      </table>
   </div><br>

   <div class="in">

       <img src="images/ccs.jpg" id="img1"></img> 
       <img src="images/logo.png" id="img2"></img><br>
       <center>
        <h4>Republic of the Phillipines</h4><br>
        <h3>ILOCOS SUR POLYTECHNIC STATE COLLEGE</h3><br>
        <h4 style="margin-top: -20px;">Sta.Maria, 2705 Ilocos Sur</h4><br>
        <h2>REPORTS OF GRADES</h2><br><br>
        <h3><u style="margin-right: 10px;"><i>
          <?php echo $result['sem2']; ?></u></i> Semester, AY <u><i><?php echo $result['AY2']; ?></u></i></h3><br>
        </center>



       Student ID:<b style="margin-left: 30px;margin-right: 30px;"> <?php echo $result['studentid']; ?></b>
       Name: <b style="margin-left: 30px;margin-right: 30px; text-transform: uppercase;"> <?php echo $result['name']; ?></b><br>
       Course:<b style="margin-left: 30px;margin-right: 30px; text-transform: uppercase;"> <?php echo $result['course']; ?></b><br><br>
     <table cellspacing="0">
        <thead>
              <th>Course No.</th>
              <th>Descriptive Title</th>
              <th>Units</th>
              <th>Final Grade</th>
              <th></th>
              <th style="text-align: center;"><i>Signature</i></th>
        </thead>
        <tbody>
              <tr>
                <td><?php echo $result['sub11']; ?></td>
                <td><?php echo $result['des11']; ?></td>
                <td><?php echo $result['units11'] ?></td>
                <td><b><?php echo $result['grade11']; ?></b></td>
                <td id="sum11">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub12']; ?></td>
                <td><?php echo $result['des12']; ?></td>
                <td><?php echo $result['units12'] ?></td>
                <td><b><?php echo $result['grade12']; ?></b></td>
                <td id="sum12">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub13']; ?></td>
                <td><?php echo $result['des13']; ?></td>
                <td><?php echo $result['units13'] ?></td>
                <td><b><?php echo $result['grade13']; ?></b></td>
                <td id="sum13">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub14']; ?></td>
                <td><?php echo $result['des14']; ?></td>
                <td><?php echo $result['units14'] ?></td>
                <td><b><?php echo $result['grade14']; ?></b></td>
                <td id="sum14">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub15']; ?></td>
                <td><?php echo $result['des15']; ?></td>
                <td><?php echo $result['units15'] ?></td>
                <td><b><?php echo $result['grade15']; ?></b></td>
                <td id="sum15">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub16']; ?></td>
                <td><?php echo $result['des16']; ?></td>
                <td><?php echo $result['units16'] ?></td>
                <td><b><?php echo $result['grade16']; ?></b></td>
                <td id="sum16">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub17']; ?></td>
                <td><?php echo $result['des17']; ?></td>
                <td><?php echo $result['units17'] ?></td>
                <td><b><?php echo $result['grade17']; ?></b></td>
                <td id="sum17">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub18']; ?></td>
                <td><?php echo $result['des18']; ?></td>
                <td><?php echo $result['units18'] ?></td>
                <td><b><?php echo $result['grade18']; ?></b></td>
                <td id="sum18">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub19']; ?></td>
                <td><?php echo $result['des19']; ?></td>
                <td><?php echo $result['units19'] ?></td>
                <td><b><?php echo $result['grade19']; ?></b></td>
                <td id="sum19">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub20']; ?></td>
                <td><?php echo $result['des20']; ?></td>
                <td><?php echo $result['units20'] ?></td>
                <td><b><?php echo $result['grade20']; ?></b></td>
                <td id="sum20">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td style="border:1px solid black;border-left-color: white;border-right-color: white;border-bottom-color: white; padding:0;" colspan="6"></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td><b>AVERAGE:</b></td>
                <td id="avg2" style="font-weight: 900;">0</td>
              </tr>
        </tbody>
     </table>
   </div><br><br><br>














   <?php
    $query = "SELECT * FROM `secondyear` WHERE `studentid`= '$studentid'";
    $results = mysqli_query($link,$query);
    $result= mysqli_fetch_array($results);
     ?>
    
  <div class="in">

        <img src="images/ccs.jpg" id="img1"></img> 
        <img src="images/logo.png" id="img2"></img><br>
        <center>
        <h4>Republic of the Phillipines</h4><br>
        <h3>ILOCOS SUR POLYTECHNIC STATE COLLEGE</h3><br>
        <h4 style="margin-top: -20px;">Sta.Maria, 2705 Ilocos Sur</h4><br>
        <h2>REPORTS OF GRADES</h2><br><br>
        <h3><u style="margin-right: 10px;"><i>
          <?php echo $result['sem']; ?></u></i> Semester, AY <u><i><?php echo $result['AY']; ?></u></i></h3><br>
        </center>




       Student ID:<b style="margin-left: 30px;margin-right: 30px;"> <?php echo $result['studentid']; ?></b>
       Name: <b style="margin-left: 30px;margin-right: 30px; text-transform: uppercase;"> <?php echo $result['name']; ?></b><br>
       Course:<b style="margin-left: 30px;margin-right: 30px; text-transform: uppercase;"> <?php echo $result['course']; ?></b><br><br>
     <table cellspacing="0">
        <thead>
              <th>Course No.</th>
              <th>Descriptive Title</th>
              <th>Units</th>
              <th>Final Grade</th>
              <th></th>
              <th style="text-align: center;"><i>Signature</i></th>
        </thead>
        <tbody>
              <tr>
                <td><?php echo $result['sub']; ?></td>
                <td><?php echo $result['des']; ?></td>
                <td><?php echo $result['units'] ?></td>
                <td><b><?php echo $result['grade']; ?></b></td>
                <td id="sum21">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub2']; ?></td>
                <td><?php echo $result['des2']; ?></td>
                <td><?php echo $result['units2'] ?></td>
                <td><b><?php echo $result['grade2']; ?></b></td>
                <td id="sum22">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub3']; ?></td>
                <td><?php echo $result['des3']; ?></td>
                <td><?php echo $result['units3'] ?></td>
                <td><b><?php echo $result['grade3']; ?></b></td>
                <td id="sum23">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub4']; ?></td>
                <td><?php echo $result['des4']; ?></td>
                <td><?php echo $result['units4'] ?></td>
                <td><b><?php echo $result['grade4']; ?></b></td>
                <td id="sum24">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub5']; ?></td>
                <td><?php echo $result['des5']; ?></td>
                <td><?php echo $result['units5'] ?></td>
                <td><b><?php echo $result['grade5']; ?></b></td>
                <td id="sum25">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub6']; ?></td>
                <td><?php echo $result['des6']; ?></td>
                <td><?php echo $result['units6'] ?></td>
                <td><b><?php echo $result['grade6']; ?></b></td>
                <td id="sum26">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub7']; ?></td>
                <td><?php echo $result['des7']; ?></td>
                <td><?php echo $result['units7'] ?></td>
                <td><b><?php echo $result['grade7']; ?></b></td>
                <td id="sum27">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub8']; ?></td>
                <td><?php echo $result['des8']; ?></td>
                <td><?php echo $result['units8'] ?></td>
                <td><b><?php echo $result['grade8']; ?></b></td>
                <td id="sum28">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub9']; ?></td>
                <td><?php echo $result['des9']; ?></td>
                <td><?php echo $result['units9'] ?></td>
                <td><b><?php echo $result['grade9']; ?></b></td>
                <td id="sum29">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub10']; ?></td>
                <td><?php echo $result['des10']; ?></td>
                <td><?php echo $result['units10'] ?></td>
                <td><b><?php echo $result['grade10']; ?></b></td>
                <td id="sum30">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td style="border:1px solid black;border-left-color: white;border-right-color: white;border-bottom-color: white; padding:0;"colspan="6"></td>

              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td><b>AVERAGE:</b></td>
                <td id="avg3" style="font-weight: 900;">0</td>
              </tr>
        </tbody>
      </table>
   </div><br>

   <div class="in">

       <img src="images/ccs.jpg" id="img1"></img> 
       <img src="images/logo.png" id="img2"></img><br>
       <center>
        <h4>Republic of the Phillipines</h4><br>
        <h3>ILOCOS SUR POLYTECHNIC STATE COLLEGE</h3><br>
        <h4 style="margin-top: -20px;">Sta.Maria, 2705 Ilocos Sur</h4><br>
        <h2>REPORTS OF GRADES</h2><br><br>
        <h3><u style="margin-right: 10px;"><i>
          <?php echo $result['sem2']; ?></u></i> Semester, AY <u><i><?php echo $result['AY2']; ?></u></i></h3><br>
        </center>



       Student ID:<b style="margin-left: 30px;margin-right: 30px;"> <?php echo $result['studentid']; ?></b>
       Name: <b style="margin-left: 30px;margin-right: 30px; text-transform: uppercase;"> <?php echo $result['name']; ?></b><br>
       Course:<b style="margin-left: 30px;margin-right: 30px; text-transform: uppercase;"> <?php echo $result['course']; ?></b><br><br>
     <table cellspacing="0">
        <thead>
              <th>Course No.</th>
              <th>Descriptive Title</th>
              <th>Units</th>
              <th>Final Grade</th>
              <th></th>
              <th style="text-align: center;"><i>Signature</i></th>
        </thead>
        <tbody>
              <tr>
                <td><?php echo $result['sub11']; ?></td>
                <td><?php echo $result['des11']; ?></td>
                <td><?php echo $result['units11'] ?></td>
                <td><b><?php echo $result['grade11']; ?></b></td>
                <td id="sum31">0.0</td>
                <td>______________</td>
              <tr>
              <tr>
                <td><?php echo $result['sub12']; ?></td>
                <td><?php echo $result['des12']; ?></td>
                <td><?php echo $result['units12'] ?></td>
                <td><b><?php echo $result['grade12']; ?></b></td>
                <td id="sum32">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub13']; ?></td>
                <td><?php echo $result['des13']; ?></td>
                <td><?php echo $result['units13'] ?></td>
                <td><b><?php echo $result['grade13']; ?></b></td>
                <td id="sum33">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub14']; ?></td>
                <td><?php echo $result['des14']; ?></td>
                <td><?php echo $result['units14'] ?></td>
                <td><b><?php echo $result['grade14']; ?></b></td>
                <td id="sum34">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub15']; ?></td>
                <td><?php echo $result['des15']; ?></td>
                <td><?php echo $result['units15'] ?></td>
                <td><b><?php echo $result['grade15']; ?></b></td>
                <td id="sum35">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub16']; ?></td>
                <td><?php echo $result['des16']; ?></td>
                <td><?php echo $result['units16'] ?></td>  
                <td><b><?php echo $result['grade16']; ?></b></td>
                <td id="sum36">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub17']; ?></td>
                <td><?php echo $result['des17']; ?></td>
                <td><?php echo $result['units17'] ?></td>
                <td
                ><b><?php echo $result['grade17']; ?></b></td>
                <td id="sum37">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub18']; ?></td>
                <td><?php echo $result['des18']; ?></td>
                <td><?php echo $result['units18'] ?></td>
                <td><b><?php 
                echo $result['grade18']; ?></b></td>
                <td id="sum38">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub19']; ?></td>
                <td><?php echo $result['des19']; ?></td>
                <td><?php echo $result['units19'] ?></td>
                <td><b><?php 
                echo $result['grade19']; ?></b></td>
                <td id="sum39">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub20']; ?></td>
                <td><?php echo $result['des20']; ?></td>
                <td><?php echo $result['units20'] ?></td>
                <td><b><?php 
                echo $result['grade20']; ?></b></td>
                <td id="sum40">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td style="border:1px solid black;border-left-color: white;border-right-color: white;border-bottom-color: white; padding:0;" colspan="6"></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td><b>AVERAGE:</b></td>
                <td id="avg4" style="font-weight: 900;">0</td>
              </tr>
        </tbody>
     </table>
   </div><br><br><br>








   <?php
      $query = "SELECT * FROM `thirdyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);
      $result= mysqli_fetch_array($results);
  ?>




  <div class="in">

        <img src="images/ccs.jpg" id="img1"></img> 
        <img src="images/logo.png" id="img2"></img><br>
        <center>
        <h4>Republic of the Phillipines</h4><br>
        <h3>ILOCOS SUR POLYTECHNIC STATE COLLEGE</h3><br>
        <h4 style="margin-top: -20px;">Sta.Maria, 2705 Ilocos Sur</h4><br>
        <h2>REPORTS OF GRADES</h2><br><br>
        <h3><u style="margin-right: 10px;"><i>
          <?php echo $result['sem']; ?></u></i> Semester, AY <u><i><?php echo $result['AY']; ?></u></i></h3><br>
        </center>




       Student ID:<b style="margin-left: 30px;margin-right: 30px;"> <?php echo $result['studentid']; ?></b>
       Name: <b style="margin-left: 30px;margin-right: 30px; text-transform: uppercase;"> <?php echo $result['name']; ?></b><br>
       Course:<b style="margin-left: 30px;margin-right: 30px; text-transform: uppercase;"> <?php echo $result['course']; ?></b><br><br>
     <table cellspacing="0">
        <thead>
              <th>Course No.</th>
              <th>Descriptive Title</th>
              <th>Units</th>
              <th>Final Grade</th>
              <th></th>
              <th style="text-align: center;"><i>Signature</i></th>
        </thead>
        <tbody>
              <tr>
                <td><?php echo $result['sub']; ?></td>
                <td><?php echo $result['des']; ?></td>
                <td><?php echo $result['units'] ?></td>
                <td><b><?php echo $result['grade']; ?></b></td>
                <td id="sum41">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub2']; ?></td>
                <td><?php echo $result['des2']; ?></td>
                <td><?php echo $result['units2'] ?></td>
                <td><b><?php echo $result['grade2']; ?></b></td>
                <td id="sum42">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub3']; ?></td>
                <td><?php echo $result['des3']; ?></td>
                <td><?php echo $result['units3'] ?></td>
                <td><b><?php echo $result['grade3']; ?></b></td>
                <td id="sum43">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub4']; ?></td>
                <td><?php echo $result['des4']; ?></td>
                <td><?php echo $result['units4'] ?></td>
                <td><b><?php echo $result['grade4']; ?></b></td>
                <td id="sum44">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub5']; ?></td>
                <td><?php echo $result['des5']; ?></td>
                <td><?php echo $result['units5'] ?></td>
                <td><b><?php echo $result['grade5']; ?></b></td>
                <td id="sum45">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub6']; ?></td>
                <td><?php echo $result['des6']; ?></td>
                <td><?php echo $result['units6'] ?></td>
                <td><b><?php echo $result['grade6']; ?></b></td>
                <td id="sum46">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub7']; ?></td>
                <td><?php echo $result['des7']; ?></td>
                <td><?php echo $result['units7'] ?></td>
                <td><b><?php echo $result['grade7']; ?></b></td>
                <td id="sum47">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub8']; ?></td>
                <td><?php echo $result['des8']; ?></td>
                <td><?php echo $result['units8'] ?></td>
                <td><b><?php echo $result['grade8']; ?></b></td>
                <td id="sum48">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub9']; ?></td>
                <td><?php echo $result['des9']; ?></td>
                <td><?php echo $result['units9'] ?></td>
                <td><b><?php echo $result['grade9']; ?></b></td>
                <td id="sum49">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub10']; ?></td>
                <td><?php echo $result['des10']; ?></td>
                <td><?php echo $result['units10'] ?></td>
                <td><b><?php echo $result['grade10']; ?></b></td>
                <td id="sum50">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td style="border:1px solid black;border-left-color: white;border-right-color: white;border-bottom-color: white; padding:0;" colspan="6"></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td><b>AVERAGE:</b></td>
                <td id="avg5" style="font-weight: 900;">0</td>
              </tr>
        </tbody>
      </table>
   </div><br>

   <div class="in">

       <img src="images/ccs.jpg" id="img1"></img> 
       <img src="images/logo.png" id="img2"></img><br>
       <center>
        <h4>Republic of the Phillipines</h4><br>
        <h3>ILOCOS SUR POLYTECHNIC STATE COLLEGE</h3><br>
        <h4 style="margin-top: -20px;">Sta.Maria, 2705 Ilocos Sur</h4><br>
        <h2>REPORTS OF GRADES</h2><br><br>
        <h3><u style="margin-right: 10px;"><i>
          <?php echo $result['sem2']; ?></u></i> Semester, AY <u><i><?php echo $result['AY2']; ?></u></i></h3><br>
        </center>



       Student ID:<b style="margin-left: 30px;margin-right: 30px;"> <?php echo $result['studentid']; ?></b>
       Name: <b style="margin-left: 30px;margin-right: 30px; text-transform: uppercase;"> <?php echo $result['name']; ?></b><br>
       Course:<b style="margin-left: 30px;margin-right: 30px; text-transform: uppercase;"> <?php echo $result['course']; ?></b><br><br>
     <table cellspacing="0">
        <thead>
              <th>Course No.</th>
              <th>Descriptive Title</th>
              <th>Units</th>
              <th>Final Grade</th>
              <th></th>
              <th style="text-align: center;"><i>Signature</i></th>
        </thead>
        <tbody>
              <tr>
                <td><?php echo $result['sub11']; ?></td>
                <td><?php echo $result['des11']; ?></td>
                <td><?php echo $result['units11'] ?></td>
                <td><b><?php echo $result['grade11']; ?></b></td>
                <td id="sum51">0.0</td>
                <td>______________</td>
              <tr>
              <tr>
                <td><?php echo $result['sub12']; ?></td>
                <td><?php echo $result['des12']; ?></td>
                <td><?php echo $result['units12'] ?></td>
                <td><b><?php echo $result['grade12']; ?></b></td>
                <td id="sum52">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub13']; ?></td>
                <td><?php echo $result['des13']; ?></td>
                <td><?php echo $result['units13'] ?></td>
                <td><b><?php echo $result['grade13']; ?></b></td>
                <td id="sum53">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub14']; ?></td>
                <td><?php echo $result['des14']; ?></td>
                <td><?php echo $result['units14'] ?></td>
                <td><b><?php echo $result['grade14']; ?></b></td>
                <td id="sum54">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub15']; ?></td>
                <td><?php echo $result['des15']; ?></td>
                <td><?php echo $result['units15'] ?></td>
                <td><b><?php echo $result['grade15']; ?></b></td>
                <td id="sum55">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub16']; ?></td>
                <td><?php echo $result['des16']; ?></td>
                <td><?php echo $result['units16'] ?></td>
                <td><b><?php echo $result['grade16']; ?></b></td>
                <td id="sum56">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub17']; ?></td>
                <td><?php echo $result['des17']; ?></td>
                <td><?php echo $result['units17'] ?></td>
                <td
                ><b><?php echo $result['grade17']; ?></b></td>
                <td id="sum57">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub18']; ?></td>
                <td><?php echo $result['des18']; ?></td>
                <td><?php echo $result['units18'] ?></td>
                <td><b><?php 
                echo $result['grade18']; ?></b></td>
                <td id="sum58">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub19']; ?></td>
                <td><?php echo $result['des19']; ?></td>
                <td><?php echo $result['units19'] ?></td>
                <td><b><?php 
                echo $result['grade19']; ?></b></td>
                <td id="sum59">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub20']; ?></td>
                <td><?php echo $result['des20']; ?></td>
                <td><?php echo $result['units20'] ?></td>
                <td><b><?php 
                echo $result['grade20']; ?></b></td>
                <td id="sum60">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td style="border:1px solid black;border-left-color: white;border-right-color: white;border-bottom-color: white; padding:0;"colspan="6"></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td><b>AVERAGE:</b></td>
                <td id="avg6" style="font-weight: 900;">0</td>
              </tr>
        </tbody>
     </table>
   </div><br><br><br>























<?php
    $query = "SELECT * FROM `midyearnet` WHERE `studentid`= '$studentid'";
    $results = mysqli_query($link,$query);
    $result= mysqli_fetch_array($results);
     ?>
    
  <div class="in">

        <img src="images/ccs.jpg" id="img1"></img> 
        <img src="images/logo.png" id="img2"></img><br>
        <center>
        <h4>Republic of the Phillipines</h4><br>
        <h3>ILOCOS SUR POLYTECHNIC STATE COLLEGE</h3><br>
        <h4 style="margin-top: -20px;">Sta.Maria, 2705 Ilocos Sur</h4><br>
        <h2>REPORTS OF GRADES</h2><br><br>
        <h3><u style="margin-right: 10px;"><i>
          <?php echo $result['sem']; ?></u></i> Semester, AY <u><i><?php echo $result['AY']; ?></u></i></h3><br>
        </center>




       Student ID:<b style="margin-left: 30px;margin-right: 30px;"> <?php echo $result['studentid']; ?></b>
       Name: <b style="margin-left: 30px;margin-right: 30px; text-transform: uppercase;"> <?php echo $result['name']; ?></b><br>
       Course:<b style="margin-left: 30px;margin-right: 30px; text-transform: uppercase;"> <?php echo $result['course']; ?></b><br><br>
     <table cellspacing="0">
        <thead>
              <th>Course No.</th>
              <th>Descriptive Title</th>
              <th>Units</th>
              <th>Final Grade</th>
              <th></th>
              <th style="text-align: center;"><i>Signature</i></th>
        </thead>
        <tbody>
              <tr>
                <td><?php echo $result['sub']; ?></td>
                <td><?php echo $result['des']; ?></td>
                <td><?php echo $result['units'] ?></td>
                <td><b><?php echo $result['grade']; ?></b></td>
                <td id="sum61">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub2']; ?></td>
                <td><?php echo $result['des2']; ?></td>
                <td><?php echo $result['units2'] ?></td>
                <td><b><?php echo $result['grade2']; ?></b></td>
                <td id="sum62">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub3']; ?></td>
                <td><?php echo $result['des3']; ?></td>
                <td><?php echo $result['units3'] ?></td>
                <td><b><?php echo $result['grade3']; ?></b></td>
                <td id="sum63">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub4']; ?></td>
                <td><?php echo $result['des4']; ?></td>
                <td><?php echo $result['units4'] ?></td>
                <td><b><?php echo $result['grade4']; ?></b></td>
                <td id="sum64">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub5']; ?></td>
                <td><?php echo $result['des5']; ?></td>
                <td><?php echo $result['units5'] ?></td>
                <td><b><?php echo $result['grade5']; ?></b></td>
                <td id="sum65">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub6']; ?></td>
                <td><?php echo $result['des6']; ?></td>
                <td><?php echo $result['units6'] ?></td>
                <td><b><?php echo $result['grade6']; ?></b></td>
                <td id="sum66">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub7']; ?></td>
                <td><?php echo $result['des7']; ?></td>
                <td><?php echo $result['units7'] ?></td>
                <td><b><?php echo $result['grade7']; ?></b></td>
                <td id="sum67">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub8']; ?></td>
                <td><?php echo $result['des8']; ?></td>
                <td><?php echo $result['units8'] ?></td>
                <td><b><?php echo $result['grade8']; ?></b></td>
                <td id="sum68">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub9']; ?></td>
                <td><?php echo $result['des9']; ?></td>
                <td><?php echo $result['units9'] ?></td>
                <td><b><?php echo $result['grade9']; ?></b></td>
                <td id="sum69">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub10']; ?></td>
                <td><?php echo $result['des10']; ?></td>
                <td><?php echo $result['units10'] ?></td>
                <td><b><?php echo $result['grade10']; ?></b></td>
                <td id="sum70">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td style="border:1px solid black;border-left-color: white;border-right-color: white;border-bottom-color: white; padding:0;" colspan="6"></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td><b>AVERAGE:</b></td>
                <td id="avg7" style="font-weight: 900;">0</td>
              </tr>
        </tbody>
      </table>
   </div><br><br><br>


























   <?php
    $query = "SELECT * FROM `fourthyearnet` WHERE `studentid`= '$studentid'";
    $results = mysqli_query($link,$query);
    $result= mysqli_fetch_array($results);
     ?>
    
  <div class="in">

        <img src="images/ccs.jpg" id="img1"></img> 
        <img src="images/logo.png" id="img2"></img><br>
        <center>
        <h4>Republic of the Phillipines</h4><br>
        <h3>ILOCOS SUR POLYTECHNIC STATE COLLEGE</h3><br>
        <h4 style="margin-top: -20px;">Sta.Maria, 2705 Ilocos Sur</h4><br>
        <h2>REPORTS OF GRADES</h2><br><br>
        <h3><u style="margin-right: 10px;"><i>
          <?php echo $result['sem']; ?></u></i> Semester, AY <u><i><?php echo $result['AY']; ?></u></i></h3><br>
        </center>




       Student ID:<b style="margin-left: 30px;margin-right: 30px;"> <?php echo $result['studentid']; ?></b>
       Name: <b style="margin-left: 30px;margin-right: 30px; text-transform: uppercase;"> <?php echo $result['name']; ?></b><br>
       Course:<b style="margin-left: 30px;margin-right: 30px; text-transform: uppercase;"> <?php echo $result['course']; ?></b><br><br>
     <table cellspacing="0">
        <thead>
              <th>Course No.</th>
              <th>Descriptive Title</th>
              <th>Units</th>
              <th>Final Grade</th>
              <th></th>
              <th style="text-align: center;"><i>Signature</i></th>
        </thead>
        <tbody>
              <tr>
                <td><?php echo $result['sub']; ?></td>
                <td><?php echo $result['des']; ?></td>
                <td><?php echo $result['units'] ?></td>
                <td><b><?php echo $result['grade']; ?></b></td>
                <td id="sum71">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub2']; ?></td>
                <td><?php echo $result['des2']; ?></td>
                <td><?php echo $result['units2'] ?></td>
                <td><b><?php echo $result['grade2']; ?></b></td>
                <td id="sum72">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub3']; ?></td>
                <td><?php echo $result['des3']; ?></td>
                <td><?php echo $result['units3'] ?></td>
                <td><b><?php echo $result['grade3']; ?></b></td>
                <td id="sum73">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub4']; ?></td>
                <td><?php echo $result['des4']; ?></td>
                <td><?php echo $result['units4'] ?></td>
                <td><b><?php echo $result['grade4']; ?></b></td>
                <td id="sum74">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub5']; ?></td>
                <td><?php echo $result['des5']; ?></td>
                <td><?php echo $result['units5'] ?></td>
                <td><b><?php echo $result['grade5']; ?></b></td>
                <td id="sum75">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub6']; ?></td>
                <td><?php echo $result['des6']; ?></td>
                <td><?php echo $result['units6'] ?></td>
                <td><b><?php echo $result['grade6']; ?></b></td>
                <td id="sum76">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub7']; ?></td>
                <td><?php echo $result['des7']; ?></td>
                <td><?php echo $result['units7'] ?></td>
                <td><b><?php echo $result['grade7']; ?></b></td>
                <td id="sum77">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub8']; ?></td>
                <td><?php echo $result['des8']; ?></td>
                <td><?php echo $result['units8'] ?></td>
                <td><b><?php echo $result['grade8']; ?></b></td>
                <td id="sum78">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub9']; ?></td>
                <td><?php echo $result['des9']; ?></td>
                <td><?php echo $result['units9'] ?></td>
                <td><b><?php echo $result['grade9']; ?></b></td>
                <td id="sum79">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub10']; ?></td>
                <td><?php echo $result['des10']; ?></td>
                <td><?php echo $result['units10'] ?></td>
                <td><b><?php echo $result['grade10']; ?></b></td>
                <td id="sum80">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td style="border:1px solid black;border-left-color: white;border-right-color: white;border-bottom-color: white; padding:0;" colspan="6"></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td><b>AVERAGE:</b></td>
                <td id="avg8" style="font-weight: 900;">0</td>
              </tr>
        </tbody>
      </table>
   </div><br>

   <div class="in">

       <img src="images/ccs.jpg" id="img1"></img> 
       <img src="images/logo.png" id="img2"></img><br>
       <center>
        <h4>Republic of the Phillipines</h4><br>
        <h3>ILOCOS SUR POLYTECHNIC STATE COLLEGE</h3><br>
        <h4 style="margin-top: -20px;">Sta.Maria, 2705 Ilocos Sur</h4><br>
        <h2>REPORTS OF GRADES</h2><br><br>
        <h3><u style="margin-right: 10px;"><i>
          <?php echo $result['sem2']; ?></u></i> Semester, AY <u><i><?php echo $result['AY2']; ?></u></i></h3><br>
        </center>



       Student ID:<b style="margin-left: 30px;margin-right: 30px;"> <?php echo $result['studentid']; ?></b>
       Name: <b style="margin-left: 30px;margin-right: 30px; text-transform: uppercase;"> <?php echo $result['name']; ?></b><br>
       Course:<b style="margin-left: 30px;margin-right: 30px; text-transform: uppercase;"> <?php echo $result['course']; ?></b><br><br>
     <table cellspacing="0">
        <thead>
              <th>Course No.</th>
              <th>Descriptive Title</th>
              <th>Units</th>
              <th>Final Grade</th>
              <th></th>
              <th style="text-align: center;"><i>Signature</i></th>
        </thead>
        <tbody>
              <tr>
                <td><?php echo $result['sub11']; ?></td>
                <td><?php echo $result['des11']; ?></td>
                <td><?php echo $result['units11'] ?></td>
                <td><b><?php echo $result['grade11']; ?></b></td>
                <td id="sum81">0.0</td>
                <td>______________</td>
              <tr>
              <tr>
                <td><?php echo $result['sub12']; ?></td>
                <td><?php echo $result['des12']; ?></td>
                <td><?php echo $result['units12'] ?></td>
                <td><b><?php echo $result['grade12']; ?></b></td>
                <td id="sum82">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub13']; ?></td>
                <td><?php echo $result['des13']; ?></td>
                <td><?php echo $result['units13'] ?></td>
                <td><b><?php echo $result['grade13']; ?></b></td>
                <td id="sum83">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub14']; ?></td>
                <td><?php echo $result['des14']; ?></td>
                <td><?php echo $result['units14'] ?></td>
                <td><b><?php echo $result['grade14']; ?></b></td>
                <td id="sum84">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub15']; ?></td>
                <td><?php echo $result['des15']; ?></td>
                <td><?php echo $result['units15'] ?></td>
                <td><b><?php echo $result['grade15']; ?></b></td>
                <td id="sum85">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub16']; ?></td>
                <td><?php echo $result['des16']; ?></td>
                <td><?php echo $result['units16'] ?></td>
                <td><b><?php echo $result['grade16']; ?></b></td>
                <td id="sum86">0.0</td> 
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub17']; ?></td>
                <td><?php echo $result['des17']; ?></td>
                <td><?php echo $result['units17'] ?></td>
                <td
                ><b><?php echo $result['grade17']; ?></b></td>
                <td id="sum87">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub18']; ?></td>
                <td><?php echo $result['des18']; ?></td>
                <td><?php echo $result['units18'] ?></td>
                <td><b><?php 
                echo $result['grade18']; ?></b></td>
                <td id="sum88">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub19']; ?></td>
                <td><?php echo $result['des19']; ?></td>
                <td><?php echo $result['units19'] ?></td>
                <td><b><?php 
                echo $result['grade19']; ?></b></td>
                <td id="sum89">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td><?php echo $result['sub20']; ?></td>
                <td><?php echo $result['des20']; ?></td>
                <td><?php echo $result['units20'] ?></td>
                <td><b><?php 
                echo $result['grade20']; ?></b></td>
                <td id="sum90">0.0</td>
                <td>______________</td>
              </tr>
              <tr>
                <td style="border:1px solid black;border-left-color: white;border-right-color: white;border-bottom-color: white; padding:0;" colspan="6"></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td><b>AVERAGE:</b></td>
                <td id="avg9" style="font-weight: 900;">0</td>
              </tr>
        </tbody>
     </table>
   </div><br><br><br>
  </div>



<script>
  function hide(){
    document.getElementById('BSIS').style.display='none';
    document.getElementById('BSIT').style.display='none';
    document.getElementById('BSIS').style.animation="show 0.3s ease-in";
    document.getElementById('BSIT').style.animation="show 0.3s ease-in";
    document.getElementById('arrowright').style.marginRight="0px";
    document.getElementById('arrowright').style.animation="animate 1s";
    document.getElementById('arrowright').style.display="none";
    document.getElementById('arrowleft').style.display="block";
  }
  function show(){
    document.getElementById('BSIS').style.display='block';
    document.getElementById('BSIT').style.display='block';
    document.getElementById('BSIS').style.animation="show 0.3s ease-in";
    document.getElementById('BSIT').style.animation="show 0.3s ease-in";
    document.getElementById('arrowright').style.marginRight="135px";
    document.getElementById('arrowleft').style.animation="animate 1s";
    document.getElementById('arrowleft').style.display="none";
    document.getElementById('arrowright').style.display="block";
  }
</script>















<script>
  var a= parseInt(
    <?php
      $query = "SELECT sum(units) as total FROM `firstyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output = $row['total'];
      }
      ?>
      );


  var avga= parseFloat(
    <?php
      $query = "SELECT sum(grade) as totalavg FROM `firstyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputa = $row['totalavg'];
      }
      ?>
      );



  var b= parseInt(
    <?php
      $query = "SELECT sum(units2) as total FROM `firstyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output2 = $row['total'];
      }
      ?>
      );

  var avgb= parseFloat(
    <?php
      $query = "SELECT sum(grade2) as totalavg2 FROM `firstyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputb = $row['totalavg2'];
      }
      ?>
      );



  var c= parseInt(
    <?php
      $query = "SELECT sum(units3) as total FROM `firstyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output3 = $row['total'];
      }
      ?>
      );

  var avgc= parseFloat(
    <?php
      $query = "SELECT sum(grade3) as totalavg3 FROM `firstyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputc = $row['totalavg3'];
      }
      ?>
      );



  var d= parseInt(
    <?php
      $query = "SELECT sum(units4) as total FROM `firstyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output4 = $row['total'];
      }
      ?>
      );


  var avgd= parseFloat(
    <?php
      $query = "SELECT sum(grade4) as totalavg4 FROM `firstyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputd = $row['totalavg4'];
      }
      ?>
      );



  var e= parseInt(
    <?php
      $query = "SELECT sum(units5) as total FROM `firstyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output5 = $row['total'];
      }
      ?>
      );

  var avge= parseFloat(
    <?php
      $query = "SELECT sum(grade5) as totalavg5 FROM `firstyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outpute = $row['totalavg5'];
      }
      ?>
      );



  var f= parseInt(
    <?php
      $query = "SELECT sum(units6) as total FROM `firstyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output6 = $row['total'];
      }
      ?>
      );

  var avgf= parseFloat(
    <?php
      $query = "SELECT sum(grade6) as totalavg6 FROM `firstyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputf = $row['totalavg6'];
      }
      ?>
      );


  var g= parseInt(
    <?php
      $query = "SELECT sum(units7) as total FROM `firstyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output7 = $row['total'];
      }
      ?>
      );

  var avgg= parseFloat(
    <?php
      $query = "SELECT sum(grade7) as totalavg7 FROM `firstyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputg = $row['totalavg7'];
      }
      ?>
      );


  var h= parseInt(
    <?php
      $query = "SELECT sum(units8) as total FROM `firstyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output8 = $row['total'];
      }
      ?>
      );

  var avgh= parseFloat(
    <?php
      $query = "SELECT sum(grade8) as totalavg8 FROM `firstyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputh = $row['totalavg8'];
      }
      ?>
      );



  var i= parseInt(
    <?php
      $query = "SELECT sum(units9) as total FROM `firstyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output9 = $row['total'];
      }
      ?>
      );

  var avgi= parseFloat(
    <?php
      $query = "SELECT sum(grade9) as totalavg9 FROM `firstyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputi = $row['totalavg9'];
      }
      ?>
      );


  var j= parseInt(
    <?php
      $query = "SELECT sum(units10) as total FROM `firstyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output10 = $row['total'];
      }
      ?>
      );

  var avgj= parseFloat(
    <?php
      $query = "SELECT sum(grade10) as totalavg10 FROM `firstyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputj = $row['totalavg10'];
      }
      ?>
      );

  var k= parseInt(
    <?php
      $query = "SELECT sum(units11) as total FROM `firstyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output11 = $row['total'];
      }
      ?>
      );

  var avgk= parseFloat(
    <?php
      $query = "SELECT sum(grade11) as totalavg11 FROM `firstyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputk = $row['totalavg11'];
      }
      ?>
      );

  var l= parseInt(
    <?php
      $query = "SELECT sum(units12) as total FROM `firstyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output12 = $row['total'];
      }
      ?>
      );

  var avgl= parseFloat(
    <?php
      $query = "SELECT sum(grade12) as totalavg12 FROM `firstyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputl = $row['totalavg12'];
      }
      ?>
      );

  var m= parseInt(
    <?php
      $query = "SELECT sum(units13) as total FROM `firstyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output13 = $row['total'];
      }
      ?>
      );

  var avgm= parseFloat(
    <?php
      $query = "SELECT sum(grade13) as totalavg13 FROM `firstyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputm = $row['totalavg13'];
      }
      ?>
      );



  var n= parseInt(
    <?php
      $query = "SELECT sum(units14) as total FROM `firstyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output14 = $row['total'];
      }
      ?>
      );

  var avgn= parseFloat(
    <?php
      $query = "SELECT sum(grade14) as totalavg14 FROM `firstyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputn = $row['totalavg14'];
      }
      ?>
      );

  var o= parseInt(
    <?php
      $query = "SELECT sum(units15) as total FROM `firstyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output15 = $row['total'];
      }
      ?>
      );

  var avgo= parseFloat(
    <?php
      $query = "SELECT sum(grade15) as totalavg15 FROM `firstyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputo = $row['totalavg15'];
      }
      ?>
      );



  var p= parseInt(
    <?php
      $query = "SELECT sum(units16) as total FROM `firstyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output16 = $row['total'];
      }
      ?>
      );

  var avgp= parseFloat(
    <?php
      $query = "SELECT sum(grade16) as totalavg16 FROM `firstyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputp = $row['totalavg16'];
      }
      ?>
      );


  var q= parseInt(
    <?php
      $query = "SELECT sum(units17) as total FROM `firstyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output17 = $row['total'];
      }
      ?>
      );

  var avgq= parseFloat(
    <?php
      $query = "SELECT sum(grade17) as totalavg17 FROM `firstyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputq = $row['totalavg17'];
      }
      ?>
      );



  var r= parseInt(
    <?php
      $query = "SELECT sum(units18) as total FROM `firstyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output18 = $row['total'];
      }
      ?>
      );

  var avgr= parseFloat(
    <?php
      $query = "SELECT sum(grade18) as totalavg18 FROM `firstyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputr = $row['totalavg18'];
      }
      ?>
      );

  var s= parseInt(
    <?php
      $query = "SELECT sum(units19) as total FROM `firstyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output19 = $row['total'];
      }
      ?>
      );

  var avgs= parseFloat(
    <?php
      $query = "SELECT sum(grade19) as totalavg19 FROM `firstyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputs = $row['totalavg19'];
      }
      ?>
      );

  var t= parseInt(
    <?php
      $query = "SELECT sum(units20) as total FROM `firstyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output20 = $row['total'];
      }
      ?>
      );

  var avgt= parseFloat(
    <?php
      $query = "SELECT sum(grade20) as totalavg20 FROM `firstyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputt = $row['totalavg20'];
      }
      ?>
      );

  var a1= parseInt(<?php echo $output; ?>);
  var b1= parseInt(<?php echo $output2; ?>);
  var c1= parseInt(<?php echo $output3; ?>);
  var d1= parseInt(<?php echo $output4; ?>);
  var e1= parseInt(<?php echo $output5; ?>);
  var f1= parseInt(<?php echo $output6; ?>);
  var g1= parseInt(<?php echo $output7; ?>);
  var h1= parseInt(<?php echo $output8; ?>);
  var i1= parseInt(<?php echo $output9; ?>);
  var j1= parseInt(<?php echo $output10; ?>);
  var k1= parseInt(<?php echo $output11; ?>);
  var l1= parseInt(<?php echo $output12; ?>);
  var m1= parseInt(<?php echo $output13; ?>);
  var n1= parseInt(<?php echo $output14; ?>);
  var o1= parseInt(<?php echo $output15; ?>);
  var p1= parseInt(<?php echo $output16; ?>);
  var q1= parseInt(<?php echo $output17; ?>);
  var r1= parseInt(<?php echo $output18; ?>);
  var s1= parseInt(<?php echo $output19; ?>);
  var t1= parseInt(<?php echo $output20; ?>);


  var avgaa=parseFloat(<?php echo $outputa; ?>);
  var avgbb=parseFloat(<?php echo $outputb; ?>);
  var avgcc=parseFloat(<?php echo $outputc; ?>);
  var avgdd=parseFloat(<?php echo $outputd; ?>);
  var avgee=parseFloat(<?php echo $outpute; ?>);
  var avgff=parseFloat(<?php echo $outputf; ?>);
  var avggg=parseFloat(<?php echo $outputg; ?>);
  var avghh=parseFloat(<?php echo $outputh; ?>);
  var avgii=parseFloat(<?php echo $outputi; ?>);
  var avgjj=parseFloat(<?php echo $outputj; ?>);
  var avgkk=parseFloat(<?php echo $outputk; ?>);
  var avgll=parseFloat(<?php echo $outputl; ?>);
  var avgmm=parseFloat(<?php echo $outputm; ?>);
  var avgnn=parseFloat(<?php echo $outputn; ?>);
  var avgoo=parseFloat(<?php echo $outputo; ?>);
  var avgpp=parseFloat(<?php echo $outputp; ?>);
  var avgqq=parseFloat(<?php echo $outputq; ?>);
  var avgrr=parseFloat(<?php echo $outputr; ?>);
  var avgss=parseFloat(<?php echo $outputs; ?>);
  var avgtt=parseFloat(<?php echo $outputt; ?>);


  var avgres=parseFloat(a1*avgaa);
  var avgres2=parseFloat(b1*avgbb);
  var avgres3=parseFloat(c1*avgcc);
  var avgres4=parseFloat(d1*avgdd);
  var avgres5=parseFloat(e1*avgee);
  var avgres6=parseFloat(f1*avgff);
  var avgres7=parseFloat(g1*avggg);
  var avgres8=parseFloat(h1*avghh);
  var avgres9=parseFloat(i1*avgii);
  var avgres10=parseFloat(j1*avgjj);
  var avgres11=parseFloat(k1*avgkk);
  var avgres12=parseFloat(l1*avgll);
  var avgres13=parseFloat(m1*avgmm);
  var avgres14=parseFloat(n1*avgnn);
  var avgres15=parseFloat(o1*avgoo);
  var avgres16=parseFloat(p1*avgpp);
  var avgres17=parseFloat(q1*avgqq);
  var avgres18=parseFloat(r1*avgrr);
  var avgres19=parseFloat(s1*avgss);
  var avgres20=parseFloat(t1*avgtt);

  document.getElementById('sum1').innerHTML=avgres;
  document.getElementById('sum2').innerHTML=avgres2;
  document.getElementById('sum3').innerHTML=avgres3;
  document.getElementById('sum4').innerHTML=avgres4;
  document.getElementById('sum5').innerHTML=avgres5;
  document.getElementById('sum6').innerHTML=avgres6;
  document.getElementById('sum7').innerHTML=avgres7;
  document.getElementById('sum8').innerHTML=avgres8;
  document.getElementById('sum9').innerHTML=avgres9;
  document.getElementById('sum10').innerHTML=avgres10;
  document.getElementById('sum11').innerHTML=avgres11;
  document.getElementById('sum12').innerHTML=avgres12;
  document.getElementById('sum13').innerHTML=avgres13;
  document.getElementById('sum14').innerHTML=avgres14;
  document.getElementById('sum15').innerHTML=avgres15;
  document.getElementById('sum16').innerHTML=avgres16;
  document.getElementById('sum17').innerHTML=avgres17;
  document.getElementById('sum18').innerHTML=avgres18;
  document.getElementById('sum19').innerHTML=avgres19;
  document.getElementById('sum20').innerHTML=avgres20;

  var avgsumres=avgres+avgres2+avgres3+avgres4+avgres5+avgres6+avgres7+avgres8+avgres9+avgres10;

  var avgsumres2=avgres11+avgres12+avgres13+avgres14+avgres15+avgres16+avgres17+avgres18+avgres19+avgres20;

































































  var u= parseInt(
    <?php
      $query = "SELECT sum(units) as total FROM `secondyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output21 = $row['total'];
      }
      ?>
  );

  var avga2= parseFloat(
    <?php
      $query = "SELECT sum(grade) as totalavg21 FROM `secondyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputa2 = $row['totalavg21'];
      }
      ?>
   );

  var v= parseInt(
    <?php
      $query = "SELECT sum(units2) as total FROM `secondyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output22 = $row['total'];
      }
      ?>
      );

  var avgb2= parseFloat(
    <?php
      $query = "SELECT sum(grade2) as totalavg22 FROM `secondyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputb2 = $row['totalavg22'];
      }
      ?>
   );

  var w= parseInt(
    <?php
      $query = "SELECT sum(units3) as total FROM `secondyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output23 = $row['total'];
      }
      ?>
      );

  var avgc2= parseFloat(
    <?php
      $query = "SELECT sum(grade3) as totalavg23 FROM `secondyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputc2 = $row['totalavg23'];
      }
      ?>
   );


  var x= parseInt(
    <?php
      $query = "SELECT sum(units4) as total FROM `secondyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output24 = $row['total'];
      }
      ?>
      );

  var avgd2= parseFloat(
    <?php
      $query = "SELECT sum(grade4) as totalavg24 FROM `secondyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputd2 = $row['totalavg24'];
      }
      ?>
   );

  var y= parseInt(
    <?php
      $query = "SELECT sum(units5) as total FROM `secondyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output25 = $row['total'];
      }
      ?>
      );

  var avge2= parseFloat(
    <?php
      $query = "SELECT sum(grade5) as totalavg25 FROM `secondyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outpute2 = $row['totalavg25'];
      }
      ?>
   );



  var z= parseInt(
    <?php
      $query = "SELECT sum(units6) as total FROM `secondyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output26 = $row['total'];
      }
      ?>
      );

  var avgf2= parseFloat(
    <?php
      $query = "SELECT sum(grade6) as totalavg26 FROM `secondyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputf2 = $row['totalavg26'];
      }
      ?>
   );


  var aa= parseInt(
    <?php
      $query = "SELECT sum(units7) as total FROM `secondyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output27 = $row['total'];
      }
      ?>
      );

  var avgg2= parseFloat(
    <?php
      $query = "SELECT sum(grade7) as totalavg27 FROM `secondyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputg2 = $row['totalavg27'];
      }
      ?>
   );

  var bb= parseInt(
    <?php
      $query = "SELECT sum(units8) as total FROM `secondyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output28 = $row['total'];
      }
      ?>
      );

  var avgh2= parseFloat(
    <?php
      $query = "SELECT sum(grade8) as totalavg28 FROM `secondyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputh2 = $row['totalavg28'];
      }
      ?>
   );


  var cc= parseInt(
    <?php
      $query = "SELECT sum(units9) as total FROM `secondyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output29 = $row['total'];
      }
      ?>
      );

  var avgi2= parseFloat(
    <?php
      $query = "SELECT sum(grade9) as totalavg29 FROM `secondyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputi2 = $row['totalavg29'];
      }
      ?>
   );

  var dd= parseInt(
    <?php
      $query = "SELECT sum(units10) as total FROM `secondyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output30 = $row['total'];
      }
      ?>
      );

  var avgj2= parseFloat(
    <?php
      $query = "SELECT sum(grade10) as totalavg30 FROM `secondyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputj2 = $row['totalavg30'];
      }
      ?>
   );

  var ee= parseInt(
    <?php
      $query = "SELECT sum(units11) as total FROM `secondyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output31 = $row['total'];
      }
      ?>
      );

  var avgk2= parseFloat(
    <?php
      $query = "SELECT sum(grade11) as totalavg31 FROM `secondyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputk2 = $row['totalavg31'];
      }
      ?>
   );


  var ff= parseInt(
    <?php
      $query = "SELECT sum(units12) as total FROM `secondyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output32 = $row['total'];
      }
      ?>
      );

  var avgl2= parseFloat(
    <?php
      $query = "SELECT sum(grade12) as totalavg32 FROM `secondyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputl2 = $row['totalavg32'];
      }
      ?>
   );

  var gg= parseInt(
    <?php
      $query = "SELECT sum(units13) as total FROM `secondyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output33 = $row['total'];
      }
      ?>
      );

  var avgm2= parseFloat(
    <?php
      $query = "SELECT sum(grade13) as totalavg33 FROM `secondyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputm2 = $row['totalavg33'];
      }
      ?>
   );

  var hh= parseInt(
    <?php
      $query = "SELECT sum(units14) as total FROM `secondyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output34 = $row['total'];
      }
      ?>
      );

  var avgn2= parseFloat(
    <?php
      $query = "SELECT sum(grade14) as totalavg34 FROM `secondyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputn2 = $row['totalavg34'];
      }
      ?>
   );

  var ii= parseInt(
    <?php
      $query = "SELECT sum(units15) as total FROM `secondyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output35 = $row['total'];
      }
      ?>
      );

  var avgo2= parseFloat(
    <?php
      $query = "SELECT sum(grade15) as totalavg35 FROM `secondyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputo2 = $row['totalavg35'];
      }
      ?>
   );

  var jj= parseInt(
    <?php
      $query = "SELECT sum(units16) as total FROM `secondyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output36 = $row['total'];
      }
      ?>
      );

  var avgp2= parseFloat(
    <?php
      $query = "SELECT sum(grade16) as totalavg36 FROM `secondyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputp2 = $row['totalavg36'];
      }
      ?>
   );

  var kk= parseInt(
    <?php
      $query = "SELECT sum(units17) as total FROM `secondyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output37 = $row['total'];
      }
      ?>
      );

  var avgq2= parseFloat(
    <?php
      $query = "SELECT sum(grade17) as totalavg37 FROM `secondyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputq2 = $row['totalavg37'];
      }
      ?>
   );

  var ll= parseInt(
    <?php
      $query = "SELECT sum(units18) as total FROM `secondyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output38 = $row['total'];
      }
      ?>
      );

  var avgr2= parseFloat(
    <?php
      $query = "SELECT sum(grade18) as totalavg38 FROM `secondyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputr2 = $row['totalavg38'];
      }
      ?>
   );

  var mm= parseInt(
    <?php
      $query = "SELECT sum(units19) as total FROM `secondyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output39 = $row['total'];
      }
      ?>
      );

  var avgs2= parseFloat(
    <?php
      $query = "SELECT sum(grade19) as totalavg39 FROM `secondyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputs2 = $row['totalavg39'];
      }
      ?>
   );

  var nn= parseInt(
    <?php
      $query = "SELECT sum(units20) as total FROM `secondyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output40 = $row['total'];
      }
      ?>
      );

  var avgt2= parseFloat(
    <?php
      $query = "SELECT sum(grade20) as totalavg40 FROM `secondyear` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputt2 = $row['totalavg40'];
      }
      ?>
   );
  
  var u1= parseInt(<?php echo $output21; ?>);
  var v1= parseInt(<?php echo $output22; ?>);
  var w1= parseInt(<?php echo $output23; ?>);
  var x1= parseInt(<?php echo $output24; ?>);
  var y1= parseInt(<?php echo $output25; ?>);
  var z1= parseInt(<?php echo $output26; ?>);
  var aa1= parseInt(<?php echo $output27; ?>);
  var bb1= parseInt(<?php echo $output28; ?>);
  var cc1= parseInt(<?php echo $output29; ?>);
  var dd1= parseInt(<?php echo $output30; ?>);
  var ee1= parseInt(<?php echo $output31; ?>);
  var ff1= parseInt(<?php echo $output32; ?>);
  var gg1= parseInt(<?php echo $output33; ?>);
  var hh1= parseInt(<?php echo $output34; ?>);
  var ii1= parseInt(<?php echo $output35; ?>);
  var jj1= parseInt(<?php echo $output36; ?>);
  var kk1= parseInt(<?php echo $output37; ?>);
  var ll1= parseInt(<?php echo $output38; ?>);
  var mm1= parseInt(<?php echo $output39; ?>);
  var nn1= parseInt(<?php echo $output40; ?>);


  var avgaa2=parseFloat(<?php echo $outputa2; ?>);
  var avgbb2=parseFloat(<?php echo $outputb2; ?>);
  var avgcc2=parseFloat(<?php echo $outputc2; ?>);
  var avgdd2=parseFloat(<?php echo $outputd2; ?>);
  var avgee2=parseFloat(<?php echo $outpute2; ?>);
  var avgff2=parseFloat(<?php echo $outputf2; ?>);
  var avggg2=parseFloat(<?php echo $outputg2; ?>);
  var avghh2=parseFloat(<?php echo $outputh2; ?>);
  var avgii2=parseFloat(<?php echo $outputi2; ?>);
  var avgjj2=parseFloat(<?php echo $outputj2; ?>);
  var avgkk2=parseFloat(<?php echo $outputk2; ?>);
  var avgll2=parseFloat(<?php echo $outputl2; ?>);
  var avgmm2=parseFloat(<?php echo $outputm2; ?>);
  var avgnn2=parseFloat(<?php echo $outputn2; ?>);
  var avgoo2=parseFloat(<?php echo $outputo2; ?>);
  var avgpp2=parseFloat(<?php echo $outputp2; ?>);
  var avgqq2=parseFloat(<?php echo $outputq2; ?>);
  var avgrr2=parseFloat(<?php echo $outputr2; ?>);
  var avgss2=parseFloat(<?php echo $outputs2; ?>);
  var avgtt2=parseFloat(<?php echo $outputt2; ?>);


  var avgres21=parseFloat(u1*avgaa2);
  var avgres22=parseFloat(v1*avgbb2);
  var avgres23=parseFloat(w1*avgcc2);
  var avgres24=parseFloat(x1*avgdd2);
  var avgres25=parseFloat(y1*avgee2);
  var avgres26=parseFloat(z1*avgff2);
  var avgres27=parseFloat(aa1*avggg2);
  var avgres28=parseFloat(bb1*avghh2);
  var avgres29=parseFloat(cc1*avgii2);
  var avgres30=parseFloat(dd1*avgjj2);
  var avgres31=parseFloat(ee1*avgkk2);
  var avgres32=parseFloat(ff1*avgll2);
  var avgres33=parseFloat(gg1*avgmm2);
  var avgres34=parseFloat(hh1*avgnn2);
  var avgres35=parseFloat(ii1*avgoo2);
  var avgres36=parseFloat(jj1*avgpp2);
  var avgres37=parseFloat(kk1*avgqq2);
  var avgres38=parseFloat(ll1*avgrr2);
  var avgres39=parseFloat(mm1*avgss2);
  var avgres40=parseFloat(nn1*avgtt2);

  document.getElementById('sum21').innerHTML=avgres21;
  document.getElementById('sum22').innerHTML=avgres22;
  document.getElementById('sum23').innerHTML=avgres23;
  document.getElementById('sum24').innerHTML=avgres24;
  document.getElementById('sum25').innerHTML=avgres25;
  document.getElementById('sum26').innerHTML=avgres26;
  document.getElementById('sum27').innerHTML=avgres27;
  document.getElementById('sum28').innerHTML=avgres28;
  document.getElementById('sum29').innerHTML=avgres29;
  document.getElementById('sum30').innerHTML=avgres30;
  document.getElementById('sum31').innerHTML=avgres31;
  document.getElementById('sum32').innerHTML=avgres32;
  document.getElementById('sum33').innerHTML=avgres33;
  document.getElementById('sum34').innerHTML=avgres34;
  document.getElementById('sum35').innerHTML=avgres35;
  document.getElementById('sum36').innerHTML=avgres36;
  document.getElementById('sum37').innerHTML=avgres37;
  document.getElementById('sum38').innerHTML=avgres38;
  document.getElementById('sum39').innerHTML=avgres39;
  document.getElementById('sum40').innerHTML=avgres40;

  var avgsumres3=avgres21+avgres22+avgres23+avgres24+avgres25+avgres26+avgres27+avgres28+avgres29+avgres30;

  var avgsumres4=avgres31+avgres32+avgres33+avgres34+avgres35+avgres36+avgres37+avgres38+avgres39+avgres40;















































  var oo= parseInt(
    <?php
      $query = "SELECT sum(units) as total FROM `thirdyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output41 = $row['total'];
      }
      ?>
      );

  var avga3= parseFloat(
    <?php
      $query = "SELECT sum(grade) as totalavg41 FROM `thirdyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputa3 = $row['totalavg41'];
      }
      ?>
   );

  var pp= parseInt(
    <?php
      $query = "SELECT sum(units2) as total FROM `thirdyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output42 = $row['total'];
      }
      ?>
      );

  var avgb3= parseFloat(
    <?php
      $query = "SELECT sum(grade2) as totalavg42 FROM `thirdyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputb3 = $row['totalavg42'];
      }
      ?>
   );

  var qq= parseInt(
    <?php
      $query = "SELECT sum(units3) as total FROM `thirdyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output43 = $row['total'];
      }
      ?>
      );

  var avgc3= parseFloat(
    <?php
      $query = "SELECT sum(grade3) as totalavg43 FROM `thirdyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputc3 = $row['totalavg43'];
      }
      ?>
   );

  var rr= parseInt(
    <?php
      $query = "SELECT sum(units4) as total FROM `thirdyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output44 = $row['total'];
      }
      ?>
      );

  var avgd3= parseFloat(
    <?php
      $query = "SELECT sum(grade4) as totalavg44 FROM `thirdyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputd3 = $row['totalavg44'];
      }
      ?>
   );

  var ss= parseInt(
    <?php
      $query = "SELECT sum(units5) as total FROM `thirdyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output45 = $row['total'];
      }
      ?>
      );

  var avge3= parseFloat(
    <?php
      $query = "SELECT sum(grade5) as totalavg45 FROM `thirdyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outpute3 = $row['totalavg45'];
      }
      ?>
   );

  var tt= parseInt(
    <?php
      $query = "SELECT sum(units6) as total FROM `thirdyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output46 = $row['total'];
      }
      ?>
      );

  var avgf3= parseFloat(
    <?php
      $query = "SELECT sum(grade6) as totalavg46 FROM `thirdyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputf3 = $row['totalavg46'];
      }
      ?>
   );

  var uu= parseInt(
    <?php
      $query = "SELECT sum(units7) as total FROM `thirdyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output47 = $row['total'];
      }
      ?>
      );

  var avgg3= parseFloat(
    <?php
      $query = "SELECT sum(grade7) as totalavg47 FROM `thirdyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputg3 = $row['totalavg47'];
      }
      ?>
   );

  var vv= parseInt(
    <?php
      $query = "SELECT sum(units8) as total FROM `thirdyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output48 = $row['total'];
      }
      ?>
      );

  var avgh3= parseFloat(
    <?php
      $query = "SELECT sum(grade8) as totalavg48 FROM `thirdyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputh3 = $row['totalavg48'];
      }
      ?>
   );

  var ww= parseInt(
    <?php
      $query = "SELECT sum(units9) as total FROM `thirdyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output49 = $row['total'];
      }
      ?>
      );

  var avgi3= parseFloat(
    <?php
      $query = "SELECT sum(grade9) as totalavg49 FROM `thirdyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputi3 = $row['totalavg49'];
      }
      ?>
   );

  var xx= parseInt(
    <?php
      $query = "SELECT sum(units10) as total FROM `thirdyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output50 = $row['total'];
      }
      ?>
      );

  var avgj3= parseFloat(
    <?php
      $query = "SELECT sum(grade10) as totalavg50 FROM `thirdyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputj3 = $row['totalavg50'];
      }
      ?>
   );

  var yy= parseInt(
    <?php
      $query = "SELECT sum(units11) as total FROM `thirdyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output51 = $row['total'];
      }
      ?>
      );

  var avgk3= parseFloat(
    <?php
      $query = "SELECT sum(grade11) as totalavg51 FROM `thirdyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputk3 = $row['totalavg51'];
      }
      ?>
   );

  var zz= parseInt(
    <?php
      $query = "SELECT sum(units12) as total FROM `thirdyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output52 = $row['total'];
      }
      ?>
      );

  var avgl3= parseFloat(
    <?php
      $query = "SELECT sum(grade12) as totalavg52 FROM `thirdyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputl3 = $row['totalavg52'];
      }
      ?>
   );

  var aaa= parseInt(
    <?php
      $query = "SELECT sum(units13) as total FROM `thirdyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output53 = $row['total'];
      }
      ?>
      );

  var avgm3= parseFloat(
    <?php
      $query = "SELECT sum(grade13) as totalavg53 FROM `thirdyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputm3 = $row['totalavg53'];
      }
      ?>
   );

  var bbb= parseInt(
    <?php
      $query = "SELECT sum(units14) as total FROM `thirdyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output54 = $row['total'];
      }
      ?>
      );

  var avgn3= parseFloat(
    <?php
      $query = "SELECT sum(grade14) as totalavg54 FROM `thirdyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputn3 = $row['totalavg54'];
      }
      ?>
   );

  var ccc= parseInt(
    <?php
      $query = "SELECT sum(units15) as total FROM `thirdyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output55 = $row['total'];
      }
      ?>
      );

  var avgo3= parseFloat(
    <?php
      $query = "SELECT sum(grade15) as totalavg55 FROM `thirdyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputo3 = $row['totalavg55'];
      }
      ?>
   );

  var ddd= parseInt(
    <?php
      $query = "SELECT sum(units16) as total FROM `thirdyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output56 = $row['total'];
      }
      ?>
      );

  var avgp3= parseFloat(
    <?php
      $query = "SELECT sum(grade16) as totalavg56 FROM `thirdyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputp3 = $row['totalavg56'];
      }
      ?>
   );

  var eee= parseInt(
    <?php
      $query = "SELECT sum(units17) as total FROM `thirdyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output57 = $row['total'];
      }
      ?>
      );

  var avgq3= parseFloat(
    <?php
      $query = "SELECT sum(grade17) as totalavg57 FROM `thirdyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputq3 = $row['totalavg57'];
      }
      ?>
   );

  var fff= parseInt(
    <?php
      $query = "SELECT sum(units18) as total FROM `thirdyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output58 = $row['total'];
      }
      ?>
      );

  var avgr3= parseFloat(
    <?php
      $query = "SELECT sum(grade18) as totalavg58 FROM `thirdyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputr3 = $row['totalavg58'];
      }
      ?>
   );


  var ggg= parseInt(
    <?php
      $query = "SELECT sum(units19) as total FROM `thirdyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output59 = $row['total'];
      }
      ?>
      );

  var avgs3= parseFloat(
    <?php
      $query = "SELECT sum(grade19) as totalavg59 FROM `thirdyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputs3 = $row['totalavg59'];
      }
      ?>
   );

  var hhh= parseInt(
    <?php
      $query = "SELECT sum(units20) as total FROM `thirdyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output60 = $row['total'];
      }
      ?>
      );

  var avgt3= parseFloat(
    <?php
      $query = "SELECT sum(grade20) as totalavg60 FROM `thirdyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputt3 = $row['totalavg60'];
      }
      ?>
   );

  var oo1= parseInt(<?php echo $output41; ?>);
  var pp1= parseInt(<?php echo $output42; ?>);
  var qq1= parseInt(<?php echo $output43; ?>);
  var rr1= parseInt(<?php echo $output44; ?>);
  var ss1= parseInt(<?php echo $output45; ?>);
  var tt1= parseInt(<?php echo $output46; ?>);
  var uu1= parseInt(<?php echo $output47; ?>);
  var vv1= parseInt(<?php echo $output48; ?>);
  var ww1= parseInt(<?php echo $output49; ?>);
  var xx1= parseInt(<?php echo $output50; ?>);
  var yy1= parseInt(<?php echo $output51; ?>);
  var zz1= parseInt(<?php echo $output52; ?>);
  var aaa1= parseInt(<?php echo $output53; ?>);
  var bbb1= parseInt(<?php echo $output54; ?>);
  var ccc1= parseInt(<?php echo $output55; ?>);
  var ddd1= parseInt(<?php echo $output56; ?>);
  var eee1= parseInt(<?php echo $output57; ?>);
  var fff1= parseInt(<?php echo $output58; ?>);
  var ggg1= parseInt(<?php echo $output59; ?>);
  var hhh1= parseInt(<?php echo $output60; ?>);

  var avgaa3=parseFloat(<?php echo $outputa3; ?>);
  var avgbb3=parseFloat(<?php echo $outputb3; ?>);
  var avgcc3=parseFloat(<?php echo $outputc3; ?>);
  var avgdd3=parseFloat(<?php echo $outputd3; ?>);
  var avgee3=parseFloat(<?php echo $outpute3; ?>);
  var avgff3=parseFloat(<?php echo $outputf3; ?>);
  var avggg3=parseFloat(<?php echo $outputg3; ?>);
  var avghh3=parseFloat(<?php echo $outputh3; ?>);
  var avgii3=parseFloat(<?php echo $outputi3; ?>);
  var avgjj3=parseFloat(<?php echo $outputj3; ?>);
  var avgkk3=parseFloat(<?php echo $outputk3; ?>);
  var avgll3=parseFloat(<?php echo $outputl3; ?>);
  var avgmm3=parseFloat(<?php echo $outputm3; ?>);
  var avgnn3=parseFloat(<?php echo $outputn3; ?>);
  var avgoo3=parseFloat(<?php echo $outputo3; ?>);
  var avgpp3=parseFloat(<?php echo $outputp3; ?>);
  var avgqq3=parseFloat(<?php echo $outputq3; ?>);
  var avgrr3=parseFloat(<?php echo $outputr3; ?>);
  var avgss3=parseFloat(<?php echo $outputs3; ?>);
  var avgtt3=parseFloat(<?php echo $outputt3; ?>);


  var avgres41=parseFloat(oo1*avgaa3);
  var avgres42=parseFloat(pp1*avgbb3);
  var avgres43=parseFloat(qq1*avgcc3);
  var avgres44=parseFloat(rr1*avgdd3);
  var avgres45=parseFloat(ss1*avgee3);
  var avgres46=parseFloat(tt1*avgff3);
  var avgres47=parseFloat(uu1*avggg3);
  var avgres48=parseFloat(vv1*avghh3);
  var avgres49=parseFloat(ww1*avgii3);
  var avgres50=parseFloat(xx1*avgjj3);
  var avgres51=parseFloat(yy1*avgkk3);
  var avgres52=parseFloat(zz1*avgll3);
  var avgres53=parseFloat(aaa1*avgmm3);
  var avgres54=parseFloat(bbb1*avgnn3);
  var avgres55=parseFloat(ccc1*avgoo3);
  var avgres56=parseFloat(ddd1*avgpp3);
  var avgres57=parseFloat(eee1*avgqq3);
  var avgres58=parseFloat(fff1*avgrr3);
  var avgres59=parseFloat(ggg1*avgss3);
  var avgres60=parseFloat(hhh1*avgtt3);

  document.getElementById('sum41').innerHTML=avgres41;
  document.getElementById('sum42').innerHTML=avgres42;
  document.getElementById('sum43').innerHTML=avgres43;
  document.getElementById('sum44').innerHTML=avgres44;
  document.getElementById('sum45').innerHTML=avgres45;
  document.getElementById('sum46').innerHTML=avgres46;
  document.getElementById('sum47').innerHTML=avgres47;
  document.getElementById('sum48').innerHTML=avgres48;
  document.getElementById('sum49').innerHTML=avgres49;
  document.getElementById('sum50').innerHTML=avgres50;
  document.getElementById('sum51').innerHTML=avgres51;
  document.getElementById('sum52').innerHTML=avgres52;
  document.getElementById('sum53').innerHTML=avgres53;
  document.getElementById('sum54').innerHTML=avgres54;
  document.getElementById('sum55').innerHTML=avgres55;
  document.getElementById('sum56').innerHTML=avgres56;
  document.getElementById('sum57').innerHTML=avgres57;
  document.getElementById('sum58').innerHTML=avgres58;
  document.getElementById('sum59').innerHTML=avgres59;
  document.getElementById('sum60').innerHTML=avgres60;

  var avgsumres5=avgres41+avgres42+avgres43+avgres44+avgres45+avgres46+avgres47+avgres48+avgres49+avgres50;

  var avgsumres6=avgres51+avgres52+avgres53+avgres54+avgres55+avgres56+avgres57+avgres58+avgres59+avgres60;





















































  var iii= parseInt(
    <?php
      $query = "SELECT sum(units) as total FROM `midyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output61 = $row['total'];
      }
      ?>
      );

  var avga4= parseFloat(
    <?php
      $query = "SELECT sum(grade) as totalavg61 FROM `midyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputa4 = $row['totalavg61'];
      }
      ?>
   );

  var jjj= parseInt(
    <?php
      $query = "SELECT sum(units2) as total FROM `midyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output62 = $row['total'];
      }
      ?>
      );

  var avgb4= parseFloat(
    <?php
      $query = "SELECT sum(grade2) as totalavg62 FROM `midyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputb4 = $row['totalavg62'];
      }
      ?>
   );

  var kkk= parseInt(
    <?php
      $query = "SELECT sum(units3) as total FROM `midyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output63 = $row['total'];
      }
      ?>
      );

  var avgc4= parseFloat(
    <?php
      $query = "SELECT sum(grade3) as totalavg63 FROM `midyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputc4 = $row['totalavg63'];
      }
      ?>
   );

  var lll= parseInt(
    <?php
      $query = "SELECT sum(units4) as total FROM `midyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output64 = $row['total'];
      }
      ?>
      );

  var avgd4= parseFloat(
    <?php
      $query = "SELECT sum(grade4) as totalavg64 FROM `midyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputd4 = $row['totalavg64'];
      }
      ?>
   );

  var mmm= parseInt(
    <?php
      $query = "SELECT sum(units5) as total FROM `midyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output65 = $row['total'];
      }
      ?>
      );

  var avge4= parseFloat(
    <?php
      $query = "SELECT sum(grade5) as totalavg65 FROM `midyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outpute4 = $row['totalavg65'];
      }
      ?>
   );

  var nnn= parseInt(
    <?php
      $query = "SELECT sum(units6) as total FROM `midyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output66 = $row['total'];
      }
      ?>
      );

  var avgf4= parseFloat(
    <?php
      $query = "SELECT sum(grade6) as totalavg66 FROM `midyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputf4 = $row['totalavg66'];
      }
      ?>
   );

  var ooo= parseInt(
    <?php
      $query = "SELECT sum(units7) as total FROM `midyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output67 = $row['total'];
      }
      ?>
      );

  var avgg4= parseFloat(
    <?php
      $query = "SELECT sum(grade7) as totalavg67 FROM `midyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputg4 = $row['totalavg67'];
      }
      ?>
   );

  var ppp= parseInt(
    <?php
      $query = "SELECT sum(units8) as total FROM `midyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output68 = $row['total'];
      }
      ?>
      );

  var avgh4= parseFloat(
    <?php
      $query = "SELECT sum(grade8) as totalavg68 FROM `midyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputh4 = $row['totalavg68'];
      }
      ?>
   );

  var qqq= parseInt(
    <?php
      $query = "SELECT sum(units9) as total FROM `midyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output69 = $row['total'];
      }
      ?>
      );

  var avgi4= parseFloat(
    <?php
      $query = "SELECT sum(grade9) as totalavg69 FROM `midyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputi4 = $row['totalavg69'];
      }
      ?>
   );

  var rrr= parseInt(
    <?php
      $query = "SELECT sum(units10) as total FROM `midyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output70 = $row['total'];
      }
      ?>
      );

  var avgj4= parseFloat(
    <?php
      $query = "SELECT sum(grade10) as totalavg70 FROM `midyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputj4 = $row['totalavg70'];
      }
      ?>
   );



  var iii1= parseInt(<?php echo $output61; ?>);
  var jjj1= parseInt(<?php echo $output62; ?>);
  var kkk1= parseInt(<?php echo $output63; ?>);
  var lll1= parseInt(<?php echo $output64; ?>);
  var mmm1= parseInt(<?php echo $output65; ?>);
  var nnn1= parseInt(<?php echo $output66; ?>);
  var ooo1= parseInt(<?php echo $output67; ?>);
  var ppp1= parseInt(<?php echo $output68; ?>);
  var qqq1= parseInt(<?php echo $output69; ?>);
  var rrr1= parseInt(<?php echo $output70; ?>);


  var avgaa4=parseFloat(<?php echo $outputa4; ?>);
  var avgbb4=parseFloat(<?php echo $outputb4; ?>);
  var avgcc4=parseFloat(<?php echo $outputc4; ?>);
  var avgdd4=parseFloat(<?php echo $outputd4; ?>);
  var avgee4=parseFloat(<?php echo $outpute4; ?>);
  var avgff4=parseFloat(<?php echo $outputf4; ?>);
  var avggg4=parseFloat(<?php echo $outputg4; ?>);
  var avghh4=parseFloat(<?php echo $outputh4; ?>);
  var avgii4=parseFloat(<?php echo $outputi4; ?>);
  var avgjj4=parseFloat(<?php echo $outputj4; ?>);

  var avgres61=parseFloat(iii1*avgaa4);
  var avgres62=parseFloat(jjj1*avgbb4);
  var avgres63=parseFloat(kkk1*avgcc4);
  var avgres64=parseFloat(lll1*avgdd4);
  var avgres65=parseFloat(mmm1*avgee4);
  var avgres66=parseFloat(nnn1*avgff4);
  var avgres67=parseFloat(ooo1*avggg4);
  var avgres68=parseFloat(ppp1*avghh4);
  var avgres69=parseFloat(qqq1*avgii4);
  var avgres70=parseFloat(rrr1*avgjj4);


  document.getElementById('sum61').innerHTML=avgres61;
  document.getElementById('sum62').innerHTML=avgres62;
  document.getElementById('sum63').innerHTML=avgres63;
  document.getElementById('sum64').innerHTML=avgres64;
  document.getElementById('sum65').innerHTML=avgres65;
  document.getElementById('sum66').innerHTML=avgres66;
  document.getElementById('sum67').innerHTML=avgres67;
  document.getElementById('sum68').innerHTML=avgres68;
  document.getElementById('sum69').innerHTML=avgres69;
  document.getElementById('sum70').innerHTML=avgres70;

  var avgsumres7=avgres61+avgres62+avgres63+avgres64+avgres65+avgres66+avgres67+avgres68+avgres69+avgres70;












































  var sss= parseInt(
    <?php
      $query = "SELECT sum(units) as total FROM `fourthyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output71 = $row['total'];
      }
      ?>
      );

  var avga5= parseFloat(
    <?php
      $query = "SELECT sum(grade) as totalavg71 FROM `fourthyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputa5 = $row['totalavg71'];
      }
      ?>
   );

  var ttt= parseInt(
    <?php
      $query = "SELECT sum(units2) as total FROM `fourthyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output72 = $row['total'];
      }
      ?>
      );

  var avgb5= parseFloat(
    <?php
      $query = "SELECT sum(grade2) as totalavg72 FROM `fourthyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputb5 = $row['totalavg72'];
      }
      ?>
   );

  var uuu= parseInt(
    <?php
      $query = "SELECT sum(units3) as total FROM `fourthyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output73 = $row['total'];
      }
      ?>
      );

  var avgc5= parseFloat(
    <?php
      $query = "SELECT sum(grade3) as totalavg73 FROM `fourthyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputc5 = $row['totalavg73'];
      }
      ?>
   );

  var vvv= parseInt(
    <?php
      $query = "SELECT sum(units4) as total FROM `fourthyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output74 = $row['total'];
      }
      ?>
      );

  var avgd5= parseFloat(
    <?php
      $query = "SELECT sum(grade4) as totalavg74 FROM `fourthyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputd5 = $row['totalavg74'];
      }
      ?>
   );

  var www= parseInt(
    <?php
      $query = "SELECT sum(units5) as total FROM `fourthyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output75 = $row['total'];
      }
      ?>
      );

  var avge5= parseFloat(
    <?php
      $query = "SELECT sum(grade5) as totalavg75 FROM `fourthyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outpute5 = $row['totalavg75'];
      }
      ?>
   );

  var xxx= parseInt(
    <?php
      $query = "SELECT sum(units6) as total FROM `fourthyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output76 = $row['total'];
      }
      ?>
      );

  var avgf5= parseFloat(
    <?php
      $query = "SELECT sum(grade6) as totalavg76 FROM `fourthyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputf5 = $row['totalavg76'];
      }
      ?>
   );

  var yyy= parseInt(
    <?php
      $query = "SELECT sum(units7) as total FROM `fourthyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output77 = $row['total'];
      }
      ?>
      );

  var avgg5= parseFloat(
    <?php
      $query = "SELECT sum(grade7) as totalavg77 FROM `fourthyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputg5 = $row['totalavg77'];
      }
      ?>
   );

  var zzz= parseInt(
    <?php
      $query = "SELECT sum(units8) as total FROM `fourthyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output78 = $row['total'];
      }
      ?>
      );

  var avgh5= parseFloat(
    <?php
      $query = "SELECT sum(grade8) as totalavg78 FROM `fourthyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputh5 = $row['totalavg78'];
      }
      ?>
   );

  var aaaa= parseInt(
    <?php
      $query = "SELECT sum(units9) as total FROM `fourthyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output79 = $row['total'];
      }
      ?>
      );

  var avgi5= parseFloat(
    <?php
      $query = "SELECT sum(grade9) as totalavg79 FROM `fourthyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputi5 = $row['totalavg79'];
      }
      ?>
   );

  var bbbb= parseInt(
    <?php
      $query = "SELECT sum(units10) as total FROM `fourthyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output80 = $row['total'];
      }
      ?>
      );

  var avgj5= parseFloat(
    <?php
      $query = "SELECT sum(grade10) as totalavg80 FROM `fourthyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputj5 = $row['totalavg80'];
      }
      ?>
   );

  var cccc= parseInt(
    <?php
      $query = "SELECT sum(units11) as total FROM `fourthyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output81 = $row['total'];
      }
      ?>
      );

  var avgk5= parseFloat(
    <?php
      $query = "SELECT sum(grade11) as totalavg81 FROM `fourthyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputk5 = $row['totalavg81'];
      }
      ?>
   );

  var dddd= parseInt(
    <?php
      $query = "SELECT sum(units12) as total FROM `fourthyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output82 = $row['total'];
      }
      ?>
      );

  var avgl5= parseFloat(
    <?php
      $query = "SELECT sum(grade12) as totalavg82 FROM `fourthyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputl5 = $row['totalavg82'];
      }
      ?>
   );

  var eeee= parseInt(
    <?php
      $query = "SELECT sum(units13) as total FROM `fourthyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output83 = $row['total'];
      }
      ?>
      );

  var avgm5= parseFloat(
    <?php
      $query = "SELECT sum(grade13) as totalavg83 FROM `fourthyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputm5 = $row['totalavg83'];
      }
      ?>
   );

  var ffff= parseInt(
    <?php
      $query = "SELECT sum(units14) as total FROM `fourthyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output84 = $row['total'];
      }
      ?>
      );

  var avgn5= parseFloat(
    <?php
      $query = "SELECT sum(grade14) as totalavg84 FROM `fourthyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputn5 = $row['totalavg84'];
      }
      ?>
   );

  var gggg= parseInt(
    <?php
      $query = "SELECT sum(units15) as total FROM `fourthyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output85 = $row['total'];
      }
      ?>
      );

  var avgo5= parseFloat(
    <?php
      $query = "SELECT sum(grade15) as totalavg85 FROM `fourthyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputo5 = $row['totalavg85'];
      }
      ?>
   );

  var hhhh= parseInt(
    <?php
      $query = "SELECT sum(units16) as total FROM `fourthyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output86 = $row['total'];
      }
      ?>
      );

  var avgp5= parseFloat(
    <?php
      $query = "SELECT sum(grade16) as totalavg86 FROM `fourthyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputp5 = $row['totalavg86'];
      }
      ?>
   );

  var iiii= parseInt(
    <?php
      $query = "SELECT sum(units17) as total FROM `fourthyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output87 = $row['total'];
      }
      ?>
      );

  var avgq5= parseFloat(
    <?php
      $query = "SELECT sum(grade17) as totalavg87 FROM `fourthyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputq5 = $row['totalavg87'];
      }
      ?>
   );

  var jjjj= parseInt(
    <?php
      $query = "SELECT sum(units18) as total FROM `fourthyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output88 = $row['total'];
      }
      ?>
      );

  var avgr5= parseFloat(
    <?php
      $query = "SELECT sum(grade18) as totalavg88 FROM `fourthyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputr5 = $row['totalavg88'];
      }
      ?>
   );

  var kkkk= parseInt(
    <?php
      $query = "SELECT sum(units19) as total FROM `fourthyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output89 = $row['total'];
      }
      ?>
      );

  var avgs5= parseFloat(
    <?php
      $query = "SELECT sum(grade19) as totalavg89 FROM `fourthyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputs5 = $row['totalavg89'];
      }
      ?>
   );

  var llll= parseInt(
    <?php
      $query = "SELECT sum(units20) as total FROM `fourthyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $output90 = $row['total'];
      }
      ?>
      );

  var avgt5= parseFloat(
    <?php
      $query = "SELECT sum(grade20) as totalavg90 FROM `fourthyearnet` WHERE `studentid`= '$studentid'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
        $outputt5 = $row['totalavg90'];
      }
      ?>
   );

  var sss1= parseInt(<?php echo $output71; ?>);
  var ttt1= parseInt(<?php echo $output72; ?>);
  var uuu1= parseInt(<?php echo $output73; ?>);
  var vvv1= parseInt(<?php echo $output74; ?>);
  var www1= parseInt(<?php echo $output75; ?>);
  var xxx1= parseInt(<?php echo $output76; ?>);
  var yyy1= parseInt(<?php echo $output77; ?>);
  var zzz1= parseInt(<?php echo $output78; ?>);
  var aaaa1= parseInt(<?php echo $output79; ?>);
  var bbbb1= parseInt(<?php echo $output80; ?>);
  var cccc1= parseInt(<?php echo $output81; ?>);
  var dddd1= parseInt(<?php echo $output82; ?>);
  var eeee1= parseInt(<?php echo $output83; ?>);
  var ffff1= parseInt(<?php echo $output84; ?>);
  var gggg1= parseInt(<?php echo $output85; ?>);
  var hhhh1= parseInt(<?php echo $output86; ?>);
  var iiii1= parseInt(<?php echo $output87; ?>);
  var jjjj1= parseInt(<?php echo $output88; ?>);
  var kkkk1= parseInt(<?php echo $output89; ?>);
  var llll1= parseInt(<?php echo $output90; ?>);

  var avgaa5=parseFloat(<?php echo $outputa5; ?>);
  var avgbb5=parseFloat(<?php echo $outputb5; ?>);
  var avgcc5=parseFloat(<?php echo $outputc5; ?>);
  var avgdd5=parseFloat(<?php echo $outputd5; ?>);
  var avgee5=parseFloat(<?php echo $outpute5; ?>);
  var avgff5=parseFloat(<?php echo $outputf5; ?>);
  var avggg5=parseFloat(<?php echo $outputg5; ?>);
  var avghh5=parseFloat(<?php echo $outputh5; ?>);
  var avgii5=parseFloat(<?php echo $outputi5; ?>);
  var avgjj5=parseFloat(<?php echo $outputj5; ?>);
  var avgkk5=parseFloat(<?php echo $outputk5; ?>);
  var avgll5=parseFloat(<?php echo $outputl5; ?>);
  var avgmm5=parseFloat(<?php echo $outputm5; ?>);
  var avgnn5=parseFloat(<?php echo $outputn5; ?>);
  var avgoo5=parseFloat(<?php echo $outputo5; ?>);
  var avgpp5=parseFloat(<?php echo $outputp5; ?>);
  var avgqq5=parseFloat(<?php echo $outputq5; ?>);
  var avgrr5=parseFloat(<?php echo $outputr5; ?>);
  var avgss5=parseFloat(<?php echo $outputs5; ?>);
  var avgtt5=parseFloat(<?php echo $outputt5; ?>);


  var avgres71=parseFloat(sss1*avgaa5);
  var avgres72=parseFloat(ttt1*avgbb5);
  var avgres73=parseFloat(uuu1*avgcc5);
  var avgres74=parseFloat(vvv1*avgdd5);
  var avgres75=parseFloat(www1*avgee5);
  var avgres76=parseFloat(xxx1*avgff5);
  var avgres77=parseFloat(yyy1*avggg5);
  var avgres78=parseFloat(zzz1*avghh5);
  var avgres79=parseFloat(aaaa1*avgii5);
  var avgres80=parseFloat(bbbb1*avgjj5);
  var avgres81=parseFloat(cccc1*avgkk5);
  var avgres82=parseFloat(dddd1*avgll5);
  var avgres83=parseFloat(eeee1*avgmm5);
  var avgres84=parseFloat(ffff1*avgnn5);
  var avgres85=parseFloat(gggg1*avgoo5);
  var avgres86=parseFloat(hhhh1*avgpp5);
  var avgres87=parseFloat(iiii1*avgqq5);
  var avgres88=parseFloat(jjjj1*avgrr5);
  var avgres89=parseFloat(kkkk1*avgss5);
  var avgres90=parseFloat(llll1*avgtt5);

  document.getElementById('sum71').innerHTML=avgres71;
  document.getElementById('sum72').innerHTML=avgres72;
  document.getElementById('sum73').innerHTML=avgres73;
  document.getElementById('sum74').innerHTML=avgres74;
  document.getElementById('sum75').innerHTML=avgres75;
  document.getElementById('sum76').innerHTML=avgres76;
  document.getElementById('sum77').innerHTML=avgres77;
  document.getElementById('sum78').innerHTML=avgres78;
  document.getElementById('sum79').innerHTML=avgres79;
  document.getElementById('sum80').innerHTML=avgres80;
  document.getElementById('sum81').innerHTML=avgres81;
  document.getElementById('sum82').innerHTML=avgres82;
  document.getElementById('sum83').innerHTML=avgres83;
  document.getElementById('sum84').innerHTML=avgres84;
  document.getElementById('sum85').innerHTML=avgres85;
  document.getElementById('sum86').innerHTML=avgres86;
  document.getElementById('sum87').innerHTML=avgres87;
  document.getElementById('sum88').innerHTML=avgres88;
  document.getElementById('sum89').innerHTML=avgres89;
  document.getElementById('sum90').innerHTML=avgres90;

  var avgsumres8=avgres71+avgres72+avgres73+avgres74+avgres75+avgres76+avgres77+avgres78+avgres79+avgres80;

  var avgsumres9=avgres81+avgres82+avgres83+avgres84+avgres85+avgres86+avgres87+avgres88+avgres89+avgres90;



























  var total = a1+b1+c1+d1+e1+f1+g1+h1+i1+j1;

  var total2 = k1+l1+m1+n1+o1+p1+q1+r1+s1+t1;

  var total3 = u1+v1+w1+x1+y1+z1+aa1+bb1+cc1+dd1;

  var total4 = ee1+ff1+gg1+hh1+ii1+jj1+kk1+ll1+mm1+nn1;

  var total5 = oo1+pp1+qq1+rr1+ss1+tt1+uu1+vv1+ww1+xx1;

  var total6 = yy1+zz1+aaa1+bbb1+ccc1+ddd1+eee1+fff1+ggg1+hhh1;

  var total7 = iii1+jjj1+kkk1+lll1+mmm1+nnn1+ooo1+ppp1+qqq1+rrr1;

  var total8 = sss1+ttt1+uuu1+vvv1+www1+xxx1+yyy1+zzz1+aaaa1+bbbb1;

  var total9 = cccc1+dddd1+eeee1+ffff1+gggg1+hhhh1+iiii1+jjjj1+kkkk1+llll1;




  var finalres=(avgsumres/total).toFixed(2);
  var finalres2=(avgsumres2/total2).toFixed(2);
  var finalres3=(avgsumres3/total3).toFixed(2);
  var finalres4=(avgsumres4/total4).toFixed(2);
  var finalres5=(avgsumres5/total5).toFixed(2);
  var finalres6=(avgsumres6/total6).toFixed(2);
  var finalres7=(avgsumres7/total7).toFixed(2);
  var finalres8=(avgsumres8/total8).toFixed(2);
  var finalres9=(avgsumres9/total9).toFixed(2);
  document.getElementById('avg').innerHTML=finalres;
  document.getElementById('avg2').innerHTML=finalres2;
  document.getElementById('avg3').innerHTML=finalres3;
  document.getElementById('avg4').innerHTML=finalres4;
  document.getElementById('avg5').innerHTML=finalres5;
  document.getElementById('avg6').innerHTML=finalres6;
  document.getElementById('avg7').innerHTML=finalres7;
  document.getElementById('avg8').innerHTML=finalres8;
  document.getElementById('avg9').innerHTML=finalres9;

</script>


  </body>
</html>
