<?php
	$uerror = "";

	if(isset($_REQUEST['submit'])){
		
		if($_REQUEST['email'] == null){
			$uerror = "Enter valid Email";
		}else{
			$uerror = $_REQUEST['email'];
		}
	}
?>
<html> 
	<head> </head>
	<body> 
		<br> <br> <br>
		<form action = "#" method = "POST"> 
			Email : <br>
			<input type = "text" name = "email" value = "<?=$uerror?>"> <br>
			<input type="submit" name="submit" value="Submit"> <br>
		</form>
	</body>
</html>