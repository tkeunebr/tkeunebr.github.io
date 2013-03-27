<?php
	if (isset($_GET['p']) && !empty($_GET['p']) && is_file($_GET['p'].'.php')) {
	        include $_GET['p'].'.php';
	}
	else {
	        include 'home.php';
	}