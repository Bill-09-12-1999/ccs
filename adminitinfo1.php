<?php
include('conn.php');
session_start();
$name=$_GET['name'];
?>

<html>
<head>
	<title>Student Information</title>
<style>
	*{
			margin: 0;
			padding: 0;
		}
		body{
			margin: 0;
			padding: 0;
			background: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)),url('images/school.jpeg');
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center;
			background-attachment: fixed;
			user-select: none;
			animation: Appear 1.52s;
    }
    @keyframes Appear{
      from{
        opacity: 0;
        transform: rotateX(50deg);
      }to{
        opacity: 1;
        transform: rotateX(0);
      }
    }
		.table{
			width: 500px;
			font-family: Arial;
			padding: 25px;
			margin-top: 5%;
			margin-bottom: 5%;
			box-shadow: 1px 1px 10px black;
			border-radius: 10px;
			background: white;
		}
		.table table{
			width: 100%;
		}
		.table th{
			background: gray;
			padding: 20px;
			font-size: 20px;
			color: white;
			text-shadow: 1px 1px 0 black;
			border-radius:5px;
		}
		.table td{
			font-size: 15px;
			font-family: Arial Black;
			width: 100%;
			text-transform: capitalize;
		}
</style>
</head>
<body>



	<?php
    $query = "SELECT * FROM `registration` WHERE `name`= '$name'";
    $results = mysqli_query($link,$query);
    $result= mysqli_fetch_array($results);
    ?>

	
	<center>
		<div class="table">
		<table>
			<thead>
				<tr>
					<th>(Personal Details)</th>
				</tr>
			</thead>
			<tbody>
				<tr style="height:5vh;"></tr>
				<tr>
					<td>Name:</td>
				</tr>
				<tr>
					<td style="color:red; text-decoration: underline;background: skyblue; padding:10px;"><?php echo $result['name']; ?></td>
				</tr>
				<tr>
					<td>Age:</td>
				</tr>
				<tr>
					<td style="color:red; text-decoration: underline;background: skyblue; padding:10px;"><?php echo $result['age']; ?></td>
				</tr>
				<tr>
					<td>Gender:</td>
				</tr>
				<tr>
					<td style="color:red; text-decoration: underline;background: skyblue; padding:10px;"><?php echo $result['sex']; ?></td>
				</tr>
				<tr>
					<td>Email:</td>
				</tr>
				<tr>
					<td style="color:red; text-decoration: underline;background: skyblue; padding:10px;"><?php echo $result['email']; ?></td>
				</tr>
				<tr style="height:5vh;"></tr>
				<tr>
					<td style="text-align: center;text-transform: uppercase;background: gray;color:white;text-shadow:1px 1px 0 black;padding:20px;border-radius:5px;">
					Educational Background</td>
				</tr>
				<tr style="height:5vh;"></tr>
				<tr>
					<td>Elementary:</td>
				</tr>
				<tr>
					<td style="color:red; text-decoration: underline;background: skyblue; padding:10px;"><?php echo $result['elem']; ?></td>
				</tr>
				<tr>
					<td>Year Graduated:</td>
				</tr>
				<tr>
					<td style="color:red; text-decoration: underline;background: skyblue; padding:10px;"><?php echo $result['elemG']; ?></td>
				</tr>
				<tr>
					<td>Junior High School:</td>
				</tr>
				<tr>
					<td style="color:red; text-decoration: underline;background: skyblue; padding:10px;"><?php echo $result['jhs']; ?></td>
				</tr>
				<tr>
					<td>Year Graduated:</td>
				</tr>
				<tr>
					<td style="color:red; text-decoration: underline;background: skyblue; padding:10px;"><?php echo $result['jhsG']; ?></td>
				</tr>
				<tr>
					<td>Senior High School:</td>
				</tr>
				<tr>
					<td style="color:red; text-decoration: underline;background: skyblue; padding:10px;"><?php echo $result['shs']; ?></td>
				</tr>
				<tr>
					<td>Year Graduated:</td>
				</tr>
				<tr>
					<td style="color:red; text-decoration: underline;background: skyblue; padding:10px;"><?php echo $result['shsG']; ?></td>
				</tr>
				<tr style="height:5vh;"></tr>
				<tr>
					<td><a href="admininfos.php" style="font-family: Arial Black;font-size: 20px;">Back</a>
					</td>
				</tr>
			</tbody>
		</table>
		</form>
	</div></center>
	<center><br><br><br><br><br><br><br><br>
</div>
</form>




























</script>	
</body>
</html>