<?php
	session_start();

	$header = <<<EOT
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>后台管理 - HCI技术论坛</title>
	<link rel="stylesheet" href="/HCI-forum/stylesheets/admin.css" />
</head>
<body>
	<div id="header">
		<a href="/HCI-forum"><img src="/HCI-forum/images/logo.png" alt="logo" /></a>

EOT;
	
	$info = <<<EOT
		<div id="info">

EOT;
	$info.= "			<a href="."'/HCI-forum/Controller/logout.php'".">"."注销"."</a>";
	$info.= <<<EOT

		</div>
	</div>

EOT;
	
	$main = <<<EOT
	<div id="main">
		<div id="nav-bar">
			<div class="nav-button">帖子审核</div>
			<div class="nav-button">模块管理</div>
			<div class="nav-button">版主管理</div>
		</div>
		<div id="content">
			<div class="inner-content">帖子审核</div>
			<div class="inner-content">模块管理</div>
			<div class="inner-content">版主管理</div>
		</div>
	</div>

EOT;
	
	$footer = <<<EOT
	<div id="footer">
		
	</div>

	<script type="text/javascript" src="/HCI-forum/javascripts/admin.js"></script>
</body>
</html>
EOT;

	echo $header;
	echo $info;
	echo $main;
	echo $footer;

?>