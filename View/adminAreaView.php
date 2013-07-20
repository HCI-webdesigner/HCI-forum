<html>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</html>
<?php
	foreach ($areaName as $key => $areaname) {
?>
	<h3><a href="../Controller/adminPostCon.php?area=<?php echo $areaId[$key];?>&board=0"><?php echo $areaname;?></a></h3>
	<h2><img src="<?php echo $areaIcon[$key];?>" width=150 height=150></h2>
	<a href="/HCI-forum/Controller/editArea.php?id=<?php echo $areaId[$key];?>">编辑</a>
	<a href="/HCI-forum/Controller/deleteArea.php?id=<?php echo $areaId[$key];?>">删除</a>
<?php
	}
?>
<br>
<a href="/HCI-forum/Controller/addAreaController.php"><h2>增加模块</h2></a>