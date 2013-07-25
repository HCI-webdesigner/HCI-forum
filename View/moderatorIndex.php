<?php
	session_start();
	$areaId = $_GET['area'];
	$userId = $_SESSION['id'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>版主管理 - HC技术论坛</title>
	<link rel="stylesheet" href="../stylesheets/moderator.css" />
</head>
<body>
	<div id="header">
		<a href="/HCI-forum"><img src="../images/logo.png" alt="logo" /></a>
	</div>
	<div id="main">
		<div id="nav">
			<div class="nav-btn" id="Controller/mpCon.php?area=<?php echo $areaId;?>&action=0">管理帖子</div>
			<div class="nav-btn" id="/View/ANMView.php?area=<?php echo $areaId;?>">编辑公告</div>
			<div class="nav-btn" id="/Controller/editUserMsg.php?id=<?php echo $userId;?>&area=<?php echo $areaId;?>">修改信息</div>
			<div class="nav-btn" id="/Controller/eaBoard.php?area=<?php echo $areaId;?>">模块管理</div>
			<div class="nav-btn" id="/Controller/editLogo.php?area=<?php echo $areaId;?>">更换logo</div>
		</div>
		<div id="content">
			<iframe src="http://localhost/HCI-forum/Controller/mpCon.php?area=<?php echo $areaId;?>&action=0" frameborder="0" id="iframe"></iframe>
		</div>
	</div>
	<div id="footer"></div>

	<script type="text/javascript" src="../javascripts/moderator.js"></script>
</body>
</html>