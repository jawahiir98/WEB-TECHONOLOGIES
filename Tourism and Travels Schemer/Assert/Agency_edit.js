function ajax(){

	let student = {
		id: document.getElementById('id').innerHTML,
		agencyname: document.getElementById('agencyname').value,
		email: document.getElementById('email').value,
		contact: document.getElementById('contact').value,
		ok: false
	};

	let json = JSON.stringify(student);

	let http = new XMLHttpRequest();
	http.open('GET', '../Controller/Agency_edit_validate.php?myjson='+json, true);
	http.send();
	http.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200 ){
			
			let obj = JSON.parse(this.responseText);
			console.log(obj);

			document.getElementById('agencyname').value = obj.agencyname;
			document.getElementById('email').value = obj.email;
			document.getElementById('contact').value = obj.contact;

			if(obj.ok == true) {
				alert("Success");
				location.href = "../Controller/Agency_edit_validattion.php";
			}
			//document.getElementsByTagName('h1')[0].innerHTML= this.responseText;
		}
	}
}	