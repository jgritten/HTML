<!-- Written by Chris Joo -->

<!DOCTYPE html>
<html>
<head>
	<title>Registration Validation</title>
</head>
<body>
<?php
	include("addcustomer.php");
	if (isset($_REQUEST['UserID']))
	{
		$message = "";
		if (empty($_REQUEST['UserID']))
		{
			$message .= "User ID must have a value\\n";
		}

		if (empty($_REQUEST['PW']))
		{
			$message .= "Password must have a value\\n";
		}
		elseif (!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/", $_REQUEST['PW']))
			{
				$message .= "Password must contain one upper & lower case letters, numbers, and over 6 didgits long\\n";
			}



		if (empty($_REQUEST['CustFirstName']))
		{
			$message .= "First name must have a value\\n";
		}
		elseif (!preg_match("/^([a-z]+)$/i", $_REQUEST['CustFirstName']))
			{
				$message .= "Invalid character in first name\\n";
			}

		if (empty($_REQUEST['CustLastName']))
		{
			$message .= "Last name must have a value\\n";
		}
		elseif (!preg_match("/^([a-z]+)$/i", $_REQUEST['CustLastName']))
			{
				$message .= "Invalid character in last name\\n";
			}

		if (empty($_REQUEST['CustAddress']))
		{
			$message .= "Address must have a value\\n";
		}
		
		if (empty($_REQUEST['CustCity']))
		{
			$message .= "City must have a value\\n";
		}
		
		if (empty($_REQUEST['CustProv']))
		{
			$message .= "Province must have a value\\n";
		}
		elseif (!preg_match("/^[a-z]{2}$/i", $_REQUEST['CustProv']))
			{
				$message .= "Invalid character in last name\\n";
			}

		if (empty($_REQUEST['CustPostal']))
		{
			$message .= "Postal Code must have a value\\n";
		}
		elseif (!preg_match("/^[a-z]\d[a-z]\d[a-z]\d$/i", $_REQUEST['CustPostal']))
			{
				$message .= "Invalid character in postal code\\n";
			}

		if (empty($_REQUEST['CustCountry']))
		{
			$message .= "Country must have a value\\n";
		}
		
		if (empty($_REQUEST['CustHomePhone']))
		{
			$message .= "Primary phone number must have a value\\n";
		}
		elseif (!preg_match("/^(([0-9]{3}\-){2}[0-9]{4})|([0-9]{10})$/", $_REQUEST['CustHomePhone']))
			{
				$message .= "Invalid character in primary phone number\\n";
			}

		if (empty($_REQUEST['CustEmail']))
		{
			$message .= "Email must have a value\\n";
		}
		elseif (!preg_match("/^[a-z0-9_.-]{2,}@[a-z0-9]+\.[a-z]{2,6}$/i", $_REQUEST['CustEmail']))
			{
				$message .= "Invalid character in email address\\n";
			}



		if (!empty($message))
		{
			print("<script> alert('$message'); </script>");
			header("refresh:0;url=RegistrationPage.php");
		}
		else
		{
			$result = addCustomer($_REQUEST);
			$result2 = addCreditCard($_REQUEST);
			$result3 = addUserId($_REQUEST);
			if ($result)
			{
				//print($result);
				header("Location: login.php");
			} 
			else
			{
				echo("There was a problem saving the data");
			}
		}
	}

?>

</body>
</html>