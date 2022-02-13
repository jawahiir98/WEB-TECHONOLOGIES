<?php
	$bg = "";
	if(isset($_POST['submit'])){
		if(!empty($_POST['BG'])){
			$bg = $_POST['BG'];
		}
	    else echo "Enter a degree";
		echo $bg;
	}
?>