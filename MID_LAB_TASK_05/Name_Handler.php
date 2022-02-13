<?php
	$uname = "";

	if(isset($_REQUEST['submit'])){
		
		if($_REQUEST['name'] == null){
			$uname  = "Enter valid Name";
		}else{
			$uname = $_REQUEST['name'];
		}
	}
	echo $uname;
?>