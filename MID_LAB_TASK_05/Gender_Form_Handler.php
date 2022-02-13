<?php 

	$gender = "";
	//print_r($_REQUEST);
	if(isset($_REQUEST['submit'])){
		$gender = $_REQUEST["gender"];
	}
	//if($gender == null) $gender = "Enter a valid gender";
	echo $gender;
?>