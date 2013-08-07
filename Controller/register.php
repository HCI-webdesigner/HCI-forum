<?php
	define("DS",DIRECTORY_SEPARATOR);
	define("ROOT",dirname(dirname(__FILE__)));
	include_once(ROOT . DS . "Model" . DS . "user.php");
	include_once(ROOT . DS . "Model" . DS . "DataAccess.php");
	class Register {
		function __construct($account, $pwd, $pwd_confirm) {
			if($pwd == $pwd_confirm) {
				$user = new User($account, $pwd);
				$pwd=$user->pass;
	 			$conn = new DataAccess("hciForum");
	 			$sql = "INSERT INTO user (id,account,password) values(' ','$account','$pwd')";
	 			$query=mysql_query($sql);
			}
		}
	}

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

?>