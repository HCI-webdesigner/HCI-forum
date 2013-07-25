<html>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</html>
<?php
	if(count($commentContent) == 0) {
		echo "现在暂时还没有评论需要审核";
	}
	foreach ($commentContent as $key => $commentcontent) {
?>
	<div class="inform">
		内容 : <?php echo $commentcontent;?><br>
		作者 : <?php echo $commentUser[$key];?><br>
		举报原因 : <?php echo $fbContent[$key];?><br>
		举报时间 : <?php echo $fbDate[$key];?><br>
		举报者 : <?php echo $feedbackUser[$key];?><br>
		<a href="/HCI-forum/Controller/informResult.php?type=2&action=1&
		id=<?php echo $commentId[$key];?>">删除</a>
		<a href="/HCI-forum/Controller/informResult.php?type=2&action=2&
		id=<?php echo $commentId[$key];?>">取消举报</a>
		<br><br>
	</div>
<?php
	}
?>