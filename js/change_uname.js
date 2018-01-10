/**
 * @author GE40
 */



 function register() {
 var fname = document.f3.uname.value;

 if (name_validate(fname))
 	{

 							return true;

 	}
 return false;
 }


function name_validate(fname) {
	if (fname == "") {
		alert("Enter full name");
		document.f3.uname.focus();
		document.f3.uname.select();
		return false;
	} else {
		for (var i = 0; i < fname.length; i++) {
			if (fname.charAt(i) == " ") {

			} else if (!isNaN(fname.charAt(i))) {
				alert("Please enter alphabetical character only in name");
				document.f3.uname.focus();
				document.f3.uname.select();
				return false;
			}
		}
		//alert("Your username is changed.");
		return true;
	}

}

