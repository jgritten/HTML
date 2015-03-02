


function check_()
{
	ok=true;
	check_blank();
	check_pw();
	check_name();
	check_email();
	check_pc();
	check_phoneno();
	return ok;
}

function check_blank()
{
	var regex=/^([a-z]+)$/i;
	var x=document.RegistrationPage.UserID.value;
	var x=document.RegistrationPage.PW.value;
	var x=document.RegistrationPage.name1.value;
	var x=document.RegistrationPage.name2.value;
	var x=document.RegistrationPage.addr1.value;
	var x=document.RegistrationPage.addr2.value;
	var x=document.RegistrationPage.addr3.value;
	var x=document.RegistrationPage.email.value;
	var x=document.RegistrationPage.phoneno1.value;
	if(!regex.test(x)) {alert('Please enter all fields'); ok=false;}

}

function check_name()
{
	var regex=/^([a-z]+)$/i;
	var x=document.RegistrationPage.name1.value;
	var x=document.RegistrationPage.name2.value;
	if(!regex.test(x)) {alert('Names can only contain letters'); ok=false;}	
}

function check_pw()
{
	var regex=/^[A-Za-z0-9 _]*[A-Za-z0-9][A-Za-z0-9 _]$/;
	var x=document.RegistrationPage.PW.value;
	if(!regex.test(x)) 
		{alert('Password must contain letters - upper and lower case =  and numbers');ok=false;}
}


function check_pc()
{
	var regex=/^(([a-z][0-9]){3}$","g")$/i;
	var x=document.RegistrationPage.pc.value;
	if(!regex.test(x)) {alert('Incorrect postal code format');ok=false;}
}

function check_phoneno()
{
	var regex=/^(([0-9]{3}\-){2}[0-9]{4})|([0-9]{10})$/;
	var x=document.RegistrationPage.phoneno1.value;
	if(!regex.text(x)) {alert('Incorrect phone number format');ok=false;}
}

function email()
{
	var email=/^[a-z0-9_.-]{2,}@[a-z0-9]+\.[a-z]{2,6}$/i;
	var x=document.RegistrationPage.email.value;
	if(!regex.text(x)) {alert('Incorrect email address format');ok=false;}
}

