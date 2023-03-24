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
    <title>Student Portal</title>
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
    h1 {
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
    #bellbut{
      border: none;
      background: none;
      outline: none;
      cursor: pointer;
      color: white;
      animation: bellbut 5s linear infinite;
    }
    #bellbut1{
      border: none;
      background: none;
      outline: none;
      cursor: pointer;
      color: white;
      padding: 8px 20px;
      animation: bellbut 5s linear infinite;
    }
    @keyframes bellbut{
        0%{
            transform: rotateY(0);
        }50%{
            transform: rotateY(200deg);
        }100%{
            transform: rotateY(360deg);
        }
    }
    .notif{
      width: 350px;
      height: 70%;
      padding: 15px;
      background: white;
      color: black;
      font-weight: bold;
      font-family: arial;
      font-size: 20px;
      position: absolute;
      right: 0;
      top: 0;
      margin-top: 8%;
      margin-right: 2%;
      z-index: 2;
      text-align: justify;
      display: none;
      text-align: center;
      overflow: auto;
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
    }
    .notif table{
      width: 100%;
      border: none;
      animation: animateopen 0.5s;
    }
    @keyframes animateopen{
      from{
        opacity: 0;
        transform: translateY(-40px);
      }to{
        opacity: 1;
        transform: translateY(0);
      }
    }
    .notif table td{
      padding: 10px 0;
    }
    .notif table th{
      padding: 5px;
      background: skyblue;
    }
    .notif table tr:nth-child(even){
      background: rgba(0,0,0,0.1);
    }
    #button{
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
    #button1{
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
      margin-right: 15%;
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
    .notif2{
      width: 350px;
      height: 70%;
      padding: 15px;
      background: white;
      color: black;
      font-weight: bold;
      font-family: arial;
      font-size: 20px;
      position: absolute;
      right: 0;
      top: 0;
      margin-top: 8%;
      margin-right: 2%;
      z-index: 2;
      text-align: justify;
      display: none;
      text-align: center;
      overflow: auto;
    }
    .tp2{
      position: absolute;
      right: 0;
      top: 0;
      margin-top: 1%;
      margin-right: 14%;
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
    }
    .notif2 table{
      width: 100%;
      border: none;
      animation: animateopen 0.5s;
    }
    @keyframes animateopen{
      from{
        opacity: 0;
        transform: translateY(-40px);
      }to{
        opacity: 1;
        transform: translateY(0);
      }
    }
    .notif2 table td{
      padding: 10px 0;
    }
    .notif2 table th{
      padding: 5px;
      background: skyblue;
    }
    .notif2 table tr:nth-child(even){
      background: rgba(0,0,0,0.1);
    }
    </style>
  </head>
  <body>
    <div class="sidemenu">
      <img src="images/logo.png" id="img1"></img>
      <img src="images/ccs.jpg" id="img2"></img>
        <ul>
          <a href="studentportal.php"><li class="l1">Dashboard</li></a>
        </ul>
        <ul>
          <a href="studentgrade.php"><li class="l3">Your Grades</li></a>
        </ul>
        <ul>
          <a href="changepass.php"><li class="l3">Change Password</li></a>
        </ul>
      <a href="userlogout.php" class="lo">Log out</a>
    </div>



    <div id="button">
       <button onclick="view()" id="bellbut"> <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-bell-fill" viewBox="0 0 16 16">
        <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
        </svg></button>
    </div>


    <div id="button1">
       <button onclick="view_rem()" id="bellbut1">REMINDERS</button>
    </div>


  <div class="notif" id="notif">
  <table>
    <thead>
        <th>First Year IP's</th>
    </thead>
    <tbody>

    <?php
        $query = "SELECT * FROM `message1` WHERE `studentid`='$studentid'";
        $results=mysqli_query($link,$query);
        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
    ?>
            <tr>
                <td><?php echo $result['subject1'];?></td>
            </tr>
            <tr>
                <td><?php echo $result['subject2'];?></td>
            </tr>
            <tr>
                <td><?php echo $result['subject3'];?></td>
            </tr>
            <tr>
                <td><?php echo $result['subject4'];?></td>
            </tr>
            <tr>
                <td><?php echo $result['subject5'];?></td>
            </tr>
            <tr>
                <td><?php echo $result['subject6'];?></td>
            </tr>
            <tr>
                <td><?php echo $result['subject7'];?></td>
            </tr>
            <tr>
                <td><?php echo $result['subject8'];?></td>
            </tr>
            <tr>
                <td><?php echo $result['subject9'];?></td>
            </tr>
            <tr>
                <td><?php echo $result['subject10'];?></td>
            </tr>
            <?php
      }
      } else {
        ?>
        <tr>
          <td colspan="9"></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>









    <table>
    <thead>
        <th>Second Year IP's</th>
    </thead>
    <tbody>
      <?php
      $query = "SELECT * FROM `message2` WHERE `studentid`='$studentid'";
        $results=mysqli_query($link,$query);
        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
                ?>
            <tr>
                <td><?php echo $result['subject1'];?></td>
            </tr>
            <tr>
                <td><?php echo $result['subject2'];?></td>
            </tr>
            <tr>
                <td><?php echo $result['subject3'];?></td>
            </tr>
            <tr>
                <td><?php echo $result['subject4'];?></td>
            </tr>
            <tr>
                <td><?php echo $result['subject5'];?></td>
            </tr>
            <tr>
                <td><?php echo $result['subject6'];?></td>
            </tr>
            <tr>
                <td><?php echo $result['subject7'];?></td>
            </tr>
            <tr>
                <td><?php echo $result['subject8'];?></td>
            </tr>
            <tr>
                <td><?php echo $result['subject9'];?></td>
            </tr>
            <tr>
                <td><?php echo $result['subject10'];?></td>
            </tr>
            <?php
      }
      } else {
        ?>
        <tr>
          <td colspan="9"></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>








    <table>
    <thead>
        <th>Third Year IP's</th>
    </thead>
    <tbody>
      <?php
      $query = "SELECT * FROM `message3` WHERE `studentid`='$studentid'";
        $results=mysqli_query($link,$query);
        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
                ?>
            <tr>
                <td><?php echo $result['subject1'];?></td>
            </tr>
            <tr>
                <td><?php echo $result['subject2'];?></td>
            </tr>
            <tr>
                <td><?php echo $result['subject3'];?></td>
            </tr>
            <tr>
                <td><?php echo $result['subject4'];?></td>
            </tr>
            <tr>
                <td><?php echo $result['subject5'];?></td>
            </tr>
            <tr>
                <td><?php echo $result['subject6'];?></td>
            </tr>
            <tr>
                <td><?php echo $result['subject7'];?></td>
            </tr>
            <tr>
                <td><?php echo $result['subject8'];?></td>
            </tr>
            <tr>
                <td><?php echo $result['subject9'];?></td>
            </tr>
            <tr>
                <td><?php echo $result['subject10'];?></td>
            </tr>
            <?php
      }
      } else {
        ?>
        <tr>
          <td colspan="9"></td>
        </tr>
      <?php } ?>
    </tbody>
    </table>





    <table>
    <thead>
        <th>MID Year IP's</th>
    </thead>
    <tbody>
      <?php
      $query = "SELECT * FROM `message3_1` WHERE `studentid`='$studentid'";
        $results=mysqli_query($link,$query);
        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
                ?>
            <tr>
                <td><?php echo $result['subject1'];?></td>
            </tr>
            <tr>
                <td><?php echo $result['subject2'];?></td>
            </tr>
            <tr>
                <td><?php echo $result['subject3'];?></td>
            </tr>
            <tr>
                <td><?php echo $result['subject4'];?></td>
            </tr>
            <tr>
                <td><?php echo $result['subject5'];?></td>
            </tr>
            <tr>
                <td><?php echo $result['subject6'];?></td>
            </tr>
            <tr>
                <td><?php echo $result['subject7'];?></td>
            </tr>
            <tr>
                <td><?php echo $result['subject8'];?></td>
            </tr>
            <tr>
                <td><?php echo $result['subject9'];?></td>
            </tr>
            <tr>
                <td><?php echo $result['subject10'];?></td>
            </tr>
            <?php
      }
      } else {
        ?>
        <tr>
          <td colspan="9"></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>





    <table>
    <thead>
        <th>Fourth Year IP's</th>
    </thead>
    <tbody>
      <?php
      $query = "SELECT * FROM `message4` WHERE `studentid`='$studentid'";
        $results=mysqli_query($link,$query);
        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
                ?>
            <tr>
                <td><?php echo $result['subject1'];?></td>
            </tr>
            <tr>
                <td><?php echo $result['subject2'];?></td>
            </tr>
            <tr>
                <td><?php echo $result['subject3'];?></td>
            </tr>
            <tr>
                <td><?php echo $result['subject4'];?></td>
            </tr>
            <tr>
                <td><?php echo $result['subject5'];?></td>
            </tr>
            <tr>
                <td><?php echo $result['subject6'];?></td>
            </tr>
            <tr>
                <td><?php echo $result['subject7'];?></td>
            </tr>
            <tr>
                <td><?php echo $result['subject8'];?></td>
            </tr>
            <tr>
                <td><?php echo $result['subject9'];?></td>
            </tr>
            <tr>
                <td><?php echo $result['subject10'];?></td>
            </tr>
            <?php
      }
      } else {
        ?>
        <tr>
          <td colspan="9"></td>
        </tr>
      <?php } ?>
    </tbody>
</table>
</div>




    <div style="width:15px; height:15px; position:absolute;z-index:1;background:white;top:0;
    right:0;margin-top: 7.7%;margin-right: 7%;transform: rotate(45deg); display:none;" id="arrow"></div>

    <div style="border-radius:50%;background: red;text-align: center; width:2vw;height:4vh;position:absolute;right:0;top:0;z-index: 2;padding:5px;margin-top: 6.2%;margin-right: 1.2%;display:none" id="close">

    <button onclick="close1()" style="border:none;outline:none;cursor:pointer;background:none;color:white;font-family:arial black;font-size:20px;text-align: center;">X</button></div>

<div class="tp1" id="tp1"></div>




<div class="notif2" id="notif2">
  <table>
    <thead>
        <th>Reminders</th>
    </thead>
    <tbody>

    <?php
        $query = "SELECT reminder FROM `message1` WHERE `studentid`='$studentid'";
        $results=mysqli_query($link,$query);
        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
    ?>
            <tr>
                <td><?php echo $result['reminder'];?></td>
            </tr>
            <?php
      }
      } else {
        ?>
        <tr>
          <td colspan="9"></td>
        </tr>
      <?php } ?>





      <?php
        $query = "SELECT reminder FROM `message2` WHERE `studentid`='$studentid'";
        $results=mysqli_query($link,$query);
        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
    ?>
            <tr>
                <td><?php echo $result['reminder'];?></td>
            </tr>
            <?php
      }
      } else {
        ?>
        <tr>
          <td colspan="9"></td>
        </tr>
      <?php } ?>




      <?php
        $query = "SELECT reminder FROM `message3` WHERE `studentid`='$studentid'";
        $results=mysqli_query($link,$query);
        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
    ?>
            <tr>
                <td><?php echo $result['reminder'];?></td>
            </tr>
            <?php
      }
      } else {
        ?>
        <tr>
          <td colspan="9"></td>
        </tr>
      <?php } ?>









      <?php
        $query = "SELECT reminder FROM `message3_1` WHERE `studentid`='$studentid'";
        $results=mysqli_query($link,$query);
        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
    ?>
            <tr>
                <td><?php echo $result['reminder'];?></td>
            </tr>
            <?php
      }
      } else {
        ?>
        <tr>
          <td colspan="9"></td>
        </tr>
      <?php } ?>







      <?php
        $query = "SELECT reminder FROM `message4` WHERE `studentid`='$studentid'";
        $results=mysqli_query($link,$query);
        if (mysqli_num_rows($results)>=1) {
        while($result=mysqli_fetch_array($results)){
    ?>
            <tr>
                <td><?php echo $result['reminder'];?></td>
            </tr>
            <?php
      }
      } else {
        ?>
        <tr>
          <td colspan="9"></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

<div style="width:15px; height:15px; position:absolute;z-index:1;background:white;top:0;
    right:0;margin-top: 7.7%;margin-right: 20%;transform: rotate(45deg); display:none;" id="arrow2"></div>

    <div style="border-radius:50%;background: red;text-align: center; width:2vw;height:4vh;position:absolute;right:0;top:0;z-index: 2;padding:5px;margin-top: 6.2%;margin-right: 1.2%;display:none" id="close2">

    <button onclick="close2()" style="border:none;outline:none;cursor:pointer;background:none;color:white;font-family:arial black;font-size:20px;text-align: center;">X</button></div>

<div class="tp2" id="tp2"></div>















<div>
  <?php
    $studentid=$_SESSION['studentid'];
    ?>
    <?php
    $query = "SELECT * FROM `firstyear` WHERE `studentid`= '$studentid'";
    $results = mysqli_query($link,$query);
    if(mysqli_num_rows($results)>=1){
        while($result=mysqli_fetch_array($results)){
    ?>

    <center><h1>Hi <?Php echo $_SESSION['studentid'];?>, <?php echo $result['name'];?><br>
      Welcome to Your Portal</h1>
    </center>
    <?php
      }
      } else {
    ?>
    <?php } ?>
</div>
</div>





  <script>
    function view_rem(){
      document.getElementById('notif2').style.display='block';
      document.getElementById('arrow2').style.display='block';
      document.getElementById('close2').style.display='block';
      document.getElementById('tp2').style.display='none';
      document.getElementById('notif').style.display='none';
      document.getElementById('arrow').style.display='none';
      document.getElementById('close').style.display='none';
    }
    function close2(){
      document.getElementById('notif2').style.display='none';
      document.getElementById('arrow2').style.display='none';
      document.getElementById('close2').style.display='none';
    }


    function view(){
      document.getElementById('notif').style.display='block';
      document.getElementById('arrow').style.display='block';
      document.getElementById('close').style.display='block';
      document.getElementById('tp1').style.display='none';
      document.getElementById('notif2').style.display='none';
      document.getElementById('arrow2').style.display='none';
      document.getElementById('close2').style.display='none';
    }
    function close1(){
      document.getElementById('notif').style.display='none';
      document.getElementById('arrow').style.display='none';
      document.getElementById('close').style.display='none';
    }












    var a= parseInt(
    <?php
      $query = "SELECT subject1 FROM `message1` WHERE `studentid`= '$studentid' AND subject1 LIKE 'I%' OR  subject1 LIKE 'G%' OR  subject1 LIKE 'L%' OR  subject1 LIKE 'C%' OR  subject1 LIKE 'F%' OR  subject1 LIKE 'P%' OR  subject1 LIKE 'R%' OR  subject1 LIKE 'N%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );







    var b= parseInt(
    <?php
      $query = "SELECT subject2 FROM `message1` WHERE `studentid`= '$studentid'AND subject2 LIKE 'I%' OR  subject2 LIKE 'G%' OR  subject2 LIKE 'L%' OR  subject2 LIKE 'C%' OR  subject2 LIKE 'F%' OR  subject2 LIKE 'P%' OR  subject2 LIKE 'R%' OR  subject2 LIKE 'N%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );





    var c= parseInt(
    <?php
      $query = "SELECT subject3 FROM `message1` WHERE `studentid`= '$studentid'AND subject3 LIKE 'I%' OR  subject3 LIKE 'G%' OR  subject3 LIKE 'L%' OR  subject3 LIKE 'C%' OR  subject3 LIKE 'F%' OR  subject3 LIKE 'P%' OR  subject3 LIKE 'R%' OR  subject3 LIKE 'N%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );



    var d= parseInt(
    <?php
      $query = "SELECT subject4 FROM `message1` WHERE `studentid`= '$studentid'AND subject4 LIKE 'I%' OR  subject4 LIKE 'G%' OR  subject4 LIKE 'L%' OR  subject4 LIKE 'C%' OR  subject4 LIKE 'F%' OR  subject4 LIKE 'P%' OR  subject4 LIKE 'R%' OR  subject4 LIKE 'N%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );


    var e= parseInt(
    <?php
      $query = "SELECT subject5 FROM `message1` WHERE `studentid`= '$studentid'AND subject5 LIKE 'I%' OR  subject5 LIKE 'G%' OR  subject5 LIKE 'L%' OR  subject5 LIKE 'C%' OR  subject5 LIKE 'F%' OR  subject5 LIKE 'P%' OR  subject5 LIKE 'R%' OR  subject5 LIKE 'N%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );



    var f= parseInt(
    <?php
      $query = "SELECT subject6 FROM `message1` WHERE `studentid`= '$studentid'AND subject6 LIKE 'I%' OR  subject6 LIKE 'G%' OR  subject6 LIKE 'L%' OR  subject6 LIKE 'C%' OR  subject6 LIKE 'F%' OR  subject6 LIKE 'P%' OR  subject6 LIKE 'R%' OR  subject6 LIKE 'N%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );



    var g= parseInt(
    <?php
      $query = "SELECT subject7 FROM `message1` WHERE `studentid`= '$studentid'AND subject7 LIKE 'I%' OR  subject7 LIKE 'G%' OR  subject7 LIKE 'L%' OR  subject7 LIKE 'C%' OR  subject7 LIKE 'F%' OR  subject7 LIKE 'P%' OR  subject7 LIKE 'R%' OR  subject7 LIKE 'N%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );


    var h= parseInt(
    <?php
      $query = "SELECT subject8 FROM `message1` WHERE `studentid`= '$studentid'AND subject8 LIKE 'I%' OR  subject8 LIKE 'G%' OR  subject8 LIKE 'L%' OR  subject8 LIKE 'C%' OR  subject8 LIKE 'F%' OR  subject8 LIKE 'P%' OR  subject8 LIKE 'R%' OR  subject8 LIKE 'N%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );


    var i= parseInt(
    <?php
      $query = "SELECT subject9 FROM `message1` WHERE `studentid`= '$studentid'AND subject9 LIKE 'I%' OR  subject9 LIKE 'G%' OR  subject9 LIKE 'L%' OR  subject9 LIKE 'C%' OR  subject9 LIKE 'F%' OR  subject9 LIKE 'P%' OR  subject9 LIKE 'R%' OR  subject9 LIKE 'N%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );


    var j= parseInt(
    <?php
      $query = "SELECT subject10 FROM `message1` WHERE `studentid`= '$studentid'AND subject10 LIKE 'I%' OR  subject10 LIKE 'G%' OR  subject10 LIKE 'L%' OR  subject10 LIKE 'C%' OR  subject10 LIKE 'F%' OR  subject10 LIKE 'P%' OR  subject10 LIKE 'R%' OR  subject10 LIKE 'N%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );













































    var k= parseInt(
    <?php
      $query = "SELECT subject1 FROM `message2` WHERE `studentid`= '$studentid' AND subject1 LIKE 'I%' OR  subject1 LIKE 'G%' OR  subject1 LIKE 'L%' OR  subject1 LIKE 'C%' OR  subject1 LIKE 'F%' OR  subject1 LIKE 'P%' OR  subject1 LIKE 'R%' OR  subject1 LIKE 'N%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );







    var l= parseInt(
    <?php
      $query = "SELECT subject2 FROM `message2` WHERE `studentid`= '$studentid'AND subject2 LIKE 'I%' OR  subject2 LIKE 'G%' OR  subject2 LIKE 'L%' OR  subject2 LIKE 'C%' OR  subject2 LIKE 'F%' OR  subject2 LIKE 'P%' OR  subject2 LIKE 'R%' OR  subject2 LIKE 'N%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );





    var m= parseInt(
    <?php
      $query = "SELECT subject3 FROM `message2` WHERE `studentid`= '$studentid'AND subject3 LIKE 'I%' OR  subject3 LIKE 'G%' OR  subject3 LIKE 'L%' OR  subject3 LIKE 'C%' OR  subject3 LIKE 'F%' OR  subject3 LIKE 'P%' OR  subject3 LIKE 'R%' OR  subject3 LIKE 'N%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );



    var n= parseInt(
    <?php
      $query = "SELECT subject4 FROM `message2` WHERE `studentid`= '$studentid'AND subject4 LIKE 'I%' OR  subject4 LIKE 'G%' OR  subject4 LIKE 'L%' OR  subject4 LIKE 'C%' OR  subject4 LIKE 'F%' OR  subject4 LIKE 'P%' OR  subject4 LIKE 'R%' OR  subject4 LIKE 'N%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );


    var o= parseInt(
    <?php
      $query = "SELECT subject5 FROM `message2` WHERE `studentid`= '$studentid'AND subject5 LIKE 'I%' OR  subject5 LIKE 'G%' OR  subject5 LIKE 'L%' OR  subject5 LIKE 'C%' OR  subject5 LIKE 'F%' OR  subject5 LIKE 'P%' OR  subject5 LIKE 'R%' OR  subject5 LIKE 'N%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );



    var p= parseInt(
    <?php
      $query = "SELECT subject6 FROM `message2` WHERE `studentid`= '$studentid'AND subject6 LIKE 'I%' OR  subject6 LIKE 'G%' OR  subject6 LIKE 'L%' OR  subject6 LIKE 'C%' OR  subject6 LIKE 'F%' OR  subject6 LIKE 'P%' OR  subject6 LIKE 'R%' OR  subject6 LIKE 'N%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );



    var q= parseInt(
    <?php
      $query = "SELECT subject7 FROM `message2` WHERE `studentid`= '$studentid'AND subject7 LIKE 'I%' OR  subject7 LIKE 'G%' OR  subject7 LIKE 'L%' OR  subject7 LIKE 'C%' OR  subject7 LIKE 'F%' OR  subject7 LIKE 'P%' OR  subject7 LIKE 'R%' OR  subject7 LIKE 'N%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );


    var r= parseInt(
    <?php
      $query = "SELECT subject8 FROM `message2` WHERE `studentid`= '$studentid'AND subject8 LIKE 'I%' OR  subject8 LIKE 'G%' OR  subject8 LIKE 'L%' OR  subject8 LIKE 'C%' OR  subject8 LIKE 'F%' OR  subject8 LIKE 'P%' OR  subject8 LIKE 'R%' OR  subject8 LIKE 'N%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );


    var s= parseInt(
    <?php
      $query = "SELECT subject9 FROM `message2` WHERE `studentid`= '$studentid'AND subject9 LIKE 'I%' OR  subject9 LIKE 'G%' OR  subject9 LIKE 'L%' OR  subject9 LIKE 'C%' OR  subject9 LIKE 'F%' OR  subject9 LIKE 'P%' OR  subject9 LIKE 'R%' OR  subject9 LIKE 'N%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );


    var t= parseInt(
    <?php
      $query = "SELECT subject10 FROM `message2` WHERE `studentid`= '$studentid'AND subject10 LIKE 'I%' OR  subject10 LIKE 'G%' OR  subject10 LIKE 'L%' OR  subject10 LIKE 'C%' OR  subject10 LIKE 'F%' OR  subject10 LIKE 'P%' OR  subject10 LIKE 'R%' OR  subject10 LIKE 'N%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );






















    var u= parseInt(
    <?php
      $query = "SELECT subject1 FROM `message3` WHERE `studentid`= '$studentid' AND subject1 LIKE 'I%' OR  subject1 LIKE 'G%' OR  subject1 LIKE 'L%' OR  subject1 LIKE 'C%' OR  subject1 LIKE 'F%' OR  subject1 LIKE 'P%' OR  subject1 LIKE 'R%' OR  subject1 LIKE 'N%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );







    var v= parseInt(
    <?php
      $query = "SELECT subject2 FROM `message3` WHERE `studentid`= '$studentid'AND subject2 LIKE 'I%' OR  subject2 LIKE 'G%' OR  subject2 LIKE 'L%' OR  subject2 LIKE 'C%' OR  subject2 LIKE 'F%' OR  subject2 LIKE 'P%' OR  subject2 LIKE 'R%' OR  subject2 LIKE 'N%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );





    var w= parseInt(
    <?php
      $query = "SELECT subject3 FROM `message3` WHERE `studentid`= '$studentid'AND subject3 LIKE 'I%' OR  subject3 LIKE 'G%' OR  subject3 LIKE 'L%' OR  subject3 LIKE 'C%' OR  subject3 LIKE 'F%' OR  subject3 LIKE 'P%' OR  subject3 LIKE 'R%' OR  subject3 LIKE 'N%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );



    var x= parseInt(
    <?php
      $query = "SELECT subject4 FROM `message3` WHERE `studentid`= '$studentid'AND subject4 LIKE 'I%' OR  subject4 LIKE 'G%' OR  subject4 LIKE 'L%' OR  subject4 LIKE 'C%' OR  subject4 LIKE 'F%' OR  subject4 LIKE 'P%' OR  subject4 LIKE 'R%' OR  subject4 LIKE 'N%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );


    var y= parseInt(
    <?php
      $query = "SELECT subject5 FROM `message3` WHERE `studentid`= '$studentid'AND subject5 LIKE 'I%' OR  subject5 LIKE 'G%' OR  subject5 LIKE 'L%' OR  subject5 LIKE 'C%' OR  subject5 LIKE 'F%' OR  subject5 LIKE 'P%' OR  subject5 LIKE 'R%' OR  subject5 LIKE 'N%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );



    var z= parseInt(
    <?php
      $query = "SELECT subject6 FROM `message3` WHERE `studentid`= '$studentid'AND subject6 LIKE 'I%' OR  subject6 LIKE 'G%' OR  subject6 LIKE 'L%' OR  subject6 LIKE 'C%' OR  subject6 LIKE 'F%' OR  subject6 LIKE 'P%' OR  subject6 LIKE 'R%' OR  subject6 LIKE 'N%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );



    var aa= parseInt(
    <?php
      $query = "SELECT subject7 FROM `message3` WHERE `studentid`= '$studentid'AND subject7 LIKE 'I%' OR  subject7 LIKE 'G%' OR  subject7 LIKE 'L%' OR  subject7 LIKE 'C%' OR  subject7 LIKE 'F%' OR  subject7 LIKE 'P%' OR  subject7 LIKE 'R%' OR  subject7 LIKE 'N%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );


    var bb= parseInt(
    <?php
      $query = "SELECT subject8 FROM `message3` WHERE `studentid`= '$studentid'AND subject8 LIKE 'I%' OR  subject8 LIKE 'G%' OR  subject8 LIKE 'L%' OR  subject8 LIKE 'C%' OR  subject8 LIKE 'F%' OR  subject8 LIKE 'P%' OR  subject8 LIKE 'R%' OR  subject8 LIKE 'N%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );


    var cc= parseInt(
    <?php
      $query = "SELECT subject9 FROM `message3` WHERE `studentid`= '$studentid'AND subject9 LIKE 'I%' OR  subject9 LIKE 'G%' OR  subject9 LIKE 'L%' OR  subject9 LIKE 'C%' OR  subject9 LIKE 'F%' OR  subject9 LIKE 'P%' OR  subject9 LIKE 'R%' OR  subject9 LIKE 'N%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );


    var dd= parseInt(
    <?php
      $query = "SELECT subject10 FROM `message3` WHERE `studentid`= '$studentid'AND subject10 LIKE 'I%' OR  subject10 LIKE 'G%' OR  subject10 LIKE 'L%' OR  subject10 LIKE 'C%' OR  subject10 LIKE 'F%' OR  subject10 LIKE 'P%' OR  subject10 LIKE 'R%' OR  subject10 LIKE 'N%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );
























    var ee= parseInt(
    <?php
      $query = "SELECT subject1 FROM `message3_1` WHERE `studentid`= '$studentid' AND subject1 LIKE 'I%' OR  subject1 LIKE 'G%' OR  subject1 LIKE 'L%' OR  subject1 LIKE 'C%' OR  subject1 LIKE 'F%' OR  subject1 LIKE 'P%' OR  subject1 LIKE 'R%' OR  subject1 LIKE 'N%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );







    var ff= parseInt(
    <?php
      $query = "SELECT subject2 FROM `message3_1` WHERE `studentid`= '$studentid'AND subject2 LIKE 'I%' OR  subject2 LIKE 'G%' OR  subject2 LIKE 'L%' OR  subject2 LIKE 'C%' OR  subject2 LIKE 'F%' OR  subject2 LIKE 'P%' OR  subject2 LIKE 'R%' OR  subject2 LIKE 'N%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );





    var gg= parseInt(
    <?php
      $query = "SELECT subject3 FROM `message3_1` WHERE `studentid`= '$studentid'AND subject3 LIKE 'I%' OR  subject3 LIKE 'G%' OR  subject3 LIKE 'L%' OR  subject3 LIKE 'C%' OR  subject3 LIKE 'F%' OR  subject3 LIKE 'P%' OR  subject3 LIKE 'R%' OR  subject3 LIKE 'N%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );



    var hh= parseInt(
    <?php
      $query = "SELECT subject4 FROM `message3_1` WHERE `studentid`= '$studentid'AND subject4 LIKE 'I%' OR  subject4 LIKE 'G%' OR  subject4 LIKE 'L%' OR  subject4 LIKE 'C%' OR  subject4 LIKE 'F%' OR  subject4 LIKE 'P%' OR  subject4 LIKE 'R%' OR  subject4 LIKE 'N%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );


    var ii= parseInt(
    <?php
      $query = "SELECT subject5 FROM `message3_1` WHERE `studentid`= '$studentid'AND subject5 LIKE 'I%' OR  subject5 LIKE 'G%' OR  subject5 LIKE 'L%' OR  subject5 LIKE 'C%' OR  subject5 LIKE 'F%' OR  subject5 LIKE 'P%' OR  subject5 LIKE 'R%' OR  subject5 LIKE 'N%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );



    var jj= parseInt(
    <?php
      $query = "SELECT subject6 FROM `message3_1` WHERE `studentid`= '$studentid'AND subject6 LIKE 'I%' OR  subject6 LIKE 'G%' OR  subject6 LIKE 'L%' OR  subject6 LIKE 'C%' OR  subject6 LIKE 'F%' OR  subject6 LIKE 'P%' OR  subject6 LIKE 'R%' OR  subject6 LIKE 'N%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );



    var kk= parseInt(
    <?php
      $query = "SELECT subject7 FROM `message3_1` WHERE `studentid`= '$studentid'AND subject7 LIKE 'I%' OR  subject7 LIKE 'G%' OR  subject7 LIKE 'L%' OR  subject7 LIKE 'C%' OR  subject7 LIKE 'F%' OR  subject7 LIKE 'P%' OR  subject7 LIKE 'R%' OR  subject7 LIKE 'N%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );


    var ll= parseInt(
    <?php
      $query = "SELECT subject8 FROM `message3_1` WHERE `studentid`= '$studentid'AND subject8 LIKE 'I%' OR  subject8 LIKE 'G%' OR  subject8 LIKE 'L%' OR  subject8 LIKE 'C%' OR  subject8 LIKE 'F%' OR  subject8 LIKE 'P%' OR  subject8 LIKE 'R%' OR  subject8 LIKE 'N%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );


    var mm= parseInt(
    <?php
      $query = "SELECT subject9 FROM `message3_1` WHERE `studentid`= '$studentid'AND subject9 LIKE 'I%' OR  subject9 LIKE 'G%' OR  subject9 LIKE 'L%' OR  subject9 LIKE 'C%' OR  subject9 LIKE 'F%' OR  subject9 LIKE 'P%' OR  subject9 LIKE 'R%' OR  subject9 LIKE 'N%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );


    var nn= parseInt(
    <?php
      $query = "SELECT subject10 FROM `message3_1` WHERE `studentid`= '$studentid'AND subject10 LIKE 'I%' OR  subject10 LIKE 'G%' OR  subject10 LIKE 'L%' OR  subject10 LIKE 'C%' OR  subject10 LIKE 'F%' OR  subject10 LIKE 'P%' OR  subject10 LIKE 'R%' OR  subject10 LIKE 'N%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );


















    var oo= parseInt(
    <?php
      $query = "SELECT subject1 FROM `message4` WHERE `studentid`= '$studentid' AND subject1 LIKE 'I%' OR  subject1 LIKE 'G%' OR  subject1 LIKE 'L%' OR  subject1 LIKE 'C%' OR  subject1 LIKE 'F%' OR  subject1 LIKE 'P%' OR  subject1 LIKE 'R%' OR  subject1 LIKE 'N%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );







    var pp= parseInt(
    <?php
      $query = "SELECT subject2 FROM `message4` WHERE `studentid`= '$studentid'AND subject2 LIKE 'I%' OR  subject2 LIKE 'G%' OR  subject2 LIKE 'L%' OR  subject2 LIKE 'C%' OR  subject2 LIKE 'F%' OR  subject2 LIKE 'P%' OR  subject2 LIKE 'R%' OR  subject2 LIKE 'N%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );





    var qq= parseInt(
    <?php
      $query = "SELECT subject3 FROM `message4` WHERE `studentid`= '$studentid'AND subject3 LIKE 'I%' OR  subject3 LIKE 'G%' OR  subject3 LIKE 'L%' OR  subject3 LIKE 'C%' OR  subject3 LIKE 'F%' OR  subject3 LIKE 'P%' OR  subject3 LIKE 'R%' OR  subject3 LIKE 'N%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );



    var rr= parseInt(
    <?php
      $query = "SELECT subject4 FROM `message4` WHERE `studentid`= '$studentid'AND subject4 LIKE 'I%' OR  subject4 LIKE 'G%' OR  subject4 LIKE 'L%' OR  subject4 LIKE 'C%' OR  subject4 LIKE 'F%' OR  subject4 LIKE 'P%' OR  subject4 LIKE 'R%' OR  subject4 LIKE 'N%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );


    var ss= parseInt(
    <?php
      $query = "SELECT subject5 FROM `message4` WHERE `studentid`= '$studentid'AND subject5 LIKE 'I%' OR  subject5 LIKE 'G%' OR  subject5 LIKE 'L%' OR  subject5 LIKE 'C%' OR  subject5 LIKE 'F%' OR  subject5 LIKE 'P%' OR  subject5 LIKE 'R%' OR  subject5 LIKE 'N%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );



    var tt= parseInt(
    <?php
      $query = "SELECT subject6 FROM `message4` WHERE `studentid`= '$studentid'AND subject6 LIKE 'I%' OR  subject6 LIKE 'G%' OR  subject6 LIKE 'L%' OR  subject6 LIKE 'C%' OR  subject6 LIKE 'F%' OR  subject6 LIKE 'P%' OR  subject6 LIKE 'R%' OR  subject6 LIKE 'N%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );



    var uu= parseInt(
    <?php
      $query = "SELECT subject7 FROM `message4` WHERE `studentid`= '$studentid'AND subject7 LIKE 'I%' OR  subject7 LIKE 'G%' OR  subject7 LIKE 'L%' OR  subject7 LIKE 'C%' OR  subject7 LIKE 'F%' OR  subject7 LIKE 'P%' OR  subject7 LIKE 'R%' OR  subject7 LIKE 'N%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );


    var vv= parseInt(
    <?php
      $query = "SELECT subject8 FROM `message4` WHERE `studentid`= '$studentid'AND subject8 LIKE 'I%' OR  subject8 LIKE 'G%' OR  subject8 LIKE 'L%' OR  subject8 LIKE 'C%' OR  subject8 LIKE 'F%' OR  subject8 LIKE 'P%' OR  subject8 LIKE 'R%' OR  subject8 LIKE 'N%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );


    var ww= parseInt(
    <?php
      $query = "SELECT subject9 FROM `message4` WHERE `studentid`= '$studentid'AND subject9 LIKE 'I%' OR  subject9 LIKE 'G%' OR  subject9 LIKE 'L%' OR  subject9 LIKE 'C%' OR  subject9 LIKE 'F%' OR  subject9 LIKE 'P%' OR  subject9 LIKE 'R%' OR  subject9 LIKE 'N%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );


    var xx= parseInt(
    <?php
      $query = "SELECT subject10 FROM `message4` WHERE `studentid`= '$studentid'AND subject10 LIKE 'I%' OR  subject10 LIKE 'G%' OR  subject10 LIKE 'L%' OR  subject10 LIKE 'C%' OR  subject10 LIKE 'F%' OR  subject10 LIKE 'P%' OR  subject10 LIKE 'R%' OR  subject10 LIKE 'N%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );




























var rem_a=parseInt(
    <?php
      $query = "SELECT reminder FROM `message1` WHERE `studentid`= '$studentid' AND reminder LIKE 'A%' OR  reminder LIKE 'B%' OR  reminder LIKE 'C%' OR  reminder LIKE 'D%' OR  reminder LIKE 'E%' OR  reminder LIKE 'F%' OR  reminder LIKE 'G%' OR  reminder LIKE 'H%' OR  reminder LIKE 'I%' OR  reminder LIKE 'J%' OR  reminder LIKE 'K%' OR  reminder LIKE 'L%' OR  reminder LIKE 'M%' OR  reminder LIKE 'N%' OR  reminder LIKE 'O%' OR  reminder LIKE 'P%' OR  reminder LIKE 'Q%' OR  reminder LIKE 'R%' OR  reminder LIKE 'S%' OR  reminder LIKE 'T%' OR  reminder LIKE 'U%' OR  reminder LIKE 'V%' OR  reminder LIKE 'W%' OR  reminder LIKE 'X%' OR  reminder LIKE 'Y%' OR  reminder LIKE 'Z%' OR  reminder LIKE '1%' OR  reminder LIKE '2%' OR  reminder LIKE '3%'OR  reminder LIKE '4%' OR  reminder LIKE '5%' OR  reminder LIKE '6%' OR  reminder LIKE '7%' OR  reminder LIKE '8%' OR  reminder LIKE '9%' OR  reminder LIKE '0%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );





    var rem_b=parseInt(
    <?php
      $query = "SELECT reminder FROM `message2` WHERE `studentid`= '$studentid' AND reminder LIKE 'A%' OR  reminder LIKE 'B%' OR  reminder LIKE 'C%' OR  reminder LIKE 'D%' OR  reminder LIKE 'E%' OR  reminder LIKE 'F%' OR  reminder LIKE 'G%' OR  reminder LIKE 'H%' OR  reminder LIKE 'I%' OR  reminder LIKE 'J%' OR  reminder LIKE 'K%' OR  reminder LIKE 'L%' OR  reminder LIKE 'M%' OR  reminder LIKE 'N%' OR  reminder LIKE 'O%' OR  reminder LIKE 'P%' OR  reminder LIKE 'Q%' OR  reminder LIKE 'R%' OR  reminder LIKE 'S%' OR  reminder LIKE 'T%' OR  reminder LIKE 'U%' OR  reminder LIKE 'V%' OR  reminder LIKE 'W%' OR  reminder LIKE 'X%' OR  reminder LIKE 'Y%' OR  reminder LIKE 'Z%' OR  reminder LIKE '1%' OR  reminder LIKE '2%' OR  reminder LIKE '3%'OR  reminder LIKE '4%' OR  reminder LIKE '5%' OR  reminder LIKE '6%' OR  reminder LIKE '7%' OR  reminder LIKE '8%' OR  reminder LIKE '9%' OR  reminder LIKE '0%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );



    var rem_c=parseInt(
    <?php
      $query = "SELECT reminder FROM `message3` WHERE `studentid`= '$studentid' AND reminder LIKE 'A%' OR  reminder LIKE 'B%' OR  reminder LIKE 'C%' OR  reminder LIKE 'D%' OR  reminder LIKE 'E%' OR  reminder LIKE 'F%' OR  reminder LIKE 'G%' OR  reminder LIKE 'H%' OR  reminder LIKE 'I%' OR  reminder LIKE 'J%' OR  reminder LIKE 'K%' OR  reminder LIKE 'L%' OR  reminder LIKE 'M%' OR  reminder LIKE 'N%' OR  reminder LIKE 'O%' OR  reminder LIKE 'P%' OR  reminder LIKE 'Q%' OR  reminder LIKE 'R%' OR  reminder LIKE 'S%' OR  reminder LIKE 'T%' OR  reminder LIKE 'U%' OR  reminder LIKE 'V%' OR  reminder LIKE 'W%' OR  reminder LIKE 'X%' OR  reminder LIKE 'Y%' OR  reminder LIKE 'Z%' OR  reminder LIKE '1%' OR  reminder LIKE '2%' OR  reminder LIKE '3%'OR  reminder LIKE '4%' OR  reminder LIKE '5%' OR  reminder LIKE '6%' OR  reminder LIKE '7%' OR  reminder LIKE '8%' OR  reminder LIKE '9%' OR  reminder LIKE '0%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );


    var rem_d=parseInt(
    <?php
      $query = "SELECT reminder FROM `message3_1` WHERE `studentid`= '$studentid' AND reminder LIKE 'A%' OR  reminder LIKE 'B%' OR  reminder LIKE 'C%' OR  reminder LIKE 'D%' OR  reminder LIKE 'E%' OR  reminder LIKE 'F%' OR  reminder LIKE 'G%' OR  reminder LIKE 'H%' OR  reminder LIKE 'I%' OR  reminder LIKE 'J%' OR  reminder LIKE 'K%' OR  reminder LIKE 'L%' OR  reminder LIKE 'M%' OR  reminder LIKE 'N%' OR  reminder LIKE 'O%' OR  reminder LIKE 'P%' OR  reminder LIKE 'Q%' OR  reminder LIKE 'R%' OR  reminder LIKE 'S%' OR  reminder LIKE 'T%' OR  reminder LIKE 'U%' OR  reminder LIKE 'V%' OR  reminder LIKE 'W%' OR  reminder LIKE 'X%' OR  reminder LIKE 'Y%' OR  reminder LIKE 'Z%' OR  reminder LIKE '1%' OR  reminder LIKE '2%' OR  reminder LIKE '3%'OR  reminder LIKE '4%' OR  reminder LIKE '5%' OR  reminder LIKE '6%' OR  reminder LIKE '7%' OR  reminder LIKE '8%' OR  reminder LIKE '9%' OR  reminder LIKE '0%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );


    var rem_e=parseInt(
    <?php
      $query = "SELECT reminder FROM `message4` WHERE `studentid`= '$studentid' AND reminder LIKE 'A%' OR  reminder LIKE 'B%' OR  reminder LIKE 'C%' OR  reminder LIKE 'D%' OR  reminder LIKE 'E%' OR  reminder LIKE 'F%' OR  reminder LIKE 'G%' OR  reminder LIKE 'H%' OR  reminder LIKE 'I%' OR  reminder LIKE 'J%' OR  reminder LIKE 'K%' OR  reminder LIKE 'L%' OR  reminder LIKE 'M%' OR  reminder LIKE 'N%' OR  reminder LIKE 'O%' OR  reminder LIKE 'P%' OR  reminder LIKE 'Q%' OR  reminder LIKE 'R%' OR  reminder LIKE 'S%' OR  reminder LIKE 'T%' OR  reminder LIKE 'U%' OR  reminder LIKE 'V%' OR  reminder LIKE 'W%' OR  reminder LIKE 'X%' OR  reminder LIKE 'Y%' OR  reminder LIKE 'Z%' OR  reminder LIKE '1%' OR  reminder LIKE '2%' OR  reminder LIKE '3%'OR  reminder LIKE '4%' OR  reminder LIKE '5%' OR  reminder LIKE '6%' OR  reminder LIKE '7%' OR  reminder LIKE '8%' OR  reminder LIKE '9%' OR  reminder LIKE '0%'";
      $results = mysqli_query($link,$query);

      if($resident_total = mysqli_num_rows($results)){
        echo $resident_total;
      }else{
        echo '0';
      }
      ?>
      );





























      var total=(a+b+c+d+e+f+g+h+i+j+k+l+m+n+o+p+q+r+s+t+u+v+w+x+y+z+aa+bb+cc+dd+ee+ff+gg+hh+ii+jj+kk+ll+mm+nn+oo+pp+qq+rr+ss+tt+uu+vv+ww+xx);

      document.getElementById("tp1").innerHTML=total;


      var total2=rem_a+rem_b+rem_c+rem_d+rem_e;

      document.getElementById("tp2").innerHTML=total2;


  </script>

<?php } ?>
  </body>
</html>
