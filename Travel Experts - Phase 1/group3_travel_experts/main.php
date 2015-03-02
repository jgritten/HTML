<!--
Date: November 20 2014
Name: Brett Howard
Abstract: Travel Experts main page.
-->
<?php
?>
<!DOCTYPE html>
<html>
<head>
<title>Travel Experts</title>
<style>
div {background-color: #4D94DB}
body {background-image:url(background.jpg); background-size: 135%;}
</style>
<body>
<div align="center">
<b><i><font size="7">TRAVEL EXPERTS</font></i></b> 
</div>
<font size="5">
<hr>
<div align="center">
<a href="main.php">HOME</a>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<a href="packages.php">VACATION PACKAGES</a>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<a href="RegistrationPage.php">CUSTOMER REGISTRATION</a>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<a href="contactus.php">CONTACT US</a>
</div>
</font>
<hr>
<div align="right">
Need to Register?
<a href="RegistrationPage.php"><input type="image" src="register.png" width="60px"></a>
<br>
<br>
<a href="login.php"><input type="image" src="login.png" width="55px"></a>
</div>
<hr>
</body>
<?php
include "mainpics.php" 
?>
<?php
include "aboutus.php"
?>
</html>