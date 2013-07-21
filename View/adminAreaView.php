<div id="settings">
	<a href="/HCI-forum/Controller/addAreaController.php"><h3>增加模块</h3></a>
</div>
<?php
	foreach ($areaName as $key => $areaname) {
?>
	<div class="areas">
		<span class="showFrame" id="<?php echo $areaId[$key];?>">
		<h2><img src="<?php echo $areaIcon[$key];?>"></h2>
		<h3><?php echo $areaname;?></h3>
		</span> <!-- href="../Controller/adminPostCon.php?area=<?php echo $areaId[$key];?>&board=0" -->
		<a href="/HCI-forum/Controller/editArea.php?id=<?php echo $areaId[$key];?>"><span class='buttons'>编辑</span></a>
		<a href="/HCI-forum/Controller/deleteArea.php?id=<?php echo $areaId[$key];?>"><span class="buttons">删除</span></a>
	</div>
<?php
	}
?>

<div id="frameDiv">
	<iframe src="" frameborder="0" id="iframe"></iframe>
	<div id="close-button"></div>
</div>