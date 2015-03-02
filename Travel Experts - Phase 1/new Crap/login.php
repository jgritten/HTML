<!-- Written by Chris Joo -->

<?php
	session_start();
	 
	if (isset($_POST))
	   {
			foreach (array_keys($_POST) as $name)
			{
				$nameset = false;
				$pwset = false;
				if ( $name == 'userId' )
				{
					$loginName = $_POST[$name];
					$nameset = true;
				}
				if ( $name == 'userPw' )
				{
					$loginPw = $_POST[$name];
					$pwset = true;
				}				
			}
	   }
	   
	
	include("addcustomer.php");
	if (isset($_REQUEST['UserID']))
	{
		if (verifylogin($_REQUEST['UserID'], $_REQUEST['PW']))
		{
			//set session variable 
			$_SESSION['loggedin'] = true;

			$_SESSION['username'] = $_REQUEST['UserID'];
			//$returnpage = $_SESSION['packages.php'];
			header("Location: packages.php");

		}
		else
		{
			//set error message
			$message = "UserID or Password is incorrect";
		}
	}
?>



<!DOCTYPE html>

<html>
<script src="location.js"></script>
<head>
	<title>Login Page</title>
<style type="text/css">
body {background-image: url(login.jpg);
		background-size: 1000px;
		background-repeat: no-repeat;}

</style>
</head>
<body>
	<form method="post" action="" id="form">
	<div style="position:absolute; left:5px; top:100px; color:black">
	<table cellspacing="3" cellpadding="2">
		<tr><td align="right"><b>User ID:</b></td>
		<td><input type="text" name="UserID" size="20" id="userid" value="<?php if(isset($loginName)){echo $loginName;}?>"></td></tr>
		<tr><td align="right"><b>Password:</b></td>
		<td><input type="text" name="PW" size="20" id="userid" value="<?php if(isset($loginPw)){echo $loginPw;}?>"></td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td><input type= "submit" value="Log In" style="font-family: 'Trebuchet MS'; color: black; 
					background-color: lightblue;" ></td></tr>
	</div>	
	</form>

<?php
	if ( $nameset && $pwset )
	{
		echo"FormLoginSubmit()";
		//echo "<script src='location.js'>FormLoginSubmit();</script>";
	}
	if (!empty($message))
	{
		print("<script> alert('$message'); </script>");
	}
	

?>
</body>
</html>