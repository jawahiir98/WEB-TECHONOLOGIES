<?php

	$email = "";

	if(isset($_REQUEST['submit'])){
		
		if($_REQUEST['email'] == null){
			$email  = "Enter valid Email";
		}else{
			$email = $_REQUEST['email'];
		}
	}
	echo $email;
?>