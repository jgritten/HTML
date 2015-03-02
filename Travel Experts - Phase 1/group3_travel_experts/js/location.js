// State lists
var states = new Array();

states['Canada'] = new Array('Alberta','British Columbia','Ontario');
states['Mexico'] = new Array('Baja California','Chihuahua','Jalisco');
states['United States'] = new Array('California','Florida','New York','Hawaii');
states['Indonesia'] = new Array('Jakarta Raya');
states['France'] = new Array('Île-de-France');

// City lists
var cities = new Array();

cities['Canada'] = new Array();
cities['Canada']['Alberta']          = new Array('Calgary','Edmonton');
cities['Canada']['British Columbia'] = new Array('Victoria','Vancouver');
cities['Canada']['Ontario']          = new Array('Toronto','Hamilton');

cities['Mexico'] = new Array();
cities['Mexico']['Baja California'] = new Array('Tijauna','Mexicali');
cities['Mexico']['Chihuahua']       = new Array('Ciudad Juárez','Chihuahua');
cities['Mexico']['Jalisco']         = new Array('Guadalajara','Chapala');

cities['United States'] = new Array();
cities['United States']['California'] = new Array('Los Angeles','San Francisco');
cities['United States']['Hawaii'] = new Array('Honolulu');
cities['United States']['Florida']    = new Array('Miami','Orlando');
cities['United States']['New York']   = new Array('Buffalo','New York');

cities['Indonesia'] = new Array();
cities['Indonesia']['Jakarta Raya'] = new Array('Jakarta');

cities['France'] = new Array();
cities['France']['Île-de-France'] = new Array('Paris');

var extra = "";

function setStates() {

  cntrySel1 = document.getElementById('country1');
  cntrySel2 = document.getElementById('country2');

  stateList1 = states[cntrySel1.value];
  stateList2 = states[cntrySel2.value];

  changeSelect('state1', stateList1, stateList1);
  changeSelect('state2', stateList2, stateList2);
  
  setCities();
}

function setCities() {
  cntrySel1 = document.getElementById('country1');
  cntrySel2 = document.getElementById('country2');
  
  stateSel1 = document.getElementById('state1');
  stateSel2 = document.getElementById('state2');
  
  cityList1 = cities[cntrySel1.value][stateSel1.value];
  cityList2 = cities[cntrySel2.value][stateSel2.value];
  
  changeSelect('city1', cityList1, cityList1);
  changeSelect('city2', cityList2, cityList2);
}

function changeSelect(fieldID, newOptions, newValues) {
  selectField = document.getElementById(fieldID);
  selectField.options.length = 0;
  for (i=0; i<newOptions.length; i++) {
    selectField.options[selectField.length] = new Option(newOptions[i], newValues[i]);
  }
}

function addLoadEvent(func) {
  var oldonload = window.onload;
  if (typeof window.onload != 'function') {
    window.onload = func;
  } else {
    window.onload = function() {
      if (oldonload) {
        oldonload();
      }
      func();
    }
  }
}

addLoadEvent(function() {
  setStates();
});

function extras(button){
	if (button.value != extra)
	{
		extra = button.value;
	}
}
