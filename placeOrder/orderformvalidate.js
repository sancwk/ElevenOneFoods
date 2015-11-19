// JavaScript Document

function name_check() {
	
	var fname = document.getElementById("fname").value;
	if (fname.length <= 50) {
		
		var pattern = /^[a-zA-Z|\s]+$/;
		if (!fname.match(pattern)){
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

function name_check1() {
	
	var lname = document.getElementById("lname").value;
	if (lname.length <= 50) {
		
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



function NIC_check() {
	var nic = document.getElementById("nic").value;
	var pattern = /^[0-9|V|v]+$/;
	if (nic.match(pattern)) {
		if (nic.length == 10) {
			if (nic.indexOf("v") != 9) {
				alert ("Incorrect nic number.");
				return false;
			}
			else {
				return true;
			}
		}
		else {
			alert ("Incorrect length.");
			return false;
		}
	}
	else {
		alert ("Please enter only numbers and a V.");
		return false;
	}
}



function quantity() {
	
	var quantity = document.getElementById("quantity").value;
	var pattern = /^[0-9]+$/;
	if (quantity.match(pattern)){
		
		if (quantity <= 10) {
			return true;
		}
		else {
			alert ("Too many ");
			return false;
		}
	}
	else {
		alert ("Please enter only integer numbers")
		return false;
	}
	
}
function adr_check() {
	
	var adr = document.getElementById("adr").value;
	if (adr.length <= 50) {
		
		var pattern = /^[a-zA-Z|\s]+$/;
		if (!adr.match(pattern)){
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
function cno_check() {
	
	var cno = document.getElementById("cno").value;
	var pattern = /^[0-9]+$/;
	if (cno.match(pattern)){
		
		if (cno == 10) {
			return true;
		}
		else {
			alert ("Too many ");
			return false;
		}
	}
	else {
		alert ("Please enter only integer numbers")
		return false;
	}
	
}
