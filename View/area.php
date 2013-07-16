<?php
	
	$header = <<<EOT
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>板块</title>
	<link rel="stylesheet" href="/HCI-forum/stylesheets/board.css" />
</head>
<body>
	<div id="body">
		<div id="header">
			<img src="/HCI-forum/images/logo.png" alt="logo" />
		</div>

EOT;
	
	include_once ('/var/www/HCI-forum/Model/DataAccess.php');
	$conn = new DataAccess("localhost","root","zsl0917zsl","hciForum");
	$area = $_GET['area'];
	$sql1 = "SELECT * FROM `board` WHERE area_id=".$area;
	$result1 = mysql_query($sql1);
	$nav = <<<EOT
		<div id="nav">
			<ul>

EOT;
	while ($list_arr = mysql_fetch_array($result1)) {
		$nav.= <<<EOT
			<a href="
EOT;
		$nav.= "";//board url
		$nav.= <<<EOT
" >
				<li>
EOT;
		$nav.=$list_arr['name'];
		$nav.= <<<EOT
</li>
			</a>

EOT;
	}

	//$sql2 = 
	$list = <<<EOT
		</div>
		<div id="list">
			<div id="setting"></div>
			<ul>

EOT;

	$footer = <<<EOT
			</ul>
		</div>
		<div id="footer"></div>
	</div>
</body>
</html>
EOT;


	echo $header;
	echo $nav;
	echo $list;
	echo $footer;
?>