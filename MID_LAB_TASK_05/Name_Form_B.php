<?php
	$uerror = "";
	$uname = "";

	if(isset($_REQUEST['submit'])){
		
		if($_REQUEST['name'] == null){
			$uerror = "Enter valid Name";
		}else{
			$uname = $_REQUEST['name'];
		}
	}
?>
<html> 
	<head> </head>
	<body> 
		<br> <br> <br>
		<form action = "#" method = "POST"> 
			Name : <br>
			<input type = "text" name = "name" value = ""> <br>
			<input type="submit" name="submit" value="Submit"> <br>
			<?php
				if($uerror == null) print("Name : $uname");
				else echo $uerror; 
			?>
		</form>
	</body>
</html>