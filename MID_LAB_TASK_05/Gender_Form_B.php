<?php 

	$gender = "";
	//print_r($_REQUEST);
	if(isset($_REQUEST['submit'])){
		$gender = $_REQUEST["gender"];
	}
	//if($gender == null) $gender = "Enter a valid gender";
	echo $gender;
?>
<html>
	<head>

	</head>
	<body>
		<br><br><br>
		<form method="POST" action="#">
			<fieldset>
				<legend>
				Gender:
				</legend>
				<input type="radio" name="gender" value="Male"> Male 
				<input type="radio" name="gender" value="Female"> Female 
				<input type="radio" name="gender" value="Other" checked> Other <br> 
			</fieldset>
			<input type = "submit" name = "submit" value = "submit"> <br>

		</form>
	</body>
</html>