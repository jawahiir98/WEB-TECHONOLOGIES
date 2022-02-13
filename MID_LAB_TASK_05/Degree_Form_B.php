<?php
	if(isset($_POST['submit'])){

	    if(!empty($_POST['degree'])) {
	    	$cnt = 1;
	        foreach($_POST['degree'] as $value){
	            echo "Degree $cnt: ".$value.'<br/>';
	            $cnt++;
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
				<input type="checkbox" name="degree[]" value="SSC"> SSC  
				<input type="checkbox" name="degree[]" value="HSC"> HSC  
				<input type="checkbox" name="degree[]" value="BSc"> BSc <br>
			</fieldset>
			<br>
			<input type = "submit" name = "submit" value = "submit">
		</form>
	</body>
</html>