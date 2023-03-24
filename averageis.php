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
<title>AVERAGE CALCULATION</title>
<style>
	*{
		margin: 0;
		padding: 0;
	}
	body{
		margin: 0;
		padding: 0;
		font-family: arial;
		user-select: none;
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
	.BSIS a{
          padding: 10px 32px;
          text-align: center;
          text-decoration: none;
          position:fixed;
          right:0;
          bottom:0;
          margin-bottom: 7%;
          margin-right: 2%;
          font-family:arial black;
          border-radius:5px;
          cursor: pointer;
          z-index: 5;
          background: rgba(0,0,0,0.5);
          color:white;
          text-shadow: 2px 3px 2px green;
        }
        .BSIS a:Hover{
          background: linear-gradient(to top, gray,silver);
          color:black;
          box-shadow: 3px 3px 2px black;
        }
        .BSIT a{
          padding: 10px 30px;
          text-align: center;
          text-decoration: none;
          position:fixed;
          right:0;
          bottom:0;
          margin-bottom: 2%;
          margin-right: 2%;
          font-family:arial black;
          border-radius:5px;
          cursor: pointer;
          z-index: 5;
          background: linear-gradient(to top, gray,silver);
          color:black;
          text-shadow: 2px 3px 2px green;
          box-shadow: 3px 3px 2px black;
        }
        #arrowright{
          animation: animate 1s;
          display: none;
        }
        #arrowleft{
          animation: animate 1s;
        }
        @keyframes animate{
          from{
            transform: translateX(40px);
          }to{
            transform: translateX(0);
          }
        }
        @keyframes show{
          from{
            opacity: 0;
            transform: translateX(50px);
          }to{
            opacity: 1;
            transform: translateX(0);
          }
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
      	button{
      		visibility: hidden;
      	}
      	#arrowright{
      		visibility: hidden;
      	}
      	#arrowleft{
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
    .formmsgtoadmin{
      width: 100%;
      height: 100%;
      background: rgba(0,0,0,0.9);
      position: fixed;
      top: 0;
      left: 0;
      z-index: 2;
      display: none;
      animation: open 1.2s;
    }
    @keyframes animate{
      from{
        opacity: 0;
        transform: rotateY(230deg);
      }to{
        opacity: 1;
        transform: rotateY(0);
      }
    }
    .formmsgtoadmin p{
      letter-spacing: 1.2px;
      margin-inline: 50px;
      margin-top: 5%;
      margin-bottom: 5%;
      text-align: justify;
      animation: animated 2s;
    }
    @keyframes animated{
      from{
        opacity: 0;
        transform: translateY(40px);
      }to{
        opacity: 1;
        transform: translateY(0);
      }
    }
    .formmsgtoadmin h1{
      font-family: impact;
      letter-spacing: 1.5px;
      margin-inline: 50px;
      margin-top: 20%;
      text-align: center;
    }
    .formmsgtoadmin button{
      padding: 30px 80px 30px 80px;
      border: none;
      background: green;
      font-size: 15px;
      font-family: arial black;
      color: white;
      text-shadow: 3px 3px 3px black;
      box-shadow: 3px 3px 3px black;
      margin-top: 20%;
      margin-bottom: 20%;
      border-radius: 10px;
      cursor: pointer;
    }
    .formmsgtoadmin #close{
      position: relative;
      top: 0;
      left: 0;
      padding: 10px 20px 10px 20px;
      background: red;
      font-size: 15px;
      font-family: arial black;
      color: white;
      text-shadow: 3px 3px 3px black;
      box-shadow: 3px 3px 3px black;
      cursor: pointer;
      border: none;
      margin-left:-10px;
      margin-top: -2%;
      border-radius: 50%;
    }
    .formmsgtoadmin #exform{
      animation: open 3s;
    }
    #accessbutton #open{
      position: absolute;
      top: 0;
      right: 0;
      padding: 10px 75px 10px 75px;
      background: red;
      font-size: 15px;
      font-family: arial black;
      color: white;
      text-shadow: 3px 3px 3px black;
      box-shadow: 3px 3px 3px black;
      cursor: pointer;
      border: none;
      margin-right: 1%;
      margin-top: 2%;
      border-radius: 5px;
      animation: open 4s;
      z-index: 2;
    }
    @keyframes open{
      from{
        opacity: 0;
      }to{
        opacity: 1;
      }
    }
    .formmsgtoadmin input{
      font-family: arial;
      font-size: 17px;
      outline: none;
      width: 90%;
      padding: 15px;
      margin-top: 10px;
      text-align: center;
      font-weight: bold;
    }
    .formmsgtoadmin input:focus{
      font-weight: bold;
      border: 3px solid blue;
      border-left-color: white;
      border-right-color: white;
      border-top-color: white;
      letter-spacing: 1.2px;
      animation: inputanim 0.2s ease-in;
    }
    @keyframes inputanim{
      from{
        transform: rotateX(120deg);
      }to{
        transform: rotateX(0);
      }
    }
    .formmsgtoadmin2{
      width: 100%;
      height: 100%;
      background: rgba(0,0,0,0.9);
      position: fixed;
      top: 0;
      left: 0;
      z-index: 2;
      display: none;
      animation: open 1.2s;
    }
    @keyframes animate{
      from{
        opacity: 0;
        transform: rotateY(230deg);
      }to{
        opacity: 1;
        transform: rotateY(0);
      }
    }
    .formmsgtoadmin2 p{
      letter-spacing: 1.2px;
      margin-inline: 50px;
      margin-top: 5%;
      margin-bottom: 5%;
      text-align: justify;
      animation: animated 2s;
    }
    @keyframes animated{
      from{
        opacity: 0;
        transform: translateY(40px);
      }to{
        opacity: 1;
        transform: translateY(0);
      }
    }
    .formmsgtoadmin2 h2{
      font-family: impact;
      letter-spacing: 1.5px;
      margin-inline: 50px;
      margin-top: 20%;
      text-align: center;
    }
    .formmsgtoadmin2 button{
      padding: 30px 80px 30px 80px;
      border: none;
      background: green;
      font-size: 15px;
      font-family: arial black;
      color: white;
      text-shadow: 3px 3px 3px black;
      box-shadow: 3px 3px 3px black;
      margin-top: 20%;
      margin-bottom: 20%;
      border-radius: 10px;
      cursor: pointer;
    }
    .formmsgtoadmin2 #close2{
      position: relative;
      top: 0;
      left: 0;
      padding: 10px 20px 10px 20px;
      background: red;
      font-size: 15px;
      font-family: arial black;
      color: white;
      text-shadow: 3px 3px 3px black;
      box-shadow: 3px 3px 3px black;
      cursor: pointer;
      border: none;
      margin-left:-10px;
      margin-top: -2%;
      border-radius: 50%;
    }
    .formmsgtoadmin2 #exform{
      animation: open 3s;
    }
    #accessbutton2 #open2{
      position: absolute;
      top: 0;
      right: 0;
      padding: 10px 40px 10px 40px;
      background: red;
      font-size: 15px;
      font-family: arial black;
      color: white;
      text-shadow: 3px 3px 3px black;
      box-shadow: 3px 3px 3px black;
      cursor: pointer;
      border: none;
      margin-right: 1%;
      margin-top: 6%;
      border-radius: 5px;
      animation: open 4s;
      z-index: 2;
    }
    @keyframes open{
      from{
        opacity: 0;
      }to{
        opacity: 1;
      }
    }
    .formmsgtoadmin2 input{
      font-family: arial;
      font-size: 17px;
      outline: none;
      width: 90%;
      padding: 15px;
      margin-top: 10px;
      text-align: center;
      font-weight: bold;
    }
    .formmsgtoadmin2 input:focus{
      font-weight: bold;
      border: 3px solid blue;
      border-left-color: white;
      border-right-color: white;
      border-top-color: white;
      letter-spacing: 1.2px;
      animation: inputanim 0.2s ease-in;
    }
    @keyframes inputanim{
      from{
        transform: rotateX(120deg);
      }to{
        transform: rotateX(0);
      }
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



<div id="accessbutton">
    <button onclick="openForm()" id="open">ADD REMARKS</button>
    </div>


    <div class="formmsgtoadmin" id="form">
      <div style="position:absolute;top:0;margin-top: 4%; margin-left: 35%; background:white;width:500px;height:70%;border-radius: 10px;padding:20px;font-family: arial; font-size: 20px; overflow:auto;" id="exform">


      	<?php
						$query = "SELECT * FROM `firstyearis` WHERE `name`='$name'";
					    $results=mysqli_query($link,$query);
					    $result=mysqli_fetch_array($results);
				?>


        <button onclick="closeForm()" id="close">x</button>

        <form action="remarkscopy.php" method="POST">
          <h1>FIRST YEAR</h1>

        <center>
          	<input type="text" name="studentid" value="<?php echo $result['studentid']; ?>" style="pointer-events: none;border:none;"> <br>

          	<input type="text" name="name" value="<?php echo $result['name']; ?>" style="pointer-events: none;border:none;"> <br>

          	<input type="text" name="remarks" placeholder="Enter First Semester Remarks..."><br>
          	<input type="text" name="remarks2" placeholder="Enter Second Semester Remarks..."><br>

          	<h1>SECOND YEAR</h1>

          	<input type="text" name="remarks3" placeholder="Enter First Semester Remarks..."><br>
          	<input type="text" name="remarks4" placeholder="Enter Second Semester Remarks..."><br>

          	<h1>THIRD YEAR</h1>

          	<input type="text" name="remarks5" placeholder="Enter First Semester Remarks..."><br>
          	<input type="text" name="remarks6" placeholder="Enter Second Semester Remarks..."><br>


          	<h1>MID YEAR</h1>

          	<input type="text" name="remarks7" placeholder="Enter Mid Year Remarks..."><br>

          	<h1>FOURTH YEAR</h1>

          	<input type="text" name="remarks8" placeholder="Enter First Semester Remarks..."><br>
          	<input type="text" name="remarks9" placeholder="Enter Second Semester Remarks..."><br>


        </center>



          <center><button type="Submit">Submit</button></center>
        </form>
      </div>
    </div>




<div id="accessbutton2">
    <button onclick="openForm2()" id="open2">ADD AS DEAN's LISTER</button>
    </div>


    <div class="formmsgtoadmin2" id="form2">
      <div style="position:absolute;top:0;margin-top: 4%; margin-left: 35%; background:white;width:500px;height:70%;border-radius: 10px;padding:20px;font-family: arial; font-size: 20px; overflow:auto;" id="exform">


      	<?php
						$query = "SELECT * FROM `firstyear` WHERE `name`='$name'";
					    $results=mysqli_query($link,$query);
					    $result=mysqli_fetch_array($results);
				?>


        <button onclick="closeForm2()" id="close2">x</button>

        <form action="deanlisterqua2.php" method="POST">
          <h2>REVIEW STUDENT QUALIFICATION</h2>

        <center>
          	<input type="text" name="studentid" value="<?php echo $result['studentid']; ?>" style="pointer-events: none;border:none;"> <br>

          	<input type="text" name="name" value="<?php echo $result['name']; ?>" style="pointer-events: none;border:none;"> <br>

          	<input type="text" name="ave" value="" id="aveform" style="pointer-events: none;background:none;"><br>

          	<div style="border:2px solid black;width:70%;height:auto;padding:10px;margin-top:20px;">
          		<p style="line-height:5vh;margin-top:10px;">

          			<b style="font-size: 50px;font-family: Arial Black;color:maroon"><i>If</i></b> the button is disabled, then the average of the student is not qualified to enter as Dean's Lister...<br><br>disabled button usually colored as red...</p>
          	</div>
        </center>



          <center><button type="Submit" id="submitbut">Submit</button></center>
        </form>
      </div>
    </div>








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
					<td>SUM</td>
					<td style="width:100px;">Course No.</td>
					<td style="width:60px;">Grades</td>
					<td>Descriptive Title</td>
					<td style="width:60px;">Units</td>
					<td>SUM</td>
				</tr>
				<tr>
					<td><?php echo $result['sub']; ?></td>
					<td><?php echo $result['grade']; ?></td>
					<td><?php echo $result['des']; ?></td>
					<td><?php echo $result['units']; ?></td>
					<td id="sum1"></td>


					<td><?php echo $result['sub11']; ?></td>
					<td><?php echo $result['grade11']; ?></td>
					<td><?php echo $result['des11']; ?></td>
					<td><?php echo $result['units11']; ?></td>
					<td id="sum11"></td>
				</tr>
				<tr>
					<td><?php echo $result['sub2']; ?></td>
					<td><?php echo $result['grade2']; ?></td>
					<td><?php echo $result['des2']; ?></td>
					<td><?php echo $result['units2']; ?></td>
					<td id="sum2"></td>


					<td><?php echo $result['sub12']; ?></td>
					<td><?php echo $result['grade12']; ?></td>
					<td><?php echo $result['des12']; ?></td>
					<td><?php echo $result['units12']; ?></td>
					<td id="sum12"></td>
				</tr>
				<tr>
					<td><?php echo $result['sub3']; ?></td>
					<td><?php echo $result['grade3']; ?></td>
					<td><?php echo $result['des3']; ?></td>
					<td><?php echo $result['units3']; ?></td>
					<td id="sum3"></td>
					<td><?php echo $result['sub13']; ?></td>
					<td><?php echo $result['grade13']; ?></td>
					<td><?php echo $result['des13']; ?></td>
					<td><?php echo $result['units13']; ?></td>
					<td id="sum13"></td>
				</tr>
				<tr>
					<td><?php echo $result['sub4']; ?></td>
					<td><?php echo $result['grade4']; ?></td>
					<td><?php echo $result['des4']; ?></td>
					<td><?php echo $result['units4'] ?></td>
					<td id="sum4"></td>


					<td><?php echo $result['sub14']; ?></td>
					<td><?php echo $result['grade14']; ?></td>
					<td><?php echo $result['des14']; ?></td>
					<td><?php echo $result['units14']; ?></td>
					<td id="sum14"></td>
				</tr>
				<tr>
					<td><?php echo $result['sub5']; ?></td>
					<td><?php echo $result['grade5']; ?></td>
					<td><?php echo $result['des5']; ?></td>
					<td><?php echo $result['units5']; ?></td>
					<td id="sum5"></td>


					<td><?php echo $result['sub15']; ?></td>
					<td><?php echo $result['grade15']; ?></td>
					<td><?php echo $result['des15']; ?></td>
					<td><?php echo $result['units15']; ?></td>
					<td id="sum15"></td>
				</tr>
				<tr>
					<td><?php echo $result['sub6']; ?></td>
					<td><?php echo $result['grade6']; ?></td>
					<td><?php echo $result['des6']; ?></td>
					<td><?php echo $result['units6']; ?></td>
					<td id="sum6"></td>


					<td><?php echo $result['sub16']; ?></td>
					<td><?php echo $result['grade16']; ?></td>
					<td><?php echo $result['des16']; ?></td>
					<td><?php echo $result['units16']; ?></td>
					<td id="sum16"></td>
				</tr>
				<tr>
					<td><?php echo $result['sub7']; ?></td>
					<td><?php echo $result['grade7']; ?></td>
					<td><?php echo $result['des7']; ?></td>
					<td><?php echo $result['units7']; ?></td>
					<td id="sum7"></td>


					<td><?php echo $result['sub17']; ?></td>
					<td><?php echo $result['grade17']; ?></td>
					<td><?php echo $result['des17']; ?></td>
					<td><?php echo $result['units17']; ?></td>
					<td id="sum17"></td>
				</tr>
				<tr>
					<td><?php echo $result['sub8']; ?></td>
					<td><?php echo $result['grade8']; ?></td>
					<td><?php echo $result['des8']; ?></td>
					<td><?php echo $result['units8']; ?></td>
					<td id="sum8"></td>


					<td><?php echo $result['sub18']; ?></td>
					<td><?php echo $result['grade18']; ?></td>
					<td><?php echo $result['des18']; ?></td>
					<td><?php echo $result['units18']; ?></td>
					<td id="sum18"></td>
				</tr>
				<tr>
					<td><?php echo $result['sub9']; ?></td>
					<td><?php echo $result['grade9']; ?></td>
					<td><?php echo $result['des9']; ?></td>
					<td><?php echo $result['units9']; ?></td>
					<td id="sum9"></td>


					<td><?php echo $result['sub19']; ?></td>
					<td><?php echo $result['grade19']; ?></td>
					<td><?php echo $result['des19']; ?></td>
					<td><?php echo $result['units19']; ?></td>
					<td id="sum19"></td>
				</tr>
				<tr>
					<td><?php echo $result['sub10']; ?></td>
					<td><?php echo $result['grade10']; ?></td>
					<td><?php echo $result['des10']; ?></td>
					<td><?php echo $result['units10']; ?></td>
					<td id="sum10"></td>


					<td><?php echo $result['sub20']; ?></td>
					<td><?php echo $result['grade20']; ?></td>
					<td><?php echo $result['des20']; ?></td>
					<td><?php echo $result['units20']; ?></td>
					<td id="sum20"></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><p style="font-family: Arial Black;">TOTAL</p></td>
					<td id="total1"></td>
					<td id="sumres"></td>
					<td></td>
					<td></td>
					<td><p style="font-family: Arial Black;">TOTAL</p></td>
					<td id="total2"></td>
					<td id="sumres2"></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><p style="font-family: Arial Black;">AVERAGE</p></td>
					<td id="avg"></td>
					<td></td>
					<td></td>
					<td></td>
					<td><p style="font-family: Arial Black;">AVERAGE</p></td>
					<td id="avg2"></td>
					<td id="genavg"></td>
				</tr>
				<tr>
						<?php
								$query = "SELECT * FROM `remarks` WHERE `name`='$name'";;
							  $results=mysqli_query($link,$query);
							  $result=mysqli_fetch_array($results);
						?>
						<td colspan="2" style="padding:10px; font-family: impact;background:orange;">REMARKS</td>
						<td colspan="3"><b><i><?php echo $result['remarks']; ?></i></b></td>
						<td colspan="2" style="padding:10px; font-family: impact;background:orange;">REMARKS</td>
						<td colspan="3"><b><i><?php echo $result['remarks2']; ?></i></b></td>
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
					<td>SUM</td>
					<td style="width:100px;">Course No.</td>
					<td style="width:60px;">Grades</td>
					<td>Descriptive Title</td>
					<td style="width:60px;">Units</td>
					<td>SUM</td>
				</tr>
				<tr>
					<td><?php echo $result['sub']; ?></td>
					<td><?php echo $result['grade']; ?></td>
					<td><?php echo $result['des']; ?></td>
					<td><?php echo $result['units']; ?></td>
					<td id="sum21"></td>


					<td><?php echo $result['sub11']; ?></td>
					<td><?php echo $result['grade11']; ?></td>
					<td><?php echo $result['des11']; ?></td>
					<td><?php echo $result['units11']; ?></td>
					<td id="sum31"></td>
				</tr>
				<tr>
					<td><?php echo $result['sub2']; ?></td>
					<td><?php echo $result['grade2']; ?></td>
					<td><?php echo $result['des2']; ?></td>
					<td><?php echo $result['units2']; ?></td>
					<td id="sum22"></td>


					<td><?php echo $result['sub12']; ?></td>
					<td><?php echo $result['grade12']; ?></td>
					<td><?php echo $result['des12']; ?></td>
					<td><?php echo $result['units12']; ?></td>
					<td id="sum32"></td>
				</tr>
				<tr>
					<td><?php echo $result['sub3']; ?></td>
					<td><?php echo $result['grade3']; ?></td>
					<td><?php echo $result['des3']; ?></td>
					<td><?php echo $result['units3']; ?></td>
					<td id="sum23"></td>

					<td><?php echo $result['sub13']; ?></td>
					<td><?php echo $result['grade13']; ?></td>
					<td><?php echo $result['des13']; ?></td>
					<td><?php echo $result['units13']; ?></td>
					<td id="sum33"></td>
				</tr>
				<tr>
					<td><?php echo $result['sub4']; ?></td>
					<td><?php echo $result['grade4']; ?></td>
					<td><?php echo $result['des4']; ?></td>
					<td><?php echo $result['units4'] ?></td>
					<td id="sum24"></td>


					<td><?php echo $result['sub14']; ?></td>
					<td><?php echo $result['grade14']; ?></td>
					<td><?php echo $result['des14']; ?></td>
					<td><?php echo $result['units14']; ?></td>
					<td id="sum34"></td>
				</tr>
				<tr>
					<td><?php echo $result['sub5']; ?></td>
					<td><?php echo $result['grade5']; ?></td>
					<td><?php echo $result['des5']; ?></td>
					<td><?php echo $result['units5']; ?></td>
					<td id="sum25"></td>


					<td><?php echo $result['sub15']; ?></td>
					<td><?php echo $result['grade15']; ?></td>
					<td><?php echo $result['des15']; ?></td>
					<td><?php echo $result['units15']; ?></td>
					<td id="sum35"></td>
				</tr>
				<tr>
					<td><?php echo $result['sub6']; ?></td>
					<td><?php echo $result['grade6']; ?></td>
					<td><?php echo $result['des6']; ?></td>
					<td><?php echo $result['units6']; ?></td>
					<td id="sum26"></td>


					<td><?php echo $result['sub16']; ?></td>
					<td><?php echo $result['grade16']; ?></td>
					<td><?php echo $result['des16']; ?></td>
					<td><?php echo $result['units16']; ?></td>
					<td id="sum36"></td>
				</tr>
				<tr>
					<td><?php echo $result['sub7']; ?></td>
					<td><?php echo $result['grade7']; ?></td>
					<td><?php echo $result['des7']; ?></td>
					<td><?php echo $result['units7']; ?></td>
					<td id="sum27"></td>


					<td><?php echo $result['sub17']; ?></td>
					<td><?php echo $result['grade17']; ?></td>
					<td><?php echo $result['des17']; ?></td>
					<td><?php echo $result['units17']; ?></td>
					<td id="sum37"></td>
				</tr>
				<tr>
					<td><?php echo $result['sub8']; ?></td>
					<td><?php echo $result['grade8']; ?></td>
					<td><?php echo $result['des8']; ?></td>
					<td><?php echo $result['units8']; ?></td>
					<td id="sum28"></td>


					<td><?php echo $result['sub18']; ?></td>
					<td><?php echo $result['grade18']; ?></td>
					<td><?php echo $result['des18']; ?></td>
					<td><?php echo $result['units18']; ?></td>
					<td id="sum38"></td>
				</tr>
				<tr>
					<td><?php echo $result['sub9']; ?></td>
					<td><?php echo $result['grade9']; ?></td>
					<td><?php echo $result['des9']; ?></td>
					<td><?php echo $result['units9']; ?></td>
					<td id="sum29"></td>


					<td><?php echo $result['sub19']; ?></td>
					<td><?php echo $result['grade19']; ?></td>
					<td><?php echo $result['des19']; ?></td>
					<td><?php echo $result['units19']; ?></td>
					<td id="sum39"></td>
				</tr>
				<tr>
					<td><?php echo $result['sub10']; ?></td>
					<td><?php echo $result['grade10']; ?></td>
					<td><?php echo $result['des10']; ?></td>
					<td><?php echo $result['units10']; ?></td>
					<td id="sum30"></td>


					<td><?php echo $result['sub20']; ?></td>
					<td><?php echo $result['grade20']; ?></td>
					<td><?php echo $result['des20']; ?></td>
					<td><?php echo $result['units20']; ?></td>
					<td id="sum40"></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><p style="font-family: Arial Black;">TOTAL</p></td>
					<td id="total3"></td>
					<td id="sumres3"></td>
					<td></td>
					<td></td>
					<td><p style="font-family: Arial Black;">TOTAL</p></td>
					<td id="total4"></td>
					<td id="sumres4"></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><p style="font-family: Arial Black;">AVERAGE</p></td>
					<td id="avg3"></td>
					<td></td>
					<td></td>
					<td></td>
					<td><p style="font-family: Arial Black;">AVERAGE</p></td>
					<td id="avg4"></td>
					<td id="genavg2"></td>
				</tr>
				<tr>
						<?php
								$query = "SELECT * FROM `remarks` WHERE `name`='$name'";;
							  $results=mysqli_query($link,$query);
							  $result=mysqli_fetch_array($results);
						?>
						<td colspan="2" style="padding:10px; font-family: impact;background:orange;">REMARKS</td>
						<td colspan="3"><b><i><?php echo $result['remarks3']; ?></i></b></td>
						<td colspan="2" style="padding:10px; font-family: impact;background:orange;">REMARKS</td>
						<td colspan="3"><b><i><?php echo $result['remarks4']; ?></i></b></td>
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
					<td>SUM</td>
					<td style="width:100px;">Course No.</td>
					<td style="width:60px;">Grades</td>
					<td>Descriptive Title</td>
					<td style="width:60px;">Units</td>
					<td>SUM</td>
				</tr>
				<tr>
					<td><?php echo $result['sub']; ?></td>
					<td><?php echo $result['grade']; ?></td>
					<td><?php echo $result['des']; ?></td>
					<td><?php echo $result['units']; ?></td>
					<td id="sum41"></td>


					<td><?php echo $result['sub11']; ?></td>
					<td><?php echo $result['grade11']; ?></td>
					<td><?php echo $result['des11']; ?></td>
					<td><?php echo $result['units11']; ?></td>
					<td id="sum51"></td>
				</tr>
				<tr>
					<td><?php echo $result['sub2']; ?></td>
					<td><?php echo $result['grade2']; ?></td>
					<td><?php echo $result['des2']; ?></td>
					<td><?php echo $result['units2']; ?></td>
					<td id="sum42"></td>


					<td><?php echo $result['sub12']; ?></td>
					<td><?php echo $result['grade12']; ?></td>
					<td><?php echo $result['des12']; ?></td>
					<td><?php echo $result['units12']; ?></td>
					<td id="sum52"></td>
				</tr>
				<tr>
					<td><?php echo $result['sub3']; ?></td>
					<td><?php echo $result['grade3']; ?></td>
					<td><?php echo $result['des3']; ?></td>
					<td><?php echo $result['units3']; ?></td>
					<td id="sum43"></td>

					<td><?php echo $result['sub13']; ?></td>
					<td><?php echo $result['grade13']; ?></td>
					<td><?php echo $result['des13']; ?></td>
					<td><?php echo $result['units13']; ?></td>
					<td id="sum53"></td>
				</tr>
				<tr>
					<td><?php echo $result['sub4']; ?></td>
					<td><?php echo $result['grade4']; ?></td>
					<td><?php echo $result['des4']; ?></td>
					<td><?php echo $result['units4'] ?></td>
					<td id="sum44"></td>


					<td><?php echo $result['sub14']; ?></td>
					<td><?php echo $result['grade14']; ?></td>
					<td><?php echo $result['des14']; ?></td>
					<td><?php echo $result['units14']; ?></td>
					<td id="sum54"></td>
				</tr>
				<tr>
					<td><?php echo $result['sub5']; ?></td>
					<td><?php echo $result['grade5']; ?></td>
					<td><?php echo $result['des5']; ?></td>
					<td><?php echo $result['units5']; ?></td>
					<td id="sum45"></td>


					<td><?php echo $result['sub15']; ?></td>
					<td><?php echo $result['grade15']; ?></td>
					<td><?php echo $result['des15']; ?></td>
					<td><?php echo $result['units15']; ?></td>
					<td id="sum55"></td>
				</tr>
				<tr>
					<td><?php echo $result['sub6']; ?></td>
					<td><?php echo $result['grade6']; ?></td>
					<td><?php echo $result['des6']; ?></td>
					<td><?php echo $result['units6']; ?></td>
					<td id="sum46"></td>


					<td><?php echo $result['sub16']; ?></td>
					<td><?php echo $result['grade16']; ?></td>
					<td><?php echo $result['des16']; ?></td>
					<td><?php echo $result['units16']; ?></td>
					<td id="sum56"></td>
				</tr>
				<tr>
					<td><?php echo $result['sub7']; ?></td>
					<td><?php echo $result['grade7']; ?></td>
					<td><?php echo $result['des7']; ?></td>
					<td><?php echo $result['units7']; ?></td>
					<td id="sum47"></td>


					<td><?php echo $result['sub17']; ?></td>
					<td><?php echo $result['grade17']; ?></td>
					<td><?php echo $result['des17']; ?></td>
					<td><?php echo $result['units17']; ?></td>
					<td id="sum57"></td>
				</tr>
				<tr>
					<td><?php echo $result['sub8']; ?></td>
					<td><?php echo $result['grade8']; ?></td>
					<td><?php echo $result['des8']; ?></td>
					<td><?php echo $result['units8']; ?></td>
					<td id="sum48"></td>


					<td><?php echo $result['sub18']; ?></td>
					<td><?php echo $result['grade18']; ?></td>
					<td><?php echo $result['des18']; ?></td>
					<td><?php echo $result['units18']; ?></td>
					<td id="sum58"></td>
				</tr>
				<tr>
					<td><?php echo $result['sub9']; ?></td>
					<td><?php echo $result['grade9']; ?></td>
					<td><?php echo $result['des9']; ?></td>
					<td><?php echo $result['units9']; ?></td>
					<td id="sum49"></td>


					<td><?php echo $result['sub19']; ?></td>
					<td><?php echo $result['grade19']; ?></td>
					<td><?php echo $result['des19']; ?></td>
					<td><?php echo $result['units19']; ?></td>
					<td id="sum59"></td>
				</tr>
				<tr>
					<td><?php echo $result['sub10']; ?></td>
					<td><?php echo $result['grade10']; ?></td>
					<td><?php echo $result['des10']; ?></td>
					<td><?php echo $result['units10']; ?></td>
					<td id="sum50"></td>


					<td><?php echo $result['sub20']; ?></td>
					<td><?php echo $result['grade20']; ?></td>
					<td><?php echo $result['des20']; ?></td>
					<td><?php echo $result['units20']; ?></td>
					<td id="sum60"></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><p style="font-family: Arial Black;">TOTAL</p></td>
					<td id="total5"></td>
					<td id="sumres5"></td>
					<td></td>
					<td></td>
					<td><p style="font-family: Arial Black;">TOTAL</p></td>
					<td id="total6"></td>
					<td id="sumres6"></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><p style="font-family: Arial Black;">AVERAGE</p></td>
					<td id="avg5"></td>
					<td></td>
					<td></td>
					<td></td>
					<td><p style="font-family: Arial Black;">AVERAGE</p></td>
					<td id="avg6"></td>
					<td id="genavg3"></td>
				</tr>
				<tr>
						<?php
								$query = "SELECT * FROM `remarks` WHERE `name`='$name'";;
							  $results=mysqli_query($link,$query);
							  $result=mysqli_fetch_array($results);
						?>
						<td colspan="2" style="padding:10px; font-family: impact;background:orange;">REMARKS</td>
						<td colspan="3"><b><i><?php echo $result['remarks5']; ?></i></b></td>
						<td colspan="2" style="padding:10px; font-family: impact;background:orange;">REMARKS</td>
						<td colspan="3"><b><i><?php echo $result['remarks6']; ?></i></b></td>
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

		<h4 style="text-align: center; position:relative;margin-top: -150px;right:-300px;">MIDYEARis</h4>

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
					<td>SUM</td>
				</tr>
				<tr>
					<td><?php echo $result['sub']; ?></td>
					<td><?php echo $result['grade']; ?></td>
					<td><?php echo $result['des']; ?></td>
					<td><?php echo $result['units']; ?></td>
					<td id="sum61"></td>
				</tr>
				<tr>
					<td><?php echo $result['sub2']; ?></td>
					<td><?php echo $result['grade2']; ?></td>
					<td><?php echo $result['des2']; ?></td>
					<td><?php echo $result['units2']; ?></td>
					<td id="sum62"></td>
				</tr>
				<tr>
					<td><?php echo $result['sub3']; ?></td>
					<td><?php echo $result['grade3']; ?></td>
					<td><?php echo $result['des3']; ?></td>
					<td><?php echo $result['units3']; ?></td>
					<td id="sum63"></td>
				</tr>
				<tr>
					<td><?php echo $result['sub4']; ?></td>
					<td><?php echo $result['grade4']; ?></td>
					<td><?php echo $result['des4']; ?></td>
					<td><?php echo $result['units4']; ?></td>
					<td id="sum64"></td>
				</tr>
				<tr>
					<td><?php echo $result['sub5']; ?></td>
					<td><?php echo $result['grade5']; ?></td>
					<td><?php echo $result['des5']; ?></td>
					<td><?php echo $result['units5']; ?></td>
					<td id="sum65"></td>
				</tr>
				<tr>
					<td><?php echo $result['sub6']; ?></td>
					<td><?php echo $result['grade6']; ?></td>
					<td><?php echo $result['des6']; ?></td>
					<td><?php echo $result['units6']; ?></td>
					<td id="sum66"></td>
				</tr>
				<tr>
					<td><?php echo $result['sub7']; ?></td>
					<td><?php echo $result['grade7']; ?></td>
					<td><?php echo $result['des7']; ?></td>
					<td><?php echo $result['units7']; ?></td>
					<td id="sum67"></td>
				</tr>
				<tr>
					<td><?php echo $result['sub8']; ?></td>
					<td><?php echo $result['grade8']; ?></td>
					<td><?php echo $result['des8']; ?></td>
					<td><?php echo $result['units8']; ?></td>
					<td id="sum68"></td>
				</tr>
				<tr>
					<td><?php echo $result['sub9']; ?></td>
					<td><?php echo $result['grade9']; ?></td>
					<td><?php echo $result['des9']; ?></td>
					<td><?php echo $result['units9']; ?></td>
					<td id="sum69"></td>
				</tr>
				<tr>
					<td><?php echo $result['sub10']; ?></td>
					<td><?php echo $result['grade10']; ?></td>
					<td><?php echo $result['des10']; ?></td>
					<td><?php echo $result['units10']; ?></td>
					<td id="sum70"></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><p style="font-family: Arial Black;">TOTAL</p></td>
					<td id="total7"></td>
					<td id="sumres7"></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><p style="font-family: Arial Black;">AVERAGE</p></td>
					<td id="avg7"></td>
					<td id="genavg4"></td>
				</tr>
				<tr>
						<?php
								$query = "SELECT * FROM `remarks` WHERE `name`='$name'";;
							  $results=mysqli_query($link,$query);
							  $result=mysqli_fetch_array($results);
						?>
						<td colspan="2" style="padding:10px; font-family: impact;background:orange;">REMARKS</td>
						<td colspan="3"><b><i><?php echo $result['remarks7']; ?></i></b></td>

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
					<td>SUM</td>
					<td style="width:100px;">Course No.</td>
					<td style="width:60px;">Grades</td>
					<td>Descriptive Title</td>
					<td style="width:60px;">Units</td>
					<td>SUM</td>
				</tr>
				<tr>
					<td><?php echo $result['sub']; ?></td>
					<td><?php echo $result['grade']; ?></td>
					<td><?php echo $result['des']; ?></td>
					<td><?php echo $result['units']; ?></td>
					<td id="sum71"></td>


					<td><?php echo $result['sub11']; ?></td>
					<td><?php echo $result['grade11']; ?></td>
					<td><?php echo $result['des11']; ?></td>
					<td><?php echo $result['units11']; ?></td>
					<td id="sum81"></td>
				</tr>
				<tr>
					<td><?php echo $result['sub2']; ?></td>
					<td><?php echo $result['grade2']; ?></td>
					<td><?php echo $result['des2']; ?></td>
					<td><?php echo $result['units2']; ?></td>
					<td id="sum72"></td>


					<td><?php echo $result['sub12']; ?></td>
					<td><?php echo $result['grade12']; ?></td>
					<td><?php echo $result['des12']; ?></td>
					<td><?php echo $result['units12']; ?></td>
					<td id="sum82"></td>
				</tr>
				<tr>
					<td><?php echo $result['sub3']; ?></td>
					<td><?php echo $result['grade3']; ?></td>
					<td><?php echo $result['des3']; ?></td>
					<td><?php echo $result['units3']; ?></td>
					<td id="sum73"></td>


					<td><?php echo $result['sub13']; ?></td>
					<td><?php echo $result['grade13']; ?></td>
					<td><?php echo $result['des13']; ?></td>
					<td><?php echo $result['units13']; ?></td>
					<td id="sum83"></td>
				</tr>
				<tr>
					<td><?php echo $result['sub4']; ?></td>
					<td><?php echo $result['grade4']; ?></td>
					<td><?php echo $result['des4']; ?></td>
					<td><?php echo $result['units4'] ?></td>
					<td id="sum74"></td>


					<td><?php echo $result['sub14']; ?></td>
					<td><?php echo $result['grade14']; ?></td>
					<td><?php echo $result['des14']; ?></td>
					<td><?php echo $result['units14']; ?></td>
					<td id="sum84"></td>
				</tr>
				<tr>
					<td><?php echo $result['sub5']; ?></td>
					<td><?php echo $result['grade5']; ?></td>
					<td><?php echo $result['des5']; ?></td>
					<td><?php echo $result['units5']; ?></td>
					<td id="sum75"></td>


					<td><?php echo $result['sub15']; ?></td>
					<td><?php echo $result['grade15']; ?></td>
					<td><?php echo $result['des15']; ?></td>
					<td><?php echo $result['units15']; ?></td>
					<td id="sum85"></td>
				</tr>
				<tr>
					<td><?php echo $result['sub6']; ?></td>
					<td><?php echo $result['grade6']; ?></td>
					<td><?php echo $result['des6']; ?></td>
					<td><?php echo $result['units6']; ?></td>
					<td id="sum76"></td>


					<td><?php echo $result['sub16']; ?></td>
					<td><?php echo $result['grade16']; ?></td>
					<td><?php echo $result['des16']; ?></td>
					<td><?php echo $result['units16']; ?></td>
					<td id="sum86"></td>
				</tr>
				<tr>
					<td><?php echo $result['sub7']; ?></td>
					<td><?php echo $result['grade7']; ?></td>
					<td><?php echo $result['des7']; ?></td>
					<td><?php echo $result['units7']; ?></td>
					<td id="sum77"></td>


					<td><?php echo $result['sub17']; ?></td>
					<td><?php echo $result['grade17']; ?></td>
					<td><?php echo $result['des17']; ?></td>
					<td><?php echo $result['units17']; ?></td>
					<td id="sum87"></td>
				</tr>
				<tr>
					<td><?php echo $result['sub8']; ?></td>
					<td><?php echo $result['grade8']; ?></td>
					<td><?php echo $result['des8']; ?></td>
					<td><?php echo $result['units8']; ?></td>
					<td id="sum78"></td>


					<td><?php echo $result['sub18']; ?></td>
					<td><?php echo $result['grade18']; ?></td>
					<td><?php echo $result['des18']; ?></td>
					<td><?php echo $result['units18']; ?></td>
					<td id="sum88"></td>
				</tr>
				<tr>
					<td><?php echo $result['sub9']; ?></td>
					<td><?php echo $result['grade9']; ?></td>
					<td><?php echo $result['des9']; ?></td>
					<td><?php echo $result['units9']; ?></td>
					<td id="sum79"></td>


					<td><?php echo $result['sub19']; ?></td>
					<td><?php echo $result['grade19']; ?></td>
					<td><?php echo $result['des19']; ?></td>
					<td><?php echo $result['units19']; ?></td>
					<td id="sum89"></td>
				</tr>
				<tr>
					<td><?php echo $result['sub10']; ?></td>
					<td><?php echo $result['grade10']; ?></td>
					<td><?php echo $result['des10']; ?></td>
					<td><?php echo $result['units10']; ?></td>
					<td id="sum80"></td>


					<td><?php echo $result['sub20']; ?></td>
					<td><?php echo $result['grade20']; ?></td>
					<td><?php echo $result['des20']; ?></td>
					<td><?php echo $result['units20']; ?></td>
					<td id="sum90"></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><p style="font-family: Arial Black;">TOTAL</p></td>
					<td id="total8"></td>
					<td id="sumres8"></td>
					<td></td>
					<td></td>
					<td><p style="font-family: Arial Black;">TOTAL</p></td>
					<td id="total9"></td>
					<td id="sumres9"></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><p style="font-family: Arial Black;">AVERAGE</p></td>
					<td id="avg8"></td>
					<td></td>
					<td></td>
					<td></td>
					<td><p style="font-family: Arial Black;">AVERAGE</p></td>
					<td id="avg9"></td>
					<td id="genavg5"></td>
				</tr>
				<td style="background: black;" colspan="7" cellspacing="0"></td>
					<td><p style="font-family: Arial Black;background:yellow;">GEN. AVERAGE</p></td>
					<td id="finalgenavg" colspan="2"></td>
				<tr>
						<?php
								$query = "SELECT * FROM `remarks` WHERE `name`='$name'";;
							  $results=mysqli_query($link,$query);
							  $result=mysqli_fetch_array($results);
						?>
						<td colspan="2" style="padding:10px; font-family: impact;background:orange;">REMARKS</td>
						<td colspan="3"><b><i><?php echo $result['remarks8']; ?></i></b></td>
						<td colspan="2" style="padding:10px; font-family: impact;background:orange;">REMARKS</td>
						<td colspan="3"><b><i><?php echo $result['remarks9']; ?></i></b></td>
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


	var avga= parseFloat(
    <?php
      $query = "SELECT sum(grade) as totalavg FROM `firstyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputa = $row['totalavg'];
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

	var avgb= parseFloat(
    <?php
      $query = "SELECT sum(grade2) as totalavg2 FROM `firstyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputb = $row['totalavg2'];
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

	var avgc= parseFloat(
    <?php
      $query = "SELECT sum(grade3) as totalavg3 FROM `firstyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputc = $row['totalavg3'];
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


	var avgd= parseFloat(
    <?php
      $query = "SELECT sum(grade4) as totalavg4 FROM `firstyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputd = $row['totalavg4'];
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

	var avge= parseFloat(
    <?php
      $query = "SELECT sum(grade5) as totalavg5 FROM `firstyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outpute = $row['totalavg5'];
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

	var avgf= parseFloat(
    <?php
      $query = "SELECT sum(grade6) as totalavg6 FROM `firstyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputf = $row['totalavg6'];
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

	var avgg= parseFloat(
    <?php
      $query = "SELECT sum(grade7) as totalavg7 FROM `firstyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputg = $row['totalavg7'];
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

	var avgh= parseFloat(
    <?php
      $query = "SELECT sum(grade8) as totalavg8 FROM `firstyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputh = $row['totalavg8'];
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

	var avgi= parseFloat(
    <?php
      $query = "SELECT sum(grade9) as totalavg9 FROM `firstyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputi = $row['totalavg9'];
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

	var avgj= parseFloat(
    <?php
      $query = "SELECT sum(grade10) as totalavg10 FROM `firstyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputj = $row['totalavg10'];
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

	var avgk= parseFloat(
    <?php
      $query = "SELECT sum(grade11) as totalavg11 FROM `firstyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputk = $row['totalavg11'];
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

	var avgl= parseFloat(
    <?php
      $query = "SELECT sum(grade12) as totalavg12 FROM `firstyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputl = $row['totalavg12'];
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

	var avgm= parseFloat(
    <?php
      $query = "SELECT sum(grade13) as totalavg13 FROM `firstyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputm = $row['totalavg13'];
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

	var avgn= parseFloat(
    <?php
      $query = "SELECT sum(grade14) as totalavg14 FROM `firstyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputn = $row['totalavg14'];
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

	var avgo= parseFloat(
    <?php
      $query = "SELECT sum(grade15) as totalavg15 FROM `firstyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputo = $row['totalavg15'];
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

	var avgp= parseFloat(
    <?php
      $query = "SELECT sum(grade16) as totalavg16 FROM `firstyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputp = $row['totalavg16'];
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

	var avgq= parseFloat(
    <?php
      $query = "SELECT sum(grade17) as totalavg17 FROM `firstyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputq = $row['totalavg17'];
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

	var avgr= parseFloat(
    <?php
      $query = "SELECT sum(grade18) as totalavg18 FROM `firstyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputr = $row['totalavg18'];
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

	var avgs= parseFloat(
    <?php
      $query = "SELECT sum(grade19) as totalavg19 FROM `firstyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputs = $row['totalavg19'];
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

	var avgt= parseFloat(
    <?php
      $query = "SELECT sum(grade20) as totalavg20 FROM `firstyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputt = $row['totalavg20'];
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


	var avgaa=parseFloat(<?php echo $outputa; ?>);
	var avgbb=parseFloat(<?php echo $outputb; ?>);
	var avgcc=parseFloat(<?php echo $outputc; ?>);
	var avgdd=parseFloat(<?php echo $outputd; ?>);
	var avgee=parseFloat(<?php echo $outpute; ?>);
	var avgff=parseFloat(<?php echo $outputf; ?>);
	var avggg=parseFloat(<?php echo $outputg; ?>);
	var avghh=parseFloat(<?php echo $outputh; ?>);
	var avgii=parseFloat(<?php echo $outputi; ?>);
	var avgjj=parseFloat(<?php echo $outputj; ?>);
	var avgkk=parseFloat(<?php echo $outputk; ?>);
	var avgll=parseFloat(<?php echo $outputl; ?>);
	var avgmm=parseFloat(<?php echo $outputm; ?>);
	var avgnn=parseFloat(<?php echo $outputn; ?>);
	var avgoo=parseFloat(<?php echo $outputo; ?>);
	var avgpp=parseFloat(<?php echo $outputp; ?>);
	var avgqq=parseFloat(<?php echo $outputq; ?>);
	var avgrr=parseFloat(<?php echo $outputr; ?>);
	var avgss=parseFloat(<?php echo $outputs; ?>);
	var avgtt=parseFloat(<?php echo $outputt; ?>);


	var avgres=parseFloat(a1*avgaa);
	var avgres2=parseFloat(b1*avgbb);
	var avgres3=parseFloat(c1*avgcc);
	var avgres4=parseFloat(d1*avgdd);
	var avgres5=parseFloat(e1*avgee);
	var avgres6=parseFloat(f1*avgff);
	var avgres7=parseFloat(g1*avggg);
	var avgres8=parseFloat(h1*avghh);
	var avgres9=parseFloat(i1*avgii);
	var avgres10=parseFloat(j1*avgjj);
	var avgres11=parseFloat(k1*avgkk);
	var avgres12=parseFloat(l1*avgll);
	var avgres13=parseFloat(m1*avgmm);
	var avgres14=parseFloat(n1*avgnn);
	var avgres15=parseFloat(o1*avgoo);
	var avgres16=parseFloat(p1*avgpp);
	var avgres17=parseFloat(q1*avgqq);
	var avgres18=parseFloat(r1*avgrr);
	var avgres19=parseFloat(s1*avgss);
	var avgres20=parseFloat(t1*avgtt);

	document.getElementById('sum1').innerHTML=avgres;
	document.getElementById('sum2').innerHTML=avgres2;
	document.getElementById('sum3').innerHTML=avgres3;
	document.getElementById('sum4').innerHTML=avgres4;
	document.getElementById('sum5').innerHTML=avgres5;
	document.getElementById('sum6').innerHTML=avgres6;
	document.getElementById('sum7').innerHTML=avgres7;
	document.getElementById('sum8').innerHTML=avgres8;
	document.getElementById('sum9').innerHTML=avgres9;
	document.getElementById('sum10').innerHTML=avgres10;
	document.getElementById('sum11').innerHTML=avgres11;
	document.getElementById('sum12').innerHTML=avgres12;
	document.getElementById('sum13').innerHTML=avgres13;
	document.getElementById('sum14').innerHTML=avgres14;
	document.getElementById('sum15').innerHTML=avgres15;
	document.getElementById('sum16').innerHTML=avgres16;
	document.getElementById('sum17').innerHTML=avgres17;
	document.getElementById('sum18').innerHTML=avgres18;
	document.getElementById('sum19').innerHTML=avgres19;
	document.getElementById('sum20').innerHTML=avgres20;

	var avgsumres=avgres+avgres2+avgres3+avgres4+avgres5+avgres6+avgres7+avgres8+avgres9+avgres10;

	var avgsumres2=avgres11+avgres12+avgres13+avgres14+avgres15+avgres16+avgres17+avgres18+avgres19+avgres20;

	document.getElementById('sumres').innerHTML=avgsumres;
	document.getElementById('sumres2').innerHTML=avgsumres2;


































































	var u= parseInt(
    <?php
      $query = "SELECT sum(units) as total FROM `secondyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output21 = $row['total'];
      }
      ?>
  );

	var avga2= parseFloat(
    <?php
      $query = "SELECT sum(grade) as totalavg21 FROM `secondyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputa2 = $row['totalavg21'];
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

	var avgb2= parseFloat(
    <?php
      $query = "SELECT sum(grade2) as totalavg22 FROM `secondyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputb2 = $row['totalavg22'];
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

	var avgc2= parseFloat(
    <?php
      $query = "SELECT sum(grade3) as totalavg23 FROM `secondyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputc2 = $row['totalavg23'];
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

	var avgd2= parseFloat(
    <?php
      $query = "SELECT sum(grade4) as totalavg24 FROM `secondyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputd2 = $row['totalavg24'];
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

	var avge2= parseFloat(
    <?php
      $query = "SELECT sum(grade5) as totalavg25 FROM `secondyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outpute2 = $row['totalavg25'];
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

	var avgf2= parseFloat(
    <?php
      $query = "SELECT sum(grade6) as totalavg26 FROM `secondyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputf2 = $row['totalavg26'];
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

	var avgg2= parseFloat(
    <?php
      $query = "SELECT sum(grade7) as totalavg27 FROM `secondyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputg2 = $row['totalavg27'];
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

	var avgh2= parseFloat(
    <?php
      $query = "SELECT sum(grade8) as totalavg28 FROM `secondyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputh2 = $row['totalavg28'];
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

	var avgi2= parseFloat(
    <?php
      $query = "SELECT sum(grade9) as totalavg29 FROM `secondyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputi2 = $row['totalavg29'];
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

	var avgj2= parseFloat(
    <?php
      $query = "SELECT sum(grade10) as totalavg30 FROM `secondyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputj2 = $row['totalavg30'];
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

	var avgk2= parseFloat(
    <?php
      $query = "SELECT sum(grade11) as totalavg31 FROM `secondyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputk2 = $row['totalavg31'];
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

	var avgl2= parseFloat(
    <?php
      $query = "SELECT sum(grade12) as totalavg32 FROM `secondyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputl2 = $row['totalavg32'];
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

	var avgm2= parseFloat(
    <?php
      $query = "SELECT sum(grade13) as totalavg33 FROM `secondyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputm2 = $row['totalavg33'];
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

	var avgn2= parseFloat(
    <?php
      $query = "SELECT sum(grade14) as totalavg34 FROM `secondyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputn2 = $row['totalavg34'];
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

	var avgo2= parseFloat(
    <?php
      $query = "SELECT sum(grade15) as totalavg35 FROM `secondyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputo2 = $row['totalavg35'];
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

	var avgp2= parseFloat(
    <?php
      $query = "SELECT sum(grade16) as totalavg36 FROM `secondyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputp2 = $row['totalavg36'];
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

	var avgq2= parseFloat(
    <?php
      $query = "SELECT sum(grade17) as totalavg37 FROM `secondyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputq2 = $row['totalavg37'];
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

	var avgr2= parseFloat(
    <?php
      $query = "SELECT sum(grade18) as totalavg38 FROM `secondyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputr2 = $row['totalavg38'];
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

	var avgs2= parseFloat(
    <?php
      $query = "SELECT sum(grade19) as totalavg39 FROM `secondyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputs2 = $row['totalavg39'];
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

	var avgt2= parseFloat(
    <?php
      $query = "SELECT sum(grade20) as totalavg40 FROM `secondyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputt2 = $row['totalavg40'];
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


	var avgaa2=parseFloat(<?php echo $outputa2; ?>);
	var avgbb2=parseFloat(<?php echo $outputb2; ?>);
	var avgcc2=parseFloat(<?php echo $outputc2; ?>);
	var avgdd2=parseFloat(<?php echo $outputd2; ?>);
	var avgee2=parseFloat(<?php echo $outpute2; ?>);
	var avgff2=parseFloat(<?php echo $outputf2; ?>);
	var avggg2=parseFloat(<?php echo $outputg2; ?>);
	var avghh2=parseFloat(<?php echo $outputh2; ?>);
	var avgii2=parseFloat(<?php echo $outputi2; ?>);
	var avgjj2=parseFloat(<?php echo $outputj2; ?>);
	var avgkk2=parseFloat(<?php echo $outputk2; ?>);
	var avgll2=parseFloat(<?php echo $outputl2; ?>);
	var avgmm2=parseFloat(<?php echo $outputm2; ?>);
	var avgnn2=parseFloat(<?php echo $outputn2; ?>);
	var avgoo2=parseFloat(<?php echo $outputo2; ?>);
	var avgpp2=parseFloat(<?php echo $outputp2; ?>);
	var avgqq2=parseFloat(<?php echo $outputq2; ?>);
	var avgrr2=parseFloat(<?php echo $outputr2; ?>);
	var avgss2=parseFloat(<?php echo $outputs2; ?>);
	var avgtt2=parseFloat(<?php echo $outputt2; ?>);


	var avgres21=parseFloat(u1*avgaa2);
	var avgres22=parseFloat(v1*avgbb2);
	var avgres23=parseFloat(w1*avgcc2);
	var avgres24=parseFloat(x1*avgdd2);
	var avgres25=parseFloat(y1*avgee2);
	var avgres26=parseFloat(z1*avgff2);
	var avgres27=parseFloat(aa1*avggg2);
	var avgres28=parseFloat(bb1*avghh2);
	var avgres29=parseFloat(cc1*avgii2);
	var avgres30=parseFloat(dd1*avgjj2);
	var avgres31=parseFloat(ee1*avgkk2);
	var avgres32=parseFloat(ff1*avgll2);
	var avgres33=parseFloat(gg1*avgmm2);
	var avgres34=parseFloat(hh1*avgnn2);
	var avgres35=parseFloat(ii1*avgoo2);
	var avgres36=parseFloat(jj1*avgpp2);
	var avgres37=parseFloat(kk1*avgqq2);
	var avgres38=parseFloat(ll1*avgrr2);
	var avgres39=parseFloat(mm1*avgss2);
	var avgres40=parseFloat(nn1*avgtt2);

	document.getElementById('sum21').innerHTML=avgres21;
	document.getElementById('sum22').innerHTML=avgres22;
	document.getElementById('sum23').innerHTML=avgres23;
	document.getElementById('sum24').innerHTML=avgres24;
	document.getElementById('sum25').innerHTML=avgres25;
	document.getElementById('sum26').innerHTML=avgres26;
	document.getElementById('sum27').innerHTML=avgres27;
	document.getElementById('sum28').innerHTML=avgres28;
	document.getElementById('sum29').innerHTML=avgres29;
	document.getElementById('sum30').innerHTML=avgres30;
	document.getElementById('sum31').innerHTML=avgres31;
	document.getElementById('sum32').innerHTML=avgres32;
	document.getElementById('sum33').innerHTML=avgres33;
	document.getElementById('sum34').innerHTML=avgres34;
	document.getElementById('sum35').innerHTML=avgres35;
	document.getElementById('sum36').innerHTML=avgres36;
	document.getElementById('sum37').innerHTML=avgres37;
	document.getElementById('sum38').innerHTML=avgres38;
	document.getElementById('sum39').innerHTML=avgres39;
	document.getElementById('sum40').innerHTML=avgres40;

	var avgsumres3=avgres21+avgres22+avgres23+avgres24+avgres25+avgres26+avgres27+avgres28+avgres29+avgres30;

	var avgsumres4=avgres31+avgres32+avgres33+avgres34+avgres35+avgres36+avgres37+avgres38+avgres39+avgres40;

	document.getElementById('sumres3').innerHTML=avgsumres3;
	document.getElementById('sumres4').innerHTML=avgsumres4;














































	var oo= parseInt(
    <?php
      $query = "SELECT sum(units) as total FROM `thirdyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output41 = $row['total'];
      }
      ?>
      );

	var avga3= parseFloat(
    <?php
      $query = "SELECT sum(grade) as totalavg41 FROM `thirdyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputa3 = $row['totalavg41'];
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

	var avgb3= parseFloat(
    <?php
      $query = "SELECT sum(grade2) as totalavg42 FROM `thirdyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputb3 = $row['totalavg42'];
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

	var avgc3= parseFloat(
    <?php
      $query = "SELECT sum(grade3) as totalavg43 FROM `thirdyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputc3 = $row['totalavg43'];
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

	var avgd3= parseFloat(
    <?php
      $query = "SELECT sum(grade4) as totalavg44 FROM `thirdyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputd3 = $row['totalavg44'];
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

	var avge3= parseFloat(
    <?php
      $query = "SELECT sum(grade5) as totalavg45 FROM `thirdyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outpute3 = $row['totalavg45'];
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

	var avgf3= parseFloat(
    <?php
      $query = "SELECT sum(grade6) as totalavg46 FROM `thirdyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputf3 = $row['totalavg46'];
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

	var avgg3= parseFloat(
    <?php
      $query = "SELECT sum(grade7) as totalavg47 FROM `thirdyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputg3 = $row['totalavg47'];
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

	var avgh3= parseFloat(
    <?php
      $query = "SELECT sum(grade8) as totalavg48 FROM `thirdyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputh3 = $row['totalavg48'];
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

	var avgi3= parseFloat(
    <?php
      $query = "SELECT sum(grade9) as totalavg49 FROM `thirdyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputi3 = $row['totalavg49'];
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

	var avgj3= parseFloat(
    <?php
      $query = "SELECT sum(grade10) as totalavg50 FROM `thirdyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputj3 = $row['totalavg50'];
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

	var avgk3= parseFloat(
    <?php
      $query = "SELECT sum(grade11) as totalavg51 FROM `thirdyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputk3 = $row['totalavg51'];
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

	var avgl3= parseFloat(
    <?php
      $query = "SELECT sum(grade12) as totalavg52 FROM `thirdyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputl3 = $row['totalavg52'];
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

	var avgm3= parseFloat(
    <?php
      $query = "SELECT sum(grade13) as totalavg53 FROM `thirdyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputm3 = $row['totalavg53'];
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

	var avgn3= parseFloat(
    <?php
      $query = "SELECT sum(grade14) as totalavg54 FROM `thirdyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputn3 = $row['totalavg54'];
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

	var avgo3= parseFloat(
    <?php
      $query = "SELECT sum(grade15) as totalavg55 FROM `thirdyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputo3 = $row['totalavg55'];
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

	var avgp3= parseFloat(
    <?php
      $query = "SELECT sum(grade16) as totalavg56 FROM `thirdyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputp3 = $row['totalavg56'];
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

	var avgq3= parseFloat(
    <?php
      $query = "SELECT sum(grade17) as totalavg57 FROM `thirdyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputq3 = $row['totalavg57'];
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

	var avgr3= parseFloat(
    <?php
      $query = "SELECT sum(grade18) as totalavg58 FROM `thirdyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputr3 = $row['totalavg58'];
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

	var avgs3= parseFloat(
    <?php
      $query = "SELECT sum(grade19) as totalavg59 FROM `thirdyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputs3 = $row['totalavg59'];
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

	var avgt3= parseFloat(
    <?php
      $query = "SELECT sum(grade20) as totalavg60 FROM `thirdyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputt3 = $row['totalavg60'];
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

	var avgaa3=parseFloat(<?php echo $outputa3; ?>);
	var avgbb3=parseFloat(<?php echo $outputb3; ?>);
	var avgcc3=parseFloat(<?php echo $outputc3; ?>);
	var avgdd3=parseFloat(<?php echo $outputd3; ?>);
	var avgee3=parseFloat(<?php echo $outpute3; ?>);
	var avgff3=parseFloat(<?php echo $outputf3; ?>);
	var avggg3=parseFloat(<?php echo $outputg3; ?>);
	var avghh3=parseFloat(<?php echo $outputh3; ?>);
	var avgii3=parseFloat(<?php echo $outputi3; ?>);
	var avgjj3=parseFloat(<?php echo $outputj3; ?>);
	var avgkk3=parseFloat(<?php echo $outputk3; ?>);
	var avgll3=parseFloat(<?php echo $outputl3; ?>);
	var avgmm3=parseFloat(<?php echo $outputm3; ?>);
	var avgnn3=parseFloat(<?php echo $outputn3; ?>);
	var avgoo3=parseFloat(<?php echo $outputo3; ?>);
	var avgpp3=parseFloat(<?php echo $outputp3; ?>);
	var avgqq3=parseFloat(<?php echo $outputq3; ?>);
	var avgrr3=parseFloat(<?php echo $outputr3; ?>);
	var avgss3=parseFloat(<?php echo $outputs3; ?>);
	var avgtt3=parseFloat(<?php echo $outputt3; ?>);


	var avgres41=parseFloat(oo1*avgaa3);
	var avgres42=parseFloat(pp1*avgbb3);
	var avgres43=parseFloat(qq1*avgcc3);
	var avgres44=parseFloat(rr1*avgdd3);
	var avgres45=parseFloat(ss1*avgee3);
	var avgres46=parseFloat(tt1*avgff3);
	var avgres47=parseFloat(uu1*avggg3);
	var avgres48=parseFloat(vv1*avghh3);
	var avgres49=parseFloat(ww1*avgii3);
	var avgres50=parseFloat(xx1*avgjj3);
	var avgres51=parseFloat(yy1*avgkk3);
	var avgres52=parseFloat(zz1*avgll3);
	var avgres53=parseFloat(aaa1*avgmm3);
	var avgres54=parseFloat(bbb1*avgnn3);
	var avgres55=parseFloat(ccc1*avgoo3);
	var avgres56=parseFloat(ddd1*avgpp3);
	var avgres57=parseFloat(eee1*avgqq3);
	var avgres58=parseFloat(fff1*avgrr3);
	var avgres59=parseFloat(ggg1*avgss3);
	var avgres60=parseFloat(hhh1*avgtt3);

	document.getElementById('sum41').innerHTML=avgres41;
	document.getElementById('sum42').innerHTML=avgres42;
	document.getElementById('sum43').innerHTML=avgres43;
	document.getElementById('sum44').innerHTML=avgres44;
	document.getElementById('sum45').innerHTML=avgres45;
	document.getElementById('sum46').innerHTML=avgres46;
	document.getElementById('sum47').innerHTML=avgres47;
	document.getElementById('sum48').innerHTML=avgres48;
	document.getElementById('sum49').innerHTML=avgres49;
	document.getElementById('sum50').innerHTML=avgres50;
	document.getElementById('sum51').innerHTML=avgres51;
	document.getElementById('sum52').innerHTML=avgres52;
	document.getElementById('sum53').innerHTML=avgres53;
	document.getElementById('sum54').innerHTML=avgres54;
	document.getElementById('sum55').innerHTML=avgres55;
	document.getElementById('sum56').innerHTML=avgres56;
	document.getElementById('sum57').innerHTML=avgres57;
	document.getElementById('sum58').innerHTML=avgres58;
	document.getElementById('sum59').innerHTML=avgres59;
	document.getElementById('sum60').innerHTML=avgres60;

	var avgsumres5=avgres41+avgres42+avgres43+avgres44+avgres45+avgres46+avgres47+avgres48+avgres49+avgres50;

	var avgsumres6=avgres51+avgres52+avgres53+avgres54+avgres55+avgres56+avgres57+avgres58+avgres59+avgres60;

	document.getElementById('sumres5').innerHTML=avgsumres5;
	document.getElementById('sumres6').innerHTML=avgsumres6;




















































	var iii= parseInt(
    <?php
      $query = "SELECT sum(units) as total FROM `midyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output61 = $row['total'];
      }
      ?>
      );

	var avga4= parseFloat(
    <?php
      $query = "SELECT sum(grade) as totalavg61 FROM `midyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputa4 = $row['totalavg61'];
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

	var avgb4= parseFloat(
    <?php
      $query = "SELECT sum(grade2) as totalavg62 FROM `midyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputb4 = $row['totalavg62'];
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

	var avgc4= parseFloat(
    <?php
      $query = "SELECT sum(grade3) as totalavg63 FROM `midyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputc4 = $row['totalavg63'];
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

	var avgd4= parseFloat(
    <?php
      $query = "SELECT sum(grade4) as totalavg64 FROM `midyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputd4 = $row['totalavg64'];
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

	var avge4= parseFloat(
    <?php
      $query = "SELECT sum(grade5) as totalavg65 FROM `midyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outpute4 = $row['totalavg65'];
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

	var avgf4= parseFloat(
    <?php
      $query = "SELECT sum(grade6) as totalavg66 FROM `midyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputf4 = $row['totalavg66'];
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

	var avgg4= parseFloat(
    <?php
      $query = "SELECT sum(grade7) as totalavg67 FROM `midyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputg4 = $row['totalavg67'];
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

	var avgh4= parseFloat(
    <?php
      $query = "SELECT sum(grade8) as totalavg68 FROM `midyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputh4 = $row['totalavg68'];
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

	var avgi4= parseFloat(
    <?php
      $query = "SELECT sum(grade9) as totalavg69 FROM `midyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputi4 = $row['totalavg69'];
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

	var avgj4= parseFloat(
    <?php
      $query = "SELECT sum(grade10) as totalavg70 FROM `midyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputj4 = $row['totalavg70'];
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


	var avgaa4=parseFloat(<?php echo $outputa4; ?>);
	var avgbb4=parseFloat(<?php echo $outputb4; ?>);
	var avgcc4=parseFloat(<?php echo $outputc4; ?>);
	var avgdd4=parseFloat(<?php echo $outputd4; ?>);
	var avgee4=parseFloat(<?php echo $outpute4; ?>);
	var avgff4=parseFloat(<?php echo $outputf4; ?>);
	var avggg4=parseFloat(<?php echo $outputg4; ?>);
	var avghh4=parseFloat(<?php echo $outputh4; ?>);
	var avgii4=parseFloat(<?php echo $outputi4; ?>);
	var avgjj4=parseFloat(<?php echo $outputj4; ?>);

	var avgres61=parseFloat(iii1*avgaa4);
	var avgres62=parseFloat(jjj1*avgbb4);
	var avgres63=parseFloat(kkk1*avgcc4);
	var avgres64=parseFloat(lll1*avgdd4);
	var avgres65=parseFloat(mmm1*avgee4);
	var avgres66=parseFloat(nnn1*avgff4);
	var avgres67=parseFloat(ooo1*avggg4);
	var avgres68=parseFloat(ppp1*avghh4);
	var avgres69=parseFloat(qqq1*avgii4);
	var avgres70=parseFloat(rrr1*avgjj4);


	document.getElementById('sum61').innerHTML=avgres61;
	document.getElementById('sum62').innerHTML=avgres62;
	document.getElementById('sum63').innerHTML=avgres63;
	document.getElementById('sum64').innerHTML=avgres64;
	document.getElementById('sum65').innerHTML=avgres65;
	document.getElementById('sum66').innerHTML=avgres66;
	document.getElementById('sum67').innerHTML=avgres67;
	document.getElementById('sum68').innerHTML=avgres68;
	document.getElementById('sum69').innerHTML=avgres69;
	document.getElementById('sum70').innerHTML=avgres70;

	var avgsumres7=avgres61+avgres62+avgres63+avgres64+avgres65+avgres66+avgres67+avgres68+avgres69+avgres70;

	document.getElementById('sumres7').innerHTML=avgsumres7;











































	var sss= parseInt(
    <?php
      $query = "SELECT sum(units) as total FROM `fourthyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$output71 = $row['total'];
      }
      ?>
      );

	var avga5= parseFloat(
    <?php
      $query = "SELECT sum(grade) as totalavg71 FROM `fourthyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputa5 = $row['totalavg71'];
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

	var avgb5= parseFloat(
    <?php
      $query = "SELECT sum(grade2) as totalavg72 FROM `fourthyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputb5 = $row['totalavg72'];
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

	var avgc5= parseFloat(
    <?php
      $query = "SELECT sum(grade3) as totalavg73 FROM `fourthyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputc5 = $row['totalavg73'];
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

	var avgd5= parseFloat(
    <?php
      $query = "SELECT sum(grade4) as totalavg74 FROM `fourthyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputd5 = $row['totalavg74'];
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

	var avge5= parseFloat(
    <?php
      $query = "SELECT sum(grade5) as totalavg75 FROM `fourthyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outpute5 = $row['totalavg75'];
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

	var avgf5= parseFloat(
    <?php
      $query = "SELECT sum(grade6) as totalavg76 FROM `fourthyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputf5 = $row['totalavg76'];
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

	var avgg5= parseFloat(
    <?php
      $query = "SELECT sum(grade7) as totalavg77 FROM `fourthyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputg5 = $row['totalavg77'];
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

	var avgh5= parseFloat(
    <?php
      $query = "SELECT sum(grade8) as totalavg78 FROM `fourthyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputh5 = $row['totalavg78'];
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

	var avgi5= parseFloat(
    <?php
      $query = "SELECT sum(grade9) as totalavg79 FROM `fourthyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputi5 = $row['totalavg79'];
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

	var avgj5= parseFloat(
    <?php
      $query = "SELECT sum(grade10) as totalavg80 FROM `fourthyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputj5 = $row['totalavg80'];
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

	var avgk5= parseFloat(
    <?php
      $query = "SELECT sum(grade11) as totalavg81 FROM `fourthyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputk5 = $row['totalavg81'];
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

	var avgl5= parseFloat(
    <?php
      $query = "SELECT sum(grade12) as totalavg82 FROM `fourthyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputl5 = $row['totalavg82'];
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

	var avgm5= parseFloat(
    <?php
      $query = "SELECT sum(grade13) as totalavg83 FROM `fourthyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputm5 = $row['totalavg83'];
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

	var avgn5= parseFloat(
    <?php
      $query = "SELECT sum(grade14) as totalavg84 FROM `fourthyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputn5 = $row['totalavg84'];
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

	var avgo5= parseFloat(
    <?php
      $query = "SELECT sum(grade15) as totalavg85 FROM `fourthyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputo5 = $row['totalavg85'];
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

	var avgp5= parseFloat(
    <?php
      $query = "SELECT sum(grade16) as totalavg86 FROM `fourthyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputp5 = $row['totalavg86'];
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

	var avgq5= parseFloat(
    <?php
      $query = "SELECT sum(grade17) as totalavg87 FROM `fourthyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputq5 = $row['totalavg87'];
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

	var avgr5= parseFloat(
    <?php
      $query = "SELECT sum(grade18) as totalavg88 FROM `fourthyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputr5 = $row['totalavg88'];
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

	var avgs5= parseFloat(
    <?php
      $query = "SELECT sum(grade19) as totalavg89 FROM `fourthyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputs5 = $row['totalavg89'];
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

	var avgt5= parseFloat(
    <?php
      $query = "SELECT sum(grade20) as totalavg90 FROM `fourthyearis` WHERE `name`= '$name'";
      $results = mysqli_query($link,$query);

      while($row = mysqli_fetch_Assoc($results)){
      	$outputt5 = $row['totalavg90'];
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

	var avgaa5=parseFloat(<?php echo $outputa5; ?>);
	var avgbb5=parseFloat(<?php echo $outputb5; ?>);
	var avgcc5=parseFloat(<?php echo $outputc5; ?>);
	var avgdd5=parseFloat(<?php echo $outputd5; ?>);
	var avgee5=parseFloat(<?php echo $outpute5; ?>);
	var avgff5=parseFloat(<?php echo $outputf5; ?>);
	var avggg5=parseFloat(<?php echo $outputg5; ?>);
	var avghh5=parseFloat(<?php echo $outputh5; ?>);
	var avgii5=parseFloat(<?php echo $outputi5; ?>);
	var avgjj5=parseFloat(<?php echo $outputj5; ?>);
	var avgkk5=parseFloat(<?php echo $outputk5; ?>);
	var avgll5=parseFloat(<?php echo $outputl5; ?>);
	var avgmm5=parseFloat(<?php echo $outputm5; ?>);
	var avgnn5=parseFloat(<?php echo $outputn5; ?>);
	var avgoo5=parseFloat(<?php echo $outputo5; ?>);
	var avgpp5=parseFloat(<?php echo $outputp5; ?>);
	var avgqq5=parseFloat(<?php echo $outputq5; ?>);
	var avgrr5=parseFloat(<?php echo $outputr5; ?>);
	var avgss5=parseFloat(<?php echo $outputs5; ?>);
	var avgtt5=parseFloat(<?php echo $outputt5; ?>);


	var avgres71=parseFloat(sss1*avgaa5);
	var avgres72=parseFloat(ttt1*avgbb5);
	var avgres73=parseFloat(uuu1*avgcc5);
	var avgres74=parseFloat(vvv1*avgdd5);
	var avgres75=parseFloat(www1*avgee5);
	var avgres76=parseFloat(xxx1*avgff5);
	var avgres77=parseFloat(yyy1*avggg5);
	var avgres78=parseFloat(zzz1*avghh5);
	var avgres79=parseFloat(aaaa1*avgii5);
	var avgres80=parseFloat(bbbb1*avgjj5);
	var avgres81=parseFloat(cccc1*avgkk5);
	var avgres82=parseFloat(dddd1*avgll5);
	var avgres83=parseFloat(eeee1*avgmm5);
	var avgres84=parseFloat(ffff1*avgnn5);
	var avgres85=parseFloat(gggg1*avgoo5);
	var avgres86=parseFloat(hhhh1*avgpp5);
	var avgres87=parseFloat(iiii1*avgqq5);
	var avgres88=parseFloat(jjjj1*avgrr5);
	var avgres89=parseFloat(kkkk1*avgss5);
	var avgres90=parseFloat(llll1*avgtt5);

	document.getElementById('sum71').innerHTML=avgres71;
	document.getElementById('sum72').innerHTML=avgres72;
	document.getElementById('sum73').innerHTML=avgres73;
	document.getElementById('sum74').innerHTML=avgres74;
	document.getElementById('sum75').innerHTML=avgres75;
	document.getElementById('sum76').innerHTML=avgres76;
	document.getElementById('sum77').innerHTML=avgres77;
	document.getElementById('sum78').innerHTML=avgres78;
	document.getElementById('sum79').innerHTML=avgres79;
	document.getElementById('sum80').innerHTML=avgres80;
	document.getElementById('sum81').innerHTML=avgres81;
	document.getElementById('sum82').innerHTML=avgres82;
	document.getElementById('sum83').innerHTML=avgres83;
	document.getElementById('sum84').innerHTML=avgres84;
	document.getElementById('sum85').innerHTML=avgres85;
	document.getElementById('sum86').innerHTML=avgres86;
	document.getElementById('sum87').innerHTML=avgres87;
	document.getElementById('sum88').innerHTML=avgres88;
	document.getElementById('sum89').innerHTML=avgres89;
	document.getElementById('sum90').innerHTML=avgres90;

	var avgsumres8=avgres71+avgres72+avgres73+avgres74+avgres75+avgres76+avgres77+avgres78+avgres79+avgres80;

	var avgsumres9=avgres81+avgres82+avgres83+avgres84+avgres85+avgres86+avgres87+avgres88+avgres89+avgres90;

	document.getElementById('sumres8').innerHTML=avgsumres8;
	document.getElementById('sumres9').innerHTML=avgsumres9;


























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







	var finalres=(avgsumres/total).toFixed(2);
	var finalres2=(avgsumres2/total2).toFixed(2);
	var finalres3=(avgsumres3/total3).toFixed(2);
	var finalres4=(avgsumres4/total4).toFixed(2);
	var finalres5=(avgsumres5/total5).toFixed(2);
	var finalres6=(avgsumres6/total6).toFixed(2);
	var finalres7=(avgsumres7/total7).toFixed(2);
	var finalres8=(avgsumres8/total8).toFixed(2);
	var finalres9=(avgsumres9/total9).toFixed(2);
	document.getElementById('avg').innerHTML=finalres;
	document.getElementById('avg2').innerHTML=finalres2;
	document.getElementById('avg3').innerHTML=finalres3;
	document.getElementById('avg4').innerHTML=finalres4;
	document.getElementById('avg5').innerHTML=finalres5;
	document.getElementById('avg6').innerHTML=finalres6;
	document.getElementById('avg7').innerHTML=finalres7;
	document.getElementById('avg8').innerHTML=finalres8;
	document.getElementById('avg9').innerHTML=finalres9;


	genavgres=avgsumres+avgsumres2;
	genavgrescopy=total+total2;
	genavgresfinalcopy=(genavgres/genavgrescopy).toFixed(2);

	document.getElementById('genavg').innerHTML=genavgresfinalcopy;
	if(genavgresfinalcopy < 1.76){
      document.getElementById('genavg').style.backgroundColor="green";
      document.getElementById('genavg').style.color="white";
  }else if(finalgenavgcopy < 2.25){
      document.getElementById('finalgenavg').style.backgroundColor="blue";
      document.getElementById('finalgenavg').style.color="white";
  }else{
      document.getElementById('genavg').style.backgroundColor="red";
      document.getElementById('genavg').style.color="white";
  }



  genavgres2=avgsumres3+avgsumres4;
	genavgrescopy2=total3+total4;
	genavgresfinalcopy2=(genavgres2/genavgrescopy2).toFixed(2);

	document.getElementById('genavg2').innerHTML=genavgresfinalcopy2;
	if(genavgresfinalcopy2 < 1.76){
      document.getElementById('genavg2').style.backgroundColor="green";
      document.getElementById('genavg2').style.color="white";
  }else{
      document.getElementById('genavg2').style.backgroundColor="red";
      document.getElementById('genavg2').style.color="white";
  }



  genavgres3=avgsumres5+avgsumres6;
	genavgrescopy3=total5+total6;
	genavgresfinalcopy3=(genavgres3/genavgrescopy3).toFixed(2);

	document.getElementById('genavg3').innerHTML=genavgresfinalcopy3;
	if(genavgresfinalcopy3 < 1.76){
      document.getElementById('genavg3').style.backgroundColor="green";
      document.getElementById('genavg3').style.color="white";
  }else{
      document.getElementById('genavg3').style.backgroundColor="red";
      document.getElementById('genavg3').style.color="white";
  }


	genavgresfinalcopy4=(avgsumres7/total7).toFixed(2);

	document.getElementById('genavg4').innerHTML=genavgresfinalcopy4;
	if(genavgresfinalcopy4 < 1.76){
      document.getElementById('genavg4').style.backgroundColor="green";
      document.getElementById('genavg4').style.color="white";
  }else{
      document.getElementById('genavg4').style.backgroundColor="red";
      document.getElementById('genavg4').style.color="white";
  }



  genavgres5=avgsumres8+avgsumres9;
	genavgrescopy5=total8+total9;
	genavgresfinalcopy5=(genavgres5/genavgrescopy5).toFixed(2);



	document.getElementById('genavg5').innerHTML=genavgresfinalcopy5;
	if(genavgresfinalcopy5 < 1.76){
      document.getElementById('genavg5').style.backgroundColor="green";
      document.getElementById('genavg5').style.color="white";
  }else{
      document.getElementById('genavg5').style.backgroundColor="red";
      document.getElementById('genavg5').style.color="white";
  }







  var finalgenavgcalc=avgsumres+avgsumres2+avgsumres3+avgsumres4+avgsumres5+avgsumres6+avgsumres7+avgsumres8+avgsumres9;

  var finalgenavgcalctot=total+total2+total3+total4+total5+total6+total7+total8+total9;

 var finalgenavgcopy=(finalgenavgcalc/finalgenavgcalctot).toFixed(2);

 const subButton=document.getElementById('submitbut');




 document.getElementById('aveform').value=finalgenavgcopy;

 document.getElementById('finalgenavg').innerHTML=finalgenavgcopy;

 if(finalgenavgcopy < 1.76){
      document.getElementById('finalgenavg').style.backgroundColor="green";
      document.getElementById('finalgenavg').style.color="white";
      document.getElementById('aveform').style.backgroundColor="green";
      document.getElementById('aveform').style.color="white";
      subButton.disabled=false;
      document.getElementById('submitbut').style.backgroundColor='green';
  }else if(finalgenavgcopy < 2.25){
      document.getElementById('finalgenavg').style.backgroundColor="blue";
      document.getElementById('finalgenavg').style.color="white";
      document.getElementById('aveform').style.backgroundColor="blue";
      document.getElementById('aveform').style.color="white";
      subButton.disabled=true;
      document.getElementById('submitbut').style.backgroundColor='red';
  }else{
  	document.getElementById('finalgenavg').style.backgroundColor="red";
      document.getElementById('finalgenavg').style.color="white";
      document.getElementById('aveform').style.backgroundColor="red";
      document.getElementById('aveform').style.color="white";
      subButton.disabled=true;
      document.getElementById('submitbut').style.backgroundColor='red';
  }





  function openForm(){
        document.getElementById('form').style.display='block';
        document.getElementById('close').style.display='block';
  }

  function closeForm(){
        document.getElementById('form').style.display='none';
        document.getElementById('close').style.display='none';
  }




  function openForm2(){
        document.getElementById('form2').style.display='block';
        document.getElementById('close2').style.display='block';
  }

  function closeForm2(){
        document.getElementById('form2').style.display='none';
        document.getElementById('close2').style.display='none';
  }
</script>
<?php } ?>
</body>
</html>
