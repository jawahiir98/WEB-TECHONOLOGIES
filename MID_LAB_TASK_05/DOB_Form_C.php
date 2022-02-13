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
				<input type="date" name="dob" value="<?= $dob; ?>"> <br>
				<hr noshade="noshade" width = "15%" align = "left">
				<input type="submit" name="submit" value="submit">  <br>
				<?= $error_dob; ?>  
			</fieldset>
		</form>
	</body>
</html>