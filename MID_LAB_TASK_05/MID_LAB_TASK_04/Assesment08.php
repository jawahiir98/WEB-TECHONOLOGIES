<?php

	$a = [
		[1, 2, 3, 'A'],
		[1, 2, 'B', 'C'],
		[1, 'D', 'E', 'F']
	];
	for ($i=0; $i <= 2; $i++) { 
		for($j = 0;$j < 3-$i;$j++){
			$val = $a[$i][$j];
			echo "$val";
		}echo "<br>";
	}
	for ($i=0; $i <= 2; $i++) { 
		for($j = 3 - $i;$j < 4;$j++){
			$val = $a[$i][$j];
			echo "$val";
		}echo "<br>";
	}
?>