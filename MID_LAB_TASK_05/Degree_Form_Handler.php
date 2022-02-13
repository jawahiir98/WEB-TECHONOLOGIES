<?php
	if(isset($_POST['submit'])){

	    if(!empty($_POST['degree'])) {
	    	$cnt = 1;
	        foreach($_POST['degree'] as $value){
	            echo "Degree $cnt: ".$value.'<br/>';
	            $cnt++;
	        }

	    }
	    else echo "Enter a degree";
	}
?>