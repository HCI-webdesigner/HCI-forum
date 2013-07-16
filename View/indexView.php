<?php
	$header = <<<EOT
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>HCI技术论坛</title>
	<link rel="stylesheet" href="/HCI-forum/stylesheets/index.css" />
</head>
<body>
	<div id="header">
		<img src="/HCI-forum/images/logo.png" alt="logo" style="float:left;margin-left:100px"/>
		<div id="login">
			<form action="" name="login_form">
				<label for="">名字：</label>
				<input type="text" name="usr"/><br />
				<label for="">密码：</label>
				<input type="password" name="pwd"/><br />
				<div id="submit-button">submit</div>
				<a href="/HCI-forum/View/register.html">
					<div id="register-button">register</div>
				</a>
			</form>
		</div>
	</div>
	<div id="main">
EOT;

		
	$footer = <<<EOT
</div>
	<div id="footer"></div>

	<script type="text/javascript" src="/HCI-forum/javascripts/index.js"></script>
</body>
</html>
EOT;
	include_once ('/var/www/HCI-forum/Model/DataAccess.php');
	$list='';
	$conn = new DataAccess("localhost","root","zsl0917zsl","hciForum");
	$sql1 = "SELECT icon_url FROM area";
	$result = mysql_query($sql1);
	while(mysql_fetch_array($result)){
		$list_arr=mysql_fetch_array($result);
		$list.= "<img src='".$list_arr["icon_url"]."'><br/>";
	}

	echo $header;
	echo $list;
	echo $footer;
?>