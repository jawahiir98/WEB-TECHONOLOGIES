<?php
	$bg = "";
	if(isset($_POST['submit'])){
		if(!empty($_POST['BG'])){
			$bg = $_POST['BG'];
		}
	    else echo "Enter a degree";
		echo $bg;
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
				<option value="A+">A+</option>
				<option value="A-">A-</option>
				<option value="B+">B+</option>
				<option value="B-">B-</option>
				<option value="AB+">AB+</option>
				<option value="AB-">AB-</option>
				<option value="O+">O+</option>
				<option value="O-">O-</option> 
			</select> <br>
			<hr width = "20%" align = "left" noshade="noshade" > 
			<input type="submit" name="submit" value="submit">
		</form>
	</body>
</html>