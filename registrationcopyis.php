<?php
$link = mysqli_connect("localhost","root","","portal");
if(mysqli_connect_error()) {
	die("There is error connecting to the Database");
}

$id=['id'];
$name=$_POST['name'];
$age=$_POST['age'];
$sex=$_POST['sex'];
$email=$_POST['email'];
$elem=$_POST['elem'];
$elemG=$_POST['elemG'];
$jhs=$_POST['jhs'];
$jhsG=$_POST['jhsG'];
$shs=$_POST['shs'];
$shsG=$_POST['shsG'];

$query="INSERT INTO registrationis(`name`,`age`,`sex`,`email`,`elem`,`elemG`,`jhs`,`jhsG`,`shs`,`shsG`)VALUES('$name','$age','$sex','$email','$elem','$elemG','$jhs','$jhsG','$shs','$shsG')";
$result=mysqli_query($link,$query);
if($result){
	echo "<script>alert('Your Registration is now complete');
		document.location.href='BSISstudent.php';</script>";
}else{
	echo "<script>alert('Please try again')</script>";
}
?>

<?php
$studentid=$_POST['studentid'];
$password=$_POST['password'];

$query="INSERT INTO useris(`studentid`,`password`)VALUES('$studentid','$password')";
$result=mysqli_query($link,$query);
?>




