<?php
	session_start();
	class Logout {
		function __construct() {
			session_destroy();
		}
	}
	new Logout();
	echo "<script language=javascript>location='/HCI-forum/index.php';</script>";
?>