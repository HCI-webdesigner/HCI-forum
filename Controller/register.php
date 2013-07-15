<?php
	include_once('/var/www/HCI-forum/Model/user.php');
	include_once('/var/www/HCI-forum/Model/DataAccess.php');
	class Register {
		function Register($_POST) {
			$account = $_POST["userName"];
			$pwd = $_POST["pwd"];
			$pwd_confirm = $_POST["pwd_confirm"];
			if($pwd == $pwd_confirm) {
				$user = new User($account, $pwd, $pwd_confirm);
				$pwd=$user->pwd;
	 			$conn = new DataAccess("localhost", "root", "root", "hciForum");
	 			$sql = "INSERT INTO user (id,account,password) values(' ','$account','$pwd')";
	 			$query=mysql_query($sql);
			}
		}
	}
?>