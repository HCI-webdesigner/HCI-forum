<html>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</html>
<?php
	include_once('/var/www/HCI-forum/Model/DataAccess.php');

	$conn = new DataAccess("hciForum");
	$areaId = $_GET['id'];
	$sql = "SELECT * FROM `area` WHERE id= '$areaId'";
	$query = mysql_query($sql);
	$areaMsg = mysql_fetch_array($query);

	if($_POST['sub']) {
		$newAreaName = $_POST['newAreaName'];
		$areaId = $_POST['areaId'];
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
				$sql2 = "UPDATE `area` SET name = '$newAreaName', icon_url='$areaIcon' WHERE id='$areaId'";
				if(mysql_query($sql2)) {
					echo "<script language=javascript>alert('修改成功');location='/HCI-forum/Controller/adminController2.php'</script>";
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
<form action="editArea.php" method="post" enctype="multipart/form-data">
	<input type="text" value="<?php echo $areaMsg['name'];?>" name="newAreaName"><br>
	<input type="file" name="file"><br>
	<input type="hidden" value="<?php echo $areaId;?>" name="areaId">
	<input type="submit" name="sub">	
</form>