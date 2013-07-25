<html>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</html>
<?php
	if(count($postTitle) == 0) {
		echo "现在暂时还没有帖子需要审核";
	}
	foreach ($postTitle as $key => $posttitle) {
?>
	<div class="inform">
		标题 : <?php echo $posttitle;?><br>
		内容 : <?php echo $postContent[$key];?><br>
		作者 : <?php echo $postUser[$key];?><br>
		举报原因 : <?php echo $fbContent[$key];?><br>
		举报时间 : <?php echo $fbDate[$key];?><br>
		举报者 : <?php echo $feedbackUser[$key];?><br>
		<a href="/HCI-forum/Controller/informResult.php?type=1&action=1&
		id=<?php echo $postId[$key];?>">删除</a>
		<a href="/HCI-forum/Controller/informResult.php?type=1&action=2&
		id=<?php echo $postId[$key];?>">取消举报</a>
		<br><br>
	</div>
<?php
	}
?>