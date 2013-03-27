<?php
    // We check if the user has asked to change the language
    if (isset($_GET['lang']) AND !empty($_GET['lang']) AND isset($_GET['page']) AND !empty($_GET['page']))
    {
        // if he has, we check if the $_GET['lang'] variable is a valid entry
		if ($_GET['lang'] != "en" AND $_GET['lang'] != "fr" AND $_GET['lang'] != "de")
		{
			// if it's not, we set the language's page to English
			$country = "en";
		}
		else
		{
			// if it's valid, we get the lang
        	$country = $_GET['lang'];
    	}
		$page = $_GET['page'];
		// we redirect the user to his page with the asked language
		header('Location: seiten/'.$country.'/'.$page);
	}
    else
    {
        // if he hasn't, we try to get his language
        $userLang = explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']);
        $userLang = strtolower(substr(chop($userLang[0]), 0, 2));
        if ($userLang == "")
		{
			$userLang = "en";
		}
        // and then redirect to the index page with the corresponding language
		header('Location: seiten/'.$userLang);
    }
?>

