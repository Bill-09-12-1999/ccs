<?php
include('conn.php');
session_start();


$id=['id'];
$ave=$_POST['ave'];
$studentid=$_POST['studentid'];
$name=$_POST['name'];


$query="INSERT INTO deanslisteris(`ave`,`studentid`,`name`)VALUES('$ave','$studentid','$name')";
$result=mysqli_query($link,$query);
if($result){

	echo "<script>alert('Student had been set as Deans Lister');
		document.location.href='admincalc.php';</script>";

}else{
	echo "<script>alert('Error!!!');
	document.location.href='admincalc.php';</script>";
}
?>




