<?php 
	session_start();
	$agencyid = $_SESSION['current_agencyid'];
?>
<html>
	<head>
		<title>Agent Registration</title>
	</head>
<body>
	<br> <br> <br>
	<a href="Agency_dashboard.php"> Dashboard </a>
	<div class="container">
		<div class="agents">
			<form id="form" class="form" name = "regform" onsubmit="return validation()"  method = "POST" action = "../Controller/Agent_registration_validate.php?agencyid=<?=$agencyid?>">
				<table class="tb">
					<tr>
						<td>Agent Name:</td>
						<td><input type="text" name="agentname" value = ""></td> <br>
						
					</tr>
					<tr><td id = "show1"></td></tr>
					<tr>
						<td>Contact Information:</td>
						<td><input type="text" name="contact" value = ""></td><br>
						
					</tr>
					<tr><td id = "show2"></td></tr>
					<tr>
						<td>Rating:</td>
						<td><input type="text" name="rate" value = ""></td><br>
						
					</tr>
					<tr><td id = "show3"></td></tr>
					<tr>
						<td>Hiring rate:</td>
						<td><input type="text" name="hire" value = ""></td><br>
						
					</tr>
					<tr><td id = "show4"></td></tr>
					<tr><td><input type="submit" name="submit" value = "Add"></td></tr>
				</table>
			</form>
		</div>
	</div>
	<script type="text/javascript">
		
		let name = document.forms['form']['agentname'];
		let contact = document.forms['form']['contact'];
		let rate =document.forms['form']['rate'];
		let hire = document.forms['form']['hire'];

		let retval = 1;
		let valid_contact = 1;

		function validate()
		{
			if(name.value === "")
			{
				document.getElementById('show1').textContent = "Name cannot be empty";
				document.getElementById('show1').style.color = "red";
				retval = 0;
			}
			if(contact.value === "")
			{
				document.getElementById('show2').textContent = "Contact cannot be empty";
				document.getElementById('show2').style.color = "red";
				retval = 0;
			}
			if(rate.value === "")
			{
				document.getElementById('show3').textContent = "Agent rating should be at least 0";
				document.getElementById('show3').style.color = "red";
				retval = 0;
			}
			if(hire.value === "")
			{
				document.getElementById('show4').textContent = "Hiring rate cannot be empty";
				document.getElementById('show4').style.color = "red";
				retval = 0;
			}
			if(valid_contact == 0)
			{
				document.getElementById('show2').textContent = "Invalid contact number";
				document.getElementById('show2').style.color = "red";
			}
			if(retval == 0) return false;
			alert("successful");
			return true;
		}
		function onlydigs(contact)
		{
			return /^[0-9]+$/.test(contact);
		}
	</script>
</body>
</html>