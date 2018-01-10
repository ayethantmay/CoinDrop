/**
 * @author GE40
 */



 function register() {

 var fpass1=document.f4.cpw.value;
 var fpass2=document.f4.npw.value;
 var frepass=document.f4.repw.value;


 		if (password_validate1(fpass1)) //cpw
 			{
 				if(password_validate2(fpass2)) //npw
 				{
 					if(repass_validate(frepass))
 					{
 							return true;
 					}
 				}
 			}

 return false;
 }



function password_validate1(fpass1) {
	if (fpass1 == "") {
		alert("Enter password");
		document.f4.cpw.focus();
		document.f4.cpw.select();
		return false;

	}
	var count=fpass1.length;
       if(count>10){
            alert("Password field cannot contain more than 10 letters.");
            document.f4.cpw.focus();
		     document.f4.cpw.select();
		     return false;
        }
	else return true;
}


function password_validate2(fpass2) {
	if (fpass2 == "") {
		alert("Enter password");
		document.f4.npw.focus();
		document.f4.npw.select();
		return false;

	}
	var count=fpass2.length;
       if(count>10){
            alert("Password field cannot contain more than 10 letters.");
            document.f4.npw.focus();
		     document.f4.npw.select();
		     return false;
        }
	else return true;
}



function repass_validate(frepass) {
	if (frepass == "") {
		alert("Enter confirm password");
		document.f4.repw.focus();
		document.f4.repw.select();
		return false;

	}
	if(document.f4.npw.value!=document.f4.repw.value)
	{
		alert("Confirm password doesn't match!");
		document.f4.repw.focus();
		document.f4.repw.select();
		return false;

	}
	else {
		//alert("Successfully registered");
		//window.location="index.php";
		return true;
	}


}

