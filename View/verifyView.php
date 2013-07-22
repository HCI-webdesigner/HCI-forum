<html>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</html>
<?php
	if(count($verifyTitle) == 0) {
		echo "现在暂时还没有帖子需要审核";
	}
	foreach ($verifyTitle as $key => $verifytitle) {
?>
	<span class="buttons" id="View/verifyPostView.php?id=<?php echo $verifyId[$key]; ?>"><?php echo $verifytitle;?></span>
	<?php echo $verifyUser[$key];?>
	<br>
<?php
	}
?>