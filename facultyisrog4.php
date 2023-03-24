<?php

include('conn.php');
session_start();

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
		animation: Appear 1s;
	}
	@keyframes Appear{
		from{
			opacity: 0;
			transform: rotateX(2deg);
		}to{
			opacity: 1;
			transform: rotateX(0);
		}
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
	.links{
		width: 100%;
		font-family: impact;
		font-size: 18px;
		margin-top: -50px;
		position: absolute;
	}
	.links a{
		text-decoration: none;
		color: black;
		background: gray;
		border-radius: 10px;
		padding: 20px 40px 20px 40px;
		margin-left: 5%;
		box-shadow: 1px 1px 5px black;
		text-shadow: 1px 1px 10px skyblue;
	}
	.links #active{
		background: skyblue;
		text-shadow: 1px 1px 10px black;
	}
</style>
</head>
<body>


	<p style="color:white;background:black;width:100%;text-align: center;font-family: Arial Black;padding:30px 0 30px 0;font-size: 30px; text-shadow: 3px 3px 0 skyblue;"><marquee>FIRST YEAR</marquee></p>
	<br><br><br>
<br><br>

<div class="links">
	<a href="facultyitrog4.php">IT WEB</a>
	<a href="facultyitnetrog4.php" >IT NET</a>
	<a href="facultyisrog4.php" id="active">IS</a>
</div>


	<h1 style="text-align: center;width:30%;background:green;padding:10px;color:white;text-shadow:1px 1px 2px black;border-top-right-radius:20px;border-bottom-right-radius:20px;">First Sem</h1>

<br><br><br><br>
	<div class="header">
	<form action="facultyisrog4copy.php" method="POST">
	<table border="1" cellspacing="0">
		<thead>
			<th style="width:20%;"><img src="images/logo.png"></th>
			<th style="width:50%;">ILOCOS SUR POLYTECHNIC STATE COLLEGE <br><br> Reports of Grades<br> <p style="font-weight: 100;">(Undergraduate)</p></th>
			<th style="width:20%;"> <p style="font-weight: 100; text-align:left;">Document No.<br> Revision No.<br> Effectivity Date:<br>Page No.</p></th>
			<th style="width:20%;"> <p style="font-weight: 100; text-align:left;">ISPSC-AA-F027a<br> 1<br> Oct. 18, 2019<br></p>1 of 2</th>
		</thead>		
	</table><br><br>

	<label>
		Course No. <input type="text" name="sub"
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Course/Year/Section: <input type="text" name="course" value="BSIS" id="course"
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">/
		<input type="text" name="section" value="I - " id="section"
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Semester: <input type="text" name="sem" value="1st" id="sem"
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		AY: <input type="text" name="AY" value="20 - 20" id="AY"
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>
	<label>
		Descriptive Title: <input type="text" name="des"
		style="width: 40%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Units: <input type="text" name="units" value="3"
		style="width: 5%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;
		margin-right:2%">
	</label>
	<label>
		School: <input type="text" name="school" value="ISPSC"
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
				<input type="text" name="name" id="name"
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input type="text" name="studentid" id="studentid"
				style="width: 30%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input type="text" name="grade"
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
		Course No. <input type="text" name="sub2" 
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Course/Year/Section: <input type="text" name="course" id="course2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">/
		<input type="text" name="section" id="section2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Semester: <input type="text" name="sem" id="sem2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		AY: <input type="text" name="AY" id="AY2" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>
	<label>
		Descriptive Title: <input type="text" name="des2" 
		style="width: 40%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Units: <input type="text" name="units2" value="3"
		style="width: 5%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;
		margin-right:2%">
	</label>
	<label>
		School: <input type="text" name="school2" value="ISPSC"
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
				<input type="text" name="name" id="name2" disabled
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input type="text" name="studentid" id="studentid2" disabled
				style="width: 30%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input type="text" name="grade2"
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
		Course No. <input type="text" name="sub3" 
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Course/Year/Section: <input type="text" name="course" id="course3" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">/
		<input type="text" name="section" id="section3" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Semester: <input type="text" name="sem" id="sem3" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		AY: <input type="text" name="AY" id="AY3" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>
	<label>
		Descriptive Title: <input type="text" name="des3" 
		style="width: 40%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Units: <input type="text" name="units3" value="3"
		style="width: 5%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;
		margin-right:2%">
	</label>
	<label>
		School: <input type="text" name="school3" value="ISPSC"
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
				<input type="text" name="name" id="name3" disabled
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input type="text" name="studentid" id="studentid3" disabled
				style="width: 30%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input type="text" name="grade3"
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
		Course No. <input type="text" name="sub4" 
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Course/Year/Section: <input type="text" name="course" id="course4" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">/
		<input type="text" name="section" id="section4" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Semester: <input type="text" name="sem" id="sem4" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		AY: <input type="text" name="AY" id="AY4" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>
	<label>
		Descriptive Title: <input type="text" name="des4" 
		style="width: 40%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Units: <input type="text" name="units4" value="3"
		style="width: 5%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;
		margin-right:2%">
	</label>
	<label>
		School: <input type="text" name="school4" value="ISPSC"
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
				<input type="text" name="name" id="name4" disabled
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input type="text" name="studentid" id="studentid4" disabled
				style="width: 30%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input type="text" name="grade4"
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
		Course No. <input type="text" name="sub5" 
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Course/Year/Section: <input type="text" name="course" id="course5" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">/
		<input type="text" name="section" id="section5" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Semester: <input type="text" name="sem" id="sem5" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		AY: <input type="text" name="AY" id="AY5" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>
	<label>
		Descriptive Title: <input type="text" name="des5" 
		style="width: 40%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Units: <input type="text" name="units5" value="3"
		style="width: 5%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;
		margin-right:2%">
	</label>
	<label>
		School: <input type="text" name="school5" value="ISPSC"
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
				<input type="text" name="name" id="name5" disabled
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input type="text" name="studentid" id="studentid5" disabled
				style="width: 30%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input type="text" name="grade5"
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
		Course No. <input type="text" name="sub6" 
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Course/Year/Section: <input type="text" name="course" id="course6" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">/
		<input type="text" name="section" id="section6" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Semester: <input type="text" name="sem" id="sem6" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		AY: <input type="text" name="AY" id="AY6" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>
	<label>
		Descriptive Title: <input type="text" name="des6" 
		style="width: 40%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Units: <input type="text" name="units6" value="3"
		style="width: 5%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;
		margin-right:2%">
	</label>
	<label>
		School: <input type="text" name="school6" value="ISPSC"
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
				<input type="text" name="name" id="name6" disabled
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input type="text" name="studentid" id="studentid6" disabled
				style="width: 30%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input type="text" name="grade6"
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
		Course No. <input type="text" name="sub7" 
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Course/Year/Section: <input type="text" name="course" id="course7" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">/
		<input type="text" name="section" id="section7" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Semester: <input type="text" name="sem" id="sem7" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		AY: <input type="text" name="AY" id="AY7" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>
	<label>
		Descriptive Title: <input type="text" name="des7" 
		style="width: 40%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Units: <input type="text" name="units7" value="3"
		style="width: 5%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;
		margin-right:2%">
	</label>
	<label>
		School: <input type="text" name="school7" value="ISPSC"
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
				<input type="text" name="name" id="name7" disabled
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input type="text" name="studentid" id="studentid7" disabled
				style="width: 30%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input type="text" name="grade7"
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
		Course No. <input type="text" name="sub8" 
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Course/Year/Section: <input type="text" name="course" id="course8" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">/
		<input type="text" name="section" id="section8" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Semester: <input type="text" name="sem" id="sem8" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		AY: <input type="text" name="AY" id="AY8" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>
	<label>
		Descriptive Title: <input type="text" name="des8" 
		style="width: 40%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Units: <input type="text" name="units8" value="3"
		style="width: 5%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;
		margin-right:2%">
	</label>
	<label>
		School: <input type="text" name="school8" value="ISPSC"
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
				<input type="text" name="name" id="name8" disabled
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input type="text" name="studentid" id="studentid8" disabled
				style="width: 30%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input type="text" name="grade8"
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
		Course No. <input type="text" name="sub9" 
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Course/Year/Section: <input type="text" name="course" id="course9" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">/
		<input type="text" name="section" id="section9" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Semester: <input type="text" name="sem" id="sem9" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		AY: <input type="text" name="AY" id="AY9" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>
	<label>
		Descriptive Title: <input type="text" name="des9" 
		style="width: 40%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Units: <input type="text" name="units9" value="3"
		style="width: 5%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;
		margin-right:2%">
	</label>
	<label>
		School: <input type="text" name="school9" value="ISPSC"
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
				<input type="text" name="name" id="name9" disabled
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input type="text" name="studentid" id="studentid9" disabled
				style="width: 30%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input type="text" name="grade9"
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
		Course No. <input type="text" name="sub10" 
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Course/Year/Section: <input type="text" name="course" id="course10" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">/
		<input type="text" name="section" id="section10" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Semester: <input type="text" name="sem" id="sem10" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		AY: <input type="text" name="AY" id="AY10" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>
	<label>
		Descriptive Title: <input type="text" name="des10" 
		style="width: 40%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Units: <input type="text" name="units10" value="3"
		style="width: 5%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;
		margin-right:2%">
	</label>
	<label>
		School: <input type="text" name="school10" value="ISPSC"
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
				<input type="text" name="name" id="name10" disabled
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input type="text" name="studentid" id="studentid10" disabled
				style="width: 30%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input type="text" name="grade10"
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
	</table><br><br><br><br>
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
		Course No. <input type="text" name="sub11"
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Course/Year/Section: <input type="text" name="course" id="course" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">/
		<input type="text" name="section2" value="I - " id="section"
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Semester: <input type="text" name="sem2" value="2nd" id="sem"
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		AY: <input type="text" name="AY2" value="20 - 20" id="AY"
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>
	<label>
		Descriptive Title: <input type="text" name="des11"
		style="width: 40%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Units: <input type="text" name="units11" value="3"
		style="width: 5%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;
		margin-right:2%">
	</label>
	<label>
		School: <input type="text" name="school11" value="ISPSC"
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
				<input type="text" name="name" id="name" disabled
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input type="text" name="studentid" id="studentid" disabled
				style="width: 30%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input type="text" name="grade11"
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
		Course No. <input type="text" name="sub12"
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Course/Year/Section: <input type="text" name="course" id="course" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">/
		<input type="text" name="section2" id="section" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Semester: <input type="text" name="sem2" id="sem" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		AY: <input type="text" name="AY2" id="AY" disabled 
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>
	<label>
		Descriptive Title: <input type="text" name="des12"
		style="width: 40%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Units: <input type="text" name="units12" value="3"
		style="width: 5%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;
		margin-right:2%">
	</label>
	<label>
		School: <input type="text" name="school12" value="ISPSC"
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
				<input type="text" name="name" id="name" disabled 
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input type="text" name="studentid" id="studentid" disabled
				style="width: 30%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input type="text" name="grade12"
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
		Course No. <input type="text" name="sub13"
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Course/Year/Section: <input type="text" name="course" id="course" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">/
		<input type="text" name="section2" id="section" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Semester: <input type="text" name="sem2" id="sem" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		AY: <input type="text" name="AY2" id="AY" disabled 
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>
	<label>
		Descriptive Title: <input type="text" name="des13"
		style="width: 40%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Units: <input type="text" name="units13" value="3"
		style="width: 5%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;
		margin-right:2%">
	</label>
	<label>
		School: <input type="text" name="school13" value="ISPSC"
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
				<input type="text" name="name" id="name" disabled 
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input type="text" name="studentid" id="studentid" disabled
				style="width: 30%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input type="text" name="grade13"
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
		Course No. <input type="text" name="sub14"
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Course/Year/Section: <input type="text" name="course" id="course" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">/
		<input type="text" name="section2" id="section" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Semester: <input type="text" name="sem2" id="sem" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		AY: <input type="text" name="AY2" id="AY" disabled 
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>
	<label>
		Descriptive Title: <input type="text" name="des14"
		style="width: 40%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Units: <input type="text" name="units14" value="3"
		style="width: 5%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;
		margin-right:2%">
	</label>
	<label>
		School: <input type="text" name="school14" value="ISPSC"
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
				<input type="text" name="name" id="name" disabled 
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input type="text" name="studentid" id="studentid" disabled
				style="width: 30%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input type="text" name="grade14"
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
		Course No. <input type="text" name="sub15"
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Course/Year/Section: <input type="text" name="course" id="course" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">/
		<input type="text" name="section2" id="section" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Semester: <input type="text" name="sem2" id="sem" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		AY: <input type="text" name="AY2" id="AY" disabled 
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>
	<label>
		Descriptive Title: <input type="text" name="des15"
		style="width: 40%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Units: <input type="text" name="units15" value="3"
		style="width: 5%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;
		margin-right:2%">
	</label>
	<label>
		School: <input type="text" name="school15" value="ISPSC"
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
				<input type="text" name="name" id="name" disabled 
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input type="text" name="studentid" id="studentid" disabled
				style="width: 30%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input type="text" name="grade15"
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
		Course No. <input type="text" name="sub16"
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Course/Year/Section: <input type="text" name="course" id="course" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">/
		<input type="text" name="section2" id="section" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Semester: <input type="text" name="sem2" id="sem" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		AY: <input type="text" name="AY2" id="AY" disabled 
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>
	<label>
		Descriptive Title: <input type="text" name="des16"
		style="width: 40%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Units: <input type="text" name="units16" value="3"
		style="width: 5%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;
		margin-right:2%">
	</label>
	<label>
		School: <input type="text" name="school16" value="ISPSC"
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
				<input type="text" name="name" id="name" disabled 
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input type="text" name="studentid" id="studentid" disabled
				style="width: 30%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input type="text" name="grade16"
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
		Course No. <input type="text" name="sub17"
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Course/Year/Section: <input type="text" name="course" id="course" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">/
		<input type="text" name="section2" id="section" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Semester: <input type="text" name="sem2" id="sem" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		AY: <input type="text" name="AY2" id="AY" disabled 
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>
	<label>
		Descriptive Title: <input type="text" name="des17"
		style="width: 40%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Units: <input type="text" name="units17" value="3"
		style="width: 5%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;
		margin-right:2%">
	</label>
	<label>
		School: <input type="text" name="school17" value="ISPSC"
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
				<input type="text" name="name" id="name" disabled 
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input type="text" name="studentid" id="studentid" disabled
				style="width: 30%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input type="text" name="grade17"
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
		Course No. <input type="text" name="sub18"
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Course/Year/Section: <input type="text" name="course" id="course" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">/
		<input type="text" name="section2" id="section" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Semester: <input type="text" name="sem2" id="sem" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		AY: <input type="text" name="AY2" id="AY" disabled 
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>
	<label>
		Descriptive Title: <input type="text" name="des18"
		style="width: 40%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Units: <input type="text" name="units18" value="3"
		style="width: 5%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;
		margin-right:2%">
	</label>
	<label>
		School: <input type="text" name="school18" value="ISPSC"
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
				<input type="text" name="name" id="name" disabled 
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input type="text" name="studentid" id="studentid" disabled
				style="width: 30%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input type="text" name="grade18"
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
		Course No. <input type="text" name="sub19"
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Course/Year/Section: <input type="text" name="course" id="course" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">/
		<input type="text" name="section2" id="section" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Semester: <input type="text" name="sem2" id="sem" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		AY: <input type="text" name="AY2" id="AY" disabled 
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>
	<label>
		Descriptive Title: <input type="text" name="des19"
		style="width: 40%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Units: <input type="text" name="units19" value="3"
		style="width: 5%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;
		margin-right:2%">
	</label>
	<label>
		School: <input type="text" name="school19" value="ISPSC"
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
				<input type="text" name="name" id="name" disabled 
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input type="text" name="studentid" id="studentid" disabled
				style="width: 30%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input type="text" name="grade19"
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
		Course No. <input type="text" name="sub20"
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Course/Year/Section: <input type="text" name="course" id="course" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">/
		<input type="text" name="section2" id="section" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Semester: <input type="text" name="sem2" id="sem" disabled
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		AY: <input type="text" name="AY2" id="AY" disabled 
		style="width: 10%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label><br><br>
	<label>
		Descriptive Title: <input type="text" name="des20"
		style="width: 40%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;">
	</label>
	<label>
		Units: <input type="text" name="units20" value="3"
		style="width: 5%;
		border-style: solid;
		border: 1px solid black;
		border-top-color: white;
		border-left-color: white;
		border-right-color: white;
		margin-right:2%">
	</label>
	<label>
		School: <input type="text" name="school20" value="ISPSC"
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
				<input type="text" name="name" id="name" disabled 
				style="width: 60%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input type="text" name="studentid" id="studentid" disabled
				style="width: 30%;
				border-style: solid;
				border: 1px solid black;
				border-top-color: white;
				border-left-color: white;
				border-right-color: white;">
			</td>
			<td style="text-align: center; padding:5px;">
				<input type="text" name="grade20"
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
	<center><button type="submit" style="width:400px;padding:10px;border:none;background:green;color:white;text-shadow:1px 1px 0 black;font-size: 20px;font-family: Arial Black;box-shadow:3px 3px 10px black;cursor:pointer;">Submit</button></center><br><br><br>
	<center><a href="facultycreaterog.php" style="font-family: Arial Black;font-size: 20px;">Back</a></center><br><br><br><br><br><br><br><br>
</div>
</form>




























</script>	
</body>
</html>