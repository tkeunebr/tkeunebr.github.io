/* This script is to toggle elements of the page in both the faq and screenshots pages */

// This function is used in the faq.html page to display and hide questions using javascript
var showMe = function(idBlock, idImage){
	if (!document.getElementById) return false;

		var block = document.getElementById(idBlock); // we get the asked block's id
		var blockStyle = getComputedStyle(block, "");
		var isDisplayed = blockStyle.getPropertyValue("display"); // we get it's current style
		var arrow = document.getElementById(idImage);

		if (isDisplayed == "none") // if the block is hidden, we display it (and change the arrow image)
		{
			block.style.display = "block";
			arrow.src = "media/arrowUp.gif";
		}
		else
		// if it is shown, we hide it (and also change the arrow image)
	{
		block.style.display = "none";
		arrow.src = "media/arrowDown.gif";
	}
};

//This function is used in the screenshots.html page to display screenshots depending on the chosen operating system
toggleMe = function(idBlock){
	if (!document.getElementById) return false;

	var blocks = ['toggleWin', 'toggleLinux', 'toggleMac'];
	var images = ['winArrow', 'linuxArrow', 'macArrow'];
	var length = blocks.length;
	for (var i=0; i < length; i++)
	{
				// we get the corresponding block
				var block = document.getElementById(blocks[i]);
				var blockStyle = getComputedStyle(block, "");
				var isDisplayed = blockStyle.getPropertyValue("display");
				var arrow = document.getElementById(images[i]);
				if (blocks[i] == idBlock) // if the user has toggled this division
				{
					if (isDisplayed == "none")
					// if the selected division is hidden, we show it and change the arrow picture
				{
					block.style.display = "block";
					arrow.src = "media/arrowUp.gif";
				}
				else
					// we hide it
				{
					block.style.display = "none";
					arrow.src = "media/arrowDown.gif";
				}
			}
			else
			{
					// if it is not the chosen division, we also hide it
					block.style.display = "none";
					arrow.src = "media/arrowDown.gif";
				}
			}
		}