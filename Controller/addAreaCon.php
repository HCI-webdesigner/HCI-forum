<?php
	$conn = new DataAccess("hciForum");
	if($_POST['sub']) {
		$areaName = $_POST['areaName'];

		if((($_FILES["file"]["type"] == "image/gif")
				|| ($_FILES["file"]["type"] == "image/jpeg")
				|| ($_FILES["file"]["type"] == "image/pjpeg")
				|| ($_FILES["file"]["type"] == "image/png"))
				&& ($_FILES["file"]["size"] < 2000000))
		{
			if($_FILES["file"]["error"] > 0) {
				echo "Return Code: ".$_FILES["file"]["error"]."<br />";
			}
			else {
				// echo "Upload: ".$_FILES["file"]["name"]."<br />";
				// echo "Type: ".$_FILES["file"]["type"]."<br />";
				// echo "Size: ".($_FILES["file"]["size"]/1024)." Kb<br />";
				// echo "Temp file: ".$_FILES["file"]["temp_name"]."<br />";

				if(file_exists("/var/www/HCI-forum/images/".$_FILES["file"]["name"])) {
					echo $_FILES["file"]["name"]." already exists.";
				}
				else {
					move_uploaded_file($_FILES["file"]["tmp_name"],
						"/var/www/HCI-forum/images/".$_FILES["file"]["name"]);
					echo "Stored in: "."/HCI-forum/images/".$_FILES["file"]["name"];
				}
				$areaIcon = "/HCI-forum/images/".$_FILES["file"]["name"];;
				$sql = "INSERT INTO `area` (name, icon_url) values ('$areaName', '$areaIcon')";
				if(mysql_query($sql)) {
					echo "<script language=javascript>alert('添加成功');location='/HCI-forum/Controller/adminController2.php'</script>";
				}
			}
		}
		else {
			echo "Invalid file";
			echo $_FILES["file"]["type"];
			echo $_FILES["file"]["size"];
		}
	}
?>
<html>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</html>
<form action="addAreaController.php" method="post" name="addArea" enctype="multipart/form-data">
	模块名称: <input type="text" name="areaName" size="10"><br>
	模块图片: <input type="file" name="file" id="file"><br>
	<input type="submit" name="sub" value="提交">
</form>