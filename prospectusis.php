<?php
include('conn.php');
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

<?php
$name=$_GET['name'];
?>

<html>
<head>
<title>Prospectus</title>
<style>
	*{
		margin: 0;
		padding: 0;
	}
	body{
		margin: 0;
		padding: 0;
		font-family: arial;
	}
	.header{
		width: 100%;
		background: white;
		text-align: center;
	}
	.header h3{
		padding-top: 20px;
	}
	.header .img1{
		width: 100px;
		height: 100px;
		position: absolute;
		margin-top: -100px;
		left: 0;
		margin-left: 200px;
		border-radius: 50%;
	}
	.header .img2{
		width: 100px;
		height: 100px;
		position: absolute;
		margin-top: -100px;
		left: 0;
		margin-left: 320px;
		border-radius: 50%;
	}
	.body{
		position: absolute;
		left: 0;
		width: 100%;
	}
	.body table{
		width: 100%;
		text-align: center;
	}
	.body table td{
		height: 4vh;
		text-transform: capitalize;
	}
	.body .img3{
		width: 100px;
		height: 100px;
		position: absolute;
		margin-top: -125px;
		left: 0;
		margin-left: 60px;
		border-radius: 50%;
	}
	.body input{
		width: 100%;
		height: 100%;
		text-align: center;
		border: none;
		font-size: 15px;
		font-family: Arial Black;
		background: none;
	}
	#total1{
		font-family: arial black;
	}
	#total2{
		font-family: arial black;
	}
	#total3{
		font-family: arial black;
	}
	#total4{
		font-family: arial black;
	}
	#total5{
		font-family: arial black;
	}
	#total6{
		font-family: arial black;
	}
	#total7{
		font-family: arial black;
	}
	#total8{
		font-family: arial black;
	}
	#total9{
		font-family: arial black;
	}
#printer{
      	position: absolute;
      	left: 0;
      	top: 0;
      	margin-top: 1%;
      	margin-left: 1%;
      	padding: 10px 20px;
      	background: green;
      	border: none;
      	border-radius: 5px;
      	box-shadow: 3px 3px 5px black;
      	cursor: pointer;
}
@media print{
    #printer{
    	visibility: hidden;
	}
	body{
		visibility: visible;
	}
  }
#printer svg{
      animation: svganimation 4s linear infinite;
    }
    @keyframes svganimation{
      0%{
        transform: rotateY(0deg);
        color: black;
        border-radius: 50%;
      }50%{
        transform: rotateY(200deg);
        color: red;
        border-radius: 50%;
      }100%{
      	transform: rotateY(360deg);
        color: white;
        border-radius: 50%;
      }
    }
    #archi1{
    	position: absolute;
    	right: 0;
    	margin-right: 2%;
    	text-decoration: none;
    	background: red;
    	color: white;
    	border-radius: 5px;
    	box-shadow: 4px 4px 9px black;
    	margin-top: 3%;
    	cursor: pointer;
    	padding:10px 20px;
        z-index: 2;
    }
</style>
</head>
<body>
<button onclick="window.print()" id="printer">
		<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16">
  	<path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z"/>
  	<path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
</svg>
</button>

<?php
						require'conn.php';
						$query=mysqli_query($link, "SELECT * FROM `firstyearis`") or die(mysqli_error());
						while($fetch=mysqli_fetch_array($query)){
					?>

    <a href="archiving3.php?name=<?php echo $fetch['name']?>" id="archi1">Archive Records</a>
    			<?php
						}
	?>



	<?php
    $query = "SELECT * FROM `firstyearis` WHERE `name`= '$name'";
    $results = mysqli_query($link,$query);
    $result= mysqli_fetch_array($results);
    ?>



	<div class="header">
		<h3>ILOCOS SUR POLYTECHNIC STATE COLLEGE</h3><br>
		<p style="position:relative;margin-top:-15px;">BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY<br>(Compliant to CMO 25, s.2015 and CMO 20, s.2013)<br>Effective School Year 2018-2019<br>
			<b>Data Analytics</b></p>
		<img src="images/logo.png" class="img1">
		<img src="images/ccs.jpg" class="img2">
	</div><br>

	<div class="body">
		<h4 style="margin-left: 30px;">Name: <i><?php echo $result['name'];?></i></h4>
		<h4 style="text-align: center;margin-top:-20px;">FIRST YEAR</h4>
		<table border="1" cellspacing="0" id="table">
			<thead>
				<tr>
					<th colspan="5">First Semester</th>
					<th colspan="5">Second Semester</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td style="width:100px;">Course No.</td>
					<td style="width:60px;">Grades</td>
					<td>Descriptive Title</td>
					<td style="width:60px;">Units</td>
					<td>School</td>
					<td style="width:100px;">Course No.</td>
					<td style="width:60px;">Grades</td>
					<td>Descriptive Title</td>
					<td style="width:60px;">Units</td>
					<td>School</td>
				</tr>
				<tr>
					<td><?php echo $result['sub']; ?></td>
					<td><?php echo $result['grade']; ?></td>
					<td><?php echo $result['des']; ?></td>
					<td><?php echo $result['units']; ?></td>
					<td><?php echo $result['school']; ?></td>


					<td><?php echo $result['sub11']; ?></td>
					<td><?php echo $result['grade11']; ?></td>
					<td><?php echo $result['des11']; ?></td>
					<td><?php echo $result['units11']; ?></td>
					<td><?php echo $result['school11']; ?></td>
				</tr>
				<tr>
					<td><?php echo $result['sub2']; ?></td>
					<td><?php echo $result['grade2']; ?></td>
					<td><?php echo $result['des2']; ?></td>
					<td><?php echo $result['units2']; ?></td>
					<td><?php echo $result['school2']; ?></td>


					<td><?php echo $result['sub12']; ?></td>
					<td><?php echo $result['grade12']; ?></td>
					<td><?php echo $result['des12']; ?></td>
					<td><?php echo $result['units12']; ?></td>
					<td><?php echo $result['school12']; ?></td>
				</tr>
				<tr>
					<td><?php echo $result['sub3']; ?></td>
					<td><?php echo $result['grade3']; ?></td>
					<td><?php echo $result['des3']; ?></td>
					<td><?php echo $result['units3']; ?></td>
					<td><?php echo $result['school3']; ?></td>
					<td><?php echo $result['sub13']; ?></td>
					<td><?php echo $result['grade13']; ?></td>
					<td><?php echo $result['des13']; ?></td>
					<td><?php echo $result['units13']; ?></td>
					<td><?php echo $result['school13']; ?></td>
				</tr>
				<tr>
					<td><?php echo $result['sub4']; ?></td>
					<td><?php echo $result['grade4']; ?></td>
					<td><?php echo $result['des4']; ?></td>
					<td><?php echo $result['units4'] ?></td>
					<td><?php echo $result['school4']; ?></td>


					<td><?php echo $result['sub14']; ?></td>
					<td><?php echo $result['grade14']; ?></td>
					<td><?php echo $result['des14']; ?></td>
					<td><?php echo $result['units14']; ?></td>
					<td><?php echo $result['school14']; ?></td>
				</tr>
				<tr>
					<td><?php echo $result['sub5']; ?></td>
					<td><?php echo $result['grade5']; ?></td>
					<td><?php echo $result['des5']; ?></td>
					<td><?php echo $result['units5']; ?></td>
					<td><?php echo $result['school5']; ?></td>


					<td><?php echo $result['sub15']; ?></td>
					<td><?php echo $result['grade15']; ?></td>
					<td><?php echo $result['des15']; ?></td>
					<td><?php echo $result['units15']; ?></td>
					<td><?php echo $result['school15']; ?></td>
				</tr>
				<tr>
					<td><?php echo $result['sub6']; ?></td>
					<td><?php echo $result['grade6']; ?></td>
					<td><?php echo $result['des6']; ?></td>
					<td><?php echo $result['units6']; ?></td>
					<td><?php echo $result['school6']; ?></td>


					<td><?php echo $result['sub16']; ?></td>
					<td><?php echo $result['grade16']; ?></td>
					<td><?php echo $result['des16']; ?></td>
					<td><?php echo $result['units16']; ?></td>
					<td><?php echo $result['school16']; ?></td>
				</tr>
				<tr>
					<td><?php echo $result['sub7']; ?></td>
					<td><?php echo $result['grade7']; ?></td>
					<td><?php echo $result['des7']; ?></td>
					<td><?php echo $result['units7']; ?></td>
					<td><?php echo $result['school7']; ?></td>


					<td><?php echo $result['sub17']; ?></td>
					<td><?php echo $result['grade17']; ?></td>
					<td><?php echo $result['des17']; ?></td>
					<td><?php echo $result['units17']; ?></td>
					<td><?php echo $result['school17']; ?></td>
				</tr>
				<tr>
					<td><?php echo $result['sub8']; ?></td>
					<td><?php echo $result['grade8']; ?></td>
					<td><?php echo $result['des8']; ?></td>
					<td><?php echo $result['units8']; ?></td>
					<td><?php echo $result['school8']; ?></td>


					<td><?php echo $result['sub18']; ?></td>
					<td><?php echo $result['grade18']; ?></td>
					<td><?php echo $result['des18']; ?></td>
					<td><?php echo $result['units18']; ?></td>
					<td><?php echo $result['school18']; ?></td>
				</tr>
				<tr>
					<td><?php echo $result['sub9']; ?></td>
					<td><?php echo $result['grade9']; ?></td>
					<td><?php echo $result['des9']; ?></td>
					<td><?php echo $result['units9']; ?></td>
					<td><?php echo $result['school9']; ?></td>


					<td><?php echo $result['sub19']; ?></td>
					<td><?php echo $result['grade19']; ?></td>
					<td><?php echo $result['des19']; ?></td>
					<td><?php echo $result['units19']; ?></td>
					<td><?php echo $result['school19']; ?></td>
				</tr>
				<tr>
					<td><?php echo $result['sub10']; ?></td>
					<td><?php echo $result['grade10']; ?></td>
					<td><?php echo $result['des10']; ?></td>
					<td><?php echo $result['units10']; ?></td>
					<td><?php echo $result['school10']; ?></td>


					<td><?php echo $result['sub20']; ?></td>
					<td><?php echo $result['grade20']; ?></td>
					<td><?php echo $result['des20']; ?></td>
					<td><?php echo $result['units20']; ?></td>
					<td><?php echo $result['school20']; ?></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><p style="font-family: Arial Black;">TOTAL</p></td>
					<td id="total1"></td>
					<td></td>
					<td></td>
					<td></td>
					<td><p style="font-family: Arial Black;">TOTAL</p></td>
					<td id="total2"></td>
					<td></td>
				</tr>

			</tbody>
		</table>








		<?php
		    $query = "SELECT * FROM `secondyearis` WHERE `name`= '$name'";
		    $results = mysqli_query($link,$query);
		    $result= mysqli_fetch_array($results);
     	?>

			<h4 style="text-align: center;">SECOND YEAR</h4>
		<table border="1" cellspacing="0" id="table2">
			<thead>
				<tr>
					<th colspan="5">First Semester</th>
					<th colspan="5">Second Semester</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td style="width:100px;">Course No.</td>
					<td style="width:60px;">Grades</td>
					<td>Descriptive Title</td>
					<td style="width:60px;">Units</td>
					<td>School</td>
					<td style="width:100px;">Course No.</td>
					<td style="width:60px;">Grades</td>
					<td>Descriptive Title</td>
					<td style="width:60px;">Units</td>
					<td>School</td>
				</tr>
				<tr>
					<td><?php echo $result['sub']; ?></td>
					<td><?php echo $result['grade']; ?></td>
					<td><?php echo $result['des']; ?></td>
					<td><?php echo $result['units']; ?></td>
					<td><?php echo $result['school']; ?></td>


					<td><?php echo $result['sub11']; ?></td>
					<td><?php echo $result['grade11']; ?></td>
					<td><?php echo $result['des11']; ?></td>
					<td><?php echo $result['units11']; ?></td>
					<td><?php echo $result['school11']; ?></td>
				</tr>
				<tr>
					<td><?php echo $result['sub2']; ?></td>
					<td><?php echo $result['grade2']; ?></td>
					<td><?php echo $result['des2']; ?></td>
					<td><?php echo $result['units2']; ?></td>
					<td><?php echo $result['school2']; ?></td>


					<td><?php echo $result['sub12']; ?></td>
					<td><?php echo $result['grade12']; ?></td>
					<td><?php echo $result['des12']; ?></td>
					<td><?php echo $result['units12']; ?></td>
					<td><?php echo $result['school12']; ?></td>
				</tr>
				<tr>
					<td><?php echo $result['sub3']; ?></td>
					<td><?php echo $result['grade3']; ?></td>
					<td><?php echo $result['des3']; ?></td>
					<td><?php echo $result['units3']; ?></td>
					<td><?php echo $result['school3']; ?></td>
					<td><?php echo $result['sub13']; ?></td>
					<td><?php echo $result['grade13']; ?></td>
					<td><?php echo $result['des13']; ?></td>
					<td><?php echo $result['units13']; ?></td>
					<td><?php echo $result['school13']; ?></td>
				</tr>
				<tr>
					<td><?php echo $result['sub4']; ?></td>
					<td><?php echo $result['grade4']; ?></td>
					<td><?php echo $result['des4']; ?></td>
					<td><?php echo $result['units4'] ?></td>
					<td><?php echo $result['school4']; ?></td>


					<td><?php echo $result['sub14']; ?></td>
					<td><?php echo $result['grade14']; ?></td>
					<td><?php echo $result['des14']; ?></td>
					<td><?php echo $result['units14']; ?></td>
					<td><?php echo $result['school14']; ?></td>
				</tr>
				<tr>
					<td><?php echo $result['sub5']; ?></td>
					<td><?php echo $result['grade5']; ?></td>
					<td><?php echo $result['des5']; ?></td>
					<td><?php echo $result['units5']; ?></td>
					<td><?php echo $result['school5']; ?></td>


					<td><?php echo $result['sub15']; ?></td>
					<td><?php echo $result['grade15']; ?></td>
					<td><?php echo $result['des15']; ?></td>
					<td><?php echo $result['units15']; ?></td>
					<td><?php echo $result['school15']; ?></td>
				</tr>
				<tr>
					<td><?php echo $result['sub6']; ?></td>
					<td><?php echo $result['grade6']; ?></td>
					<td><?php echo $result['des6']; ?></td>
					<td><?php echo $result['units6']; ?></td>
					<td><?php echo $result['school6']; ?></td>


					<td><?php echo $result['sub16']; ?></td>
					<td><?php echo $result['grade16']; ?></td>
					<td><?php echo $result['des16']; ?></td>
					<td><?php echo $result['units16']; ?></td>
					<td><?php echo $result['school16']; ?></td>
				</tr>
				<tr>
					<td><?php echo $result['sub7']; ?></td>
					<td><?php echo $result['grade7']; ?></td>
					<td><?php echo $result['des7']; ?></td>
					<td><?php echo $result['units7']; ?></td>
					<td><?php echo $result['school7']; ?></td>


					<td><?php echo $result['sub17']; ?></td>
					<td><?php echo $result['grade17']; ?></td>
					<td><?php echo $result['des17']; ?></td>
					<td><?php echo $result['units17']; ?></td>
					<td><?php echo $result['school17']; ?></td>
				</tr>
				<tr>
					<td><?php echo $result['sub8']; ?></td>
					<td><?php echo $result['grade8']; ?></td>
					<td><?php echo $result['des8']; ?></td>
					<td><?php echo $result['units8']; ?></td>
					<td><?php echo $result['school8']; ?></td>


					<td><?php echo $result['sub18']; ?></td>
					<td><?php echo $result['grade18']; ?></td>
					<td><?php echo $result['des18']; ?></td>
					<td><?php echo $result['units18']; ?></td>
					<td><?php echo $result['school18']; ?></td>
				</tr>
				<tr>
					<td><?php echo $result['sub9']; ?></td>
					<td><?php echo $result['grade9']; ?></td>
					<td><?php echo $result['des9']; ?></td>
					<td><?php echo $result['units9']; ?></td>
					<td><?php echo $result['school9']; ?></td>


					<td><?php echo $result['sub19']; ?></td>
					<td><?php echo $result['grade19']; ?></td>
					<td><?php echo $result['des19']; ?></td>
					<td><?php echo $result['units19']; ?></td>
					<td><?php echo $result['school19']; ?></td>
				</tr>
				<tr>
					<td><?php echo $result['sub10']; ?></td>
					<td><?php echo $result['grade10']; ?></td>
					<td><?php echo $result['des10']; ?></td>
					<td><?php echo $result['units10']; ?></td>
					<td><?php echo $result['school10']; ?></td>


					<td><?php echo $result['sub20']; ?></td>
					<td><?php echo $result['grade20']; ?></td>
					<td><?php echo $result['des20']; ?></td>
					<td><?php echo $result['units20']; ?></td>
					<td><?php echo $result['school20']; ?></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><p style="font-family: Arial Black;">TOTAL</p></td>
					<td id="total3"></td>
					<td></td>
					<td></td>
					<td></td>
					<td><p style="font-family: Arial Black;">TOTAL</p></td>
					<td id="total4"></td>
					<td></td>
				</tr>

			</tbody>
		</table>














		<?php
		    $query = "SELECT * FROM `thirdyearis` WHERE `name`= '$name'";
		    $results = mysqli_query($link,$query);
		    $result= mysqli_fetch_array($results);
     	?>


		<h4 style="text-align: center;">THIRD YEAR</h4>
		<table border="1" cellspacing="0" id="table3">
			<thead>
				<tr>
					<th colspan="5">First Semester</th>
					<th colspan="5">Second Semester</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td style="width:100px;">Course No.</td>
					<td style="width:60px;">Grades</td>
					<td>Descriptive Title</td>
					<td style="width:60px;">Units</td>
					<td>School</td>
					<td style="width:100px;">Course No.</td>
					<td style="width:60px;">Grades</td>
					<td>Descriptive Title</td>
					<td style="width:60px;">Units</td>
					<td>School</td>
				</tr>
				<tr>
					<td><?php echo $result['sub']; ?></td>
					<td><?php echo $result['grade']; ?></td>
					<td><?php echo $result['des']; ?></td>
					<td><?php echo $result['units']; ?></td>
					<td><?php echo $result['school']; ?></td>


					<td><?php echo $result['sub11']; ?></td>
					<td><?php echo $result['grade11']; ?></td>
					<td><?php echo $result['des11']; ?></td>
					<td><?php echo $result['units11']; ?></td>
					<td><?php echo $result['school11']; ?></td>
				</tr>
				<tr>
					<td><?php echo $result['sub2']; ?></td>
					<td><?php echo $result['grade2']; ?></td>
					<td><?php echo $result['des2']; ?></td>
					<td><?php echo $result['units2']; ?></td>
					<td><?php echo $result['school2']; ?></td>


					<td><?php echo $result['sub12']; ?></td>
					<td><?php echo $result['grade12']; ?></td>
					<td><?php echo $result['des12']; ?></td>
					<td><?php echo $result['units12']; ?></td>
					<td><?php echo $result['school12']; ?></td>
				</tr>
				<tr>
					<td><?php echo $result['sub3']; ?></td>
					<td><?php echo $result['grade3']; ?></td>
					<td><?php echo $result['des3']; ?></td>
					<td><?php echo $result['units3']; ?></td>
					<td><?php echo $result['school3']; ?></td>
					<td><?php echo $result['sub13']; ?></td>
					<td><?php echo $result['grade13']; ?></td>
					<td><?php echo $result['des13']; ?></td>
					<td><?php echo $result['units13']; ?></td>
					<td><?php echo $result['school13']; ?></td>
				</tr>
				<tr>
					<td><?php echo $result['sub4']; ?></td>
					<td><?php echo $result['grade4']; ?></td>
					<td><?php echo $result['des4']; ?></td>
					<td><?php echo $result['units4'] ?></td>
					<td><?php echo $result['school4']; ?></td>


					<td><?php echo $result['sub14']; ?></td>
					<td><?php echo $result['grade14']; ?></td>
					<td><?php echo $result['des14']; ?></td>
					<td><?php echo $result['units14']; ?></td>
					<td><?php echo $result['school14']; ?></td>
				</tr>
				<tr>
					<td><?php echo $result['sub5']; ?></td>
					<td><?php echo $result['grade5']; ?></td>
					<td><?php echo $result['des5']; ?></td>
					<td><?php echo $result['units5']; ?></td>
					<td><?php echo $result['school5']; ?></td>


					<td><?php echo $result['sub15']; ?></td>
					<td><?php echo $result['grade15']; ?></td>
					<td><?php echo $result['des15']; ?></td>
					<td><?php echo $result['units15']; ?></td>
					<td><?php echo $result['school15']; ?></td>
				</tr>
				<tr>
					<td><?php echo $result['sub6']; ?></td>
					<td><?php echo $result['grade6']; ?></td>
					<td><?php echo $result['des6']; ?></td>
					<td><?php echo $result['units6']; ?></td>
					<td><?php echo $result['school6']; ?></td>


					<td><?php echo $result['sub16']; ?></td>
					<td><?php echo $result['grade16']; ?></td>
					<td><?php echo $result['des16']; ?></td>
					<td><?php echo $result['units16']; ?></td>
					<td><?php echo $result['school16']; ?></td>
				</tr>
				<tr>
					<td><?php echo $result['sub7']; ?></td>
					<td><?php echo $result['grade7']; ?></td>
					<td><?php echo $result['des7']; ?></td>
					<td><?php echo $result['units7']; ?></td>
					<td><?php echo $result['school7']; ?></td>


					<td><?php echo $result['sub17']; ?></td>
					<td><?php echo $result['grade17']; ?></td>
					<td><?php echo $result['des17']; ?></td>
					<td><?php echo $result['units17']; ?></td>
					<td><?php echo $result['school17']; ?></td>
				</tr>
				<tr>
					<td><?php echo $result['sub8']; ?></td>
					<td><?php echo $result['grade8']; ?></td>
					<td><?php echo $result['des8']; ?></td>
					<td><?php echo $result['units8']; ?></td>
					<td><?php echo $result['school8']; ?></td>


					<td><?php echo $result['sub18']; ?></td>
					<td><?php echo $result['grade18']; ?></td>
					<td><?php echo $result['des18']; ?></td>
					<td><?php echo $result['units18']; ?></td>
					<td><?php echo $result['school18']; ?></td>
				</tr>
				<tr>
					<td><?php echo $result['sub9']; ?></td>
					<td><?php echo $result['grade9']; ?></td>
					<td><?php echo $result['des9']; ?></td>
					<td><?php echo $result['units9']; ?></td>
					<td><?php echo $result['school9']; ?></td>


					<td><?php echo $result['sub19']; ?></td>
					<td><?php echo $result['grade19']; ?></td>
					<td><?php echo $result['des19']; ?></td>
					<td><?php echo $result['units19']; ?></td>
					<td><?php echo $result['school19']; ?></td>
				</tr>
				<tr>
					<td><?php echo $result['sub10']; ?></td>
					<td><?php echo $result['grade10']; ?></td>
					<td><?php echo $result['des10']; ?></td>
					<td><?php echo $result['units10']; ?></td>
					<td><?php echo $result['school10']; ?></td>


					<td><?php echo $result['sub20']; ?></td>
					<td><?php echo $result['grade20']; ?></td>
					<td><?php echo $result['des20']; ?></td>
					<td><?php echo $result['units20']; ?></td>
					<td><?php echo $result['school20']; ?></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><p style="font-family: Arial Black;">TOTAL</p></td>
					<td id="total5"></td>
					<td></td>
					<td></td>
					<td></td>
					<td><p style="font-family: Arial Black;">TOTAL</p></td>
					<td id="total6"></td>
					<td></td>
				</tr>

			</tbody>
		</table>










		<p style="width:50%; text-align:center; margin: 30px 0 30px 0;">
		Republic of the Philippines<br>
		OFFICE OF THE PRESIDENT<br>
		<b>COMMISION ON HIGHER EDUCATION</b><br>
		Regional Office I<br>
		City of San Fernando, La Union</p>
		<img src="images/ched.jpeg" class="img3">


		<?php
		    $query = "SELECT * FROM `midyearis` WHERE `name`= '$name'";
		    $results = mysqli_query($link,$query);
		    $result= mysqli_fetch_array($results);
     	?>

		<h4 style="text-align: center; position:relative;margin-top: -150px;right:-300px;">MIDYEAR</h4>

		<table border="1" cellspacing="0" style="width:50%;margin-left: 50%;" id="table4">
			<thead>
				<tr>
					<th colspan="5">First Semester</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td style="width:100px;">Course No.</td>
					<td style="width:60px;">Grades</td>
					<td>Descriptive Title</td>
					<td style="width:60px;">Units</td>
					<td>School</td>
				</tr>
				<tr>
					<td><?php echo $result['sub']; ?></td>
					<td><?php echo $result['grade']; ?></td>
					<td><?php echo $result['des']; ?></td>
					<td><?php echo $result['units']; ?></td>
					<td><?php echo $result['school']; ?></td>
				</tr>
				<tr>
					<td><?php echo $result['sub2']; ?></td>
					<td><?php echo $result['grade2']; ?></td>
					<td><?php echo $result['des2']; ?></td>
					<td><?php echo $result['units2']; ?></td>
					<td><?php echo $result['school2']; ?></td>
				</tr>
				<tr>
					<td><?php echo $result['sub3']; ?></td>
					<td><?php echo $result['grade3']; ?></td>
					<td><?php echo $result['des3']; ?></td>
					<td><?php echo $result['units3']; ?></td>
					<td><?php echo $result['school3']; ?></td>
				</tr>
				<tr>
					<td><?php echo $result['sub4']; ?></td>
					<td><?php echo $result['grade4']; ?></td>
					<td><?php echo $result['des4']; ?></td>
					<td><?php echo $result['units4']; ?></td>
					<td><?php echo $result['school4']; ?></td>
				</tr>
				<tr>
					<td><?php echo $result['sub5']; ?></td>
					<td><?php echo $result['grade5']; ?></td>
					<td><?php echo $result['des5']; ?></td>
					<td><?php echo $result['units5']; ?></td>
					<td><?php echo $result['school5']; ?></td>
				</tr>
				<tr>
					<td><?php echo $result['sub6']; ?></td>
					<td><?php echo $result['grade6']; ?></td>
					<td><?php echo $result['des6']; ?></td>
					<td><?php echo $result['units6']; ?></td>
					<td><?php echo $result['school6']; ?></td>
				</tr>
				<tr>
					<td><?php echo $result['sub7']; ?></td>
					<td><?php echo $result['grade7']; ?></td>
					<td><?php echo $result['des7']; ?></td>
					<td><?php echo $result['units7']; ?></td>
					<td><?php echo $result['school7']; ?></td>
				</tr>
				<tr>
					<td><?php echo $result['sub8']; ?></td>
					<td><?php echo $result['grade8']; ?></td>
					<td><?php echo $result['des8']; ?></td>
					<td><?php echo $result['units8']; ?></td>
					<td><?php echo $result['school8']; ?></td>
				</tr>
				<tr>
					<td><?php echo $result['sub9']; ?></td>
					<td><?php echo $result['grade9']; ?></td>
					<td><?php echo $result['des9']; ?></td>
					<td><?php echo $result['units9']; ?></td>
					<td><?php echo $result['school9']; ?></td>
				</tr>
				<tr>
					<td><?php echo $result['sub10']; ?></td>
					<td><?php echo $result['grade10']; ?></td>
					<td><?php echo $result['des10']; ?></td>
					<td><?php echo $result['units10']; ?></td>
					<td><?php echo $result['school10']; ?></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><p style="font-family: Arial Black;">TOTAL</p></td>
					<td id="total7"></td>
					<td></td>
				</tr>
			</tbody>
		</table>






		<?php
		    $query = "SELECT * FROM `fourthyearis` WHERE `name`= '$name'";
		    $results = mysqli_query($link,$query);
		    $result= mysqli_fetch_array($results);
     	?>


		<h4 style="text-align: center;">FOURTH YEAR</h4>
		<table border="1" cellspacing="0" id="table5">
			<thead>
				<tr>
					<th colspan="5">First Semester</th>
					<th colspan="5">Second Semester</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td style="width:100px;">Course No.</td>
					<td style="width:60px;">Grades</td>
					<td>Descriptive Title</td>
					<td style="width:60px;">Units</td>
					<td>School</td>
					<td style="width:100px;">Course No.</td>
					<td style="width:60px;">Grades</td>
					<td>Descriptive Title</td>
					<td style="width:60px;">Units</td>
					<td>School</td>
				</tr>
				<tr>
					<td><?php echo $result['sub']; ?></td>
					<td><?php echo $result['grade']; ?></td>
					<td><?php echo $result['des']; ?></td>
					<td><?php echo $result['units']; ?></td>
					<td><?php echo $result['school']; ?></td>


					<td><?php echo $result['sub11']; ?></td>
					<td><?php echo $result['grade11']; ?></td>
					<td><?php echo $result['des11']; ?></td>
					<td><?php echo $result['units11']; ?></td>
					<td><?php echo $result['school11']; ?></td>
				</tr>
				<tr>
					<td><?php echo $result['sub2']; ?></td>
					<td><?php echo $result['grade2']; ?></td>
					<td><?php echo $result['des2']; ?></td>
					<td><?php echo $result['units2']; ?></td>
					<td><?php echo $result['school2']; ?></td>


					<td><?php echo $result['sub12']; ?></td>
					<td><?php echo $result['grade12']; ?></td>
					<td><?php echo $result['des12']; ?></td>
					<td><?php echo $result['units12']; ?></td>
					<td><?php echo $result['school12']; ?></td>
				</tr>
				<tr>
					<td><?php echo $result['sub3']; ?></td>
					<td><?php echo $result['grade3']; ?></td>
					<td><?php echo $result['des3']; ?></td>
					<td><?php echo $result['units3']; ?></td>
					<td><?php echo $result['school3']; ?></td>
					<td><?php echo $result['sub13']; ?></td>
					<td><?php echo $result['grade13']; ?></td>
					<td><?php echo $result['des13']; ?></td>
					<td><?php echo $result['units13']; ?></td>
					<td><?php echo $result['school13']; ?></td>
				</tr>
				<tr>
					<td><?php echo $result['sub4']; ?></td>
					<td><?php echo $result['grade4']; ?></td>
					<td><?php echo $result['des4']; ?></td>
					<td><?php echo $result['units4'] ?></td>
					<td><?php echo $result['school4']; ?></td>


					<td><?php echo $result['sub14']; ?></td>
					<td><?php echo $result['grade14']; ?></td>
					<td><?php echo $result['des14']; ?></td>
					<td><?php echo $result['units14']; ?></td>
					<td><?php echo $result['school14']; ?></td>
				</tr>
				<tr>
					<td><?php echo $result['sub5']; ?></td>
					<td><?php echo $result['grade5']; ?></td>
					<td><?php echo $result['des5']; ?></td>
					<td><?php echo $result['units5']; ?></td>
					<td><?php echo $result['school5']; ?></td>


					<td><?php echo $result['sub15']; ?></td>
					<td><?php echo $result['grade15']; ?></td>
					<td><?php echo $result['des15']; ?></td>
					<td><?php echo $result['units15']; ?></td>
					<td><?php echo $result['school15']; ?></td>
				</tr>
				<tr>
					<td><?php echo $result['sub6']; ?></td>
					<td><?php echo $result['grade6']; ?></td>
					<td><?php echo $result['des6']; ?></td>
					<td><?php echo $result['units6']; ?></td>
					<td><?php echo $result['school6']; ?></td>


					<td><?php echo $result['sub16']; ?></td>
					<td><?php echo $result['grade16']; ?></td>
					<td><?php echo $result['des16']; ?></td>
					<td><?php echo $result['units16']; ?></td>
					<td><?php echo $result['school16']; ?></td>
				</tr>
				<tr>
					<td><?php echo $result['sub7']; ?></td>
					<td><?php echo $result['grade7']; ?></td>
					<td><?php echo $result['des7']; ?></td>
					<td><?php echo $result['units7']; ?></td>
					<td><?php echo $result['school7']; ?></td>


					<td><?php echo $result['sub17']; ?></td>
					<td><?php echo $result['grade17']; ?></td>
					<td><?php echo $result['des17']; ?></td>
					<td><?php echo $result['units17']; ?></td>
					<td><?php echo $result['school17']; ?></td>
				</tr>
				<tr>
					<td><?php echo $result['sub8']; ?></td>
					<td><?php echo $result['grade8']; ?></td>
					<td><?php echo $result['des8']; ?></td>
					<td><?php echo $result['units8']; ?></td>
					<td><?php echo $result['school8']; ?></td>


					<td><?php echo $result['sub18']; ?></td>
					<td><?php echo $result['grade18']; ?></td>
					<td><?php echo $result['des18']; ?></td>
					<td><?php echo $result['units18']; ?></td>
					<td><?php echo $result['school18']; ?></td>
				</tr>
				<tr>
					<td><?php echo $result['sub9']; ?></td>
					<td><?php echo $result['grade9']; ?></td>
					<td><?php echo $result['des9']; ?></td>
					<td><?php echo $result['units9']; ?></td>
					<td><?php echo $result['school9']; ?></td>


					<td><?php echo $result['sub19']; ?></td>
					<td><?php echo $result['grade19']; ?></td>
					<td><?php echo $result['des19']; ?></td>
					<td><?php echo $result['units19']; ?></td>
					<td><?php echo $result['school19']; ?></td>
				</tr>
				<tr>
					<td><?php echo $result['sub10']; ?></td>
					<td><?php echo $result['grade10']; ?></td>
					<td><?php echo $result['des10']; ?></td>
					<td><?php echo $result['units10']; ?></td>
					<td><?php echo $result['school10']; ?></td>


					<td><?php echo $result['sub20']; ?></td>
					<td><?php echo $result['grade20']; ?></td>
					<td><?php echo $result['des20']; ?></td>
					<td><?php echo $result['units20']; ?></td>
					<td><?php echo $result['school20']; ?></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><p style="font-family: Arial Black;">TOTAL</p></td>
					<td id="total8"></td>
					<td></td>
					<td></td>
					<td></td>
					<td><p style="font-family: Arial Black;">TOTAL</p></td>
					<td id="total9"></td>
					<td></td>
				</tr>

			</tbody>
		</table>
	<br><br>
	</div>


<script>
	var a= parseInt(
    <?php
      $query = "SELECT sum(units) as total FROM `firstyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output = $row['total'];
      }
      ?>
      );



	var b= parseInt(
    <?php
      $query = "SELECT sum(units2) as total FROM `firstyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output2 = $row['total'];
      }
      ?>
      );



	var c= parseInt(
    <?php
      $query = "SELECT sum(units3) as total FROM `firstyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output3 = $row['total'];
      }
      ?>
      );



	var d= parseInt(
    <?php
      $query = "SELECT sum(units4) as total FROM `firstyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output4 = $row['total'];
      }
      ?>
      );



	var e= parseInt(
    <?php
      $query = "SELECT sum(units5) as total FROM `firstyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output5 = $row['total'];
      }
      ?>
      );



	var f= parseInt(
    <?php
      $query = "SELECT sum(units6) as total FROM `firstyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output6 = $row['total'];
      }
      ?>
      );


	var g= parseInt(
    <?php
      $query = "SELECT sum(units7) as total FROM `firstyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output7 = $row['total'];
      }
      ?>
      );



	var h= parseInt(
    <?php
      $query = "SELECT sum(units8) as total FROM `firstyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output8 = $row['total'];
      }
      ?>
      );


	var i= parseInt(
    <?php
      $query = "SELECT sum(units9) as total FROM `firstyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output9 = $row['total'];
      }
      ?>
      );



	var j= parseInt(
    <?php
      $query = "SELECT sum(units10) as total FROM `firstyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output10 = $row['total'];
      }
      ?>
      );

	var k= parseInt(
    <?php
      $query = "SELECT sum(units11) as total FROM `firstyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output11 = $row['total'];
      }
      ?>
      );



	var l= parseInt(
    <?php
      $query = "SELECT sum(units12) as total FROM `firstyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output12 = $row['total'];
      }
      ?>
      );



	var m= parseInt(
    <?php
      $query = "SELECT sum(units13) as total FROM `firstyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output13 = $row['total'];
      }
      ?>
      );



	var n= parseInt(
    <?php
      $query = "SELECT sum(units14) as total FROM `firstyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output14 = $row['total'];
      }
      ?>
      );



	var o= parseInt(
    <?php
      $query = "SELECT sum(units15) as total FROM `firstyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output15 = $row['total'];
      }
      ?>
      );



	var p= parseInt(
    <?php
      $query = "SELECT sum(units16) as total FROM `firstyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output16 = $row['total'];
      }
      ?>
      );


	var q= parseInt(
    <?php
      $query = "SELECT sum(units17) as total FROM `firstyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output17 = $row['total'];
      }
      ?>
      );



	var r= parseInt(
    <?php
      $query = "SELECT sum(units18) as total FROM `firstyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output18 = $row['total'];
      }
      ?>
      );


	var s= parseInt(
    <?php
      $query = "SELECT sum(units19) as total FROM `firstyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output19 = $row['total'];
      }
      ?>
      );



	var t= parseInt(
    <?php
      $query = "SELECT sum(units20) as total FROM `firstyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output20 = $row['total'];
      }
      ?>
      );

	var a1= parseInt(<?php echo $output; ?>);
	var b1= parseInt(<?php echo $output2; ?>);
	var c1= parseInt(<?php echo $output3; ?>);
	var d1= parseInt(<?php echo $output4; ?>);
	var e1= parseInt(<?php echo $output5; ?>);
	var f1= parseInt(<?php echo $output6; ?>);
	var g1= parseInt(<?php echo $output7; ?>);
	var h1= parseInt(<?php echo $output8; ?>);
	var i1= parseInt(<?php echo $output9; ?>);
	var j1= parseInt(<?php echo $output10; ?>);
	var k1= parseInt(<?php echo $output11; ?>);
	var l1= parseInt(<?php echo $output12; ?>);
	var m1= parseInt(<?php echo $output13; ?>);
	var n1= parseInt(<?php echo $output14; ?>);
	var o1= parseInt(<?php echo $output15; ?>);
	var p1= parseInt(<?php echo $output16; ?>);
	var q1= parseInt(<?php echo $output17; ?>);
	var r1= parseInt(<?php echo $output18; ?>);
	var s1= parseInt(<?php echo $output19; ?>);
	var t1= parseInt(<?php echo $output20; ?>);







































































	var u= parseInt(
    <?php
      $query = "SELECT sum(units) as total FROM `secondyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output21 = $row['total'];
      }
      ?>
      );



	var v= parseInt(
    <?php
      $query = "SELECT sum(units2) as total FROM `secondyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output22 = $row['total'];
      }
      ?>
      );



	var w= parseInt(
    <?php
      $query = "SELECT sum(units3) as total FROM `secondyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output23 = $row['total'];
      }
      ?>
      );



	var x= parseInt(
    <?php
      $query = "SELECT sum(units4) as total FROM `secondyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output24 = $row['total'];
      }
      ?>
      );



	var y= parseInt(
    <?php
      $query = "SELECT sum(units5) as total FROM `secondyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output25 = $row['total'];
      }
      ?>
      );



	var z= parseInt(
    <?php
      $query = "SELECT sum(units6) as total FROM `secondyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output26 = $row['total'];
      }
      ?>
      );


	var aa= parseInt(
    <?php
      $query = "SELECT sum(units7) as total FROM `secondyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output27 = $row['total'];
      }
      ?>
      );



	var bb= parseInt(
    <?php
      $query = "SELECT sum(units8) as total FROM `secondyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output28 = $row['total'];
      }
      ?>
      );


	var cc= parseInt(
    <?php
      $query = "SELECT sum(units9) as total FROM `secondyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output29 = $row['total'];
      }
      ?>
      );



	var dd= parseInt(
    <?php
      $query = "SELECT sum(units10) as total FROM `secondyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output30 = $row['total'];
      }
      ?>
      );

	var ee= parseInt(
    <?php
      $query = "SELECT sum(units11) as total FROM `secondyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output31 = $row['total'];
      }
      ?>
      );



	var ff= parseInt(
    <?php
      $query = "SELECT sum(units12) as total FROM `secondyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output32 = $row['total'];
      }
      ?>
      );



	var gg= parseInt(
    <?php
      $query = "SELECT sum(units13) as total FROM `secondyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output33 = $row['total'];
      }
      ?>
      );



	var hh= parseInt(
    <?php
      $query = "SELECT sum(units14) as total FROM `secondyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output34 = $row['total'];
      }
      ?>
      );



	var ii= parseInt(
    <?php
      $query = "SELECT sum(units15) as total FROM `secondyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output35 = $row['total'];
      }
      ?>
      );



	var jj= parseInt(
    <?php
      $query = "SELECT sum(units16) as total FROM `secondyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output36 = $row['total'];
      }
      ?>
      );


	var kk= parseInt(
    <?php
      $query = "SELECT sum(units17) as total FROM `secondyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output37 = $row['total'];
      }
      ?>
      );



	var ll= parseInt(
    <?php
      $query = "SELECT sum(units18) as total FROM `secondyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output38 = $row['total'];
      }
      ?>
      );


	var mm= parseInt(
    <?php
      $query = "SELECT sum(units19) as total FROM `secondyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output39 = $row['total'];
      }
      ?>
      );



	var nn= parseInt(
    <?php
      $query = "SELECT sum(units20) as total FROM `secondyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output40 = $row['total'];
      }
      ?>
      );

	var u1= parseInt(<?php echo $output21; ?>);
	var v1= parseInt(<?php echo $output22; ?>);
	var w1= parseInt(<?php echo $output23; ?>);
	var x1= parseInt(<?php echo $output24; ?>);
	var y1= parseInt(<?php echo $output25; ?>);
	var z1= parseInt(<?php echo $output26; ?>);
	var aa1= parseInt(<?php echo $output27; ?>);
	var bb1= parseInt(<?php echo $output28; ?>);
	var cc1= parseInt(<?php echo $output29; ?>);
	var dd1= parseInt(<?php echo $output30; ?>);
	var ee1= parseInt(<?php echo $output31; ?>);
	var ff1= parseInt(<?php echo $output32; ?>);
	var gg1= parseInt(<?php echo $output33; ?>);
	var hh1= parseInt(<?php echo $output34; ?>);
	var ii1= parseInt(<?php echo $output35; ?>);
	var jj1= parseInt(<?php echo $output36; ?>);
	var kk1= parseInt(<?php echo $output37; ?>);
	var ll1= parseInt(<?php echo $output38; ?>);
	var mm1= parseInt(<?php echo $output39; ?>);
	var nn1= parseInt(<?php echo $output40; ?>);













































	var oo= parseInt(
    <?php
      $query = "SELECT sum(units) as total FROM `thirdyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output41 = $row['total'];
      }
      ?>
      );



	var pp= parseInt(
    <?php
      $query = "SELECT sum(units2) as total FROM `thirdyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output42 = $row['total'];
      }
      ?>
      );



	var qq= parseInt(
    <?php
      $query = "SELECT sum(units3) as total FROM `thirdyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output43 = $row['total'];
      }
      ?>
      );



	var rr= parseInt(
    <?php
      $query = "SELECT sum(units4) as total FROM `thirdyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output44 = $row['total'];
      }
      ?>
      );



	var ss= parseInt(
    <?php
      $query = "SELECT sum(units5) as total FROM `thirdyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output45 = $row['total'];
      }
      ?>
      );



	var tt= parseInt(
    <?php
      $query = "SELECT sum(units6) as total FROM `thirdyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output46 = $row['total'];
      }
      ?>
      );


	var uu= parseInt(
    <?php
      $query = "SELECT sum(units7) as total FROM `thirdyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output47 = $row['total'];
      }
      ?>
      );



	var vv= parseInt(
    <?php
      $query = "SELECT sum(units8) as total FROM `thirdyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output48 = $row['total'];
      }
      ?>
      );


	var ww= parseInt(
    <?php
      $query = "SELECT sum(units9) as total FROM `thirdyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output49 = $row['total'];
      }
      ?>
      );



	var xx= parseInt(
    <?php
      $query = "SELECT sum(units10) as total FROM `thirdyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output50 = $row['total'];
      }
      ?>
      );

	var yy= parseInt(
    <?php
      $query = "SELECT sum(units11) as total FROM `thirdyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output51 = $row['total'];
      }
      ?>
      );



	var zz= parseInt(
    <?php
      $query = "SELECT sum(units12) as total FROM `thirdyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output52 = $row['total'];
      }
      ?>
      );



	var aaa= parseInt(
    <?php
      $query = "SELECT sum(units13) as total FROM `thirdyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output53 = $row['total'];
      }
      ?>
      );



	var bbb= parseInt(
    <?php
      $query = "SELECT sum(units14) as total FROM `thirdyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output54 = $row['total'];
      }
      ?>
      );



	var ccc= parseInt(
    <?php
      $query = "SELECT sum(units15) as total FROM `thirdyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output55 = $row['total'];
      }
      ?>
      );



	var ddd= parseInt(
    <?php
      $query = "SELECT sum(units16) as total FROM `thirdyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output56 = $row['total'];
      }
      ?>
      );


	var eee= parseInt(
    <?php
      $query = "SELECT sum(units17) as total FROM `thirdyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output57 = $row['total'];
      }
      ?>
      );



	var fff= parseInt(
    <?php
      $query = "SELECT sum(units18) as total FROM `thirdyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output58 = $row['total'];
      }
      ?>
      );


	var ggg= parseInt(
    <?php
      $query = "SELECT sum(units19) as total FROM `thirdyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output59 = $row['total'];
      }
      ?>
      );



	var hhh= parseInt(
    <?php
      $query = "SELECT sum(units20) as total FROM `thirdyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output60 = $row['total'];
      }
      ?>
      );

	var oo1= parseInt(<?php echo $output41; ?>);
	var pp1= parseInt(<?php echo $output42; ?>);
	var qq1= parseInt(<?php echo $output43; ?>);
	var rr1= parseInt(<?php echo $output44; ?>);
	var ss1= parseInt(<?php echo $output45; ?>);
	var tt1= parseInt(<?php echo $output46; ?>);
	var uu1= parseInt(<?php echo $output47; ?>);
	var vv1= parseInt(<?php echo $output48; ?>);
	var ww1= parseInt(<?php echo $output49; ?>);
	var xx1= parseInt(<?php echo $output50; ?>);
	var yy1= parseInt(<?php echo $output51; ?>);
	var zz1= parseInt(<?php echo $output52; ?>);
	var aaa1= parseInt(<?php echo $output53; ?>);
	var bbb1= parseInt(<?php echo $output54; ?>);
	var ccc1= parseInt(<?php echo $output55; ?>);
	var ddd1= parseInt(<?php echo $output56; ?>);
	var eee1= parseInt(<?php echo $output57; ?>);
	var fff1= parseInt(<?php echo $output58; ?>);
	var ggg1= parseInt(<?php echo $output59; ?>);
	var hhh1= parseInt(<?php echo $output60; ?>);






















































	var iii= parseInt(
    <?php
      $query = "SELECT sum(units) as total FROM `midyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output61 = $row['total'];
      }
      ?>
      );



	var jjj= parseInt(
    <?php
      $query = "SELECT sum(units2) as total FROM `midyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output62 = $row['total'];
      }
      ?>
      );



	var kkk= parseInt(
    <?php
      $query = "SELECT sum(units3) as total FROM `midyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output63 = $row['total'];
      }
      ?>
      );



	var lll= parseInt(
    <?php
      $query = "SELECT sum(units4) as total FROM `midyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output64 = $row['total'];
      }
      ?>
      );



	var mmm= parseInt(
    <?php
      $query = "SELECT sum(units5) as total FROM `midyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output65 = $row['total'];
      }
      ?>
      );



	var nnn= parseInt(
    <?php
      $query = "SELECT sum(units6) as total FROM `midyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output66 = $row['total'];
      }
      ?>
      );


	var ooo= parseInt(
    <?php
      $query = "SELECT sum(units7) as total FROM `midyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output67 = $row['total'];
      }
      ?>
      );



	var ppp= parseInt(
    <?php
      $query = "SELECT sum(units8) as total FROM `midyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output68 = $row['total'];
      }
      ?>
      );


	var qqq= parseInt(
    <?php
      $query = "SELECT sum(units9) as total FROM `midyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output69 = $row['total'];
      }
      ?>
      );



	var rrr= parseInt(
    <?php
      $query = "SELECT sum(units10) as total FROM `midyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output70 = $row['total'];
      }
      ?>
      );
	var iii1= parseInt(<?php echo $output61; ?>);
	var jjj1= parseInt(<?php echo $output62; ?>);
	var kkk1= parseInt(<?php echo $output63; ?>);
	var lll1= parseInt(<?php echo $output64; ?>);
	var mmm1= parseInt(<?php echo $output65; ?>);
	var nnn1= parseInt(<?php echo $output66; ?>);
	var ooo1= parseInt(<?php echo $output67; ?>);
	var ppp1= parseInt(<?php echo $output68; ?>);
	var qqq1= parseInt(<?php echo $output69; ?>);
	var rrr1= parseInt(<?php echo $output70; ?>);


















































	var sss= parseInt(
    <?php
      $query = "SELECT sum(units) as total FROM `fourthyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output71 = $row['total'];
      }
      ?>
      );



	var ttt= parseInt(
    <?php
      $query = "SELECT sum(units2) as total FROM `fourthyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output72 = $row['total'];
      }
      ?>
      );



	var uuu= parseInt(
    <?php
      $query = "SELECT sum(units3) as total FROM `fourthyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output73 = $row['total'];
      }
      ?>
      );



	var vvv= parseInt(
    <?php
      $query = "SELECT sum(units4) as total FROM `fourthyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output74 = $row['total'];
      }
      ?>
      );



	var www= parseInt(
    <?php
      $query = "SELECT sum(units5) as total FROM `fourthyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output75 = $row['total'];
      }
      ?>
      );



	var xxx= parseInt(
    <?php
      $query = "SELECT sum(units6) as total FROM `fourthyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output76 = $row['total'];
      }
      ?>
      );


	var yyy= parseInt(
    <?php
      $query = "SELECT sum(units7) as total FROM `fourthyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output77 = $row['total'];
      }
      ?>
      );



	var zzz= parseInt(
    <?php
      $query = "SELECT sum(units8) as total FROM `fourthyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output78 = $row['total'];
      }
      ?>
      );


	var aaaa= parseInt(
    <?php
      $query = "SELECT sum(units9) as total FROM `fourthyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output79 = $row['total'];
      }
      ?>
      );



	var bbbb= parseInt(
    <?php
      $query = "SELECT sum(units10) as total FROM `fourthyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output80 = $row['total'];
      }
      ?>
      );

	var cccc= parseInt(
    <?php
      $query = "SELECT sum(units11) as total FROM `fourthyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output81 = $row['total'];
      }
      ?>
      );



	var dddd= parseInt(
    <?php
      $query = "SELECT sum(units12) as total FROM `fourthyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output82 = $row['total'];
      }
      ?>
      );



	var eeee= parseInt(
    <?php
      $query = "SELECT sum(units13) as total FROM `fourthyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output83 = $row['total'];
      }
      ?>
      );



	var ffff= parseInt(
    <?php
      $query = "SELECT sum(units14) as total FROM `fourthyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output84 = $row['total'];
      }
      ?>
      );



	var gggg= parseInt(
    <?php
      $query = "SELECT sum(units15) as total FROM `fourthyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output85 = $row['total'];
      }
      ?>
      );



	var hhhh= parseInt(
    <?php
      $query = "SELECT sum(units16) as total FROM `fourthyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output86 = $row['total'];
      }
      ?>
      );


	var iiii= parseInt(
    <?php
      $query = "SELECT sum(units17) as total FROM `fourthyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output87 = $row['total'];
      }
      ?>
      );



	var jjjj= parseInt(
    <?php
      $query = "SELECT sum(units18) as total FROM `fourthyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output88 = $row['total'];
      }
      ?>
      );


	var kkkk= parseInt(
    <?php
      $query = "SELECT sum(units19) as total FROM `fourthyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output89 = $row['total'];
      }
      ?>
      );



	var llll= parseInt(
    <?php
      $query = "SELECT sum(units20) as total FROM `fourthyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output90 = $row['total'];
      }
      ?>
      );

	var sss1= parseInt(<?php echo $output71; ?>);
	var ttt1= parseInt(<?php echo $output72; ?>);
	var uuu1= parseInt(<?php echo $output73; ?>);
	var vvv1= parseInt(<?php echo $output74; ?>);
	var www1= parseInt(<?php echo $output75; ?>);
	var xxx1= parseInt(<?php echo $output76; ?>);
	var yyy1= parseInt(<?php echo $output77; ?>);
	var zzz1= parseInt(<?php echo $output78; ?>);
	var aaaa1= parseInt(<?php echo $output79; ?>);
	var bbbb1= parseInt(<?php echo $output80; ?>);
	var cccc1= parseInt(<?php echo $output81; ?>);
	var dddd1= parseInt(<?php echo $output82; ?>);
	var eeee1= parseInt(<?php echo $output83; ?>);
	var ffff1= parseInt(<?php echo $output84; ?>);
	var gggg1= parseInt(<?php echo $output85; ?>);
	var hhhh1= parseInt(<?php echo $output86; ?>);
	var iiii1= parseInt(<?php echo $output87; ?>);
	var jjjj1= parseInt(<?php echo $output88; ?>);
	var kkkk1= parseInt(<?php echo $output89; ?>);
	var llll1= parseInt(<?php echo $output90; ?>);




























	var total = a1+b1+c1+d1+e1+f1+g1+h1+i1+j1;

	var total2 = k1+l1+m1+n1+o1+p1+q1+r1+s1+t1;

	var total3 = u1+v1+w1+x1+y1+z1+aa1+bb1+cc1+dd1;

	var total4 = ee1+ff1+gg1+hh1+ii1+jj1+kk1+ll1+mm1+nn1;

	var total5 = oo1+pp1+qq1+rr1+ss1+tt1+uu1+vv1+ww1+xx1;

	var total6 = yy1+zz1+aaa1+bbb1+ccc1+ddd1+eee1+fff1+ggg1+hhh1;

	var total7 = iii1+jjj1+kkk1+lll1+mmm1+nnn1+ooo1+ppp1+qqq1+rrr1;

	var total8 = sss1+ttt1+uuu1+vvv1+www1+xxx1+yyy1+zzz1+aaaa1+bbbb1;

	var total9 = cccc1+dddd1+eeee1+ffff1+gggg1+hhhh1+iiii1+jjjj1+kkkk1+llll1;



	document.getElementById('total1').innerHTML=total;

	document.getElementById('total2').innerHTML=total2;

	document.getElementById('total3').innerHTML=total3;

	document.getElementById('total4').innerHTML=total4;

	document.getElementById('total5').innerHTML=total5;

	document.getElementById('total6').innerHTML=total6;

	document.getElementById('total7').innerHTML=total7;

	document.getElementById('total8').innerHTML=total8;

	document.getElementById('total9').innerHTML=total9;

</script>

<?php } ?>
</body>
</html>
