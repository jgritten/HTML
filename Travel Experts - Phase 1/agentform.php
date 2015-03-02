<!-- Kaseem Farayola Agent Entry Form-->

<?php
   session_start();
   if (!isset($_SESSION['loggedin']))
   {
      $_SESSION['pagename'] = "agentform.php";
	  header("Location: Ilogini.php");
   }
   
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
   <meta http-equiv="content-type" content="text/html; charset=utf-8" />

<html>
<head>
   <title>Agent Form</title>
</head>
<body>
   <form method="get" action="addagent">
      First Name: <input type="text" name="AgtFirstName" /><br />
      Middle Initial: <input type="text" name="AgtMiddleInitial" /><br />
      Last Name: <input type="text" name="AgtLastName" /><br />
      Business Phone: <input type="text" name="AgtBusPhone" /><br />
      Email: <input type="text" name="AgtEmail" /><br />
      Position: <input type="text" name="AgtPosition" /><br />
      Agency ID: <input type="text" name="AgencyId" /><br />
	  <input type="submit" value="Save" />
   </form>

<?php

?>
</body>
</html>