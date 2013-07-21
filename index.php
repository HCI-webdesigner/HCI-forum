<?php

	session_start();

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
			include_once(ROOT . DS . "Model" . DS . "DataAccess.php");
			$conn = new DataAccess("hciForum");
			$sql2 = "SELECT * FROM `user` WHERE account='$account'";
			$result2 = mysql_query($sql2);
			$info = mysql_fetch_array($result2);
			$id = $info['id'];
			$score = $info['score'];
			$level = $info['level'];
			$auth = $info['authority'];
			$_SESSION['id'] = $id;
			$_SESSION['usr'] = $account;
			$_SESSION['score'] = $score;
			$_SESSION['level'] = $level;
			$_SESSION['auth'] = $auth;
			$_SESSION['state'] = true;
			echo "<script language=javascript>location='/HCI-forum/';</script>";
		}
		break;
		default:
		require_once(ROOT . DS . "Controller" . DS . "indexCon.php");
			break;
	}
?>