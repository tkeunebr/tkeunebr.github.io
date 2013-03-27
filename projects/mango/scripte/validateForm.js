/* This script is used to check the contact form before submit to the server in the contact page */

// This function hides the tooltips 

function desactivateTooltips() {

  	var spans = document.getElementsByTagName('span');
    var spansLength = spans.length;

  	for (var i = 0 ; i < spansLength ; i++)
	{
    	if (spans[i].className == 'tooltip')
		{
      		spans[i].style.display = 'none';
    	}
	}
}

// This function returns the tooltip element attached to the current input

function getTooltip(el) {

  	while (el = el.nextSibling) 
	{
    	if (el.className == 'tooltip') 
		{
      		return el;
    	}
  	}
  	return false;
}


// Verification functions (return true or false)

var check = {}; // Object to contain the functions

check['lastName'] = function(id) {

	var name = document.getElementById(id);
    var	tooltipStyle = getTooltip(name).style;

  	if (name.value.length >= 2)
	{
    	name.className = 'correct';
    	tooltipStyle.display = 'none';
    	return true;
  	} 
	else
	{
    	name.className = 'incorrect';
    	tooltipStyle.display = 'inline-block';
    	return false;
 	}
};

check['firstName'] = check['lastName']; // It's the same function

check['message'] = function() {

	var message = document.getElementById('message');
    var	tooltipStyle = getTooltip(message).style;

  	if (message.value.length > 10)
	{
    	message.className = 'correct';
    	tooltipStyle.display = 'none';
    	return true;
  	} 
	else 
	{
		message.className = 'incorrect';
		tooltipStyle.display = 'inline-block';
		return false;
  	}
};


// Events

(function() { // Anonymous function

    var	inputs = document.getElementsByTagName('input');
	var inputsLength = inputs.length;

  	for (var i = 0 ; i < inputsLength ; i++) 
	{
    	if (inputs[i].type == 'text') 
		{
			inputs[i].onkeyup = function()
			{
				check[this.id](this.id); // "this" is the current input
      		};

    	}
  	}
	
	var textarea = document.getElementsByTagName('textarea');
	textarea[0].onkeyup = function()
	{	
		check['message']();
	};

	var myForm = document.getElementById('contactForm');
	myForm.onsubmit = function() {
   	
		var result = true;
	
		for (var i in check)
		{
			result = check[i](i) && result;
		}
		
		if (!result)
		{
			return false;
		}
		
	};

  	myForm.onreset = function() {
    
    	for (var i = 0 ; i < inputsLength ; i++)
			{
     			if (inputs[i].type == 'text')
				{
     				inputs[i].className = '';
      			}
    		}

    desactivateTooltips();
  
  	};
})();

// We disable the tooltips when the program starts

desactivateTooltips();