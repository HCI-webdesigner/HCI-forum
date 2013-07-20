<?php
	
	session_start();
	define("DS",DIRECTORY_SEPARATOR);
	define("ROOT","/var/www/HCI-forum");

	require_once(ROOT . DS . "View" . DS . "adminHeader.html");

	$action = $_GET['action'];
	switch ($action) {
		case 1:
			require_once(ROOT . DS . "View" . DS . "admin1.php");
			break;
		case 2:
			require_once(ROOT . DS . "Controller" . DS . "adminCon2.php");
			break;
		default:
			# code...
			break;
	}

	require_once('/var/www/HCI-forum/View/adminFooter.html');

?>