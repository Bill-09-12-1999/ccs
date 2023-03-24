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
    <title>Student Info</title>
    <style>
    body{
      margin:0;
      padding:0;
      background:linear-gradient(rgba(0,0,0,0.9),rgba(0,0,0,0.9)),url('images/ispsc.jpeg');
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
      text-transform: capitalize;
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
    #table1{
      position: absolute;
      margin-left: 25%;
      margin-right: 25%;
      margin-top: 2%;
      background: rgba(255,255,255,255.5);
      width: 60%;
      max-height: 80%;
      overflow: auto;
      padding: 40px 50px 40px 50px;
      font-family: Arial Black;
      z-index:5;
      border-radius: 10px;
      box-shadow: 0 0 10px skyblue;
    }
    #table1 td{
      text-align: center;
      font-size: 15px;
      padding: 5px;
      width: 100%;
    }
    #table1 th{
      background: gray;
      padding: 10px 10px 10px 10px;
      color: white;
      text-shadow: 1px 1px 0 black;
      width: 100%;
      font-size: 25px;
    }
    .course .IT{
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
      margin-top: 10%;
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
          <a href="admininfos.php"><li class="l1"> Registered</li></a>
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
          <a href="archirec.php"><li class="l2"> Archived</li></a>
        </ul>

      <a href="adlogout.php" class="lo">Log out</a>
    </div>



    <div class="course">
      <a href="admininfos.php" class="IT">BSIT</a>
      <a href="adminisinfos.php" class="IS">BSIS</a>
    </div>



    <table id="table1" border="1" cellspacing="0">


      (First Year)</p></caption>
      <thead>
        <th>Students Name</th>
        <th>Action</th>
      </thead>
      <tbody>
         <?php
                $query = 'SELECT * FROM `registrationis` ORDER BY name ASC';
                $results=mysqli_query($link,$query);
                if (mysqli_num_rows($results)>=1) {
                while($result=mysqli_fetch_array($results)){
                ?>
            <tr>
                <td><?php echo $result['name'];?></td>
                <td><a href="adminitinfo2.php?name=<?php echo $result['name'];?>">View Info</a></td>
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



<?php } ?>
  </body>
</html>
