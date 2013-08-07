<html>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<script type="text/javascript" src='/HCI-forum/javascripts/delANM.js'></script>
</html>
<?php
	define("DS", DIRECTORY_SEPARATOR);
	define("ROOT", dirname(dirname(__FILE__)));

	include_once(ROOT . DS . "Model" . DS . "DataAccess.php");
	$conn = new DataAccess("hciForum");
	$areaId = $_GET['area'];
	$sql = "SELECT * FROM announcement WHERE area_id='$areaId'";
	$query = mysql_query($sql);
	$anmId = array();
	$anmTitle = array();
	$anmContent = array();
	$anmDate = array();
	while($anmRows = mysql_fetch_array($query)) {
		array_push($anmTitle, $anmRows['title']);
		array_push($anmContent, $anmRows['content']);
		array_push($anmId, $anmRows['id']);
	}

	foreach ($anmTitle as $key => $anmtitle) {
?>
	<h3><a href="#"><?php echo $anmtitle;?></a></h3>
	<a href="#" onclick="delANM(<?php echo $anmId[$key];?>)">删除</a>
	<a href="editAnm.php">编辑</a><br>
<?php
	}
?>
	<a href="/HCI-forum/Controller/addAnm.php?area=<?php echo $areaId;?>">添加</a>