<?php
include('conn.php');
session_start();


$id=['id'];
$remarks=$_POST['remarks'];
$remarks2=$_POST['remarks2'];
$remarks3=$_POST['remarks3'];
$remarks4=$_POST['remarks4'];
$remarks5=$_POST['remarks5'];
$remarks6=$_POST['remarks6'];
$remarks7=$_POST['remarks7'];
$remarks8=$_POST['remarks8'];
$remarks9=$_POST['remarks9'];
$studentid=$_POST['studentid'];
$name=$_POST['name'];


$query="INSERT INTO remarks(`remarks`,`remarks2`,`remarks3`,`remarks4`,`remarks5`,`remarks6`,`remarks7`,`remarks8`,`remarks9`,`studentid`,`name`)VALUES('$remarks','$remarks2','$remarks3','$remarks4','$remarks5','$remarks6','$remarks7','$remarks8','$remarks9','$studentid','$name')";
$result=mysqli_query($link,$query);
if($result){
	echo "<script>alert('Remarks Have Been Submitted');
		document.location.href='admincalc.php';</script>";
}else{
	echo "<script>alert('Please Try Again');
	</script>";
}
?>




