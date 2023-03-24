<?php 

include('config.php');


?>

<html>
<head>
  <title>Import CSV</title>
  <style>
    body{
        margin: 0;
        padding: 0;
    }
    *{
        margin: 0;
        padding: 0;
    }
  </style>
</head>
<body>


<form action="insert_data.php" enctype="multipart/form-data" method="post">

  <label>Import csv file</label>
  <input type="file" name="csv" id="csv" class="large">
  <input type="submit" name="form_submit" value="import file">

</form>

</body>
</html>