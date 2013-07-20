<?php
	class Verify {
		function __construct() {
			include_once('/HCI-forum/Model/DataAccess.php');
			$conn=new DataAccess("hciForum");
			$sql="SELECT * FROM `post` WHERE type='4'";
			$query=mysql_query($sql);
			while($verify_rows=mysql_fetch_array($query)) {
				echo $verify_rows['title']."<br>";
				echo $verify_rows['content']."<br>";
			}
		}
		function deal($result, $verifyId) {
			if($result == "1") {
				$sql = "UPDATE `post` SET type='3' WHERE id='$verifyId'"
			}
			else {
				$sql="UPDATE `post` SET type='0' WHERE id='$verifyId'";
			}
			if(mysql_query($sql)) {
				
			}
		}
	}
?>