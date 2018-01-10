/**
 * @author GE40
 */



 function register() {
 var fname = document.f1.name.value;
 var femail = document.f1.email.value;
 var fpass=document.f1.pass.value;
 var frepass=document.f1.repass.value;


 if (name_validate(fname))
 	{
 		if (email_validate(femail))
 			{
 				if(password_validate(fpass))
 				{
 					if(repass_validate(frepass))
 					{
 							return true;
 					}
 				}
 			}
 	}
 return false;
 }


function name_validate(fname) {
	if (fname == "") {
		alert("Enter full name");
		document.f1.name.focus();
		document.f1.name.select();
		return false;
	} else {
		for (var i = 0; i < fname.length; i++) {
			if (fname.charAt(i) == " ") {

			} else if (!isNaN(fname.charAt(i))) {
				alert("Please enter alphabetical character only in name");
				document.f1.name.focus();
				document.f1.name.select();
				return false;
			}
		}
		return true;
	}

}

function email_validate(femail) {
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if (femail == "") {
		alert("Enter email address.");
		document.f1.email.focus();
		document.f1.email.select();
		return false;
	}

	if (femail.match(mailformat)) {
		return true;
	} else {
		alert("Invalid email address. Type (username@gmail.com)");
		document.f1.email.focus();
		document.f1.email.select();
		return false;
	}

}


function password_validate(fpass) {
	if (fpass == "") {
		alert("Enter password");
		document.f1.pass.focus();
		document.f1.pass.select();
		return false;

	}
	var count=fpass.length;
       if(count>10){
            alert("Password field cannot contain more than 10 letters.");
            document.f1.pass.focus();
		     document.f1.pass.select();
		     return false;
        }
	else return true;
}



function repass_validate(frepass) {
	if (frepass == "") {
		alert("Enter confirm password");
		document.f1.repass.focus();
		document.f1.repass.select();
		return false;

	}
	if(document.f1.pass.value!=document.f1.repass.value)
	{
		alert("Confirm password doesn't match!");
		document.f1.repass.focus();
		document.f1.repass.select();
		return false;

	}
	else {
		//alert("Successfully registered");
		//window.location="index.php";
		return true;
	}


}

