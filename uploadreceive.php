<?php
$link = mysqli_connect("localhost","root","","portal");
?>
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Uploaded ROG's</title>
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
    .tab{
      margin-left: 15%;
      margin-top: 2%;
      color: white;
    }
    .tab table th{
      padding: 5px;
      background: blue;
      font-family: arial;
      font-size: 25px;
      text-shadow: 1px 1px 2px black;
    }
    .tab table td{
      padding: 20px;
      text-align: center;
      font-family: arial;
    }
    .tab table td:hover{
      transform: scale(0.8);
      transition: 0.2s;
      background: linear-gradient(to top right,green,red);
    }
    .tab table img:hover{
      transform: scale(5.8);
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
          <a href="clerksaveditstudentrecords.php"><li class="l2">Saved Reports</li></a>
        </ul>
        <ul>
          <a href="uploadreceive.php"><li class="l1">Completion forms</li></a>
        </ul>
        
      <a href="clerklogout.php" class="lo">Log out</a>
    </div>


    <div class="tab">
    <table border="0" cellspacing="0" cellpadding="10">
      <tr>
        <th>COMPLETION FORM IMAGE</th>
        <th>Img_Tmp_Name</th>
        <th>STUDENT ID NUMBER</th>
        <th>COURSE</th>
        <th>DATE UPLOADED</th>
        <th>STUDENT NAME</th>
      </tr>
      <?php
        $i = 1;
        $rows = mysqli_query($link, "SELECT * FROM upload ORDER BY date DESC");
      ?>
      <?php
        foreach($rows as $row) :
      ?>
      <tr>
        <td><img src="upload/<?php echo $row['image'];?>" width=200 title="<?php echo $row['image']; ?>"></td>
        <td><?Php echo $row['image'];?></td>
        <td><?Php echo $row['studentid'];?></td>
        <td><?Php echo $row['course'];?></td>
        <td><?Php echo $row['date'];?></td>
        <td><?Php echo $row['name'];?></td>
      </tr>
        <?php endforeach; ?>
    </table>
  </div>



  </body>
</html>
