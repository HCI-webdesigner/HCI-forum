<?php
	define("DS", DIRECTORY_SEPARATOR);
	define("ROOT", dirname(dirname(__FILE__)));
	$areaId = $_GET['area'];
	//include_once(ROOT . DS . "Controller" . DS . "mpCon.php");
?>
<a href="/HCI-forum/Controller/mpCon.php?area=<?php echo $areaId?>">管理版内帖子</a><br>
<a href="/HCI-forum/View/ANMView.php?area=<?php echo $areaId?>">编辑和修改公告</a><br>
<a href="">修改个人信息</a><br>
<a href="/HCI-forum/Controller/eaBoard.php?area=<?php echo $areaId?>">修改或增加子模块</a><br>
<a href="">修改版块的logo</a><br>
<html>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</html>