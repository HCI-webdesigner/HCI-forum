<?php
	define("DS",DIRECTORY_SEPARATOR);
	define("ROOT","/var/www/HCI-forum");
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

?>