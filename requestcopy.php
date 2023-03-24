<?php
$link = mysqli_connect("localhost","root","","portal");
if(mysqli_connect_error()) {
	die("There is error connecting to the Database");
}

$id=['id'];
$sender=$_POST['sender'];
$student=$_POST['student'];
$courseno=$_POST['courseno'];
$des=$_POST['des'];



$query="INSERT INTO request(`sender`,`student`,`courseno`,`des`)VALUES('$sender','$student','$courseno','$des')";
$result=mysqli_query($link,$query);
if($result){
	echo "<script>alert('Message Sent!');
		document.location.href='clerkrognew.php';</script>";
}else{
	echo "<script>alert('Error');
			document.location.href='clerkrognew.php';</script>";
}
?>

<?php
$studentid=$_POST['studentid'];
$password=$_POST['password'];

$query="INSERT INTO user(`studentid`,`password`)VALUES('$studentid','$password')";
$result=mysqli_query($link,$query);
?>




