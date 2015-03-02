<?php
	function NewAgent($newAgent)
	{
		$link = mysqli_connect("localhost", "root", "", "travelexperts") or die("Connection Error: " . mysqli_error());
		$agentData = $newAgent;
		$sql = "INSERT INTO agents VALUES (NULL, '$agentData[AgtFirstName]', '$agentData[AgtMiddleInitial]', '$agentData[AgtLastName]', '$agentData[AgtBusPhone]', '$agentData[AgtEmail]', '$agentData[AgtPosition]', $agentData[AgencyId])";
		$result = mysqli_query($link,$sql) or die("SQL Error: You Dun Fukd Up, Boi");
		if ( $result )
		{
			print("Agent successfully added"."</br>");
		}
		else
		{
			print("Agent insert Failed"."</br>");
		}
		mysqli_close($link);
	}
	
	function VerifyLogin($u, $p)
	{
		$link = mysqli_connect("localhost", "root", "", "travelexperts") or die("Connection Error: " . mysqli_error());
		$sql = "SELECT userPw FROM users WHERE userId='$u'";
		$result = mysqli_query($link,$sql) or die("Sql Error: Sql Error" . mysqli_error());
		
		if ($pwd = mysqli_fetch_row($result))
		{
			if ( $pwd[0] == $p )
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		else	
		{
			return false;
		}
	}
?>