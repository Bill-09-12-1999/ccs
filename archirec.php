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
    <title>Prospectus</title>
    <style>
    body{
      margin:0;
      padding:0;
      background:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url('images/building.jpeg');
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
      background: rgba(255,255,255,0.4);
      width:70%;
      border-radius:20px;
      font-size: 40px;
      padding:20px;
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
    .l4{
      transform: translateX(10px);
      font-family: cooper Black;
    }
    .sidemenu a{
      text-decoration: none;
      color:black;
    }
    .table{
      width: 75%;
      background: white;
      margin-left: 15%;
      margin-top: 5%;
      padding: 20px;
      border-radius: 10px;
      animation: Appear 0.9s;
    }
    @keyframes Appear{
      from{
        opacity: 0;
        transform: rotateX(100deg);
      }to{
        opacity: 1;
        transform: rotateX(0);
      }
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
    .table #print{
      background: blue;
      padding: 10px;
      text-decoration: none;
      color: white;
      border-radius: 5px;
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
          <a href="admincalc.php"><li class="l2"> Reports</li></a>
        </ul>
        <ul>
          <a href="qualified.php"><li class="l2"> Dean's Lister</li></a>
        </ul>
        <ul>
          <a href="archirec.php"><li class="l1"> Archived</li></a>
        </ul>

      <a href="adlogout.php" class="lo">Log out</a>
    </div>



    <center><div class="table">
      <table>
        <thead>
                <caption>CCS Students</caption>

                <th>Student Name</th>
                <th>Student ID #</th>
                <th>Student Course</th>
        </thead>
        <tbody>
                <?php
                $query = 'SELECT * FROM `archive` ORDER BY name ASC';
                $results=mysqli_query($link,$query);
                if (mysqli_num_rows($results)>=1) {
                while($result=mysqli_fetch_array($results)){
                ?>
            <tr>
                <td><?php echo $result['name'];?></td>
                <td><?php echo $result['studentid'];?></td>
                <td><?php echo $result['course'];?></td>
                <td><a href="archiprospectus.php?name=<?php echo $result['name'];?>" id="print">Convert Prospectus</a></td>
            </tr>
            <?php
      }
      } else {
        ?>
        <tr>
          <td colspan="9"> No Data Found!</td>
        </tr>
      <?php } ?>



      <?php
                $query = 'SELECT * FROM `archiveis` ORDER BY name ASC';
                $results=mysqli_query($link,$query);
                if (mysqli_num_rows($results)>=1) {
                while($result=mysqli_fetch_array($results)){
                ?>
            <tr>
                <td><?php echo $result['name'];?></td>
                <td><?php echo $result['studentid'];?></td>
                <td><?php echo $result['course'];?></td>
                <td><a href="archiprospectusis.php?name=<?php echo $result['name'];?>" id="print">Convert Prospectus</a></td>
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


<?php } ?>
  </body>
</html>
