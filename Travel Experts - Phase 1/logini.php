<!-- Kaseem Farayola User Login-->

<?php
   session_start();
   include("functions10.php");
   if (isset($_REQUEST['userid']))
   {
      if (verifylogin($_REQUEST['userid'], $_REQUEST['password']))
	  {
	     //set session variable
		 $_SESSION['loggedin'] = true;
		 $returnpage = $_SESSION['pagename'];
		 header("Location: contactus.php");
	  }
	  else
	  {
	     //set error message
		 $message = "UserID or Password incorrect";
	  }
   }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
   <meta http-equiv="content-type" content="text/html; charset=utf-8" />

<html>
<head>
   <title>Logini Page</title>
   
<style type="text/css">
body {background-image: url("images/loginimages.jpeg");
background-size: 100%;
		background-repeat: no-repeat;}
</style>

</head>
<br><br><br>
<body>
<center>
   <form method="post" action="">
      <b>User ID</b>: <input type="text" name="userid" /><br />
	  <b>Password</b>: <input type="password" name="password" /><br />
	  <input type="submit" value="Log In" />
   </form>
</center>
<?php
   if (!empty($message))
   {
      print("<h1 style='color:blue'>$message</h1>");
   }
?>
</body>
</html>