<?php
	session_start();
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
		<a href="/HCI-forum"><img src="/HCI-forum/images/logo.png" alt="logo" style="float:left;margin-left:100px"/></a>

EOT;

	$loginBox = <<<EOT
		<div id="login">
			<form action="/HCI-forum/Controller/login.php" name="login_form" method="post">
				<label for="">名字：</label>
				<input type="text" name="usr"/><br />
				<label for="">密码：</label>
				<input type="password" name="pwd"/><br />
				<input type="submit" name="login" id="submit-button"/>
				<a href="/HCI-forum/View/register.html">
					<div id="register-button">register</div>
				</a>
			</form>
		</div>

EOT;
	$infoBox = <<<EOT
		<div id="info">
			Hello！
EOT;
	if(!$_SESSION['state']) {
		$header.=$loginBox;
	}
	else {
		$infoBox.= $_SESSION['usr']."！<br/>";
		$infoBox.="<a href='/HCI-forum/Controller/logout.php'>注销</a>";
		if($_SESSION['auth']){
			$infoBox.="&nbsp;&nbsp;&nbsp;<a href='/HCI-forum/View/admin.php'>后台管理</a>";
		}
		$infoBox.=<<<EOT
		</div>
EOT;
		$header.=$infoBox;
	}
	$header.=<<<EOT
	</div>
	<div id="main">
EOT;

		
	$footer = <<<EOT
</div>
	<div id="footer"></div>
</body>
</html>
EOT;
	include_once ('/var/www/HCI-forum/Model/DataAccess.php');
	$list='';
	$conn = new DataAccess("hciForum");
	$sql1 = "SELECT * FROM `area`";
	$result = mysql_query($sql1);
	while($list_arr = mysql_fetch_array($result)){
		$list.=<<<EOT

		<div class="board">
			<a href="../HCI-forum/View/area.php?area=
EOT;
		$list.=$list_arr['id'];
		$list.=<<<EOT
&board=0">
			<div class="board-logo">
				<img src="
EOT;
		$list.=$list_arr['icon_url'];
		$list.=<<<EOT
" alt="logo" />
				<h3>
EOT;
		$list.=$list_arr['name'];
		$list.=<<<EOT
</h3>
			</div>
			</a>
			<div class="top-posts">
				<ul>
					<li>·</li>
					<li>·</li>
					<li>·</li>
					<li>·</li>
					<li>·</li>
					<li>·</li>
					<li>·</li>
					<li>·</li>
					<li>·</li>
					<li>·</li>
				</ul>
			</div>
		</div>
EOT;
	}
	echo $header;
	echo $list;
	echo $footer;
?>