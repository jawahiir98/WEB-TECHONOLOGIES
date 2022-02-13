<?php 

	$gender = "";
	//print_r($_REQUEST);
	if(isset($_REQUEST['submit'])){
		$gender = $_REQUEST["gender"];
	}
	$male = false;
	$female = false;
	$other = false;
	if($gender == "Male") $male = true;
	else if($gender == "Female") $female = true;
	else $other = true;
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
				<input type="radio" name="gender" value= "Male" <?php if($male == true) echo 'checked = "checked"' ?> > Male 
				<input type="radio" name="gender" value= "Female"  <?php if($female == true) echo 'checked = "checked"' ?>> Female 
				<input type="radio" name="gender" value= "Other"  <?php if($other == true) echo 'checked = "checked"' ?> > Other <br> 
			</fieldset>
			<input type = "submit" name = "submit" value = "submit"> <br>
		</form>
	</body>
</html>