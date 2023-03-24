<?php
include("config.php");
if(isset($_FILES['csv'])):
	$csv_file = $_FILES['csv']['tmp_name'];
	if(is_file($csv_file)) :
		if(($handle=fopen($csv_file,"r")) !== FALSE) :
			while(($csv_data = fgetcsv($handle, 1000, ",")) !== FALSE){
				$num=count($csv_data);
				for ($c=0; $c < $num; $c++):
					$column[$c] = $csv_data[$c];
				endfor;
				$inserted=$db->query("INSERT INTO `firstyearsam`(`sub`, `course`, `section`, `sem`, `AY`, `des`, `units`, `school`, `name`, `studentid`, `grade`)VALUES('$column[0]','$column[1]','$column[2]','$column[3]','$column[4]','$column[5]','$column[6]','$column[7]','$column[8]','$column[9]','$column[10]')");
			}
			$msg = "Data Uploaded Successfully";
			fclose($handle);
		else :
			$msg = "unable to read the format try again";
		endif;
	else :
		$msg = "CSV format not found";
	endif;
else:
	$msg = "Please try again";
endif;
echo $msg;

?>