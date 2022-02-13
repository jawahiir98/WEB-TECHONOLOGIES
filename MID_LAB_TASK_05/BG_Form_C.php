<?php
	$bg = "";
	if(isset($_POST['submit'])){
		if(!empty($_POST['BG'])){
			$bg = $_POST['BG'];
		}
	    else echo "Enter a degree";
	}
?>
<html>
	<head>

	</head>
	<body>
		<br><br><br>
		<form method="POST" action="#">
			Blood Group : 
			<select name="BG">
				<option value="A+" <?php if($bg == "A+") echo 'selected = "selected"'?>>A+</option>
				<option value="A-" <?php if($bg == "A-") echo 'selected = "selected"'?>>A-</option>
				<option value="B+" <?php if($bg == "B+") echo 'selected = "selected"'?>>B+</option>
				<option value="B-" <?php if($bg == "B-") echo 'selected = "selected"'?>>B-</option>
				<option value="AB+" <?php if($bg == "AB+") echo 'selected = "selected"'?>>AB+</option>
				<option value="AB-" <?php if($bg == "AB-") echo 'selected = "selected"'?>>AB-</option>
				<option value="O+" <?php if($bg == "O+") echo 'selected = "selected"'?>>O+</option>
				<option value="O+" <?php if($bg == "O-") echo 'selected = "selected"'?>>O+</option>
				<option value="O-" >O-</option> 
			</select> <br>
			<hr width = "20%" align = "left" noshade="noshade" > 
			<input type="submit" name="submit" value="submit">
		</form>
	</body>
</html>