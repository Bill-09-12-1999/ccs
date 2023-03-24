<?php
include 'conn.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student List</title>
    <style>
    body{
      margin:0;
      padding:0;
    }
    *{
      margin:0;
      padding:0;
    }
    .sidemenu{
      width:15vw;
      height:100%;
      position: Fixed;
      left:0;
      top:0;
      background:gray;
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
      width: 100%;
      margin-left:15.2%;
      position:absolute;
      top:0;
    }
    caption{
      color:White;
      font-size: 44px;
      background:rgba(0, 0, 0, 0.8);
      padding:25px;
      font-family:Cooper Black;
      text-shadow: 1px 1px 2px black;
      letter-spacing: 1px;
    }

    th{
      background-color: skyblue;
      width: 30px;
      height: 35px;
      padding: 30px  0 30px 0 ;
      font-variant: inherit;
      font-family: arial black;
      font-weight: bold;
    }

    td{
      width: 70px;
      height: 20px;
      font-family: sans-serif;
      background: rgba(211, 211, 211, 0.8);
      text-align: center;
      font-weight: bold;
      text-transform: capitalize;
      padding: 20px  0 20px 0 ;
    }
    .course .IT{
      width:8%;
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
      z-index: 5;
      color:white;
      text-shadow: 2px 3px 2px green;
      background: rgba(0,0,0,0.3);
    }
    .course .IT:Hover{
      background: linear-gradient(to top, gray,silver);
      color: black;
    }
    .course .IS{
      width:8%;
      height:4vh;
      text-align: center;
      text-decoration: none;
      position:absolute;
      right:0;
      top:0;
      margin-top: 2%;
      margin-right: 2%;
      font-family:cooper Black;
      padding:10px;
      border-radius:5px;
      cursor: pointer;
      z-index: 5;
      background: linear-gradient(to top, gray,silver);
      color:black;
      text-shadow: 2px 3px 2px green;
    }
    .table #view{
      text-decoration: none;
      background: rgba(0,0,250,0.3);
      color:white;
      padding:10px;
      border-radius: 10px;
    }
    .table #view:hover{
      background: rgba(0,0,250,0.9);
    }
    .table #delete{
      border: none;
      box-shadow: 0 30px 70px rgba(0,0,0,.6);
    }
    .table img{
        border-radius: 50%;
        width: 45px;
        height: 35px;
    }
    </style>
  </head>
  <body>
    <div class="course">
      <a href="stulist.php" class="IT">BSIT</a>
      <a href="stulistis.php" class="IS">BSIS</a>
    </div>
    <div class="sidemenu">
      <img src="images/logo.png"></img>
        <ul>
          <a href="adminportal.php"><li class="l1">Dashboard</li></a>
        </ul>
        <ul>
          <a href="stulist.php"><li class="l2">Student list</li></a>
        </ul>

      <a href="adlogout.php" class="lo">Log out</a>
    </div>




    
    <div class="table">
    <table cellspacing="0">
      <thead>
        <caption>CSS Student Lists</caption>

        <th>Student Name</th>
        <th>ID Number</th>
        <th colspan="2">Action</th>
      </thead>

      <tbody>
      <?php
      $query = 'SELECT * FROM `firstyearis` ORDER BY name ASC';
        $results=mysqli_query($link,$query);
          if (mysqli_num_rows($results)>=1) {
              while($result=mysqli_fetch_array($results)){
       ?>
       <tr>
         <td><?php echo $result['name'];?></td>
         <td><?php echo $result['studentid'];?></td>
         <td><a href="adminitrog1.php?name=<?php echo $result['name'];?>" id="view">Edit Grades</a></td>
          <td><a href="adminitinfo1.php?name=<?php echo $result['name'];?>" id="view">View Student Info</a></td>
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
  </div>
  </body>
</html>
