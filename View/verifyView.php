<html>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</html>
<?php
	if(count($verifyTitle) == 0) {
		echo "现在暂时还没有帖子需要审核";
	}
	foreach ($verifyTitle as $key => $verifytitle) {
?>
	<a href="/HCI-forum/View/verifyPostView.php?id=<?php echo $verifyId[$key]; ?>"><?php echo $verifytitle;?></a>
	<?php echo $verifyUser[$key];?>
	<br>
<?php
	}
?>