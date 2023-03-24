<?php
$link = mysqli_connect("localhost","root","","portal");
if(mysqli_connect_error()) {
	die("There is error connecting to the Database");
}

$id=['id'];
$studentid=$_POST['studentid'];
$subject1=$_POST['subject1'];
$subject2=$_POST['subject2'];
$subject3=$_POST['subject3'];
$subject4=$_POST['subject4'];
$subject5=$_POST['subject5'];
$subject6=$_POST['subject6'];
$subject7=$_POST['subject7'];
$subject8=$_POST['subject8'];
$subject9=$_POST['subject9'];
$subject10=$_POST['subject10'];
$reminder=$_POST['reminder'];




$query="INSERT INTO `message1`(`studentid`, `subject1`, `subject2`, `subject3`, `subject4`, `subject5`, `subject6`, `subject7`, `subject8`, `subject9`, `subject10`, `reminder`) VALUES ('$studentid','$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8','$subject9','$subject10','$reminder')";

$result=mysqli_query($link,$query);
if($result){
	echo "<script>alert('Sent Message Successfully!!!');
			document.location.href='admingradereports.php';</script>";
}else{
	echo "<script>alert('Error');
			document.location.href='admingradereports.php';</script>";
}

?>
