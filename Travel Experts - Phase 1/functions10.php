<!-- Kaseem Farayola Login Verification-->

<?php
   /*function insertAgent($agentdata)
   {
	  $sql = "INSERT INTO agents values (NULL, '$agentdata[AgtFirstName]', '$agentdata[AgtMiddleInitial]', '$agentdata[AgtLastName]', '$agentdata[AgtBusPhone]', '$agentdata[AgtEmail]', '$agentdata[AgtPosition]', $agentdata[AgencyId])";
	  
	  $link = mysqli_connect("localhost", "root", "", "travelexperts") or die("Error: " . mysqli_connect_error());
	  $result = mysqli_query($link, $sql) or die("Query Error: " . mysqli_error($link));
	  mysqli_close($link);
	 return $result;
   }*/
   
   function verifylogin($u, $p)
   {
	  $link = mysqli_connect("localhost", "root", "", "travelexperts") or die("Error: " . mysqli_connect_error());
	  $sql = "select password from users where userid='$u'";
	  $result = mysqli_query($link, $sql) or die("SQL Error: " . mysqli_error());
	  
      if ($pwd = mysqli_fetch_row($result))
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
	  else
	  {
	     return false;
	  }
 return $result;
 mysqli_close($link);
 
}
   
?>
