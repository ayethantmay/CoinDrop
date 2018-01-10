/**
 * @author GE40
 */



 function register() {
var femail = document.f2.email.value;
var fpass=document.f2.pw.value;


 if (email_validate(femail))
 	{
 		if(password_validate(fpass))
 				{
 						return true;

 				}
 	}
 return false;
 }


 function email_validate(femail) {
		var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		if (femail == "") {
			alert("Enter email address.");
			document.f2.email.focus();
			document.f2.email.select();
			return false;
		}

		if (femail.match(mailformat)) {
			return true;
		} else {
			alert("Invalid email address. Type (username@gmail.com)");
			document.f2.email.focus();
			document.f2.email.select();
			return false;
		}

	}



function password_validate(fpass) {
	if (fpass == "") {
		alert("Enter password");
		document.f2.pw.focus();
		document.f2.pw.select();
		return false;

	}
	var count=fpass.length;
       if(count>10){
            alert("Password field cannot contain more than 10 letters.");
            document.f2.pw.focus();
		     document.f2.pw.select();
		     return false;
        }
       else {
   		//alert("Successfully logged in");
   		//window.location="index.php";
   		return true;
   	}

}


