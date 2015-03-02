<!-- Written by Chris Joo -->

<?php
	session_start();
	 
	$nameset = false;
	$pwset = false;
	$text1 = false;
	$text2 = false;
	if (isset($_POST))
	   {
			foreach (array_keys($_POST) as $name)
			{
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
<script src="functions.js"></script>
<head>
	<title>Login Page</title>
<style type="text/css">
body {background-image: url(login.jpg);
		background-size: 1000px;
		background-repeat: no-repeat;}

</style>
</head>
<body>
	<form method="post" action="" id="loginform">
	<div style="position:absolute; left:5px; top:100px; color:black">
	<table cellspacing="3" cellpadding="2">
		<tr><td align="right"><b>User ID:</b></td>
		<td><input type="text" name="UserID" size="20" id="userid" value="<?php if(isset($loginName)){echo $loginName;} $text1 = true;?>"></td></tr>
		<tr><td align="right"><b>Password:</b></td>
		<td><input type="text" name="PW" size="20" id="userpw" value="<?php if(isset($loginPw)){echo $loginPw;} $text2 = true;?>"></td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td><input type= "submit" value="Log In" style="font-family: 'Trebuchet MS'; color: black; 
					background-color: lightblue;" ></td></tr>
	</div>	
	</form>

<?php
	if (!empty($message))
	{
		print("<script> alert('$message'); </script>");
	}
	

?>
<script type="text/javascript">
if ( document.getElementById("userid").value == "" || document.getElementById("userpw").value == "" )
{
	
}
else{ <?php echo "FormLoginSubmit();"?> }


</script>
</body>
</html>