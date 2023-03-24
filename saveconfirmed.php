<?php
$link = mysqli_connect("localhost","root","","portal");
if(mysqli_connect_error()) {
	die("There is error connecting to the Database");
}




$id=['id'];
$sem=$_POST['sem'];
$AY=$_POST['AY'];
$name=$_POST['name'];
$studentid=$_POST['studentid'];
$course=$_POST['course'];
$section=$_POST['section'];
$sub1=$_POST['sub1'];
$grade1=$_POST['grade1'];
$sub2=$_POST['sub2'];
$grade2=$_POST['grade2'];
$sub3=$_POST['sub3'];
$grade3=$_POST['grade3'];
$sub4=$_POST['sub4'];
$grade4=$_POST['grade4'];
$sub5=$_POST['sub5'];
$grade5=$_POST['grade5'];
$sub6=$_POST['sub6'];
$grade6=$_POST['grade6'];
$sub7=$_POST['sub7'];
$grade7=$_POST['grade7'];
$sub8=$_POST['sub8'];
$grade8=$_POST['grade8'];
$sub9=$_POST['sub9'];
$grade9=$_POST['grade9'];
$sub10=$_POST['sub10'];
$grade10=$_POST['grade10'];


$sem2=$_POST['sem2'];
$AY2=$_POST['AY2'];
$section2=$_POST['section2'];
$sub11=$_POST['sub11'];
$grade11=$_POST['grade11'];
$sub12=$_POST['sub12'];
$grade12=$_POST['grade12'];
$sub13=$_POST['sub13'];
$grade13=$_POST['grade13'];
$sub14=$_POST['sub14'];
$grade14=$_POST['grade14'];
$sub15=$_POST['sub15'];
$grade15=$_POST['grade15'];
$sub16=$_POST['sub16'];
$grade16=$_POST['grade16'];
$sub17=$_POST['sub17'];
$grade17=$_POST['grade17'];
$sub18=$_POST['sub18'];
$grade18=$_POST['grade18'];
$sub19=$_POST['sub19'];
$grade19=$_POST['grade19'];
$sub20=$_POST['sub20'];
$grade20=$_POST['grade20'];



$sem3=$_POST['sem3'];
$AY3=$_POST['AY3'];
$section3=$_POST['section3'];
$sub21=$_POST['sub21'];
$grade21=$_POST['grade21'];
$sub22=$_POST['sub22'];
$grade22=$_POST['grade22'];
$sub23=$_POST['sub23'];
$grade23=$_POST['grade23'];
$sub24=$_POST['sub24'];
$grade24=$_POST['grade24'];
$sub25=$_POST['sub25'];
$grade25=$_POST['grade25'];
$sub26=$_POST['sub26'];
$grade26=$_POST['grade26'];
$sub27=$_POST['sub27'];
$grade27=$_POST['grade27'];
$sub28=$_POST['sub28'];
$grade28=$_POST['grade28'];
$sub29=$_POST['sub29'];
$grade29=$_POST['grade29'];
$sub30=$_POST['sub30'];
$grade30=$_POST['grade30'];


$sem4=$_POST['sem4'];
$AY4=$_POST['AY4'];
$section4=$_POST['section4'];
$sub31=$_POST['sub31'];
$grade31=$_POST['grade31'];
$sub32=$_POST['sub32'];
$grade32=$_POST['grade32'];
$sub33=$_POST['sub33'];
$grade33=$_POST['grade33'];
$sub34=$_POST['sub34'];
$grade34=$_POST['grade34'];
$sub35=$_POST['sub35'];
$grade35=$_POST['grade35'];
$sub36=$_POST['sub36'];
$grade36=$_POST['grade36'];
$sub37=$_POST['sub37'];
$grade37=$_POST['grade37'];
$sub38=$_POST['sub38'];
$grade38=$_POST['grade38'];
$sub39=$_POST['sub39'];
$grade39=$_POST['grade39'];
$sub40=$_POST['sub40'];
$grade40=$_POST['grade40'];



$sem5=$_POST['sem5'];
$AY5=$_POST['AY5'];
$section5=$_POST['section5'];
$sub41=$_POST['sub41'];
$grade41=$_POST['grade41'];
$sub42=$_POST['sub42'];
$grade42=$_POST['grade42'];
$sub43=$_POST['sub43'];
$grade43=$_POST['grade43'];
$sub44=$_POST['sub44'];
$grade44=$_POST['grade44'];
$sub45=$_POST['sub45'];
$grade45=$_POST['grade45'];
$sub46=$_POST['sub46'];
$grade46=$_POST['grade46'];
$sub47=$_POST['sub47'];
$grade47=$_POST['grade47'];
$sub48=$_POST['sub48'];
$grade48=$_POST['grade48'];
$sub49=$_POST['sub49'];
$grade49=$_POST['grade49'];
$sub50=$_POST['sub50'];
$grade50=$_POST['grade50'];



$sem6=$_POST['sem6'];
$AY6=$_POST['AY6'];
$section6=$_POST['section6'];
$sub51=$_POST['sub51'];
$grade51=$_POST['grade51'];
$sub52=$_POST['sub52'];
$grade52=$_POST['grade52'];
$sub53=$_POST['sub53'];
$grade53=$_POST['grade53'];
$sub54=$_POST['sub54'];
$grade54=$_POST['grade54'];
$sub55=$_POST['sub55'];
$grade55=$_POST['grade55'];
$sub56=$_POST['sub56'];
$grade56=$_POST['grade56'];
$sub57=$_POST['sub57'];
$grade57=$_POST['grade57'];
$sub58=$_POST['sub58'];
$grade58=$_POST['grade58'];
$sub59=$_POST['sub59'];
$grade59=$_POST['grade59'];
$sub60=$_POST['sub60'];
$grade60=$_POST['grade60'];



$sem7=$_POST['sem7'];
$AY7=$_POST['AY7'];
$section7=$_POST['section7'];
$sub61=$_POST['sub61'];
$grade61=$_POST['grade31'];
$sub62=$_POST['sub32'];
$grade62=$_POST['grade62'];
$sub63=$_POST['sub63'];
$grade63=$_POST['grade63'];
$sub64=$_POST['sub64'];
$grade64=$_POST['grade64'];
$sub65=$_POST['sub65'];
$grade65=$_POST['grade65'];
$sub66=$_POST['sub66'];
$grade66=$_POST['grade66'];
$sub67=$_POST['sub67'];
$grade67=$_POST['grade67'];
$sub68=$_POST['sub68'];
$grade68=$_POST['grade68'];
$sub69=$_POST['sub69'];
$grade69=$_POST['grade69'];
$sub70=$_POST['sub70'];
$grade70=$_POST['grade70'];




$sem8=$_POST['sem8'];
$AY8=$_POST['AY8'];
$section8=$_POST['section8'];
$sub71=$_POST['sub71'];
$grade71=$_POST['grade71'];
$sub72=$_POST['sub72'];
$grade72=$_POST['grade72'];
$sub73=$_POST['sub73'];
$grade73=$_POST['grade73'];
$sub74=$_POST['sub74'];
$grade74=$_POST['grade74'];
$sub75=$_POST['sub75'];
$grade75=$_POST['grade75'];
$sub76=$_POST['sub76'];
$grade76=$_POST['grade76'];
$sub77=$_POST['sub77'];
$grade77=$_POST['grade77'];
$sub78=$_POST['sub78'];
$grade78=$_POST['grade78'];
$sub79=$_POST['sub79'];
$grade79=$_POST['grade79'];
$sub80=$_POST['sub80'];
$grade80=$_POST['grade80'];



$sem9=$_POST['sem9'];
$AY9=$_POST['AY9'];
$section9=$_POST['section9'];
$sub81=$_POST['sub81'];
$grade81=$_POST['grade81'];
$sub82=$_POST['sub82'];
$grade82=$_POST['grade82'];
$sub83=$_POST['sub83'];
$grade83=$_POST['grade83'];
$sub84=$_POST['sub84'];
$grade84=$_POST['grade84'];
$sub85=$_POST['sub85'];
$grade85=$_POST['grade85'];
$sub86=$_POST['sub86'];
$grade86=$_POST['grade86'];
$sub87=$_POST['sub87'];
$grade87=$_POST['grade87'];
$sub88=$_POST['sub88'];
$grade88=$_POST['grade88'];
$sub89=$_POST['sub89'];
$grade89=$_POST['grade89'];
$sub90=$_POST['sub90'];
$grade90=$_POST['grade90'];




$query="INSERT INTO registraritrecords(`sem`,`AY`,`name`,`studentid`,`course`,`section`,`sub1`,`grade1`,`sub2`,`grade2`,`sub3`,`grade3`,`sub4`,`grade4`,`sub5`,`grade5`,`sub6`,`grade6`,`sub7`,`grade7`,`sub8`,`grade8`,`sub9`,`grade9`,`sub10`,`grade10`,`sem2`,`AY2`,`section2`,`sub11`,`grade11`,`sub12`,`grade12`,`sub13`,`grade13`,`sub14`,`grade14`,`sub15`,`grade15`,`sub16`,`grade16`,`sub17`,`grade17`,`sub18`,`grade18`,`sub19`,`grade19`,`sub20`,`grade20`,`sem3`,`AY3`,`section3`,`sub21`,`grade21`,`sub22`,`grade22`,`sub23`,`grade23`,`sub24`,`grade24`,`sub25`,`grade25`,`sub26`,`grade26`,`sub27`,`grade27`,`sub28`,`grade28`,`sub29`,`grade29`,`sub30`,`grade30`,`sem4`,`AY4`,`section4`,`sub31`,`grade31`,`sub32`,`grade32`,`sub33`,`grade33`,`sub34`,`grade34`,`sub35`,`grade35`,`sub36`,`grade36`,`sub37`,`grade37`,`sub38`,`grade38`,`sub39`,`grade39`,`sub40`,`grade40`,`sem5`,`AY5`,`section5`,`sub41`,`grade41`,`sub42`,`grade42`,`sub43`,`grade43`,`sub44`,`grade44`,`sub45`,`grade45`,`sub46`,`grade46`,`sub47`,`grade47`,`sub48`,`grade48`,`sub49`,`grade49`,`sub50`,`grade50`,`sem6`,`AY6`,`section6`,`sub51`,`grade51`,`sub52`,`grade52`,`sub53`,`grade53`,`sub54`,`grade54`,`sub55`,`grade55`,`sub56`,`grade56`,`sub57`,`grade57`,`sub58`,`grade58`,`sub59`,`grade59`,`sub60`,`grade60`,`sem7`,`AY7`,`section7`,`sub61`,`grade61`,`sub62`,`grade62`,`sub63`,`grade63`,`sub64`,`grade64`,`sub65`,`grade65`,`sub66`,`grade66`,`sub67`,`grade67`,`sub68`,`grade68`,`sub69`,`grade69`,`sub70`,`grade70`,`sem8`,`AY8`,`section8`,`sub71`,`grade71`,`sub72`,`grade72`,`sub73`,`grade73`,`sub74`,`grade74`,`sub75`,`grade75`,`sub76`,`grade76`,`sub77`,`grade77`,`sub78`,`grade78`,`sub79`,`grade79`,`sub80`,`grade80`,`sem9`,`AY9`,`section9`,`sub81`,`grade81`,`sub82`,`grade82`,`sub83`,`grade83`,`sub84`,`grade84`,`sub85`,`grade85`,`sub86`,`grade86`,`sub87`,`grade87`,`sub88`,`grade88`,`sub89`,`grade89`,`sub90`,`grade90`)VALUES('$sem','$AY','$name','$studentid','$course','$section','$sub1','$grade1','$sub2','$grade2','$sub3','$grade3','$sub4','$grade4','$sub5','$grade5','$sub6','$grade6','$sub7','$grade7','$sub8','$grade8','$sub9','$grade9','$sub10','$grade10','$sem2','$AY2','$section2','$sub11','$grade11','$sub12','$grade12','$sub13','$grade13','$sub14','$grade14','$sub15','$grade15','$sub16','$grade16','$sub17','$grade17','$sub18','$grade18','$sub19','$grade19','$sub20','$grade20','$sem3','$AY3','$section3','$sub21','$grade21','$sub22','$grade22','$sub23','$grade23','$sub24','$grade24','$sub25','$grade25','$sub26','$grade26','$sub27','$grade27','$sub28','$grade28','$sub29','$grade29','$sub30','$grade30','$sem4','$AY4','$section4','$sub31','$grade31','$sub32','$grade32','$sub33','$grade33','$sub34','$grade34','$sub35','$grade35','$sub36','$grade36','$sub37','$grade37','$sub38','$grade38','$sub39','$grade39','$sub40','$grade40','$sem5','$AY5','$section5','$sub41','$grade41','$sub42','$grade42','$sub43','$grade43','$sub44','$grade44','$sub45','$grade45','$sub46','$grade46','$sub47','$grade47','$sub48','$grade48','$sub49','$grade49','$sub50','$grade50','$sem6','$AY6','$section6','$sub51','$grade51','$sub52','$grade52','$sub53','$grade53','$sub54','$grade54','$sub55','$grade55','$sub56','$grade56','$sub57','$grade57','$sub58','$grade58','$sub59','$grade59','$sub60','$grade60','$sem7','$AY7','$section7','$sub61','$grade61','$sub62','$grade62','$sub63','$grade63','$sub64','$grade64','$sub65','$grade65','$sub66','$grade66','$sub67','$grade67','$sub68','$grade68','$sub69','$grade69','$sub70','$grade70','$sem8','$AY8','$section8','$sub71','$grade71','$sub72','$grade72','$sub73','$grade73','$sub74','$grade74','$sub75','$grade75','$sub76','$grade76','$sub77','$grade77','$sub78','$grade78','$sub79','$grade79','$sub80','$grade80','$sem9','$AY9','$section9','$sub81','$grade81','$sub82','$grade82','$sub83','$grade83','$sub84','$grade84','$sub85','$grade85','$sub86','$grade86','$sub87','$grade87','$sub88','$grade88','$sub89','$grade89','$sub90','$grade90')";
$result=mysqli_query($link,$query);
if($result){
	echo "<script>alert('Grade Report had been Recorded to your Database');
			document.location.href='clerkstudentrecords.php';</script>";
}else{
	echo "<script>alert('Please try again')</script>";
}
?>


<?php


$id=$_POST['id'];
$acquire=$_POST['acquire'];


$query="UPDATE `itgrade` SET `acquire`='$acquire' WHERE `id`='$id'";
$result = mysqli_query($link,$query);

?>
