<html>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<script type="text/javascript">
	function checkPoint(num,sum) {
		var point = 0;
		for(var i=1;i<=num;i++) {
			point = point + parseInt(document.getElementById("point"+i).value);
		}
		if(point > sum) {
			alert("超过帖子点数了，请重新分配");
			return false;
		}
		return true;
	}
	</script>
	<body>

<?php
	define("DS",DIRECTORY_SEPARATOR);
	define("ROOT",dirname(dirname(__FILE__)));
	include_once(ROOT . DS . "Model" . DS. "DataAccess.php");
	$conn = new DataAccess("hciForum");
	$postId = $_GET['id'];
	$point = $_GET['point'];
	$sql = "SELECT * FROM `comment` WHERE post_id='$postId' AND deleted='0'";
	$query = mysql_query($sql);
	$cNum = mysql_num_rows($query);
	$commentId = array();
	$userId = array();
	$i = 0;
?>
<form action="/HCI-forum/Controller/givePoint.php" method="post" 
		name="givePoint" onsubmit="return checkPoint(<?php echo $cNum;?>, <?php echo $point;?>)">
<?php
	while($commentRows=mysql_fetch_array($query)) {
		$i++;
		$userSQL = "SELECT account FROM `user` WHERE id='$commentRows[user_id]'";
		$cUser = mysql_fetch_array(mysql_query($userSQL));
		$userAccount = $cUser['account'];
		array_push($commentId, $commentRows['id']);
		array_push($userId, $commentRows['user_id']);
		echo $userAccount."<br>";
		echo $commentRows['content']."<br>";
		echo $commentRows['comment_date']."<br>";
?>
			<input type="text" name="point<?php echo $i;?>" id="point<?php echo $i;?>" size=5><br>
<?php
	}
?>
			<input type="hidden" value="<?php echo $postId;?>" name="postId">
			<input type="hidden" value="<?php echo $point;?>" name="point">
			<input type="submit" name="sub" value="确定">
		</form>
	</body>
</html>