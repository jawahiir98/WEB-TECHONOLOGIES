<?php

	$dob = "";

	if(isset($_REQUEST['submit'])){
		
		if($_REQUEST['dob'] == null){
			echo "Enter valid Date of Birth";
		}else{
			$dob = $_REQUEST['dob'];
			echo "YYYY / MM / DD <br>";
			for($i = 0;$i < strlen($dob);$i++){
				if($i && $dob[$i - 1] == '-') echo " ";
				print("$dob[$i]");
				if($i < strlen($dob) - 1 && $dob[$i + 1] == '-') echo " ";
			}
		}
	}
?>