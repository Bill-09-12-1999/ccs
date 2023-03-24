<?php
$link = mysqli_connect("localhost","root","","portal");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>uploaded</title>
    <style>
        body{
          margin:0;
          padding:0;
          background: rgba(0,0,0,0.9);
          color:white;
        }
        *{
          margin:0;
          padding:0;
        }
        .tab{
          position: absolute;
          margin-top: 1.4%;
          margin-left: 18%;
        }
        .tab th{
          text-align: center;
          font-family: arial black;
          font-size: 20px;
          padding:10px;
        }
        .tab td{
          padding:20px;
        }
        .tab a{
          text-align: center;
          margin-left: 50%;
          font-family: arial black;
          font-size: 20px;
        }
    </style>
  </head>
  <body>
    <div class="tab">
    <table border=1 cellspacing=0 cellpadding=10>
      <tr>
        <th>#</th>
        <th>Image</th>
        <th>Tmp_Name</th>
        <th>Identity_Name:</th>
      </tr>
      <?php
        $i = 1;
        $rows = mysqli_query($link, "SELECT * FROM upload1 ORDER BY id DESC");
      ?>
      <?php
        foreach($rows as $row) :
      ?>
      <tr>
        <td><?php echo $i++; ?></td>
        <td><img src="upload1/<?php echo $row['image'];?>" width=200 title="<?php echo $row['image']; ?>"></td>
        <td><?Php echo $row['image'];?></td>
        <td><?Php echo $row['name'];?></td>
      </tr>
        <?php endforeach; ?>
        <a href="upload1.php">BACK</a>
    </table>
  </div>
  </body>
</html>
