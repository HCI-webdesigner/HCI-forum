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
			<a href="/HCI-forum"><img src="/HCI-forum/images/logo.png" alt="logo" /></a>
		</div>

EOT;
	
	include_once ('/var/www/HCI-forum/Model/DataAccess.php');
	$conn = new DataAccess("localhost","root","root","hciForum");
	$area = $_GET['area'];
	$sql1 = "SELECT * FROM `board` WHERE area_id=".$area;
	$result1 = mysql_query($sql1);
	$nav = <<<EOT
		<div id="nav">
			<ul>
			<a href="
EOT;
	$nav.='/HCI-forum/View/area.php?area='.$area.'&board=0">';
	$nav.=<<<EOT

				<li>全部</li>
			</a>

EOT;
	while ($list_arr1 = mysql_fetch_array($result1)) {
		$nav.= <<<EOT
			<a href="/HCI-forum/View/area.php?area=
EOT;
		$nav.= $area.'&board='.$list_arr1['id'];//board url
		$nav.= <<<EOT
" >
				<li>
EOT;
		$nav.=$list_arr1['name'];
		$nav.= <<<EOT
</li>
			</a>

EOT;
	}

	/*$board = $_GET['board'];
	if($board == 0) {
		$sql2 = "SELECT * FROM `post`";
	}
	else{
		$sql2 = "SELECT * FROM `post` WHERE board_id=".$board;
	}
	$result2 = mysql_query($sql2);*/
	$list = <<<EOT
		</div>
		<div id="list">
			<div id="setting"></div>
			<ul>


EOT;
	/*while ($list_arr2 = mysql_fetch_array($result2)){
		$list.=<<<EOT
				<li>
					<a href="" class="list-a">
						<div class="post-link">
							<span class="title">
EOT;
		$list.=$list_arr2['title'];
		$list.=<<<EOT
</span>
							<span class="time">
EOT;
		$list.=$list_arr2['post_date'];
		$list.=<<<EOT
</span>
						</div>
					</a>
				</li>

EOT;
	}*/

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
	echo "<br>";
	include_once('/var/www/HCI-forum/Controller/allPost.php');
	$areaId = $_GET['area'];
	$boardId = $_GET['board'];
	new AllPost($areaId, $boardId);
	echo $list;
	echo $footer;
?>