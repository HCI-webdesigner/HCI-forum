<?php
	class DataAccess {
		public $result;
		function __construct($db) {
			$this->result=mysql_connect("localhost", "root", "zsl0917zsl");
			mysql_select_db($db, $this->result);
			mysql_query("set names 'utf8'");
		}
	}
?>