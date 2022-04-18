<?php
	$a = 10;
	$b = 1;
	$c = 2;
	if($a >= $b){
		if($a >= $c){
			echo "$a is the largest number";
		}
		else echo "$c is the largest number";
	}
	else if($b >= $c){
		echo "$b is the largest number";
	}
	else echo "$c is the largest number";
?>