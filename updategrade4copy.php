<?php
include('conn.php');
session_start();

$sub=$_POST['sub'];
$course=$_POST['course'];
$section=$_POST['section'];
$sem=$_POST['sem'];
$AY=$_POST['AY'];
$des=$_POST['des'];
$units=$_POST['units'];
$school=$_POST['school'];
$name=$_POST['name'];
$studentid=$_POST['studentid'];
$grade=$_POST['grade'];

$sub2=$_POST['sub2'];
$des2=$_POST['des2'];
$units2=$_POST['units2'];
$school2=$_POST['school2'];
$grade2=$_POST['grade2'];

$sub3=$_POST['sub3'];
$des3=$_POST['des3'];
$units3=$_POST['units3'];
$school3=$_POST['school3'];
$grade3=$_POST['grade3'];

$sub4=$_POST['sub4'];
$des4=$_POST['des4'];
$units4=$_POST['units4'];
$school4=$_POST['school4'];
$grade4=$_POST['grade4'];

$sub5=$_POST['sub5'];
$des5=$_POST['des5'];
$units5=$_POST['units5'];
$school5=$_POST['school5'];
$grade5=$_POST['grade5'];

$sub6=$_POST['sub6'];
$des6=$_POST['des6'];
$units6=$_POST['units6'];
$school6=$_POST['school6'];
$grade6=$_POST['grade6'];

$sub7=$_POST['sub7'];
$des7=$_POST['des7'];
$units7=$_POST['units7'];
$school7=$_POST['school7'];
$grade7=$_POST['grade7'];

$sub8=$_POST['sub8'];
$des8=$_POST['des8'];
$units8=$_POST['units8'];
$school8=$_POST['school8'];
$grade8=$_POST['grade8'];

$sub9=$_POST['sub9'];
$des9=$_POST['des9'];
$units9=$_POST['units9'];
$school9=$_POST['school9'];
$grade9=$_POST['grade9'];

$sub10=$_POST['sub10'];
$des10=$_POST['des10'];
$units10=$_POST['units10'];
$school10=$_POST['school10'];
$grade10=$_POST['grade10'];



$query="UPDATE  `midyear` SET `sub`='$sub',`course`='$course',`section`='$section',`sem`='$sem',`AY`='$AY',`des`='$des',`units`='$units',`school`='$school',`name`='$name',`studentid`='$studentid',`grade`='$grade',`sub2`='$sub2',`des2`='$des2',`units2`='$units2',`school2`='$school2',`grade2`='$grade2',`sub3`='$sub3',`des3`='$des3',`units3`='$units3',`school3`='$school3',`grade3`='$grade3',`sub4`='$sub4',`des4`='$des4',`units4`='$units4',`school4`='$school4',`grade4`='$grade4',`sub5`='$sub5',`des5`='$des5',`units5`='$units5',`school5`='$school5',`grade5`='$grade5',`sub6`='$sub6',`des6`='$des6',`units6`='$units6',`school6`='$school6',`grade6`='$grade6',`sub7`='$sub7',`des7`='$des7',`units7`='$units7',`school7`='$school7',`grade7`='$grade7',`sub8`='$sub8',`des8`='$des8',`units8`='$units8',`school8`='$school8',`grade8`='$grade8',`sub9`='$sub9',`des9`='$des9',`units9`='$units9',`school9`='$school9',`grade9`='$grade9',`sub10`='$sub10',`des10`='$des10',`units10`='$units10',`school10`='$school10',`grade10`='$grade10' WHERE `name`='$name'";

$result=mysqli_query($link,$query);
if($result){
	echo "<script>alert('Added/Updated Successfully');
		document.location.href='facultyupdaterog.php'</script>";
}else{
	echo "<script>alert('Error!!!');
		document.location.href='facultyupdaterog.php'</script>";
}

?>