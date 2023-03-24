<?php
	require_once'conn.php';
	
	if(ISSET($_REQUEST['name'])){
		$name=$_REQUEST['name'];
		
		$query=mysqli_query($link, "SELECT * FROM `archive` WHERE `name`='$name'") or die(mysqli_error());
		$fetch=mysqli_fetch_array($query);
		$id=['id'];
		$sub=$fetch['sub'];
		$course=$fetch['course'];
		$section=$fetch['section'];
		$sem=$fetch['sem'];
		$AY=$fetch['AY'];
		$des=$fetch['des'];
		$units=$fetch['units'];
		$school=$fetch['school'];
		$name=$fetch['name'];
		$studentid=$fetch['studentid'];
		$grade=$fetch['grade'];

		$sub2=$fetch['sub2'];
		$des2=$fetch['des2'];
		$units2=$fetch['units2'];
		$school2=$fetch['school2'];
		$grade2=$fetch['grade2'];

		$sub3=$fetch['sub3'];
		$des3=$fetch['des3'];
		$units3=$fetch['units3'];
		$school3=$fetch['school3'];
		$grade3=$fetch['grade3'];

		$sub4=$fetch['sub4'];
		$des4=$fetch['des4'];
		$units4=$fetch['units4'];
		$school4=$fetch['school4'];
		$grade4=$fetch['grade4'];

		$sub5=$fetch['sub5'];
		$des5=$fetch['des5'];
		$units5=$fetch['units5'];
		$school5=$fetch['school5'];
		$grade5=$fetch['grade5'];

		$sub6=$fetch['sub6'];
		$des6=$fetch['des6'];
		$units6=$fetch['units6'];
		$school6=$fetch['school6'];
		$grade6=$fetch['grade6'];

		$sub7=$fetch['sub7'];
		$des7=$fetch['des7'];
		$units7=$fetch['units7'];
		$school7=$fetch['school7'];
		$grade7=$fetch['grade7'];

		$sub8=$fetch['sub8'];
		$des8=$fetch['des8'];
		$units8=$fetch['units8'];
		$school8=$fetch['school8'];
		$grade8=$fetch['grade8'];

		$sub9=$fetch['sub9'];
		$des9=$fetch['des9'];
		$units9=$fetch['units9'];
		$school9=$fetch['school9'];
		$grade9=$fetch['grade9'];

		$sub10=$fetch['sub10'];
		$des10=$fetch['des10'];
		$units10=$fetch['units10'];
		$school10=$fetch['school10'];
		$grade10=$fetch['grade10'];


		$sub11=$fetch['sub11'];
		$section2=$fetch['section2'];
		$sem2=$fetch['sem2'];
		$AY2=$fetch['AY2'];
		$des11=$fetch['des11'];
		$units11=$fetch['units11'];
		$school11=$fetch['school11'];
		$grade11=$fetch['grade11'];

		$sub12=$fetch['sub12'];
		$des12=$fetch['des12'];
		$units12=$fetch['units12'];
		$school12=$fetch['school12'];
		$grade12=$fetch['grade12'];

		$sub13=$fetch['sub13'];
		$des13=$fetch['des13'];
		$units13=$fetch['units13'];
		$school13=$fetch['school13'];
		$grade13=$fetch['grade13'];

		$sub14=$fetch['sub14'];
		$des14=$fetch['des14'];
		$units14=$fetch['units14'];
		$school14=$fetch['school14'];
		$grade14=$fetch['grade14'];

		$sub15=$fetch['sub15'];
		$des15=$fetch['des15'];
		$units15=$fetch['units15'];
		$school15=$fetch['school15'];
		$grade15=$fetch['grade15'];

		$sub16=$fetch['sub16'];
		$des16=$fetch['des16'];
		$units16=$fetch['units16'];
		$school16=$fetch['school16'];
		$grade16=$fetch['grade16'];

		$sub17=$fetch['sub17'];
		$des17=$fetch['des17'];
		$units17=$fetch['units17'];
		$school17=$fetch['school17'];
		$grade17=$fetch['grade17'];

		$sub18=$fetch['sub18'];
		$des18=$fetch['des18'];
		$units18=$fetch['units18'];
		$school18=$fetch['school18'];
		$grade18=$fetch['grade18'];

		$sub19=$fetch['sub19'];
		$des19=$fetch['des19'];
		$units19=$fetch['units19'];
		$school19=$fetch['school19'];
		$grade19=$fetch['grade19'];

		$sub20=$fetch['sub20'];
		$des20=$fetch['des20'];
		$units20=$fetch['units20'];
		$school20=$fetch['school20'];
		$grade20=$fetch['grade20'];
		
		
		$query="INSERT INTO `firstyear`(`sub`, `course`, `section`, `sem`, `AY`, `des`, `units`, `school`, `name`, `studentid`, `grade`, `sub2`, `des2`, `units2`, `school2`, `grade2`, `sub3`, `des3`, `units3`, `school3`, `grade3`, `sub4`, `des4`, `units4`, `school4`, `grade4`, `sub5`, `des5`, `units5`, `school5`, `grade5`, `sub6`, `des6`, `units6`, `school6`, `grade6`, `sub7`, `des7`, `units7`, `school7`, `grade7`, `sub8`, `des8`, `units8`, `school8`, `grade8`, `sub9`, `des9`, `units9`, `school9`, `grade9`, `sub10`, `des10`, `units10`, `school10`, `grade10`, `sub11`, `section2`, `sem2`, `AY2`, `des11`, `units11`, `school11`, `grade11`, `sub12`, `des12`, `units12`, `school12`, `grade12`, `sub13`, `des13`, `units13`, `school13`, `grade13`, `sub14`, `des14`, `units14`, `school14`, `grade14`, `sub15`, `des15`, `units15`, `school15`, `grade15`, `sub16`, `des16`, `units16`, `school16`, `grade16`, `sub17`, `des17`, `units17`, `school17`, `grade17`, `sub18`, `des18`, `units18`, `school18`, `grade18`, `sub19`, `des19`, `units19`, `school19`, `grade19`, `sub20`, `des20`, `units20`, `school20`, `grade20`)VALUES('$sub','$course','$section','$sem','$AY','$des','$units','$school','$name','$studentid','$grade','$sub2','$des2','$units2','$school2','$grade2','$sub3','$des3','$units3','$school3','$grade3','$sub4','$des4','$units4','$school4','$grade4','$sub5','$des5','$units5','$school5','$grade5','$sub6','$des6','$units6','$school6','$grade6','$sub7','$des7','$units7','$school7','$grade7','$sub8','$des8','$units8','$school8','$grade8','$sub9','$des9','$units9','$school9','$grade9','$sub10','$des10','$units10','$school10','$grade10','$sub11','$section2','$sem2','$AY2','$des11','$units11','$school11','$grade11','$sub12','$des12','$units12','$school12','$grade12','$sub13','$des13','$units13','$school13','$grade13','$sub14','$des14','$units14','$school14','$grade14','$sub15','$des15','$units15','$school15','$grade15','$sub16','$des16','$units16','$school16','$grade16','$sub17','$des17','$units17','$school17','$grade17','$sub18','$des18','$units18','$school18','$grade18','$sub19','$des19','$units19','$school19','$grade19','$sub20','$des20','$units20','$school20','$grade20')";
		$results=mysqli_query($link,$query);
		$queries="DELETE FROM `archive` WHERE `name`='$name'";
		$res_s=mysqli_query($link,$queries);
		
	
		
		$query=mysqli_query($link, "SELECT * FROM `archive2` WHERE `name`='$name'") or die(mysqli_error());
		$fetch=mysqli_fetch_array($query);
		$id=['id'];
		$sub=$fetch['sub'];
		$course=$fetch['course'];
		$section=$fetch['section'];
		$sem=$fetch['sem'];
		$AY=$fetch['AY'];
		$des=$fetch['des'];
		$units=$fetch['units'];
		$school=$fetch['school'];
		$name=$fetch['name'];
		$studentid=$fetch['studentid'];
		$grade=$fetch['grade'];

		$sub2=$fetch['sub2'];
		$des2=$fetch['des2'];
		$units2=$fetch['units2'];
		$school2=$fetch['school2'];
		$grade2=$fetch['grade2'];

		$sub3=$fetch['sub3'];
		$des3=$fetch['des3'];
		$units3=$fetch['units3'];
		$school3=$fetch['school3'];
		$grade3=$fetch['grade3'];

		$sub4=$fetch['sub4'];
		$des4=$fetch['des4'];
		$units4=$fetch['units4'];
		$school4=$fetch['school4'];
		$grade4=$fetch['grade4'];

		$sub5=$fetch['sub5'];
		$des5=$fetch['des5'];
		$units5=$fetch['units5'];
		$school5=$fetch['school5'];
		$grade5=$fetch['grade5'];

		$sub6=$fetch['sub6'];
		$des6=$fetch['des6'];
		$units6=$fetch['units6'];
		$school6=$fetch['school6'];
		$grade6=$fetch['grade6'];

		$sub7=$fetch['sub7'];
		$des7=$fetch['des7'];
		$units7=$fetch['units7'];
		$school7=$fetch['school7'];
		$grade7=$fetch['grade7'];

		$sub8=$fetch['sub8'];
		$des8=$fetch['des8'];
		$units8=$fetch['units8'];
		$school8=$fetch['school8'];
		$grade8=$fetch['grade8'];

		$sub9=$fetch['sub9'];
		$des9=$fetch['des9'];
		$units9=$fetch['units9'];
		$school9=$fetch['school9'];
		$grade9=$fetch['grade9'];

		$sub10=$fetch['sub10'];
		$des10=$fetch['des10'];
		$units10=$fetch['units10'];
		$school10=$fetch['school10'];
		$grade10=$fetch['grade10'];


		$sub11=$fetch['sub11'];
		$section2=$fetch['section2'];
		$sem2=$fetch['sem2'];
		$AY2=$fetch['AY2'];
		$des11=$fetch['des11'];
		$units11=$fetch['units11'];
		$school11=$fetch['school11'];
		$grade11=$fetch['grade11'];

		$sub12=$fetch['sub12'];
		$des12=$fetch['des12'];
		$units12=$fetch['units12'];
		$school12=$fetch['school12'];
		$grade12=$fetch['grade12'];

		$sub13=$fetch['sub13'];
		$des13=$fetch['des13'];
		$units13=$fetch['units13'];
		$school13=$fetch['school13'];
		$grade13=$fetch['grade13'];

		$sub14=$fetch['sub14'];
		$des14=$fetch['des14'];
		$units14=$fetch['units14'];
		$school14=$fetch['school14'];
		$grade14=$fetch['grade14'];

		$sub15=$fetch['sub15'];
		$des15=$fetch['des15'];
		$units15=$fetch['units15'];
		$school15=$fetch['school15'];
		$grade15=$fetch['grade15'];

		$sub16=$fetch['sub16'];
		$des16=$fetch['des16'];
		$units16=$fetch['units16'];
		$school16=$fetch['school16'];
		$grade16=$fetch['grade16'];

		$sub17=$fetch['sub17'];
		$des17=$fetch['des17'];
		$units17=$fetch['units17'];
		$school17=$fetch['school17'];
		$grade17=$fetch['grade17'];

		$sub18=$fetch['sub18'];
		$des18=$fetch['des18'];
		$units18=$fetch['units18'];
		$school18=$fetch['school18'];
		$grade18=$fetch['grade18'];

		$sub19=$fetch['sub19'];
		$des19=$fetch['des19'];
		$units19=$fetch['units19'];
		$school19=$fetch['school19'];
		$grade19=$fetch['grade19'];

		$sub20=$fetch['sub20'];
		$des20=$fetch['des20'];
		$units20=$fetch['units20'];
		$school20=$fetch['school20'];
		$grade20=$fetch['grade20'];
		
		
		$query="INSERT INTO `secondyear`(`sub`, `course`, `section`, `sem`, `AY`, `des`, `units`, `school`, `name`, `studentid`, `grade`, `sub2`, `des2`, `units2`, `school2`, `grade2`, `sub3`, `des3`, `units3`, `school3`, `grade3`, `sub4`, `des4`, `units4`, `school4`, `grade4`, `sub5`, `des5`, `units5`, `school5`, `grade5`, `sub6`, `des6`, `units6`, `school6`, `grade6`, `sub7`, `des7`, `units7`, `school7`, `grade7`, `sub8`, `des8`, `units8`, `school8`, `grade8`, `sub9`, `des9`, `units9`, `school9`, `grade9`, `sub10`, `des10`, `units10`, `school10`, `grade10`, `sub11`, `section2`, `sem2`, `AY2`, `des11`, `units11`, `school11`, `grade11`, `sub12`, `des12`, `units12`, `school12`, `grade12`, `sub13`, `des13`, `units13`, `school13`, `grade13`, `sub14`, `des14`, `units14`, `school14`, `grade14`, `sub15`, `des15`, `units15`, `school15`, `grade15`, `sub16`, `des16`, `units16`, `school16`, `grade16`, `sub17`, `des17`, `units17`, `school17`, `grade17`, `sub18`, `des18`, `units18`, `school18`, `grade18`, `sub19`, `des19`, `units19`, `school19`, `grade19`, `sub20`, `des20`, `units20`, `school20`, `grade20`)VALUES('$sub','$course','$section','$sem','$AY','$des','$units','$school','$name','$studentid','$grade','$sub2','$des2','$units2','$school2','$grade2','$sub3','$des3','$units3','$school3','$grade3','$sub4','$des4','$units4','$school4','$grade4','$sub5','$des5','$units5','$school5','$grade5','$sub6','$des6','$units6','$school6','$grade6','$sub7','$des7','$units7','$school7','$grade7','$sub8','$des8','$units8','$school8','$grade8','$sub9','$des9','$units9','$school9','$grade9','$sub10','$des10','$units10','$school10','$grade10','$sub11','$section2','$sem2','$AY2','$des11','$units11','$school11','$grade11','$sub12','$des12','$units12','$school12','$grade12','$sub13','$des13','$units13','$school13','$grade13','$sub14','$des14','$units14','$school14','$grade14','$sub15','$des15','$units15','$school15','$grade15','$sub16','$des16','$units16','$school16','$grade16','$sub17','$des17','$units17','$school17','$grade17','$sub18','$des18','$units18','$school18','$grade18','$sub19','$des19','$units19','$school19','$grade19','$sub20','$des20','$units20','$school20','$grade20')";
		$results=mysqli_query($link,$query);
		$queries="DELETE FROM `archive2` WHERE `name`='$name'";
		$res_s=mysqli_query($link,$queries);





		$query=mysqli_query($link, "SELECT * FROM `archive3net` WHERE `name`='$name'") or die(mysqli_error());
		$fetch=mysqli_fetch_array($query);
		$id=['id'];
		$sub=$fetch['sub'];
		$course=$fetch['course'];
		$section=$fetch['section'];
		$sem=$fetch['sem'];
		$AY=$fetch['AY'];
		$des=$fetch['des'];
		$units=$fetch['units'];
		$school=$fetch['school'];
		$name=$fetch['name'];
		$studentid=$fetch['studentid'];
		$grade=$fetch['grade'];

		$sub2=$fetch['sub2'];
		$des2=$fetch['des2'];
		$units2=$fetch['units2'];
		$school2=$fetch['school2'];
		$grade2=$fetch['grade2'];

		$sub3=$fetch['sub3'];
		$des3=$fetch['des3'];
		$units3=$fetch['units3'];
		$school3=$fetch['school3'];
		$grade3=$fetch['grade3'];

		$sub4=$fetch['sub4'];
		$des4=$fetch['des4'];
		$units4=$fetch['units4'];
		$school4=$fetch['school4'];
		$grade4=$fetch['grade4'];

		$sub5=$fetch['sub5'];
		$des5=$fetch['des5'];
		$units5=$fetch['units5'];
		$school5=$fetch['school5'];
		$grade5=$fetch['grade5'];

		$sub6=$fetch['sub6'];
		$des6=$fetch['des6'];
		$units6=$fetch['units6'];
		$school6=$fetch['school6'];
		$grade6=$fetch['grade6'];

		$sub7=$fetch['sub7'];
		$des7=$fetch['des7'];
		$units7=$fetch['units7'];
		$school7=$fetch['school7'];
		$grade7=$fetch['grade7'];

		$sub8=$fetch['sub8'];
		$des8=$fetch['des8'];
		$units8=$fetch['units8'];
		$school8=$fetch['school8'];
		$grade8=$fetch['grade8'];

		$sub9=$fetch['sub9'];
		$des9=$fetch['des9'];
		$units9=$fetch['units9'];
		$school9=$fetch['school9'];
		$grade9=$fetch['grade9'];

		$sub10=$fetch['sub10'];
		$des10=$fetch['des10'];
		$units10=$fetch['units10'];
		$school10=$fetch['school10'];
		$grade10=$fetch['grade10'];


		$sub11=$fetch['sub11'];
		$section2=$fetch['section2'];
		$sem2=$fetch['sem2'];
		$AY2=$fetch['AY2'];
		$des11=$fetch['des11'];
		$units11=$fetch['units11'];
		$school11=$fetch['school11'];
		$grade11=$fetch['grade11'];

		$sub12=$fetch['sub12'];
		$des12=$fetch['des12'];
		$units12=$fetch['units12'];
		$school12=$fetch['school12'];
		$grade12=$fetch['grade12'];

		$sub13=$fetch['sub13'];
		$des13=$fetch['des13'];
		$units13=$fetch['units13'];
		$school13=$fetch['school13'];
		$grade13=$fetch['grade13'];

		$sub14=$fetch['sub14'];
		$des14=$fetch['des14'];
		$units14=$fetch['units14'];
		$school14=$fetch['school14'];
		$grade14=$fetch['grade14'];

		$sub15=$fetch['sub15'];
		$des15=$fetch['des15'];
		$units15=$fetch['units15'];
		$school15=$fetch['school15'];
		$grade15=$fetch['grade15'];

		$sub16=$fetch['sub16'];
		$des16=$fetch['des16'];
		$units16=$fetch['units16'];
		$school16=$fetch['school16'];
		$grade16=$fetch['grade16'];

		$sub17=$fetch['sub17'];
		$des17=$fetch['des17'];
		$units17=$fetch['units17'];
		$school17=$fetch['school17'];
		$grade17=$fetch['grade17'];

		$sub18=$fetch['sub18'];
		$des18=$fetch['des18'];
		$units18=$fetch['units18'];
		$school18=$fetch['school18'];
		$grade18=$fetch['grade18'];

		$sub19=$fetch['sub19'];
		$des19=$fetch['des19'];
		$units19=$fetch['units19'];
		$school19=$fetch['school19'];
		$grade19=$fetch['grade19'];

		$sub20=$fetch['sub20'];
		$des20=$fetch['des20'];
		$units20=$fetch['units20'];
		$school20=$fetch['school20'];
		$grade20=$fetch['grade20'];
		
		
		$query="INSERT INTO `thirdyearnet`(`sub`, `course`, `section`, `sem`, `AY`, `des`, `units`, `school`, `name`, `studentid`, `grade`, `sub2`, `des2`, `units2`, `school2`, `grade2`, `sub3`, `des3`, `units3`, `school3`, `grade3`, `sub4`, `des4`, `units4`, `school4`, `grade4`, `sub5`, `des5`, `units5`, `school5`, `grade5`, `sub6`, `des6`, `units6`, `school6`, `grade6`, `sub7`, `des7`, `units7`, `school7`, `grade7`, `sub8`, `des8`, `units8`, `school8`, `grade8`, `sub9`, `des9`, `units9`, `school9`, `grade9`, `sub10`, `des10`, `units10`, `school10`, `grade10`, `sub11`, `section2`, `sem2`, `AY2`, `des11`, `units11`, `school11`, `grade11`, `sub12`, `des12`, `units12`, `school12`, `grade12`, `sub13`, `des13`, `units13`, `school13`, `grade13`, `sub14`, `des14`, `units14`, `school14`, `grade14`, `sub15`, `des15`, `units15`, `school15`, `grade15`, `sub16`, `des16`, `units16`, `school16`, `grade16`, `sub17`, `des17`, `units17`, `school17`, `grade17`, `sub18`, `des18`, `units18`, `school18`, `grade18`, `sub19`, `des19`, `units19`, `school19`, `grade19`, `sub20`, `des20`, `units20`, `school20`, `grade20`)VALUES('$sub','$course','$section','$sem','$AY','$des','$units','$school','$name','$studentid','$grade','$sub2','$des2','$units2','$school2','$grade2','$sub3','$des3','$units3','$school3','$grade3','$sub4','$des4','$units4','$school4','$grade4','$sub5','$des5','$units5','$school5','$grade5','$sub6','$des6','$units6','$school6','$grade6','$sub7','$des7','$units7','$school7','$grade7','$sub8','$des8','$units8','$school8','$grade8','$sub9','$des9','$units9','$school9','$grade9','$sub10','$des10','$units10','$school10','$grade10','$sub11','$section2','$sem2','$AY2','$des11','$units11','$school11','$grade11','$sub12','$des12','$units12','$school12','$grade12','$sub13','$des13','$units13','$school13','$grade13','$sub14','$des14','$units14','$school14','$grade14','$sub15','$des15','$units15','$school15','$grade15','$sub16','$des16','$units16','$school16','$grade16','$sub17','$des17','$units17','$school17','$grade17','$sub18','$des18','$units18','$school18','$grade18','$sub19','$des19','$units19','$school19','$grade19','$sub20','$des20','$units20','$school20','$grade20')";
		$results=mysqli_query($link,$query);
		$queries="DELETE FROM `archive3net` WHERE `name`='$name'";
		$res_s=mysqli_query($link,$queries);









		$query=mysqli_query($link, "SELECT * FROM `archive3_1net` WHERE `name`='$name'") or die(mysqli_error());
		$fetch=mysqli_fetch_array($query);
		$id=['id'];
		$sub=$fetch['sub'];
		$course=$fetch['course'];
		$section=$fetch['section'];
		$sem=$fetch['sem'];
		$AY=$fetch['AY'];
		$des=$fetch['des'];
		$units=$fetch['units'];
		$school=$fetch['school'];
		$name=$fetch['name'];
		$studentid=$fetch['studentid'];
		$grade=$fetch['grade'];

		$sub2=$fetch['sub2'];
		$des2=$fetch['des2'];
		$units2=$fetch['units2'];
		$school2=$fetch['school2'];
		$grade2=$fetch['grade2'];

		$sub3=$fetch['sub3'];
		$des3=$fetch['des3'];
		$units3=$fetch['units3'];
		$school3=$fetch['school3'];
		$grade3=$fetch['grade3'];

		$sub4=$fetch['sub4'];
		$des4=$fetch['des4'];
		$units4=$fetch['units4'];
		$school4=$fetch['school4'];
		$grade4=$fetch['grade4'];

		$sub5=$fetch['sub5'];
		$des5=$fetch['des5'];
		$units5=$fetch['units5'];
		$school5=$fetch['school5'];
		$grade5=$fetch['grade5'];

		$sub6=$fetch['sub6'];
		$des6=$fetch['des6'];
		$units6=$fetch['units6'];
		$school6=$fetch['school6'];
		$grade6=$fetch['grade6'];

		$sub7=$fetch['sub7'];
		$des7=$fetch['des7'];
		$units7=$fetch['units7'];
		$school7=$fetch['school7'];
		$grade7=$fetch['grade7'];

		$sub8=$fetch['sub8'];
		$des8=$fetch['des8'];
		$units8=$fetch['units8'];
		$school8=$fetch['school8'];
		$grade8=$fetch['grade8'];

		$sub9=$fetch['sub9'];
		$des9=$fetch['des9'];
		$units9=$fetch['units9'];
		$school9=$fetch['school9'];
		$grade9=$fetch['grade9'];

		$sub10=$fetch['sub10'];
		$des10=$fetch['des10'];
		$units10=$fetch['units10'];
		$school10=$fetch['school10'];
		$grade10=$fetch['grade10'];

		
		
		$query="INSERT INTO `midyearnet`(`sub`, `course`, `section`, `sem`, `AY`, `des`, `units`, `school`, `name`, `studentid`, `grade`, `sub2`, `des2`, `units2`, `school2`, `grade2`, `sub3`, `des3`, `units3`, `school3`, `grade3`, `sub4`, `des4`, `units4`, `school4`, `grade4`, `sub5`, `des5`, `units5`, `school5`, `grade5`, `sub6`, `des6`, `units6`, `school6`, `grade6`, `sub7`, `des7`, `units7`, `school7`, `grade7`, `sub8`, `des8`, `units8`, `school8`, `grade8`, `sub9`, `des9`, `units9`, `school9`, `grade9`, `sub10`, `des10`, `units10`, `school10`, `grade10`)VALUES('$sub','$course','$section','$sem','$AY','$des','$units','$school','$name','$studentid','$grade','$sub2','$des2','$units2','$school2','$grade2','$sub3','$des3','$units3','$school3','$grade3','$sub4','$des4','$units4','$school4','$grade4','$sub5','$des5','$units5','$school5','$grade5','$sub6','$des6','$units6','$school6','$grade6','$sub7','$des7','$units7','$school7','$grade7','$sub8','$des8','$units8','$school8','$grade8','$sub9','$des9','$units9','$school9','$grade9','$sub10','$des10','$units10','$school10','$grade10')";
		$results=mysqli_query($link,$query);
		$queries="DELETE FROM `archive3_1net` WHERE `name`='$name'";
		$res_s=mysqli_query($link,$queries);








		$query=mysqli_query($link, "SELECT * FROM `archive4net` WHERE `name`='$name'") or die(mysqli_error());
		$fetch=mysqli_fetch_array($query);
		$id=['id'];
		$sub=$fetch['sub'];
		$course=$fetch['course'];
		$section=$fetch['section'];
		$sem=$fetch['sem'];
		$AY=$fetch['AY'];
		$des=$fetch['des'];
		$units=$fetch['units'];
		$school=$fetch['school'];
		$name=$fetch['name'];
		$studentid=$fetch['studentid'];
		$grade=$fetch['grade'];

		$sub2=$fetch['sub2'];
		$des2=$fetch['des2'];
		$units2=$fetch['units2'];
		$school2=$fetch['school2'];
		$grade2=$fetch['grade2'];

		$sub3=$fetch['sub3'];
		$des3=$fetch['des3'];
		$units3=$fetch['units3'];
		$school3=$fetch['school3'];
		$grade3=$fetch['grade3'];

		$sub4=$fetch['sub4'];
		$des4=$fetch['des4'];
		$units4=$fetch['units4'];
		$school4=$fetch['school4'];
		$grade4=$fetch['grade4'];

		$sub5=$fetch['sub5'];
		$des5=$fetch['des5'];
		$units5=$fetch['units5'];
		$school5=$fetch['school5'];
		$grade5=$fetch['grade5'];

		$sub6=$fetch['sub6'];
		$des6=$fetch['des6'];
		$units6=$fetch['units6'];
		$school6=$fetch['school6'];
		$grade6=$fetch['grade6'];

		$sub7=$fetch['sub7'];
		$des7=$fetch['des7'];
		$units7=$fetch['units7'];
		$school7=$fetch['school7'];
		$grade7=$fetch['grade7'];

		$sub8=$fetch['sub8'];
		$des8=$fetch['des8'];
		$units8=$fetch['units8'];
		$school8=$fetch['school8'];
		$grade8=$fetch['grade8'];

		$sub9=$fetch['sub9'];
		$des9=$fetch['des9'];
		$units9=$fetch['units9'];
		$school9=$fetch['school9'];
		$grade9=$fetch['grade9'];

		$sub10=$fetch['sub10'];
		$des10=$fetch['des10'];
		$units10=$fetch['units10'];
		$school10=$fetch['school10'];
		$grade10=$fetch['grade10'];


		$sub11=$fetch['sub11'];
		$section2=$fetch['section2'];
		$sem2=$fetch['sem2'];
		$AY2=$fetch['AY2'];
		$des11=$fetch['des11'];
		$units11=$fetch['units11'];
		$school11=$fetch['school11'];
		$grade11=$fetch['grade11'];

		$sub12=$fetch['sub12'];
		$des12=$fetch['des12'];
		$units12=$fetch['units12'];
		$school12=$fetch['school12'];
		$grade12=$fetch['grade12'];

		$sub13=$fetch['sub13'];
		$des13=$fetch['des13'];
		$units13=$fetch['units13'];
		$school13=$fetch['school13'];
		$grade13=$fetch['grade13'];

		$sub14=$fetch['sub14'];
		$des14=$fetch['des14'];
		$units14=$fetch['units14'];
		$school14=$fetch['school14'];
		$grade14=$fetch['grade14'];

		$sub15=$fetch['sub15'];
		$des15=$fetch['des15'];
		$units15=$fetch['units15'];
		$school15=$fetch['school15'];
		$grade15=$fetch['grade15'];

		$sub16=$fetch['sub16'];
		$des16=$fetch['des16'];
		$units16=$fetch['units16'];
		$school16=$fetch['school16'];
		$grade16=$fetch['grade16'];

		$sub17=$fetch['sub17'];
		$des17=$fetch['des17'];
		$units17=$fetch['units17'];
		$school17=$fetch['school17'];
		$grade17=$fetch['grade17'];

		$sub18=$fetch['sub18'];
		$des18=$fetch['des18'];
		$units18=$fetch['units18'];
		$school18=$fetch['school18'];
		$grade18=$fetch['grade18'];

		$sub19=$fetch['sub19'];
		$des19=$fetch['des19'];
		$units19=$fetch['units19'];
		$school19=$fetch['school19'];
		$grade19=$fetch['grade19'];

		$sub20=$fetch['sub20'];
		$des20=$fetch['des20'];
		$units20=$fetch['units20'];
		$school20=$fetch['school20'];
		$grade20=$fetch['grade20'];
		
		
		$query="INSERT INTO `fourthyearnet`(`sub`, `course`, `section`, `sem`, `AY`, `des`, `units`, `school`, `name`, `studentid`, `grade`, `sub2`, `des2`, `units2`, `school2`, `grade2`, `sub3`, `des3`, `units3`, `school3`, `grade3`, `sub4`, `des4`, `units4`, `school4`, `grade4`, `sub5`, `des5`, `units5`, `school5`, `grade5`, `sub6`, `des6`, `units6`, `school6`, `grade6`, `sub7`, `des7`, `units7`, `school7`, `grade7`, `sub8`, `des8`, `units8`, `school8`, `grade8`, `sub9`, `des9`, `units9`, `school9`, `grade9`, `sub10`, `des10`, `units10`, `school10`, `grade10`, `sub11`, `section2`, `sem2`, `AY2`, `des11`, `units11`, `school11`, `grade11`, `sub12`, `des12`, `units12`, `school12`, `grade12`, `sub13`, `des13`, `units13`, `school13`, `grade13`, `sub14`, `des14`, `units14`, `school14`, `grade14`, `sub15`, `des15`, `units15`, `school15`, `grade15`, `sub16`, `des16`, `units16`, `school16`, `grade16`, `sub17`, `des17`, `units17`, `school17`, `grade17`, `sub18`, `des18`, `units18`, `school18`, `grade18`, `sub19`, `des19`, `units19`, `school19`, `grade19`, `sub20`, `des20`, `units20`, `school20`, `grade20`)VALUES('$sub','$course','$section','$sem','$AY','$des','$units','$school','$name','$studentid','$grade','$sub2','$des2','$units2','$school2','$grade2','$sub3','$des3','$units3','$school3','$grade3','$sub4','$des4','$units4','$school4','$grade4','$sub5','$des5','$units5','$school5','$grade5','$sub6','$des6','$units6','$school6','$grade6','$sub7','$des7','$units7','$school7','$grade7','$sub8','$des8','$units8','$school8','$grade8','$sub9','$des9','$units9','$school9','$grade9','$sub10','$des10','$units10','$school10','$grade10','$sub11','$section2','$sem2','$AY2','$des11','$units11','$school11','$grade11','$sub12','$des12','$units12','$school12','$grade12','$sub13','$des13','$units13','$school13','$grade13','$sub14','$des14','$units14','$school14','$grade14','$sub15','$des15','$units15','$school15','$grade15','$sub16','$des16','$units16','$school16','$grade16','$sub17','$des17','$units17','$school17','$grade17','$sub18','$des18','$units18','$school18','$grade18','$sub19','$des19','$units19','$school19','$grade19','$sub20','$des20','$units20','$school20','$grade20')";
		$results=mysqli_query($link,$query);
		echo"<script>alert('Data successfully transfer')</script>";
		echo"<script>window.location='archirec.php'</script>";
	}
	$queries="DELETE FROM `archive4net` WHERE `name`='$name'";
	$res_s=mysqli_query($link,$queries);
?>