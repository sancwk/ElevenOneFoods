// JavaScript Document
function ConfirmVal(){
	var email = document.getElementById("InputEmail").value;
	var email2 = document.getElementById("InputEmail2").value;
	var password = document.getElementById("InputPassword1").value;
	var password2 = document.getElementById("InputPassword2").value;
	
	if(email != email2 || password != password2){
		
		if(password != password2 && email == email2){
			document.getElementById("InputPassword2").style.borderColor = "red";
			document.getElementById("InputEmail2").style.borderColor = null;
			return false;
		}
		else if(password == password2 && email != email2){
			document.getElementById("InputPassword2").style.borderColor = null;
			document.getElementById("InputEmail2").style.borderColor = "red";
			return false;
		}
		else{
			document.getElementById("InputPassword2").style.borderColor = "red";
			document.getElementById("InputEmail2").style.borderColor = "red";
			return false;
		}
	
	return true;
	}
	
}