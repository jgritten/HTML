<!-- Written by Chris Joo -->

<?php

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>
<head>
<title>Customer Registration</title>

<script language="javascript">
/*

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
	var x=document.RegistrationPage.addr1.value;
	var x=document.RegistrationPage.addr2.value;
	var x=document.RegistrationPage.addr3.value;
	var x=document.RegistrationPage.addr4.value;
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
	var regex=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;
	//var regex=/^[A-Za-z0-9]*[A-Za-z0-9][A-Za-z0-9]$/;
	var x=document.RegistrationPage.PW.value;
	if(!regex.test(x))  
		{alert('Password must contain one upper & lower case letters, numbers, and over 6 didgits long');
			ok=false;}
}


function check_pc()
{
	var regex=/^[a-z]\d[a-z]\d[a-z]\d$/i;
	var x=document.RegistrationPage.pc.value;
	if(!regex.test(x)) {alert('Incorrect postal code format');ok=false;}
}

function check_prov()
{
	var regex=/^[a-z]{2}$/i;
	var x=document.RegistrationPage.prov.value;
	if(!regex.test(x)) {alert('Province must have 2 letters only');ok=false;}
}

function check_phoneno()
{
	var regex=/^(([0-9]{3}\-){2}[0-9]{4})|([0-9]{10})$/;
	var x=document.RegistrationPage.phoneno1.value;
	if(!regex.test(x)) {alert('Incorrect phone number format');ok=false;}
}

function check_email()
{
	var regex=/^[a-z0-9_.-]{2,}@[a-z0-9]+\.[a-z]{2,6}$/i;
	var x=document.RegistrationPage.email.value;
	if(!regex.test(x)) {alert('Incorrect email address format');ok=false;}
}
*/
</script>





<style type="text/css">
body {background-image: url(paradise.jpg);
		background-size: 1000px;
		background-repeat: no-repeat;}

</style>
</head>
<body>
	<div style="position:absolute; left:350px; top:20px;">
	<font size="6"><i><b>Registration</b></i></font></div>

	<form name="RegistrationPage" method="get" 
			action="RegValidation.php">
	<div style="position:absolute; left:5px; top:100px; color:#FFFFE0">
	<table cellspacing="3" cellpadding="2">
		<tr><td align="right"><b>User ID:</b></td>
		<td><input type="text" name="UserID" size="20"></td></tr>
		<tr><td align="right"><b>Password:</b></td>
		<td><input type="text" name="PW" size="20"></td></tr>
		<tr><td>&nbsp;</tr></td>
		<tr><td align="right"><i><b>First Name:</b></i></td> 
		<td><input type="text" name="CustFirstName" size="20"></td></tr>
		<tr><td align="right"><i><b>Last Name:</b></i></td> 
		<td><input type="text" name="CustLastName" size="20"></td></tr>
		<tr><td align="right"><i><b>Address:</b></i></td> 
		<td><input type="text" name="CustAddress" size="35"></td></tr>	
		<tr><td align="right"><i><b>City:</b></i></td> 
		<td><input type="text" name="CustCity" size="20"></td></tr>
		<tr><td align="right"><i><b>Province:</b></i></td> 
		<td><input type="text" name="CustProv" size="20"></td></tr>
		<tr><td align="right"><i><b>Postal Code:</b></i></td> 
		<td><input type="text" name="CustPostal" size="20"></td></tr>
		<tr><td align="right"><i><b>Country:</b></i></td> 
		<td><input type="text" name="CustCountry" size="20"></td></tr>	
		<tr><td align="right"><i><b>Primary Phone Number:</b></i></td> 
		<td><input type="text" name="CustHomePhone" size="20"></td></tr>
		<tr><td align="right"><i><b>Business Phone Number:</b></i></td> 
		<td><input type="text" name="CustBusPhone" size="20"></td></tr>
		<tr><td align="right"><i><b>E-mail:</b></i></td> 
		<td><input type="text" name="CustEmail" size="20"></td></tr>
	</table></div>

	<div style="position:absolute; left: 500px; top: 340px">
	<font size="3" color="#E1F5A9"><b><u>Payment Method: Type of Card</u><b></font>
	<table>
		<tr>&nbsp;</tr><tr>&nbsp;</tr>
		<tr>
		<td><input type="radio" value="AMEX" name="CCName">
			<img src="amex.gif" height="20" width="40"></td><td>&nbsp;</td>
		<td><input type="radio" value="DC" name="CCName">
			<img src="discover.jpg" height="20" width="40"></td><td>&nbsp;</td>
		<td><input type="radio" value="MC" name="CCName">
			<img src="mastercard.gif" height="20" width="40"></td><td>&nbsp;</td>
		<td><input type="radio" value="VISA" name="CCName">
			<img src="visa.gif" height="20" width="40"></td><td>&nbsp;</td>
		</tr>
	</table>	
	<table>
		<td><font size="3">
		Card Number <input type="text" name="CCNumber" size="10"></font></td>
		<td><font size="3">
		Expiration Date <input type="text" name="CCExpiry" size="10"></td>
	</table></div>

	<div style="position:absolute; left: 400px; top: 500px;">
	<input type= "submit" value="Submit" style="font-family: 'Trebuchet MS'; color: black; 
					background-color: #F7D358;" 
					onclick="return confirm('Do you want to submit?');">
	&nbsp;&nbsp;&nbsp;&nbsp;
	<input type= "reset" value="Clear" style="font-family: 'Trebuchet MS'; color: black; 
					background-color: #F7D358;" 
					onclick="return confirm('Do you want to clear?');">
	</div>
</form>

<div style="position:absolute; left: 10px; top: 560px; width:1000px;">
<hr>
<b>Travel Experts
<br>
Copyright &#169; 2014
<br>
All Rights Reserved</b>

</div>
</body>


</html>
