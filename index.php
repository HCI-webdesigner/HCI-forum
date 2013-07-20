<?php
	define("DS",DIRECTORY_SEPARATOR);
	define("ROOT",dirname(__FILE__));

	switch ($_GET['action']) {
		case "delete":
		//delete;
			break;
		case "post":
		//post
		case "register":
		require_once(ROOT . DS . "Controller" . DS . "register.php");
		if($_POST['sub']) {
			$account = $_POST["userName"];
			$pwd = $_POST["pwd"];
			$pwd_confirm = $_POST["pwd_confirm"];
			new Register($account, $pwd, $pwd_confirm);
		}
		break;
		default:
		require_once(ROOT . DS . "Controller" . DS . "indexCon.php");
			break;
	}
?>