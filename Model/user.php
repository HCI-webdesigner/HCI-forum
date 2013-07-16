<?php
	class User {
		public $account;
		public $pass;
		function __construct($account,$pass) {
			$this->account = $account;
			$this->pass = md5($pass);
		}
	}
?>