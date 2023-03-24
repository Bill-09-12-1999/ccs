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


$sub11=$_POST['sub11'];
$section2=$_POST['section2'];
$sem2=$_POST['sem2'];
$AY2=$_POST['AY2'];
$des11=$_POST['des11'];
$units11=$_POST['units11'];
$school11=$_POST['school11'];
$grade11=$_POST['grade11'];

$sub12=$_POST['sub12'];
$des12=$_POST['des12'];
$units12=$_POST['units12'];
$school12=$_POST['school12'];
$grade12=$_POST['grade12'];

$sub13=$_POST['sub13'];
$des13=$_POST['des13'];
$units13=$_POST['units13'];
$school13=$_POST['school13'];
$grade13=$_POST['grade13'];

$sub14=$_POST['sub14'];
$des14=$_POST['des14'];
$units14=$_POST['units14'];
$school14=$_POST['school14'];
$grade14=$_POST['grade14'];

$sub15=$_POST['sub15'];
$des15=$_POST['des15'];
$units15=$_POST['units15'];
$school15=$_POST['school15'];
$grade15=$_POST['grade15'];

$sub16=$_POST['sub16'];
$des16=$_POST['des16'];
$units16=$_POST['units16'];
$school16=$_POST['school16'];
$grade16=$_POST['grade16'];

$sub17=$_POST['sub17'];
$des17=$_POST['des17'];
$units17=$_POST['units17'];
$school17=$_POST['school17'];
$grade17=$_POST['grade17'];

$sub18=$_POST['sub18'];
$des18=$_POST['des18'];
$units18=$_POST['units18'];
$school18=$_POST['school18'];
$grade18=$_POST['grade18'];

$sub19=$_POST['sub19'];
$des19=$_POST['des19'];
$units19=$_POST['units19'];
$school19=$_POST['school19'];
$grade19=$_POST['grade19'];

$sub20=$_POST['sub20'];
$des20=$_POST['des20'];
$units20=$_POST['units20'];
$school20=$_POST['school20'];
$grade20=$_POST['grade20'];


$query="UPDATE  `secondyearis` SET `sub`='$sub',`course`='$course',`section`='$section',`sem`='$sem',`AY`='$AY',`des`='$des',`units`='$units',`school`='$school',`name`='$name',`studentid`='$studentid',`grade`='$grade',`sub2`='$sub2',`des2`='$des2',`units2`='$units2',`school2`='$school2',`grade2`='$grade2',`sub3`='$sub3',`des3`='$des3',`units3`='$units3',`school3`='$school3',`grade3`='$grade3',`sub4`='$sub4',`des4`='$des4',`units4`='$units4',`school4`='$school4',`grade4`='$grade4',`sub5`='$sub5',`des5`='$des5',`units5`='$units5',`school5`='$school5',`grade5`='$grade5',`sub6`='$sub6',`des6`='$des6',`units6`='$units6',`school6`='$school6',`grade6`='$grade6',`sub7`='$sub7',`des7`='$des7',`units7`='$units7',`school7`='$school7',`grade7`='$grade7',`sub8`='$sub8',`des8`='$des8',`units8`='$units8',`school8`='$school8',`grade8`='$grade8',`sub9`='$sub9',`des9`='$des9',`units9`='$units9',`school9`='$school9',`grade9`='$grade9',`sub10`='$sub10',`des10`='$des10',`units10`='$units10',`school10`='$school10',`grade10`='$grade10',`sub11`='$sub11',`section2`='$section2',`sem2`='$sem2',`AY2`='$AY2',`des11`='$des11',`units11`='$units11',`school11`='$school11',`grade11`='$grade11',`sub12`='$sub12',`des12`='$des12',`units12`='$units12',`school12`='$school12',`grade12`='$grade12',`sub13`='$sub13',`des13`='$des13',`units13`='$units13',`school13`='$school13',`grade13`='$grade13',`sub14`='$sub14',`des14`='$des14',`units14`='$units14',`school14`='$school14',`grade14`='$grade14',`sub15`='$sub15',`des15`='$des15',`units15`='$units15',`school15`='$school15',`grade15`='$grade15',`sub16`='$sub16',`des16`='$des16',`units16`='$units16',`school16`='$school16',`grade16`='$grade16',`sub17`='$sub17',`des17`='$des17',`units17`='$units17',`school17`='$school17',`grade17`='$grade17',`sub18`='$sub18',`des18`='$des18',`units18`='$units18',`school18`='$school18',`grade18`='$grade18',`sub19`='$sub19',`des19`='$des19',`units19`='$units19',`school19`='$school19',`grade19`='$grade19',`sub20`='$sub20',`des20`='$des20',`units20`='$units20',`school20`='$school20',`grade20`='$grade20' WHERE `name`='$name'";

$result=mysqli_query($link,$query);
if($result){
	echo "<script>alert('Added/Updated Successfully');
		document.location.href='facultyupdaterog.php'</script>";
}else{
	echo "<script>alert('Error!!!');
		document.location.href='facultyupdaterog.php'</script>";
}

?>