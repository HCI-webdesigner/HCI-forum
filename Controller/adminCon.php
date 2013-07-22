<?php
	
	session_start();
	define("DS",DIRECTORY_SEPARATOR);
	define("ROOT",dirname(dirname(__FILE__)));
	require_once(ROOT . DS . "View" . DS . "adminHeader.html");

	$action = $_GET['action'];
	switch ($action) {
		case 1:
			require_once(ROOT . DS . "Controller" . DS . "adminCon1.php");
			break;
		case 2:
			require_once(ROOT . DS . "Controller" . DS . "adminCon2.php");
			break;
		case 3:
			require_once(ROOT . DS . "Controller" . DS . "adminCon3.php");
			break;
		default:
			require_once(ROOT . DS . "Controller" . DS . "adminCon1.php");
			break;
	}

	require_once('/var/www/HCI-forum/View/adminFooter.html');

?>