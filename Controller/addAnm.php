<?php
	define("DS", DIRECTORY_SEPARATOR);
	define("ROOT", dirname(dirname(__FILE__)));
	include_once(ROOT . DS . "Model" . DS . "DataAccess.php");
	$areaId = $_GET['area'];
	$conn = new DataAccess("hciForum");
	$anmDate = date('Y-m-d H:i:s');
	if($_POST['sub']) {
		$anmTitle = $_POST['title'];
		$anmContent = $_POST['content'];
		$sql = "INSERT INTO `announcement` (id, title, content, anm_date, area_id) values 
		('' , '$anmTitle','$anmContent', '$anmDate' ,'$areaId')";
		if(mysql_query($sql)) {
			echo "<script language=javascript>alert('发布成功');location='/HCI-forum/View/ANMView.php?area=$areaId'</script>";
		}
		else {
			echo $sql;
		}
	}
?>
<html>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</html>
<form action="" method="post" name="anm">
	标题: <input type="text" name="title" size=20><br>
	内容: <textarea name="content" cols=40 rows=20></textarea><br>
	<input type="submit" name="sub" value="提交">
</form>