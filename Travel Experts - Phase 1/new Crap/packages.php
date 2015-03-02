<!-- Create by Justin Gritten -->

<!-- Travel Experts Package Page. This will enable all users who access this site
to choose one of our available pre-made packages or custom build their own. -->


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php
session_start();

if (isset($_POST['logout']))
	{
		 session_destroy();
		 header("Location: packages.php");
	}

?>
<!DOCTYPE html>

<html>
<link href="vac_pkg_style.css" rel="stylesheet" type="text/css">							<!-- style sheet link -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">  <!-- jquery stylesheet for popup datepicker -->
<script src="//code.jquery.com/jquery-1.10.2.js"></script>									<!-- datepicker script -->
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>							<!-- datepicker script -->
<script>$(function() {$( "#datepicker" ).datepicker();});</script>							<!-- datepicker script -->
<script src="location.js"></script>															<!-- country/state-prov/city dropdown array script -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>vacation-packages</title>
	<div style="border: 2px solid; position:relative; top:0px; left:0px; background-color:#4FADEF;color:white;width:100%;height:425px">
	<div style="position:absolute; top:0px; left:0;"><img src="sun.png" width="300">
	</div>
	<div style="position:absolute; top:0px; left:0px; background-color:#3F92F2;color:white;width:100%;height:100px">
		<table align="center"width="1000px"><tr><td>
			<div style="position:relative; left:0px;"><img src="plane_icon.png" width="90px">
			</div>
			</td>
			<td valign="Left"><font style="font-size: 35px;"> Travel Experts Package Builder</font></td>
			<td align="center">
				<table height="90px" width="300px">
				<tr>
				<?php				
					if ( isset($_SESSION['username']))
					{
						print('<tr><td align="center"><font style="font-size:20px; font-weight:bold;">Hello ');
						print($_SESSION['username']."</br>");
						print('<form id="form3" method="POST" action""><input type="submit" src="logout.png" width="50px" name="logout" value="logout" onClick="Form3Submit()"></form>'); 	
						print('</font></td></tr>');
					}
					else {
						print('<tr><td colspan="3" align="center">Need to Register?  <a href="RegistrationPage.php">
								<input type="image" src="register.png" width="50px"></a></td></tr>');
						print('<form id="form1"name="loginInfo" method="POST" action="login.php">');
						print('<td align="right">');
						print('<input type="text" size="20" name="userId"></br>');
						print('<input type="text" size="20" name="userPw">');
						print('<td align="right">
								<input type="image" src="login.png" width="50px" name="loginName" onClick="Form1Submit()"></br>
								</td>');
						print('</form>');
						}	
				?>
				</tr>
				</table>
			</td>
			</tr>
		</table>
		<div style="position:relative; top:100px; left:1200px;"><img src="palm_trees.png" width="300">
		</div>
	</div>
	<div align="center" style="position:relative; top:100px; height:300px;">
		<table width="570px" height="300px" border="2">
			<tr><td class="offer"><div></div></td></tr>
		</table>
	<div align="center" style="color:white; background-color:#1DDCF5; font-size:30; width:570px; height:25px;">
		<font face="arial">| <a href="main.php"><l>Home Page</l></a> | <l>Cars</l> | <l>Flights</l> | <l>Registration</l> | <l>Deals</l> | <l>Insurance</l> |</font>				
	</div>
	</div>
	</div>
</head>
<body style="height:1350px;">
	<div align="center" style="position:relative;">
	<script type="text/javascript"> 
		  function package1()
		  {
			document.getElementById('extra1').checked = true;
			document.getElementById('extra2').checked = false;
			document.getElementById('extra3').checked = false;
			document.getElementById('extra4').checked = false;
			document.getElementById('extra5').checked = true;
			document.getElementById('extra6').checked = false;
			document.getElementById('extra7').checked = false;
			document.getElementById('extra8').checked = false;
			document.getElementById('extra9').checked = false;
			document.getElementById('extra10').checked = false;
			
			document.getElementById('country2').value = "United States";
			setStates();
			document.getElementById('state2').value = "Florida";
			setCities();
			document.getElementById('city2').value = "Miami";
			
			document.getElementById('datepicker').value = new Date();
		  }
	   function package2()
		  {
			document.getElementById('extra1').checked = true;
			document.getElementById('extra2').checked = true;
			document.getElementById('extra3').checked = true;
			document.getElementById('extra4').checked = true;
			document.getElementById('extra5').checked = false;
			document.getElementById('extra6').checked = false;
			document.getElementById('extra7').checked = false;
			document.getElementById('extra8').checked = false;
			document.getElementById('extra9').checked = false;
			document.getElementById('extra10').checked = false;
			
			document.getElementById('country2').value = "United States";
			setStates();
			document.getElementById('state2').value = "Hawaii";
			setCities();
			document.getElementById('city2').value = "Honolulu";
			
			document.getElementById('datepicker').value = new Date();
		  }
	   function package3()
		  {
			document.getElementById('extra1').checked = true;
			document.getElementById('extra2').checked = true;
			document.getElementById('extra3').checked = false;
			document.getElementById('extra4').checked = true;
			document.getElementById('extra5').checked = false;
			document.getElementById('extra6').checked = false;
			document.getElementById('extra7').checked = false;
			document.getElementById('extra8').checked = true;
			document.getElementById('extra9').checked = false;
			document.getElementById('extra10').checked = false;
			
			document.getElementById('country2').value = "Indonesia";
			setStates();
			document.getElementById('state2').value = "Jakarta Raya";
			setCities();
			document.getElementById('city2').value = "Jakarta";
			
			document.getElementById('datepicker').value = new Date();
		  }
	   function package4()
		  {
			document.getElementById('extra1').checked = true;
			document.getElementById('extra2').checked = false;
			document.getElementById('extra3').checked = false;
			document.getElementById('extra4').checked = false;
			document.getElementById('extra5').checked = false;
			document.getElementById('extra6').checked = false;
			document.getElementById('extra7').checked = true;
			document.getElementById('extra8').checked = true;
			document.getElementById('extra9').checked = true;
			document.getElementById('extra10').checked = false;
			
			document.getElementById('country2').value = "France";
			setStates();
			document.getElementById('state2').value = "Île-de-France";
			setCities();
			document.getElementById('city2').value = "Paris";
			
			document.getElementById('datepicker').value = new Date();
		  }
	</script>
		<?php
		if ( isset($_session['username']) )
		{
			print("<table border=1>");
			print("<tr>");
			print("<td>");
			print($_SESSION['username'].'</br>');
			print($_SESSION['email']);
			print("</td>");
			print("</tr>");
			print("</table>");
		}
		   $dbh = mysql_connect("localhost","root","") or die("cannot connect");
		   mysql_select_db("travelexperts");
		   
		   $result = mysql_query("SELECT * FROM packages");		   
		   print("<table border=1>");
		   print("<tr>");
		   while ($row = mysql_fetch_row($result))
		   {
				$money = number_format($row[5], 2, '.', '');
				$date = date_create("$row[2]");
				$startDate = date_format($date, 'F jS Y');
				if ( strtotime($startDate) <= time())
				{
					$startDate = "<blr>".$startDate."</blr>";
				}
				$date = date_create("$row[3]");
				$endDate = date_format($date, 'F jS Y');
				print("<td class='zoom-img'><a href='#PackageOptions' onclick='package$row[0]();'><div align='center' class='h2' style='text-transform:uppercase;'>$row[1]</div><div><img src='$row[7]' width='300px' height='200px'></div><div align='center' style='font-size:100%;'>$row[4]</div><div align='center' style='font-size:150%; font-weight: bold;'>US \$ $money </div><div align='center'><font style='font-size:125%;'><u>Availability</u></div><div align='center'><table width='250px'><tr><td align='right'><div style='font-weight:bold;'>from: </div><div style='font-weight:bold;'>till: </div></td><td align='center'><div>$startDate</div><div>$endDate</div></td></tr></table></div></a></td>"); 		// Call Package and Set variables accordingly
		   }
		   print("</tr>");
		   print("</table>");
			
		   mysql_close($dbh);
		?>
	<form id="form2"name="Vacation" method="POST" action="customerorder.php">	<!-- main Form for submission --> 
		<table border="2" width="570px">
			<tr>
				<td colspan='2' align="center" style="color:black; font-weight:bold; font-family:arial,helvetica,clean,sans-serif; font-size:25px; background-color:#4FADEF;">LEAVING FROM:</td>
			</tr>
			<tr>
				<td width="50%" style="color:black;">
					<fieldset style="width: 300px;">
					<legend class="h2"><strong>Make your selection</strong></legend>		<!-- Vacation Origin Location -->
						<table>
							<tr>
								<td style="text-align: left;">Country:</td>
								<td style="text-align: left;">
									<select name="country1" id="country1" onchange="setStates();">
										<option value="Canada">Canada</option>
										<option value="Mexico">Mexico</option>
										<option value="United States">United States</option>
										<option value="France">France</option>
										<option value="Indonesia">Indonesia</option>
									</select>
								</td>
							</tr>
							<tr>
								<td style="text-align: left;">State:</td>
								<td style="text-align: left;">
									<select name="state1" id="state1" onchange="setCities();">
										<option value="">Please select a State/Prov</option>
									</select>
								</td>
							</tr>
							<tr>
								<td style="text-align: left;">City:</td>
								<td style="text-align: left;">
									<select name="city1"  id="city1">
										<option value="">Please select a City</option>
									</select>
								</td>
							</tr>
						</table>
					</fieldset>
				</td>
				<td class="h2" align="Left" valign="top">
					<fieldset style="width: 300px;">
					<legend><strong>Select your Departure Date</strong></legend>
					<input type="date" value="ENTER DATE HERE" name="DepartingDate" id="datepicker">
					</fieldset>
				</td>
			</tr>
			<tr><td colspan='2' align="center" style="color:black; font-weight:bold; font-size:25px; font-family:arial,helvetica,clean,sans-serif; background-color:#4FADEF;">DESTINATION:</td>
			</tr>
			<tr>
				<td width="50%" style="color:black;">
					<fieldset style="width: 300px;">
					<legend class="h2"><strong>Make your selection</strong></legend>		<!-- Vacation Destination Location	-->	
						<table>
							<tr>
								<td style="text-align: left;">Country:</td>
								<td style="text-align: left;">
									<select name="country2" id="country2" onchange="setStates();">
										<option value="Canada">Canada</option>
										<option value="Mexico">Mexico</option>
										<option value="United States">United States</option>
										<option value="France">France</option>
										<option value="Indonesia">Indonesia</option>
									</select>
								</td>
							</tr>
							<tr>
								<td style="text-align: left;">State:</td>
								<td style="text-align: left;">
									<select name="state2" id="state2" onchange="setCities();">
										<option value="">Please select a State/Prov</option>
									</select>
								</td>
							</tr>
							<tr>
								<td style="text-align: left;">City:</td>
								<td style="text-align: left;">
									<select name="city2"  id="city2">
										<option value="">Please select a City</option>
									</select>
								</td>
							</tr>
						</table>
					</fieldset>
				</td>
			</tr>
			<tr><td colspan='2' align="center" style="color:black; font-weight:bold; font-size:25px; font-family:arial,helvetica,clean,sans-serif; background-color:#4FADEF;">DETAILS & EXTRAS:</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<table height="50px" border="1">
						<tr height="50px"><td style="color:black;"><input type="checkbox" value="Flight" name="extra1" id="extra1" onchange="extras(document.getElementById('extra1'))">Flight</td><td style="color:black;"><input type="checkbox" value="Hotel" name="extra2" id="extra2" onchange="extras(document.getElementById('extra2'))">Hotel</td><td style="color:black;"><input type="checkbox" value="Car" name="extra3" id="extra3" onchange="extras(document.getElementById('extra3'))">Car Rental</td><td style="color:black;"><input type="checkbox" value="Attraction" name="extra4" id="extra4" onchange="extras(document.getElementById('extra4'))">Attraction</td><td style="color:black;"><input type="checkbox" value="Cruise" name="extra5" id="extra5" onchange="extras(document.getElementById('extra5'))">Cruise</td></tr><tr height="50px"><td style="color:black;"><input type="checkbox" value="MotorCoach" name="extra6" id="extra6" onchange="extras(document.getElementById('extra6'))">Motor Coach</td><td style="color:black;"><input type="checkbox" value="RailRoad" name="extra7" id="extra7" onchange="extras(document.getElementById('extra7'))">RailRoad</td><td style="color:black;"><input type="checkbox" value="Tours" name="extra8" id="extra8" onchange="extras(document.getElementById('extra8'))">Tours</td><td style="color:black;"><input type="checkbox" value="Travel_Insurance" name="extra9" id="extra9" onchange="extras(document.getElementById('extra9'))">Travel Insurance</td><td style="color:black;"><input type="checkbox" value="Yacht" name="extra10" id="extra10" onchange="extras(document.getElementById('extra10'))">Yacht / Boat Charter</td></tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="5" align="center">
					<input type="image" src="buy_now.gif" name="submit" onClick="Form2Submit()" width="150px">
				</td>
			</tr>
		</table>
		</form>
	</div>
	<a Name="PackageOptions">
</body>
<footer id="footer">		<!-- static fixed Footer --> 
	<table class="bottombar">
	<tr><td>
	<table align="center" width="700px">
		<tr>
		<td align="center" width="50%">
			<div">
				<div>QUICK LINKS:</div>
				<div>
					<a href="/main.php">Home</a> |
					<a href="/contact.php">About Us</a> |
					<a href="/contact.php">Contact Us / Hours</a> |
					<a href="http://www.yelp.com/">Reviews</a></br>
				</div>
				<div style="width:400px; height: 40px;">
				<font style="font-size: 12px;">101 - 1st Street -  Calgary, Alberta  -  T1U 4R5  -  (403) 456-9852</font></br>
				<font style="font-size: 10px;">Copyright &copy; 2014 - Travel Experts.  All rights reserved.</font>
				</div>
			</div>
		</td>
		<td>
			<div id="icons" align="center">
				<a href="http://www.youtube.com" class="ytb"><img src="youtube.png" height="25"></a>
				<a href="http://twitter.com" class="twt"><img src="twitter.png" height="25"></a>
				<a href="http://www.pinterest.com" class="pinterest"><img src="pintrest.png" height="25"></a>
				<a href="http://www.facebook.com" class="fb"><img src="facebook.jpg" height="25">
				</a>
			</div>
		</td>
		</tr>
	</table>
	</td></tr>
	</table>
</footer>
</html>