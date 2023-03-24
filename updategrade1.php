<?php
include('conn.php');
session_start();
$name=$_GET['name'];
?>

<html>
<head>
	<title>Create ROG</title>
<style>
	*{
		margin: 0;
		padding: 0;
	}
	body{
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
      	text-transform: capitalize;
	}
	.header input:focus{
		padding: 5px 0 5px 0;
		transition: 0.3s;
	}
	.header label{
		font-family: Arial Black;
		padding: 0 10px 0 0;
	}
</style>
</head>
<body>

	<p style="color:white;background:black;width:100%;text-align: center;font-family: Arial Black;padding:30px 0 30px 0;font-size: 30px; text-shadow: 3px 3px 0 skyblue;"><marquee>FIRST YEAR</marquee></p>
	<br><br><br>
<br><br>


	<?php
    $query = "SELECT * FROM `firstyear` WHERE `name`= '$name'";
    $results = mysqli_query($link,$query);
    $result= mysqli_fetch_array($results);
    ?>

	<h1 style="text-align: center;width:30%;background:green;padding:10px;color:white;text-shadow:1px 1px 2px black;border-top-right-radius:20px;border-bottom-right-radius:20px;">First Sem</h1>

<br><br><br><br>
	<div class="header">
	<form action="updategrade1copy.php" method="POST">

	<input type="hidden" value="<?php $result['name']; ?>" name="name">
	<table border="1" cellspacing="0">
		<thead>
			<th style="width:20%;"><img src="images/logo.png"></th>
			<th style="width:50%;">ILOCOS SUR POLYTECHNIC STATE COLLEGE <br><br> Reports of Grades<br> <p style="font-weight: 100;">(Undergraduate)</p></th>
			<th style="width:20%;"> <p style="font-weight: 100; text-align:left;">Document No.<br> Revision No.<br> Effectivity Date:<br>Page No.</p></th>
			<th style="width:20%;"> <p style="font-weight: 100; text-align:left;">ISPSC-AA-F027a<br> 1<br> Oct. 18, 2019<br></p>1 of 2</th>
		</thead>		
	</table><br><br>

	<label>
		Course No. <input value="<?php echo $result['sub']; ?>" name="sub"
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Course/Year/Section: <input value="<?php echo $result['course']; ?>" name="course"
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">/
		<input value="<?php echo $result['section']; ?>" name="section" id="section"
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Semester: <input value="<?php echo $result['sem']; ?>" name="sem" id="sem"
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		AY: <input value="<?php echo $result['AY']; ?>" name="AY" id="AY"
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>
	<label>
		Descriptive Title: <input value="<?php echo $result['des']; ?>" name="des"
		style="width: 40%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Units: <input value="<?php echo $result['units']; ?>" name="units"
		style="width: 5%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;
		margin-right:2%">
	</label>
	<label>
		School: <input value="<?php echo $result['school']; ?>" name="school"
		style="width: 15%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>


	<table border="1" cellspacing="0">
		<thead>
			<th style="width:5%; padding:20px;">No.</th>
			<th style="width:50%; padding:20px;">Name</th>
			<th style="width:30%; padding:20px;">Student ID #</th>
			<th style="width:15%; padding:20px;">Final Rating</th>
		</thead>
		<tbody>
			<td style="text-align: center; padding:5px;"></td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['name']; ?>" name="name" id="name"
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['studentid']; ?>" name="studentid" id="studentid"
				style="width: 30%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['grade']; ?>" name="grade"
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
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
				No. of Student Passed: ____<br>
				No. of Student failed: ____<br>
				No. of Student with INC: ____<br>
				No. of Student with IP: ____<br>
				No. of Student Dropped: ____<br>
				Total No. of Students: ____<br><br>
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
	</div>



















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
		Course No. <input value="<?php echo $result['sub2'] ?>" name="sub2" 
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Course/Year/Section: <input value="<?php echo $result['course'] ?>" id="course2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">/
		<input value="<?php echo $result['section'] ?>" id="section2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Semester: <input value="<?php echo $result['sem'] ?>" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		AY: <input value="<?php echo $result['AY'] ?>" id="AY2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>
	<label>
		Descriptive Title: <input value="<?php echo $result['des2'] ?>" name="des2" 
		style="width: 40%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Units: <input value="<?php echo $result['units2'] ?>" name="units2"
		style="width: 5%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;
		margin-right:2%">
	</label>
	<label>
		School: <input value="<?php echo $result['school2'] ?>" name="school2"
		style="width: 15%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>


	<table border="1" cellspacing="0">
		<thead>
			<th style="width:5%; padding:20px;">No.</th>
			<th style="width:50%; padding:20px;">Name</th>
			<th style="width:30%; padding:20px;">Student ID #</th>
			<th style="width:15%; padding:20px;">Final Rating</th>
		</thead>
		<tbody>
			<td style="text-align: center; padding:5px;"></td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['name'] ?>"disabled
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['studentid'] ?>"disabled
				style="width: 30%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['grade2'] ?>" name="grade2"
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
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





			<td style="width:40%;cursor:default;">
				No. of Student Passed: ____<br>
				No. of Student failed: ____<br>
				No. of Student with INC: ____<br>
				No. of Student with IP: ____<br>
				No. of Student Dropped: ____<br>
				Total No. of Students: ____<br><br>
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
	</div>






















































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
		Course No. <input value="<?php echo $result['sub3'] ?>" name="sub3" 
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Course/Year/Section: <input value="<?php echo $result['course'] ?>" name="course" id="course2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">/
		<input value="<?php echo $result['section'] ?>" name="section" id="section2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Semester: <input value="<?php echo $result['sem'] ?>" name="sem" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		AY: <input value="<?php echo $result['AY'] ?>" name="AY" id="AY2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>
	<label>
		Descriptive Title: <input value="<?php echo $result['des3'] ?>" name="des3" 
		style="width: 40%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Units: <input value="<?php echo $result['units3'] ?>" name="units3"
		style="width: 5%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;
		margin-right:2%">
	</label>
	<label>
		School: <input value="<?php echo $result['school3'] ?>" name="school3"
		style="width: 15%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>


	<table border="1" cellspacing="0">
		<thead>
			<th style="width:5%; padding:20px;">No.</th>
			<th style="width:50%; padding:20px;">Name</th>
			<th style="width:30%; padding:20px;">Student ID #</th>
			<th style="width:15%; padding:20px;">Final Rating</th>
		</thead>
		<tbody>
			<td style="text-align: center; padding:5px;"></td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['name'] ?>" name="name" disabled
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['studentid'] ?>" name="studentid" disabled
				style="width: 30%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['grade3'] ?>" name="grade3"
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
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





			<td style="width:40%;cursor:default;">
				No. of Student Passed: ____<br>
				No. of Student failed: ____<br>
				No. of Student with INC: ____<br>
				No. of Student with IP: ____<br>
				No. of Student Dropped: ____<br>
				Total No. of Students: ____<br><br>
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
	</div>

























	





































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
		Course No. <input value="<?php echo $result['sub4'] ?>" name="sub4" 
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Course/Year/Section: <input value="<?php echo $result['course'] ?>" name="course" id="course2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">/
		<input value="<?php echo $result['section'] ?>" name="section" id="section2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Semester: <input value="<?php echo $result['sem'] ?>" name="sem" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		AY: <input value="<?php echo $result['AY'] ?>" name="AY" id="AY2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>
	<label>
		Descriptive Title: <input value="<?php echo $result['des4'] ?>" name="des4" 
		style="width: 40%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Units: <input value="<?php echo $result['units4'] ?>" name="units4"
		style="width: 5%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;
		margin-right:2%">
	</label>
	<label>
		School: <input value="<?php echo $result['school4'] ?>" name="school4"
		style="width: 15%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>


	<table border="1" cellspacing="0">
		<thead>
			<th style="width:5%; padding:20px;">No.</th>
			<th style="width:50%; padding:20px;">Name</th>
			<th style="width:30%; padding:20px;">Student ID #</th>
			<th style="width:15%; padding:20px;">Final Rating</th>
		</thead>
		<tbody>
			<td style="text-align: center; padding:5px;"></td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['name'] ?>" name="name" disabled
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['studentid'] ?>" name="studentid" disabled
				style="width: 30%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['grade4'] ?>" name="grade4"
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
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





			<td style="width:40%;cursor:default;">
				No. of Student Passed: ____<br>
				No. of Student failed: ____<br>
				No. of Student with INC: ____<br>
				No. of Student with IP: ____<br>
				No. of Student Dropped: ____<br>
				Total No. of Students: ____<br><br>
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
	</div>





















































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
		Course No. <input value="<?php echo $result['sub5'] ?>" name="sub5" 
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Course/Year/Section: <input value="<?php echo $result['course'] ?>" name="course" id="course2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">/
		<input value="<?php echo $result['section'] ?>" name="section" id="section2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Semester: <input value="<?php echo $result['sem'] ?>" name="sem" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		AY: <input value="<?php echo $result['AY'] ?>" name="AY" id="AY2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>
	<label>
		Descriptive Title: <input value="<?php echo $result['des5'] ?>" name="des5" 
		style="width: 40%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Units: <input value="<?php echo $result['units5'] ?>" name="units5"
		style="width: 5%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;
		margin-right:2%">
	</label>
	<label>
		School: <input value="<?php echo $result['school5'] ?>" name="school5"
		style="width: 15%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>


	<table border="1" cellspacing="0">
		<thead>
			<th style="width:5%; padding:20px;">No.</th>
			<th style="width:50%; padding:20px;">Name</th>
			<th style="width:30%; padding:20px;">Student ID #</th>
			<th style="width:15%; padding:20px;">Final Rating</th>
		</thead>
		<tbody>
			<td style="text-align: center; padding:5px;"></td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['name'] ?>" name="name" disabled
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['studentid'] ?>" name="studentid" disabled
				style="width: 30%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['grade5'] ?>" name="grade5"
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
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





			<td style="width:40%;cursor:default;">
				No. of Student Passed: ____<br>
				No. of Student failed: ____<br>
				No. of Student with INC: ____<br>
				No. of Student with IP: ____<br>
				No. of Student Dropped: ____<br>
				Total No. of Students: ____<br><br>
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
	</div>

































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
		Course No. <input value="<?php echo $result['sub6'] ?>" name="sub6" 
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Course/Year/Section: <input value="<?php echo $result['course'] ?>" name="course" id="course2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">/
		<input value="<?php echo $result['section'] ?>" name="section" id="section2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Semester: <input value="<?php echo $result['sem'] ?>" name="sem" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		AY: <input value="<?php echo $result['AY'] ?>" name="AY" id="AY2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>
	<label>
		Descriptive Title: <input value="<?php echo $result['des6'] ?>" name="des6" 
		style="width: 40%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Units: <input value="<?php echo $result['units6'] ?>" name="units6"
		style="width: 5%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;
		margin-right:2%">
	</label>
	<label>
		School: <input value="<?php echo $result['school6'] ?>" name="school6"
		style="width: 15%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>


	<table border="1" cellspacing="0">
		<thead>
			<th style="width:5%; padding:20px;">No.</th>
			<th style="width:50%; padding:20px;">Name</th>
			<th style="width:30%; padding:20px;">Student ID #</th>
			<th style="width:15%; padding:20px;">Final Rating</th>
		</thead>
		<tbody>
			<td style="text-align: center; padding:5px;"></td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['name'] ?>" name="name" disabled
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['studentid'] ?>" name="studentid" disabled
				style="width: 30%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['grade6'] ?>" name="grade6"
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
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





			<td style="width:40%;cursor:default;">
				No. of Student Passed: ____<br>
				No. of Student failed: ____<br>
				No. of Student with INC: ____<br>
				No. of Student with IP: ____<br>
				No. of Student Dropped: ____<br>
				Total No. of Students: ____<br><br>
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
	</div>




































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
		Course No. <input value="<?php echo $result['sub7'] ?>" name="sub7" 
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Course/Year/Section: <input value="<?php echo $result['course'] ?>" name="course" id="course2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">/
		<input value="<?php echo $result['section'] ?>" name="section" id="section2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Semester: <input value="<?php echo $result['sem'] ?>" name="sem" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		AY: <input value="<?php echo $result['AY'] ?>" name="AY" id="AY2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>
	<label>
		Descriptive Title: <input value="<?php echo $result['des7'] ?>" name="des7" 
		style="width: 40%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Units: <input value="<?php echo $result['units7'] ?>" name="units7"
		style="width: 5%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;
		margin-right:2%">
	</label>
	<label>
		School: <input value="<?php echo $result['school7'] ?>" name="school7"
		style="width: 15%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>


	<table border="1" cellspacing="0">
		<thead>
			<th style="width:5%; padding:20px;">No.</th>
			<th style="width:50%; padding:20px;">Name</th>
			<th style="width:30%; padding:20px;">Student ID #</th>
			<th style="width:15%; padding:20px;">Final Rating</th>
		</thead>
		<tbody>
			<td style="text-align: center; padding:5px;"></td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['name'] ?>" name="name" disabled
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['studentid'] ?>" name="studentid" disabled
				style="width: 30%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['grade7'] ?>" name="grade7"
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
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





			<td style="width:40%;cursor:default;">
				No. of Student Passed: ____<br>
				No. of Student failed: ____<br>
				No. of Student with INC: ____<br>
				No. of Student with IP: ____<br>
				No. of Student Dropped: ____<br>
				Total No. of Students: ____<br><br>
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
	</div>











































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
		Course No. <input value="<?php echo $result['sub8'] ?>" name="sub8" 
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Course/Year/Section: <input value="<?php echo $result['course'] ?>" name="course" id="course2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">/
		<input value="<?php echo $result['section'] ?>" name="section" id="section2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Semester: <input value="<?php echo $result['sem'] ?>" name="sem" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		AY: <input value="<?php echo $result['AY'] ?>" name="AY" id="AY2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>
	<label>
		Descriptive Title: <input value="<?php echo $result['des8'] ?>" name="des8" 
		style="width: 40%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Units: <input value="<?php echo $result['units8'] ?>" name="units8"
		style="width: 5%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;
		margin-right:2%">
	</label>
	<label>
		School: <input value="<?php echo $result['school8'] ?>" name="school8"
		style="width: 15%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>


	<table border="1" cellspacing="0">
		<thead>
			<th style="width:5%; padding:20px;">No.</th>
			<th style="width:50%; padding:20px;">Name</th>
			<th style="width:30%; padding:20px;">Student ID #</th>
			<th style="width:15%; padding:20px;">Final Rating</th>
		</thead>
		<tbody>
			<td style="text-align: center; padding:5px;"></td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['name'] ?>" name="name" disabled
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['studentid'] ?>" name="studentid" disabled
				style="width: 30%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['grade8'] ?>" name="grade8"
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
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





			<td style="width:40%;cursor:default;">
				No. of Student Passed: ____<br>
				No. of Student failed: ____<br>
				No. of Student with INC: ____<br>
				No. of Student with IP: ____<br>
				No. of Student Dropped: ____<br>
				Total No. of Students: ____<br><br>
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
	</div>

































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
		Course No. <input value="<?php echo $result['sub9'] ?>" name="sub9" 
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Course/Year/Section: <input value="<?php echo $result['course'] ?>" name="course" id="course2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">/
		<input value="<?php echo $result['section'] ?>" name="section" id="section2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Semester: <input value="<?php echo $result['sem'] ?>" name="sem" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		AY: <input value="<?php echo $result['AY'] ?>" name="AY" id="AY2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>
	<label>
		Descriptive Title: <input value="<?php echo $result['des9'] ?>" name="des9" 
		style="width: 40%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Units: <input value="<?php echo $result['units9'] ?>" name="units9"
		style="width: 5%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;
		margin-right:2%">
	</label>
	<label>
		School: <input value="<?php echo $result['school9']; ?>" name="school9"
		style="width: 15%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>


	<table border="1" cellspacing="0">
		<thead>
			<th style="width:5%; padding:20px;">No.</th>
			<th style="width:50%; padding:20px;">Name</th>
			<th style="width:30%; padding:20px;">Student ID #</th>
			<th style="width:15%; padding:20px;">Final Rating</th>
		</thead>
		<tbody>
			<td style="text-align: center; padding:5px;"></td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['name']; ?>" name="name" disabled
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['studentid'] ?>" name="studentid" disabled
				style="width: 30%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['grade9']; ?>" name="grade9"
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
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





			<td style="width:40%;cursor:default;">
				No. of Student Passed: ____<br>
				No. of Student failed: ____<br>
				No. of Student with INC: ____<br>
				No. of Student with IP: ____<br>
				No. of Student Dropped: ____<br>
				Total No. of Students: ____<br><br>
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
	</div>

































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
		Course No. <input value="<?php echo $result['sub10'] ?>" name="sub10" 
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Course/Year/Section: <input value="<?php echo $result['course'] ?>" name="course" id="course2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">/
		<input value="<?php echo $result['section'] ?>" name="section" id="section2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Semester: <input value="<?php echo $result['sem'] ?>" name="sem" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		AY: <input value="<?php echo $result['AY'] ?>" name="AY" id="AY2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>
	<label>
		Descriptive Title: <input value="<?php echo $result['des10'] ?>" name="des10" 
		style="width: 40%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Units: <input value="<?php echo $result['units10'] ?>" name="units10"
		style="width: 5%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;
		margin-right:2%">
	</label>
	<label>
		School: <input value="<?php echo $result['school10'] ?>" name="school10"
		style="width: 15%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>


	<table border="1" cellspacing="0">
		<thead>
			<th style="width:5%; padding:20px;">No.</th>
			<th style="width:50%; padding:20px;">Name</th>
			<th style="width:30%; padding:20px;">Student ID #</th>
			<th style="width:15%; padding:20px;">Final Rating</th>
		</thead>
		<tbody>
			<td style="text-align: center; padding:5px;"></td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['name'] ?>" name="name" disabled
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['studentid'] ?>" name="studentid" disabled
				style="width: 30%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['grade10'] ?>" name="grade10"
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
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





			<td style="width:40%;cursor:default;">
				No. of Student Passed: ____<br>
				No. of Student failed: ____<br>
				No. of Student with INC: ____<br>
				No. of Student with IP: ____<br>
				No. of Student Dropped: ____<br>
				Total No. of Students: ____<br><br>
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
	</div>




	















	<h1 style="text-align: center;width:30%;background:green;padding:10px;color:white;text-shadow:1px 1px 2px black;border-top-right-radius:20px;border-bottom-right-radius:20px;">Second Sem</h1><br><br><br>


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
		Course No. <input value="<?php echo $result['sub11'] ?>" name="sub11"
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Course/Year/Section: <input value="<?php echo $result['course'] ?>" name="course"
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">/
		<input value="<?php echo $result['section2'] ?>" name="section2" id="section"
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Semester: <input value="<?php echo $result['sem2'] ?>" name="sem2" id="sem"
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		AY: <input value="<?php echo $result['AY2'] ?>" name="AY2" id="AY"
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>
	<label>
		Descriptive Title: <input value="<?php echo $result['des11'] ?>" name="des11"
		style="width: 40%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Units: <input value="<?php echo $result['units11'] ?>" name="units11"
		style="width: 5%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;
		margin-right:2%">
	</label>
	<label>
		School: <input value="<?php echo $result['school11'] ?>" name="school11"
		style="width: 15%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>


	<table border="1" cellspacing="0">
		<thead>
			<th style="width:5%; padding:20px;">No.</th>
			<th style="width:50%; padding:20px;">Name</th>
			<th style="width:30%; padding:20px;">Student ID #</th>
			<th style="width:15%; padding:20px;">Final Rating</th>
		</thead>
		<tbody>
			<td style="text-align: center; padding:5px;"></td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['name'] ?>" name="name" id="name" disabled
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['studentid'] ?>" name="studentid" id="studentid" disabled
				style="width: 30%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['grade11'] ?>" name="grade11"
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
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
				No. of Student Passed: ____<br>
				No. of Student failed: ____<br>
				No. of Student with INC: ____<br>
				No. of Student with IP: ____<br>
				No. of Student Dropped: ____<br>
				Total No. of Students: ____<br><br>
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
	</div>























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
		Course No. <input value="<?php echo $result['sub12'] ?>" name="sub12" 
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Course/Year/Section: <input value="<?php echo $result['course'] ?>" name="course" id="course2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">/
		<input value="<?php echo $result['section2'] ?>" name="section2" id="section2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Semester: <input value="<?php echo $result['sem2'] ?>" name="sem2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		AY: <input value="<?php echo $result['AY2'] ?>" name="AY2" id="AY2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>
	<label>
		Descriptive Title: <input value="<?php echo $result['des12'] ?>" name="des12" 
		style="width: 40%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Units: <input value="<?php echo $result['units12'] ?>" name="units12"
		style="width: 5%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;
		margin-right:2%">
	</label>
	<label>
		School: <input value="<?php echo $result['school12'] ?>" name="school12"
		style="width: 15%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>


	<table border="1" cellspacing="0">
		<thead>
			<th style="width:5%; padding:20px;">No.</th>
			<th style="width:50%; padding:20px;">Name</th>
			<th style="width:30%; padding:20px;">Student ID #</th>
			<th style="width:15%; padding:20px;">Final Rating</th>
		</thead>
		<tbody>
			<td style="text-align: center; padding:5px;"></td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['name'] ?>" name="name" disabled
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['studentid'] ?>" name="studentid" disabled
				style="width: 30%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['grade12'] ?>" name="grade12"
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
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





			<td style="width:40%;cursor:default;">
				No. of Student Passed: ____<br>
				No. of Student failed: ____<br>
				No. of Student with INC: ____<br>
				No. of Student with IP: ____<br>
				No. of Student Dropped: ____<br>
				Total No. of Students: ____<br><br>
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
	</div>




















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
		Course No. <input value="<?php echo $result['sub13'] ?>" name="sub13" 
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Course/Year/Section: <input value="<?php echo $result['course'] ?>" name="course" id="course2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">/
		<input value="<?php echo $result['section2'] ?>" name="section2" id="section2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Semester: <input value="<?php echo $result['sem2'] ?>" name="sem2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		AY: <input value="<?php echo $result['AY2'] ?>" name="AY2" id="AY2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>
	<label>
		Descriptive Title: <input value="<?php echo $result['des13'] ?>" name="des13" 
		style="width: 40%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Units: <input value="<?php echo $result['units13'] ?>" name="units13"
		style="width: 5%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;
		margin-right:2%">
	</label>
	<label>
		School: <input value="<?php echo $result['school13'] ?>" name="school13"
		style="width: 15%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>


	<table border="1" cellspacing="0">
		<thead>
			<th style="width:5%; padding:20px;">No.</th>
			<th style="width:50%; padding:20px;">Name</th>
			<th style="width:30%; padding:20px;">Student ID #</th>
			<th style="width:15%; padding:20px;">Final Rating</th>
		</thead>
		<tbody>
			<td style="text-align: center; padding:5px;"></td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['name'] ?>" name="name" disabled
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['studentid'] ?>" name="studentid" disabled
				style="width: 30%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['grade13'] ?>" name="grade13"
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
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





			<td style="width:40%;cursor:default;">
				No. of Student Passed: ____<br>
				No. of Student failed: ____<br>
				No. of Student with INC: ____<br>
				No. of Student with IP: ____<br>
				No. of Student Dropped: ____<br>
				Total No. of Students: ____<br><br>
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
	</div>






























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
		Course No. <input value="<?php echo $result['sub14'] ?>" name="sub14" 
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Course/Year/Section: <input value="<?php echo $result['course'] ?>" name="course" id="course2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">/
		<input value="<?php echo $result['section2'] ?>" name="section2" id="section2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Semester: <input value="<?php echo $result['sem2'] ?>" name="sem2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		AY: <input value="<?php echo $result['AY2'] ?>" name="AY2" id="AY2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>
	<label>
		Descriptive Title: <input value="<?php echo $result['des14'] ?>" name="des14" 
		style="width: 40%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Units: <input value="<?php echo $result['units14'] ?>" name="units14"
		style="width: 5%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;
		margin-right:2%">
	</label>
	<label>
		School: <input value="<?php echo $result['school14'] ?>" name="school14"
		style="width: 15%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>


	<table border="1" cellspacing="0">
		<thead>
			<th style="width:5%; padding:20px;">No.</th>
			<th style="width:50%; padding:20px;">Name</th>
			<th style="width:30%; padding:20px;">Student ID #</th>
			<th style="width:15%; padding:20px;">Final Rating</th>
		</thead>
		<tbody>
			<td style="text-align: center; padding:5px;"></td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['name'] ?>" name="name" disabled
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['studentid'] ?>" name="studentid" disabled
				style="width: 30%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['grade14'] ?>" name="grade14"
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
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





			<td style="width:40%;cursor:default;">
				No. of Student Passed: ____<br>
				No. of Student failed: ____<br>
				No. of Student with INC: ____<br>
				No. of Student with IP: ____<br>
				No. of Student Dropped: ____<br>
				Total No. of Students: ____<br><br>
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
	</div>


























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
		Course No. <input value="<?php echo $result['sub15'] ?>" name="sub15" 
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Course/Year/Section: <input value="<?php echo $result['course'] ?>" name="course" id="course2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">/
		<input value="<?php echo $result['section2'] ?>" name="section2" id="section2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Semester: <input value="<?php echo $result['sem2'] ?>" name="sem2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		AY: <input value="<?php echo $result['AY2'] ?>" name="AY2" id="AY2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>
	<label>
		Descriptive Title: <input value="<?php echo $result['des15'] ?>" name="des15" 
		style="width: 40%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Units: <input value="<?php echo $result['units15'] ?>" name="units15"
		style="width: 5%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;
		margin-right:2%">
	</label>
	<label>
		School: <input value="<?php echo $result['school15'] ?>" name="school15"
		style="width: 15%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>


	<table border="1" cellspacing="0">
		<thead>
			<th style="width:5%; padding:20px;">No.</th>
			<th style="width:50%; padding:20px;">Name</th>
			<th style="width:30%; padding:20px;">Student ID #</th>
			<th style="width:15%; padding:20px;">Final Rating</th>
		</thead>
		<tbody>
			<td style="text-align: center; padding:5px;"></td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['name'] ?>" name="name" disabled
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['studentid'] ?>" name="studentid" disabled
				style="width: 30%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['grade15'] ?>" name="grade15"
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
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





			<td style="width:40%;cursor:default;">
				No. of Student Passed: ____<br>
				No. of Student failed: ____<br>
				No. of Student with INC: ____<br>
				No. of Student with IP: ____<br>
				No. of Student Dropped: ____<br>
				Total No. of Students: ____<br><br>
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
	</div>























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
		Course No. <input value="<?php echo $result['sub16'] ?>" name="sub16" 
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Course/Year/Section: <input value="<?php echo $result['course'] ?>" name="course" id="course2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">/
		<input value="<?php echo $result['section2'] ?>" name="section2" id="section2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Semester: <input value="<?php echo $result['sem2'] ?>" name="sem2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		AY: <input value="<?php echo $result['AY2'] ?>" name="AY2" id="AY2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>
	<label>
		Descriptive Title: <input value="<?php echo $result['des16'] ?>" name="des16" 
		style="width: 40%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Units: <input value="<?php echo $result['units16'] ?>" name="units16"
		style="width: 5%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;
		margin-right:2%">
	</label>
	<label>
		School: <input value="<?php echo $result['school16'] ?>" name="school16"
		style="width: 15%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>


	<table border="1" cellspacing="0">
		<thead>
			<th style="width:5%; padding:20px;">No.</th>
			<th style="width:50%; padding:20px;">Name</th>
			<th style="width:30%; padding:20px;">Student ID #</th>
			<th style="width:15%; padding:20px;">Final Rating</th>
		</thead>
		<tbody>
			<td style="text-align: center; padding:5px;"></td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['name'] ?>" name="name" disabled
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['studentid'] ?>" name="studentid" disabled
				style="width: 30%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['grade16'] ?>" name="grade16"
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
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





			<td style="width:40%;cursor:default;">
				No. of Student Passed: ____<br>
				No. of Student failed: ____<br>
				No. of Student with INC: ____<br>
				No. of Student with IP: ____<br>
				No. of Student Dropped: ____<br>
				Total No. of Students: ____<br><br>
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
	</div>

































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
		Course No. <input value="<?php echo $result['sub17'] ?>" name="sub17" 
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Course/Year/Section: <input value="<?php echo $result['course'] ?>" name="course" id="course2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">/
		<input value="<?php echo $result['section2'] ?>" name="section2" id="section2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Semester: <input value="<?php echo $result['sem2'] ?>" name="sem2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		AY: <input value="<?php echo $result['AY2'] ?>" name="AY2" id="AY2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>
	<label>
		Descriptive Title: <input value="<?php echo $result['des17'] ?>" name="des17" 
		style="width: 40%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Units: <input value="<?php echo $result['units17'] ?>" name="units17"
		style="width: 5%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;
		margin-right:2%">
	</label>
	<label>
		School: <input value="<?php echo $result['school17'] ?>" name="school17"
		style="width: 15%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>


	<table border="1" cellspacing="0">
		<thead>
			<th style="width:5%; padding:20px;">No.</th>
			<th style="width:50%; padding:20px;">Name</th>
			<th style="width:30%; padding:20px;">Student ID #</th>
			<th style="width:15%; padding:20px;">Final Rating</th>
		</thead>
		<tbody>
			<td style="text-align: center; padding:5px;"></td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['name'] ?>" name="name" disabled
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['studentid'] ?>" name="studentid" disabled
				style="width: 30%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['grade17'] ?>" name="grade17"
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
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





			<td style="width:40%;cursor:default;">
				No. of Student Passed: ____<br>
				No. of Student failed: ____<br>
				No. of Student with INC: ____<br>
				No. of Student with IP: ____<br>
				No. of Student Dropped: ____<br>
				Total No. of Students: ____<br><br>
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
	</div>





















































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
		Course No. <input value="<?php echo $result['sub18'] ?>" name="sub18" 
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Course/Year/Section: <input value="<?php echo $result['course'] ?>" name="course" id="course2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">/
		<input value="<?php echo $result['section2'] ?>" name="section2" id="section2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Semester: <input value="<?php echo $result['sem2'] ?>" name="sem2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		AY: <input value="<?php echo $result['AY2'] ?>" name="AY2" id="AY2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>
	<label>
		Descriptive Title: <input value="<?php echo $result['des18'] ?>" name="des18" 
		style="width: 40%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Units: <input value="<?php echo $result['units18'] ?>" name="units18"
		style="width: 5%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;
		margin-right:2%">
	</label>
	<label>
		School: <input value="<?php echo $result['school18'] ?>" name="school18"
		style="width: 15%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>


	<table border="1" cellspacing="0">
		<thead>
			<th style="width:5%; padding:20px;">No.</th>
			<th style="width:50%; padding:20px;">Name</th>
			<th style="width:30%; padding:20px;">Student ID #</th>
			<th style="width:15%; padding:20px;">Final Rating</th>
		</thead>
		<tbody>
			<td style="text-align: center; padding:5px;"></td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['name'] ?>" name="name" disabled
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['studentid'] ?>" name="studentid" disabled
				style="width: 30%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['grade18'] ?>" name="grade18"
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
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





			<td style="width:40%;cursor:default;">
				No. of Student Passed: ____<br>
				No. of Student failed: ____<br>
				No. of Student with INC: ____<br>
				No. of Student with IP: ____<br>
				No. of Student Dropped: ____<br>
				Total No. of Students: ____<br><br>
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
	</div>























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
		Course No. <input value="<?php echo $result['sub19'] ?>" name="sub19" 
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Course/Year/Section: <input value="<?php echo $result['course'] ?>" name="course" id="course2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">/
		<input value="<?php echo $result['section2'] ?>" name="section2" id="section2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Semester: <input value="<?php echo $result['sem2'] ?>" name="sem2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		AY: <input value="<?php echo $result['AY2'] ?>" name="AY2" id="AY2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>
	<label>
		Descriptive Title: <input value="<?php echo $result['des19'] ?>" name="des19" 
		style="width: 40%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Units: <input value="<?php echo $result['units19'] ?>" name="units19"
		style="width: 5%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;
		margin-right:2%">
	</label>
	<label>
		School: <input value="<?php echo $result['school19'] ?>" name="school19"
		style="width: 15%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>


	<table border="1" cellspacing="0">
		<thead>
			<th style="width:5%; padding:20px;">No.</th>
			<th style="width:50%; padding:20px;">Name</th>
			<th style="width:30%; padding:20px;">Student ID #</th>
			<th style="width:15%; padding:20px;">Final Rating</th>
		</thead>
		<tbody>
			<td style="text-align: center; padding:5px;"></td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['name'] ?>" name="name" disabled
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['studentid'] ?>" name="studentid" disabled
				style="width: 30%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['grade19'] ?>" name="grade19"
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
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





			<td style="width:40%;cursor:default;">
				No. of Student Passed: ____<br>
				No. of Student failed: ____<br>
				No. of Student with INC: ____<br>
				No. of Student with IP: ____<br>
				No. of Student Dropped: ____<br>
				Total No. of Students: ____<br><br>
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
	</div>


















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
		Course No. <input value="<?php echo $result['sub20'] ?>" name="sub20" 
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Course/Year/Section: <input value="<?php echo $result['course'] ?>" name="course" id="course2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">/
		<input value="<?php echo $result['section2'] ?>" name="section2" id="section2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Semester: <input value="<?php echo $result['sem2'] ?>" name="sem2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		AY: <input value="<?php echo $result['AY2'] ?>" name="AY2" id="AY2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>
	<label>
		Descriptive Title: <input value="<?php echo $result['des20'] ?>" name="des20" 
		style="width: 40%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Units: <input value="<?php echo $result['units20'] ?>" name="units20"
		style="width: 5%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;
		margin-right:2%">
	</label>
	<label>
		School: <input value="<?php echo $result['school20'] ?>" name="school20"
		style="width: 15%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>


	<table border="1" cellspacing="0">
		<thead>
			<th style="width:5%; padding:20px;">No.</th>
			<th style="width:50%; padding:20px;">Name</th>
			<th style="width:30%; padding:20px;">Student ID #</th>
			<th style="width:15%; padding:20px;">Final Rating</th>
		</thead>
		<tbody>
			<td style="text-align: center; padding:5px;"></td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['name'] ?>" name="name" disabled
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['studentid'] ?>" name="studentid" disabled
				style="width: 30%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input value="<?php echo $result['grade20'] ?>" name="grade20"
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
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





			<td style="width:40%;cursor:default;">
				No. of Student Passed: ____<br>
				No. of Student failed: ____<br>
				No. of Student with INC: ____<br>
				No. of Student with IP: ____<br>
				No. of Student Dropped: ____<br>
				Total No. of Students: ____<br><br>
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
	</div>
	<center><button type="submit" style="width:400px;padding:10px;border:none;background:green;color:white;text-shadow:1px 1px 0 black;font-size: 20px;font-family: Arial Black;box-shadow:3px 3px 10px black;cursor:pointer;">Submit</button></center><br><br><br>
	<center><a href="facultyupdaterog.php" style="font-family: Arial Black;font-size: 20px;">Back</a></center><br><br><br><br><br><br><br><br>
</div>
</form>




























</script>	
</body>
</html>