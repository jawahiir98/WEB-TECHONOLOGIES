<?php
	$srch = 22;
	$sz = 6;
	$found = 0;
	$a = [20, 30, 1, 17, 292, 2];
	for ($i=0; $i < $sz; $i++) { 
		# code...
		if($a[$i] == $srch){
			$found = 1;
			echo "value found in array";
		}
	}
	if($found == 0) echo "value not found in array";
	echo "<br>";
	$srch = 20;
	$found = 0;
	for ($i=0; $i < $sz; $i++) { 
		# code...
		if($a[$i] == $srch){
			$found = 1;
			echo "value found in array";
		}
	}
	if($found == 0) echo "value not found in array";
?>