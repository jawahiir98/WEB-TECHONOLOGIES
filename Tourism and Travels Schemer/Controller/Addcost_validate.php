<?php

	if(isset($_REQUEST['submit']))
	{
		$frm = $_REQUEST['pick'];
		$to = $_REQUEST['des'];
		$cst = $_REQUEST['cost'];
		$dis = $_REQUEST['dis'];
		if($dis == null or $to == null or $frm == null or $cst == null)
		{
			echo "Fields cannot be blank";
		}
		else
		{
			$file = fopen('../Model/mapwithcost.txt', 'r');
			$ind = 1;
			while(!feof($file))
			{
				$string = fgets($file);
				if($string == "") continue;
				$mp = explode('|', $string);
				$ind = max($ind, $mp[4]);
			}
			$ind += 1;
			fclose($file);
			$file = fopen('../Model/mapwithcost.txt', 'a');
			$string = $frm."|".$to."|".$dis."km"."|".$cst."tk"."|".$ind."\r\n";
			if(fwrite($file, $string))
			{
				header('location: ../Views/Travel.php');
			}
			else
			{
				echo "Error occured in inserting";
			}
		}
	}
?>