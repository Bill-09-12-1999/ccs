<?php
include('conn.php');



if(isset($_POST["import"])){
  $fileName = $_FILES["file"]["tmp_name"];

  if($_FILES["file"]["size"] > 0){
    $file = fopen($fileName, "r");

    while(($column = fgetcsv($file,1000, ",")) !== FALSE){
      $sqlInsert = "INSERT INTO user(lname,fname,mname,address,eaddress,contact,sex,cs,dob,religion,degree,school,YG,honor,password)VALUES('". $column[0] . "', '". $column[1] ."' , '". $column[2] ."' , '". $column[3] ."' , '". $column[4] ."' , '". $column[5] ."' , '". $column[6] ."' , '". $column[7] ."' , '". $column[8] ."' , '". $column[9] ."' , '". $column[10] ."' , '". $column[11] ."' , '". $column[12] ."' , '". $column[13] ."' , '". $column[14] ."')";

        $result = mysqli_query($link, $sqlInsert);

        if(!empty($result)){
          echo "CSV data is being imported to the Database";
        }else{
          echo "There is Problem importing the csv file";
        }
    }
  }
}


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
    <title>Create ROG</title>
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
    .links a{
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
    }
    .links a:hover{
      transition: 0.5s;
      background: linear-gradient(to right,rgb(255 255 255 / 43%),white);
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
          <a href="facultycreaterog.php"><li class="l1">Create ROG</li></a>
        </ul>
        <ul>
          <a href="facultyupdaterog.php"><li class="l3">Update ROG(s)</li></a>
        </ul>
      <a href="facultylogout.php" class="lo">Log out</a>
    </div>






    <div class="links">
      <a href="facultyitrog1.php">First Year</a>
      <a href="facultyitrog2.php">Second Year</a>
      <a href="facultyitrog3.php">Third Year</a><br><br><br>
      <a href="facultyitrog3_1.php" style="padding:70px 55px;">Mid Year</a>
      <a href="facultyitrog4.php" style="padding:70px 55px;">Fourth Year</a>
    </div>



<?php } ?>
  </body>
</html>
