<?php
	define("DS", DIRECTORY_SEPARATOR);
	define("ROOT", dirname(dirname(__FILE__)));

	include_once(ROOT . DS . "Model" . DS . "DataAccess.php");
	$areaId = $_GET['area'];
	$conn = new DataAccess("hciForum");

	if($_POST['sub']) {
		$areaId = $_POST['areaId'];
		$areaIcon = uploadImg("file");
		if($areaIcon == "") {
			echo "failed";
		}
		else {
			$sql = "UPDATE `area` SET icon_url='$areaIcon' WHERE id='$areaId'";
			if(mysql_query($sql)) {
				echo "<script language=javascript>alert('添加成功');location='/HCI-forum/View/moderatorIndex.php?area=$areaId';</script>";
			}
		}
	}
	else {
	}

	$sql = "SELECT icon_url FROM `area` WHERE id='$areaId'";
	$query = mysql_query($sql);
	while($area_rows = mysql_fetch_array($query)) {
		$iconUrl = $area_rows[0];
	}

	function uploadImg($file) {
		if((($_FILES[$file]["type"] == "image/gif")
				|| ($_FILES[$file]["type"] == "image/jpeg")
				|| ($_FILES[$file]["type"] == "image/pjpeg")
				|| ($_FILES[$file]["type"] == "image/png"))
				&& ($_FILES[$file]["size"] < 2000000))
		{
			if($_FILES[$file]["error"] > 0) {
				return "";
			}
			else {
				if(file_exists("/var/www/HCI-forum/images/".$_FILES["file"]["name"])) {
					return "/HCI-forum/images/".$_FILES[$file]["name"];
				}
				else {
					move_uploaded_file($_FILES[$file]["tmp_name"],
						"/var/www/HCI-forum/images/".$_FILES[$file]["name"]);
					return "/HCI-forum/images/".$_FILES[$file]["name"];
				}
			}
		}
		else {
			return "";
		}
	}
?>
<html>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<img src="<?php echo $iconUrl;?>" width=150 height=150><br>
	<form action="editLogo.php" method="post" enctype="multipart/form-data">
		<input type="file" name="file" id="file"><br>
		<input type="hidden" name="areaId" value="<?php echo $areaId;?>">
		<input type="submit" name="sub" value="确定">
	</form>
</html>