<?php

include('conn.php');
session_start();

?>
<?php
if(!isset($_SESSION['role']))
{
    header("Location: index.php");
}
else
{
ob_start();
?>
<html>
<head>
	<title>ROG</title>
	<style>
	body{
		margin: 0;
		padding: 0;
		animation:  transitionIn 1s;
	}
	@keyframes transitionIn{
		from{
			opacity:  0;
			tranform: rotateX(-10deg);
		}to{
			opacity: 1;
			transform: rotateX(0);
		}
	}
	*{
		margin: 0;
		padding: 0;
	}
	.header table{
		width: 100%;
		font-family: arial;
	}
	.header img{
		width: 100px;
		height: 100px;
	}
	.header input{
		font-size: 20px;
    	font-weight: bold;
      	text-align: center;
      	outline: none;
      	color: red;
      	
	}
	.header input:focus{
		padding: 5px 0 5px 0;
		transition: 0.3s;
	}
	.header label{
		font-family: Arial Black;
		padding: 0 10px 0 0;
	}
	.links{
		width: 100%;
		font-family: impact;
		font-size: 18px;
		position: absolute;
		text-align: right;
	}
	.links a{
		text-decoration: none;
		color: black;
		background: gray;
		border-radius: 10px;
		padding: 20px 40px 20px 40px;
		margin-right: 5%;
		box-shadow: 1px 1px 5px black;
		text-shadow: 1px 1px 10px skyblue;
	}
	.links #active{
		background: skyblue;
		text-shadow: 1px 1px 10px black;
	}
	.links button{
		padding: 20px 30px 20px 30px;
		margin-right: 2%;
		border: none;
		background: green;
		font-family: Arial Black;
		color: white;
		border-radius: 10px;
		cursor: pointer;
	}
	.formmessage{
			width: 500px;
			font-family: Arial;
			padding: 25px;
			margin-top: 2%;
			margin-bottom: 5%;
			box-shadow: 1px 1px 10px black;
			border-radius: 10px;
			background: white;
			margin-left: 28%;
			display:none;
			animation:Appear 2s;
	}
	@keyframes Appear{
		from{
			opacity: 0;
			transform: translateY(50px);
		}to{
			opacity: 1;
			transform: translateX(0);
		}
	}
	.formmessage table{
			width: 100%;
	}
	.formmessage th{
			background: gray;
			padding: 20px;
			font-size: 20px;
			color: white;
			text-shadow: 1px 1px 0 black;
			border-radius:5px;
	}
	.formmessage td{
			font-size: 15px;
			font-family: Arial Black;
			width: 100%;
	}
	.formmessage td input{
			padding: 5px;
			width: 100%;
			outline: none;
			border-style: solid;
			border-left-color: white;
			border-right-color: white;
			border-top-color: white;
			text-transform: capitalize;
			font-family: arial black;
			text-align: center;
			color: red;
		}
	.formmessage td input:focus{
			border-bottom-color: blue;
			transform: scale(1.1);
			overflow: hidden;
			transition: 0.6s;
		}
	.formmessage select{
			padding: 5px;
			width: 100%;
			outline: none;
			border-style: solid;
			border-left-color: white;
			border-right-color: white;
			border-top-color: white;
			text-transform: capitalize;
			font-family: arial black;
			text-align: center;
			font-size: 17px;
			color: red;
		}
	.formmessage td select:focus{
			border-bottom-color: blue;
			transform: scale(1.1);
			overflow: hidden;
			transition: 0.6s;
	}
	::-webkit-scrollbar{
		width: 0.5em;
	}
	::-webkit-scrollbar-track{
		background: rgba(0,0,0,0.9);
	}
	::-webkit-scrollbar-thumb{
		background: rgba(255,255,255,0.3);
	}
	</style>
</head>
<body>


	<?php
    $query = "SELECT * FROM `secondyearis`";
    $results = mysqli_query($link,$query);
    $result= mysqli_fetch_array($results);
    ?>




<p style="color:white;background:black;width:100%;text-align: center;font-family: Arial Black;padding:30px 0 30px 0;font-size: 30px; text-shadow: 3px 3px 0 skyblue;"><marquee>SECOND YEAR</marquee></p>
<br><br>


<div class="links">
	<a href="adminitrog2.php">IT</a>
	<a href="adminisrog2.php" id="active">IS</a>
	<button onclick="message()">Send Notification</button>
</div>
<div style="background: rgba(0,0,0,0.9);width:100%;height:100%;position:fixed;top:0;left:0;overflow:auto;display:none;" id="bg">

	<div class="formmessage" id="form">
	<button onclick="closeform()" style="background: red;color:white;font-family:arial black;padding:15px 20px;border-radius: 50%;border:none;outline:none;cursor: pointer;margin-top: -45px;margin-left: -35px;">x</button><br>
	<form action="adminmessage2copyis.php" method="POST">
	<table>
			<thead>
				<tr>
					<th>NOTIFICATION MESSAGE<br><br>
						<p style="font-size: 15px;">Enter Student IP's</p></th>
				</tr>
			</thead>
			<tbody>
				<tr style="height:5vh;"></tr>
				<tr>
					<td>Student ID Number:</td>
				</tr>
				<tr>
					<td><input type="text" name="studentid" required></td>
				</tr>
				<tr>
					<td>Subject 1:</td>
				</tr>
				<tr>
					<td><input type="text" name="subject1" placeholder="Enter Course No..."></td>
				</tr>
				<tr>
					<td>Subject 2:</td>
				</tr>
				<tr>
					<td><input type="text" name="subject2" placeholder="Enter Course No..."></td>
				</tr>
				<tr>
					<td>Subject 3:</td>
				</tr>
				<tr>
					<td><input type="text" name="subject3" placeholder="Enter Course No..."></td>
				</tr>
				<tr>
					<td>Subject 4:</td>
				</tr>
				<tr>
					<td><input type="text" name="subject4" placeholder="Enter Course No..."></td>
				</tr>
				<tr>
					<td>Subject 5:</td>
				</tr>
				<tr>
					<td><input type="text" name="subject5" placeholder="Enter Course No..."></td>
				</tr>
				<tr>
					<td>Subject 6:</td>
				</tr>
				<tr>
					<td><input type="text" name="subject6" placeholder="Enter Course No..."></td>
				</tr>
				<tr>
					<td>Subject 7:</td>
				</tr>
				<tr>
					<td><input type="text" name="subject7" placeholder="Enter Course No..."></td>
				</tr>
				<tr>
					<td>Subject 8:</td>
				</tr>
				<tr>
					<td><input type="text" name="subject8" placeholder="Enter Course No..."></td>
				</tr>
				<tr>
					<td>Subject 9:</td>
				</tr>
				<tr>
					<td><input type="text" name="subject9" placeholder="Enter Course No..."></td>
				</tr>
				<tr>
					<td>Subject 10:</td>
				</tr>
				<tr>
					<td><input type="text" name="subject10" placeholder="Enter Course No..."></td>
				</tr>
				<tr>
					<td>Reminder:</td>
				</tr>
				<tr>
					<td><textarea name="reminder" placeholder="Enter Your Text Here...(Optional)" style="width: 100%;resize:none;height:15vh;overflow:auto;padding:5px;font-size: 20px;font-family:arial;"></textarea></td>
				</tr>
				<tr style="height:10vh;"></tr>
				<tr>
					<td><button type="submit" style="background: Green;border:none;outline:none;padding:5px;width:100%;font-family: Arial Black; font-size:25px;color:white;text-shadow:1px 1px 0 black;border-radius:5px;cursor:pointer;">
					Send</button></td>
				</tr>
			</tbody>
		</table>
	</form>
</div>
</div>























	<h1 style="text-align: center;width:30%;background:green;padding:10px;color:white;text-shadow:1px 1px 2px black;border-top-right-radius:20px;border-bottom-right-radius:20px;">First Sem</h1><br><br>


    <div class="header">
	<table border="1" cellspacing="0">
		<thead>
			<th style="width:20%;"><img src="images/logo.png"></th>
			<th style="width:50%;">ILOCOS SUR POLYTECHNIC STATE COLLEGE <br><br> Reports of Grades<br> <p style="font-weight: 100;">(Undergraduate)</p></th>
			<th style="width:20%;"> <p style="font-weight: 100; text-align:left;">Document No.<br> Revision No.<br> Effectivity Date:<br>Page No.</p></th>
			<th style="width:20%;"> <p style="font-weight: 100; text-align:left;">ISPSC-AA-F027a<br> 1<br> Oct. 18, 2019<br></p>1 of 2</th>
		</thead>		
	</table><br><br>

	<label>
		Course No. <i>____<u><?php echo $result['sub']; ?></i></u>____
	</label>
	<label>
		Course/Year/Section: <i>____<u><?php echo $result['course']; ?>____</i>
		<i><?php echo $result['section']; ?></u>____</i>
	</label>
	<label>
		Semester: <i>____<u><?php echo $result['sem']; ?></u>____</i>
	</label>
	<label>
		AY: <i>____<u><?php echo $result['AY']; ?></u>____</i>
	</label><br><br>
	<label>
		Descriptive Title: <i style="text-transform: uppercase;">____<u><?php echo $result['des']; ?></u>____</i>
	</label>
	<label>
		Units: <i>____<u><?php echo $result['units']; ?></u>____</i>
	</label><br><br>


	<table border="1" cellspacing="0">
		<thead>
			<th style="width:5%; padding:20px;">No.</th>
			<th style="width:50%; padding:20px;">Name</th>
			<th style="width:30%; padding:20px;">Student ID #</th>
			<th style="width:15%; padding:20px;">Final Rating</th>
		</thead>
		<tbody>
		<tr>
		<?php
        $i = 1;
        $rows = mysqli_query($link, "SELECT * FROM secondyearis ORDER BY name ASC");
      	?>
	    <?php
	        foreach($rows as $row) :
	    ?>
			<td style="text-align: center; padding:5px;"><?php echo $i++; ?></td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['name']; ?></u>____</i>
			</td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['studentid']; ?></u>____</i>
			</td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['grade']; ?></u>____</i>
			</td>
		</tr>
		<?php endforeach; ?>
		</tbody>
	</table><br>

	<table border="1" cellspacing="0">
		<tr>
			<td style="width:20%;">
				Grading System:<br>
				97-100% 
				<p style="text-align: center; margin-top:-17px;">- 1.0</p>
				94-96% 
				<p style="text-align: center; margin-top:-17px;">- 1.25</p>
				91-93% 
				<p style="text-align: center; margin-top:-17px;">- 1.50</p>
				88-90% 
				<p style="text-align: center; margin-top:-17px;">- 1.75</p>
				85-87% 
				<p style="text-align: center; margin-top:-17px;">- 2.0</p>
				82-84% 
				<p style="text-align: center; margin-top:-17px;">- 2.25</p>
				79-81% 
				<p style="text-align: center; margin-top:-17px;">- 2.50</p>
				76-78% 
				<p style="text-align: center; margin-top:-17px;">- 2.75</p>
				75% 
				<p style="text-align: center; margin-top:-17px;">- 3.0</p>
				72-74% 
				<p style="text-align: center; margin-top:-17px;">- 4.0</p>
				71% 
				<p style="text-align: center; margin-top:-17px;">- 5.0</p>
				INC 
				<p style="text-align: center; margin-top:-17px;">- Incomplete</p>
				D 
				<p style="text-align: center; margin-top:-17px;">- Dropped</p>
				OD 
				<p style="text-align: center; margin-top:-17px;">- Officially Dropped</p>
				IP 
				<p style="text-align: center; margin-top:-17px;">- InProgress</p>
			</td>





			<td style="width:40%; cursor:default;">
				No. of Student Passed: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade` LIKE '1.00' OR `grade` LIKE '1.0' OR `grade` LIKE '1.25' OR `grade` LIKE '1.50' OR `grade` LIKE '1.75' OR `grade` LIKE '2.00' OR `grade` LIKE '2.0' OR `grade` LIKE '2.25'  OR `grade` LIKE '2.50'  OR `grade` LIKE '2.75'  OR `grade` LIKE '3.00'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student failed: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade` LIKE '4.00' OR `grade` LIKE '4.0' OR `grade` LIKE '5.00' OR `grade` LIKE '5.0' ";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student with INC: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade`='INC'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student with IP: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade`='IP'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student Dropped: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade`='DROPPED'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				Total No. of Students:
				<?php
      				  $query = "SELECT * FROM `secondyearis`";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?>
				<br><br>
				The Final rating shall be based on the criteria <br>weighted accordingly as follows:<br><br>
				1st Term/Midterm 
				<p style="text-align: center; margin-top:-17px;">50%</p>
				2nd Term/Finals 
				<p style="text-align: center; margin-top:-17px;">50%</p>
				<p style="text-align: center; margin-top:-17px;">______</p><br>
				<p style="text-align: center; margin-top:-17px;">100%</p><br><br>
				NB Prepared in Triplicate
				<p style="text-align: right; margin-top:-17px;">1 Copy</p><br>
				College Dean
				<p style="text-align: right; margin-top:-17px;">2 Copies of Department of Admission</p>
			</td>



			<td style="width:30%; text-align:center; cursor:default;">
				Prepared and Certified Correct:<br><br><br><br>
				__________________________________________________________________<br>
				Name and Signature of Instructor/Professor<br><br><br><br>
				__________________________________________________________________<br>
				Reviewed and Noted by<br><br><br><br>
				__________________________________________________________________<br>
				Program Head/College Dean<br><br><br>
			</td>
		</tr>
	</table>
	<br><br><br>















	<div class="header">
	<table border="1" cellspacing="0">
		<thead>
			<th style="width:20%;"><img src="images/logo.png"></th>
			<th style="width:50%;">ILOCOS SUR POLYTECHNIC STATE COLLEGE <br><br> Reports of Grades<br> <p style="font-weight: 100;">(Undergraduate)</p></th>
			<th style="width:20%;"> <p style="font-weight: 100; text-align:left;">Document No.<br> Revision No.<br> Effectivity Date:<br>Page No.</p></th>
			<th style="width:20%;"> <p style="font-weight: 100; text-align:left;">ISPSC-AA-F027a<br> 1<br> Oct. 18, 2019<br></p>1 of 2</th>
		</thead>		
	</table><br><br>

	<label>
		Course No. <i>____<u><?php echo $result['sub2']; ?></i></u>____
	</label>
	<label>
		Course/Year/Section: <i>____<u><?php echo $result['course']; ?>____</i>
		<i><?php echo $result['section']; ?></u>____</i>
	</label>
	<label>
		Semester: <i>____<u><?php echo $result['sem']; ?></u>____</i>
	</label>
	<label>
		AY: <i>____<u><?php echo $result['AY']; ?></u>____</i>
	</label><br><br>
	<label>
		Descriptive Title: <i style="text-transform: uppercase;">____<u><?php echo $result['des2']; ?></u>____</i>
	</label>
	<label>
		Units: <i>____<u><?php echo $result['units2']; ?></u>____</i>
	</label><br><br>


	<table border="1" cellspacing="0">
		<thead>
			<th style="width:5%; padding:20px;">No.</th>
			<th style="width:50%; padding:20px;">Name</th>
			<th style="width:30%; padding:20px;">Student ID #</th>
			<th style="width:15%; padding:20px;">Final Rating</th>
		</thead>
		<tbody>
		<tr>
		<?php
        $i = 1;
        $rows = mysqli_query($link, "SELECT * FROM secondyearis ORDER BY name ASC");
      	?>
	    <?php
	        foreach($rows as $row) :
	    ?>
			<td style="text-align: center; padding:5px;"><?php echo $i++; ?></td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['name']; ?></u>____</i>
			</td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['studentid']; ?></u>____</i>
			</td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['grade2']; ?></u>____</i>
			</td>
		</tr>
		<?php endforeach; ?>
		</tbody>
	</table><br>

	<table border="1" cellspacing="0">
		<tr>
			<td style="width:20%;">
				Grading System:<br>
				97-100% 
				<p style="text-align: center; margin-top:-17px;">- 1.0</p>
				94-96% 
				<p style="text-align: center; margin-top:-17px;">- 1.25</p>
				91-93% 
				<p style="text-align: center; margin-top:-17px;">- 1.50</p>
				88-90% 
				<p style="text-align: center; margin-top:-17px;">- 1.75</p>
				85-87% 
				<p style="text-align: center; margin-top:-17px;">- 2.0</p>
				82-84% 
				<p style="text-align: center; margin-top:-17px;">- 2.25</p>
				79-81% 
				<p style="text-align: center; margin-top:-17px;">- 2.50</p>
				76-78% 
				<p style="text-align: center; margin-top:-17px;">- 2.75</p>
				75% 
				<p style="text-align: center; margin-top:-17px;">- 3.0</p>
				72-74% 
				<p style="text-align: center; margin-top:-17px;">- 4.0</p>
				71% 
				<p style="text-align: center; margin-top:-17px;">- 5.0</p>
				INC 
				<p style="text-align: center; margin-top:-17px;">- Incomplete</p>
				D 
				<p style="text-align: center; margin-top:-17px;">- Dropped</p>
				OD 
				<p style="text-align: center; margin-top:-17px;">- Officially Dropped</p>
				IP 
				<p style="text-align: center; margin-top:-17px;">- InProgress</p>
			</td>





			<td style="width:40%; cursor:default;">
				No. of Student Passed: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade2` LIKE '1.00' OR `grade` LIKE '1.0' OR `grade2` LIKE '1.25' OR `grade2` LIKE '1.50' OR `grade2` LIKE '1.75' OR `grade2` LIKE '2.00' OR `grade` LIKE '2.0' OR `grade2` LIKE '2.25'  OR `grade2` LIKE '2.50'  OR `grade2` LIKE '2.75'  OR `grade2` LIKE '3.0' OR `grade` LIKE '3.00'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student failed: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade2` LIKE '4.0' OR `grade` LIKE '4.00' OR `grade2` LIKE '5.0' OR `grade` LIKE '5.00'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student with INC: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade2`='INC'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student with IP: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade2`='IP'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student Dropped: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade2`='DROPPED'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				Total No. of Students:
				<?php
      				  $query = "SELECT * FROM `secondyearis`";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?>
				<br><br>
				The Final rating shall be based on the criteria <br>weighted accordingly as follows:<br><br>
				1st Term/Midterm 
				<p style="text-align: center; margin-top:-17px;">50%</p>
				2nd Term/Finals 
				<p style="text-align: center; margin-top:-17px;">50%</p>
				<p style="text-align: center; margin-top:-17px;">______</p><br>
				<p style="text-align: center; margin-top:-17px;">100%</p><br><br>
				NB Prepared in Triplicate
				<p style="text-align: right; margin-top:-17px;">1 Copy</p><br>
				College Dean
				<p style="text-align: right; margin-top:-17px;">2 Copies of Department of Admission</p>
			</td>



			<td style="width:30%; text-align:center; cursor:default;">
				Prepared and Certified Correct:<br><br><br><br>
				__________________________________________________________________<br>
				Name and Signature of Instructor/Professor<br><br><br><br>
				__________________________________________________________________<br>
				Reviewed and Noted by<br><br><br><br>
				__________________________________________________________________<br>
				Program Head/College Dean<br><br><br>
			</td>
		</tr>
	</table>
	<br><br><br>

















	<div class="header">
	<table border="1" cellspacing="0">
		<thead>
			<th style="width:20%;"><img src="images/logo.png"></th>
			<th style="width:50%;">ILOCOS SUR POLYTECHNIC STATE COLLEGE <br><br> Reports of Grades<br> <p style="font-weight: 100;">(Undergraduate)</p></th>
			<th style="width:20%;"> <p style="font-weight: 100; text-align:left;">Document No.<br> Revision No.<br> Effectivity Date:<br>Page No.</p></th>
			<th style="width:20%;"> <p style="font-weight: 100; text-align:left;">ISPSC-AA-F027a<br> 1<br> Oct. 18, 2019<br></p>1 of 2</th>
		</thead>		
	</table><br><br>

	<label>
		Course No. <i>____<u><?php echo $result['sub3']; ?></i></u>____
	</label>
	<label>
		Course/Year/Section: <i>____<u><?php echo $result['course']; ?>____</i>
		<i><?php echo $result['section']; ?></u>____</i>
	</label>
	<label>
		Semester: <i>____<u><?php echo $result['sem']; ?></u>____</i>
	</label>
	<label>
		AY: <i>____<u><?php echo $result['AY']; ?></u>____</i>
	</label><br><br>
	<label>
		Descriptive Title: <i style="text-transform: uppercase;">____<u><?php echo $result['des3']; ?></u>____</i>
	</label>
	<label>
		Units: <i>____<u><?php echo $result['units3']; ?></u>____</i>
	</label><br><br>


	<table border="1" cellspacing="0">
		<thead>
			<th style="width:5%; padding:20px;">No.</th>
			<th style="width:50%; padding:20px;">Name</th>
			<th style="width:30%; padding:20px;">Student ID #</th>
			<th style="width:15%; padding:20px;">Final Rating</th>
		</thead>
		<tbody>
		<tr>
		<?php
        $i = 1;
        $rows = mysqli_query($link, "SELECT * FROM secondyearis ORDER BY name ASC");
      	?>
	    <?php
	        foreach($rows as $row) :
	    ?>
			<td style="text-align: center; padding:5px;"><?php echo $i++; ?></td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['name']; ?></u>____</i>
			</td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['studentid']; ?></u>____</i>
			</td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['grade3']; ?></u>____</i>
			</td>
		</tr>
		<?php endforeach; ?>
		</tbody>
	</table><br>

	<table border="1" cellspacing="0">
		<tr>
			<td style="width:20%;">
				Grading System:<br>
				97-100% 
				<p style="text-align: center; margin-top:-17px;">- 1.0</p>
				94-96% 
				<p style="text-align: center; margin-top:-17px;">- 1.25</p>
				91-93% 
				<p style="text-align: center; margin-top:-17px;">- 1.50</p>
				88-90% 
				<p style="text-align: center; margin-top:-17px;">- 1.75</p>
				85-87% 
				<p style="text-align: center; margin-top:-17px;">- 2.0</p>
				82-84% 
				<p style="text-align: center; margin-top:-17px;">- 2.25</p>
				79-81% 
				<p style="text-align: center; margin-top:-17px;">- 2.50</p>
				76-78% 
				<p style="text-align: center; margin-top:-17px;">- 2.75</p>
				75% 
				<p style="text-align: center; margin-top:-17px;">- 3.0</p>
				72-74% 
				<p style="text-align: center; margin-top:-17px;">- 4.0</p>
				71% 
				<p style="text-align: center; margin-top:-17px;">- 5.0</p>
				INC 
				<p style="text-align: center; margin-top:-17px;">- Incomplete</p>
				D 
				<p style="text-align: center; margin-top:-17px;">- Dropped</p>
				OD 
				<p style="text-align: center; margin-top:-17px;">- Officially Dropped</p>
				IP 
				<p style="text-align: center; margin-top:-17px;">- InProgress</p>
			</td>





			<td style="width:40%; cursor:default;">
				No. of Student Passed: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade3` LIKE '1.0' OR `grade` LIKE '1.00' OR `grade3` LIKE '1.25' OR `grade3` LIKE '1.50' OR `grade3` LIKE '1.75' OR `grade3` LIKE '2.0' OR `grade3` LIKE '2.25'  OR `grade3` LIKE '2.50'  OR `grade3` LIKE '2.75'  OR `grade3` LIKE '3.0' OR `grade` LIKE '3.00'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student failed: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade3` LIKE '4.0' OR `grade` LIKE '4.00' OR `grade3` LIKE '5.0' OR `grade` LIKE '5.00'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student with INC: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade3`='INC'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student with IP: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade3`='IP'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student Dropped: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade3`='DROPPED'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				Total No. of Students:
				<?php
      				  $query = "SELECT * FROM `secondyearis`";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?>
				<br><br>
				The Final rating shall be based on the criteria <br>weighted accordingly as follows:<br><br>
				1st Term/Midterm 
				<p style="text-align: center; margin-top:-17px;">50%</p>
				2nd Term/Finals 
				<p style="text-align: center; margin-top:-17px;">50%</p>
				<p style="text-align: center; margin-top:-17px;">______</p><br>
				<p style="text-align: center; margin-top:-17px;">100%</p><br><br>
				NB Prepared in Triplicate
				<p style="text-align: right; margin-top:-17px;">1 Copy</p><br>
				College Dean
				<p style="text-align: right; margin-top:-17px;">2 Copies of Department of Admission</p>
			</td>



			<td style="width:30%; text-align:center; cursor:default;">
				Prepared and Certified Correct:<br><br><br><br>
				__________________________________________________________________<br>
				Name and Signature of Instructor/Professor<br><br><br><br>
				__________________________________________________________________<br>
				Reviewed and Noted by<br><br><br><br>
				__________________________________________________________________<br>
				Program Head/College Dean<br><br><br>
			</td>
		</tr>
	</table>
	<br><br><br>




























	<div class="header">
	<table border="1" cellspacing="0">
		<thead>
			<th style="width:20%;"><img src="images/logo.png"></th>
			<th style="width:50%;">ILOCOS SUR POLYTECHNIC STATE COLLEGE <br><br> Reports of Grades<br> <p style="font-weight: 100;">(Undergraduate)</p></th>
			<th style="width:20%;"> <p style="font-weight: 100; text-align:left;">Document No.<br> Revision No.<br> Effectivity Date:<br>Page No.</p></th>
			<th style="width:20%;"> <p style="font-weight: 100; text-align:left;">ISPSC-AA-F027a<br> 1<br> Oct. 18, 2019<br></p>1 of 2</th>
		</thead>		
	</table><br><br>

	<label>
		Course No. <i>____<u><?php echo $result['sub4']; ?></i></u>____
	</label>
	<label>
		Course/Year/Section: <i>____<u><?php echo $result['course']; ?>____</i>
		<i><?php echo $result['section']; ?></u>____</i>
	</label>
	<label>
		Semester: <i>____<u><?php echo $result['sem']; ?></u>____</i>
	</label>
	<label>
		AY: <i>____<u><?php echo $result['AY']; ?></u>____</i>
	</label><br><br>
	<label>
		Descriptive Title: <i style="text-transform: uppercase;">____<u><?php echo $result['des4']; ?></u>____</i>
	</label>
	<label>
		Units: <i>____<u><?php echo $result['units4']; ?></u>____</i>
	</label><br><br>


	<table border="1" cellspacing="0">
		<thead>
			<th style="width:5%; padding:20px;">No.</th>
			<th style="width:50%; padding:20px;">Name</th>
			<th style="width:30%; padding:20px;">Student ID #</th>
			<th style="width:15%; padding:20px;">Final Rating</th>
		</thead>
		<tbody>
		<tr>
		<?php
        $i = 1;
        $rows = mysqli_query($link, "SELECT * FROM secondyearis ORDER BY name ASC");
      	?>
	    <?php
	        foreach($rows as $row) :
	    ?>
			<td style="text-align: center; padding:5px;"><?php echo $i++; ?></td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['name']; ?></u>____</i>
			</td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['studentid']; ?></u>____</i>
			</td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['grade4']; ?></u>____</i>
			</td>
		</tr>
		<?php endforeach; ?>
		</tbody>
	</table><br>

	<table border="1" cellspacing="0">
		<tr>
			<td style="width:20%;">
				Grading System:<br>
				97-100% 
				<p style="text-align: center; margin-top:-17px;">- 1.0</p>
				94-96% 
				<p style="text-align: center; margin-top:-17px;">- 1.25</p>
				91-93% 
				<p style="text-align: center; margin-top:-17px;">- 1.50</p>
				88-90% 
				<p style="text-align: center; margin-top:-17px;">- 1.75</p>
				85-87% 
				<p style="text-align: center; margin-top:-17px;">- 2.0</p>
				82-84% 
				<p style="text-align: center; margin-top:-17px;">- 2.25</p>
				79-81% 
				<p style="text-align: center; margin-top:-17px;">- 2.50</p>
				76-78% 
				<p style="text-align: center; margin-top:-17px;">- 2.75</p>
				75% 
				<p style="text-align: center; margin-top:-17px;">- 3.0</p>
				72-74% 
				<p style="text-align: center; margin-top:-17px;">- 4.0</p>
				71% 
				<p style="text-align: center; margin-top:-17px;">- 5.0</p>
				INC 
				<p style="text-align: center; margin-top:-17px;">- Incomplete</p>
				D 
				<p style="text-align: center; margin-top:-17px;">- Dropped</p>
				OD 
				<p style="text-align: center; margin-top:-17px;">- Officially Dropped</p>
				IP 
				<p style="text-align: center; margin-top:-17px;">- InProgress</p>
			</td>





			<td style="width:40%; cursor:default;">
				No. of Student Passed: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade4` LIKE '1.0' OR `grade` LIKE '1.00' OR `grade4` LIKE '1.25' OR `grade4` LIKE '1.50' OR `grade4` LIKE '1.75' OR `grade4` LIKE '2.0' OR `grade4` LIKE '2.25'  OR `grade4` LIKE '2.50'  OR `grade4` LIKE '2.75'  OR `grade4` LIKE '3.0' OR `grade` LIKE '3.00'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student failed: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade4` LIKE '4.0' OR `grade` LIKE '4.00' OR `grade4` LIKE '5.0' OR `grade` LIKE '5.00'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student with INC: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade4`='INC'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student with IP: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade4`='IP'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student Dropped: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade4`='DROPPED'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				Total No. of Students:
				<?php
      				  $query = "SELECT * FROM `secondyearis`";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?>
				<br><br>
				The Final rating shall be based on the criteria <br>weighted accordingly as follows:<br><br>
				1st Term/Midterm 
				<p style="text-align: center; margin-top:-17px;">50%</p>
				2nd Term/Finals 
				<p style="text-align: center; margin-top:-17px;">50%</p>
				<p style="text-align: center; margin-top:-17px;">______</p><br>
				<p style="text-align: center; margin-top:-17px;">100%</p><br><br>
				NB Prepared in Triplicate
				<p style="text-align: right; margin-top:-17px;">1 Copy</p><br>
				College Dean
				<p style="text-align: right; margin-top:-17px;">2 Copies of Department of Admission</p>
			</td>



			<td style="width:30%; text-align:center; cursor:default;">
				Prepared and Certified Correct:<br><br><br><br>
				__________________________________________________________________<br>
				Name and Signature of Instructor/Professor<br><br><br><br>
				__________________________________________________________________<br>
				Reviewed and Noted by<br><br><br><br>
				__________________________________________________________________<br>
				Program Head/College Dean<br><br><br>
			</td>
		</tr>
	</table>
	<br><br><br>













	<div class="header">
	<table border="1" cellspacing="0">
		<thead>
			<th style="width:20%;"><img src="images/logo.png"></th>
			<th style="width:50%;">ILOCOS SUR POLYTECHNIC STATE COLLEGE <br><br> Reports of Grades<br> <p style="font-weight: 100;">(Undergraduate)</p></th>
			<th style="width:20%;"> <p style="font-weight: 100; text-align:left;">Document No.<br> Revision No.<br> Effectivity Date:<br>Page No.</p></th>
			<th style="width:20%;"> <p style="font-weight: 100; text-align:left;">ISPSC-AA-F027a<br> 1<br> Oct. 18, 2019<br></p>1 of 2</th>
		</thead>		
	</table><br><br>

	<label>
		Course No. <i>____<u><?php echo $result['sub5']; ?></i></u>____
	</label>
	<label>
		Course/Year/Section: <i>____<u><?php echo $result['course']; ?>____</i>
		<i><?php echo $result['section']; ?></u>____</i>
	</label>
	<label>
		Semester: <i>____<u><?php echo $result['sem']; ?></u>____</i>
	</label>
	<label>
		AY: <i>____<u><?php echo $result['AY']; ?></u>____</i>
	</label><br><br>
	<label>
		Descriptive Title: <i style="text-transform: uppercase;">____<u><?php echo $result['des5']; ?></u>____</i>
	</label>
	<label>
		Units: <i>____<u><?php echo $result['units5']; ?></u>____</i>
	</label><br><br>


	<table border="1" cellspacing="0">
		<thead>
			<th style="width:5%; padding:20px;">No.</th>
			<th style="width:50%; padding:20px;">Name</th>
			<th style="width:30%; padding:20px;">Student ID #</th>
			<th style="width:15%; padding:20px;">Final Rating</th>
		</thead>
		<tbody>
		<tr>
		<?php
        $i = 1;
        $rows = mysqli_query($link, "SELECT * FROM secondyearis ORDER BY name ASC");
      	?>
	    <?php
	        foreach($rows as $row) :
	    ?>
			<td style="text-align: center; padding:5px;"><?php echo $i++; ?></td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['name']; ?></u>____</i>
			</td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['studentid']; ?></u>____</i>
			</td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['grade5']; ?></u>____</i>
			</td>
		</tr>
		<?php endforeach; ?>
		</tbody>
	</table><br>

	<table border="1" cellspacing="0">
		<tr>
			<td style="width:20%;">
				Grading System:<br>
				97-100% 
				<p style="text-align: center; margin-top:-17px;">- 1.0</p>
				94-96% 
				<p style="text-align: center; margin-top:-17px;">- 1.25</p>
				91-93% 
				<p style="text-align: center; margin-top:-17px;">- 1.50</p>
				88-90% 
				<p style="text-align: center; margin-top:-17px;">- 1.75</p>
				85-87% 
				<p style="text-align: center; margin-top:-17px;">- 2.0</p>
				82-84% 
				<p style="text-align: center; margin-top:-17px;">- 2.25</p>
				79-81% 
				<p style="text-align: center; margin-top:-17px;">- 2.50</p>
				76-78% 
				<p style="text-align: center; margin-top:-17px;">- 2.75</p>
				75% 
				<p style="text-align: center; margin-top:-17px;">- 3.0</p>
				72-74% 
				<p style="text-align: center; margin-top:-17px;">- 4.0</p>
				71% 
				<p style="text-align: center; margin-top:-17px;">- 5.0</p>
				INC 
				<p style="text-align: center; margin-top:-17px;">- Incomplete</p>
				D 
				<p style="text-align: center; margin-top:-17px;">- Dropped</p>
				OD 
				<p style="text-align: center; margin-top:-17px;">- Officially Dropped</p>
				IP 
				<p style="text-align: center; margin-top:-17px;">- InProgress</p>
			</td>





			<td style="width:40%; cursor:default;">
				No. of Student Passed: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade5` LIKE '1.0' OR `grade5` LIKE '1.00' OR `grade5` LIKE '1.25' OR `grade5` LIKE '1.50' OR `grade5` LIKE '1.75' OR `grade5` LIKE '2.0' OR `grade5` LIKE '2.00' OR `grade5` LIKE '2.25'  OR `grade5` LIKE '2.50'  OR `grade5` LIKE '2.75'  OR `grade5` LIKE '3.0' OR `grade5` LIKE '3.00'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student failed: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade5` LIKE '4.0' OR `grade5` LIKE '4.00' OR `grade5` LIKE '5.0' OR `grade5` LIKE '5.00'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student with INC: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade5`='INC'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student with IP: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade5`='IP'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student Dropped: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade5`='DROPPED'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				Total No. of Students:
				<?php
      				  $query = "SELECT * FROM `secondyearis`";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?>
				<br><br>
				The Final rating shall be based on the criteria <br>weighted accordingly as follows:<br><br>
				1st Term/Midterm 
				<p style="text-align: center; margin-top:-17px;">50%</p>
				2nd Term/Finals 
				<p style="text-align: center; margin-top:-17px;">50%</p>
				<p style="text-align: center; margin-top:-17px;">______</p><br>
				<p style="text-align: center; margin-top:-17px;">100%</p><br><br>
				NB Prepared in Triplicate
				<p style="text-align: right; margin-top:-17px;">1 Copy</p><br>
				College Dean
				<p style="text-align: right; margin-top:-17px;">2 Copies of Department of Admission</p>
			</td>



			<td style="width:30%; text-align:center; cursor:default;">
				Prepared and Certified Correct:<br><br><br><br>
				__________________________________________________________________<br>
				Name and Signature of Instructor/Professor<br><br><br><br>
				__________________________________________________________________<br>
				Reviewed and Noted by<br><br><br><br>
				__________________________________________________________________<br>
				Program Head/College Dean<br><br><br>
			</td>
		</tr>
	</table>
	<br><br><br>








	<div class="header">
	<table border="1" cellspacing="0">
		<thead>
			<th style="width:20%;"><img src="images/logo.png"></th>
			<th style="width:50%;">ILOCOS SUR POLYTECHNIC STATE COLLEGE <br><br> Reports of Grades<br> <p style="font-weight: 100;">(Undergraduate)</p></th>
			<th style="width:20%;"> <p style="font-weight: 100; text-align:left;">Document No.<br> Revision No.<br> Effectivity Date:<br>Page No.</p></th>
			<th style="width:20%;"> <p style="font-weight: 100; text-align:left;">ISPSC-AA-F027a<br> 1<br> Oct. 18, 2019<br></p>1 of 2</th>
		</thead>		
	</table><br><br>

	<label>
		Course No. <i>____<u><?php echo $result['sub6']; ?></i></u>____
	</label>
	<label>
		Course/Year/Section: <i>____<u><?php echo $result['course']; ?>____</i>
		<i><?php echo $result['section']; ?></u>____</i>
	</label>
	<label>
		Semester: <i>____<u><?php echo $result['sem']; ?></u>____</i>
	</label>
	<label>
		AY: <i>____<u><?php echo $result['AY']; ?></u>____</i>
	</label><br><br>
	<label>
		Descriptive Title: <i style="text-transform: uppercase;">____<u><?php echo $result['des6']; ?></u>____</i>
	</label>
	<label>
		Units: <i>____<u><?php echo $result['units6']; ?></u>____</i>
	</label><br><br>


	<table border="1" cellspacing="0">
		<thead>
			<th style="width:5%; padding:20px;">No.</th>
			<th style="width:50%; padding:20px;">Name</th>
			<th style="width:30%; padding:20px;">Student ID #</th>
			<th style="width:15%; padding:20px;">Final Rating</th>
		</thead>
		<tbody>
		<tr>
		<?php
        $i = 1;
        $rows = mysqli_query($link, "SELECT * FROM secondyearis ORDER BY name ASC");
      	?>
	    <?php
	        foreach($rows as $row) :
	    ?>
			<td style="text-align: center; padding:5px;"><?php echo $i++; ?></td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['name']; ?></u>____</i>
			</td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['studentid']; ?></u>____</i>
			</td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['grade6']; ?></u>____</i>
			</td>
		</tr>
		<?php endforeach; ?>
		</tbody>
	</table><br>

	<table border="1" cellspacing="0">
		<tr>
			<td style="width:20%;">
				Grading System:<br>
				97-100% 
				<p style="text-align: center; margin-top:-17px;">- 1.0</p>
				94-96% 
				<p style="text-align: center; margin-top:-17px;">- 1.25</p>
				91-93% 
				<p style="text-align: center; margin-top:-17px;">- 1.50</p>
				88-90% 
				<p style="text-align: center; margin-top:-17px;">- 1.75</p>
				85-87% 
				<p style="text-align: center; margin-top:-17px;">- 2.0</p>
				82-84% 
				<p style="text-align: center; margin-top:-17px;">- 2.25</p>
				79-81% 
				<p style="text-align: center; margin-top:-17px;">- 2.50</p>
				76-78% 
				<p style="text-align: center; margin-top:-17px;">- 2.75</p>
				75% 
				<p style="text-align: center; margin-top:-17px;">- 3.0</p>
				72-74% 
				<p style="text-align: center; margin-top:-17px;">- 4.0</p>
				71% 
				<p style="text-align: center; margin-top:-17px;">- 5.0</p>
				INC 
				<p style="text-align: center; margin-top:-17px;">- Incomplete</p>
				D 
				<p style="text-align: center; margin-top:-17px;">- Dropped</p>
				OD 
				<p style="text-align: center; margin-top:-17px;">- Officially Dropped</p>
				IP 
				<p style="text-align: center; margin-top:-17px;">- InProgress</p>
			</td>





			<td style="width:40%; cursor:default;">
				No. of Student Passed: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade6` LIKE '1.0' OR `grade6` LIKE '1.00' OR `grade6` LIKE '1.25' OR `grade6` LIKE '1.50' OR `grade6` LIKE '1.75' OR `grade6` LIKE '2.0' OR `grade6` LIKE '2.00' OR `grade6` LIKE '2.25'  OR `grade6` LIKE '2.50'  OR `grade6` LIKE '2.75'  OR `grade6` LIKE '3.0' OR `grade6` LIKE '3.00'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student failed: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade6` LIKE '4.0' OR `grade6` LIKE '4.00' OR `grade6` LIKE '5.0' OR `grade6` LIKE '5.00'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student with INC: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade6`='INC'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student with IP: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade6`='IP'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student Dropped: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade6`='DROPPED'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				Total No. of Students:
				<?php
      				  $query = "SELECT * FROM `secondyearis`";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?>
				<br><br>
				The Final rating shall be based on the criteria <br>weighted accordingly as follows:<br><br>
				1st Term/Midterm 
				<p style="text-align: center; margin-top:-17px;">50%</p>
				2nd Term/Finals 
				<p style="text-align: center; margin-top:-17px;">50%</p>
				<p style="text-align: center; margin-top:-17px;">______</p><br>
				<p style="text-align: center; margin-top:-17px;">100%</p><br><br>
				NB Prepared in Triplicate
				<p style="text-align: right; margin-top:-17px;">1 Copy</p><br>
				College Dean
				<p style="text-align: right; margin-top:-17px;">2 Copies of Department of Admission</p>
			</td>



			<td style="width:30%; text-align:center; cursor:default;">
				Prepared and Certified Correct:<br><br><br><br>
				__________________________________________________________________<br>
				Name and Signature of Instructor/Professor<br><br><br><br>
				__________________________________________________________________<br>
				Reviewed and Noted by<br><br><br><br>
				__________________________________________________________________<br>
				Program Head/College Dean<br><br><br>
			</td>
		</tr>
	</table>
	<br><br><br>








	<div class="header">
	<table border="1" cellspacing="0">
		<thead>
			<th style="width:20%;"><img src="images/logo.png"></th>
			<th style="width:50%;">ILOCOS SUR POLYTECHNIC STATE COLLEGE <br><br> Reports of Grades<br> <p style="font-weight: 100;">(Undergraduate)</p></th>
			<th style="width:20%;"> <p style="font-weight: 100; text-align:left;">Document No.<br> Revision No.<br> Effectivity Date:<br>Page No.</p></th>
			<th style="width:20%;"> <p style="font-weight: 100; text-align:left;">ISPSC-AA-F027a<br> 1<br> Oct. 18, 2019<br></p>1 of 2</th>
		</thead>		
	</table><br><br>

	<label>
		Course No. <i>____<u><?php echo $result['sub7']; ?></i></u>____
	</label>
	<label>
		Course/Year/Section: <i>____<u><?php echo $result['course']; ?>____</i>
		<i><?php echo $result['section']; ?></u>____</i>
	</label>
	<label>
		Semester: <i>____<u><?php echo $result['sem']; ?></u>____</i>
	</label>
	<label>
		AY: <i>____<u><?php echo $result['AY']; ?></u>____</i>
	</label><br><br>
	<label>
		Descriptive Title: <i style="text-transform: uppercase;">____<u><?php echo $result['des7']; ?></u>____</i>
	</label>
	<label>
		Units: <i>____<u><?php echo $result['units7']; ?></u>____</i>
	</label><br><br>


	<table border="1" cellspacing="0">
		<thead>
			<th style="width:5%; padding:20px;">No.</th>
			<th style="width:50%; padding:20px;">Name</th>
			<th style="width:30%; padding:20px;">Student ID #</th>
			<th style="width:15%; padding:20px;">Final Rating</th>
		</thead>
		<tbody>
		<tr>
		<?php
        $i = 1;
        $rows = mysqli_query($link, "SELECT * FROM secondyearis ORDER BY name ASC");
      	?>
	    <?php
	        foreach($rows as $row) :
	    ?>
			<td style="text-align: center; padding:5px;"><?php echo $i++; ?></td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['name']; ?></u>____</i>
			</td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['studentid']; ?></u>____</i>
			</td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['grade7']; ?></u>____</i>
			</td>
		</tr>
		<?php endforeach; ?>
		</tbody>
	</table><br>

	<table border="1" cellspacing="0">
		<tr>
			<td style="width:20%;">
				Grading System:<br>
				97-100% 
				<p style="text-align: center; margin-top:-17px;">- 1.0</p>
				94-96% 
				<p style="text-align: center; margin-top:-17px;">- 1.25</p>
				91-93% 
				<p style="text-align: center; margin-top:-17px;">- 1.50</p>
				88-90% 
				<p style="text-align: center; margin-top:-17px;">- 1.75</p>
				85-87% 
				<p style="text-align: center; margin-top:-17px;">- 2.0</p>
				82-84% 
				<p style="text-align: center; margin-top:-17px;">- 2.25</p>
				79-81% 
				<p style="text-align: center; margin-top:-17px;">- 2.50</p>
				76-78% 
				<p style="text-align: center; margin-top:-17px;">- 2.75</p>
				75% 
				<p style="text-align: center; margin-top:-17px;">- 3.0</p>
				72-74% 
				<p style="text-align: center; margin-top:-17px;">- 4.0</p>
				71% 
				<p style="text-align: center; margin-top:-17px;">- 5.0</p>
				INC 
				<p style="text-align: center; margin-top:-17px;">- Incomplete</p>
				D 
				<p style="text-align: center; margin-top:-17px;">- Dropped</p>
				OD 
				<p style="text-align: center; margin-top:-17px;">- Officially Dropped</p>
				IP 
				<p style="text-align: center; margin-top:-17px;">- InProgress</p>
			</td>





			<td style="width:40%; cursor:default;">
				No. of Student Passed: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade7` LIKE '1.0' OR `grade7` LIKE '1.00' OR `grade7` LIKE '1.25' OR `grade7` LIKE '1.50' OR `grade7` LIKE '1.75' OR `grade7` LIKE '2.0' OR `grade7` LIKE '2.00' OR `grade7` LIKE '2.25'  OR `grade7` LIKE '2.50'  OR `grade7` LIKE '2.75'  OR `grade7` LIKE '3.0' OR `grade7` LIKE '3.00'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student failed: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade7` LIKE '4.0' OR `grade7` LIKE '4.00' OR `grade7` LIKE '5.0' OR `grade7` LIKE '5.00'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student with INC: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade7`='INC'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student with IP: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade7`='IP'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student Dropped: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade7`='DROPPED'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				Total No. of Students:
				<?php
      				  $query = "SELECT * FROM `secondyearis`";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?>
				<br><br>
				The Final rating shall be based on the criteria <br>weighted accordingly as follows:<br><br>
				1st Term/Midterm 
				<p style="text-align: center; margin-top:-17px;">50%</p>
				2nd Term/Finals 
				<p style="text-align: center; margin-top:-17px;">50%</p>
				<p style="text-align: center; margin-top:-17px;">______</p><br>
				<p style="text-align: center; margin-top:-17px;">100%</p><br><br>
				NB Prepared in Triplicate
				<p style="text-align: right; margin-top:-17px;">1 Copy</p><br>
				College Dean
				<p style="text-align: right; margin-top:-17px;">2 Copies of Department of Admission</p>
			</td>



			<td style="width:30%; text-align:center; cursor:default;">
				Prepared and Certified Correct:<br><br><br><br>
				__________________________________________________________________<br>
				Name and Signature of Instructor/Professor<br><br><br><br>
				__________________________________________________________________<br>
				Reviewed and Noted by<br><br><br><br>
				__________________________________________________________________<br>
				Program Head/College Dean<br><br><br>
			</td>
		</tr>
	</table>
	<br><br><br>








	<div class="header">
	<table border="1" cellspacing="0">
		<thead>
			<th style="width:20%;"><img src="images/logo.png"></th>
			<th style="width:50%;">ILOCOS SUR POLYTECHNIC STATE COLLEGE <br><br> Reports of Grades<br> <p style="font-weight: 100;">(Undergraduate)</p></th>
			<th style="width:20%;"> <p style="font-weight: 100; text-align:left;">Document No.<br> Revision No.<br> Effectivity Date:<br>Page No.</p></th>
			<th style="width:20%;"> <p style="font-weight: 100; text-align:left;">ISPSC-AA-F027a<br> 1<br> Oct. 18, 2019<br></p>1 of 2</th>
		</thead>		
	</table><br><br>

	<label>
		Course No. <i>____<u><?php echo $result['sub8']; ?></i></u>____
	</label>
	<label>
		Course/Year/Section: <i>____<u><?php echo $result['course']; ?>____</i>
		<i><?php echo $result['section']; ?></u>____</i>
	</label>
	<label>
		Semester: <i>____<u><?php echo $result['sem']; ?></u>____</i>
	</label>
	<label>
		AY: <i>____<u><?php echo $result['AY']; ?></u>____</i>
	</label><br><br>
	<label>
		Descriptive Title: <i style="text-transform: uppercase;">____<u><?php echo $result['des8']; ?></u>____</i>
	</label>
	<label>
		Units: <i>____<u><?php echo $result['units8']; ?></u>____</i>
	</label><br><br>


	<table border="1" cellspacing="0">
		<thead>
			<th style="width:5%; padding:20px;">No.</th>
			<th style="width:50%; padding:20px;">Name</th>
			<th style="width:30%; padding:20px;">Student ID #</th>
			<th style="width:15%; padding:20px;">Final Rating</th>
		</thead>
		<tbody>
		<tr>
		<?php
        $i = 1;
        $rows = mysqli_query($link, "SELECT * FROM secondyearis ORDER BY name ASC");
      	?>
	    <?php
	        foreach($rows as $row) :
	    ?>
			<td style="text-align: center; padding:5px;"><?php echo $i++; ?></td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['name']; ?></u>____</i>
			</td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['studentid']; ?></u>____</i>
			</td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['grade8']; ?></u>____</i>
			</td>
		</tr>
		<?php endforeach; ?>
		</tbody>
	</table><br>

	<table border="1" cellspacing="0">
		<tr>
			<td style="width:20%;">
				Grading System:<br>
				97-100% 
				<p style="text-align: center; margin-top:-17px;">- 1.0</p>
				94-96% 
				<p style="text-align: center; margin-top:-17px;">- 1.25</p>
				91-93% 
				<p style="text-align: center; margin-top:-17px;">- 1.50</p>
				88-90% 
				<p style="text-align: center; margin-top:-17px;">- 1.75</p>
				85-87% 
				<p style="text-align: center; margin-top:-17px;">- 2.0</p>
				82-84% 
				<p style="text-align: center; margin-top:-17px;">- 2.25</p>
				79-81% 
				<p style="text-align: center; margin-top:-17px;">- 2.50</p>
				76-78% 
				<p style="text-align: center; margin-top:-17px;">- 2.75</p>
				75% 
				<p style="text-align: center; margin-top:-17px;">- 3.0</p>
				72-74% 
				<p style="text-align: center; margin-top:-17px;">- 4.0</p>
				71% 
				<p style="text-align: center; margin-top:-17px;">- 5.0</p>
				INC 
				<p style="text-align: center; margin-top:-17px;">- Incomplete</p>
				D 
				<p style="text-align: center; margin-top:-17px;">- Dropped</p>
				OD 
				<p style="text-align: center; margin-top:-17px;">- Officially Dropped</p>
				IP 
				<p style="text-align: center; margin-top:-17px;">- InProgress</p>
			</td>





			<td style="width:40%; cursor:default;">
				No. of Student Passed: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade8` LIKE '1.0' OR `grade8` LIKE '1.00' OR `grade8` LIKE '1.25' OR `grade8` LIKE '1.50' OR `grade8` LIKE '1.75' OR `grade8` LIKE '2.0' OR `grade8` LIKE '2.00'OR `grade8` LIKE '2.25'  OR `grade8` LIKE '2.50'  OR `grade8` LIKE '2.75'  OR `grade8` LIKE '3.0' OR `grade8` LIKE '3.00'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student failed: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade8` LIKE '4.0' OR `grade8` LIKE '4.00' OR `grade8` LIKE '5.0' OR `grade8` LIKE '5.00'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student with INC: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade8`='INC'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student with IP: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade8`='IP'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student Dropped: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade8`='DROPPED'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				Total No. of Students:
				<?php
      				  $query = "SELECT * FROM `secondyearis`";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?>
				<br><br>
				The Final rating shall be based on the criteria <br>weighted accordingly as follows:<br><br>
				1st Term/Midterm 
				<p style="text-align: center; margin-top:-17px;">50%</p>
				2nd Term/Finals 
				<p style="text-align: center; margin-top:-17px;">50%</p>
				<p style="text-align: center; margin-top:-17px;">______</p><br>
				<p style="text-align: center; margin-top:-17px;">100%</p><br><br>
				NB Prepared in Triplicate
				<p style="text-align: right; margin-top:-17px;">1 Copy</p><br>
				College Dean
				<p style="text-align: right; margin-top:-17px;">2 Copies of Department of Admission</p>
			</td>



			<td style="width:30%; text-align:center; cursor:default;">
				Prepared and Certified Correct:<br><br><br><br>
				__________________________________________________________________<br>
				Name and Signature of Instructor/Professor<br><br><br><br>
				__________________________________________________________________<br>
				Reviewed and Noted by<br><br><br><br>
				__________________________________________________________________<br>
				Program Head/College Dean<br><br><br>
			</td>
		</tr>
	</table>
	<br><br><br>













	<div class="header">
	<table border="1" cellspacing="0">
		<thead>
			<th style="width:20%;"><img src="images/logo.png"></th>
			<th style="width:50%;">ILOCOS SUR POLYTECHNIC STATE COLLEGE <br><br> Reports of Grades<br> <p style="font-weight: 100;">(Undergraduate)</p></th>
			<th style="width:20%;"> <p style="font-weight: 100; text-align:left;">Document No.<br> Revision No.<br> Effectivity Date:<br>Page No.</p></th>
			<th style="width:20%;"> <p style="font-weight: 100; text-align:left;">ISPSC-AA-F027a<br> 1<br> Oct. 18, 2019<br></p>1 of 2</th>
		</thead>		
	</table><br><br>

	<label>
		Course No. <i>____<u><?php echo $result['sub9']; ?></i></u>____
	</label>
	<label>
		Course/Year/Section: <i>____<u><?php echo $result['course']; ?>____</i>
		<i><?php echo $result['section']; ?></u>____</i>
	</label>
	<label>
		Semester: <i>____<u><?php echo $result['sem']; ?></u>____</i>
	</label>
	<label>
		AY: <i>____<u><?php echo $result['AY']; ?></u>____</i>
	</label><br><br>
	<label>
		Descriptive Title: <i style="text-transform: uppercase;">____<u><?php echo $result['des9']; ?></u>____</i>
	</label>
	<label>
		Units: <i>____<u><?php echo $result['units9']; ?></u>____</i>
	</label><br><br>


	<table border="1" cellspacing="0">
		<thead>
			<th style="width:5%; padding:20px;">No.</th>
			<th style="width:50%; padding:20px;">Name</th>
			<th style="width:30%; padding:20px;">Student ID #</th>
			<th style="width:15%; padding:20px;">Final Rating</th>
		</thead>
		<tbody>
		<tr>
		<?php
        $i = 1;
        $rows = mysqli_query($link, "SELECT * FROM secondyearis ORDER BY name ASC");
      	?>
	    <?php
	        foreach($rows as $row) :
	    ?>
			<td style="text-align: center; padding:5px;"><?php echo $i++; ?></td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['name']; ?></u>____</i>
			</td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['studentid']; ?></u>____</i>
			</td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['grade9']; ?></u>____</i>
			</td>
		</tr>
		<?php endforeach; ?>
		</tbody>
	</table><br>

	<table border="1" cellspacing="0">
		<tr>
			<td style="width:20%;">
				Grading System:<br>
				97-100% 
				<p style="text-align: center; margin-top:-17px;">- 1.0</p>
				94-96% 
				<p style="text-align: center; margin-top:-17px;">- 1.25</p>
				91-93% 
				<p style="text-align: center; margin-top:-17px;">- 1.50</p>
				88-90% 
				<p style="text-align: center; margin-top:-17px;">- 1.75</p>
				85-87% 
				<p style="text-align: center; margin-top:-17px;">- 2.0</p>
				82-84% 
				<p style="text-align: center; margin-top:-17px;">- 2.25</p>
				79-81% 
				<p style="text-align: center; margin-top:-17px;">- 2.50</p>
				76-78% 
				<p style="text-align: center; margin-top:-17px;">- 2.75</p>
				75% 
				<p style="text-align: center; margin-top:-17px;">- 3.0</p>
				72-74% 
				<p style="text-align: center; margin-top:-17px;">- 4.0</p>
				71% 
				<p style="text-align: center; margin-top:-17px;">- 5.0</p>
				INC 
				<p style="text-align: center; margin-top:-17px;">- Incomplete</p>
				D 
				<p style="text-align: center; margin-top:-17px;">- Dropped</p>
				OD 
				<p style="text-align: center; margin-top:-17px;">- Officially Dropped</p>
				IP 
				<p style="text-align: center; margin-top:-17px;">- InProgress</p>
			</td>





			<td style="width:40%; cursor:default;">
				No. of Student Passed: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade9` LIKE '1.0' OR `grade9` LIKE '1.00' OR `grade9` LIKE '1.25' OR `grade9` LIKE '1.50' OR `grade9` LIKE '1.75' OR `grade9` LIKE '2.0' OR `grade9` LIKE '2.00'OR `grade9` LIKE '2.25'  OR `grade9` LIKE '2.50'  OR `grade9` LIKE '2.75'  OR `grade9` LIKE '3.0' OR `grade9` LIKE '3.00'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student failed: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade9` LIKE '4.0' OR `grade9` LIKE '4.00' OR `grade9` LIKE '5.0' OR `grade9` LIKE '5.00'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student with INC: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade9`='INC'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student with IP: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade9`='IP'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student Dropped: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade9`='DROPPED'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				Total No. of Students:
				<?php
      				  $query = "SELECT * FROM `secondyearis`";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?>
				<br><br>
				The Final rating shall be based on the criteria <br>weighted accordingly as follows:<br><br>
				1st Term/Midterm 
				<p style="text-align: center; margin-top:-17px;">50%</p>
				2nd Term/Finals 
				<p style="text-align: center; margin-top:-17px;">50%</p>
				<p style="text-align: center; margin-top:-17px;">______</p><br>
				<p style="text-align: center; margin-top:-17px;">100%</p><br><br>
				NB Prepared in Triplicate
				<p style="text-align: right; margin-top:-17px;">1 Copy</p><br>
				College Dean
				<p style="text-align: right; margin-top:-17px;">2 Copies of Department of Admission</p>
			</td>



			<td style="width:30%; text-align:center; cursor:default;">
				Prepared and Certified Correct:<br><br><br><br>
				__________________________________________________________________<br>
				Name and Signature of Instructor/Professor<br><br><br><br>
				__________________________________________________________________<br>
				Reviewed and Noted by<br><br><br><br>
				__________________________________________________________________<br>
				Program Head/College Dean<br><br><br>
			</td>
		</tr>
	</table>
	<br><br><br>













	<div class="header">
	<table border="1" cellspacing="0">
		<thead>
			<th style="width:20%;"><img src="images/logo.png"></th>
			<th style="width:50%;">ILOCOS SUR POLYTECHNIC STATE COLLEGE <br><br> Reports of Grades<br> <p style="font-weight: 100;">(Undergraduate)</p></th>
			<th style="width:20%;"> <p style="font-weight: 100; text-align:left;">Document No.<br> Revision No.<br> Effectivity Date:<br>Page No.</p></th>
			<th style="width:20%;"> <p style="font-weight: 100; text-align:left;">ISPSC-AA-F027a<br> 1<br> Oct. 18, 2019<br></p>1 of 2</th>
		</thead>		
	</table><br><br>

	<label>
		Course No. <i>____<u><?php echo $result['sub10']; ?></i></u>____
	</label>
	<label>
		Course/Year/Section: <i>____<u><?php echo $result['course']; ?>____</i>
		<i><?php echo $result['section']; ?></u>____</i>
	</label>
	<label>
		Semester: <i>____<u><?php echo $result['sem']; ?></u>____</i>
	</label>
	<label>
		AY: <i>____<u><?php echo $result['AY']; ?></u>____</i>
	</label><br><br>
	<label>
		Descriptive Title: <i style="text-transform: uppercase;">____<u><?php echo $result['des10']; ?></u>____</i>
	</label>
	<label>
		Units: <i>____<u><?php echo $result['units10']; ?></u>____</i>
	</label><br><br>


	<table border="1" cellspacing="0">
		<thead>
			<th style="width:5%; padding:20px;">No.</th>
			<th style="width:50%; padding:20px;">Name</th>
			<th style="width:30%; padding:20px;">Student ID #</th>
			<th style="width:15%; padding:20px;">Final Rating</th>
		</thead>
		<tbody>
		<tr>
		<?php
        $i = 1;
        $rows = mysqli_query($link, "SELECT * FROM secondyearis ORDER BY name ASC");
      	?>
	    <?php
	        foreach($rows as $row) :
	    ?>
			<td style="text-align: center; padding:5px;"><?php echo $i++; ?></td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['name']; ?></u>____</i>
			</td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['studentid']; ?></u>____</i>
			</td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['grade10']; ?></u>____</i>
			</td>
		</tr>
		<?php endforeach; ?>
		</tbody>
	</table><br>

	<table border="1" cellspacing="0">
		<tr>
			<td style="width:20%;">
				Grading System:<br>
				97-100% 
				<p style="text-align: center; margin-top:-17px;">- 1.0</p>
				94-96% 
				<p style="text-align: center; margin-top:-17px;">- 1.25</p>
				91-93% 
				<p style="text-align: center; margin-top:-17px;">- 1.50</p>
				88-90% 
				<p style="text-align: center; margin-top:-17px;">- 1.75</p>
				85-87% 
				<p style="text-align: center; margin-top:-17px;">- 2.0</p>
				82-84% 
				<p style="text-align: center; margin-top:-17px;">- 2.25</p>
				79-81% 
				<p style="text-align: center; margin-top:-17px;">- 2.50</p>
				76-78% 
				<p style="text-align: center; margin-top:-17px;">- 2.75</p>
				75% 
				<p style="text-align: center; margin-top:-17px;">- 3.0</p>
				72-74% 
				<p style="text-align: center; margin-top:-17px;">- 4.0</p>
				71% 
				<p style="text-align: center; margin-top:-17px;">- 5.0</p>
				INC 
				<p style="text-align: center; margin-top:-17px;">- Incomplete</p>
				D 
				<p style="text-align: center; margin-top:-17px;">- Dropped</p>
				OD 
				<p style="text-align: center; margin-top:-17px;">- Officially Dropped</p>
				IP 
				<p style="text-align: center; margin-top:-17px;">- InProgress</p>
			</td>





			<td style="width:40%; cursor:default;">
				No. of Student Passed: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade10` LIKE '1.0' OR `grade10` LIKE '1.00' OR `grade10` LIKE '1.25' OR `grade10` LIKE '1.50' OR `grade10` LIKE '1.75' OR `grade10` LIKE '2.0' OR `grade10` LIKE '2.00'OR `grade10` LIKE '2.25'  OR `grade10` LIKE '2.50'  OR `grade10` LIKE '2.75'  OR `grade10` LIKE '3.0' OR `grade10` LIKE '3.00'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student failed: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade10` LIKE '4.0' OR `grade10` LIKE '4.00' OR `grade10` LIKE '5.0' OR `grade10` LIKE '5.00'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student with INC: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade10`='INC'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student with IP: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade10`='IP'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student Dropped: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade10`='DROPPED'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				Total No. of Students:
				<?php
      				  $query = "SELECT * FROM `secondyearis`";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?>
				<br><br>
				The Final rating shall be based on the criteria <br>weighted accordingly as follows:<br><br>
				1st Term/Midterm 
				<p style="text-align: center; margin-top:-17px;">50%</p>
				2nd Term/Finals 
				<p style="text-align: center; margin-top:-17px;">50%</p>
				<p style="text-align: center; margin-top:-17px;">______</p><br>
				<p style="text-align: center; margin-top:-17px;">100%</p><br><br>
				NB Prepared in Triplicate
				<p style="text-align: right; margin-top:-17px;">1 Copy</p><br>
				College Dean
				<p style="text-align: right; margin-top:-17px;">2 Copies of Department of Admission</p>
			</td>



			<td style="width:30%; text-align:center; cursor:default;">
				Prepared and Certified Correct:<br><br><br><br>
				__________________________________________________________________<br>
				Name and Signature of Instructor/Professor<br><br><br><br>
				__________________________________________________________________<br>
				Reviewed and Noted by<br><br><br><br>
				__________________________________________________________________<br>
				Program Head/College Dean<br><br><br>
			</td>
		</tr>
	</table>
	<br><br>














 <h1 style="text-align: center;width:30%;background:green;padding:10px;color:white;text-shadow:1px 1px 2px black;border-top-right-radius:20px;border-bottom-right-radius:20px;">Second Sem</h1><br><br>




 <div class="header">
	<table border="1" cellspacing="0">
		<thead>
			<th style="width:20%;"><img src="images/logo.png"></th>
			<th style="width:50%;">ILOCOS SUR POLYTECHNIC STATE COLLEGE <br><br> Reports of Grades<br> <p style="font-weight: 100;">(Undergraduate)</p></th>
			<th style="width:20%;"> <p style="font-weight: 100; text-align:left;">Document No.<br> Revision No.<br> Effectivity Date:<br>Page No.</p></th>
			<th style="width:20%;"> <p style="font-weight: 100; text-align:left;">ISPSC-AA-F027a<br> 1<br> Oct. 18, 2019<br></p>1 of 2</th>
		</thead>		
	</table><br><br>

	<label>
		Course No. <i>____<u><?php echo $result['sub11']; ?></i></u>____
	</label>
	<label>
		Course/Year/Section: <i>____<u><?php echo $result['course']; ?>____</i>
		<i><?php echo $result['section2']; ?></u>____</i>
	</label>
	<label>
		Semester: <i>____<u><?php echo $result['sem2']; ?></u>____</i>
	</label>
	<label>
		AY: <i>____<u><?php echo $result['AY2']; ?></u>____</i>
	</label><br><br>
	<label>
		Descriptive Title: <i style="text-transform: uppercase;">____<u><?php echo $result['des11']; ?></u>____</i>
	</label>
	<label>
		Units: <i>____<u><?php echo $result['units11']; ?></u>____</i>
	</label><br><br>


	<table border="1" cellspacing="0">
		<thead>
			<th style="width:5%; padding:20px;">No.</th>
			<th style="width:50%; padding:20px;">Name</th>
			<th style="width:30%; padding:20px;">Student ID #</th>
			<th style="width:15%; padding:20px;">Final Rating</th>
		</thead>
		<tbody>
		<tr>
		<?php
        $i = 1;
        $rows = mysqli_query($link, "SELECT * FROM secondyearis ORDER BY name ASC");
      	?>
	    <?php
	        foreach($rows as $row) :
	    ?>
			<td style="text-align: center; padding:5px;"><?php echo $i++; ?></td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['name']; ?></u>____</i>
			</td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['studentid']; ?></u>____</i>
			</td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['grade11']; ?></u>____</i>
			</td>
		</tr>
		<?php endforeach; ?>
		</tbody>
	</table><br>

	<table border="1" cellspacing="0">
		<tr>
			<td style="width:20%;">
				Grading System:<br>
				97-100% 
				<p style="text-align: center; margin-top:-17px;">- 1.0</p>
				94-96% 
				<p style="text-align: center; margin-top:-17px;">- 1.25</p>
				91-93% 
				<p style="text-align: center; margin-top:-17px;">- 1.50</p>
				88-90% 
				<p style="text-align: center; margin-top:-17px;">- 1.75</p>
				85-87% 
				<p style="text-align: center; margin-top:-17px;">- 2.0</p>
				82-84% 
				<p style="text-align: center; margin-top:-17px;">- 2.25</p>
				79-81% 
				<p style="text-align: center; margin-top:-17px;">- 2.50</p>
				76-78% 
				<p style="text-align: center; margin-top:-17px;">- 2.75</p>
				75% 
				<p style="text-align: center; margin-top:-17px;">- 3.0</p>
				72-74% 
				<p style="text-align: center; margin-top:-17px;">- 4.0</p>
				71% 
				<p style="text-align: center; margin-top:-17px;">- 5.0</p>
				INC 
				<p style="text-align: center; margin-top:-17px;">- Incomplete</p>
				D 
				<p style="text-align: center; margin-top:-17px;">- Dropped</p>
				OD 
				<p style="text-align: center; margin-top:-17px;">- Officially Dropped</p>
				IP 
				<p style="text-align: center; margin-top:-17px;">- InProgress</p>
			</td>





			<td style="width:40%; cursor:default;">
				No. of Student Passed: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade11` LIKE '1.0' OR `grade11` LIKE '1.00' OR `grade11` LIKE '1.25' OR `grade11` LIKE '1.50' OR `grade11` LIKE '1.75' OR `grade11` LIKE '2.0' OR `grade11` LIKE '2.00'OR `grade11` LIKE '2.25'  OR `grade11` LIKE '2.50'  OR `grade11` LIKE '2.75'  OR `grade11` LIKE '3.0' OR `grade11` LIKE '3.00'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student failed: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade11` LIKE '4.0' OR `grade11` LIKE '4.00' OR `grade11` LIKE '5.0' OR `grade11` LIKE '5.00'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student with INC: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade11`='INC'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student with IP: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade11`='IP'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student Dropped: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade11`='DROPPED'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				Total No. of Students:
				<?php
      				  $query = "SELECT * FROM `secondyearis`";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?>
				<br><br>
				The Final rating shall be based on the criteria <br>weighted accordingly as follows:<br><br>
				1st Term/Midterm 
				<p style="text-align: center; margin-top:-17px;">50%</p>
				2nd Term/Finals 
				<p style="text-align: center; margin-top:-17px;">50%</p>
				<p style="text-align: center; margin-top:-17px;">______</p><br>
				<p style="text-align: center; margin-top:-17px;">100%</p><br><br>
				NB Prepared in Triplicate
				<p style="text-align: right; margin-top:-17px;">1 Copy</p><br>
				College Dean
				<p style="text-align: right; margin-top:-17px;">2 Copies of Department of Admission</p>
			</td>



			<td style="width:30%; text-align:center; cursor:default;">
				Prepared and Certified Correct:<br><br><br><br>
				__________________________________________________________________<br>
				Name and Signature of Instructor/Professor<br><br><br><br>
				__________________________________________________________________<br>
				Reviewed and Noted by<br><br><br><br>
				__________________________________________________________________<br>
				Program Head/College Dean<br><br><br>
			</td>
		</tr>
	</table>
	<br><br>


















	<div class="header">
	<table border="1" cellspacing="0">
		<thead>
			<th style="width:20%;"><img src="images/logo.png"></th>
			<th style="width:50%;">ILOCOS SUR POLYTECHNIC STATE COLLEGE <br><br> Reports of Grades<br> <p style="font-weight: 100;">(Undergraduate)</p></th>
			<th style="width:20%;"> <p style="font-weight: 100; text-align:left;">Document No.<br> Revision No.<br> Effectivity Date:<br>Page No.</p></th>
			<th style="width:20%;"> <p style="font-weight: 100; text-align:left;">ISPSC-AA-F027a<br> 1<br> Oct. 18, 2019<br></p>1 of 2</th>
		</thead>		
	</table><br><br>

	<label>
		Course No. <i>____<u><?php echo $result['sub12']; ?></i></u>____
	</label>
	<label>
		Course/Year/Section: <i>____<u><?php echo $result['course']; ?>____</i>
		<i><?php echo $result['section2']; ?></u>____</i>
	</label>
	<label>
		Semester: <i>____<u><?php echo $result['sem2']; ?></u>____</i>
	</label>
	<label>
		AY: <i>____<u><?php echo $result['AY2']; ?></u>____</i>
	</label><br><br>
	<label>
		Descriptive Title: <i style="text-transform: uppercase;">____<u><?php echo $result['des12']; ?></u>____</i>
	</label>
	<label>
		Units: <i>____<u><?php echo $result['units12']; ?></u>____</i>
	</label><br><br>


	<table border="1" cellspacing="0">
		<thead>
			<th style="width:5%; padding:20px;">No.</th>
			<th style="width:50%; padding:20px;">Name</th>
			<th style="width:30%; padding:20px;">Student ID #</th>
			<th style="width:15%; padding:20px;">Final Rating</th>
		</thead>
		<tbody>
		<tr>
		<?php
        $i = 1;
        $rows = mysqli_query($link, "SELECT * FROM secondyearis ORDER BY name ASC");
      	?>
	    <?php
	        foreach($rows as $row) :
	    ?>
			<td style="text-align: center; padding:5px;"><?php echo $i++; ?></td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['name']; ?></u>____</i>
			</td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['studentid']; ?></u>____</i>
			</td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['grade12']; ?></u>____</i>
			</td>
		</tr>
		<?php endforeach; ?>
		</tbody>
	</table><br>

	<table border="1" cellspacing="0">
		<tr>
			<td style="width:20%;">
				Grading System:<br>
				97-100% 
				<p style="text-align: center; margin-top:-17px;">- 1.0</p>
				94-96% 
				<p style="text-align: center; margin-top:-17px;">- 1.25</p>
				91-93% 
				<p style="text-align: center; margin-top:-17px;">- 1.50</p>
				88-90% 
				<p style="text-align: center; margin-top:-17px;">- 1.75</p>
				85-87% 
				<p style="text-align: center; margin-top:-17px;">- 2.0</p>
				82-84% 
				<p style="text-align: center; margin-top:-17px;">- 2.25</p>
				79-81% 
				<p style="text-align: center; margin-top:-17px;">- 2.50</p>
				76-78% 
				<p style="text-align: center; margin-top:-17px;">- 2.75</p>
				75% 
				<p style="text-align: center; margin-top:-17px;">- 3.0</p>
				72-74% 
				<p style="text-align: center; margin-top:-17px;">- 4.0</p>
				71% 
				<p style="text-align: center; margin-top:-17px;">- 5.0</p>
				INC 
				<p style="text-align: center; margin-top:-17px;">- Incomplete</p>
				D 
				<p style="text-align: center; margin-top:-17px;">- Dropped</p>
				OD 
				<p style="text-align: center; margin-top:-17px;">- Officially Dropped</p>
				IP 
				<p style="text-align: center; margin-top:-17px;">- InProgress</p>
			</td>





			<td style="width:40%; cursor:default;">
				No. of Student Passed: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade12` LIKE '1.0' OR `grade12` LIKE '1.00' OR `grade12` LIKE '1.25' OR `grade12` LIKE '1.50' OR `grade12` LIKE '1.75' OR `grade12` LIKE '2.0' OR `grade12` LIKE '2.00'OR `grade12` LIKE '2.25'  OR `grade12` LIKE '2.50'  OR `grade12` LIKE '2.75'  OR `grade12` LIKE '3.0' OR `grade12` LIKE '3.00'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student failed: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade12` LIKE '4.0' OR `grade12` LIKE '4.00' OR `grade12` LIKE '5.0' OR `grade12` LIKE '5.00'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student with INC: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade12`='INC'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student with IP: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade12`='IP'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student Dropped: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade12`='DROPPED'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				Total No. of Students:
				<?php
      				  $query = "SELECT * FROM `secondyearis`";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?>
				<br><br>
				The Final rating shall be based on the criteria <br>weighted accordingly as follows:<br><br>
				1st Term/Midterm 
				<p style="text-align: center; margin-top:-17px;">50%</p>
				2nd Term/Finals 
				<p style="text-align: center; margin-top:-17px;">50%</p>
				<p style="text-align: center; margin-top:-17px;">______</p><br>
				<p style="text-align: center; margin-top:-17px;">100%</p><br><br>
				NB Prepared in Triplicate
				<p style="text-align: right; margin-top:-17px;">1 Copy</p><br>
				College Dean
				<p style="text-align: right; margin-top:-17px;">2 Copies of Department of Admission</p>
			</td>



			<td style="width:30%; text-align:center; cursor:default;">
				Prepared and Certified Correct:<br><br><br><br>
				__________________________________________________________________<br>
				Name and Signature of Instructor/Professor<br><br><br><br>
				__________________________________________________________________<br>
				Reviewed and Noted by<br><br><br><br>
				__________________________________________________________________<br>
				Program Head/College Dean<br><br><br>
			</td>
		</tr>
	</table>
	<br><br>













	<div class="header">
	<table border="1" cellspacing="0">
		<thead>
			<th style="width:20%;"><img src="images/logo.png"></th>
			<th style="width:50%;">ILOCOS SUR POLYTECHNIC STATE COLLEGE <br><br> Reports of Grades<br> <p style="font-weight: 100;">(Undergraduate)</p></th>
			<th style="width:20%;"> <p style="font-weight: 100; text-align:left;">Document No.<br> Revision No.<br> Effectivity Date:<br>Page No.</p></th>
			<th style="width:20%;"> <p style="font-weight: 100; text-align:left;">ISPSC-AA-F027a<br> 1<br> Oct. 18, 2019<br></p>1 of 2</th>
		</thead>		
	</table><br><br>

	<label>
		Course No. <i style="text-transform: uppercase;">____<u><?php echo $result['sub13']; ?></i></u>____
	</label>
	<label>
		Course/Year/Section: <i>____<u><?php echo $result['course']; ?>____</i>
		<i><?php echo $result['section2']; ?></u>____</i>
	</label>
	<label>
		Semester: <i>____<u><?php echo $result['sem2']; ?></u>____</i>
	</label>
	<label>
		AY: <i>____<u><?php echo $result['AY2']; ?></u>____</i>
	</label><br><br>
	<label>
		Descriptive Title: <i style="text-transform: uppercase;">____<u><?php echo $result['des13']; ?></u>____</i>
	</label>
	<label>
		Units: <i>____<u><?php echo $result['units13']; ?></u>____</i>
	</label><br><br>


	<table border="1" cellspacing="0">
		<thead>
			<th style="width:5%; padding:20px;">No.</th>
			<th style="width:50%; padding:20px;">Name</th>
			<th style="width:30%; padding:20px;">Student ID #</th>
			<th style="width:15%; padding:20px;">Final Rating</th>
		</thead>
		<tbody>
		<tr>
		<?php
        $i = 1;
        $rows = mysqli_query($link, "SELECT * FROM secondyearis ORDER BY name ASC");
      	?>
	    <?php
	        foreach($rows as $row) :
	    ?>
			<td style="text-align: center; padding:5px;"><?php echo $i++; ?></td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['name']; ?></u>____</i>
			</td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['studentid']; ?></u>____</i>
			</td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['grade13']; ?></u>____</i>
			</td>
		</tr>
		<?php endforeach; ?>
		</tbody>
	</table><br>

	<table border="1" cellspacing="0">
		<tr>
			<td style="width:20%;">
				Grading System:<br>
				97-100% 
				<p style="text-align: center; margin-top:-17px;">- 1.0</p>
				94-96% 
				<p style="text-align: center; margin-top:-17px;">- 1.25</p>
				91-93% 
				<p style="text-align: center; margin-top:-17px;">- 1.50</p>
				88-90% 
				<p style="text-align: center; margin-top:-17px;">- 1.75</p>
				85-87% 
				<p style="text-align: center; margin-top:-17px;">- 2.0</p>
				82-84% 
				<p style="text-align: center; margin-top:-17px;">- 2.25</p>
				79-81% 
				<p style="text-align: center; margin-top:-17px;">- 2.50</p>
				76-78% 
				<p style="text-align: center; margin-top:-17px;">- 2.75</p>
				75% 
				<p style="text-align: center; margin-top:-17px;">- 3.0</p>
				72-74% 
				<p style="text-align: center; margin-top:-17px;">- 4.0</p>
				71% 
				<p style="text-align: center; margin-top:-17px;">- 5.0</p>
				INC 
				<p style="text-align: center; margin-top:-17px;">- Incomplete</p>
				D 
				<p style="text-align: center; margin-top:-17px;">- Dropped</p>
				OD 
				<p style="text-align: center; margin-top:-17px;">- Officially Dropped</p>
				IP 
				<p style="text-align: center; margin-top:-17px;">- InProgress</p>
			</td>





			<td style="width:40%; cursor:default;">
				No. of Student Passed: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade13` LIKE '1.0' OR `grade13` LIKE '1.00' OR `grade13` LIKE '1.25' OR `grade13` LIKE '1.50' OR `grade13` LIKE '1.75' OR `grade13` LIKE '2.0' OR `grade13` LIKE '2.00'OR `grade13` LIKE '2.25'  OR `grade13` LIKE '2.50'  OR `grade13` LIKE '2.75'  OR `grade13` LIKE '3.0' OR `grade13` LIKE '3.00'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student failed: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade13` LIKE '4.0' OR `grade13` LIKE '4.00' OR `grade13` LIKE '5.0' OR `grade13` LIKE '5.00'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student with INC: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade13`='INC'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student with IP: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade13`='IP'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student Dropped: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade13`='DROPPED'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				Total No. of Students:
				<?php
      				  $query = "SELECT * FROM `secondyearis`";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?>
				<br><br>
				The Final rating shall be based on the criteria <br>weighted accordingly as follows:<br><br>
				1st Term/Midterm 
				<p style="text-align: center; margin-top:-17px;">50%</p>
				2nd Term/Finals 
				<p style="text-align: center; margin-top:-17px;">50%</p>
				<p style="text-align: center; margin-top:-17px;">______</p><br>
				<p style="text-align: center; margin-top:-17px;">100%</p><br><br>
				NB Prepared in Triplicate
				<p style="text-align: right; margin-top:-17px;">1 Copy</p><br>
				College Dean
				<p style="text-align: right; margin-top:-17px;">2 Copies of Department of Admission</p>
			</td>



			<td style="width:30%; text-align:center; cursor:default;">
				Prepared and Certified Correct:<br><br><br><br>
				__________________________________________________________________<br>
				Name and Signature of Instructor/Professor<br><br><br><br>
				__________________________________________________________________<br>
				Reviewed and Noted by<br><br><br><br>
				__________________________________________________________________<br>
				Program Head/College Dean<br><br><br>
			</td>
		</tr>
	</table>
	<br><br>













	<div class="header">
	<table border="1" cellspacing="0">
		<thead>
			<th style="width:20%;"><img src="images/logo.png"></th>
			<th style="width:50%;">ILOCOS SUR POLYTECHNIC STATE COLLEGE <br><br> Reports of Grades<br> <p style="font-weight: 100;">(Undergraduate)</p></th>
			<th style="width:20%;"> <p style="font-weight: 100; text-align:left;">Document No.<br> Revision No.<br> Effectivity Date:<br>Page No.</p></th>
			<th style="width:20%;"> <p style="font-weight: 100; text-align:left;">ISPSC-AA-F027a<br> 1<br> Oct. 18, 2019<br></p>1 of 2</th>
		</thead>		
	</table><br><br>

	<label>
		Course No. <i style="text-transform: uppercase;">____<u><?php echo $result['sub14']; ?></i></u>____
	</label>
	<label>
		Course/Year/Section: <i>____<u><?php echo $result['course']; ?>____</i>
		<i><?php echo $result['section2']; ?></u>____</i>
	</label>
	<label>
		Semester: <i>____<u><?php echo $result['sem2']; ?></u>____</i>
	</label>
	<label>
		AY: <i>____<u><?php echo $result['AY2']; ?></u>____</i>
	</label><br><br>
	<label>
		Descriptive Title: <i style="text-transform: uppercase;">____<u><?php echo $result['des14']; ?></u>____</i>
	</label>
	<label>
		Units: <i>____<u><?php echo $result['units14']; ?></u>____</i>
	</label><br><br>


	<table border="1" cellspacing="0">
		<thead>
			<th style="width:5%; padding:20px;">No.</th>
			<th style="width:50%; padding:20px;">Name</th>
			<th style="width:30%; padding:20px;">Student ID #</th>
			<th style="width:15%; padding:20px;">Final Rating</th>
		</thead>
		<tbody>
		<tr>
		<?php
        $i = 1;
        $rows = mysqli_query($link, "SELECT * FROM secondyearis ORDER BY name ASC");
      	?>
	    <?php
	        foreach($rows as $row) :
	    ?>
			<td style="text-align: center; padding:5px;"><?php echo $i++; ?></td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['name']; ?></u>____</i>
			</td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['studentid']; ?></u>____</i>
			</td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['grade14']; ?></u>____</i>
			</td>
		</tr>
		<?php endforeach; ?>
		</tbody>
	</table><br>

	<table border="1" cellspacing="0">
		<tr>
			<td style="width:20%;">
				Grading System:<br>
				97-100% 
				<p style="text-align: center; margin-top:-17px;">- 1.0</p>
				94-96% 
				<p style="text-align: center; margin-top:-17px;">- 1.25</p>
				91-93% 
				<p style="text-align: center; margin-top:-17px;">- 1.50</p>
				88-90% 
				<p style="text-align: center; margin-top:-17px;">- 1.75</p>
				85-87% 
				<p style="text-align: center; margin-top:-17px;">- 2.0</p>
				82-84% 
				<p style="text-align: center; margin-top:-17px;">- 2.25</p>
				79-81% 
				<p style="text-align: center; margin-top:-17px;">- 2.50</p>
				76-78% 
				<p style="text-align: center; margin-top:-17px;">- 2.75</p>
				75% 
				<p style="text-align: center; margin-top:-17px;">- 3.0</p>
				72-74% 
				<p style="text-align: center; margin-top:-17px;">- 4.0</p>
				71% 
				<p style="text-align: center; margin-top:-17px;">- 5.0</p>
				INC 
				<p style="text-align: center; margin-top:-17px;">- Incomplete</p>
				D 
				<p style="text-align: center; margin-top:-17px;">- Dropped</p>
				OD 
				<p style="text-align: center; margin-top:-17px;">- Officially Dropped</p>
				IP 
				<p style="text-align: center; margin-top:-17px;">- InProgress</p>
			</td>





			<td style="width:40%; cursor:default;">
				No. of Student Passed: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade14` LIKE '1.0' OR `grade14` LIKE '1.00' OR `grade14` LIKE '1.25' OR `grade14` LIKE '1.50' OR `grade14` LIKE '1.75' OR `grade14` LIKE '2.0' OR `grade14` LIKE '2.00'OR `grade14` LIKE '2.25'  OR `grade14` LIKE '2.50'  OR `grade14` LIKE '2.75'  OR `grade14` LIKE '3.0' OR `grade14` LIKE '3.00'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student failed: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade14` LIKE '4.0' OR `grade14` LIKE '4.00' OR `grade14` LIKE '5.0' OR `grade14` LIKE '5.00'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student with INC: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade14`='INC'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student with IP: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade14`='IP'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student Dropped: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade14`='DROPPED'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				Total No. of Students:
				<?php
      				  $query = "SELECT * FROM `secondyearis`";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?>
				<br><br>
				The Final rating shall be based on the criteria <br>weighted accordingly as follows:<br><br>
				1st Term/Midterm 
				<p style="text-align: center; margin-top:-17px;">50%</p>
				2nd Term/Finals 
				<p style="text-align: center; margin-top:-17px;">50%</p>
				<p style="text-align: center; margin-top:-17px;">______</p><br>
				<p style="text-align: center; margin-top:-17px;">100%</p><br><br>
				NB Prepared in Triplicate
				<p style="text-align: right; margin-top:-17px;">1 Copy</p><br>
				College Dean
				<p style="text-align: right; margin-top:-17px;">2 Copies of Department of Admission</p>
			</td>



			<td style="width:30%; text-align:center; cursor:default;">
				Prepared and Certified Correct:<br><br><br><br>
				__________________________________________________________________<br>
				Name and Signature of Instructor/Professor<br><br><br><br>
				__________________________________________________________________<br>
				Reviewed and Noted by<br><br><br><br>
				__________________________________________________________________<br>
				Program Head/College Dean<br><br><br>
			</td>
		</tr>
	</table>
	<br><br>








	<div class="header">
	<table border="1" cellspacing="0">
		<thead>
			<th style="width:20%;"><img src="images/logo.png"></th>
			<th style="width:50%;">ILOCOS SUR POLYTECHNIC STATE COLLEGE <br><br> Reports of Grades<br> <p style="font-weight: 100;">(Undergraduate)</p></th>
			<th style="width:20%;"> <p style="font-weight: 100; text-align:left;">Document No.<br> Revision No.<br> Effectivity Date:<br>Page No.</p></th>
			<th style="width:20%;"> <p style="font-weight: 100; text-align:left;">ISPSC-AA-F027a<br> 1<br> Oct. 18, 2019<br></p>1 of 2</th>
		</thead>		
	</table><br><br>

	<label>
		Course No. <i style="text-transform: uppercase;">____<u><?php echo $result['sub15']; ?></i></u>____
	</label>
	<label>
		Course/Year/Section: <i>____<u><?php echo $result['course']; ?>____</i>
		<i><?php echo $result['section2']; ?></u>____</i>
	</label>
	<label>
		Semester: <i>____<u><?php echo $result['sem2']; ?></u>____</i>
	</label>
	<label>
		AY: <i>____<u><?php echo $result['AY2']; ?></u>____</i>
	</label><br><br>
	<label>
		Descriptive Title: <i style="text-transform: uppercase;">____<u><?php echo $result['des15']; ?></u>____</i>
	</label>
	<label>
		Units: <i>____<u><?php echo $result['units15']; ?></u>____</i>
	</label><br><br>


	<table border="1" cellspacing="0">
		<thead>
			<th style="width:5%; padding:20px;">No.</th>
			<th style="width:50%; padding:20px;">Name</th>
			<th style="width:30%; padding:20px;">Student ID #</th>
			<th style="width:15%; padding:20px;">Final Rating</th>
		</thead>
		<tbody>
		<tr>
		<?php
        $i = 1;
        $rows = mysqli_query($link, "SELECT * FROM secondyearis ORDER BY name ASC");
      	?>
	    <?php
	        foreach($rows as $row) :
	    ?>
			<td style="text-align: center; padding:5px;"><?php echo $i++; ?></td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['name']; ?></u>____</i>
			</td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['studentid']; ?></u>____</i>
			</td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['grade15']; ?></u>____</i>
			</td>
		</tr>
		<?php endforeach; ?>
		</tbody>
	</table><br>

	<table border="1" cellspacing="0">
		<tr>
			<td style="width:20%;">
				Grading System:<br>
				97-100% 
				<p style="text-align: center; margin-top:-17px;">- 1.0</p>
				94-96% 
				<p style="text-align: center; margin-top:-17px;">- 1.25</p>
				91-93% 
				<p style="text-align: center; margin-top:-17px;">- 1.50</p>
				88-90% 
				<p style="text-align: center; margin-top:-17px;">- 1.75</p>
				85-87% 
				<p style="text-align: center; margin-top:-17px;">- 2.0</p>
				82-84% 
				<p style="text-align: center; margin-top:-17px;">- 2.25</p>
				79-81% 
				<p style="text-align: center; margin-top:-17px;">- 2.50</p>
				76-78% 
				<p style="text-align: center; margin-top:-17px;">- 2.75</p>
				75% 
				<p style="text-align: center; margin-top:-17px;">- 3.0</p>
				72-74% 
				<p style="text-align: center; margin-top:-17px;">- 4.0</p>
				71% 
				<p style="text-align: center; margin-top:-17px;">- 5.0</p>
				INC 
				<p style="text-align: center; margin-top:-17px;">- Incomplete</p>
				D 
				<p style="text-align: center; margin-top:-17px;">- Dropped</p>
				OD 
				<p style="text-align: center; margin-top:-17px;">- Officially Dropped</p>
				IP 
				<p style="text-align: center; margin-top:-17px;">- InProgress</p>
			</td>





			<td style="width:40%; cursor:default;">
				No. of Student Passed: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade15` LIKE '1.0' OR `grade15` LIKE '1.00' OR `grade15` LIKE '1.25' OR `grade15` LIKE '1.50' OR `grade15` LIKE '1.75' OR `grade15` LIKE '2.0' OR `grade15` LIKE '2.00'OR `grade15` LIKE '2.25'  OR `grade15` LIKE '2.50'  OR `grade15` LIKE '2.75'  OR `grade15` LIKE '3.0' OR `grade15` LIKE '3.00'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student failed: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade15` LIKE '4.0' OR `grade15` LIKE '4.00' OR `grade15` LIKE '5.0' OR `grade15` LIKE '5.00'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student with INC: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade15`='INC'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student with IP: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade15`='IP'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student Dropped: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade15`='DROPPED'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				Total No. of Students:
				<?php
      				  $query = "SELECT * FROM `secondyearis`";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?>
				<br><br>
				The Final rating shall be based on the criteria <br>weighted accordingly as follows:<br><br>
				1st Term/Midterm 
				<p style="text-align: center; margin-top:-17px;">50%</p>
				2nd Term/Finals 
				<p style="text-align: center; margin-top:-17px;">50%</p>
				<p style="text-align: center; margin-top:-17px;">______</p><br>
				<p style="text-align: center; margin-top:-17px;">100%</p><br><br>
				NB Prepared in Triplicate
				<p style="text-align: right; margin-top:-17px;">1 Copy</p><br>
				College Dean
				<p style="text-align: right; margin-top:-17px;">2 Copies of Department of Admission</p>
			</td>



			<td style="width:30%; text-align:center; cursor:default;">
				Prepared and Certified Correct:<br><br><br><br>
				__________________________________________________________________<br>
				Name and Signature of Instructor/Professor<br><br><br><br>
				__________________________________________________________________<br>
				Reviewed and Noted by<br><br><br><br>
				__________________________________________________________________<br>
				Program Head/College Dean<br><br><br>
			</td>
		</tr>
	</table>
	<br><br>


















	<div class="header">
	<table border="1" cellspacing="0">
		<thead>
			<th style="width:20%;"><img src="images/logo.png"></th>
			<th style="width:50%;">ILOCOS SUR POLYTECHNIC STATE COLLEGE <br><br> Reports of Grades<br> <p style="font-weight: 100;">(Undergraduate)</p></th>
			<th style="width:20%;"> <p style="font-weight: 100; text-align:left;">Document No.<br> Revision No.<br> Effectivity Date:<br>Page No.</p></th>
			<th style="width:20%;"> <p style="font-weight: 100; text-align:left;">ISPSC-AA-F027a<br> 1<br> Oct. 18, 2019<br></p>1 of 2</th>
		</thead>		
	</table><br><br>

	<label>
		Course No. <i style="text-transform: uppercase;">____<u><?php echo $result['sub16']; ?></i></u>____
	</label>
	<label>
		Course/Year/Section: <i>____<u><?php echo $result['course']; ?>____</i>
		<i><?php echo $result['section2']; ?></u>____</i>
	</label>
	<label>
		Semester: <i>____<u><?php echo $result['sem2']; ?></u>____</i>
	</label>
	<label>
		AY: <i>____<u><?php echo $result['AY2']; ?></u>____</i>
	</label><br><br>
	<label>
		Descriptive Title: <i style="text-transform: uppercase;">____<u><?php echo $result['des16']; ?></u>____</i>
	</label>
	<label>
		Units: <i>____<u><?php echo $result['units16']; ?></u>____</i>
	</label><br><br>


	<table border="1" cellspacing="0">
		<thead>
			<th style="width:5%; padding:20px;">No.</th>
			<th style="width:50%; padding:20px;">Name</th>
			<th style="width:30%; padding:20px;">Student ID #</th>
			<th style="width:15%; padding:20px;">Final Rating</th>
		</thead>
		<tbody>
		<tr>
		<?php
        $i = 1;
        $rows = mysqli_query($link, "SELECT * FROM secondyearis ORDER BY name ASC");
      	?>
	    <?php
	        foreach($rows as $row) :
	    ?>
			<td style="text-align: center; padding:5px;"><?php echo $i++; ?></td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['name']; ?></u>____</i>
			</td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['studentid']; ?></u>____</i>
			</td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['grade16']; ?></u>____</i>
			</td>
		</tr>
		<?php endforeach; ?>
		</tbody>
	</table><br>

	<table border="1" cellspacing="0">
		<tr>
			<td style="width:20%;">
				Grading System:<br>
				97-100% 
				<p style="text-align: center; margin-top:-17px;">- 1.0</p>
				94-96% 
				<p style="text-align: center; margin-top:-17px;">- 1.25</p>
				91-93% 
				<p style="text-align: center; margin-top:-17px;">- 1.50</p>
				88-90% 
				<p style="text-align: center; margin-top:-17px;">- 1.75</p>
				85-87% 
				<p style="text-align: center; margin-top:-17px;">- 2.0</p>
				82-84% 
				<p style="text-align: center; margin-top:-17px;">- 2.25</p>
				79-81% 
				<p style="text-align: center; margin-top:-17px;">- 2.50</p>
				76-78% 
				<p style="text-align: center; margin-top:-17px;">- 2.75</p>
				75% 
				<p style="text-align: center; margin-top:-17px;">- 3.0</p>
				72-74% 
				<p style="text-align: center; margin-top:-17px;">- 4.0</p>
				71% 
				<p style="text-align: center; margin-top:-17px;">- 5.0</p>
				INC 
				<p style="text-align: center; margin-top:-17px;">- Incomplete</p>
				D 
				<p style="text-align: center; margin-top:-17px;">- Dropped</p>
				OD 
				<p style="text-align: center; margin-top:-17px;">- Officially Dropped</p>
				IP 
				<p style="text-align: center; margin-top:-17px;">- InProgress</p>
			</td>





			<td style="width:40%; cursor:default;">
				No. of Student Passed: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade16` LIKE '1.0' OR `grade16` LIKE '1.00' OR `grade16` LIKE '1.25' OR `grade16` LIKE '1.50' OR `grade16` LIKE '1.75' OR `grade16` LIKE '2.0' OR `grade16` LIKE '2.00'OR `grade16` LIKE '2.25'  OR `grade16` LIKE '2.50'  OR `grade16` LIKE '2.75'  OR `grade16` LIKE '3.0' OR `grade16` LIKE '3.00'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student failed: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade16` LIKE '4.0' OR `grade16` LIKE '4.00' OR `grade16` LIKE '5.0' OR `grade16` LIKE '5.00'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student with INC: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade16`='INC'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student with IP: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade16`='IP'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student Dropped: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade16`='DROPPED'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				Total No. of Students:
				<?php
      				  $query = "SELECT * FROM `secondyearis`";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?>
				<br><br>
				The Final rating shall be based on the criteria <br>weighted accordingly as follows:<br><br>
				1st Term/Midterm 
				<p style="text-align: center; margin-top:-17px;">50%</p>
				2nd Term/Finals 
				<p style="text-align: center; margin-top:-17px;">50%</p>
				<p style="text-align: center; margin-top:-17px;">______</p><br>
				<p style="text-align: center; margin-top:-17px;">100%</p><br><br>
				NB Prepared in Triplicate
				<p style="text-align: right; margin-top:-17px;">1 Copy</p><br>
				College Dean
				<p style="text-align: right; margin-top:-17px;">2 Copies of Department of Admission</p>
			</td>



			<td style="width:30%; text-align:center; cursor:default;">
				Prepared and Certified Correct:<br><br><br><br>
				__________________________________________________________________<br>
				Name and Signature of Instructor/Professor<br><br><br><br>
				__________________________________________________________________<br>
				Reviewed and Noted by<br><br><br><br>
				__________________________________________________________________<br>
				Program Head/College Dean<br><br><br>
			</td>
		</tr>
	</table>
	<br><br>


















	<div class="header">
	<table border="1" cellspacing="0">
		<thead>
			<th style="width:20%;"><img src="images/logo.png"></th>
			<th style="width:50%;">ILOCOS SUR POLYTECHNIC STATE COLLEGE <br><br> Reports of Grades<br> <p style="font-weight: 100;">(Undergraduate)</p></th>
			<th style="width:20%;"> <p style="font-weight: 100; text-align:left;">Document No.<br> Revision No.<br> Effectivity Date:<br>Page No.</p></th>
			<th style="width:20%;"> <p style="font-weight: 100; text-align:left;">ISPSC-AA-F027a<br> 1<br> Oct. 18, 2019<br></p>1 of 2</th>
		</thead>		
	</table><br><br>

	<label>
		Course No. <i style="text-transform: uppercase;">____<u><?php echo $result['sub17']; ?></i></u>____
	</label>
	<label>
		Course/Year/Section: <i>____<u><?php echo $result['course']; ?>____</i>
		<i><?php echo $result['section2']; ?></u>____</i>
	</label>
	<label>
		Semester: <i>____<u><?php echo $result['sem2']; ?></u>____</i>
	</label>
	<label>
		AY: <i>____<u><?php echo $result['AY2']; ?></u>____</i>
	</label><br><br>
	<label>
		Descriptive Title: <i style="text-transform: uppercase;">____<u><?php echo $result['des17']; ?></u>____</i>
	</label>
	<label>
		Units: <i>____<u><?php echo $result['units17']; ?></u>____</i>
	</label><br><br>


	<table border="1" cellspacing="0">
		<thead>
			<th style="width:5%; padding:20px;">No.</th>
			<th style="width:50%; padding:20px;">Name</th>
			<th style="width:30%; padding:20px;">Student ID #</th>
			<th style="width:15%; padding:20px;">Final Rating</th>
		</thead>
		<tbody>
		<tr>
		<?php
        $i = 1;
        $rows = mysqli_query($link, "SELECT * FROM secondyearis ORDER BY name ASC");
      	?>
	    <?php
	        foreach($rows as $row) :
	    ?>
			<td style="text-align: center; padding:5px;"><?php echo $i++; ?></td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['name']; ?></u>____</i>
			</td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['studentid']; ?></u>____</i>
			</td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['grade17']; ?></u>____</i>
			</td>
		</tr>
		<?php endforeach; ?>
		</tbody>
	</table><br>

	<table border="1" cellspacing="0">
		<tr>
			<td style="width:20%;">
				Grading System:<br>
				97-100% 
				<p style="text-align: center; margin-top:-17px;">- 1.0</p>
				94-96% 
				<p style="text-align: center; margin-top:-17px;">- 1.25</p>
				91-93% 
				<p style="text-align: center; margin-top:-17px;">- 1.50</p>
				88-90% 
				<p style="text-align: center; margin-top:-17px;">- 1.75</p>
				85-87% 
				<p style="text-align: center; margin-top:-17px;">- 2.0</p>
				82-84% 
				<p style="text-align: center; margin-top:-17px;">- 2.25</p>
				79-81% 
				<p style="text-align: center; margin-top:-17px;">- 2.50</p>
				76-78% 
				<p style="text-align: center; margin-top:-17px;">- 2.75</p>
				75% 
				<p style="text-align: center; margin-top:-17px;">- 3.0</p>
				72-74% 
				<p style="text-align: center; margin-top:-17px;">- 4.0</p>
				71% 
				<p style="text-align: center; margin-top:-17px;">- 5.0</p>
				INC 
				<p style="text-align: center; margin-top:-17px;">- Incomplete</p>
				D 
				<p style="text-align: center; margin-top:-17px;">- Dropped</p>
				OD 
				<p style="text-align: center; margin-top:-17px;">- Officially Dropped</p>
				IP 
				<p style="text-align: center; margin-top:-17px;">- InProgress</p>
			</td>





			<td style="width:40%; cursor:default;">
				No. of Student Passed: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade17` LIKE '1.0' OR `grade17` LIKE '1.00' OR `grade17` LIKE '1.25' OR `grade17` LIKE '1.50' OR `grade17` LIKE '1.75' OR `grade17` LIKE '2.0' OR `grade17` LIKE '2.00'OR `grade17` LIKE '2.25'  OR `grade17` LIKE '2.50'  OR `grade17` LIKE '2.75'  OR `grade17` LIKE '3.0' OR `grade17` LIKE '3.00'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student failed: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade17` LIKE '4.0' OR `grade17` LIKE '4.00' OR `grade17` LIKE '5.0' OR `grade17` LIKE '5.00'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student with INC: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade17`='INC'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student with IP: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade17`='IP'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student Dropped: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade17`='DROPPED'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				Total No. of Students:
				<?php
      				  $query = "SELECT * FROM `secondyearis`";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?>
				<br><br>
				The Final rating shall be based on the criteria <br>weighted accordingly as follows:<br><br>
				1st Term/Midterm 
				<p style="text-align: center; margin-top:-17px;">50%</p>
				2nd Term/Finals 
				<p style="text-align: center; margin-top:-17px;">50%</p>
				<p style="text-align: center; margin-top:-17px;">______</p><br>
				<p style="text-align: center; margin-top:-17px;">100%</p><br><br>
				NB Prepared in Triplicate
				<p style="text-align: right; margin-top:-17px;">1 Copy</p><br>
				College Dean
				<p style="text-align: right; margin-top:-17px;">2 Copies of Department of Admission</p>
			</td>



			<td style="width:30%; text-align:center; cursor:default;">
				Prepared and Certified Correct:<br><br><br><br>
				__________________________________________________________________<br>
				Name and Signature of Instructor/Professor<br><br><br><br>
				__________________________________________________________________<br>
				Reviewed and Noted by<br><br><br><br>
				__________________________________________________________________<br>
				Program Head/College Dean<br><br><br>
			</td>
		</tr>
	</table>
	<br><br>








	<div class="header">
	<table border="1" cellspacing="0">
		<thead>
			<th style="width:20%;"><img src="images/logo.png"></th>
			<th style="width:50%;">ILOCOS SUR POLYTECHNIC STATE COLLEGE <br><br> Reports of Grades<br> <p style="font-weight: 100;">(Undergraduate)</p></th>
			<th style="width:20%;"> <p style="font-weight: 100; text-align:left;">Document No.<br> Revision No.<br> Effectivity Date:<br>Page No.</p></th>
			<th style="width:20%;"> <p style="font-weight: 100; text-align:left;">ISPSC-AA-F027a<br> 1<br> Oct. 18, 2019<br></p>1 of 2</th>
		</thead>		
	</table><br><br>

	<label>
		Course No. <i style="text-transform: uppercase;">____<u><?php echo $result['sub18']; ?></i></u>____
	</label>
	<label>
		Course/Year/Section: <i>____<u><?php echo $result['course']; ?>____</i>
		<i><?php echo $result['section2']; ?></u>____</i>
	</label>
	<label>
		Semester: <i>____<u><?php echo $result['sem2']; ?></u>____</i>
	</label>
	<label>
		AY: <i>____<u><?php echo $result['AY2']; ?></u>____</i>
	</label><br><br>
	<label>
		Descriptive Title: <i style="text-transform: uppercase;">____<u><?php echo $result['des18']; ?></u>____</i>
	</label>
	<label>
		Units: <i>____<u><?php echo $result['units18']; ?></u>____</i>
	</label><br><br>


	<table border="1" cellspacing="0">
		<thead>
			<th style="width:5%; padding:20px;">No.</th>
			<th style="width:50%; padding:20px;">Name</th>
			<th style="width:30%; padding:20px;">Student ID #</th>
			<th style="width:15%; padding:20px;">Final Rating</th>
		</thead>
		<tbody>
		<tr>
		<?php
        $i = 1;
        $rows = mysqli_query($link, "SELECT * FROM secondyearis ORDER BY name ASC");
      	?>
	    <?php
	        foreach($rows as $row) :
	    ?>
			<td style="text-align: center; padding:5px;"><?php echo $i++; ?></td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['name']; ?></u>____</i>
			</td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['studentid']; ?></u>____</i>
			</td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['grade18']; ?></u>____</i>
			</td>
		</tr>
		<?php endforeach; ?>
		</tbody>
	</table><br>

	<table border="1" cellspacing="0">
		<tr>
			<td style="width:20%;">
				Grading System:<br>
				97-100% 
				<p style="text-align: center; margin-top:-17px;">- 1.0</p>
				94-96% 
				<p style="text-align: center; margin-top:-17px;">- 1.25</p>
				91-93% 
				<p style="text-align: center; margin-top:-17px;">- 1.50</p>
				88-90% 
				<p style="text-align: center; margin-top:-17px;">- 1.75</p>
				85-87% 
				<p style="text-align: center; margin-top:-17px;">- 2.0</p>
				82-84% 
				<p style="text-align: center; margin-top:-17px;">- 2.25</p>
				79-81% 
				<p style="text-align: center; margin-top:-17px;">- 2.50</p>
				76-78% 
				<p style="text-align: center; margin-top:-17px;">- 2.75</p>
				75% 
				<p style="text-align: center; margin-top:-17px;">- 3.0</p>
				72-74% 
				<p style="text-align: center; margin-top:-17px;">- 4.0</p>
				71% 
				<p style="text-align: center; margin-top:-17px;">- 5.0</p>
				INC 
				<p style="text-align: center; margin-top:-17px;">- Incomplete</p>
				D 
				<p style="text-align: center; margin-top:-17px;">- Dropped</p>
				OD 
				<p style="text-align: center; margin-top:-17px;">- Officially Dropped</p>
				IP 
				<p style="text-align: center; margin-top:-17px;">- InProgress</p>
			</td>





			<td style="width:40%; cursor:default;">
				No. of Student Passed: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade18` LIKE '1.0' OR `grade18` LIKE '1.00' OR `grade18` LIKE '1.25' OR `grade18` LIKE '1.50' OR `grade18` LIKE '1.75' OR `grade18` LIKE '2.0' OR `grade18` LIKE '2.00'OR `grade18` LIKE '2.25'  OR `grade18` LIKE '2.50'  OR `grade18` LIKE '2.75'  OR `grade18` LIKE '3.0' OR `grade18` LIKE '3.00'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student failed: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade18` LIKE '4.0' OR `grade18` LIKE '4.00' OR `grade18` LIKE '5.0' OR `grade18` LIKE '5.00'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student with INC: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade18`='INC'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student with IP: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade18`='IP'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student Dropped: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade18`='DROPPED'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				Total No. of Students:
				<?php
      				  $query = "SELECT * FROM `secondyearis`";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?>
				<br><br>
				The Final rating shall be based on the criteria <br>weighted accordingly as follows:<br><br>
				1st Term/Midterm 
				<p style="text-align: center; margin-top:-17px;">50%</p>
				2nd Term/Finals 
				<p style="text-align: center; margin-top:-17px;">50%</p>
				<p style="text-align: center; margin-top:-17px;">______</p><br>
				<p style="text-align: center; margin-top:-17px;">100%</p><br><br>
				NB Prepared in Triplicate
				<p style="text-align: right; margin-top:-17px;">1 Copy</p><br>
				College Dean
				<p style="text-align: right; margin-top:-17px;">2 Copies of Department of Admission</p>
			</td>



			<td style="width:30%; text-align:center; cursor:default;">
				Prepared and Certified Correct:<br><br><br><br>
				__________________________________________________________________<br>
				Name and Signature of Instructor/Professor<br><br><br><br>
				__________________________________________________________________<br>
				Reviewed and Noted by<br><br><br><br>
				__________________________________________________________________<br>
				Program Head/College Dean<br><br><br>
			</td>
		</tr>
	</table>
	<br><br>


















	<div class="header">
	<table border="1" cellspacing="0">
		<thead>
			<th style="width:20%;"><img src="images/logo.png"></th>
			<th style="width:50%;">ILOCOS SUR POLYTECHNIC STATE COLLEGE <br><br> Reports of Grades<br> <p style="font-weight: 100;">(Undergraduate)</p></th>
			<th style="width:20%;"> <p style="font-weight: 100; text-align:left;">Document No.<br> Revision No.<br> Effectivity Date:<br>Page No.</p></th>
			<th style="width:20%;"> <p style="font-weight: 100; text-align:left;">ISPSC-AA-F027a<br> 1<br> Oct. 18, 2019<br></p>1 of 2</th>
		</thead>		
	</table><br><br>

	<label>
		Course No. <i style="text-transform: uppercase;">____<u><?php echo $result['sub19']; ?></i></u>____
	</label>
	<label>
		Course/Year/Section: <i>____<u><?php echo $result['course']; ?>____</i>
		<i><?php echo $result['section2']; ?></u>____</i>
	</label>
	<label>
		Semester: <i>____<u><?php echo $result['sem2']; ?></u>____</i>
	</label>
	<label>
		AY: <i>____<u><?php echo $result['AY2']; ?></u>____</i>
	</label><br><br>
	<label>
		Descriptive Title: <i style="text-transform: uppercase;">____<u><?php echo $result['des19']; ?></u>____</i>
	</label>
	<label>
		Units: <i>____<u><?php echo $result['units19']; ?></u>____</i>
	</label><br><br>


	<table border="1" cellspacing="0">
		<thead>
			<th style="width:5%; padding:20px;">No.</th>
			<th style="width:50%; padding:20px;">Name</th>
			<th style="width:30%; padding:20px;">Student ID #</th>
			<th style="width:15%; padding:20px;">Final Rating</th>
		</thead>
		<tbody>
		<tr>
		<?php
        $i = 1;
        $rows = mysqli_query($link, "SELECT * FROM secondyearis ORDER BY name ASC");
      	?>
	    <?php
	        foreach($rows as $row) :
	    ?>
			<td style="text-align: center; padding:5px;"><?php echo $i++; ?></td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['name']; ?></u>____</i>
			</td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['studentid']; ?></u>____</i>
			</td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['grade19']; ?></u>____</i>
			</td>
		</tr>
		<?php endforeach; ?>
		</tbody>
	</table><br>

	<table border="1" cellspacing="0">
		<tr>
			<td style="width:20%;">
				Grading System:<br>
				97-100% 
				<p style="text-align: center; margin-top:-17px;">- 1.0</p>
				94-96% 
				<p style="text-align: center; margin-top:-17px;">- 1.25</p>
				91-93% 
				<p style="text-align: center; margin-top:-17px;">- 1.50</p>
				88-90% 
				<p style="text-align: center; margin-top:-17px;">- 1.75</p>
				85-87% 
				<p style="text-align: center; margin-top:-17px;">- 2.0</p>
				82-84% 
				<p style="text-align: center; margin-top:-17px;">- 2.25</p>
				79-81% 
				<p style="text-align: center; margin-top:-17px;">- 2.50</p>
				76-78% 
				<p style="text-align: center; margin-top:-17px;">- 2.75</p>
				75% 
				<p style="text-align: center; margin-top:-17px;">- 3.0</p>
				72-74% 
				<p style="text-align: center; margin-top:-17px;">- 4.0</p>
				71% 
				<p style="text-align: center; margin-top:-17px;">- 5.0</p>
				INC 
				<p style="text-align: center; margin-top:-17px;">- Incomplete</p>
				D 
				<p style="text-align: center; margin-top:-17px;">- Dropped</p>
				OD 
				<p style="text-align: center; margin-top:-17px;">- Officially Dropped</p>
				IP 
				<p style="text-align: center; margin-top:-17px;">- InProgress</p>
			</td>





			<td style="width:40%; cursor:default;">
				No. of Student Passed: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade19` LIKE '1.0' OR `grade19` LIKE '1.00' OR `grade19` LIKE '1.25' OR `grade19` LIKE '1.50' OR `grade19` LIKE '1.75' OR `grade19` LIKE '2.0' OR `grade19` LIKE '2.00'OR `grade19` LIKE '2.25'  OR `grade19` LIKE '2.50'  OR `grade19` LIKE '2.75'  OR `grade19` LIKE '3.0' OR `grade19` LIKE '3.00'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student failed: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade19` LIKE '4.0' OR `grade19` LIKE '4.00' OR `grade19` LIKE '5.0' OR `grade19` LIKE '5.00'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student with INC: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade19`='INC'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student with IP: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade19`='IP'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student Dropped: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade19`='DROPPED'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				Total No. of Students:
				<?php
      				  $query = "SELECT * FROM `secondyearis`";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?>
				<br><br>
				The Final rating shall be based on the criteria <br>weighted accordingly as follows:<br><br>
				1st Term/Midterm 
				<p style="text-align: center; margin-top:-17px;">50%</p>
				2nd Term/Finals 
				<p style="text-align: center; margin-top:-17px;">50%</p>
				<p style="text-align: center; margin-top:-17px;">______</p><br>
				<p style="text-align: center; margin-top:-17px;">100%</p><br><br>
				NB Prepared in Triplicate
				<p style="text-align: right; margin-top:-17px;">1 Copy</p><br>
				College Dean
				<p style="text-align: right; margin-top:-17px;">2 Copies of Department of Admission</p>
			</td>



			<td style="width:30%; text-align:center; cursor:default;">
				Prepared and Certified Correct:<br><br><br><br>
				__________________________________________________________________<br>
				Name and Signature of Instructor/Professor<br><br><br><br>
				__________________________________________________________________<br>
				Reviewed and Noted by<br><br><br><br>
				__________________________________________________________________<br>
				Program Head/College Dean<br><br><br>
			</td>
		</tr>
	</table>
	<br><br>


















	<div class="header">
	<table border="1" cellspacing="0">
		<thead>
			<th style="width:20%;"><img src="images/logo.png"></th>
			<th style="width:50%;">ILOCOS SUR POLYTECHNIC STATE COLLEGE <br><br> Reports of Grades<br> <p style="font-weight: 100;">(Undergraduate)</p></th>
			<th style="width:20%;"> <p style="font-weight: 100; text-align:left;">Document No.<br> Revision No.<br> Effectivity Date:<br>Page No.</p></th>
			<th style="width:20%;"> <p style="font-weight: 100; text-align:left;">ISPSC-AA-F027a<br> 1<br> Oct. 18, 2019<br></p>1 of 2</th>
		</thead>		
	</table><br><br>

	<label>
		Course No. <i style="text-transform: uppercase;">____<u><?php echo $result['sub20']; ?></i></u>____
	</label>
	<label>
		Course/Year/Section: <i>____<u><?php echo $result['course']; ?>____</i>
		<i><?php echo $result['section2']; ?></u>____</i>
	</label>
	<label>
		Semester: <i>____<u><?php echo $result['sem2']; ?></u>____</i>
	</label>
	<label>
		AY: <i>____<u><?php echo $result['AY2']; ?></u>____</i>
	</label><br><br>
	<label>
		Descriptive Title: <i style="text-transform: uppercase;">____<u><?php echo $result['des20']; ?></u>____</i>
	</label>
	<label>
		Units: <i>____<u><?php echo $result['units20']; ?></u>____</i>
	</label><br><br>


	<table border="1" cellspacing="0">
		<thead>
			<th style="width:5%; padding:20px;">No.</th>
			<th style="width:50%; padding:20px;">Name</th>
			<th style="width:30%; padding:20px;">Student ID #</th>
			<th style="width:15%; padding:20px;">Final Rating</th>
		</thead>
		<tbody>
		<tr>
		<?php
        $i = 1;
        $rows = mysqli_query($link, "SELECT * FROM secondyearis ORDER BY name ASC");
      	?>
	    <?php
	        foreach($rows as $row) :
	    ?>
			<td style="text-align: center; padding:5px;"><?php echo $i++; ?></td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['name']; ?></u>____</i>
			</td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['studentid']; ?></u>____</i>
			</td>
			<td style="text-align: center; padding:5px;">
				<i style="text-transform: uppercase; font-family: Arial Black;">____<u><?php echo $row['grade20']; ?></u>____</i>
			</td>
		</tr>
		<?php endforeach; ?>
		</tbody>
	</table><br>

	<table border="1" cellspacing="0">
		<tr>
			<td style="width:20%;">
				Grading System:<br>
				97-100% 
				<p style="text-align: center; margin-top:-17px;">- 1.0</p>
				94-96% 
				<p style="text-align: center; margin-top:-17px;">- 1.25</p>
				91-93% 
				<p style="text-align: center; margin-top:-17px;">- 1.50</p>
				88-90% 
				<p style="text-align: center; margin-top:-17px;">- 1.75</p>
				85-87% 
				<p style="text-align: center; margin-top:-17px;">- 2.0</p>
				82-84% 
				<p style="text-align: center; margin-top:-17px;">- 2.25</p>
				79-81% 
				<p style="text-align: center; margin-top:-17px;">- 2.50</p>
				76-78% 
				<p style="text-align: center; margin-top:-17px;">- 2.75</p>
				75% 
				<p style="text-align: center; margin-top:-17px;">- 3.0</p>
				72-74% 
				<p style="text-align: center; margin-top:-17px;">- 4.0</p>
				71% 
				<p style="text-align: center; margin-top:-17px;">- 5.0</p>
				INC 
				<p style="text-align: center; margin-top:-17px;">- Incomplete</p>
				D 
				<p style="text-align: center; margin-top:-17px;">- Dropped</p>
				OD 
				<p style="text-align: center; margin-top:-17px;">- Officially Dropped</p>
				IP 
				<p style="text-align: center; margin-top:-17px;">- InProgress</p>
			</td>





			<td style="width:40%; cursor:default;">
				No. of Student Passed: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade20` LIKE '1.0' OR `grade20` LIKE '1.00' OR `grade20` LIKE '1.25' OR `grade20` LIKE '1.50' OR `grade20` LIKE '1.75' OR `grade20` LIKE '2.0' OR `grade20` LIKE '2.00'OR `grade20` LIKE '2.25'  OR `grade20` LIKE '2.50'  OR `grade20` LIKE '2.75'  OR `grade20` LIKE '3.0' OR `grade20` LIKE '3.00'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student failed: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade20` LIKE '4.0' OR `grade20` LIKE '4.00' OR `grade20` LIKE '5.0' OR `grade20` LIKE '5.00'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student with INC: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade20`='INC'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student with IP: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade20`='IP'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				No. of Student Dropped: <?php
      				  $query = "SELECT * FROM `secondyearis` WHERE `grade20`='DROPPED'";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?><br>
				Total No. of Students:
				<?php
      				  $query = "SELECT * FROM `secondyearis`";
				      $results = mysqli_query($link,$query);

				      if($resident_total = mysqli_num_rows($results)){
				        echo $resident_total;
				      }else{
				        echo '0';
				      }
				?>
				<br><br>
				The Final rating shall be based on the criteria <br>weighted accordingly as follows:<br><br>
				1st Term/Midterm 
				<p style="text-align: center; margin-top:-17px;">50%</p>
				2nd Term/Finals 
				<p style="text-align: center; margin-top:-17px;">50%</p>
				<p style="text-align: center; margin-top:-17px;">______</p><br>
				<p style="text-align: center; margin-top:-17px;">100%</p><br><br>
				NB Prepared in Triplicate
				<p style="text-align: right; margin-top:-17px;">1 Copy</p><br>
				College Dean
				<p style="text-align: right; margin-top:-17px;">2 Copies of Department of Admission</p>
			</td>



			<td style="width:30%; text-align:center; cursor:default;">
				Prepared and Certified Correct:<br><br><br><br>
				__________________________________________________________________<br>
				Name and Signature of Instructor/Professor<br><br><br><br>
				__________________________________________________________________<br>
				Reviewed and Noted by<br><br><br><br>
				__________________________________________________________________<br>
				Program Head/College Dean<br><br><br>
			</td>
		</tr>
	</table>
	<br><br><br><br>



	<center>
                <a href="admingradereports.php" id="back"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-left-circle-fill back" viewBox="0 0 16 16">
                <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                </svg></a><br><br>



                <button onclick="window.print()" style="padding:10px 70px 10px 70px;border-radius: 10px;border:none;outline:none;background: green;cursor:pointer;"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16">
                <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z"/>
                <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                </svg></button>
        </center>

<br><br><br><br><br><br>
</div>












<script>
	function message(){
		document.getElementById("bg").style.display='block';
		document.getElementById("form").style.display='block';
	}
	function closeform(){
		document.getElementById("bg").style.display='none';
		document.getElementById("form").style.display='none';
	}
</script>

<?php } ?>
</body>
</html>