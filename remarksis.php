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
      font-size: 15px;
      font-family: courier new;
      width:60%;
      padding:20px;
      padding-left:50px;
      margin-top: 20px;
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
    .grade .in input{
      font-family: arial;
    }
    .grade .in input:focus{
      font-weight: bold;
      border: 3px solid blue;
      border-left-color: white;
      border-right-color: white;
      border-top-color: white;
      letter-spacing: 1.2px;
      animation: inputanim 0.2s ease-in;
    }
    @keyframes inputanim{
      from{
        transform: rotateX(120deg);
      }to{
        transform: rotateX(0);
      }
    }
    .grade .in button{
      margin: 0 150px;
      padding: 20px 70px;
      background: #a299ada6;
      border: none;
      box-shadow: -3px 2px 11px 0px #635299fc, inset 0px 0px 20px 3px #7d3ead;
      border-radius: 5px;
      cursor: pointer;
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
          z-index: 5;
          background: rgba(0,0,0,0.5);
          color:white;
          text-shadow: 2px 3px 2px green;
    }
    .BSIS a:Hover{
          background: linear-gradient(to top, gray,silver);
          color:black;
          box-shadow: 3px 3px 2px black;
    }
    .BS a{
          padding: 10px 40px;
          text-align: center;
          text-decoration: none;
          position:fixed;
          right:0;
          bottom:0;
          margin-bottom: 12%;
          margin-right: 2%;
          font-family:arial black;
          border-radius:5px;
          cursor: pointer;
          z-index: 5;
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
          z-index: 5;
          background: rgba(0,0,0,0.5);
          color:white;
          text-shadow: 2px 3px 2px green;
    }
        #BSIT{
          display: none;
        }
        #BSIS{
          display: none;
        }
        #BS{
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
            transform: translateX(10px);
          }to{
            transform: translateX(0);
          }
        }
        @keyframes show{
          from{
            opacity: 0;
            transform: rotateY(20deg);
          }to{
            opacity: 1;
            transform: rotateY(0);
          }
        }
    </style>
  </head>
  <body>
    <div class="sidemenu">
      <img src="images/logo.png" id="img1"></img>
      <img src="images/ccs.jpg" id="img2"></img>
        <ul>
          <a href="adminportal.php"><li class="l2">Dashboard</li></a>
        </ul>
        <ul>
          <a href="stulist.php"><li class="l2">Update IP's</li></a>
        </ul>
        <ul>
          <a href="admininfos.php"><li class="l2"> Registered</li></a>
        </ul>
        <ul>
          <a href="adminprospectusnew.php"><li class="l2">Prospectus</li></a>
        </ul>
        <ul>
          <a href="remarks.php"><li class="l1"> Reports</li></a>
        </ul>
      <a href="adminlogout.php" class="lo">Log out</a>
    </div>

<button onclick="hide()" style="cursor:pointer;background: black;z-index: 1;color:white;position: fixed;bottom:0;right:0;padding:5px;margin-right: 10%;margin-bottom: 7.5%;" id="arrowright">
  >>
</button>

<button onclick="show()" style="cursor:pointer;background: black;z-index: 1;color:white;position: fixed;bottom:0;right:0;padding:5px;margin-bottom: 7.5%;" id="arrowleft">
  <<
</button>
<div class="BS" id="BS">
    <a href="remarksis.php">IS</a>
</div>
<div class="BSIS" id="BSIS">
    <a href="remarksnet.php">NET</a>
</div>
<div class="BSIT" id="BSIT">
    <a href="remarks.php">WEB</a>
</div>


    <?php
    $query = "SELECT * FROM `firstyearis`";
    $results = mysqli_query($link,$query);
    $result= mysqli_fetch_array($results);
    ?>
    

        
    <div class="grade">
      <div style="background: green;padding:10px 20px;text-align: center;transform: skewX(20deg);border-radius: 2000px 50px;box-shadow: -13px 13px 20px 0px #0000007a, inset 1px -2px 1px 17px #00d344ab;color:white;text-shadow: -3px 2px 0px black;">
      <h2>FIRST YEAR</h2></div><br><br>


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
        </thead>
        <tbody>
              <tr>
                <td><?php echo $result['sub']; ?></td>
                <td><?php echo $result['des']; ?></td>
                <td><?php echo $result['units'] ?></td>
                <td><b><?php echo $result['grade']; ?></b></td>
                <td id="sum1">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub2']; ?></td>
                <td><?php echo $result['des2']; ?></td>
                <td><?php echo $result['units2'] ?></td>
                <td><b><?php echo $result['grade2']; ?></b></td>
                <td id="sum2">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub3']; ?></td>
                <td><?php echo $result['des3']; ?></td>
                <td><?php echo $result['units3'] ?></td>
                <td><b><?php echo $result['grade3']; ?></b></td>
                <td id="sum3">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub4']; ?></td>
                <td><?php echo $result['des4']; ?></td>
                <td><?php echo $result['units4'] ?></td>
                <td><b><?php echo $result['grade4']; ?></b></td>
                <td id="sum4">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub5']; ?></td>
                <td><?php echo $result['des5']; ?></td>
                <td><?php echo $result['units5'] ?></td>
                <td><b><?php echo $result['grade5']; ?></b></td>
                <td id="sum5">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub6']; ?></td>
                <td><?php echo $result['des6']; ?></td>
                <td><?php echo $result['units6'] ?></td>
                <td><b><?php echo $result['grade6']; ?></b></td>
                <td id="sum6">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub7']; ?></td>
                <td><?php echo $result['des7']; ?></td>
                <td><?php echo $result['units7'] ?></td>
                <td><b><?php echo $result['grade7']; ?></b></td>
                <td id="sum7">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub8']; ?></td>
                <td><?php echo $result['des8']; ?></td>
                <td><?php echo $result['units8'] ?></td>
                <td><b><?php echo $result['grade8']; ?></b></td>
                <td id="sum8">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub9']; ?></td>
                <td><?php echo $result['des9']; ?></td>
                <td><?php echo $result['units9'] ?></td>
                <td><b><?php echo $result['grade9']; ?></b></td>
                <td id="sum9">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub10']; ?></td>
                <td><?php echo $result['des10']; ?></td>
                <td><?php echo $result['units10'] ?></td>
                <td><b><?php echo $result['grade10']; ?></b></td>
                <td id="sum10">0.0</td>
              </tr>
              <tr>
                <td style="border:1px solid black;border-left-color: white;border-right-color: white;border-bottom-color: white; padding:0;"></td>

                <td style="border:1px solid black;border-left-color: white;border-right-color: white;border-bottom-color: white; padding:0;"></td>

                <td style="border:1px solid black;border-left-color: white;border-right-color: white;border-bottom-color: white; padding:0;"></td>

                <td style="border:1px solid black;border-left-color:white;border-right-color:white;border-bottom-color:white;padding:0;"></td>
                <td style="border:1px solid black;border-left-color:white;border-right-color:white;border-bottom-color:white;padding:0;"></td>
              </tr>
              <tr>
                <form action="remarksiscopy.php" method="POST">
                <td><b>REMARKS:</b></td>
                <td><input type="text" placeholder="Enter Student's Remarks..." name="remarks" style="width:100%;padding:5px;outline:none;margin:10px 0;"><input type="text" placeholder="Re-Enter Student ID No..." name="studentid" style="width:100%;padding:5px;outline:none;"></td>
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
        </thead>
        <tbody>
              <tr>
                <td><?php echo $result['sub11']; ?></td>
                <td><?php echo $result['des11']; ?></td>
                <td><?php echo $result['units11'] ?></td>
                <td><b><?php echo $result['grade11']; ?></b></td>
                <td id="sum11">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub12']; ?></td>
                <td><?php echo $result['des12']; ?></td>
                <td><?php echo $result['units12'] ?></td>
                <td><b><?php echo $result['grade12']; ?></b></td>
                <td id="sum12">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub13']; ?></td>
                <td><?php echo $result['des13']; ?></td>
                <td><?php echo $result['units13'] ?></td>
                <td><b><?php echo $result['grade13']; ?></b></td>
                <td id="sum13">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub14']; ?></td>
                <td><?php echo $result['des14']; ?></td>
                <td><?php echo $result['units14'] ?></td>
                <td><b><?php echo $result['grade14']; ?></b></td>
                <td id="sum14">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub15']; ?></td>
                <td><?php echo $result['des15']; ?></td>
                <td><?php echo $result['units15'] ?></td>
                <td><b><?php echo $result['grade15']; ?></b></td>
                <td id="sum15">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub16']; ?></td>
                <td><?php echo $result['des16']; ?></td>
                <td><?php echo $result['units16'] ?></td>
                <td><b><?php echo $result['grade16']; ?></b></td>
                <td id="sum16">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub17']; ?></td>
                <td><?php echo $result['des17']; ?></td>
                <td><?php echo $result['units17'] ?></td>
                <td><b><?php echo $result['grade17']; ?></b></td>
                <td id="sum17">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub18']; ?></td>
                <td><?php echo $result['des18']; ?></td>
                <td><?php echo $result['units18'] ?></td>
                <td><b><?php echo $result['grade18']; ?></b></td>
                <td id="sum18">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub19']; ?></td>
                <td><?php echo $result['des19']; ?></td>
                <td><?php echo $result['units19'] ?></td>
                <td><b><?php echo $result['grade19']; ?></b></td>
                <td id="sum19">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub20']; ?></td>
                <td><?php echo $result['des20']; ?></td>
                <td><?php echo $result['units20'] ?></td>
                <td><b><?php echo $result['grade20']; ?></b></td>
                <td id="sum20">0.0</td>
              </tr>
              <tr>
                <td style="border:1px solid black;border-left-color: white;border-right-color: white;border-bottom-color: white; padding:0;"></td>

                <td style="border:1px solid black;border-left-color: white;border-right-color: white;border-bottom-color: white; padding:0;"></td>

                <td style="border:1px solid black;border-left-color: white;border-right-color: white;border-bottom-color: white; padding:0;"></td>

                <td style="border:1px solid black;border-left-color:white;border-right-color:white;border-bottom-color:white;padding:0;"></td>
                <td style="border:1px solid black;border-left-color:white;border-right-color:white;border-bottom-color:white;padding:0;"></td>
              </tr>
              <tr>
                <td><b>REMARKS:</b></td>
                <td><input type="text" placeholder="Enter Student's Remarks..." name="remarks2" style="width:100%;padding:5px;outline:none;margin:10px 0;"><input type="text" placeholder="Re-Enter Student ID No..." name="studentid" disabled style="width:100%;padding:5px;outline:none;"></td>
                <td></td>
                <td><b>AVERAGE:</b></td>
                <td id="avg2" style="font-weight: 900;">0</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td><b>GENERAL <br>AVERAGE:</b></td>
                <td id="genavg" style="text-align: center;border-radius: 10px;"></td>
              </tr>
        </tbody>
     </table>
   </div><br><br><br>














   <?php
    $query = "SELECT * FROM `secondyearis`";
    $results = mysqli_query($link,$query);
    $result= mysqli_fetch_array($results);
     ?>
    


  <div style="background: green;padding:10px 20px;text-align: center;transform: skewX(20deg);border-radius:2000px 50px;box-shadow: -13px 13px 20px 0px #0000007a, inset 1px -2px 1px 17px #00d344ab;color:white;text-shadow: -3px 2px 0px black;">
  <h2>SECOND YEAR</h2></div><br><br>


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
        </thead>
        <tbody>
              <tr>
                <td><?php echo $result['sub']; ?></td>
                <td><?php echo $result['des']; ?></td>
                <td><?php echo $result['units'] ?></td>
                <td><b><?php echo $result['grade']; ?></b></td>
                <td id="sum21">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub2']; ?></td>
                <td><?php echo $result['des2']; ?></td>
                <td><?php echo $result['units2'] ?></td>
                <td><b><?php echo $result['grade2']; ?></b></td>
                <td id="sum22">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub3']; ?></td>
                <td><?php echo $result['des3']; ?></td>
                <td><?php echo $result['units3'] ?></td>
                <td><b><?php echo $result['grade3']; ?></b></td>
                <td id="sum23">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub4']; ?></td>
                <td><?php echo $result['des4']; ?></td>
                <td><?php echo $result['units4'] ?></td>
                <td><b><?php echo $result['grade4']; ?></b></td>
                <td id="sum24">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub5']; ?></td>
                <td><?php echo $result['des5']; ?></td>
                <td><?php echo $result['units5'] ?></td>
                <td><b><?php echo $result['grade5']; ?></b></td>
                <td id="sum25">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub6']; ?></td>
                <td><?php echo $result['des6']; ?></td>
                <td><?php echo $result['units6'] ?></td>
                <td><b><?php echo $result['grade6']; ?></b></td>
                <td id="sum26">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub7']; ?></td>
                <td><?php echo $result['des7']; ?></td>
                <td><?php echo $result['units7'] ?></td>
                <td><b><?php echo $result['grade7']; ?></b></td>
                <td id="sum27">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub8']; ?></td>
                <td><?php echo $result['des8']; ?></td>
                <td><?php echo $result['units8'] ?></td>
                <td><b><?php echo $result['grade8']; ?></b></td>
                <td id="sum28">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub9']; ?></td>
                <td><?php echo $result['des9']; ?></td>
                <td><?php echo $result['units9'] ?></td>
                <td><b><?php echo $result['grade9']; ?></b></td>
                <td id="sum29">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub10']; ?></td>
                <td><?php echo $result['des10']; ?></td>
                <td><?php echo $result['units10'] ?></td>
                <td><b><?php echo $result['grade10']; ?></b></td>
                <td id="sum30">0.0</td>
              </tr>
              <tr>
                <td style="border:1px solid black;border-left-color: white;border-right-color: white;border-bottom-color: white; padding:0;"></td>

                <td style="border:1px solid black;border-left-color: white;border-right-color: white;border-bottom-color: white; padding:0;"></td>

                <td style="border:1px solid black;border-left-color: white;border-right-color: white;border-bottom-color: white; padding:0;"></td>

                <td style="border:1px solid black;border-left-color:white;border-right-color:white;border-bottom-color:white;padding:0;"></td>
                <td style="border:1px solid black;border-left-color:white;border-right-color:white;border-bottom-color:white;padding:0;"></td>
              </tr>
              <tr>
                <td><b>REMARKS:</b></td>
                <td><input type="text" placeholder="Enter Student's Remarks..." name="remarks3" style="width:100%;padding:5px;outline:none;margin:10px 0;"><input type="text" placeholder="Re-Enter Student ID No..." name="studentid" disabled style="width:100%;padding:5px;outline:none;"></td>
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
        </thead>
        <tbody>
              <tr>
                <td><?php echo $result['sub11']; ?></td>
                <td><?php echo $result['des11']; ?></td>
                <td><?php echo $result['units11'] ?></td>
                <td><b><?php echo $result['grade11']; ?></b></td>
                <td id="sum31">0.0</td>
              <tr>
              <tr>
                <td><?php echo $result['sub12']; ?></td>
                <td><?php echo $result['des12']; ?></td>
                <td><?php echo $result['units12'] ?></td>
                <td><b><?php echo $result['grade12']; ?></b></td>
                <td id="sum32">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub13']; ?></td>
                <td><?php echo $result['des13']; ?></td>
                <td><?php echo $result['units13'] ?></td>
                <td><b><?php echo $result['grade13']; ?></b></td>
                <td id="sum33">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub14']; ?></td>
                <td><?php echo $result['des14']; ?></td>
                <td><?php echo $result['units14'] ?></td>
                <td><b><?php echo $result['grade14']; ?></b></td>
                <td id="sum34">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub15']; ?></td>
                <td><?php echo $result['des15']; ?></td>
                <td><?php echo $result['units15'] ?></td>
                <td><b><?php echo $result['grade15']; ?></b></td>
                <td id="sum35">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub16']; ?></td>
                <td><?php echo $result['des16']; ?></td>
                <td><?php echo $result['units16'] ?></td>  
                <td><b><?php echo $result['grade16']; ?></b></td>
                <td id="sum36">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub17']; ?></td>
                <td><?php echo $result['des17']; ?></td>
                <td><?php echo $result['units17'] ?></td>
                <td
                ><b><?php echo $result['grade17']; ?></b></td>
                <td id="sum37">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub18']; ?></td>
                <td><?php echo $result['des18']; ?></td>
                <td><?php echo $result['units18'] ?></td>
                <td><b><?php 
                echo $result['grade18']; ?></b></td>
                <td id="sum38">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub19']; ?></td>
                <td><?php echo $result['des19']; ?></td>
                <td><?php echo $result['units19'] ?></td>
                <td><b><?php 
                echo $result['grade19']; ?></b></td>
                <td id="sum39">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub20']; ?></td>
                <td><?php echo $result['des20']; ?></td>
                <td><?php echo $result['units20'] ?></td>
                <td><b><?php 
                echo $result['grade20']; ?></b></td>
                <td id="sum40">0.0</td>
              </tr>
              <tr>
                <td style="border:1px solid black;border-left-color: white;border-right-color: white;border-bottom-color: white; padding:0;"></td>

                <td style="border:1px solid black;border-left-color: white;border-right-color: white;border-bottom-color: white; padding:0;"></td>

                <td style="border:1px solid black;border-left-color: white;border-right-color: white;border-bottom-color: white; padding:0;"></td>

                <td style="border:1px solid black;border-left-color:white;border-right-color:white;border-bottom-color:white;padding:0;"></td>
                <td style="border:1px solid black;border-left-color:white;border-right-color:white;border-bottom-color:white;padding:0;"></td>
              </tr>
              <tr>
                <td><b>REMARKS:</b></td>
                <td><input type="text" placeholder="Enter Student's Remarks..." name="remarks4" style="width:100%;padding:5px;outline:none;margin:10px 0;"><input type="text" placeholder="Re-Enter Student ID No..." name="studentid" disabled style="width:100%;padding:5px;outline:none;"></td>
                <td></td>
                <td><b>AVERAGE:</b></td>
                <td id="avg4" style="font-weight: 900;">0</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td><b>GENERAL <br>AVERAGE:</b></td>
                <td id="genavg2" style="text-align: center;border-radius: 10px;"></td>
              </tr>
        </tbody>
     </table>
   </div><br><br><br>








   <?php
      $query = "SELECT * FROM `thirdyearis`";
      $results = mysqli_query($link,$query);
      $result= mysqli_fetch_array($results);
  ?>




  <div style="background: green;padding:10px 20px;text-align: center;transform: skewX(20deg);border-radius:2000px 50px;box-shadow: -13px 13px 20px 0px #0000007a, inset 1px -2px 1px 17px #00d344ab;color:white;text-shadow: -3px 2px 0px black;">
  <h2>THIRD YEAR</h2></div><br><br>


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
        </thead>
        <tbody>
              <tr>
                <td><?php echo $result['sub']; ?></td>
                <td><?php echo $result['des']; ?></td>
                <td><?php echo $result['units'] ?></td>
                <td><b><?php echo $result['grade']; ?></b></td>
                <td id="sum41">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub2']; ?></td>
                <td><?php echo $result['des2']; ?></td>
                <td><?php echo $result['units2'] ?></td>
                <td><b><?php echo $result['grade2']; ?></b></td>
                <td id="sum42">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub3']; ?></td>
                <td><?php echo $result['des3']; ?></td>
                <td><?php echo $result['units3'] ?></td>
                <td><b><?php echo $result['grade3']; ?></b></td>
                <td id="sum43">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub4']; ?></td>
                <td><?php echo $result['des4']; ?></td>
                <td><?php echo $result['units4'] ?></td>
                <td><b><?php echo $result['grade4']; ?></b></td>
                <td id="sum44">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub5']; ?></td>
                <td><?php echo $result['des5']; ?></td>
                <td><?php echo $result['units5'] ?></td>
                <td><b><?php echo $result['grade5']; ?></b></td>
                <td id="sum45">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub6']; ?></td>
                <td><?php echo $result['des6']; ?></td>
                <td><?php echo $result['units6'] ?></td>
                <td><b><?php echo $result['grade6']; ?></b></td>
                <td id="sum46">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub7']; ?></td>
                <td><?php echo $result['des7']; ?></td>
                <td><?php echo $result['units7'] ?></td>
                <td><b><?php echo $result['grade7']; ?></b></td>
                <td id="sum47">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub8']; ?></td>
                <td><?php echo $result['des8']; ?></td>
                <td><?php echo $result['units8'] ?></td>
                <td><b><?php echo $result['grade8']; ?></b></td>
                <td id="sum48">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub9']; ?></td>
                <td><?php echo $result['des9']; ?></td>
                <td><?php echo $result['units9'] ?></td>
                <td><b><?php echo $result['grade9']; ?></b></td>
                <td id="sum49">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub10']; ?></td>
                <td><?php echo $result['des10']; ?></td>
                <td><?php echo $result['units10'] ?></td>
                <td><b><?php echo $result['grade10']; ?></b></td>
                <td id="sum50">0.0</td>
              </tr>
              <tr>
                <td style="border:1px solid black;border-left-color: white;border-right-color: white;border-bottom-color: white; padding:0;"></td>

                <td style="border:1px solid black;border-left-color: white;border-right-color: white;border-bottom-color: white; padding:0;"></td>

                <td style="border:1px solid black;border-left-color: white;border-right-color: white;border-bottom-color: white; padding:0;"></td>

                <td style="border:1px solid black;border-left-color:white;border-right-color:white;border-bottom-color:white;padding:0;"></td>
                <td style="border:1px solid black;border-left-color:white;border-right-color:white;border-bottom-color:white;padding:0;"></td>
              </tr>
              <tr>
                <td><b>REMARKS:</b></td>
                <td><input type="text" placeholder="Enter Student's Remarks..." name="remarks5" style="width:100%;padding:5px;outline:none;margin:10px 0;"><input type="text" placeholder="Re-Enter Student ID No..." name="studentid" disabled style="width:100%;padding:5px;outline:none;"></td>
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
        </thead>
        <tbody>
              <tr>
                <td><?php echo $result['sub11']; ?></td>
                <td><?php echo $result['des11']; ?></td>
                <td><?php echo $result['units11'] ?></td>
                <td><b><?php echo $result['grade11']; ?></b></td>
                <td id="sum51">0.0</td>
              <tr>
              <tr>
                <td><?php echo $result['sub12']; ?></td>
                <td><?php echo $result['des12']; ?></td>
                <td><?php echo $result['units12'] ?></td>
                <td><b><?php echo $result['grade12']; ?></b></td>
                <td id="sum52">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub13']; ?></td>
                <td><?php echo $result['des13']; ?></td>
                <td><?php echo $result['units13'] ?></td>
                <td><b><?php echo $result['grade13']; ?></b></td>
                <td id="sum53">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub14']; ?></td>
                <td><?php echo $result['des14']; ?></td>
                <td><?php echo $result['units14'] ?></td>
                <td><b><?php echo $result['grade14']; ?></b></td>
                <td id="sum54">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub15']; ?></td>
                <td><?php echo $result['des15']; ?></td>
                <td><?php echo $result['units15'] ?></td>
                <td><b><?php echo $result['grade15']; ?></b></td>
                <td id="sum55">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub16']; ?></td>
                <td><?php echo $result['des16']; ?></td>
                <td><?php echo $result['units16'] ?></td>
                <td><b><?php echo $result['grade16']; ?></b></td>
                <td id="sum56">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub17']; ?></td>
                <td><?php echo $result['des17']; ?></td>
                <td><?php echo $result['units17'] ?></td>
                <td
                ><b><?php echo $result['grade17']; ?></b></td>
                <td id="sum57">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub18']; ?></td>
                <td><?php echo $result['des18']; ?></td>
                <td><?php echo $result['units18'] ?></td>
                <td><b><?php 
                echo $result['grade18']; ?></b></td>
                <td id="sum58">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub19']; ?></td>
                <td><?php echo $result['des19']; ?></td>
                <td><?php echo $result['units19'] ?></td>
                <td><b><?php 
                echo $result['grade19']; ?></b></td>
                <td id="sum59">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub20']; ?></td>
                <td><?php echo $result['des20']; ?></td>
                <td><?php echo $result['units20'] ?></td>
                <td><b><?php 
                echo $result['grade20']; ?></b></td>
                <td id="sum60">0.0</td>
              </tr>
              <tr>
                <td style="border:1px solid black;border-left-color: white;border-right-color: white;border-bottom-color: white; padding:0;"></td>

                <td style="border:1px solid black;border-left-color: white;border-right-color: white;border-bottom-color: white; padding:0;"></td>

                <td style="border:1px solid black;border-left-color: white;border-right-color: white;border-bottom-color: white; padding:0;"></td>

                <td style="border:1px solid black;border-left-color:white;border-right-color:white;border-bottom-color:white;padding:0;"></td>
                <td style="border:1px solid black;border-left-color:white;border-right-color:white;border-bottom-color:white;padding:0;"></td>
              </tr>
              <tr>
                <td><b>REMARKS:</b></td>
                <td><input type="text" placeholder="Enter Student's Remarks..." name="remarks6" style="width:100%;padding:5px;outline:none;margin:10px 0;"><input type="text" placeholder="Re-Enter Student ID No..." name="studentid" disabled style="width:100%;padding:5px;outline:none;"></td>
                <td></td>
                <td><b>AVERAGE:</b></td>
                <td id="avg6" style="font-weight: 900;">0</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td><b>GENERAL <br>AVERAGE:</b></td>
                <td id="genavg3" style="text-align: center;border-radius: 10px;"></td>
              </tr>
        </tbody>
     </table>
   </div><br><br><br>























<?php
    $query = "SELECT * FROM `midyearis`";
    $results = mysqli_query($link,$query);
    $result= mysqli_fetch_array($results);
     ?>
    

   <div style="background: green;padding:10px 20px;text-align: center;transform: skewX(20deg);border-radius:2000px 10px;box-shadow: -13px 13px 20px 0px #0000007a, inset 1px -2px 1px 17px #00d344ab;color:white;text-shadow: -3px 2px 0px black;">
          <h2>MID YEAR</h2></div><br><br>

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
        </thead>
        <tbody>
              <tr>
                <td><?php echo $result['sub']; ?></td>
                <td><?php echo $result['des']; ?></td>
                <td><?php echo $result['units'] ?></td>
                <td><b><?php echo $result['grade']; ?></b></td>
                <td id="sum61">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub2']; ?></td>
                <td><?php echo $result['des2']; ?></td>
                <td><?php echo $result['units2'] ?></td>
                <td><b><?php echo $result['grade2']; ?></b></td>
                <td id="sum62">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub3']; ?></td>
                <td><?php echo $result['des3']; ?></td>
                <td><?php echo $result['units3'] ?></td>
                <td><b><?php echo $result['grade3']; ?></b></td>
                <td id="sum63">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub4']; ?></td>
                <td><?php echo $result['des4']; ?></td>
                <td><?php echo $result['units4'] ?></td>
                <td><b><?php echo $result['grade4']; ?></b></td>
                <td id="sum64">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub5']; ?></td>
                <td><?php echo $result['des5']; ?></td>
                <td><?php echo $result['units5'] ?></td>
                <td><b><?php echo $result['grade5']; ?></b></td>
                <td id="sum65">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub6']; ?></td>
                <td><?php echo $result['des6']; ?></td>
                <td><?php echo $result['units6'] ?></td>
                <td><b><?php echo $result['grade6']; ?></b></td>
                <td id="sum66">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub7']; ?></td>
                <td><?php echo $result['des7']; ?></td>
                <td><?php echo $result['units7'] ?></td>
                <td><b><?php echo $result['grade7']; ?></b></td>
                <td id="sum67">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub8']; ?></td>
                <td><?php echo $result['des8']; ?></td>
                <td><?php echo $result['units8'] ?></td>
                <td><b><?php echo $result['grade8']; ?></b></td>
                <td id="sum68">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub9']; ?></td>
                <td><?php echo $result['des9']; ?></td>
                <td><?php echo $result['units9'] ?></td>
                <td><b><?php echo $result['grade9']; ?></b></td>
                <td id="sum69">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub10']; ?></td>
                <td><?php echo $result['des10']; ?></td>
                <td><?php echo $result['units10'] ?></td>
                <td><b><?php echo $result['grade10']; ?></b></td>
                <td id="sum70">0.0</td>
              </tr>
              <tr>
                <td style="border:1px solid black;border-left-color: white;border-right-color: white;border-bottom-color: white; padding:0;"></td>

                <td style="border:1px solid black;border-left-color: white;border-right-color: white;border-bottom-color: white; padding:0;"></td>

                <td style="border:1px solid black;border-left-color: white;border-right-color: white;border-bottom-color: white; padding:0;"></td>

                <td style="border:1px solid black;border-left-color:white;border-right-color:white;border-bottom-color:white;padding:0;"></td>
                <td style="border:1px solid black;border-left-color:white;border-right-color:white;border-bottom-color:white;padding:0;"></td>
              </tr>
              <tr>
                <td><b>REMARKS:</b></td>
                <td><input type="text" placeholder="Enter Student's Remarks..." name="remarks7" style="width:100%;padding:5px;outline:none;margin:10px 0;"><input type="text" placeholder="Re-Enter Student ID No..." name="studentid" disabled style="width:100%;padding:5px;outline:none;"></td>
                <td></td>
                <td><b>AVERAGE:</b></td>
                <td id="avg7" style="font-weight: 900;">0</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td><b>GENERAL <br>AVERAGE:</b></td>
                <td id="genavg4" style="text-align: center;border-radius: 10px;"></td>
              </tr>
        </tbody>
      </table>
   </div><br><br><br>


























   <?php
    $query = "SELECT * FROM `fourthyearis`";
    $results = mysqli_query($link,$query);
    $result= mysqli_fetch_array($results);
     ?>
    

    <div style="background: green;padding:10px 20px;text-align: center;transform: skewX(20deg);border-radius: 2000px 50px;box-shadow: -13px 13px 20px 0px #0000007a, inset 1px -2px 1px 17px #00d344ab;color:white;text-shadow: -3px 2px 0px black;">
    <h2>FOURTH YEAR</h2></div><br><br>



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
        </thead>
        <tbody>
              <tr>
                <td><?php echo $result['sub']; ?></td>
                <td><?php echo $result['des']; ?></td>
                <td><?php echo $result['units'] ?></td>
                <td><b><?php echo $result['grade']; ?></b></td>
                <td id="sum71">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub2']; ?></td>
                <td><?php echo $result['des2']; ?></td>
                <td><?php echo $result['units2'] ?></td>
                <td><b><?php echo $result['grade2']; ?></b></td>
                <td id="sum72">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub3']; ?></td>
                <td><?php echo $result['des3']; ?></td>
                <td><?php echo $result['units3'] ?></td>
                <td><b><?php echo $result['grade3']; ?></b></td>
                <td id="sum73">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub4']; ?></td>
                <td><?php echo $result['des4']; ?></td>
                <td><?php echo $result['units4'] ?></td>
                <td><b><?php echo $result['grade4']; ?></b></td>
                <td id="sum74">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub5']; ?></td>
                <td><?php echo $result['des5']; ?></td>
                <td><?php echo $result['units5'] ?></td>
                <td><b><?php echo $result['grade5']; ?></b></td>
                <td id="sum75">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub6']; ?></td>
                <td><?php echo $result['des6']; ?></td>
                <td><?php echo $result['units6'] ?></td>
                <td><b><?php echo $result['grade6']; ?></b></td>
                <td id="sum76">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub7']; ?></td>
                <td><?php echo $result['des7']; ?></td>
                <td><?php echo $result['units7'] ?></td>
                <td><b><?php echo $result['grade7']; ?></b></td>
                <td id="sum77">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub8']; ?></td>
                <td><?php echo $result['des8']; ?></td>
                <td><?php echo $result['units8'] ?></td>
                <td><b><?php echo $result['grade8']; ?></b></td>
                <td id="sum78">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub9']; ?></td>
                <td><?php echo $result['des9']; ?></td>
                <td><?php echo $result['units9'] ?></td>
                <td><b><?php echo $result['grade9']; ?></b></td>
                <td id="sum79">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub10']; ?></td>
                <td><?php echo $result['des10']; ?></td>
                <td><?php echo $result['units10'] ?></td>
                <td><b><?php echo $result['grade10']; ?></b></td>
                <td id="sum80">0.0</td>
              </tr>
              <tr>
                <td style="border:1px solid black;border-left-color: white;border-right-color: white;border-bottom-color: white; padding:0;"></td>

                <td style="border:1px solid black;border-left-color: white;border-right-color: white;border-bottom-color: white; padding:0;"></td>

                <td style="border:1px solid black;border-left-color: white;border-right-color: white;border-bottom-color: white; padding:0;"></td>

                <td style="border:1px solid black;border-left-color:white;border-right-color:white;border-bottom-color:white;padding:0;"></td>
                <td style="border:1px solid black;border-left-color:white;border-right-color:white;border-bottom-color:white;padding:0;"></td>
              </tr>
              <tr>
                <td><b>REMARKS:</b></td>
                <td><input type="text" placeholder="Enter Student's Remarks..." name="remarks8" style="width:100%;padding:5px;outline:none;margin:10px 0;"><input type="text" placeholder="Re-Enter Student ID No..." name="studentid" disabled style="width:100%;padding:5px;outline:none;"></td>
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
        </thead>
        <tbody>
              <tr>
                <td><?php echo $result['sub11']; ?></td>
                <td><?php echo $result['des11']; ?></td>
                <td><?php echo $result['units11'] ?></td>
                <td><b><?php echo $result['grade11']; ?></b></td>
                <td id="sum81">0.0</td>
              <tr>
              <tr>
                <td><?php echo $result['sub12']; ?></td>
                <td><?php echo $result['des12']; ?></td>
                <td><?php echo $result['units12'] ?></td>
                <td><b><?php echo $result['grade12']; ?></b></td>
                <td id="sum82">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub13']; ?></td>
                <td><?php echo $result['des13']; ?></td>
                <td><?php echo $result['units13'] ?></td>
                <td><b><?php echo $result['grade13']; ?></b></td>
                <td id="sum83">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub14']; ?></td>
                <td><?php echo $result['des14']; ?></td>
                <td><?php echo $result['units14'] ?></td>
                <td><b><?php echo $result['grade14']; ?></b></td>
                <td id="sum84">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub15']; ?></td>
                <td><?php echo $result['des15']; ?></td>
                <td><?php echo $result['units15'] ?></td>
                <td><b><?php echo $result['grade15']; ?></b></td>
                <td id="sum85">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub16']; ?></td>
                <td><?php echo $result['des16']; ?></td>
                <td><?php echo $result['units16'] ?></td>
                <td><b><?php echo $result['grade16']; ?></b></td>
                <td id="sum86">0.0</td> 
              </tr>
              <tr>
                <td><?php echo $result['sub17']; ?></td>
                <td><?php echo $result['des17']; ?></td>
                <td><?php echo $result['units17'] ?></td>
                <td
                ><b><?php echo $result['grade17']; ?></b></td>
                <td id="sum87">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub18']; ?></td>
                <td><?php echo $result['des18']; ?></td>
                <td><?php echo $result['units18'] ?></td>
                <td><b><?php 
                echo $result['grade18']; ?></b></td>
                <td id="sum88">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub19']; ?></td>
                <td><?php echo $result['des19']; ?></td>
                <td><?php echo $result['units19'] ?></td>
                <td><b><?php 
                echo $result['grade19']; ?></b></td>
                <td id="sum89">0.0</td>
              </tr>
              <tr>
                <td><?php echo $result['sub20']; ?></td>
                <td><?php echo $result['des20']; ?></td>
                <td><?php echo $result['units20'] ?></td>
                <td><b><?php 
                echo $result['grade20']; ?></b></td>
                <td id="sum90">0.0</td>
              </tr>
              <tr>
                <td style="border:1px solid black;border-left-color: white;border-right-color: white;border-bottom-color: white; padding:0;"></td>

                <td style="border:1px solid black;border-left-color: white;border-right-color: white;border-bottom-color: white; padding:0;"></td>

                <td style="border:1px solid black;border-left-color: white;border-right-color: white;border-bottom-color: white; padding:0;"></td>

                <td style="border:1px solid black;border-left-color:white;border-right-color:white;border-bottom-color:white;padding:0;"></td>
                <td style="border:1px solid black;border-left-color:white;border-right-color:white;border-bottom-color:white;padding:0;"></td>
              </tr>
              <tr>
                <td><b>REMARKS:</b></td>
                <td><input type="text" placeholder="Enter Student's Remarks..." name="remarks9" style="width:100%;padding:5px;outline:none;margin:10px 0;"><input type="text" placeholder="Re-Enter Student ID No..." name="studentid" disabled style="width:100%;padding:5px;outline:none;"></td>
                <td></td>
                <td><b>AVERAGE:</b></td>
                <td id="avg9" style="font-weight: 900;">0</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td><b>GENERAL <br>AVERAGE:</b></td>
                <td id="genavg5" style="text-align: center;border-radius: 10px;"></td>
              </tr>
              <tr style="height:15vh;"></tr>
              <tr>
                <td></td>
                <td><button type="Submit" value="Submit">Submit</button></td>
              </tr>
            </form>
        </tbody>
     </table>
   </div><br><br><br>
  </div>



<script>
  function hide(){
    document.getElementById('BSIS').style.display='none';
    document.getElementById('BSIT').style.display='none';
    document.getElementById('BS').style.display='none';
    document.getElementById('arrowright').style.marginRight="0px";
    document.getElementById('arrowright').style.animation="animate 1s";
    document.getElementById('arrowright').style.display="none";
    document.getElementById('arrowleft').style.display="block";
  }
  function show(){
    document.getElementById('BSIS').style.display='block';
    document.getElementById('BSIT').style.display='block';
    document.getElementById('BS').style.display='block';
    document.getElementById('BSIS').style.animation="show 0.3s ease-in";
    document.getElementById('BSIT').style.animation="show 0.3s ease-in";
    document.getElementById('BS').style.animation="show 0.3s ease-in";
    document.getElementById('arrowright').style.marginRight="135px";
    document.getElementById('arrowleft').style.animation="animate 1s";
    document.getElementById('arrowleft').style.display="none";
    document.getElementById('arrowright').style.display="block";
  }
</script>















<script>
  const a=
    <?php
      $query = "SELECT grade FROM `firstyearis` WHERE `grade` LIKE '1.0' OR `grade` LIKE '1.00' OR `grade` LIKE '1.25' OR `grade` LIKE '1.50' OR `grade` LIKE '1.75' OR `grade` LIKE '2.0' OR `grade` LIKE '2.00' OR `grade` LIKE '2.25'  OR `grade` LIKE '2.50'  OR `grade` LIKE '2.75'  OR `grade` LIKE '3.0' OR `grade` LIKE '3.00' OR `grade` LIKE '4.00' OR `grade` LIKE '4.0' OR `grade` LIKE '5.00' OR `grade` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;


    const b=
    <?php
      $query = "SELECT grade2 FROM `firstyearis` WHERE `grade2` LIKE '1.0' OR `grade2` LIKE '1.00' OR `grade2` LIKE '1.25' OR `grade2` LIKE '1.50' OR `grade2` LIKE '1.75' OR `grade2` LIKE '2.0' OR `grade2` LIKE '2.00' OR `grade2` LIKE '2.25'  OR `grade2` LIKE '2.50'  OR `grade2` LIKE '2.75'  OR `grade2` LIKE '3.0' OR `grade2` LIKE '3.00' OR `grade2` LIKE '4.00' OR `grade2` LIKE '4.0' OR `grade2` LIKE '5.00' OR `grade2` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade2'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;

    const c=
    <?php
      $query = "SELECT grade3 FROM `firstyearis` WHERE `grade3` LIKE '1.0' OR `grade3` LIKE '1.00' OR `grade3` LIKE '1.25' OR `grade3` LIKE '1.50' OR `grade3` LIKE '1.75' OR `grade3` LIKE '2.0' OR `grade3` LIKE '2.00' OR `grade3` LIKE '2.25'  OR `grade3` LIKE '2.50'  OR `grade3` LIKE '2.75'  OR `grade3` LIKE '3.0' OR `grade3` LIKE '3.00' OR `grade3` LIKE '4.00' OR `grade3` LIKE '4.0' OR `grade3` LIKE '5.00' OR `grade3` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade3'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;

    const d=
    <?php
      $query = "SELECT grade4 FROM `firstyearis` WHERE `grade4` LIKE '1.0' OR `grade4` LIKE '1.00' OR `grade4` LIKE '1.25' OR `grade4` LIKE '1.50' OR `grade4` LIKE '1.75' OR `grade4` LIKE '2.0' OR `grade4` LIKE '2.00' OR `grade4` LIKE '2.25'  OR `grade4` LIKE '2.50'  OR `grade4` LIKE '2.75'  OR `grade4` LIKE '3.0' OR `grade4` LIKE '3.00' OR `grade4` LIKE '4.00' OR `grade4` LIKE '4.0' OR `grade4` LIKE '5.00' OR `grade4` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade4'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;


    const e=
    <?php
      $query = "SELECT grade5 FROM `firstyearis` WHERE `grade5` LIKE '1.0' OR `grade5` LIKE '1.00' OR `grade5` LIKE '1.25' OR `grade5` LIKE '1.50' OR `grade5` LIKE '1.75' OR `grade5` LIKE '2.0' OR `grade5` LIKE '2.00' OR `grade5` LIKE '2.25'  OR `grade5` LIKE '2.50'  OR `grade5` LIKE '2.75'  OR `grade5` LIKE '3.0' OR `grade5` LIKE '3.00' OR `grade5` LIKE '4.00' OR `grade5` LIKE '4.0' OR `grade5` LIKE '5.00' OR `grade5` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade5'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;


    const f=
    <?php
      $query = "SELECT grade6 FROM `firstyearis` WHERE `grade6` LIKE '1.0' OR `grade6` LIKE '1.00' OR `grade6` LIKE '1.25' OR `grade6` LIKE '1.50' OR `grade6` LIKE '1.75' OR `grade6` LIKE '2.0' OR `grade6` LIKE '2.00' OR `grade6` LIKE '2.25'  OR `grade6` LIKE '2.50'  OR `grade6` LIKE '2.75'  OR `grade6` LIKE '3.0' OR `grade6` LIKE '3.00' OR `grade6` LIKE '4.00' OR `grade6` LIKE '4.0' OR `grade6` LIKE '5.00' OR `grade6` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade6'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;


    const g=
    <?php
      $query = "SELECT grade7 FROM `firstyearis` WHERE `grade7` LIKE '1.0' OR `grade7` LIKE '1.00' OR `grade7` LIKE '1.25' OR `grade7` LIKE '1.50' OR `grade7` LIKE '1.75' OR `grade7` LIKE '2.0' OR `grade7` LIKE '2.00' OR `grade7` LIKE '2.25'  OR `grade7` LIKE '2.50'  OR `grade7` LIKE '2.75'  OR `grade7` LIKE '3.0' OR `grade7` LIKE '3.00' OR `grade7` LIKE '4.00' OR `grade7` LIKE '4.0' OR `grade7` LIKE '5.00' OR `grade7` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade7'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;


    const h=
    <?php
      $query = "SELECT grade8 FROM `firstyearis` WHERE `grade8` LIKE '1.0' OR `grade8` LIKE '1.00' OR `grade8` LIKE '1.25' OR `grade8` LIKE '1.50' OR `grade8` LIKE '1.75' OR `grade8` LIKE '2.0' OR `grade8` LIKE '2.00' OR `grade8` LIKE '2.25'  OR `grade8` LIKE '2.50'  OR `grade8` LIKE '2.75'  OR `grade8` LIKE '3.0' OR `grade8` LIKE '3.00' OR `grade8` LIKE '4.00' OR `grade8` LIKE '4.0' OR `grade8` LIKE '5.00' OR `grade8` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade8'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;

    const i=
    <?php
      $query = "SELECT grade9 FROM `firstyearis` WHERE `grade9` LIKE '1.0' OR `grade9` LIKE '1.00' OR `grade9` LIKE '1.25' OR `grade9` LIKE '1.50' OR `grade9` LIKE '1.75' OR `grade9` LIKE '2.0' OR `grade9` LIKE '2.00' OR `grade9` LIKE '2.25'  OR `grade9` LIKE '2.50'  OR `grade9` LIKE '2.75'  OR `grade9` LIKE '3.0' OR `grade9` LIKE '3.00' OR `grade9` LIKE '4.00' OR `grade9` LIKE '4.0' OR `grade9` LIKE '5.00' OR `grade9` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade9'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;


    const j=
    <?php
      $query = "SELECT grade10 FROM `firstyearis` WHERE `grade10` LIKE '1.0' OR `grade10` LIKE '1.00' OR `grade10` LIKE '1.25' OR `grade10` LIKE '1.50' OR `grade10` LIKE '1.75' OR `grade10` LIKE '2.0' OR `grade10` LIKE '2.00' OR `grade10` LIKE '2.25'  OR `grade10` LIKE '2.50'  OR `grade10` LIKE '2.75'  OR `grade10` LIKE '3.0' OR `grade10` LIKE '3.00' OR `grade10` LIKE '4.00' OR `grade10` LIKE '4.0' OR `grade10` LIKE '5.00' OR `grade10` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade10'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>;

    const a1=
    parseInt(
    <?php
      $query = "SELECT units FROM `firstyearis` WHERE `units` LIKE '1' OR `units` LIKE '2' OR `units` LIKE '3' OR `units` LIKE '4' OR `units` LIKE '5' OR `units` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );

    const b1=
    parseInt(
    <?php
      $query = "SELECT units2 FROM `firstyearis` WHERE `units2` LIKE '1' OR `units2` LIKE '2' OR `units2` LIKE '3' OR `units2` LIKE '4' OR `units2` LIKE '5' OR `units2` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units2'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const c1=
    parseInt(
    <?php
      $query = "SELECT units3 FROM `firstyearis` WHERE `units3` LIKE '1' OR `units3` LIKE '2' OR `units3` LIKE '3' OR `units3` LIKE '4' OR `units3` LIKE '5' OR `units3` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units3'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const d1=
    parseInt(
    <?php
      $query = "SELECT units4 FROM `firstyearis` WHERE `units4` LIKE '1' OR `units4` LIKE '2' OR `units4` LIKE '3' OR `units4` LIKE '4' OR `units4` LIKE '5' OR `units4` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units4'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const e1=
    parseInt(
    <?php
      $query = "SELECT units5 FROM `firstyearis` WHERE `units5` LIKE '1' OR `units5` LIKE '2' OR `units5` LIKE '3' OR `units5` LIKE '4' OR `units5` LIKE '5' OR `units5` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units5'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const f1=
    parseInt(
    <?php
      $query = "SELECT units6 FROM `firstyearis` WHERE `units6` LIKE '1' OR `units6` LIKE '2' OR `units6` LIKE '3' OR `units6` LIKE '4' OR `units6` LIKE '5' OR `units6` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units6'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const g1=
    parseInt(
    <?php
      $query = "SELECT units7 FROM `firstyearis` WHERE `units7` LIKE '1' OR `units7` LIKE '2' OR `units7` LIKE '3' OR `units7` LIKE '4' OR `units7` LIKE '5' OR `units7` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units7'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const h1=
    parseInt(
    <?php
      $query = "SELECT units8 FROM `firstyearis` WHERE `units8` LIKE '1' OR `units8` LIKE '2' OR `units8` LIKE '3' OR `units8` LIKE '4' OR `units8` LIKE '5' OR `units8` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units8'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const i1=
    parseInt(
    <?php
      $query = "SELECT units9 FROM `firstyearis` WHERE `units9` LIKE '1' OR `units9` LIKE '2' OR `units9` LIKE '3' OR `units9` LIKE '4' OR `units9` LIKE '5' OR `units9` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units9'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const j1=
    parseInt(
    <?php
      $query = "SELECT units10 FROM `firstyearis` WHERE `units10` LIKE '1' OR `units10` LIKE '2' OR `units10` LIKE '3' OR `units10` LIKE '4' OR `units10` LIKE '5' OR `units10` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units10'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );



    var units=(a1+b1+c1+d1+e1+f1+g1+h1+i1+j1);
    var grade=(a+b+c+d+e+f+g+h+i+j);
    var total1=(a+a1);
    var total2=(b+b1);
    var total3=(c+c1);
    var total4=(d+d1);
    var total5=(e+e1);
    var total6=(f+f1);
    var total7=(g+g1);
    var total8=(h+h1);
    var total9=(i+i1);
    var total10=(j+j1);



  document.getElementById('sum1').innerHTML=total1;
  document.getElementById('sum2').innerHTML=total2;
  document.getElementById('sum3').innerHTML=total3;
  document.getElementById('sum4').innerHTML=total4;
  document.getElementById('sum5').innerHTML=total5;
  document.getElementById('sum6').innerHTML=total6;
  document.getElementById('sum7').innerHTML=total7;
  document.getElementById('sum8').innerHTML=total8;
  document.getElementById('sum9').innerHTML=total9;
  document.getElementById('sum10').innerHTML=total10;

  var avg=((total1+total2+total3+total4+total5+total6+total7+total8+total9+total10)/units).toFixed(2);
  document.getElementById('avg').innerHTML=avg;










































































  const k=
    <?php
      $query = "SELECT grade11 FROM `firstyearis` WHERE `grade11` LIKE '1.0' OR `grade11` LIKE '1.00' OR `grade11` LIKE '1.25' OR `grade11` LIKE '1.50' OR `grade11` LIKE '1.75' OR `grade11` LIKE '2.0' OR `grade11` LIKE '2.00' OR `grade11` LIKE '2.25'  OR `grade11` LIKE '2.50'  OR `grade11` LIKE '2.75'  OR `grade11` LIKE '3.0' OR `grade11` LIKE '3.00' OR `grade11` LIKE '4.00' OR `grade11` LIKE '4.0' OR `grade11` LIKE '5.00' OR `grade11` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade11'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;


    const l=
    <?php
      $query = "SELECT grade12 FROM `firstyearis` WHERE `grade12` LIKE '1.0' OR `grade12` LIKE '1.00' OR `grade12` LIKE '1.25' OR `grade12` LIKE '1.50' OR `grade12` LIKE '1.75' OR `grade12` LIKE '2.0' OR `grade12` LIKE '2.00' OR `grade12` LIKE '2.25'  OR `grade12` LIKE '2.50'  OR `grade12` LIKE '2.75'  OR `grade12` LIKE '3.0' OR `grade12` LIKE '3.00' OR `grade12` LIKE '4.00' OR `grade12` LIKE '4.0' OR `grade12` LIKE '5.00' OR `grade12` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade12'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;

    const m=
    <?php
      $query = "SELECT grade13 FROM `firstyearis` WHERE `grade13` LIKE '1.0' OR `grade13` LIKE '1.00' OR `grade13` LIKE '1.25' OR `grade13` LIKE '1.50' OR `grade13` LIKE '1.75' OR `grade13` LIKE '2.0' OR `grade13` LIKE '2.00' OR `grade13` LIKE '2.25'  OR `grade13` LIKE '2.50'  OR `grade13` LIKE '2.75'  OR `grade13` LIKE '3.0' OR `grade13` LIKE '3.00' OR `grade13` LIKE '4.00' OR `grade13` LIKE '4.0' OR `grade13` LIKE '5.00' OR `grade13` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade13'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;

    const n=
    <?php
      $query = "SELECT grade14 FROM `firstyearis` WHERE `grade14` LIKE '1.0' OR `grade14` LIKE '1.00' OR `grade14` LIKE '1.25' OR `grade14` LIKE '1.50' OR `grade14` LIKE '1.75' OR `grade14` LIKE '2.0' OR `grade14` LIKE '2.00' OR `grade14` LIKE '2.25'  OR `grade14` LIKE '2.50'  OR `grade14` LIKE '2.75'  OR `grade14` LIKE '3.0' OR `grade14` LIKE '3.00' OR `grade14` LIKE '4.00' OR `grade14` LIKE '4.0' OR `grade14` LIKE '5.00' OR `grade14` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade14'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;


    const o=
    <?php
      $query = "SELECT grade15 FROM `firstyearis` WHERE `grade15` LIKE '1.0' OR `grade15` LIKE '1.00' OR `grade15` LIKE '1.25' OR `grade15` LIKE '1.50' OR `grade15` LIKE '1.75' OR `grade15` LIKE '2.0' OR `grade15` LIKE '2.00' OR `grade15` LIKE '2.25'  OR `grade15` LIKE '2.50'  OR `grade15` LIKE '2.75'  OR `grade15` LIKE '3.0' OR `grade15` LIKE '3.00' OR `grade15` LIKE '4.00' OR `grade15` LIKE '4.0' OR `grade15` LIKE '5.00' OR `grade15` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade15'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;


    const p=
    <?php
      $query = "SELECT grade16 FROM `firstyearis` WHERE `grade16` LIKE '1.0' OR `grade16` LIKE '1.00' OR `grade16` LIKE '1.25' OR `grade16` LIKE '1.50' OR `grade16` LIKE '1.75' OR `grade16` LIKE '2.0' OR `grade16` LIKE '2.00' OR `grade16` LIKE '2.25'  OR `grade16` LIKE '2.50'  OR `grade16` LIKE '2.75'  OR `grade16` LIKE '3.0' OR `grade16` LIKE '3.00' OR `grade16` LIKE '4.00' OR `grade16` LIKE '4.0' OR `grade16` LIKE '5.00' OR `grade16` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade16'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;


    const q=
    <?php
      $query = "SELECT grade17 FROM `firstyearis` WHERE `grade17` LIKE '1.0' OR `grade17` LIKE '1.00' OR `grade17` LIKE '1.25' OR `grade17` LIKE '1.50' OR `grade17` LIKE '1.75' OR `grade17` LIKE '2.0' OR `grade17` LIKE '2.00' OR `grade17` LIKE '2.25'  OR `grade17` LIKE '2.50'  OR `grade17` LIKE '2.75'  OR `grade17` LIKE '3.0' OR `grade17` LIKE '3.00' OR `grade17` LIKE '4.00' OR `grade17` LIKE '4.0' OR `grade17` LIKE '5.00' OR `grade17` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade17'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;


    const r=
    <?php
      $query = "SELECT grade18 FROM `firstyearis` WHERE `grade18` LIKE '1.0' OR `grade18` LIKE '1.00' OR `grade18` LIKE '1.25' OR `grade18` LIKE '1.50' OR `grade18` LIKE '1.75' OR `grade18` LIKE '2.0' OR `grade18` LIKE '2.00' OR `grade18` LIKE '2.25'  OR `grade18` LIKE '2.50'  OR `grade18` LIKE '2.75'  OR `grade18` LIKE '3.0' OR `grade18` LIKE '3.00' OR `grade18` LIKE '4.00' OR `grade18` LIKE '4.0' OR `grade18` LIKE '5.00' OR `grade18` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade18'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;

    const s=
    <?php
      $query = "SELECT grade19 FROM `firstyearis` WHERE `grade19` LIKE '1.0' OR `grade19` LIKE '1.00' OR `grade19` LIKE '1.25' OR `grade19` LIKE '1.50' OR `grade19` LIKE '1.75' OR `grade19` LIKE '2.0' OR `grade19` LIKE '2.00' OR `grade19` LIKE '2.25'  OR `grade19` LIKE '2.50'  OR `grade19` LIKE '2.75'  OR `grade19` LIKE '3.0' OR `grade19` LIKE '3.00' OR `grade19` LIKE '4.00' OR `grade19` LIKE '4.0' OR `grade19` LIKE '5.00' OR `grade19` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade19'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;


    const t=
    <?php
      $query = "SELECT grade20 FROM `firstyearis` WHERE `grade20` LIKE '1.0' OR `grade20` LIKE '1.00' OR `grade20` LIKE '1.25' OR `grade20` LIKE '1.50' OR `grade20` LIKE '1.75' OR `grade20` LIKE '2.0' OR `grade20` LIKE '2.00' OR `grade20` LIKE '2.25'  OR `grade20` LIKE '2.50'  OR `grade20` LIKE '2.75'  OR `grade20` LIKE '3.0' OR `grade20` LIKE '3.00' OR `grade20` LIKE '4.00' OR `grade20` LIKE '4.0' OR `grade20` LIKE '5.00' OR `grade20` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade20'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>;

    const k1=
    parseInt(
    <?php
      $query = "SELECT units11 FROM `firstyearis` WHERE `units11` LIKE '1' OR `units11` LIKE '2' OR `units11` LIKE '3' OR `units11` LIKE '4' OR `units11` LIKE '5' OR `units11` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units11'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );

    const l1=
    parseInt(
    <?php
      $query = "SELECT units12 FROM `firstyearis` WHERE `units12` LIKE '1' OR `units12` LIKE '2' OR `units12` LIKE '3' OR `units12` LIKE '4' OR `units12` LIKE '5' OR `units12` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units12'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const m1=
    parseInt(
    <?php
      $query = "SELECT units13 FROM `firstyearis` WHERE `units13` LIKE '1' OR `units13` LIKE '2' OR `units13` LIKE '3' OR `units13` LIKE '4' OR `units13` LIKE '5' OR `units13` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units13'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const n1=
    parseInt(
    <?php
      $query = "SELECT units14 FROM `firstyearis` WHERE `units14` LIKE '1' OR `units14` LIKE '2' OR `units14` LIKE '3' OR `units14` LIKE '4' OR `units14` LIKE '5' OR `units14` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units14'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const o1=
    parseInt(
    <?php
      $query = "SELECT units15 FROM `firstyearis` WHERE `units15` LIKE '1' OR `units15` LIKE '2' OR `units15` LIKE '3' OR `units15` LIKE '4' OR `units15` LIKE '5' OR `units15` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units15'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const p1=
    parseInt(
    <?php
      $query = "SELECT units16 FROM `firstyearis` WHERE `units16` LIKE '1' OR `units16` LIKE '2' OR `units16` LIKE '3' OR `units16` LIKE '4' OR `units16` LIKE '5' OR `units16` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units16'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const q1=
    parseInt(
    <?php
      $query = "SELECT units17 FROM `firstyearis` WHERE `units17` LIKE '1' OR `units17` LIKE '2' OR `units17` LIKE '3' OR `units17` LIKE '4' OR `units17` LIKE '5' OR `units17` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units17'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const r1=
    parseInt(
    <?php
      $query = "SELECT units18 FROM `firstyearis` WHERE `units18` LIKE '1' OR `units18` LIKE '2' OR `units18` LIKE '3' OR `units18` LIKE '4' OR `units18` LIKE '5' OR `units18` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units18'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const s1=
    parseInt(
    <?php
      $query = "SELECT units19 FROM `firstyearis` WHERE `units19` LIKE '1' OR `units19` LIKE '2' OR `units19` LIKE '3' OR `units19` LIKE '4' OR `units19` LIKE '5' OR `units19` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units19'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const t1=
    parseInt(
    <?php
      $query = "SELECT units20 FROM `firstyearis` WHERE `units20` LIKE '1' OR `units20` LIKE '2' OR `units20` LIKE '3' OR `units20` LIKE '4' OR `units20` LIKE '5' OR `units20` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units20'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );



    var units2=(k1+l1+m1+n1+o1+p1+q1+r1+s1+t1);
    var grade2=(k+l+m+n+o+p+q+r+s+t);
    var total11=(k+k1);
    var total12=(l+l1);
    var total13=(m+m1);
    var total14=(n+n1);
    var total15=(o+o1);
    var total16=(p+p1);
    var total17=(q+q1);
    var total18=(r+r1);
    var total19=(s+s1);
    var total20=(t+t1);



  document.getElementById('sum11').innerHTML=total11;
  document.getElementById('sum12').innerHTML=total12;
  document.getElementById('sum13').innerHTML=total13;
  document.getElementById('sum14').innerHTML=total14;
  document.getElementById('sum15').innerHTML=total15;
  document.getElementById('sum16').innerHTML=total16;
  document.getElementById('sum17').innerHTML=total17;
  document.getElementById('sum18').innerHTML=total18;
  document.getElementById('sum19').innerHTML=total19;
  document.getElementById('sum20').innerHTML=total20;

  var avg2=((total11+total12+total13+total14+total15+total16+total17+total18+total19+total20)/units2).toFixed(2);
  document.getElementById('avg2').innerHTML=avg2;



  var addunits=(units+units2);
  var genavg=((total1+total2+total3+total4+total5+total6+total7+total8+total9+total10+total11+total12+total13+total14+total15+total16+total17+total18+total19+total20)/addunits).toFixed(2);


    document.getElementById('genavg').innerHTML=genavg;

    if(genavg < 1.76){
      document.getElementById('genavg').style.backgroundColor="green";
      document.getElementById('genavg').style.color="white";
    }else{
      document.getElementById('genavg').style.backgroundColor="red";
      document.getElementById('genavg').style.color="white";
    }

























































  const aa=
    <?php
      $query = "SELECT grade FROM `secondyearis` WHERE `grade` LIKE '1.0' OR `grade` LIKE '1.00' OR `grade` LIKE '1.25' OR `grade` LIKE '1.50' OR `grade` LIKE '1.75' OR `grade` LIKE '2.0' OR `grade` LIKE '2.00' OR `grade` LIKE '2.25'  OR `grade` LIKE '2.50'  OR `grade` LIKE '2.75'  OR `grade` LIKE '3.0' OR `grade` LIKE '3.00' OR `grade` LIKE '4.00' OR `grade` LIKE '4.0' OR `grade` LIKE '5.00' OR `grade` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;


    const bb=
    <?php
      $query = "SELECT grade2 FROM `secondyearis` WHERE `grade2` LIKE '1.0' OR `grade2` LIKE '1.00' OR `grade2` LIKE '1.25' OR `grade2` LIKE '1.50' OR `grade2` LIKE '1.75' OR `grade2` LIKE '2.0' OR `grade2` LIKE '2.00' OR `grade2` LIKE '2.25'  OR `grade2` LIKE '2.50'  OR `grade2` LIKE '2.75'  OR `grade2` LIKE '3.0' OR `grade2` LIKE '3.00' OR `grade2` LIKE '4.00' OR `grade2` LIKE '4.0' OR `grade2` LIKE '5.00' OR `grade2` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade2'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;

    const cc=
    <?php
      $query = "SELECT grade3 FROM `secondyearis` WHERE `grade3` LIKE '1.0' OR `grade3` LIKE '1.00' OR `grade3` LIKE '1.25' OR `grade3` LIKE '1.50' OR `grade3` LIKE '1.75' OR `grade3` LIKE '2.0' OR `grade3` LIKE '2.00' OR `grade3` LIKE '2.25'  OR `grade3` LIKE '2.50'  OR `grade3` LIKE '2.75'  OR `grade3` LIKE '3.0' OR `grade3` LIKE '3.00' OR `grade3` LIKE '4.00' OR `grade3` LIKE '4.0' OR `grade3` LIKE '5.00' OR `grade3` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade3'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;

    const dd=
    <?php
      $query = "SELECT grade4 FROM `secondyearis` WHERE `grade4` LIKE '1.0' OR `grade4` LIKE '1.00' OR `grade4` LIKE '1.25' OR `grade4` LIKE '1.50' OR `grade4` LIKE '1.75' OR `grade4` LIKE '2.0' OR `grade4` LIKE '2.00' OR `grade4` LIKE '2.25'  OR `grade4` LIKE '2.50'  OR `grade4` LIKE '2.75'  OR `grade4` LIKE '3.0' OR `grade4` LIKE '3.00' OR `grade4` LIKE '4.00' OR `grade4` LIKE '4.0' OR `grade4` LIKE '5.00' OR `grade4` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade4'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;


    const ee=
    <?php
      $query = "SELECT grade5 FROM `secondyearis` WHERE `grade5` LIKE '1.0' OR `grade5` LIKE '1.00' OR `grade5` LIKE '1.25' OR `grade5` LIKE '1.50' OR `grade5` LIKE '1.75' OR `grade5` LIKE '2.0' OR `grade5` LIKE '2.00' OR `grade5` LIKE '2.25'  OR `grade5` LIKE '2.50'  OR `grade5` LIKE '2.75'  OR `grade5` LIKE '3.0' OR `grade5` LIKE '3.00' OR `grade5` LIKE '4.00' OR `grade5` LIKE '4.0' OR `grade5` LIKE '5.00' OR `grade5` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade5'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;


    const ff=
    <?php
      $query = "SELECT grade6 FROM `secondyearis` WHERE `grade6` LIKE '1.0' OR `grade6` LIKE '1.00' OR `grade6` LIKE '1.25' OR `grade6` LIKE '1.50' OR `grade6` LIKE '1.75' OR `grade6` LIKE '2.0' OR `grade6` LIKE '2.00' OR `grade6` LIKE '2.25'  OR `grade6` LIKE '2.50'  OR `grade6` LIKE '2.75'  OR `grade6` LIKE '3.0' OR `grade6` LIKE '3.00' OR `grade6` LIKE '4.00' OR `grade6` LIKE '4.0' OR `grade6` LIKE '5.00' OR `grade6` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade6'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;


    const gg=
    <?php
      $query = "SELECT grade7 FROM `secondyearis` WHERE `grade7` LIKE '1.0' OR `grade7` LIKE '1.00' OR `grade7` LIKE '1.25' OR `grade7` LIKE '1.50' OR `grade7` LIKE '1.75' OR `grade7` LIKE '2.0' OR `grade7` LIKE '2.00' OR `grade7` LIKE '2.25'  OR `grade7` LIKE '2.50'  OR `grade7` LIKE '2.75'  OR `grade7` LIKE '3.0' OR `grade7` LIKE '3.00' OR `grade7` LIKE '4.00' OR `grade7` LIKE '4.0' OR `grade7` LIKE '5.00' OR `grade7` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade7'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;


    const hh=
    <?php
      $query = "SELECT grade8 FROM `secondyearis` WHERE `grade8` LIKE '1.0' OR `grade8` LIKE '1.00' OR `grade8` LIKE '1.25' OR `grade8` LIKE '1.50' OR `grade8` LIKE '1.75' OR `grade8` LIKE '2.0' OR `grade8` LIKE '2.00' OR `grade8` LIKE '2.25'  OR `grade8` LIKE '2.50'  OR `grade8` LIKE '2.75'  OR `grade8` LIKE '3.0' OR `grade8` LIKE '3.00' OR `grade8` LIKE '4.00' OR `grade8` LIKE '4.0' OR `grade8` LIKE '5.00' OR `grade8` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade8'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;

    const ii=
    <?php
      $query = "SELECT grade9 FROM `secondyearis` WHERE `grade9` LIKE '1.0' OR `grade9` LIKE '1.00' OR `grade9` LIKE '1.25' OR `grade9` LIKE '1.50' OR `grade9` LIKE '1.75' OR `grade9` LIKE '2.0' OR `grade9` LIKE '2.00' OR `grade9` LIKE '2.25'  OR `grade9` LIKE '2.50'  OR `grade9` LIKE '2.75'  OR `grade9` LIKE '3.0' OR `grade9` LIKE '3.00' OR `grade9` LIKE '4.00' OR `grade9` LIKE '4.0' OR `grade9` LIKE '5.00' OR `grade9` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade9'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;


    const jj=
    <?php
      $query = "SELECT grade10 FROM `secondyearis` WHERE `grade10` LIKE '1.0' OR `grade10` LIKE '1.00' OR `grade10` LIKE '1.25' OR `grade10` LIKE '1.50' OR `grade10` LIKE '1.75' OR `grade10` LIKE '2.0' OR `grade10` LIKE '2.00' OR `grade10` LIKE '2.25'  OR `grade10` LIKE '2.50'  OR `grade10` LIKE '2.75'  OR `grade10` LIKE '3.0' OR `grade10` LIKE '3.00' OR `grade10` LIKE '4.00' OR `grade10` LIKE '4.0' OR `grade10` LIKE '5.00' OR `grade10` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade10'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>;

    const aa1=
    parseInt(
    <?php
      $query = "SELECT units FROM `secondyearis` WHERE `units` LIKE '1' OR `units` LIKE '2' OR `units` LIKE '3' OR `units` LIKE '4' OR `units` LIKE '5' OR `units` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );

    const bb1=
    parseInt(
    <?php
      $query = "SELECT units2 FROM `secondyearis` WHERE `units2` LIKE '1' OR `units2` LIKE '2' OR `units2` LIKE '3' OR `units2` LIKE '4' OR `units2` LIKE '5' OR `units2` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units2'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const cc1=
    parseInt(
    <?php
      $query = "SELECT units3 FROM `secondyearis` WHERE `units3` LIKE '1' OR `units3` LIKE '2' OR `units3` LIKE '3' OR `units3` LIKE '4' OR `units3` LIKE '5' OR `units3` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units3'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const dd1=
    parseInt(
    <?php
      $query = "SELECT units4 FROM `secondyearis` WHERE `units4` LIKE '1' OR `units4` LIKE '2' OR `units4` LIKE '3' OR `units4` LIKE '4' OR `units4` LIKE '5' OR `units4` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units4'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const ee1=
    parseInt(
    <?php
      $query = "SELECT units5 FROM `secondyearis` WHERE `units5` LIKE '1' OR `units5` LIKE '2' OR `units5` LIKE '3' OR `units5` LIKE '4' OR `units5` LIKE '5' OR `units5` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units5'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const ff1=
    parseInt(
    <?php
      $query = "SELECT units6 FROM `secondyearis` WHERE `units6` LIKE '1' OR `units6` LIKE '2' OR `units6` LIKE '3' OR `units6` LIKE '4' OR `units6` LIKE '5' OR `units6` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units6'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const gg1=
    parseInt(
    <?php
      $query = "SELECT units7 FROM `secondyearis` WHERE `units7` LIKE '1' OR `units7` LIKE '2' OR `units7` LIKE '3' OR `units7` LIKE '4' OR `units7` LIKE '5' OR `units7` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units7'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const hh1=
    parseInt(
    <?php
      $query = "SELECT units8 FROM `secondyearis` WHERE `units8` LIKE '1' OR `units8` LIKE '2' OR `units8` LIKE '3' OR `units8` LIKE '4' OR `units8` LIKE '5' OR `units8` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units8'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const ii1=
    parseInt(
    <?php
      $query = "SELECT units9 FROM `secondyearis` WHERE `units9` LIKE '1' OR `units9` LIKE '2' OR `units9` LIKE '3' OR `units9` LIKE '4' OR `units9` LIKE '5' OR `units9` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units9'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const jj1=
    parseInt(
    <?php
      $query = "SELECT units10 FROM `secondyearis` WHERE `units10` LIKE '1' OR `units10` LIKE '2' OR `units10` LIKE '3' OR `units10` LIKE '4' OR `units10` LIKE '5' OR `units10` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units10'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );



    var units3=(aa1+bb1+cc1+dd1+ee1+ff1+gg1+hh1+ii1+jj1);
    var grade3=(aa+bb+cc+dd+ee+ff+gg+hh+ii+jj);
    var total21=(aa+aa1);
    var total22=(bb+bb1);
    var total23=(cc+cc1);
    var total24=(dd+dd1);
    var total25=(ee+ee1);
    var total26=(ff+ff1);
    var total27=(gg+gg1);
    var total28=(hh+hh1);
    var total29=(ii+ii1);
    var total30=(jj+jj1);



  document.getElementById('sum21').innerHTML=total21;
  document.getElementById('sum22').innerHTML=total22;
  document.getElementById('sum23').innerHTML=total23;
  document.getElementById('sum24').innerHTML=total24;
  document.getElementById('sum25').innerHTML=total25;
  document.getElementById('sum26').innerHTML=total26;
  document.getElementById('sum27').innerHTML=total27;
  document.getElementById('sum28').innerHTML=total28;
  document.getElementById('sum29').innerHTML=total29;
  document.getElementById('sum30').innerHTML=total30;

  var avg3=((total21+total22+total23+total24+total25+total26+total27+total28+total29+total30)/units3).toFixed(2);
  document.getElementById('avg3').innerHTML=avg3;






































  const kk=
    <?php
      $query = "SELECT grade11 FROM `secondyearis` WHERE `grade11` LIKE '1.0' OR `grade11` LIKE '1.00' OR `grade11` LIKE '1.25' OR `grade11` LIKE '1.50' OR `grade11` LIKE '1.75' OR `grade11` LIKE '2.0' OR `grade11` LIKE '2.00' OR `grade11` LIKE '2.25'  OR `grade11` LIKE '2.50'  OR `grade11` LIKE '2.75'  OR `grade11` LIKE '3.0' OR `grade11` LIKE '3.00' OR `grade11` LIKE '4.00' OR `grade11` LIKE '4.0' OR `grade11` LIKE '5.00' OR `grade11` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade11'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;


    const ll=
    <?php
      $query = "SELECT grade12 FROM `secondyearis` WHERE `grade12` LIKE '1.0' OR `grade12` LIKE '1.00' OR `grade12` LIKE '1.25' OR `grade12` LIKE '1.50' OR `grade12` LIKE '1.75' OR `grade12` LIKE '2.0' OR `grade12` LIKE '2.00' OR `grade12` LIKE '2.25'  OR `grade12` LIKE '2.50'  OR `grade12` LIKE '2.75'  OR `grade12` LIKE '3.0' OR `grade12` LIKE '3.00' OR `grade12` LIKE '4.00' OR `grade12` LIKE '4.0' OR `grade12` LIKE '5.00' OR `grade12` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade12'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;

    const mm=
    <?php
      $query = "SELECT grade13 FROM `secondyearis` WHERE `grade13` LIKE '1.0' OR `grade13` LIKE '1.00' OR `grade13` LIKE '1.25' OR `grade13` LIKE '1.50' OR `grade13` LIKE '1.75' OR `grade13` LIKE '2.0' OR `grade13` LIKE '2.00' OR `grade13` LIKE '2.25'  OR `grade13` LIKE '2.50'  OR `grade13` LIKE '2.75'  OR `grade13` LIKE '3.0' OR `grade13` LIKE '3.00' OR `grade13` LIKE '4.00' OR `grade13` LIKE '4.0' OR `grade13` LIKE '5.00' OR `grade13` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade13'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;

    const nn=
    <?php
      $query = "SELECT grade14 FROM `secondyearis` WHERE `grade14` LIKE '1.0' OR `grade14` LIKE '1.00' OR `grade14` LIKE '1.25' OR `grade14` LIKE '1.50' OR `grade14` LIKE '1.75' OR `grade14` LIKE '2.0' OR `grade14` LIKE '2.00' OR `grade14` LIKE '2.25'  OR `grade14` LIKE '2.50'  OR `grade14` LIKE '2.75'  OR `grade14` LIKE '3.0' OR `grade14` LIKE '3.00' OR `grade14` LIKE '4.00' OR `grade14` LIKE '4.0' OR `grade14` LIKE '5.00' OR `grade14` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade14'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;


    const oo=
    <?php
      $query = "SELECT grade15 FROM `secondyearis` WHERE `grade15` LIKE '1.0' OR `grade15` LIKE '1.00' OR `grade15` LIKE '1.25' OR `grade15` LIKE '1.50' OR `grade15` LIKE '1.75' OR `grade15` LIKE '2.0' OR `grade15` LIKE '2.00' OR `grade15` LIKE '2.25'  OR `grade15` LIKE '2.50'  OR `grade15` LIKE '2.75'  OR `grade15` LIKE '3.0' OR `grade15` LIKE '3.00' OR `grade15` LIKE '4.00' OR `grade15` LIKE '4.0' OR `grade15` LIKE '5.00' OR `grade15` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade15'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;


    const pp=
    <?php
      $query = "SELECT grade16 FROM `secondyearis` WHERE `grade16` LIKE '1.0' OR `grade16` LIKE '1.00' OR `grade16` LIKE '1.25' OR `grade16` LIKE '1.50' OR `grade16` LIKE '1.75' OR `grade16` LIKE '2.0' OR `grade16` LIKE '2.00' OR `grade16` LIKE '2.25'  OR `grade16` LIKE '2.50'  OR `grade16` LIKE '2.75'  OR `grade16` LIKE '3.0' OR `grade16` LIKE '3.00' OR `grade16` LIKE '4.00' OR `grade16` LIKE '4.0' OR `grade16` LIKE '5.00' OR `grade16` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade16'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;


    const qq=
    <?php
      $query = "SELECT grade17 FROM `secondyearis` WHERE `grade17` LIKE '1.0' OR `grade17` LIKE '1.00' OR `grade17` LIKE '1.25' OR `grade17` LIKE '1.50' OR `grade17` LIKE '1.75' OR `grade17` LIKE '2.0' OR `grade17` LIKE '2.00' OR `grade17` LIKE '2.25'  OR `grade17` LIKE '2.50'  OR `grade17` LIKE '2.75'  OR `grade17` LIKE '3.0' OR `grade17` LIKE '3.00' OR `grade17` LIKE '4.00' OR `grade17` LIKE '4.0' OR `grade17` LIKE '5.00' OR `grade17` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade17'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;


    const rr=
    <?php
      $query = "SELECT grade18 FROM `secondyearis` WHERE `grade18` LIKE '1.0' OR `grade18` LIKE '1.00' OR `grade18` LIKE '1.25' OR `grade18` LIKE '1.50' OR `grade18` LIKE '1.75' OR `grade18` LIKE '2.0' OR `grade18` LIKE '2.00' OR `grade18` LIKE '2.25'  OR `grade18` LIKE '2.50'  OR `grade18` LIKE '2.75'  OR `grade18` LIKE '3.0' OR `grade18` LIKE '3.00' OR `grade18` LIKE '4.00' OR `grade18` LIKE '4.0' OR `grade18` LIKE '5.00' OR `grade18` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade18'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;

    const ss=
    <?php
      $query = "SELECT grade19 FROM `secondyearis` WHERE `grade19` LIKE '1.0' OR `grade19` LIKE '1.00' OR `grade19` LIKE '1.25' OR `grade19` LIKE '1.50' OR `grade19` LIKE '1.75' OR `grade19` LIKE '2.0' OR `grade19` LIKE '2.00' OR `grade19` LIKE '2.25'  OR `grade19` LIKE '2.50'  OR `grade19` LIKE '2.75'  OR `grade19` LIKE '3.0' OR `grade19` LIKE '3.00' OR `grade19` LIKE '4.00' OR `grade19` LIKE '4.0' OR `grade19` LIKE '5.00' OR `grade19` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade19'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;


    const tt=
    <?php
      $query = "SELECT grade20 FROM `secondyearis` WHERE `grade20` LIKE '1.0' OR `grade20` LIKE '1.00' OR `grade20` LIKE '1.25' OR `grade20` LIKE '1.50' OR `grade20` LIKE '1.75' OR `grade20` LIKE '2.0' OR `grade20` LIKE '2.00' OR `grade20` LIKE '2.25'  OR `grade20` LIKE '2.50'  OR `grade20` LIKE '2.75'  OR `grade20` LIKE '3.0' OR `grade20` LIKE '3.00' OR `grade20` LIKE '4.00' OR `grade20` LIKE '4.0' OR `grade20` LIKE '5.00' OR `grade20` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade20'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>;

    const kk1=
    parseInt(
    <?php
      $query = "SELECT units11 FROM `secondyearis` WHERE `units11` LIKE '1' OR `units11` LIKE '2' OR `units11` LIKE '3' OR `units11` LIKE '4' OR `units11` LIKE '5' OR `units11` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units11'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );

    const ll1=
    parseInt(
    <?php
      $query = "SELECT units12 FROM `secondyearis` WHERE `units12` LIKE '1' OR `units12` LIKE '2' OR `units12` LIKE '3' OR `units12` LIKE '4' OR `units12` LIKE '5' OR `units12` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units12'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const mm1=
    parseInt(
    <?php
      $query = "SELECT units13 FROM `secondyearis` WHERE `units13` LIKE '1' OR `units13` LIKE '2' OR `units13` LIKE '3' OR `units13` LIKE '4' OR `units13` LIKE '5' OR `units13` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units13'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const nn1=
    parseInt(
    <?php
      $query = "SELECT units14 FROM `secondyearis` WHERE `units14` LIKE '1' OR `units14` LIKE '2' OR `units14` LIKE '3' OR `units14` LIKE '4' OR `units14` LIKE '5' OR `units14` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units14'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const oo1=
    parseInt(
    <?php
      $query = "SELECT units15 FROM `secondyearis` WHERE `units15` LIKE '1' OR `units15` LIKE '2' OR `units15` LIKE '3' OR `units15` LIKE '4' OR `units15` LIKE '5' OR `units15` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units15'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const pp1=
    parseInt(
    <?php
      $query = "SELECT units16 FROM `secondyearis` WHERE `units16` LIKE '1' OR `units16` LIKE '2' OR `units16` LIKE '3' OR `units16` LIKE '4' OR `units16` LIKE '5' OR `units16` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units16'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const qq1=
    parseInt(
    <?php
      $query = "SELECT units17 FROM `secondyearis` WHERE `units17` LIKE '1' OR `units17` LIKE '2' OR `units17` LIKE '3' OR `units17` LIKE '4' OR `units17` LIKE '5' OR `units17` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units17'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const rr1=
    parseInt(
    <?php
      $query = "SELECT units18 FROM `secondyearis` WHERE `units18` LIKE '1' OR `units18` LIKE '2' OR `units18` LIKE '3' OR `units18` LIKE '4' OR `units18` LIKE '5' OR `units18` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units18'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const ss1=
    parseInt(
    <?php
      $query = "SELECT units19 FROM `secondyearis` WHERE `units19` LIKE '1' OR `units19` LIKE '2' OR `units19` LIKE '3' OR `units19` LIKE '4' OR `units19` LIKE '5' OR `units19` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units19'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const tt1=
    parseInt(
    <?php
      $query = "SELECT units20 FROM `secondyearis` WHERE `units20` LIKE '1' OR `units20` LIKE '2' OR `units20` LIKE '3' OR `units20` LIKE '4' OR `units20` LIKE '5' OR `units20` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units20'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );



    var units4=(kk1+ll1+mm1+nn1+oo1+pp1+qq1+rr1+ss1+tt1);
    var grade4=(kk+ll+mm+nn+oo+pp+qq+rr+ss+tt);
    var total31=(kk+kk1);
    var total32=(ll+ll1);
    var total33=(mm+mm1);
    var total34=(nn+nn1);
    var total35=(oo+oo1);
    var total36=(pp+pp1);
    var total37=(qq+qq1);
    var total38=(rr+rr1);
    var total39=(ss+ss1);
    var total40=(tt+tt1);



  document.getElementById('sum31').innerHTML=total31;
  document.getElementById('sum32').innerHTML=total32;
  document.getElementById('sum33').innerHTML=total33;
  document.getElementById('sum34').innerHTML=total34;
  document.getElementById('sum35').innerHTML=total35;
  document.getElementById('sum36').innerHTML=total36;
  document.getElementById('sum37').innerHTML=total37;
  document.getElementById('sum38').innerHTML=total38;
  document.getElementById('sum39').innerHTML=total39;
  document.getElementById('sum40').innerHTML=total40;

  var avg4=((total31+total32+total33+total34+total35+total36+total37+total38+total39+total40)/units4).toFixed(2);
  document.getElementById('avg4').innerHTML=avg4;


  var addunits2=(units3+units4);
  var genavg2=((total21+total22+total23+total24+total25+total26+total27+total28+total29+total30+total31+total32+total33+total34+total35+total36+total37+total38+total39+total40)/addunits2).toFixed(2);


    document.getElementById('genavg2').innerHTML=genavg2;

    if(genavg2 < 1.76){
      document.getElementById('genavg2').style.backgroundColor="green";
      document.getElementById('genavg2').style.color="white";
    }else{
      document.getElementById('genavg2').style.backgroundColor="red";
      document.getElementById('genavg2').style.color="white";
    }































































  const aaa=
    <?php
      $query = "SELECT grade FROM `thirdyearis` WHERE `grade` LIKE '1.0' OR `grade` LIKE '1.00' OR `grade` LIKE '1.25' OR `grade` LIKE '1.50' OR `grade` LIKE '1.75' OR `grade` LIKE '2.0' OR `grade` LIKE '2.00' OR `grade` LIKE '2.25'  OR `grade` LIKE '2.50'  OR `grade` LIKE '2.75'  OR `grade` LIKE '3.0' OR `grade` LIKE '3.00' OR `grade` LIKE '4.00' OR `grade` LIKE '4.0' OR `grade` LIKE '5.00' OR `grade` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;


    const bbb=
    <?php
      $query = "SELECT grade2 FROM `thirdyearis` WHERE `grade2` LIKE '1.0' OR `grade2` LIKE '1.00' OR `grade2` LIKE '1.25' OR `grade2` LIKE '1.50' OR `grade2` LIKE '1.75' OR `grade2` LIKE '2.0' OR `grade2` LIKE '2.00' OR `grade2` LIKE '2.25'  OR `grade2` LIKE '2.50'  OR `grade2` LIKE '2.75'  OR `grade2` LIKE '3.0' OR `grade2` LIKE '3.00' OR `grade2` LIKE '4.00' OR `grade2` LIKE '4.0' OR `grade2` LIKE '5.00' OR `grade2` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade2'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;

    const ccc=
    <?php
      $query = "SELECT grade3 FROM `thirdyearis` WHERE `grade3` LIKE '1.0' OR `grade3` LIKE '1.00' OR `grade3` LIKE '1.25' OR `grade3` LIKE '1.50' OR `grade3` LIKE '1.75' OR `grade3` LIKE '2.0' OR `grade3` LIKE '2.00' OR `grade3` LIKE '2.25'  OR `grade3` LIKE '2.50'  OR `grade3` LIKE '2.75'  OR `grade3` LIKE '3.0' OR `grade3` LIKE '3.00' OR `grade3` LIKE '4.00' OR `grade3` LIKE '4.0' OR `grade3` LIKE '5.00' OR `grade3` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade3'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;

    const ddd=
    <?php
      $query = "SELECT grade4 FROM `thirdyearis` WHERE `grade4` LIKE '1.0' OR `grade4` LIKE '1.00' OR `grade4` LIKE '1.25' OR `grade4` LIKE '1.50' OR `grade4` LIKE '1.75' OR `grade4` LIKE '2.0' OR `grade4` LIKE '2.00' OR `grade4` LIKE '2.25'  OR `grade4` LIKE '2.50'  OR `grade4` LIKE '2.75'  OR `grade4` LIKE '3.0' OR `grade4` LIKE '3.00' OR `grade4` LIKE '4.00' OR `grade4` LIKE '4.0' OR `grade4` LIKE '5.00' OR `grade4` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade4'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;


    const eee=
    <?php
      $query = "SELECT grade5 FROM `thirdyearis` WHERE `grade5` LIKE '1.0' OR `grade5` LIKE '1.00' OR `grade5` LIKE '1.25' OR `grade5` LIKE '1.50' OR `grade5` LIKE '1.75' OR `grade5` LIKE '2.0' OR `grade5` LIKE '2.00' OR `grade5` LIKE '2.25'  OR `grade5` LIKE '2.50'  OR `grade5` LIKE '2.75'  OR `grade5` LIKE '3.0' OR `grade5` LIKE '3.00' OR `grade5` LIKE '4.00' OR `grade5` LIKE '4.0' OR `grade5` LIKE '5.00' OR `grade5` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade5'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;


    const fff=
    <?php
      $query = "SELECT grade6 FROM `thirdyearis` WHERE `grade6` LIKE '1.0' OR `grade6` LIKE '1.00' OR `grade6` LIKE '1.25' OR `grade6` LIKE '1.50' OR `grade6` LIKE '1.75' OR `grade6` LIKE '2.0' OR `grade6` LIKE '2.00' OR `grade6` LIKE '2.25'  OR `grade6` LIKE '2.50'  OR `grade6` LIKE '2.75'  OR `grade6` LIKE '3.0' OR `grade6` LIKE '3.00' OR `grade6` LIKE '4.00' OR `grade6` LIKE '4.0' OR `grade6` LIKE '5.00' OR `grade6` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade6'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;


    const ggg=
    <?php
      $query = "SELECT grade7 FROM `thirdyearis` WHERE `grade7` LIKE '1.0' OR `grade7` LIKE '1.00' OR `grade7` LIKE '1.25' OR `grade7` LIKE '1.50' OR `grade7` LIKE '1.75' OR `grade7` LIKE '2.0' OR `grade7` LIKE '2.00' OR `grade7` LIKE '2.25'  OR `grade7` LIKE '2.50'  OR `grade7` LIKE '2.75'  OR `grade7` LIKE '3.0' OR `grade7` LIKE '3.00' OR `grade7` LIKE '4.00' OR `grade7` LIKE '4.0' OR `grade7` LIKE '5.00' OR `grade7` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade7'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;


    const hhh=
    <?php
      $query = "SELECT grade8 FROM `thirdyearis` WHERE `grade8` LIKE '1.0' OR `grade8` LIKE '1.00' OR `grade8` LIKE '1.25' OR `grade8` LIKE '1.50' OR `grade8` LIKE '1.75' OR `grade8` LIKE '2.0' OR `grade8` LIKE '2.00' OR `grade8` LIKE '2.25'  OR `grade8` LIKE '2.50'  OR `grade8` LIKE '2.75'  OR `grade8` LIKE '3.0' OR `grade8` LIKE '3.00' OR `grade8` LIKE '4.00' OR `grade8` LIKE '4.0' OR `grade8` LIKE '5.00' OR `grade8` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade8'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;

    const iii=
    <?php
      $query = "SELECT grade9 FROM `thirdyearis` WHERE `grade9` LIKE '1.0' OR `grade9` LIKE '1.00' OR `grade9` LIKE '1.25' OR `grade9` LIKE '1.50' OR `grade9` LIKE '1.75' OR `grade9` LIKE '2.0' OR `grade9` LIKE '2.00' OR `grade9` LIKE '2.25'  OR `grade9` LIKE '2.50'  OR `grade9` LIKE '2.75'  OR `grade9` LIKE '3.0' OR `grade9` LIKE '3.00' OR `grade9` LIKE '4.00' OR `grade9` LIKE '4.0' OR `grade9` LIKE '5.00' OR `grade9` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade9'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;


    const jjj=
    <?php
      $query = "SELECT grade10 FROM `thirdyearis` WHERE `grade10` LIKE '1.0' OR `grade10` LIKE '1.00' OR `grade10` LIKE '1.25' OR `grade10` LIKE '1.50' OR `grade10` LIKE '1.75' OR `grade10` LIKE '2.0' OR `grade10` LIKE '2.00' OR `grade10` LIKE '2.25'  OR `grade10` LIKE '2.50'  OR `grade10` LIKE '2.75'  OR `grade10` LIKE '3.0' OR `grade10` LIKE '3.00' OR `grade10` LIKE '4.00' OR `grade10` LIKE '4.0' OR `grade10` LIKE '5.00' OR `grade10` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade10'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>;

    const aaa1=
    parseInt(
    <?php
      $query = "SELECT units FROM `thirdyearis` WHERE `units` LIKE '1' OR `units` LIKE '2' OR `units` LIKE '3' OR `units` LIKE '4' OR `units` LIKE '5' OR `units` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );

    const bbb1=
    parseInt(
    <?php
      $query = "SELECT units2 FROM `thirdyearis` WHERE `units2` LIKE '1' OR `units2` LIKE '2' OR `units2` LIKE '3' OR `units2` LIKE '4' OR `units2` LIKE '5' OR `units2` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units2'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const ccc1=
    parseInt(
    <?php
      $query = "SELECT units3 FROM `thirdyearis` WHERE `units3` LIKE '1' OR `units3` LIKE '2' OR `units3` LIKE '3' OR `units3` LIKE '4' OR `units3` LIKE '5' OR `units3` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units3'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const ddd1=
    parseInt(
    <?php
      $query = "SELECT units4 FROM `thirdyearis` WHERE `units4` LIKE '1' OR `units4` LIKE '2' OR `units4` LIKE '3' OR `units4` LIKE '4' OR `units4` LIKE '5' OR `units4` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units4'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const eee1=
    parseInt(
    <?php
      $query = "SELECT units5 FROM `thirdyearis` WHERE `units5` LIKE '1' OR `units5` LIKE '2' OR `units5` LIKE '3' OR `units5` LIKE '4' OR `units5` LIKE '5' OR `units5` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units5'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const fff1=
    parseInt(
    <?php
      $query = "SELECT units6 FROM `thirdyearis` WHERE `units6` LIKE '1' OR `units6` LIKE '2' OR `units6` LIKE '3' OR `units6` LIKE '4' OR `units6` LIKE '5' OR `units6` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units6'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const ggg1=
    parseInt(
    <?php
      $query = "SELECT units7 FROM `thirdyearis` WHERE `units7` LIKE '1' OR `units7` LIKE '2' OR `units7` LIKE '3' OR `units7` LIKE '4' OR `units7` LIKE '5' OR `units7` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units7'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const hhh1=
    parseInt(
    <?php
      $query = "SELECT units8 FROM `thirdyearis` WHERE `units8` LIKE '1' OR `units8` LIKE '2' OR `units8` LIKE '3' OR `units8` LIKE '4' OR `units8` LIKE '5' OR `units8` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units8'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const iii1=
    parseInt(
    <?php
      $query = "SELECT units9 FROM `thirdyearis` WHERE `units9` LIKE '1' OR `units9` LIKE '2' OR `units9` LIKE '3' OR `units9` LIKE '4' OR `units9` LIKE '5' OR `units9` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units9'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const jjj1=
    parseInt(
    <?php
      $query = "SELECT units10 FROM `thirdyearis` WHERE `units10` LIKE '1' OR `units10` LIKE '2' OR `units10` LIKE '3' OR `units10` LIKE '4' OR `units10` LIKE '5' OR `units10` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units10'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );



    var units5=(aaa1+bbb1+ccc1+ddd1+eee1+fff1+ggg1+hhh1+iii1+jjj1);
    var grade5=(aaa+bbb+ccc+ddd+eee+fff+ggg+hhh+iii+jjj);
    var total41=(aaa+aaa1);
    var total42=(bbb+bbb1);
    var total43=(ccc+ccc1);
    var total44=(ddd+ddd1);
    var total45=(eee+eee1);
    var total46=(fff+fff1);
    var total47=(ggg+ggg1);
    var total48=(hhh+hhh1);
    var total49=(iii+iii1);
    var total50=(jjj+jjj1);



  document.getElementById('sum41').innerHTML=total41;
  document.getElementById('sum42').innerHTML=total42;
  document.getElementById('sum43').innerHTML=total43;
  document.getElementById('sum44').innerHTML=total44;
  document.getElementById('sum45').innerHTML=total45;
  document.getElementById('sum46').innerHTML=total46;
  document.getElementById('sum47').innerHTML=total47;
  document.getElementById('sum48').innerHTML=total48;
  document.getElementById('sum49').innerHTML=total49;
  document.getElementById('sum50').innerHTML=total50;

  var avg5=((total41+total42+total43+total44+total45+total46+total47+total48+total49+total50)/units5).toFixed(2);
  document.getElementById('avg5').innerHTML=avg5;






































  const kkk=
    <?php
      $query = "SELECT grade11 FROM `thirdyearis` WHERE `grade11` LIKE '1.0' OR `grade11` LIKE '1.00' OR `grade11` LIKE '1.25' OR `grade11` LIKE '1.50' OR `grade11` LIKE '1.75' OR `grade11` LIKE '2.0' OR `grade11` LIKE '2.00' OR `grade11` LIKE '2.25'  OR `grade11` LIKE '2.50'  OR `grade11` LIKE '2.75'  OR `grade11` LIKE '3.0' OR `grade11` LIKE '3.00' OR `grade11` LIKE '4.00' OR `grade11` LIKE '4.0' OR `grade11` LIKE '5.00' OR `grade11` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade11'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;


    const lll=
    <?php
      $query = "SELECT grade12 FROM `thirdyearis` WHERE `grade12` LIKE '1.0' OR `grade12` LIKE '1.00' OR `grade12` LIKE '1.25' OR `grade12` LIKE '1.50' OR `grade12` LIKE '1.75' OR `grade12` LIKE '2.0' OR `grade12` LIKE '2.00' OR `grade12` LIKE '2.25'  OR `grade12` LIKE '2.50'  OR `grade12` LIKE '2.75'  OR `grade12` LIKE '3.0' OR `grade12` LIKE '3.00' OR `grade12` LIKE '4.00' OR `grade12` LIKE '4.0' OR `grade12` LIKE '5.00' OR `grade12` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade12'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;

    const mmm=
    <?php
      $query = "SELECT grade13 FROM `thirdyearis` WHERE `grade13` LIKE '1.0' OR `grade13` LIKE '1.00' OR `grade13` LIKE '1.25' OR `grade13` LIKE '1.50' OR `grade13` LIKE '1.75' OR `grade13` LIKE '2.0' OR `grade13` LIKE '2.00' OR `grade13` LIKE '2.25'  OR `grade13` LIKE '2.50'  OR `grade13` LIKE '2.75'  OR `grade13` LIKE '3.0' OR `grade13` LIKE '3.00' OR `grade13` LIKE '4.00' OR `grade13` LIKE '4.0' OR `grade13` LIKE '5.00' OR `grade13` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade13'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;

    const nnn=
    <?php
      $query = "SELECT grade14 FROM `thirdyearis` WHERE `grade14` LIKE '1.0' OR `grade14` LIKE '1.00' OR `grade14` LIKE '1.25' OR `grade14` LIKE '1.50' OR `grade14` LIKE '1.75' OR `grade14` LIKE '2.0' OR `grade14` LIKE '2.00' OR `grade14` LIKE '2.25'  OR `grade14` LIKE '2.50'  OR `grade14` LIKE '2.75'  OR `grade14` LIKE '3.0' OR `grade14` LIKE '3.00' OR `grade14` LIKE '4.00' OR `grade14` LIKE '4.0' OR `grade14` LIKE '5.00' OR `grade14` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade14'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;


    const ooo=
    <?php
      $query = "SELECT grade15 FROM `thirdyearis` WHERE `grade15` LIKE '1.0' OR `grade15` LIKE '1.00' OR `grade15` LIKE '1.25' OR `grade15` LIKE '1.50' OR `grade15` LIKE '1.75' OR `grade15` LIKE '2.0' OR `grade15` LIKE '2.00' OR `grade15` LIKE '2.25'  OR `grade15` LIKE '2.50'  OR `grade15` LIKE '2.75'  OR `grade15` LIKE '3.0' OR `grade15` LIKE '3.00' OR `grade15` LIKE '4.00' OR `grade15` LIKE '4.0' OR `grade15` LIKE '5.00' OR `grade15` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade15'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;


    const ppp=
    <?php
      $query = "SELECT grade16 FROM `thirdyearis` WHERE `grade16` LIKE '1.0' OR `grade16` LIKE '1.00' OR `grade16` LIKE '1.25' OR `grade16` LIKE '1.50' OR `grade16` LIKE '1.75' OR `grade16` LIKE '2.0' OR `grade16` LIKE '2.00' OR `grade16` LIKE '2.25'  OR `grade16` LIKE '2.50'  OR `grade16` LIKE '2.75'  OR `grade16` LIKE '3.0' OR `grade16` LIKE '3.00' OR `grade16` LIKE '4.00' OR `grade16` LIKE '4.0' OR `grade16` LIKE '5.00' OR `grade16` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade16'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;


    const qqq=
    <?php
      $query = "SELECT grade17 FROM `thirdyearis` WHERE `grade17` LIKE '1.0' OR `grade17` LIKE '1.00' OR `grade17` LIKE '1.25' OR `grade17` LIKE '1.50' OR `grade17` LIKE '1.75' OR `grade17` LIKE '2.0' OR `grade17` LIKE '2.00' OR `grade17` LIKE '2.25'  OR `grade17` LIKE '2.50'  OR `grade17` LIKE '2.75'  OR `grade17` LIKE '3.0' OR `grade17` LIKE '3.00' OR `grade17` LIKE '4.00' OR `grade17` LIKE '4.0' OR `grade17` LIKE '5.00' OR `grade17` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade17'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;


    const rrr=
    <?php
      $query = "SELECT grade18 FROM `thirdyearis` WHERE `grade18` LIKE '1.0' OR `grade18` LIKE '1.00' OR `grade18` LIKE '1.25' OR `grade18` LIKE '1.50' OR `grade18` LIKE '1.75' OR `grade18` LIKE '2.0' OR `grade18` LIKE '2.00' OR `grade18` LIKE '2.25'  OR `grade18` LIKE '2.50'  OR `grade18` LIKE '2.75'  OR `grade18` LIKE '3.0' OR `grade18` LIKE '3.00' OR `grade18` LIKE '4.00' OR `grade18` LIKE '4.0' OR `grade18` LIKE '5.00' OR `grade18` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade18'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;

    const sss=
    <?php
      $query = "SELECT grade19 FROM `thirdyearis` WHERE `grade19` LIKE '1.0' OR `grade19` LIKE '1.00' OR `grade19` LIKE '1.25' OR `grade19` LIKE '1.50' OR `grade19` LIKE '1.75' OR `grade19` LIKE '2.0' OR `grade19` LIKE '2.00' OR `grade19` LIKE '2.25'  OR `grade19` LIKE '2.50'  OR `grade19` LIKE '2.75'  OR `grade19` LIKE '3.0' OR `grade19` LIKE '3.00' OR `grade19` LIKE '4.00' OR `grade19` LIKE '4.0' OR `grade19` LIKE '5.00' OR `grade19` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade19'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;


    const ttt=
    <?php
      $query = "SELECT grade20 FROM `thirdyearis` WHERE `grade20` LIKE '1.0' OR `grade20` LIKE '1.00' OR `grade20` LIKE '1.25' OR `grade20` LIKE '1.50' OR `grade20` LIKE '1.75' OR `grade20` LIKE '2.0' OR `grade20` LIKE '2.00' OR `grade20` LIKE '2.25'  OR `grade20` LIKE '2.50'  OR `grade20` LIKE '2.75'  OR `grade20` LIKE '3.0' OR `grade20` LIKE '3.00' OR `grade20` LIKE '4.00' OR `grade20` LIKE '4.0' OR `grade20` LIKE '5.00' OR `grade20` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade20'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>;

    const kkk1=
    parseInt(
    <?php
      $query = "SELECT units11 FROM `thirdyearis` WHERE `units11` LIKE '1' OR `units11` LIKE '2' OR `units11` LIKE '3' OR `units11` LIKE '4' OR `units11` LIKE '5' OR `units11` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units11'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );

    const lll1=
    parseInt(
    <?php
      $query = "SELECT units12 FROM `thirdyearis` WHERE `units12` LIKE '1' OR `units12` LIKE '2' OR `units12` LIKE '3' OR `units12` LIKE '4' OR `units12` LIKE '5' OR `units12` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units12'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const mmm1=
    parseInt(
    <?php
      $query = "SELECT units13 FROM `thirdyearis` WHERE `units13` LIKE '1' OR `units13` LIKE '2' OR `units13` LIKE '3' OR `units13` LIKE '4' OR `units13` LIKE '5' OR `units13` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units13'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const nnn1=
    parseInt(
    <?php
      $query = "SELECT units14 FROM `thirdyearis` WHERE `units14` LIKE '1' OR `units14` LIKE '2' OR `units14` LIKE '3' OR `units14` LIKE '4' OR `units14` LIKE '5' OR `units14` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units14'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const ooo1=
    parseInt(
    <?php
      $query = "SELECT units15 FROM `thirdyearis` WHERE `units15` LIKE '1' OR `units15` LIKE '2' OR `units15` LIKE '3' OR `units15` LIKE '4' OR `units15` LIKE '5' OR `units15` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units15'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const ppp1=
    parseInt(
    <?php
      $query = "SELECT units16 FROM `thirdyearis` WHERE `units16` LIKE '1' OR `units16` LIKE '2' OR `units16` LIKE '3' OR `units16` LIKE '4' OR `units16` LIKE '5' OR `units16` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units16'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const qqq1=
    parseInt(
    <?php
      $query = "SELECT units17 FROM `thirdyearis` WHERE `units17` LIKE '1' OR `units17` LIKE '2' OR `units17` LIKE '3' OR `units17` LIKE '4' OR `units17` LIKE '5' OR `units17` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units17'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const rrr1=
    parseInt(
    <?php
      $query = "SELECT units18 FROM `thirdyearis` WHERE `units18` LIKE '1' OR `units18` LIKE '2' OR `units18` LIKE '3' OR `units18` LIKE '4' OR `units18` LIKE '5' OR `units18` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units18'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const sss1=
    parseInt(
    <?php
      $query = "SELECT units19 FROM `thirdyearis` WHERE `units19` LIKE '1' OR `units19` LIKE '2' OR `units19` LIKE '3' OR `units19` LIKE '4' OR `units19` LIKE '5' OR `units19` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units19'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const ttt1=
    parseInt(
    <?php
      $query = "SELECT units20 FROM `thirdyearis` WHERE `units20` LIKE '1' OR `units20` LIKE '2' OR `units20` LIKE '3' OR `units20` LIKE '4' OR `units20` LIKE '5' OR `units20` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units20'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );



    var units6=(kkk1+lll1+mmm1+nnn1+ooo1+ppp1+qqq1+rrr1+sss1+ttt1);
    var grade6=(kkk+lll+mmm+nnn+ooo+ppp+qqq+rrr+sss+ttt);
    var total51=(kkk+kkk1);
    var total52=(lll+lll1);
    var total53=(mmm+mmm1);
    var total54=(nnn+nnn1);
    var total55=(ooo+ooo1);
    var total56=(ppp+ppp1);
    var total57=(qqq+qqq1);
    var total58=(rrr+rrr1);
    var total59=(sss+sss1);
    var total60=(ttt+ttt1);



  document.getElementById('sum51').innerHTML=total51;
  document.getElementById('sum52').innerHTML=total52;
  document.getElementById('sum53').innerHTML=total53;
  document.getElementById('sum54').innerHTML=total54;
  document.getElementById('sum55').innerHTML=total55;
  document.getElementById('sum56').innerHTML=total56;
  document.getElementById('sum57').innerHTML=total57;
  document.getElementById('sum58').innerHTML=total58;
  document.getElementById('sum59').innerHTML=total59;
  document.getElementById('sum60').innerHTML=total60;

  var avg6=((total51+total52+total53+total54+total55+total56+total57+total58+total59+total60)/units6).toFixed(2);
  document.getElementById('avg6').innerHTML=avg6;


  var addunits3=(units5+units6);
  var genavg3=((total41+total42+total43+total44+total45+total46+total47+total48+total49+total50+total51+total52+total53+total54+total55+total56+total57+total58+total59+total60)/addunits3).toFixed(2);


    document.getElementById('genavg3').innerHTML=genavg3;

    if(genavg3 < 1.76){
      document.getElementById('genavg3').style.backgroundColor="green";
      document.getElementById('genavg3').style.color="white";
    }else{
      document.getElementById('genavg3').style.backgroundColor="red";
      document.getElementById('genavg3').style.color="white";
    }





















  const aaaa=
    <?php
      $query = "SELECT grade FROM `midyearis` WHERE `grade` LIKE '1.0' OR `grade` LIKE '1.00' OR `grade` LIKE '1.25' OR `grade` LIKE '1.50' OR `grade` LIKE '1.75' OR `grade` LIKE '2.0' OR `grade` LIKE '2.00' OR `grade` LIKE '2.25'  OR `grade` LIKE '2.50'  OR `grade` LIKE '2.75'  OR `grade` LIKE '3.0' OR `grade` LIKE '3.00' OR `grade` LIKE '4.00' OR `grade` LIKE '4.0' OR `grade` LIKE '5.00' OR `grade` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;


    const bbbb=
    <?php
      $query = "SELECT grade2 FROM `midyearis` WHERE `grade2` LIKE '1.0' OR `grade2` LIKE '1.00' OR `grade2` LIKE '1.25' OR `grade2` LIKE '1.50' OR `grade2` LIKE '1.75' OR `grade2` LIKE '2.0' OR `grade2` LIKE '2.00' OR `grade2` LIKE '2.25'  OR `grade2` LIKE '2.50'  OR `grade2` LIKE '2.75'  OR `grade2` LIKE '3.0' OR `grade2` LIKE '3.00' OR `grade2` LIKE '4.00' OR `grade2` LIKE '4.0' OR `grade2` LIKE '5.00' OR `grade2` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade2'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;

    const cccc=
    <?php
      $query = "SELECT grade3 FROM `midyearis` WHERE `grade3` LIKE '1.0' OR `grade3` LIKE '1.00' OR `grade3` LIKE '1.25' OR `grade3` LIKE '1.50' OR `grade3` LIKE '1.75' OR `grade3` LIKE '2.0' OR `grade3` LIKE '2.00' OR `grade3` LIKE '2.25'  OR `grade3` LIKE '2.50'  OR `grade3` LIKE '2.75'  OR `grade3` LIKE '3.0' OR `grade3` LIKE '3.00' OR `grade3` LIKE '4.00' OR `grade3` LIKE '4.0' OR `grade3` LIKE '5.00' OR `grade3` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade3'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;

    const dddd=
    <?php
      $query = "SELECT grade4 FROM `midyearis` WHERE `grade4` LIKE '1.0' OR `grade4` LIKE '1.00' OR `grade4` LIKE '1.25' OR `grade4` LIKE '1.50' OR `grade4` LIKE '1.75' OR `grade4` LIKE '2.0' OR `grade4` LIKE '2.00' OR `grade4` LIKE '2.25'  OR `grade4` LIKE '2.50'  OR `grade4` LIKE '2.75'  OR `grade4` LIKE '3.0' OR `grade4` LIKE '3.00' OR `grade4` LIKE '4.00' OR `grade4` LIKE '4.0' OR `grade4` LIKE '5.00' OR `grade4` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade4'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;


    const eeee=
    <?php
      $query = "SELECT grade5 FROM `midyearis` WHERE `grade5` LIKE '1.0' OR `grade5` LIKE '1.00' OR `grade5` LIKE '1.25' OR `grade5` LIKE '1.50' OR `grade5` LIKE '1.75' OR `grade5` LIKE '2.0' OR `grade5` LIKE '2.00' OR `grade5` LIKE '2.25'  OR `grade5` LIKE '2.50'  OR `grade5` LIKE '2.75'  OR `grade5` LIKE '3.0' OR `grade5` LIKE '3.00' OR `grade5` LIKE '4.00' OR `grade5` LIKE '4.0' OR `grade5` LIKE '5.00' OR `grade5` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade5'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;


    const ffff=
    <?php
      $query = "SELECT grade6 FROM `midyearis` WHERE `grade6` LIKE '1.0' OR `grade6` LIKE '1.00' OR `grade6` LIKE '1.25' OR `grade6` LIKE '1.50' OR `grade6` LIKE '1.75' OR `grade6` LIKE '2.0' OR `grade6` LIKE '2.00' OR `grade6` LIKE '2.25'  OR `grade6` LIKE '2.50'  OR `grade6` LIKE '2.75'  OR `grade6` LIKE '3.0' OR `grade6` LIKE '3.00' OR `grade6` LIKE '4.00' OR `grade6` LIKE '4.0' OR `grade6` LIKE '5.00' OR `grade6` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade6'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;


    const gggg=
    <?php
      $query = "SELECT grade7 FROM `midyearis` WHERE `grade7` LIKE '1.0' OR `grade7` LIKE '1.00' OR `grade7` LIKE '1.25' OR `grade7` LIKE '1.50' OR `grade7` LIKE '1.75' OR `grade7` LIKE '2.0' OR `grade7` LIKE '2.00' OR `grade7` LIKE '2.25'  OR `grade7` LIKE '2.50'  OR `grade7` LIKE '2.75'  OR `grade7` LIKE '3.0' OR `grade7` LIKE '3.00' OR `grade7` LIKE '4.00' OR `grade7` LIKE '4.0' OR `grade7` LIKE '5.00' OR `grade7` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade7'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;


    const hhhh=
    <?php
      $query = "SELECT grade8 FROM `midyearis` WHERE `grade8` LIKE '1.0' OR `grade8` LIKE '1.00' OR `grade8` LIKE '1.25' OR `grade8` LIKE '1.50' OR `grade8` LIKE '1.75' OR `grade8` LIKE '2.0' OR `grade8` LIKE '2.00' OR `grade8` LIKE '2.25'  OR `grade8` LIKE '2.50'  OR `grade8` LIKE '2.75'  OR `grade8` LIKE '3.0' OR `grade8` LIKE '3.00' OR `grade8` LIKE '4.00' OR `grade8` LIKE '4.0' OR `grade8` LIKE '5.00' OR `grade8` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade8'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;

    const iiii=
    <?php
      $query = "SELECT grade9 FROM `midyearis` WHERE `grade9` LIKE '1.0' OR `grade9` LIKE '1.00' OR `grade9` LIKE '1.25' OR `grade9` LIKE '1.50' OR `grade9` LIKE '1.75' OR `grade9` LIKE '2.0' OR `grade9` LIKE '2.00' OR `grade9` LIKE '2.25'  OR `grade9` LIKE '2.50'  OR `grade9` LIKE '2.75'  OR `grade9` LIKE '3.0' OR `grade9` LIKE '3.00' OR `grade9` LIKE '4.00' OR `grade9` LIKE '4.0' OR `grade9` LIKE '5.00' OR `grade9` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade9'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;


    const jjjj=
    <?php
      $query = "SELECT grade10 FROM `midyearis` WHERE `grade10` LIKE '1.0' OR `grade10` LIKE '1.00' OR `grade10` LIKE '1.25' OR `grade10` LIKE '1.50' OR `grade10` LIKE '1.75' OR `grade10` LIKE '2.0' OR `grade10` LIKE '2.00' OR `grade10` LIKE '2.25'  OR `grade10` LIKE '2.50'  OR `grade10` LIKE '2.75'  OR `grade10` LIKE '3.0' OR `grade10` LIKE '3.00' OR `grade10` LIKE '4.00' OR `grade10` LIKE '4.0' OR `grade10` LIKE '5.00' OR `grade10` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade10'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>;

    const aaaa1=
    parseInt(
    <?php
      $query = "SELECT units FROM `midyearis` WHERE `units` LIKE '1' OR `units` LIKE '2' OR `units` LIKE '3' OR `units` LIKE '4' OR `units` LIKE '5' OR `units` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );

    const bbbb1=
    parseInt(
    <?php
      $query = "SELECT units2 FROM `midyearis` WHERE `units2` LIKE '1' OR `units2` LIKE '2' OR `units2` LIKE '3' OR `units2` LIKE '4' OR `units2` LIKE '5' OR `units2` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units2'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const cccc1=
    parseInt(
    <?php
      $query = "SELECT units3 FROM `midyearis` WHERE `units3` LIKE '1' OR `units3` LIKE '2' OR `units3` LIKE '3' OR `units3` LIKE '4' OR `units3` LIKE '5' OR `units3` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units3'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const dddd1=
    parseInt(
    <?php
      $query = "SELECT units4 FROM `midyearis` WHERE `units4` LIKE '1' OR `units4` LIKE '2' OR `units4` LIKE '3' OR `units4` LIKE '4' OR `units4` LIKE '5' OR `units4` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units4'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const eeee1=
    parseInt(
    <?php
      $query = "SELECT units5 FROM `midyearis` WHERE `units5` LIKE '1' OR `units5` LIKE '2' OR `units5` LIKE '3' OR `units5` LIKE '4' OR `units5` LIKE '5' OR `units5` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units5'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const ffff1=
    parseInt(
    <?php
      $query = "SELECT units6 FROM `midyearis` WHERE `units6` LIKE '1' OR `units6` LIKE '2' OR `units6` LIKE '3' OR `units6` LIKE '4' OR `units6` LIKE '5' OR `units6` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units6'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const gggg1=
    parseInt(
    <?php
      $query = "SELECT units7 FROM `midyearis` WHERE `units7` LIKE '1' OR `units7` LIKE '2' OR `units7` LIKE '3' OR `units7` LIKE '4' OR `units7` LIKE '5' OR `units7` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units7'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const hhhh1=
    parseInt(
    <?php
      $query = "SELECT units8 FROM `midyearis` WHERE `units8` LIKE '1' OR `units8` LIKE '2' OR `units8` LIKE '3' OR `units8` LIKE '4' OR `units8` LIKE '5' OR `units8` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units8'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const iiii1=
    parseInt(
    <?php
      $query = "SELECT units9 FROM `midyearis` WHERE `units9` LIKE '1' OR `units9` LIKE '2' OR `units9` LIKE '3' OR `units9` LIKE '4' OR `units9` LIKE '5' OR `units9` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units9'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const jjjj1=
    parseInt(
    <?php
      $query = "SELECT units10 FROM `midyearis` WHERE `units10` LIKE '1' OR `units10` LIKE '2' OR `units10` LIKE '3' OR `units10` LIKE '4' OR `units10` LIKE '5' OR `units10` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units10'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );



    var units7=(aaaa1+bbbb1+cccc1+dddd1+eeee1+ffff1+gggg1+hhhh1+iiii1+jjjj1);
    var grade7=(aaaa+bbbb+cccc+dddd+eeee+ffff+gggg+hhhh+iiii+jjjj);
    var total61=(aaaa+aaaa1);
    var total62=(bbbb+bbbb1);
    var total63=(cccc+cccc1);
    var total64=(dddd+dddd1);
    var total65=(eeee+eeee1);
    var total66=(ffff+ffff1);
    var total67=(gggg+gggg1);
    var total68=(hhhh+hhhh1);
    var total69=(iiii+iiii1);
    var total70=(jjjj+jjjj1);



  document.getElementById('sum61').innerHTML=total61;
  document.getElementById('sum62').innerHTML=total62;
  document.getElementById('sum63').innerHTML=total63;
  document.getElementById('sum64').innerHTML=total64;
  document.getElementById('sum65').innerHTML=total65;
  document.getElementById('sum66').innerHTML=total66;
  document.getElementById('sum67').innerHTML=total67;
  document.getElementById('sum68').innerHTML=total68;
  document.getElementById('sum69').innerHTML=total69;
  document.getElementById('sum70').innerHTML=total70;

  var avg7=((total61+total62+total63+total64+total65+total66+total67+total68+total69+total70)/units7).toFixed(2);
  document.getElementById('avg7').innerHTML=avg7;

  document.getElementById('genavg4').innerHTML=avg7;

  if(avg7 < 1.76){
      document.getElementById('genavg4').style.backgroundColor="green";
      document.getElementById('genavg4').style.color="white";
    }else{
      document.getElementById('genavg4').style.backgroundColor="red";
      document.getElementById('genavg4').style.color="white";
    }




























































  const aaaaa=
    <?php
      $query = "SELECT grade FROM `fourthyearis` WHERE `grade` LIKE '1.0' OR `grade` LIKE '1.00' OR `grade` LIKE '1.25' OR `grade` LIKE '1.50' OR `grade` LIKE '1.75' OR `grade` LIKE '2.0' OR `grade` LIKE '2.00' OR `grade` LIKE '2.25'  OR `grade` LIKE '2.50'  OR `grade` LIKE '2.75'  OR `grade` LIKE '3.0' OR `grade` LIKE '3.00' OR `grade` LIKE '4.00' OR `grade` LIKE '4.0' OR `grade` LIKE '5.00' OR `grade` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;


    const bbbbb=
    <?php
      $query = "SELECT grade2 FROM `fourthyearis` WHERE `grade2` LIKE '1.0' OR `grade2` LIKE '1.00' OR `grade2` LIKE '1.25' OR `grade2` LIKE '1.50' OR `grade2` LIKE '1.75' OR `grade2` LIKE '2.0' OR `grade2` LIKE '2.00' OR `grade2` LIKE '2.25'  OR `grade2` LIKE '2.50'  OR `grade2` LIKE '2.75'  OR `grade2` LIKE '3.0' OR `grade2` LIKE '3.00' OR `grade2` LIKE '4.00' OR `grade2` LIKE '4.0' OR `grade2` LIKE '5.00' OR `grade2` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade2'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;

    const ccccc=
    <?php
      $query = "SELECT grade3 FROM `fourthyearis` WHERE `grade3` LIKE '1.0' OR `grade3` LIKE '1.00' OR `grade3` LIKE '1.25' OR `grade3` LIKE '1.50' OR `grade3` LIKE '1.75' OR `grade3` LIKE '2.0' OR `grade3` LIKE '2.00' OR `grade3` LIKE '2.25'  OR `grade3` LIKE '2.50'  OR `grade3` LIKE '2.75'  OR `grade3` LIKE '3.0' OR `grade3` LIKE '3.00' OR `grade3` LIKE '4.00' OR `grade3` LIKE '4.0' OR `grade3` LIKE '5.00' OR `grade3` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade3'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;

    const ddddd=
    <?php
      $query = "SELECT grade4 FROM `fourthyearis` WHERE `grade4` LIKE '1.0' OR `grade4` LIKE '1.00' OR `grade4` LIKE '1.25' OR `grade4` LIKE '1.50' OR `grade4` LIKE '1.75' OR `grade4` LIKE '2.0' OR `grade4` LIKE '2.00' OR `grade4` LIKE '2.25'  OR `grade4` LIKE '2.50'  OR `grade4` LIKE '2.75'  OR `grade4` LIKE '3.0' OR `grade4` LIKE '3.00' OR `grade4` LIKE '4.00' OR `grade4` LIKE '4.0' OR `grade4` LIKE '5.00' OR `grade4` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade4'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;


    const eeeee=
    <?php
      $query = "SELECT grade5 FROM `fourthyearis` WHERE `grade5` LIKE '1.0' OR `grade5` LIKE '1.00' OR `grade5` LIKE '1.25' OR `grade5` LIKE '1.50' OR `grade5` LIKE '1.75' OR `grade5` LIKE '2.0' OR `grade5` LIKE '2.00' OR `grade5` LIKE '2.25'  OR `grade5` LIKE '2.50'  OR `grade5` LIKE '2.75'  OR `grade5` LIKE '3.0' OR `grade5` LIKE '3.00' OR `grade5` LIKE '4.00' OR `grade5` LIKE '4.0' OR `grade5` LIKE '5.00' OR `grade5` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade5'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;


    const fffff=
    <?php
      $query = "SELECT grade6 FROM `fourthyearis` WHERE `grade6` LIKE '1.0' OR `grade6` LIKE '1.00' OR `grade6` LIKE '1.25' OR `grade6` LIKE '1.50' OR `grade6` LIKE '1.75' OR `grade6` LIKE '2.0' OR `grade6` LIKE '2.00' OR `grade6` LIKE '2.25'  OR `grade6` LIKE '2.50'  OR `grade6` LIKE '2.75'  OR `grade6` LIKE '3.0' OR `grade6` LIKE '3.00' OR `grade6` LIKE '4.00' OR `grade6` LIKE '4.0' OR `grade6` LIKE '5.00' OR `grade6` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade6'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;


    const ggggg=
    <?php
      $query = "SELECT grade7 FROM `fourthyearis` WHERE `grade7` LIKE '1.0' OR `grade7` LIKE '1.00' OR `grade7` LIKE '1.25' OR `grade7` LIKE '1.50' OR `grade7` LIKE '1.75' OR `grade7` LIKE '2.0' OR `grade7` LIKE '2.00' OR `grade7` LIKE '2.25'  OR `grade7` LIKE '2.50'  OR `grade7` LIKE '2.75'  OR `grade7` LIKE '3.0' OR `grade7` LIKE '3.00' OR `grade7` LIKE '4.00' OR `grade7` LIKE '4.0' OR `grade7` LIKE '5.00' OR `grade7` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade7'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;


    const hhhhh=
    <?php
      $query = "SELECT grade8 FROM `fourthyearis` WHERE `grade8` LIKE '1.0' OR `grade8` LIKE '1.00' OR `grade8` LIKE '1.25' OR `grade8` LIKE '1.50' OR `grade8` LIKE '1.75' OR `grade8` LIKE '2.0' OR `grade8` LIKE '2.00' OR `grade8` LIKE '2.25'  OR `grade8` LIKE '2.50'  OR `grade8` LIKE '2.75'  OR `grade8` LIKE '3.0' OR `grade8` LIKE '3.00' OR `grade8` LIKE '4.00' OR `grade8` LIKE '4.0' OR `grade8` LIKE '5.00' OR `grade8` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade8'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;

    const iiiii=
    <?php
      $query = "SELECT grade9 FROM `fourthyearis` WHERE `grade9` LIKE '1.0' OR `grade9` LIKE '1.00' OR `grade9` LIKE '1.25' OR `grade9` LIKE '1.50' OR `grade9` LIKE '1.75' OR `grade9` LIKE '2.0' OR `grade9` LIKE '2.00' OR `grade9` LIKE '2.25'  OR `grade9` LIKE '2.50'  OR `grade9` LIKE '2.75'  OR `grade9` LIKE '3.0' OR `grade9` LIKE '3.00' OR `grade9` LIKE '4.00' OR `grade9` LIKE '4.0' OR `grade9` LIKE '5.00' OR `grade9` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade9'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;


    const jjjjj=
    <?php
      $query = "SELECT grade10 FROM `fourthyearis` WHERE `grade10` LIKE '1.0' OR `grade10` LIKE '1.00' OR `grade10` LIKE '1.25' OR `grade10` LIKE '1.50' OR `grade10` LIKE '1.75' OR `grade10` LIKE '2.0' OR `grade10` LIKE '2.00' OR `grade10` LIKE '2.25'  OR `grade10` LIKE '2.50'  OR `grade10` LIKE '2.75'  OR `grade10` LIKE '3.0' OR `grade10` LIKE '3.00' OR `grade10` LIKE '4.00' OR `grade10` LIKE '4.0' OR `grade10` LIKE '5.00' OR `grade10` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade10'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>;

    const aaaaa1=
    parseInt(
    <?php
      $query = "SELECT units FROM `fourthyearis` WHERE `units` LIKE '1' OR `units` LIKE '2' OR `units` LIKE '3' OR `units` LIKE '4' OR `units` LIKE '5' OR `units` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );

    const bbbbb1=
    parseInt(
    <?php
      $query = "SELECT units2 FROM `fourthyearis` WHERE `units2` LIKE '1' OR `units2` LIKE '2' OR `units2` LIKE '3' OR `units2` LIKE '4' OR `units2` LIKE '5' OR `units2` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units2'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const ccccc1=
    parseInt(
    <?php
      $query = "SELECT units3 FROM `fourthyearis` WHERE `units3` LIKE '1' OR `units3` LIKE '2' OR `units3` LIKE '3' OR `units3` LIKE '4' OR `units3` LIKE '5' OR `units3` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units3'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const ddddd1=
    parseInt(
    <?php
      $query = "SELECT units4 FROM `fourthyearis` WHERE `units4` LIKE '1' OR `units4` LIKE '2' OR `units4` LIKE '3' OR `units4` LIKE '4' OR `units4` LIKE '5' OR `units4` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units4'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const eeeee1=
    parseInt(
    <?php
      $query = "SELECT units5 FROM `fourthyearis` WHERE `units5` LIKE '1' OR `units5` LIKE '2' OR `units5` LIKE '3' OR `units5` LIKE '4' OR `units5` LIKE '5' OR `units5` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units5'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const fffff1=
    parseInt(
    <?php
      $query = "SELECT units6 FROM `fourthyearis` WHERE `units6` LIKE '1' OR `units6` LIKE '2' OR `units6` LIKE '3' OR `units6` LIKE '4' OR `units6` LIKE '5' OR `units6` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units6'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const ggggg1=
    parseInt(
    <?php
      $query = "SELECT units7 FROM `fourthyearis` WHERE `units7` LIKE '1' OR `units7` LIKE '2' OR `units7` LIKE '3' OR `units7` LIKE '4' OR `units7` LIKE '5' OR `units7` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units7'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const hhhhh1=
    parseInt(
    <?php
      $query = "SELECT units8 FROM `fourthyearis` WHERE `units8` LIKE '1' OR `units8` LIKE '2' OR `units8` LIKE '3' OR `units8` LIKE '4' OR `units8` LIKE '5' OR `units8` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units8'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const iiiii1=
    parseInt(
    <?php
      $query = "SELECT units9 FROM `fourthyearis` WHERE `units9` LIKE '1' OR `units9` LIKE '2' OR `units9` LIKE '3' OR `units9` LIKE '4' OR `units9` LIKE '5' OR `units9` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units9'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const jjjjj1=
    parseInt(
    <?php
      $query = "SELECT units10 FROM `fourthyearis` WHERE `units10` LIKE '1' OR `units10` LIKE '2' OR `units10` LIKE '3' OR `units10` LIKE '4' OR `units10` LIKE '5' OR `units10` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units10'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );



    var units8=(aaaaa1+bbbbb1+ccccc1+ddddd1+eeeee1+fffff1+ggggg1+hhhhh1+iiiii1+jjjjj1);
    var grade8=(aaaaa+bbbbb+ccccc+ddddd+eeeee+fffff+ggggg+hhhhh+iiiii+jjjjj);
    var total71=(aaaaa+aaaaa1);
    var total72=(bbbbb+bbbbb1);
    var total73=(ccccc+ccccc1);
    var total74=(ddddd+ddddd1);
    var total75=(eeeee+eeeee1);
    var total76=(fffff+fffff1);
    var total77=(ggggg+ggggg1);
    var total78=(hhhhh+hhhhh1);
    var total79=(iiiii+iiiii1);
    var total80=(jjjjj+jjjjj1);



  document.getElementById('sum71').innerHTML=total71;
  document.getElementById('sum72').innerHTML=total72;
  document.getElementById('sum73').innerHTML=total73;
  document.getElementById('sum74').innerHTML=total74;
  document.getElementById('sum75').innerHTML=total75;
  document.getElementById('sum76').innerHTML=total76;
  document.getElementById('sum77').innerHTML=total77;
  document.getElementById('sum78').innerHTML=total78;
  document.getElementById('sum79').innerHTML=total79;
  document.getElementById('sum80').innerHTML=total80;

  var avg8=((total71+total72+total73+total74+total75+total76+total77+total78+total79+total80)/units8).toFixed(2);
  document.getElementById('avg8').innerHTML=avg8;






































  const kkkkk=
    <?php
      $query = "SELECT grade11 FROM `fourthyearis` WHERE `grade11` LIKE '1.0' OR `grade11` LIKE '1.00' OR `grade11` LIKE '1.25' OR `grade11` LIKE '1.50' OR `grade11` LIKE '1.75' OR `grade11` LIKE '2.0' OR `grade11` LIKE '2.00' OR `grade11` LIKE '2.25'  OR `grade11` LIKE '2.50'  OR `grade11` LIKE '2.75'  OR `grade11` LIKE '3.0' OR `grade11` LIKE '3.00' OR `grade11` LIKE '4.00' OR `grade11` LIKE '4.0' OR `grade11` LIKE '5.00' OR `grade11` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade11'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;


    const lllll=
    <?php
      $query = "SELECT grade12 FROM `fourthyearis` WHERE `grade12` LIKE '1.0' OR `grade12` LIKE '1.00' OR `grade12` LIKE '1.25' OR `grade12` LIKE '1.50' OR `grade12` LIKE '1.75' OR `grade12` LIKE '2.0' OR `grade12` LIKE '2.00' OR `grade12` LIKE '2.25'  OR `grade12` LIKE '2.50'  OR `grade12` LIKE '2.75'  OR `grade12` LIKE '3.0' OR `grade12` LIKE '3.00' OR `grade12` LIKE '4.00' OR `grade12` LIKE '4.0' OR `grade12` LIKE '5.00' OR `grade12` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade12'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;

    const mmmmm=
    <?php
      $query = "SELECT grade13 FROM `fourthyearis` WHERE `grade13` LIKE '1.0' OR `grade13` LIKE '1.00' OR `grade13` LIKE '1.25' OR `grade13` LIKE '1.50' OR `grade13` LIKE '1.75' OR `grade13` LIKE '2.0' OR `grade13` LIKE '2.00' OR `grade13` LIKE '2.25'  OR `grade13` LIKE '2.50'  OR `grade13` LIKE '2.75'  OR `grade13` LIKE '3.0' OR `grade13` LIKE '3.00' OR `grade13` LIKE '4.00' OR `grade13` LIKE '4.0' OR `grade13` LIKE '5.00' OR `grade13` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade13'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;

    const nnnnn=
    <?php
      $query = "SELECT grade14 FROM `fourthyearis` WHERE `grade14` LIKE '1.0' OR `grade14` LIKE '1.00' OR `grade14` LIKE '1.25' OR `grade14` LIKE '1.50' OR `grade14` LIKE '1.75' OR `grade14` LIKE '2.0' OR `grade14` LIKE '2.00' OR `grade14` LIKE '2.25'  OR `grade14` LIKE '2.50'  OR `grade14` LIKE '2.75'  OR `grade14` LIKE '3.0' OR `grade14` LIKE '3.00' OR `grade14` LIKE '4.00' OR `grade14` LIKE '4.0' OR `grade14` LIKE '5.00' OR `grade14` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade14'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;


    const ooooo=
    <?php
      $query = "SELECT grade15 FROM `fourthyearis` WHERE `grade15` LIKE '1.0' OR `grade15` LIKE '1.00' OR `grade15` LIKE '1.25' OR `grade15` LIKE '1.50' OR `grade15` LIKE '1.75' OR `grade15` LIKE '2.0' OR `grade15` LIKE '2.00' OR `grade15` LIKE '2.25'  OR `grade15` LIKE '2.50'  OR `grade15` LIKE '2.75'  OR `grade15` LIKE '3.0' OR `grade15` LIKE '3.00' OR `grade15` LIKE '4.00' OR `grade15` LIKE '4.0' OR `grade15` LIKE '5.00' OR `grade15` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade15'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;


    const ppppp=
    <?php
      $query = "SELECT grade16 FROM `fourthyearis` WHERE `grade16` LIKE '1.0' OR `grade16` LIKE '1.00' OR `grade16` LIKE '1.25' OR `grade16` LIKE '1.50' OR `grade16` LIKE '1.75' OR `grade16` LIKE '2.0' OR `grade16` LIKE '2.00' OR `grade16` LIKE '2.25'  OR `grade16` LIKE '2.50'  OR `grade16` LIKE '2.75'  OR `grade16` LIKE '3.0' OR `grade16` LIKE '3.00' OR `grade16` LIKE '4.00' OR `grade16` LIKE '4.0' OR `grade16` LIKE '5.00' OR `grade16` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade16'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;


    const qqqqq=
    <?php
      $query = "SELECT grade17 FROM `fourthyearis` WHERE `grade17` LIKE '1.0' OR `grade17` LIKE '1.00' OR `grade17` LIKE '1.25' OR `grade17` LIKE '1.50' OR `grade17` LIKE '1.75' OR `grade17` LIKE '2.0' OR `grade17` LIKE '2.00' OR `grade17` LIKE '2.25'  OR `grade17` LIKE '2.50'  OR `grade17` LIKE '2.75'  OR `grade17` LIKE '3.0' OR `grade17` LIKE '3.00' OR `grade17` LIKE '4.00' OR `grade17` LIKE '4.0' OR `grade17` LIKE '5.00' OR `grade17` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade17'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;


    const rrrrr=
    <?php
      $query = "SELECT grade18 FROM `fourthyearis` WHERE `grade18` LIKE '1.0' OR `grade18` LIKE '1.00' OR `grade18` LIKE '1.25' OR `grade18` LIKE '1.50' OR `grade18` LIKE '1.75' OR `grade18` LIKE '2.0' OR `grade18` LIKE '2.00' OR `grade18` LIKE '2.25'  OR `grade18` LIKE '2.50'  OR `grade18` LIKE '2.75'  OR `grade18` LIKE '3.0' OR `grade18` LIKE '3.00' OR `grade18` LIKE '4.00' OR `grade18` LIKE '4.0' OR `grade18` LIKE '5.00' OR `grade18` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade18'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;

    const sssss=
    <?php
      $query = "SELECT grade19 FROM `fourthyearis` WHERE `grade19` LIKE '1.0' OR `grade19` LIKE '1.00' OR `grade19` LIKE '1.25' OR `grade19` LIKE '1.50' OR `grade19` LIKE '1.75' OR `grade19` LIKE '2.0' OR `grade19` LIKE '2.00' OR `grade19` LIKE '2.25'  OR `grade19` LIKE '2.50'  OR `grade19` LIKE '2.75'  OR `grade19` LIKE '3.0' OR `grade19` LIKE '3.00' OR `grade19` LIKE '4.00' OR `grade19` LIKE '4.0' OR `grade19` LIKE '5.00' OR `grade19` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade19'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      ;


    const ttttt=
    <?php
      $query = "SELECT grade20 FROM `fourthyearis` WHERE `grade20` LIKE '1.0' OR `grade20` LIKE '1.00' OR `grade20` LIKE '1.25' OR `grade20` LIKE '1.50' OR `grade20` LIKE '1.75' OR `grade20` LIKE '2.0' OR `grade20` LIKE '2.00' OR `grade20` LIKE '2.25'  OR `grade20` LIKE '2.50'  OR `grade20` LIKE '2.75'  OR `grade20` LIKE '3.0' OR `grade20` LIKE '3.00' OR `grade20` LIKE '4.00' OR `grade20` LIKE '4.0' OR `grade20` LIKE '5.00' OR `grade20` LIKE '5.0'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['grade20'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>;

    const kkkkk1=
    parseInt(
    <?php
      $query = "SELECT units11 FROM `fourthyearis` WHERE `units11` LIKE '1' OR `units11` LIKE '2' OR `units11` LIKE '3' OR `units11` LIKE '4' OR `units11` LIKE '5' OR `units11` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units11'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );

    const lllll1=
    parseInt(
    <?php
      $query = "SELECT units12 FROM `fourthyearis` WHERE `units12` LIKE '1' OR `units12` LIKE '2' OR `units12` LIKE '3' OR `units12` LIKE '4' OR `units12` LIKE '5' OR `units12` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units12'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const mmmmm1=
    parseInt(
    <?php
      $query = "SELECT units13 FROM `fourthyearis` WHERE `units13` LIKE '1' OR `units13` LIKE '2' OR `units13` LIKE '3' OR `units13` LIKE '4' OR `units13` LIKE '5' OR `units13` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units13'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const nnnnn1=
    parseInt(
    <?php
      $query = "SELECT units14 FROM `fourthyearis` WHERE `units14` LIKE '1' OR `units14` LIKE '2' OR `units14` LIKE '3' OR `units14` LIKE '4' OR `units14` LIKE '5' OR `units14` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units14'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const ooooo1=
    parseInt(
    <?php
      $query = "SELECT units15 FROM `fourthyearis` WHERE `units15` LIKE '1' OR `units15` LIKE '2' OR `units15` LIKE '3' OR `units15` LIKE '4' OR `units15` LIKE '5' OR `units15` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units15'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const ppppp1=
    parseInt(
    <?php
      $query = "SELECT units16 FROM `fourthyearis` WHERE `units16` LIKE '1' OR `units16` LIKE '2' OR `units16` LIKE '3' OR `units16` LIKE '4' OR `units16` LIKE '5' OR `units16` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units16'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const qqqqq1=
    parseInt(
    <?php
      $query = "SELECT units17 FROM `fourthyearis` WHERE `units17` LIKE '1' OR `units17` LIKE '2' OR `units17` LIKE '3' OR `units17` LIKE '4' OR `units17` LIKE '5' OR `units17` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units17'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const rrrrr1=
    parseInt(
    <?php
      $query = "SELECT units18 FROM `fourthyearis` WHERE `units18` LIKE '1' OR `units18` LIKE '2' OR `units18` LIKE '3' OR `units18` LIKE '4' OR `units18` LIKE '5' OR `units18` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units18'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const sssss1=
    parseInt(
    <?php
      $query = "SELECT units19 FROM `fourthyearis` WHERE `units19` LIKE '1' OR `units19` LIKE '2' OR `units19` LIKE '3' OR `units19` LIKE '4' OR `units19` LIKE '5' OR `units19` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units19'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );


    const ttttt1=
    parseInt(
    <?php
      $query = "SELECT units20 FROM `fourthyearis` WHERE `units20` LIKE '1' OR `units20` LIKE '2' OR `units20` LIKE '3' OR `units20` LIKE '4' OR `units20` LIKE '5' OR `units20` LIKE '6'";
        $results = mysqli_query($link,$query);

        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
        ?>
                <?php echo $result['units20'];?>
                <?php
      }
      } else {
            echo '0';
        ?>
      <?php } ?>
      );



    var units9=(kkkkk1+lllll1+mmmmm1+nnnnn1+ooooo1+ppppp1+qqqqq1+rrrrr1+sssss1+ttttt1);
    var grade9=(kkkkk+lllll+mmmmm+nnnnn+ooooo+ppppp+qqqqq+rrrrr+sssss+ttttt);
    var total81=(kkkkk+kkkkk1);
    var total82=(lllll+lllll1);
    var total83=(mmmmm+mmmmm1);
    var total84=(nnnnn+nnnnn1);
    var total85=(ooooo+ooooo1);
    var total86=(ppppp+ppppp1);
    var total87=(qqqqq+qqqqq1);
    var total88=(rrrrr+rrrrr1);
    var total89=(sssss+sssss1);
    var total90=(ttttt+ttttt1);



  document.getElementById('sum81').innerHTML=total81;
  document.getElementById('sum82').innerHTML=total82;
  document.getElementById('sum83').innerHTML=total83;
  document.getElementById('sum84').innerHTML=total84;
  document.getElementById('sum85').innerHTML=total85;
  document.getElementById('sum86').innerHTML=total86;
  document.getElementById('sum87').innerHTML=total87;
  document.getElementById('sum88').innerHTML=total88;
  document.getElementById('sum89').innerHTML=total89;
  document.getElementById('sum90').innerHTML=total90;

  var avg9=((total81+total82+total83+total84+total85+total86+total87+total88+total89+total90)/units9).toFixed(2);
  document.getElementById('avg9').innerHTML=avg9;



  var addunits5=(units8+units9);
  var genavg5=((total71+total72+total73+total74+total75+total76+total77+total78+total79+total80+total81+total82+total83+total84+total85+total86+total87+total88+total89+total90)/addunits5).toFixed(2);




    document.getElementById('genavg5').innerHTML=genavg5;

    if(genavg5 < 1.76){
      document.getElementById('genavg5').style.backgroundColor="green";
      document.getElementById('genavg5').style.color="white";
    }else{
      document.getElementById('genavg5').style.backgroundColor="red";
      document.getElementById('genavg5').style.color="white";
    }
</script>


  </body>
</html>
