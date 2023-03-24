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
    <title>Faculty Portal</title>
    <style>
    body{
      margin:0;
      padding:0;
      background:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)),url('images/building.jpeg');
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
    .links{
      position: absolute;
      width: auto;
      height: 50%;
      margin-left: 30%;
      margin-top: 5%;
      padding: 20px;
    }
    .links button{
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
      border: none;
      cursor: pointer;
    }
    .links button:hover{
      background: linear-gradient(to right,rgb(255 255 255 / 43%),white);
      transition: 1.2s;
      color: black;
      transition: 1s ease-in;
    }
    @keyframes Appear{
      from{
        opacity: 0;
      }to{
        opacity: 1;
      }
    }
    table{
      margin-top: 1%;
      width:60%;
    }
    table caption{
      width: 90%;
    }
    table th{
      width: 100%;
      padding: 10px;
    }
    table td{
      font-size: 17px;
      animation: animate 1.5s;
    }
    @keyframes animate{
      from{
        opacity: 0;
        transform: rotateY(260deg);
      }to{
        opacity: 1;
        transform: rotateY(0);
      }
    }
    #table1{
      position: absolute;
      margin-left: 25%;
      margin-right: 25%;
      margin-top: 1%;
      background: white;
      padding: 40px 50px 40px 50px;
      font-family: Arial Black;
      display: none;
      border-radius: 10px;
    }
    #table1 caption{
      background: white;
      padding: 10px 20px 10px 20px;
      font-family: ALGERIAN;
      font-size: 20px;
    }
    #table1 td{
      text-align: center;
      padding: 5px;
    }
    #table1 th{
      background: gray;
      color: white;
      text-shadow: 1px 1px 0 black;
      padding: 10px;
    }
    #table2{
      position: absolute;
      margin-left: 25%;
      margin-right: 25%;
      background: white;
      padding: 40px 50px 40px 50px;
      font-family: Arial Black;
      display: none;
      border-radius: 10px;
    }
    #table2 caption{
      background: white;
      padding: 10px 20px 10px 20px;
      font-family: ALGERIAN;
      font-size: 20px;
    }
    #table2 td{
      text-align: center;
      padding: 5px;
    }
    #table2 th{
      background: gray;
      padding: 10px;
      color: white;
      text-shadow: 1px 1px 0 black;
    }
    #table3{
      position: absolute;
      margin-left: 25%;
      margin-right: 25%;
      background: white;
      padding: 40px 50px 40px 50px;
      font-family: Arial Black;
      display: none;
      border-radius: 10px;
    }
    #table3 caption{
      background: white;
      padding: 10px 20px 10px 20px;
      font-family: ALGERIAN;
      font-size: 20px;
    }
    #table3 td{
      text-align: center;
      padding: 5px;
    }
    #table3 th{
      background: gray;
      padding: 10px;
      color: white;
      text-shadow: 1px 1px 0 black;
    }
    #table4{
      position: absolute;
      margin-left: 25%;
      margin-right: 25%;
      background: white;
      padding: 40px 50px 40px 50px;
      font-family: Arial Black;
      display: none;
      border-radius: 10px;
    }
    #table4 caption{
      background: white;
      padding: 10px;
      font-family: ALGERIAN;
      font-size: 20px;
    }
    #table4 td{
      text-align: center;
      padding: 5px;
    }
    #table4 th{
      background: gray;
      padding: 10px 0 10px 0;
      color: white;
      text-shadow: 1px 1px 0 black;
    }
    #table5{
      position: absolute;
      margin-left: 25%;
      margin-right: 25%;
      background: white;
      padding: 40px 50px 40px 50px;
      font-family: Arial Black;
      display: none;
      border-radius: 10px;
    }
    #table5 caption{
      background: white;
      padding: 10px 20px 10px 20px;
      font-family: ALGERIAN;
      font-size: 20px;
    }
    #table5 td{
      text-align: center;
      padding: 5px;
    }
    #table5 th{
      background: gray;
      padding: 10px;
      color: white;
      text-shadow: 1px 1px 0 black;
    }
    </style>
  </head>
  <body>
    <div class="sidemenu">
      <img src="images/logo.png" id="img1"></img>
      <img src="images/ccs.jpg" id="img2"></img>
        <ul>
          <a href="facultyportal.php"><li class="l3">Dashboard</li></a>
        </ul>
        <ul>
          <a href="facultycreaterog.php"><li class="l3">Create ROG</li></a>
        </ul>
        <ul>
          <a href="facultyupdaterog.php"><li class="l1">Update ROG(s)</li></a>
        </ul>
      <a href="facultylogout.php" class="lo">Log out</a>
    </div>





    <div class="links">
      <button onclick="firstyear()">First Year</button>
      <button onclick="secondyear()">Second Year</button>
      <button onclick="thirdyear()">Third Year</button><br><br><br>
      <button onclick="midyear()" style="padding:70px 55px;">Mid Year</button>
      <button onclick="fourthyear()" style="padding:70px 55px;">Fourth Year</button>
    </div>


<div style="position: fixed;top:0;left:0;width:100%;height:100%;overflow:auto;background:rgba(0,0,0,0.9);display:none;" id="bg">
    <table id="table1" border="1" cellspacing="0">
      <button onclick="close1()" id="close1" style="color:white;background:red;padding:15px;border-radius:50px;position:relative;border:none;outline:none;margin-left: 60%;cursor:pointer;z-index: 1;width:50px;font-family:Arial Black;display:none;">x</button>


      <caption>Please Choose Student to be Edit<br><p style="font-family: Arial Black;letter-spacing: 2px;">
      (First Year)</p></caption>
      <thead>
        <th>Students Name</th>
        <th>Student ID Number</th>
        <th>Action</th>
      </thead>
      <tbody>
         <?php
                $query = 'SELECT * FROM `firstyear` ORDER BY name ASC';
                $results=mysqli_query($link,$query);
                if (mysqli_num_rows($results)>=1) {
                while($result=mysqli_fetch_array($results)){
                ?>
            <tr>
                <td><?php echo $result['name'];?></td>
                <td><?php echo $result['studentid'];?></td>
                <td><a href="updategrade1.php?name=<?php echo $result['name'];?>">Update</a></td>
            </tr>
            <?php
      }
      } else {
        ?>
        <tr>
          <td colspan="9"> No Data Found on IT!</td>
        </tr>
      <?php } ?>




      <?php
                $query = 'SELECT * FROM `firstyearis` ORDER BY name ASC';
                $results=mysqli_query($link,$query);
                if (mysqli_num_rows($results)>=1) {
                while($result=mysqli_fetch_array($results)){
                ?>
            <tr>
                <td><?php echo $result['name'];?></td>
                <td><?php echo $result['studentid'];?></td>
                <td><a href="updategradeis1.php?name=<?php echo $result['name'];?>">Update</a></td>
            </tr>
            <?php
      }
      } else {
        ?>
        <tr>
          <td colspan="9"> No Data Found on IS!</td>
        </tr>
      <?php } ?>
      </tbody>
    </table>













    <table id="table2" border="1" cellspacing="0">
      <button onclick="close2()" id="close2" style="color:white;background:red;padding:15px;border-radius:50px;position:relative;border:none;outline:none;margin-left: 60%;cursor:pointer;z-index: 1;width:50px;font-family:Arial Black;display:none;">x</button>

      <caption>Please Choose Student to be Edit<br><p style="font-family: Arial Black;letter-spacing: 2px;">
      (Second Year)</p></caption>
      <thead>
        <th>Students Name</th>
        <th>Student ID Number</th>
        <th>Action</th>
      </thead>
      <tbody>
         <?php
                $query = 'SELECT * FROM `secondyear` ORDER BY name ASC';
                $results=mysqli_query($link,$query);
                if (mysqli_num_rows($results)>=1) {
                while($result=mysqli_fetch_array($results)){
                ?>
            <tr>
                <td><?php echo $result['name'];?></td>
                <td><?php echo $result['studentid'];?></td>
                <td><a href="updategrade2.php?name=<?php echo $result['name'];?>">Update</a></td>
            </tr>
            <?php
      }
      } else {
        ?>
        <tr>
          <td colspan="9"> No Data Found on IT!</td>
        </tr>
      <?php } ?>

      <?php
                $query = 'SELECT * FROM `secondyearis` ORDER BY name ASC';
                $results=mysqli_query($link,$query);
                if (mysqli_num_rows($results)>=1) {
                while($result=mysqli_fetch_array($results)){
                ?>
            <tr>
                <td><?php echo $result['name'];?></td>
                <td><?php echo $result['studentid'];?></td>
                <td><a href="updategradeis2.php?name=<?php echo $result['name'];?>">Update</a></td>
            </tr>
            <?php
      }
      } else {
        ?>
        <tr>
          <td colspan="9"> No Data Found on IS!</td>
        </tr>
      <?php } ?>
      </tbody>
    </table>









    <table id="table3" border="1" cellspacing="0">
      <button onclick="close3()" id="close3" style="color:white;background:red;padding:15px;border-radius:50px;position:relative;border:none;outline:none;margin-left: 60%;cursor:pointer;z-index: 1;width:50px;font-family:Arial Black;display:none;">x</button>

      <caption>Please Choose Student to be Edit<br><p style="font-family: Arial Black;letter-spacing: 2px;">
      (Third Year)</p></caption>
      <thead>
        <th>Students Name</th>
        <th>Student ID Number</th>
        <th>Action</th>
      </thead>
      <tbody>
         <?php
                $query = 'SELECT * FROM `thirdyear` ORDER BY name ASC';
                $results=mysqli_query($link,$query);
                if (mysqli_num_rows($results)>=1) {
                while($result=mysqli_fetch_array($results)){
                ?>
            <tr>
                <td><?php echo $result['name'];?></td>
                <td><?php echo $result['studentid'];?></td>
                <td><a href="updategrade3.php?name=<?php echo $result['name'];?>">Update</a></td>
            </tr>
            <?php
      }
      } else {
        ?>
        <tr>
          <td colspan="9"> No Data Found on IT WEB!</td>
        </tr>
      <?php } ?>


      <?php
                $query = 'SELECT * FROM `thirdyearnet` ORDER BY name ASC';
                $results=mysqli_query($link,$query);
                if (mysqli_num_rows($results)>=1) {
                while($result=mysqli_fetch_array($results)){
                ?>
            <tr>
                <td><?php echo $result['name'];?></td>
                <td><?php echo $result['studentid'];?></td>
                <td><a href="updategradenet3.php?name=<?php echo $result['name'];?>">Update</a></td>
            </tr>
            <?php
      }
      } else {
        ?>
        <tr>
          <td colspan="9"> No Data Found on IT NET!</td>
        </tr>
      <?php } ?>


      <?php
                $query = 'SELECT * FROM `thirdyearis` ORDER BY name ASC';
                $results=mysqli_query($link,$query);
                if (mysqli_num_rows($results)>=1) {
                while($result=mysqli_fetch_array($results)){
                ?>
            <tr>
                <td><?php echo $result['name'];?></td>
                <td><?php echo $result['studentid'];?></td>
                <td><a href="updategradeis3.php?name=<?php echo $result['name'];?>">Update</a></td>
            </tr>
            <?php
      }
      } else {
        ?>
        <tr>
          <td colspan="9"> No Data Found on IS!</td>
        </tr>
      <?php } ?>
      </tbody>
    </table>











    <table id="table4" border="1" cellspacing="0">
      <button onclick="close4()" id="close4" style="color:white;background:red;padding:15px;border-radius:50px;position:relative;border:none;outline:none;margin-left: 60%;cursor:pointer;z-index: 1;width:50px;font-family:Arial Black;display:none;">x</button>

      <caption>Please Choose Student to be Edit<br><p style="font-family: Arial Black;letter-spacing: 2px;">
      (Mid Year)</p></caption>
      <thead>
        <th>Students Name</th>
        <th>Student ID Number</th>
        <th>Action</th>
      </thead>
      <tbody>
         <?php
                $query = 'SELECT * FROM `midyear` ORDER BY name ASC';
                $results=mysqli_query($link,$query);
                if (mysqli_num_rows($results)>=1) {
                while($result=mysqli_fetch_array($results)){
                ?>
            <tr>
                <td><?php echo $result['name'];?></td>
                <td><?php echo $result['studentid'];?></td>
                <td><a href="updategrade4.php?name=<?php echo $result['name'];?>">Update</a></td>
            </tr>
            <?php
      }
      } else {
        ?>
        <tr>
          <td colspan="9"> No Data Found on IT WEB!</td>
        </tr>
      <?php } ?>



      <?php
                $query = 'SELECT * FROM `midyearnet` ORDER BY name ASC';
                $results=mysqli_query($link,$query);
                if (mysqli_num_rows($results)>=1) {
                while($result=mysqli_fetch_array($results)){
                ?>
            <tr>
                <td><?php echo $result['name'];?></td>
                <td><?php echo $result['studentid'];?></td>
                <td><a href="updategradenet4.php?name=<?php echo $result['name'];?>">Update</a></td>
            </tr>
            <?php
      }
      } else {
        ?>
        <tr>
          <td colspan="9"> No Data Found on IT NET!</td>
        </tr>
      <?php } ?>




      <?php
                $query = 'SELECT * FROM `midyearis` ORDER BY name ASC';
                $results=mysqli_query($link,$query);
                if (mysqli_num_rows($results)>=1) {
                while($result=mysqli_fetch_array($results)){
                ?>
            <tr>
                <td><?php echo $result['name'];?></td>
                <td><?php echo $result['studentid'];?></td>
                <td><a href="updategradeis4.php?name=<?php echo $result['name'];?>">Update</a></td>
            </tr>
            <?php
      }
      } else {
        ?>
        <tr>
          <td colspan="9"> No Data Found on IS!</td>
        </tr>
      <?php } ?>
      </tbody>
    </table>







    <table id="table5" border="1" cellspacing="0">
      <button onclick="close5()" id="close5" style="color:white;background:red;padding:15px;border-radius:50px;position:relative;border:none;outline:none;margin-left: 60%;cursor:pointer;z-index: 1;width:50px;font-family:Arial Black;display:none;">x</button>
      <caption>Please Choose Student to be Edit<br><p style="font-family: Arial Black;letter-spacing: 2px;">
      (Fourth Year)</p></caption>
      <thead>
        <th>Students Name</th>
        <th>Student ID Number</th>
        <th>Action</th>
      </thead>
      <tbody>
         <?php
                $query = 'SELECT * FROM `fourthyear` ORDER BY name ASC';
                $results=mysqli_query($link,$query);
                if (mysqli_num_rows($results)>=1) {
                while($result=mysqli_fetch_array($results)){
                ?>
            <tr>
                <td><?php echo $result['name'];?></td>
                <td><?php echo $result['studentid'];?></td>
                <td><a href="updategrade5.php?name=<?php echo $result['name'];?>">Update</a></td>
            </tr>
            <?php
      }
      } else {
        ?>
        <tr>
          <td colspan="9"> No Data Found on IT WEB!</td>
        </tr>
      <?php } ?>



      <?php
                $query = 'SELECT * FROM `fourthyearnet` ORDER BY name ASC';
                $results=mysqli_query($link,$query);
                if (mysqli_num_rows($results)>=1) {
                while($result=mysqli_fetch_array($results)){
                ?>
            <tr>
                <td><?php echo $result['name'];?></td>
                <td><?php echo $result['studentid'];?></td>
                <td><a href="updategradenet5.php?name=<?php echo $result['name'];?>">Update</a></td>
            </tr>
            <?php
      }
      } else {
        ?>
        <tr>
          <td colspan="9"> No Data Found on IT NET!</td>
        </tr>
      <?php } ?>




      <?php
                $query = 'SELECT * FROM `fourthyearis` ORDER BY name ASC';
                $results=mysqli_query($link,$query);
                if (mysqli_num_rows($results)>=1) {
                while($result=mysqli_fetch_array($results)){
                ?>
            <tr>
                <td><?php echo $result['name'];?></td>
                <td><?php echo $result['studentid'];?></td>
                <td><a href="updategradeis5.php?name=<?php echo $result['name'];?>">Update</a></td>
            </tr>
            <?php
      }
      } else {
        ?>
        <tr>
          <td colspan="9"> No Data Found on IS!</td>
        </tr>
      <?php } ?>
      </tbody>
    </table>
</div>


<script>
  function firstyear(){
    document.getElementById("table1").style.display='block';
    document.getElementById("close1").style.display='block';
    document.getElementById("bg").style.display='block';
    document.getElementById("table2").style.display='none';
    document.getElementById("close2").style.display='none';
    document.getElementById("table3").style.display='none';
    document.getElementById("close3").style.display='none';
    document.getElementById("table4").style.display='none';
    document.getElementById("close4").style.display='none';
    document.getElementById("table5").style.display='none';
    document.getElementById("close5").style.display='none';
  }
  function close1(){
    document.getElementById("table1").style.display='none';
    document.getElementById("close1").style.display='none';
    document.getElementById("bg").style.display='none';
  }
  function secondyear(){
    document.getElementById("table2").style.display='block';
    document.getElementById("close2").style.display='block';
    document.getElementById("bg").style.display='block';
    document.getElementById("table1").style.display='none';
    document.getElementById("close1").style.display='none';
    document.getElementById("table3").style.display='none';
    document.getElementById("close3").style.display='none';
    document.getElementById("table4").style.display='none';
    document.getElementById("close4").style.display='none';
    document.getElementById("table5").style.display='none';
    document.getElementById("close5").style.display='none';
  }
  function close2(){
    document.getElementById("table2").style.display='none';
    document.getElementById("close2").style.display='none';
    document.getElementById("bg").style.display='none';
  }
  function thirdyear(){
    document.getElementById("table3").style.display='block';
    document.getElementById("close3").style.display='block';
    document.getElementById("bg").style.display='block';
    document.getElementById("table1").style.display='none';
    document.getElementById("close1").style.display='none';
    document.getElementById("table2").style.display='none';
    document.getElementById("close2").style.display='none';
    document.getElementById("table4").style.display='none';
    document.getElementById("close4").style.display='none';
    document.getElementById("table5").style.display='none';
    document.getElementById("close5").style.display='none';
  }
  function close3(){
    document.getElementById("table3").style.display='none';
    document.getElementById("close3").style.display='none';
    document.getElementById("bg").style.display='none';
  }
  function midyear(){
    document.getElementById("table4").style.display='block';
    document.getElementById("close4").style.display='block';
    document.getElementById("bg").style.display='block';
    document.getElementById("table1").style.display='none';
    document.getElementById("close1").style.display='none';
    document.getElementById("table2").style.display='none';
    document.getElementById("close2").style.display='none';
    document.getElementById("table3").style.display='none';
    document.getElementById("close3").style.display='none';
    document.getElementById("table5").style.display='none';
    document.getElementById("close5").style.display='none';
  }
  function close4(){
    document.getElementById("table4").style.display='none';
    document.getElementById("close4").style.display='none';
    document.getElementById("bg").style.display='none';
  }
  function fourthyear(){
    document.getElementById("table5").style.display='block';
    document.getElementById("close5").style.display='block';
    document.getElementById("bg").style.display='block';
    document.getElementById("table1").style.display='none';
    document.getElementById("close1").style.display='none';
    document.getElementById("table2").style.display='none';
    document.getElementById("close2").style.display='none';
    document.getElementById("table4").style.display='none';
    document.getElementById("close4").style.display='none';
    document.getElementById("table3").style.display='none';
    document.getElementById("close3").style.display='none';
  }
  function close5(){
    document.getElementById("table5").style.display='none';
    document.getElementById("close5").style.display='none';
    document.getElementById("bg").style.display='none';
  }
</script>
<?php } ?>
  </body>
</html>
