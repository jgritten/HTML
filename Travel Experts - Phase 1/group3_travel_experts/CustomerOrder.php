<!-- Writen by Justin Gritten -->

<!-- Summery of items purchased in the package page -->

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<HTML>
<HEAD>
<TITLE>Package Confirmation Ticket</TITLE>
</HEAD>
<BODY>
<?PHP
   /* This page prints the form field names and values
   that were received
    */
	
	session_start();
	if ( isset($session['username']))
	{
		$id = $session['username'];
	}
	else {
	$id = 'user not logged in'; 
	}
	
	echo session_id();					// Parameter testing.  Remove for Final
	echo "<br>";
	//echo $_SESSION['username'];		// Parameter testing.  Remove for Final
	//echo "<br>";						// Parameter testing.  Remove for Final
	//echo $_SESSION['email'];			// Parameter testing.  Remove for Final
	//echo "<br>";						// Parameter testing.  Remove for Final
	
   print("<h1>Your Vacation Information / Ticket</h1>");
   print("<table width='300px' border='2'><tr><td width='40%' align='right'>Customer Name:</br>Order#:</td><td align='right'>$id</br>order# here</td></tr></table>");
   print("<table border='1'><tr><th>ITEM</th><th>VALUE</th></tr>");
   
   if ($_SERVER["REQUEST_METHOD"] == "GET")
   {
      foreach (array_keys($_GET) as $name)
      {
         print("<tr><td>$name</td><td>$_GET[$name]</td></tr>");
      }
   }
   else if (isset($_POST))
   {
		foreach (array_keys($_POST) as $name)
		{
			if ( $name == 'submit_x' || $name == 'submit_y')	// Remove X & Y cords on input button click
			{
				// do nothing
			}
			else{
			print("<tr><td>$name</td><td>$_POST[$name]</td></tr>");  	// add to purchase order
			}
		}
   }
   print("</table>");
?>
</BODY>
</HTML>
