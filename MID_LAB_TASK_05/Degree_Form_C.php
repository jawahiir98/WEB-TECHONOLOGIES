<?php
	$degree = ['SSC' => 0,'HSC' => 0,'BSc' => 0];
	if(isset($_POST['submit'])){
	    if(!empty($_POST['degree'])) {
	    	$cnt = 0;
	        foreach($_POST['degree'] as $value){
	        	if($value == "SSC") $degree['SSC'] = 1;
	        	if($value == "HSC") $degree['HSC'] = 1;
	        	if($value == "BSc") $degree['BSc'] = 1;
	        }

	    }
	}
?>
<html>
	<head>

	</head>
	<body>
		<br><br><br>
		<form method="POST" action="#">
			<fieldset>
				<legend>Degree</legend>
				<input type="checkbox" name="degree[]" value="SSC" <?php if($degree['SSC'] == 1) echo 'checked = "checked"' ?>> SSC   
				<input type="checkbox" name="degree[]" value="HSC" <?php if($degree['HSC'] == 1) echo 'checked = "checked"' ?>> HSC  
				<input type="checkbox" name="degree[]" value="BSc" <?php if($degree['BSc'] == 1) echo 'checked = "checked"' ?>> BSc <br>
			</fieldset>
			<br>
			<input type = "submit" name = "submit" value = "submit">
		</form>
	</body>
</html>