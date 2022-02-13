<?php
	$email = "";

	if(isset($_REQUEST['submit'])){
		
		if($_REQUEST['email'] == null){
			$email = "Enter valid Email";
		}else{
			$email = $_REQUEST['email'];
		}
	}
?>
<html> 
	<head> </head>
	<body> 
		<br> <br> <br>
		<form action = "#" method = "POST"> 
			Email : <br>
			<input type = "text" name = "email" value = ""> <br>
			<input type="submit" name="submit" value="Submit"> <br>
			<?php
				echo "<br>";
				echo $email;
			?>
		</form>
	</body>
</html>