<html>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</html>
<?php
	foreach ($postTitle as $key => $posttitle) {
?>
	<a href="/HCI-forum/View/mopView.php?id=<?php echo $postId[$key];?>"><?php echo $posttitle;?></a>
	&nbsp;&nbsp;&nbsp;<a href="/HCI-forum/Controller/setTop.php">置顶</a>
	<a href="/HCI-forum/Controller/marrowbone.php">精华</a>
	<a href="/HCI-forum/Controller/lock.php">锁定</a>
	<a href="/HCI-forum/Controller/del.php">删除帖子</a>
	<a href="">锁定帖子</a>
	<a href="">移动帖子</a><br>
<?php
	}
?>