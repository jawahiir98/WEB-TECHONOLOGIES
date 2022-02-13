<?php

	$error_dob = "";
	$dob = "";

	if(isset($_REQUEST['submit'])){
		
		if($_REQUEST['dob'] == null){
			$error_dob = "Enter valid Date of Birth";
		}else{
			$dob = $_REQUEST['dob'];
		}
	}
?>
<html>
	<head>

	</head>
	<body>
		<br><br><br>
		<form method="POST" action="#">
			<fieldset width = "100px">
				<legend>Date of birth: </legend>
				<input type="date" name="dob" value=""> <br>
				<hr noshade="noshade" width = "15%" align = "left">
				<input type="submit" name="submit" value="submit">  <br>
				<?php
					if($dob == null and $error_dob == null){
						print("");
					}
					else if($error_dob != null){
						echo $error_dob;
					}else{
						echo "YYYY / MM / DD <br>";
						//$dob = strrev($dob);
						for($i = 0;$i < strlen($dob);$i++){
							if($i && $dob[$i - 1] == '-') echo " ";
							print("$dob[$i]");
							if($i < strlen($dob) - 1 && $dob[$i + 1] == '-') echo " ";
						}
					}
				?>
			</fieldset>
		</form>
	</body>
</html>