<!-- Kaseem Farayola Agent Details Confirmation-->

<?php
   include("functions10.php");
   if (isset($_REQUEST['AgtFirstName']))
   {
      $message = "";
	  if (empty($_REQUEST['AgtFirstName']))
	  {
	     $message .= "First name must have a value<br />";
	  }
	  else
	  {
	     if (!preg_match("/^[a-z]+$/i", $_REQUEST['AgtFirstName']))
		 {
		    $message .= "Invalid character in first name";
		 }
	  }
	  
      if (!preg_match("/^[a-z]?$/i", $_REQUEST['AgtMiddleInitial']))
	  {
		    $message .= "One initial allowed";
	  }
	  
	  if (empty($_REQUEST['AgtLastName']))
	  {
	     $message .= "Last name must have a value<br />";
	  }
	  elseif (!preg_match("/^[a-z]+$/i", $_REQUEST['AgtLastName']))
	  {
		    $message .= "Invalid character in last name";
	  }
	  
	  if (!empty($message))
	  {
	     header("Location: agentform.php");
	  }
	  else
	  {
	     $result = insertAgent($_REQUEST);
		 if ($result)
		 {
		    print("The agent was inserted into the database");
		 }
		 else
		 {
		    print("There was a problem saving the data");
		 }
	  }
   }
?>
