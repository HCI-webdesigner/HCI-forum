
<div id="settings">
	<a href="/HCI-forum/Controller/addAreaController.php"><h3>增加模块</h3></a>
</div>
<?php
	foreach ($areaName as $key => $areaname) {
?>
<?php 
		if($areaDeleted[$key]) {
		}
		else {
?>
	<div class="areas">

		<span class="buttons" id="Controller/adminPostCon.php?area=<?php echo $areaId[$key];?>">
		<h2><img src="<?php echo $areaIcon[$key];?>"></h2>
		<h3><?php echo $areaname;?></h3>
		</span>
		<span class='buttons' id="Controller/editArea.php?id=<?php echo $areaId[$key];?>">编辑</span></a>
		<a href="#" onclick="del(<?php echo $areaId[$key];?>)">删除</span></a>
	</div>
<?php
			}
	}
?>