

function validation()
{
	var agencyname = document.forms['form']['agencyname'];
	var email = document.forms['form']['email'];
	var username = document.forms['form']['username'];
	var contact = document.forms['form']['contact'];
	var password = document.forms['form']['password'];
	var confirm = document.forms['form']['password2'];
	var logo = document.forms['form']['logo'];
	let retval = 1;
	let invalid_contact = 0;
	if(onlydigs(contact.value) == false || contact.value.length <= 6){
		invalid_contact = 1;
		console.log(onlydigs(contact.value));
	}
	if(agencyname.value === ""){
		agencyname.value = "**Field cannot be left empty**";
		agencyname.style.color = "red";
		retval = 0;
	}
	if(email.value === ""){
		email.value = "**Field cannot be left empty**";
		email.style.color = "red";
		retval = 0;
	}
	if(username.value === "" || username.value.length <= 5 ){
		if(username.value === "") username.value = "**Field cannot be left empty**";
		else username.value = "*Username must at least be 6 characters*";
		username.style.color = "red";
		retval = 0;
	}
	if(contact.value === "" || invalid_contact == 1){
		if(contact.value === "") contact.value = "**Field cannot be left empty**";
		else contact.value = "*Invalid contact number*";
		contact.style.color = "red";
		retval = 0;
	}
	if(password.value != confirm.value || password.value === ""){
		if(password.value === "") {
			document.getElementById("show5").textContent = "*password and confirm password cannot be empty*";
			document.getElementById("show4").textContent = "*password and confirm password cannot be empty*";
		}
		else{
			document.getElementById("show5").textContent = "*password and confirm password does not match*";
			document.getElementById("show4").textContent = "*password and confirm password does not match*";
		}
		document.getElementById("show5").style.color = "red";
		document.getElementById("show4").style.color = "red";
		retval = 0;
	}
	if(password.value.length < 6)
	{
		document.getElementById("show5").textContent = "*password must at least be 6 characters*";
		document.getElementById("show4").textContent = "*password must at least be 6 characters*";
		document.getElementById("show5").style.color = "red";
		document.getElementById("show4").style.color = "red";
		retval = 0;
	}
	if(logo.value === ""){
		document.getElementById("show6").textContent = "*Field cannot be blank*";
		document.getElementById("show6").style.color = "red";
		retval = 0;
	}
	if(retval == 0) return false;
	return true;
}

function onlydigs(contact)
{
	return /^[0-9]+$/.test(contact);
}