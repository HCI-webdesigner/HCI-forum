<?php
	class DataAccess {
		function __construct($host, $user, $pass) {
			mysql_connect($host, $user, $pass);
		}

		function selectDataBase($db) {
			mysql_select_db($db);
		}
	}
?>