<?php
	include('/var/www/HCI-forum/Model/DataAccess.php');
	class User {
		$account;
		$pass;
		function __construtor($account,$pass) {
			$this->account = $account;
			$this->pass = md5($pass);
			$conn = new DataAccess("localhost", "root", "root");
			$conn->selectDatabase("hciFroum");
			
		}
	}
?>