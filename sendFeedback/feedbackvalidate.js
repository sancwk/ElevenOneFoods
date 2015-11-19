function name_check() {
	
	var name = document.getElementById("name").value;
	if (name.length <= 30) {
		
		var pattern = /^[a-zA-Z|\s]+$/;
		if (!lname.match(pattern)){
			alert ("Please enter only letters and spaces");
			return false;
		}
		else {
			return true;
		}
	
	}
	else {
		alert ("Too many characters. Maximum number of characters is 50.")
		return false;
	}

}