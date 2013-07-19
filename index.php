<?php
	switch ($_GET['action']) {
		case "delete":
		//delete;
			break;
		case "post":
		//post
		case "register":
		require_once('/var/www/HCI-forum/Controller/register.php');
		if($_POST['sub']) {
			$account = $_POST["userName"];
			$pwd = $_POST["pwd"];
			$pwd_confirm = $_POST["pwd_confirm"];
			new Register($account, $pwd, $pwd_confirm);
		}
		break;
		default:
		require_once('/var/www/HCI-forum/Controller/indexController.php');
			break;
	}
?>