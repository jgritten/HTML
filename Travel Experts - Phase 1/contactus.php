<!--KASEEMFARAYOLA_TRAVELEXPERTSPROJECT CONTACT US-->

<?php

echo '<div id="header" style="border: 2px solid; background-color:green;
    color:brown;width:33%
    text-align:center;
    padding:5px;"><h2 style="color:red;"><center><a href="main.php"><b>Main Page</b></a>&nbsp;&nbsp;
<a href="packages.php"><b>Vacation Package</b></a>&nbsp;&nbsp;
<a href="RegistrationPage.php"><b>Registration Page</b></a>&nbsp;&nbsp;
<a href="Ilogini.php"><b>Agent Login</b></a>&nbsp;&nbsp;
<a href="logini.php"><b>User Login</b></a>&nbsp;&nbsp;
<a href="mailto:excelwebdeveloper@gmail.com?Subject=Travel%20on%20these%20experts">Email Us</a>
</center>
</h2></div>';

?>



<?php

date_default_timezone_set("america/edmonton");
echo ("<center>");
echo date("l jS \of F Y h:i:s A");
echo("<br/>");
$t=date("h");

if ($t<"12") 
	{
	echo "Good Morning!";
	} 
elseif ($t<"17") 
	{
   echo "Good Afternoon!";
	} 
else 
	{
   echo "Good Evening!";
	}
echo ("</center>");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />



<html>

<head>


<style type="text/css">
body {background-size: 100%;
		background-repeat: no-repeat;}
		
		
tbody {
    background-color: #d0e4fe;
	image: height="42"; width="42";
	 }

</style>
<div id="header">
	
</div>
<div style="border: 2px solid; position:relative; top:0px; left:0px; background-color:#4FADEF;color:white;width:100%;height:425px">
	
	<div style="position:absolute; top:0px; left:0px; background-color:#3F92F2;color:white;width:100%;height:100px">
		<table align="center"width="1000px"><tr><td>
			<div style="position:relative; left:0px;"><img src="images/train.jpeg" width="150px" height="100px">
			</div>
			</td>
			<td valign="Left"><font style="font-size: 35px;"><b>Contact Us at Travel Experts</b></font></td>
			<td>
			<div style="position:relative; left:10px;"><img src="images/hotel.jpeg" width="150px" height="100px">
			</div>
			</td>
			</tr>
		</table>
		<div style="position:relative; top:60px; left:1200px; margin-right:-200px;"><img src="images/moon.png" width="200">
		</div>
	</div>

	
</head>
<br><br><br><br><br>
<section>
				
   	<form action="bouncer.php" method="get"
        	name="contact_form" id="contact_form">
    		<fieldset style= "font-size:18px;">
	        	<legend><b>Contact Us</b></legend>
	        	<label for="first_name"><b>First Name:</b></label>
				<input type="text" name="first_name" id="first_name" align="40" required><br>
				<label for="last_name"><b>Last Name:<b/></label>
				<input type="text" name="last_name" id="last_name" size="40" required><br>
				<label for="email"><b>E-Mail:</b></label>
	        	<input type="email" name="email" id="email"size="40" required><br>
				<label for="address"><b>Address:</b></label>
				<input type="text" name="address" id="address" size="60" required><br>
				<label for="city"><b>City:</b></label>
				<input type="text" name="city" id="city" size="40"><br>
				<label for="state"><b>Province:</b></label>
				<input type="text" name="state" id="state" size="40"><br>
				<label for="phone"><b>Phone Number:</b></label>
	        	<input type="text" name="phone" id="phone" autofocus size="40" required><br>
				<label for="comments"><b>Comments:</b></label>
				<textarea name="comments" id="comments" rows="5" cols="25"></textarea>
				</fieldset>
	<br>
			<fieldset id="buttons" style="background-color:#3F92F2;color:black; font-size:18px;">
				<legend>Submit</legend>
				<label>&nbsp;&nbsp;</label>
				<input type="submit" id="submit" value="Submit" style="background-color: #00FFFF;"/>
				<input type="reset" id="reset" value="Reset Fields" style="background-color: #00FFFF;"/><br>
			</fieldset>
		</form>
	<br><br><br><br>	
	<div style="position:absolute; top:500px; left:0px; background-color:#3F92F2;color:black;width:100%;height:100px">
	<br><br><br><br><br><br>	
		<center>
		
		<form action="http://maps.google.com/maps" method="get" target="_blank">
			<label for="saddr"><b>Travel Experts Calgary</b></label>
			<input type="text" name="saddr" />
			<input type="hidden" name="daddr" value="1155 8 Ave SW
			Calgary, AB" />
			<input type="submit" value="Get directions" style="background-color: #3F92F2;"/>&nbsp;&nbsp;
				<b>Address:&nbsp;&nbsp;1155 8th Avenue SW Calgary AB T2P1N3 Canada &nbsp;&nbsp; Telephone: +1 (403) 618 5816</b>
		</form></center></div>

<br>

<h2>Vacation Travel Services</h2>

<table cellspacing="0" class="ourExperts" width="100%">

    <tbody> 
        <tr>
            <td class="img"><img alt="Janet Delton, Travel Agent at Travel Experts" src="images/25images.jpeg" height="200" width="200"/></td>
            <td>
            <h4>Janet Delton</h4>
            <p><b>Senior Travel Agent </b></p>
            <p><b>Telephone:</b> 403 210-7801</p>
            <p><b>Email:</b>janet.delton@travelexperts.com</p>
            <p><b>Cell Phone:</b>587 310-8701</p>
            </td>
			<td class="img"><img alt="Brian Peterson, Travel Agent at Travel Experts" src="images/50images.jpeg" height="200" width="200"/></td>
            <td>
            <h4>Brian Peterson</h4>
             <p><b>Junior Travel Agent </b></p>
            <p><b>Telephone:</b> 403 210-7833</p>
            <p><b>Email:</b>brian.peterson@travelexperts.com</p>
            <p><b>Cell Phone:</b>587 310-8707</p>
            </td>
        </tr>
        <tr>
            <td class="img"><img alt="Judy Lisle, Travel Agent at Travel Experts" src="images/12images.jpeg" height="200" width="200"/></td>
            <td>
            <h4>Judy Lisle</h4>
            <p><strong>Intermediate Travel Agent</strong></p>
            <p><b>Telephone:</b> 403 210-7802</p>
            <p><b>Email:</b> judy.lisle@travelexperts.com</p>
            <p><b>Cell Phone:</b>587 310-8702</p>
            </td>
			<td class="img"><img alt="Harry Bent, Travel Agent at Travel Experts" src="images/8images.jpeg" height="200" width="200"/></td>
            <td>
            <h4>Harry A. Bent</h4>
             <p><b>Junior Travel Agent </b></p>
            <p><b>Telephone:</b> 587 471-2347</p>
            <p><b>Email:</b>hbent@travelexperts.com</p>
            <p><b>Cell Phone:</b>587 310-8733</p>
            </td>
        </tr>
		<tr>
            <td class="img"><img src="images/35images.jpeg" alt="Dennis Reynolds, Travel Agent at Travel Experts." height="200" width="200"/></td>
            <td>
            <h4>Dennis Reynolds</h4>
             <p><b>Junior Travel Agent </b></p>
            <p><b>Telephone:</b> 403 210-7843</p>
            <p><b>Email:</b>dennis.reynolds@travelexperts.com</p>
            <p><b>Cell Phone:</b>587 310-8703</p>
            </td>
			<td class="img"><img alt="Brad Michael, Travel Agent at Travel Experts" src="images/6images.jpeg" height="200" width="200"/></td>
            <td>
            <h4>Brad B. Michael</h4>
            <p><b>Junior Travel Agent </b></p>
            <p><b>Telephone:</b> 587 471-2345</p>
            <p><b>Email:</b>bmichael@travelexperts.com</p>
            <p><b>Cell Phone:</b>587 310-8735</p>
            </td>
          
        </tr>
		  <tr>
            <td class="img"><img alt="John Coville, Travel Agent at Travel Experts" src="images/7images.jpeg" height="200" width="200" /></td>
            <td>
            <h4>John Coville</h4>
             <p><b>Intermediate Travel Agent </b></p>
            <p><b>Telephone:</b> 403 210-7823</p>
            <p><b>Email:</b>john.coville@travelexperts.com</p>
            <p><b>Cell Phone:</b>587 310-8721</p>
            </td>
			 <td class="img"><img alt="Celine Murphy, Destination Weddings and Honeymoons Travel Agent at Travel Experts" src="images/40images.jpeg" height="200" width="200"/></td>
            <td>
            <h4>Celine C. Murphy</h4>
            <p><b>Junior Travel Agent </b></p>
            <p><b>Telephone:</b> 587 471-2346</p>
            <p><b>Email:</b>cmurphy@travelexperts.com</p>
            <p><b>Cell Phone:</b>587 310-8739</p>
            </td>
		</tr>
        <tr>
            <td class="img"><img alt="Janice Dahl, Travel Agent at Travel Experts" src="images/2images.jpeg" height="200" width="200"/></td>
            <td>
            <h4>Janice Dahl</h4>
             <p><b>Senior Travel Agent </b></p>
            <p><b>Telephone:</b> 403 210-7865</p>
            <p><b>Email:</b>janice.dahl@travelexperts.com</p>
            <p><b>Cell Phone:</b>587 310-8725</p>
            </td>
			<td class="img"><img alt="Lindsay Peter, Travel Agent at Travel Experts" src="images/9images.jpeg" height="200" width="200"/></td>
            <td>
            <h4>Lindsay D. Peter</h4>
            <p><b>Junior Travel Agent </b></p>
            <p><b>Telephone:</b> 587 471-2348</p>
            <p><b>Email:</b>lpeter@travelexperts.com</p>
            <p><b>Cell Phone:</b>587 310-8730</p>
            </td>
        </tr>      
     		<tr>
            <td class="img"><img alt="Bruce Dixon, Travel Agent at Travel Experts" src="images/10images.jpeg" height="200" width="200"/></td>
            <td>
            <h4>Bruce Dixon</h4>
             <p><b>Intermediate Travel Agent </b></p>
            <p><b>Telephone:</b> 403 210-7867</p>
            <p><b>Email:</b>bruce.dixon@travelexperts.com</p>
            <p><b>Cell Phone:</b>587 310-8721</p>
            </td>
			<td class="img"><img alt="Tracy Williams, Travel Agent at Travel Experts" src="images/1images.jpeg" height="200" width="200"/></td>
            <td>
            <h4>Tracy E.Williams</h4>
            <p><b>Senior Travel Agent/Manager </b></p>
            <p><b>Telephone:</b> 587 471-2349</p>
            <p><b>Email:</b>twilliams@travelexperts.com</p>
            <p><b>Cell Phone:</b>587 310-8711</p>
            </td>
        </tr>
        <tr>
            <td class="img"><img alt="Beverly Jones, Travel Agent at Travel Experts." src="images/45images.jpeg" height="200" width="200"/></td>
            <td>
            <h4>Beverly Jones</h4>
            <p><b>Intermediate Travel Agent </b></p>
            <p><b>Telephone:</b> 403 210-7812</p>
            <p><b>Email:</b>beverly.jones@travelexperts.com</p>
            <p><b>Cell Phone:</b>587 310-8719</p>
            </td>
			<td class="img"><img alt="Wayne Alexis, Travel Agent at Travel Experts" src="images/30images.jpeg" height="200" width="200"/></td>
            <td>
            <h4>Wayne F. Alexis</h4>
             <p><b>Intermediate Travel Agent </b></p>
            <p><b>Telephone:</b> 587 471-1234</p>
            <p><b>Email:</b>walexis@travelexperts.com</p>
            <p><b>Cell Phone:</b>587 310-8703</p>
            </td>
        </tr>
        <tr>
            <td class="img"><img alt="Jane Merrill, Travel Agent at Travel Experts" src="images/20images.jpeg" height="200" width="200" /></td>
            <td>
            <h4>Jane Merrill</h4>
            <p><b>Senior Travel Agent </b></p>
            <p><b>Telephone:</b> 403 210-7868</p>
            <p><b>Email:</b>jane.merrill@travelexperts.com</p>
            <p><b>Cell Phone:</b>587 310-8722</p>
            </td>
			<td class="img"><img alt="Jennifer King, Travel Agent at Travel Experts" src="images/11images.jpeg" height="200" width="200"/></td>
            <td>
            <h4>Jennifer G. King</h4>
             <p><b>Intermediate Travel Agent </b></p>
            <p><b>Telephone:</b> 587 471-2344</p>
            <p><b>Email:</b>jking@travelexperts.com</p>
            <p><b>Cell Phone:</b>587 310-8715</p>
            </td>
        </tr>   
    </tbody>
	</div>
</table>

<body>
<div align="center" style="position:relative;">


<center>
<?php
	$link = mysqli_connect("localhost","root","","travelexperts") 
	or die("Connection Error: " . mysqli_connect_error());
	
	$sql = "select * from agents";
	$result = mysqli_query($link, $sql) or die("SQL Error");
	$datatable = "<table border='1'>";
	while($row = mysqli_fetch_row($result))
	{
	$datatable .="<tr>";
		foreach ($row as $col)
		{
			$datatable .= "<td>$col</td>";
		}
		$datatable .= "</tr>";

	}
	$datatable .="</table>";
	mysqli_close($link);
	print_r($datatable);
	print("<br>");
?>
</center>


<?php

   $id = 5;// agents can be pulled from database using this method as well
   $dbh = mysqli_connect("localhost", "root", "", "travelexperts");
   if ($dbh)
   {
      print("success");
   }
   else
   {
      print("connection failed");
   }
   if (mysqli_connect_errno())
   {
      die("error: " . mysqli_connect_error());
   }
   //or die("connection failed" . mysqli_error($dbh));
   
//   $stmt = mysqli_prepare($dbh, "select * from agents where AgentId=?");
//   mysqli_stmt_bind_param($stmt, "i", $id);
//   mysqli_stmt_execute();
   $result = mysqli_query($dbh, "select * from agents where AgentId=$id");
   $title = "Agents List";
   include ("header.php");
   
   print("<table border='1'>");
   
   while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
   {
      
	  print("<tr>");
	  $values = array_values($row);
	  for ($i = 0; $i < count($values); $i++)
	  {
	     print("<td>$values[$i]</td>");
	  }
	  print("</tr>");
   }
   
   print("</table>");
   mysqli_close($dbh);

?>
<!-- FOOTER_BEGIN -->
<div id="header" style="border: 2px solid; background-color:brown;
			color:white;width:33%
			text-align:center;
    padding:5px;"><h2 style="color:green;">
<center><a href="main.php"><b>Main Page</b></a>&nbsp;&nbsp;
		<a href="packages.php"><b>Vacation Package</b></a>&nbsp;&nbsp;

		<a href="RegistrationPage.php"><b>Registration</b></a>&nbsp;&nbsp;

		<a href="Ilogini.php"><b>Agent Login</b></a>&nbsp;&nbsp;
		<a href="mailto:excelwebdeveloper3@gmail.com?Subject=Travel%20on%20these%20experts">Email Us</a>
</center>
<center><h2>
		<a href="https://www.facebook.com/" target="_blank"><img src="images/fbicon.png" alt="Facebook" width="4%"></a>

		<a href="http://ca.linkedin.com/" target="_blank"><img src="images/linkedinicon.jpg" alt="LinkedIn" width="4%"></a>

		<a href="http://www.twitter.com/" target="_blank"><img src="images/twitterlogo.png" alt="Twitter" width="4%"></a></h2></center>
</div>
<!-- FOOTER_END -->

</body>


	</section>
</html>