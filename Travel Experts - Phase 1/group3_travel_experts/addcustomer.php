<!-- Written by Chris Joo -->

<?php
	function addCustomer($customerdata)
	{
		$sql = "INSERT INTO customers values (NULL, '$customerdata[CustFirstName]', 
			'$customerdata[CustLastName]', '$customerdata[CustAddress]', '$customerdata[CustCity]', 
			'$customerdata[CustProv]', '$customerdata[CustPostal]', '$customerdata[CustCountry]', 
			'$customerdata[CustHomePhone]', '$customerdata[CustBusPhone]', 
			'$customerdata[CustEmail]', NULL)";
		

		//print($sql);

		$link = mysqli_connect("localhost", "root", "", "travelexperts") or
				die("Error: " . mysqli_connect_error());
		$result = mysqli_query($link, $sql) or die("Query Error: " . mysqli_error($link));
				print("result: $result<br />");
				mysqli_close($link);
				return $result;
	}

	function addCreditCard($creditcard)
	{
		$dbh = mysql_connect("localhost","root","") or die("cannot connect");
				mysql_select_db("travelexperts");
		$result4 = mysql_query("SELECT * FROM customers ORDER BY customerid DESC LIMIT 0, 1");
			while ($row = mysql_fetch_row($result4))
			{	
				$id = $row[0];
				echo $id;    	// Echos highest Customer ID. Use this for Credit Card CustomerID
			}

		$link2 = mysqli_connect("localhost", "root", "", "travelexperts") or
			die("Error: " . mysqli_connect_error());
	

		$sql2 = "INSERT INTO creditcards values (NULL, '$creditcard[CCName]', 
			'$creditcard[CCNumber]', '$creditcard[CCExpiry]', '$id')";
		
		$result2 = mysqli_query($link2, $sql2) or die("Query Error: " . mysqli_error($link2));
				print("result: $result2<br />");
				mysqli_close($link2);
				mysql_close($dbh);
				return $result2;
	}

	function addUserId($userid)
	{
		$dbh = mysql_connect("localhost","root","") or die("cannot connect");
				mysql_select_db("travelexperts");
		$result4 = mysql_query("SELECT * FROM customers ORDER BY customerid DESC LIMIT 0, 1");
			while ($row = mysql_fetch_row($result4))
			{	
				$id = $row[0];
				echo $id;    	// Echos highest Customer ID. Use this for Credit Card CustomerID
			}

		$sql3 = "INSERT INTO useridpw values ('$userid[UserID]', '$userid[PW]', '$id')";
		$link3 = mysqli_connect("localhost", "root", "", "travelexperts") or
				die("Error: " . mysqli_connect_error());
		$result3 = mysqli_query($link3, $sql3) or die("Query Error: " . mysqli_error($link3));
				print("result: $result3<br />");
				mysqli_close($link3);
				mysql_close($dbh);
				return $result3;
	}

	function verifylogin($u, $p)
	{
		$link5 = mysqli_connect("localhost", "root", "", "travelexperts") or
				die("Error: " . mysqli_connect_error());	
		$sql5 = "select PW from useridpw where UserID='$u'";
		$result5 = mysqli_query($link5, $sql5) or die("SQL Error: " . mysqli_error());
		if ($pwd = mysqli_fetch_row($result5))
		{
			if ($pwd[0] == $p)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
	}
?>
