<?php
$link = mysqli_connect("localhost","root","","portal");
?>
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Saved Reports</title>
    <style>
    body{
      margin:0;
      padding:0;
      background:url('images/ad.jpeg');
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
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
    }
    ul li{
      list-style: none;
      display: block;
      font-size: 20px;
      font-family: courier new;
      width:60%;
      padding:20px;
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
      box-shadow: 0px 5px 6px rgba(0,0,0,0.6),0px -5px 6px rgba(255,255,255,0.1);
      font-family: cooper Black;
    }
    .l2{
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
    .bg{
      background: rgba(0,0,0,0.8);
      position:fixed;
      width:100%;
      height:100%;
      top:0;
      z-index: -1;
    }
    .table{
      width: 75%;
      background: white;
      margin-left: 8%;
      margin-top: 5%;
      padding: 20px;
    }
    .table table{
      width: 100%;
    }
    .table table caption{
      font-family: Elephant;
      font-size: 30px;
      padding: 10px;
      height: 10vh;
    }
    .table table th{
      font-family: arial;
      font-size: 20px;
      padding: 10px;
    }
    .table table td{
      text-align: center;
      font-family: arial;
      padding: 15px;
    }
    .table #view{
      background: green;
      padding: 10px;
      text-decoration: none;
      color: white;
      border-radius: 5px;
    }
    .table #edit{
      background: red;
      padding: 10px;
      text-decoration: none;
      color: white;
      border-radius: 5px;
    }
    .table #print{
      background: blue;
      padding: 10px;
      text-decoration: none;
      color: white;
      border-radius: 5px;
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
    </style>
  </head>
  <body>
    <div class="bg"></div>
    <div class="sidemenu">
      <img src="images/logo.png"></img>
        <ul>
          <a href="clerkportal.php"><li class="l2">Dashboard</li></a>
        </ul>
        <ul>
          <a href="clerkstudentrecords.php"><li class="l2">Grade Reports</li></a>
        </ul>
        <ul>
          <a href="clerksavedstudentrecords.php"><li class="l1">Saved Reports</li></a>
        </ul>
        <ul>
          <a href="uploadreceive.php"><li class="l2">Completion forms</li></a>
        </ul>
        
      <a href="clerklogout.php" class="lo">Log out</a>
    </div>



    <div style="width:10vw; height:20vh;position:absolute;right:0;" class="sidemenu-right">

        <center><a href="clerksaveditstudentrecords.php" id="IT">IT</a><br>
        <a href="clerksavedisstudentrecords.php" id="IS">IS</a></center>
    </div>




    <center><div class="table">
      <table>
        <thead>
                <caption>IT Students</caption>

                <th>Student Name</th>
                <th>Student ID #</th>
                <th>Student Course</th>
        </thead>
        <tbody>
                <?php
                $query = 'SELECT * FROM `registraritrecords` ORDER BY name ASC';
                $results=mysqli_query($link,$query);
                if (mysqli_num_rows($results)>=1) {
                while($result=mysqli_fetch_array($results)){
                ?>
            <tr>
                <td><?php echo $result['name'];?></td>
                <td><?php echo $result['studentid'];?></td>
                <td><?php echo $result['course'];?></td>
                <td><a href="clerkitviewgrade.php?id=<?php echo $result['id'];?>" id="view">view info</a></td>
                <td><a href="clerkiteditgrade.php?id=<?php echo $result['id'];?>" id="edit">Edit</a></td>
                <td><a href="clerkprint.php?id=<?php echo $result['id'];?>" id="print">Print</a></td>
                <td><a href="prospectus.php?id=<?php echo $result['id'];?>" id="print">Convert Prospectus</a></td>
            </tr>
            <?php
      }
      } else {
        ?>
        <tr>
          <td colspan="9"> No Data Found!</td>
        </tr>
      <?php } ?>
        </tbody>
      </table>
    </div></center>




  </body>
</html>
