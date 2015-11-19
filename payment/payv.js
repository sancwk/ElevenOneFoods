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



function q_check() {
	
	var cno = document.getElementById("quantity").value;
	var pattern = /^[0-9]+$/;
	if (cno.match(pattern)){
		
		if (cno <= 10) {
			return true;
		}
		else {
			alert ("Invalid Quantity ");
			return false;
		}
	}
	else {
		alert ("Invalid Quantity ");
		return false;
	}
	
}
function a_check() {
	
	var cno = document.getElementById("amount").value;
	var pattern = /^[0-9]+$/;
	if (cno.match(pattern)){
		
		if (cno > 0) {
			return true;
		}
		else {
			alert ("Invalid Amount ");
			return false;
		}
	}
	else {
		alert ("Invalid Amount ");
		return false;
	}
	
}
function c_check() {
	
	var cno = document.getElementById("card").value;
	var pattern = /^[0-9]+$/;
	if (cno.match(pattern)){
		
		if (cno>0) {
			return true;
		}
		else {
			alert ("Invalid Card Number ");
			return false;
		}
	}
	else {
		alert ("Invalid Card Number ");
		return false;
	}
	
}