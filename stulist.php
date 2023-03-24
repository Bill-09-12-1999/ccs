<?php
include 'conn.php';
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
    <title>Update ROG</title>
    <style>
    body{
      margin:0;
      padding:0;
      background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,1)),url('images/ispsc.jpeg');
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      background-attachment: fixed;
    }
    *{
      margin:0;
      padding:0;
    }
    .sidemenu{
      width:17vw;
      height:150%;
      position: absolute;
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
      transform: translateX(10px);
      box-shadow: 0px 5px 6px rgba(0,0,0,0.6),0px -5px 6px rgba(255,255,255,0.1);
    }
    .l2{
      transform: translateX(10px);
      box-shadow: 0px 5px 6px rgba(0,0,0,0.6),0px -5px 6px rgba(255,255,255,0.1);
      font-family: cooper Black;
    }
    .l1{
      transform: translateX(10px);
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
    .table table{
      width: 85%;
      margin-left:17%;
      position:absolute;
      top:0;
    }
    .table caption{
      color:White;
      font-size: 44px;
      background:rgba(0, 0, 0, 0.8);
      padding:25px;
      font-family:Cooper Black;
      text-shadow: 1px 1px 2px black;
      letter-spacing: 1px;
      backdrop-filter: blur(2px);
    }
    .table td{
      font-family: sans-serif;
      text-align: center;
      font-weight: bold;
      text-transform: capitalize;
      padding: 20px  0 20px 0 ;
      animation: Appear 1.52s;
    }
    @keyframes Appear{
      from{
        opacity: 0;
        transform: rotateX(260deg);
      }to{
        opacity: 1;
        transform: rotateX(0);
      }
    }
    .table button{
      background: rgb(0 27 159 / 50%);
      padding: 60px 40px 60px 40px;
      color: white;
      border: none;
      outlline: none;
      text-shadow: -5px 2px 0px black;
      font-size: 25px;
      border-radius: 5px;
      cursor: pointer;
      width: 80%;
      box-shadow: inset 1px 2px 20px rgb(125 125 141), -2px 5px 8px 4px rgb(0 0 0 / 71%);
      font-family: Arial Black;
      letter-spacing: 2px;
      backdrop-filter: blur(2px);
    }
    .table button:hover{
      background: rgb(255 255 255 / 75%);
      color: #0e0000;
      text-shadow: 0px 3px 20px black;
      transition: 1s ease;
    }
    #table1{
      position: absolute;
      margin-left: 30%;
      margin-right: 25%;
      margin-top: 10%;
      background: rgba(255,255,255,255.5);
      width: 50%;
      padding: 40px 50px 40px 50px;
      font-family: Arial Black;
      transform: scale(1.2);
      display: none;
      z-index:5;
      border-radius: 10px;
    }
    #table1 caption{
      padding: 10px 20px 10px 20px;
      font-family: ALGERIAN;
      font-size: 20px;
      width: 93.1%;
    }
    #table1 td{
      text-align: center;
      font-size: 12px;
      padding: 5px;
      width: 100%;
    }
    #table1 th{
      background: gray;
      padding: 10px 10px 10px 10px;
      color: white;
      text-shadow: 1px 1px 0 black;
      width: 100%;
    }
    #table2{
      position: absolute;
      margin-left: 25%;
      margin-right: 25%;
      margin-top: 10%;
      background: rgba(255,255,255,255.5);
      width: 50%;
      padding: 40px 50px 40px 50px;
      font-family: Arial Black;
      transform: scale(1.5);
      display: none;
      z-index:5;
      border-radius: 10px;
    }
    #table2 caption{
      padding: 10px 20px 10px 20px;
      font-family: ALGERIAN;
      font-size: 20px;
      width: 93.1%;
    }
    #table2 td{
      text-align: center;
      font-size: 12px;
      padding: 5px;
      width: 100%;
    }
    #table2 th{
      background: gray;
      padding: 10px 10px 10px 10px;
      color: white;
      text-shadow: 1px 1px 0 black;
      width: 100%;
    }
    #table3{
      position: absolute;
      margin-left: 25%;
      margin-right: 25%;
      margin-top: 10%;
      background: rgba(255,255,255,255.5);
      width: 50%;
      padding: 40px 50px 40px 50px;
      font-family: Arial Black;
      transform: scale(1.5);
      display: none;
      z-index:5;
      border-radius: 10px;
    }
    #table3 caption{
      padding: 10px 20px 10px 20px;
      font-family: ALGERIAN;
      font-size: 20px;
      width: 93.1%;
    }
    #table3 td{
      text-align: center;
      font-size: 12px;
      padding: 5px;
      width: 100%;
    }
    #table3 th{
      background: gray;
      padding: 10px 10px 10px 10px;
      color: white;
      text-shadow: 1px 1px 0 black;
      width: 100%;
    }
    #table4{
      position: absolute;
      margin-left: 25%;
      margin-right: 25%;
      margin-top: 10%;
      background: rgba(255,255,255,255.5);
      width: 50%;
      padding: 40px 50px 40px 50px;
      font-family: Arial Black;
      transform: scale(1.5);
      display: none;
      z-index:5;
      border-radius: 10px;
    }
    #table4 caption{
      padding: 10px 20px 10px 20px;
      font-family: ALGERIAN;
      font-size: 20px;
      width: 93.1%;
    }
    #table4 td{
      text-align: center;
      font-size: 12px;
      padding: 5px;
      width: 100%;
    }
    #table4 th{
      background: gray;
      padding: 10px 10px 10px 10px;
      color: white;
      text-shadow: 1px 1px 0 black;
      width: 100%;
    }
    #table5{
      position: absolute;
      margin-left: 25%;
      margin-right: 25%;
      margin-top: 10%;
      background: rgba(255,255,255,255.5);
      width: 50%;
      padding: 40px 50px 40px 50px;
      font-family: Arial Black;
      transform: scale(1.5);
      display: none;
      z-index:5;
      border-radius: 10px;
    }
    #table5 caption{
      padding: 10px 20px 10px 20px;
      font-family: ALGERIAN;
      font-size: 20px;
      width: 93.1%;
    }
    #table5 td{
      text-align: center;
      font-size: 12px;
      padding: 5px;
      width: 100%;
    }
    #table5 th{
      background: gray;
      padding: 10px 10px 10px 10px;
      color: white;
      text-shadow: 1px 1px 0 black;
      width: 100%;
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
      margin-right: 1%;
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
    </style>
  </head>
  <body>
    <div class="sidemenu">
      <img src="images/logo.png" id="img1"></img>
      <img src="images/ccs.jpg" id="img2"></img>
        <ul>
          <a href="adminportal.php"><li class="l1">Dashboard</li></a>
        </ul>
        <ul>
          <a href="stulist.php"><li class="l2">Update IP's</li></a>
        </ul>
        <ul>
          <a href="admininfos.php"><li class="l1"> Registered</li></a>
        </ul>
        <ul>
          <a href="adminprospectusnew.php"><li class="l1">Prospectus</li></a>
        </ul>
        <ul>
          <a href="admincalc.php"><li class="l1"> Reports</li></a>
        </ul>
        <ul>
          <a href="qualified.php"><li class="l1"> Dean's Lister</li></a>
        </ul>
        <ul>
          <a href="archirec.php"><li class="l1"> Archived</li></a>
        </ul>

      <a href="adlogout.php" class="lo">Log out</a>
    </div>





    <div class="table">
    <table cellspacing="0">
      <thead>
        <caption>UPDATE Student's IP</caption>
      </thead>

      <tbody>
       <tr style="height:20vh;">
       </tr>
       <tr>
         <td><button onclick="firstyear()">First Year</button></td>
         <td><button onclick="secondyear()">Second Year</button></td>
         <td><button onclick="thirdyear()">Third Year</button></td>
         <td><button onclick="midyear()">Mid Year</button></td>
         <td><button onclick="fourthyear()">Fourth Year</button></td>
       </tr>




<div style="position:fixed;width:100%;height:100%;background: rgba(0,0,0,0.9);z-index:1;display:none;top:0;left:0;" id="bg">
      <table id="table1" border="1" cellspacing="0">
      <button onclick="close1()" id="close1" style="color:white;background:red;padding:15px;border-radius:50px;position:relative;border:none;outline:none;margin-left: 60%;cursor:pointer;z-index: 1;width:50px;font-family:Arial Black;display:none;transform: none;
        box-shadow: none;">x</button>


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
                <td><a href="adminupdategrade1.php?name=<?php echo $result['name'];?>">Update</a></td>
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
                <td><a href="adminupdategradeis1.php?name=<?php echo $result['name'];?>">Update</a></td>
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
      <button onclick="close2()" id="close2" style="color:white;background:red;padding:15px;border-radius:50px;position:relative;border:none;outline:none;margin-left: 60%;cursor:pointer;z-index: 1;width:50px;font-family:Arial Black;display:none;transform: none;
        box-shadow: none;">x</button>

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
                <td><a href="adminupdategrade2.php?name=<?php echo $result['name'];?>">Update</a></td>
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
                <td><a href="adminupdategradeis2.php?name=<?php echo $result['name'];?>">Update</a></td>
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
      <button onclick="close3()" id="close3" style="color:white;background:red;padding:15px;border-radius:50px;position:relative;border:none;outline:none;margin-left: 60%;cursor:pointer;z-index: 1;width:50px;font-family:Arial Black;display:none;transform: none;
        box-shadow: none;">x</button>

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
                <td><a href="adminupdategrade3.php?name=<?php echo $result['name'];?>">Update</a></td>
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
                <td><a href="adminupdategradenet3.php?name=<?php echo $result['name'];?>">Update</a></td>
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
                <td><a href="adminupdategradeis3.php?name=<?php echo $result['name'];?>">Update</a></td>
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
      <button onclick="close4()" id="close4" style="color:white;background:red;padding:15px;border-radius:50px;position:relative;border:none;outline:none;margin-left: 60%;cursor:pointer;z-index: 1;width:50px;font-family:Arial Black;display:none;transform: none;
        box-shadow: none;">x</button>

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
                <td><a href="adminupdategrade4.php?name=<?php echo $result['name'];?>">Update</a></td>
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
                <td><a href="adminupdategradenet4.php?name=<?php echo $result['name'];?>">Update</a></td>
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
                <td><a href="adminupdategradeis4.php?name=<?php echo $result['name'];?>">Update</a></td>
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
      <button onclick="close5()" id="close5" style="color:white;background:red;padding:15px;border-radius:50px;position:relative;border:none;outline:none;margin-left: 60%;cursor:pointer;z-index: 1;width:50px;font-family:Arial Black;display:none;transform: none;
        box-shadow: none;">x</button>
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
                <td><a href="adminupdategrade5.php?name=<?php echo $result['name'];?>">Update</a></td>
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
                <td><a href="adminupdategradenet5.php?name=<?php echo $result['name'];?>">Update</a></td>
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
                <td><a href="adminupdategradeis5.php?name=<?php echo $result['name'];?>">Update</a></td>
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











<div id="accessbutton">
    <button onclick="openForm()" id="open">Send Confirmation</button>
    </div>


    <div class="formmsgtoadmin" id="form">
      <div style="position:absolute;top:0;margin-top: 4%; margin-left: 35%; background:white;width:500px;height:70%;border-radius: 10px;padding:20px;font-family: arial; font-size: 20px; overflow:auto;" id="exform">


        <button onclick="closeForm()" id="close">x</button>

        <form action="request1copy.php" method="POST">
          <h1>WRITE YOUR CONFIRMATION</h1><br><br>
          <p>
            Hi! This is
            <input type="text" name="sender" placeholder="Enter your System's Department Position..." required> of Ilocos Sur Polytechnic State College. Your request on updating the grade of <input type="text" name="student" placeholder="Enter the Name of Student..." required> in the Course of <input type="text" name="courseno" placeholder="Enter the Course #..." required>, with the Descriptive Title of <input type="text" name="des" placeholder="Enter the Descriptive Title..." required> is being viewed and approved.<br><br><br><br>

            Your request may experience delays due to huge amount of transactions.<br><br><br><br><br><br>


            Thank You & Good Day.
          </p>
          <center><button type="Submit">Send</button></center>
        </form>
      </div>
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



  function openForm(){
        document.getElementById('form').style.display='block';
        document.getElementById('close').style.display='block';
  }

  function closeForm(){
        document.getElementById('form').style.display='none';
        document.getElementById('close').style.display='none';
  }
</script>
   </tbody>
    </table>
  </div>
<?php } ?>
  </body>
</html>
