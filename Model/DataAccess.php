<?php
	class DataAccess {
		public $result;
		function __construct($host, $user, $pass, $db) {
			$this->result=mysql_connect($host, $user, $pass);
			mysql_select_db($db, $this->result);
		}
	}
?>