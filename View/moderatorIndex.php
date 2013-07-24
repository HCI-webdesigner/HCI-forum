<?php
	session_start();
	$areaId = $_GET['area'];
	$userId = $_SESSION['id'];
	echo $_SESSION['usr']."<br>";
	echo $_SESSION['level']."<br>";
	echo $_SESSION['auth']."<br>";
	echo $_SESSION['score']."<br>";
?>
<a href="/HCI-forum/Controller/mpCon.php?area=<?php echo $areaId;?>&action=0">管理版内帖子</a><br>
<a href="/HCI-forum/View/ANMView.php?area=<?php echo $areaId;?>">编辑和修改公告</a><br>
<a href="/HCI-forum/Controller/editUserMsg.php?id=<?php echo $userId;?>&area=<?php echo $areaId;?>">修改个人信息</a><br>
<a href="/HCI-forum/Controller/eaBoard.php?area=<?php echo $areaId;?>">修改或增加子模块</a><br>
<a href="/HCI-forum/Controller/editLogo.php?area=<?php echo $areaId;?>">修改版块的logo</a><br>
<html>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</html>