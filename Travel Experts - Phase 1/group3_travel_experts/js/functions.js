  function Form1Submit()
  {
    document.form1.submit();
  }
  
  function Form2Submit()
  {
    document.form2.submit();
  }  
  
  function Form3Submit()
  {
    document.form3.submit();
  }  
  
  function FormLoginSubmit()
  {
	document.getElementById('loginform').submit();
  }
  
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
  
function callAlert()
  {
  confirm('callalert fired');
  }
