<?php
include 'conn.php';
$id=$_GET['id'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add Grades</title>
    <style>
        *{
          margin:0;
          padding:0;
        }
        body{
          margin:0;
          padding:0;
          background: black;
          font-family: arial black;
          font-size: 15px;
        }
        .login-box{
          max-width: 70%;
          float:none;
          margin: 70px auto;
        }
        .login-up{
          background: white;
          padding:10px;
          border-radius:18px;
        }
        .form-control{
          background-color: transparent !important;
        }
        .form-group input{
          text-align: center;
          border: none;
          border-style: solid;
          border: 1px solid black;
          border-left-color: white;
          border-right-color: white;
          border-top-color: white;
          padding: 10px;
          margin-left: 20px;
          margin-right: 20px;
          font-size: 20px;
          font-family: arial;
        }
        .form-group input:focus{
          outline: none;
        }
        button{
          font-size: 23px;
          color:white;
          background-color:black;
          font-family: serif;
          height:40px;
          width: 350px;
          box-shadow: 0 30px 70px rgba(0,0,0,.4);
          border:none;
          border-radius:30px;
        }
        button:hover{
          box-shadow: 0 20px 50px rgba(0,0,0,.9);
          background-color:red;
          transform:scale(.95);
          color:yellow;
        }
        #b4{
          font-size: 18px;
          font-weight: bold;
          color:white;
          background-color:blue;
          font-family: serif;
          height:40px;
          width: 350px;
          box-shadow: 0 30px 70px rgba(0,0,0,.4);
          border:none;
          border-radius:30px;
          margin-top: 20px;
        }
      #b4:hover{
          box-shadow: 0 20px 50px rgba(0,0,0,.9);
          background-color:red;
          transform:scale(.95);
          color:yellow;
        }
    </style>
  </head>
  <body>

    <form action="upitaddgrade.php" method="POST">
    <div class="container">
      <div class="login-box">
      <div class="row">
        <div class="col-md-6 login-up">
          <center><img src="images/logo.png" style="width:10%;height:10%;"></img><br>
        <h4>Republic of the Phillipines</h4><br>
        <h3>ILOCOS SUR POLYTECHNIC STATE COLLEGE</h3><br>
        <h4>Sta.Maria, 2705 Ilocos Sur</h4><br>
        <h2>REPORTS OF GRADES</h2><br>


            <?php
            $query = "SELECT * FROM `itgrade` WHERE `id`= '$id'";
            $results = mysqli_query($link,$query);
            $result= mysqli_fetch_array($results);
            ?>

            <div class="form-group">

              <input type="hidden" value="<?php echo $id; ?>" name ="id">
            </div><br>



              <div class="form-group">
                <input name="sem" value ="<?php echo $result['sem'];?>" style="width:60px;"></input> Semester, AY <input name="AY" value ="<?php echo $result['AY'];?>" style="width:120px;"></input>


          <table style="width: 97%">
              <tr>
                <td style="width:62%;">Name: <i><input name="name" value ="<?php echo $result['name'];?>"></input></i></td>
                <td style="width:85%;">Student ID Number: <i><input name="studentid" value ="<?php echo $result['studentid'];?>" style="width:105px;"></input></i></td>
              </tr>
                <td style="width:40%;">Course: <i><input name="course" value ="<?php echo $result['course'];?>" style="width:150px;"></input></i></td>
                <td>Year & Section: <i><input name="section" value ="<?php echo $result['section'];?>"style="width:105px;"></input></i></td>
          </table><br><br><br>







    <table style="width:100%;">
      <tr>
          <th style="width:50%; font-family: cooper black;">Subjects</th>
          <th style=" font-family: cooper black;">Final Grades</th>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub1" value ="<?php echo $result['sub1'];?>" style="border:none; font-family:arial black;"></input></td>
          <td><input name="grade1" value ="<?php echo $result['grade1'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub2" value ="<?php echo $result['sub2'];?>" style="border:none; font-family:arial black;"></input></td>
          <td><input name="grade2" value ="<?php echo $result['grade2'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub3" value ="<?php echo $result['sub3'];?>" style="border:none; font-family:arial black;"></input></td>
          <td><input name="grade3" value ="<?php echo $result['grade3'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub4" value ="<?php echo $result['sub4'];?>" style="border:none; font-family:arial black;"></input></td>
          <td><input name="grade4" value ="<?php echo $result['grade4'];?>" style="font-family:arial; width:20%;"></input>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub5" value ="<?php echo $result['sub5'];?>" style="border:none; font-family:arial black;"></input></td>
          <td><input name="grade5" value ="<?php echo $result['grade5'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub6" value ="<?php echo $result['sub6'];?>" style="border:none; font-family:arial black;"></input></td>
          <td><input name="grade6" value ="<?php echo $result['grade6'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub7" value ="<?php echo $result['sub7'];?>" style="border:none; font-family:arial black;"></input></td>
          <td><input name="grade7" value ="<?php echo $result['grade7'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub8" value ="<?php echo $result['sub8'];?>" style="border:none; font-family:arial black;"></input></td>
          <td><input name="grade8" value ="<?php echo $result['grade8'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub9" value ="<?php echo $result['sub9'];?>" style="border:none; font-family:arial black;"></input></td>
          <td><input name="grade9" value ="<?php echo $result['grade9'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub10" value ="<?php echo $result['sub10'];?>" style="border:none; font-family:arial black;"></input></td>
          <td><input name="grade10" value ="<?php echo $result['grade10'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
    </table><br><br>







      <input name="sem2" value ="<?php echo $result['sem2'];?>" style="width:60px;"></input> Semester, AY <input name="AY2" value ="<?php echo $result['AY2'];?>" style="width:120px;"></input> Year & Section: <input name="section2" value ="<?php echo $result['section2'];?>" style="width:120px;"><br><br>



      <table style="width:100%;">
      <tr>
          <th style="width:50%; font-family: cooper black;">Subjects</th>
          <th style=" font-family: cooper black;">Final Grades</th>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub11" value ="<?php echo $result['sub11'];?>" style="width: 130px;font-family:arial black;"></input></td>
          <td><input name="grade11" value ="<?php echo $result['grade11'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub12" value ="<?php echo $result['sub12'];?>" style="width: 130px;font-family:arial black;"></input></td>
          <td><input name="grade12" value ="<?php echo $result['grade12'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub13" value ="<?php echo $result['sub13'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade13" value ="<?php echo $result['grade13'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub14" value ="<?php echo $result['sub14'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade14" value ="<?php echo $result['grade14'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub15" value ="<?php echo $result['sub15'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade15" value ="<?php echo $result['grade15'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub16" value ="<?php echo $result['sub16'];?>" style="width: 130px;font-family:arial black;"></input></td>
          <td><input name="grade16" value ="<?php echo $result['grade16'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub17" value ="<?php echo $result['sub17'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade17" value ="<?php echo $result['grade17'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub18" value ="<?php echo $result['sub18'];?>" style="width: 130px;font-family:arial black;"></input></td>
          <td><input name="grade18" value ="<?php echo $result['grade18'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub19" value ="<?php echo $result['sub19'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade19" value ="<?php echo $result['grade19'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub20" value ="<?php echo $result['sub20'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade20" value ="<?php echo $result['grade20'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
    </table><br><br>









    <input name="sem3" value ="<?php echo $result['sem3'];?>" style="width:60px;"></input> Semester, AY <input name="AY3" value ="<?php echo $result['AY3'];?>" style="width:120px;"></input> Year & Section: <input name="section3" value ="<?php echo $result['section3'];?>" style="width:120px;"><br><br>



      <table style="width:100%;">
      <tr>
          <th style="width:50%; font-family: cooper black;">Subjects</th>
          <th style=" font-family: cooper black;">Final Grades</th>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub21" value ="<?php echo $result['sub21'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade21" value ="<?php echo $result['grade21'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub22" value ="<?php echo $result['sub22'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade22" value ="<?php echo $result['grade22'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub23" value ="<?php echo $result['sub23'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade23" value ="<?php echo $result['grade23'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub24" value ="<?php echo $result['sub24'];?>" style="width: 130px;font-family:arial black;"></input></td>
          <td><input name="grade24" value ="<?php echo $result['grade24'];?>" style="font-family:arial; width:20%;"></input>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub25" value ="<?php echo $result['sub25'];?>" style="width: 130px;font-family:arial black;"></input></td>
          <td><input name="grade25" value ="<?php echo $result['grade25'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub26" value ="<?php echo $result['sub26'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade26" value ="<?php echo $result['grade26'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub27" value ="<?php echo $result['sub27'];?>" style="width: 130px;font-family:arial black;"></input></td>
          <td><input name="grade27" value ="<?php echo $result['grade27'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub28" value ="<?php echo $result['sub28'];?>" style="width: 130px;font-family:arial black;"></input></td>
          <td><input name="grade28" value ="<?php echo $result['grade28'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub29" value ="<?php echo $result['sub29'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade29" value ="<?php echo $result['grade29'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub30" value ="<?php echo $result['sub30'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade30" value ="<?php echo $result['grade30'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
    </table><br><br>










    <input name="sem4" value ="<?php echo $result['sem4'];?>" style="width:60px;"></input> Semester, AY <input name="AY4" value ="<?php echo $result['AY4'];?>" style="width:120px;"></input> Year & Section: <input name="section4" value ="<?php echo $result['section4'];?>" style="width:120px;"><br><br>



      <table style="width:100%;">
      <tr>
          <th style="width:50%; font-family: cooper black;">Subjects</th>
          <th style=" font-family: cooper black;">Final Grades</th>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub31" value ="<?php echo $result['sub31'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade31" value ="<?php echo $result['grade31'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub32" value ="<?php echo $result['sub32'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade32" value ="<?php echo $result['grade32'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub33" value ="<?php echo $result['sub33'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade33" value ="<?php echo $result['grade33'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub34" value ="<?php echo $result['sub34'];?>" style="width: 130px;font-family:arial black;"></input></td>
          <td><input name="grade34" value ="<?php echo $result['grade34'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub35" value ="<?php echo $result['sub35'];?>" style="width: 130px;font-family:arial black;"></input></td>
          <td><input name="grade35" value ="<?php echo $result['grade35'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub36" value ="<?php echo $result['sub36'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade36" value ="<?php echo $result['grade36'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub37" value ="<?php echo $result['sub37'];?>" style="width: 130px;font-family:arial black;"></input></td>
          <td><input name="grade37" value ="<?php echo $result['grade37'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub38" value ="<?php echo $result['sub38'];?>" style="width: 130px;font-family:arial black;"></input></td>
          <td><input name="grade38" value ="<?php echo $result['grade38'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub39" value ="<?php echo $result['sub39'];?>" style="width: 130px;font-family:arial black;"></input></td>
          <td><input name="grade39" value ="<?php echo $result['grade39'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub40" value ="<?php echo $result['sub40'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade40" value ="<?php echo $result['grade40'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
    </table><br><br>





    <input name="sem5" value ="<?php echo $result['sem5'];?>" style="width:60px;"></input> Semester, AY <input name="AY5" value ="<?php echo $result['AY5'];?>" style="width:120px;"></input> Year & Section: <input name="section5" value ="<?php echo $result['section5'];?>" style="width:120px;"><br><br>



      <table style="width:100%;">
      <tr>
          <th style="width:50%; font-family: cooper black;">Subjects</th>
          <th style=" font-family: cooper black;">Final Grades</th>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub41" value ="<?php echo $result['sub41'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade41" value ="<?php echo $result['grade41'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub42" value ="<?php echo $result['sub42'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade42" value ="<?php echo $result['grade42'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub43" value ="<?php echo $result['sub43'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade43" value ="<?php echo $result['grade43'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub44" value ="<?php echo $result['sub44'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade44" value ="<?php echo $result['grade44'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub45" value ="<?php echo $result['sub45'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade45" value ="<?php echo $result['grade45'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub46" value ="<?php echo $result['sub46'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade46" value ="<?php echo $result['grade46'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub47" value ="<?php echo $result['sub47'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade47" value ="<?php echo $result['grade47'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub48" value ="<?php echo $result['sub48'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade48" value ="<?php echo $result['grade48'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub49" value ="<?php echo $result['sub49'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade49" value ="<?php echo $result['grade49'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub50" value ="<?php echo $result['sub50'];?>" style="width: 130px;font-family:arial black;"></input></td>
          <td><input name="grade50" value ="<?php echo $result['grade50'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
    </table><br><br>








    <input name="sem6" value ="<?php echo $result['sem6'];?>" style="width:60px;"></input> Semester, AY <input name="AY6" value ="<?php echo $result['AY6'];?>" style="width:120px;"></input> Year & Section: <input name="section6" value ="<?php echo $result['section6'];?>" style="width:120px;"><br><br>



      <table style="width:100%;">
      <tr>
          <th style="width:50%; font-family: cooper black;">Subjects</th>
          <th style=" font-family: cooper black;">Final Grades</th>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub51" value ="<?php echo $result['sub51'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade51" value ="<?php echo $result['grade51'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub52" value ="<?php echo $result['sub52'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade52" value ="<?php echo $result['grade52'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub53" value ="<?php echo $result['sub53'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade53" value ="<?php echo $result['grade53'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub54" value ="<?php echo $result['sub54'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade54" value ="<?php echo $result['grade54'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub55" value ="<?php echo $result['sub55'];?>" style="width: 130px;font-family:arial black;"></input></td>
          <td><input name="grade55" value ="<?php echo $result['grade55'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub56" value ="<?php echo $result['sub56'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade56" value ="<?php echo $result['grade56'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub57" value ="<?php echo $result['sub57'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade57" value ="<?php echo $result['grade57'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub58" value ="<?php echo $result['sub58'];?>" style="width: 130px;font-family:arial black;"></input></td>
          <td><input name="grade58" value ="<?php echo $result['grade58'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub59" value ="<?php echo $result['sub59'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade59" value ="<?php echo $result['grade59'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub60" value ="<?php echo $result['sub60'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade60" value ="<?php echo $result['grade60'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
    </table><br><br>





    <input name="sem7" value ="<?php echo $result['sem7'];?>" style="width:90px;"></input> Semester, AY <input name="AY7" value ="<?php echo $result['AY7'];?>" style="width:120px;"></input> Year & Section: <input name="section7" value ="<?php echo $result['section7'];?>" style="width:120px;"><br><br>



      <table style="width:100%;">
      <tr>
          <th style="width:50%; font-family: cooper black;">Subjects</th>
          <th style=" font-family: cooper black;">Final Grades</th>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub61" value ="<?php echo $result['sub61'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade61" value ="<?php echo $result['grade61'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub62" value ="<?php echo $result['sub62'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade62" value ="<?php echo $result['grade62'];?>" style="font-family:arial; width:20%;"></input>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub63" value ="<?php echo $result['sub63'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade63" value ="<?php echo $result['grade63'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub64" value ="<?php echo $result['sub64'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade64" value ="<?php echo $result['grade64'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub65" value ="<?php echo $result['sub65'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade65" value ="<?php echo $result['grade65'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub66" value ="<?php echo $result['sub66'];?>" style="width: 130px;font-family:arial black;"></input></td>
          <td><input name="grade66" value ="<?php echo $result['grade66'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub67" value ="<?php echo $result['sub67'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade67" value ="<?php echo $result['grade67'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub68" value ="<?php echo $result['sub68'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade68" value ="<?php echo $result['grade68'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub69" value ="<?php echo $result['sub69'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade69" value ="<?php echo $result['grade69'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub70" value ="<?php echo $result['sub70'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade70" value ="<?php echo $result['grade70'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
    </table><br><br>










    <input name="sem8" value ="<?php echo $result['sem8'];?>" style="width:60px;"></input> Semester, AY <input name="AY8" value ="<?php echo $result['AY8'];?>" style="width:120px;"></input> Year & Section: <input name="section8" value ="<?php echo $result['section8'];?>" style="width:120px;"><br><br>



      <table style="width:100%;">
      <tr>
          <th style="width:50%; font-family: cooper black;">Subjects</th>
          <th style=" font-family: cooper black;">Final Grades</th>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub71" value ="<?php echo $result['sub71'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade71" value ="<?php echo $result['grade71'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub72" value ="<?php echo $result['sub72'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade72" value ="<?php echo $result['grade72'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub73" value ="<?php echo $result['sub73'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade73" value ="<?php echo $result['grade73'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub74" value ="<?php echo $result['sub74'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade74" value ="<?php echo $result['grade74'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub75" value ="<?php echo $result['sub75'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade75" value ="<?php echo $result['grade75'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub76" value ="<?php echo $result['sub76'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade76" value ="<?php echo $result['grade76'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub77" value ="<?php echo $result['sub77'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade77" value ="<?php echo $result['grade77'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub78" value ="<?php echo $result['sub78'];?>" style="width: 130px;font-family:arial black;"></input></td>
          <td><input name="grade78" value ="<?php echo $result['grade78'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub79" value ="<?php echo $result['sub79'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade79" value ="<?php echo $result['grade79'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub80" value ="<?php echo $result['sub80'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade80" value ="<?php echo $result['grade80'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
    </table><br><br>















    <input name="sem9" value ="<?php echo $result['sem9'];?>" style="width:60px;"></input> Semester, AY <input name="AY9" value ="<?php echo $result['AY9'];?>" style="width:120px;"></input> Year & Section: <input name="section9" value ="<?php echo $result['section9'];?>" style="width:120px;"><br><br>



      <table style="width:100%;">
      <tr>
          <th style="width:50%; font-family: cooper black;">Subjects</th>
          <th style=" font-family: cooper black;">Final Grades</th>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub81" value ="<?php echo $result['sub81'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade81" value ="<?php echo $result['grade81'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub82" value ="<?php echo $result['sub82'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade82" value ="<?php echo $result['grade82'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub83" value ="<?php echo $result['sub83'];?>" style="width: 130px;font-family:arial black;"></input></td>
          <td><input name="grade83" value ="<?php echo $result['grade83'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub84" value ="<?php echo $result['sub84'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade84" value ="<?php echo $result['grade84'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub85" value ="<?php echo $result['sub85'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade85" value ="<?php echo $result['grade85'];?>" style="font-family:arial; width:20%;"></input>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub86" value ="<?php echo $result['sub86'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade86" value ="<?php echo $result['grade86'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub87" value ="<?php echo $result['sub87'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade87" value ="<?php echo $result['grade87'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub88" value ="<?php echo $result['sub88'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade88" value ="<?php echo $result['grade88'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub89" value ="<?php echo $result['sub89'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade89" value ="<?php echo $result['grade89'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr style="text-align: center;">
          <td><input name="sub90" value ="<?php echo $result['sub90'];?>" style="width: 130px; font-family:arial black;"></input></td>
          <td><input name="grade90" value ="<?php echo $result['grade90'];?>" style="font-family:arial; width:20%;"></input></td>
      </tr>
      <tr>
        <td><input type="hidden" name="acquire"></td>
      </tr>
    </table><br><br><br><br>








          </div><br><br>

              <center>
              <button type="submit">&#10004;</button><br><br><br><br><br><br>
              <a href="studentrogrecords.php" style="text-decoration:none; padding:10px; padding-left: 50px;padding-right: 50px;background:blue;
              color:white;width:50%; border-style: solid;border:1px solid blue;border-radius:5px;box-shadow: 1px 1px 15px black;">Back</a>
              </center><br><br><br>
          </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
