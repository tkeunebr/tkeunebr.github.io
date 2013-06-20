/* This script is used to display navigation tabs in the download.php page */

// This function is used in the download.php page to make a tab navigation (switch between the OS)

var setTab = function(idTab, idLink){
	var tabs = ['winContent', 'linuxContent', 'macContent'];
	var links = ['winLink', 'linuxLink', 'macLink'];
	var length = tabs.length;
		if (links.length == length) // if the defined number of tabs is correct (same number of links and tabcontents)
		{
			for (var i=0; i < length; i++)
			{
				// we get the corresponding block and link
				var block = document.getElementById(tabs[i]);
				var link = document.getElementById(links[i]);
				if (tabs[i] == idTab) // if the user has clicked on this tab
				{
					// We show this block and set the background color of the link to white
					block.style.display = "block";
					link.style.backgroundColor = "white";
				}
				else
				{
					// We hide it and set the link to default color
					block.style.display = "none";
					link.style.backgroundColor = "#F0F0F0";
				}
			}
		}
	};