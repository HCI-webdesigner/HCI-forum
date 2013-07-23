<html>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</html>
<?php
	foreach ($postTitle as $key => $posttitle) {
?>
	<a href="mopView.php?id=<?php echo $postId[$key];?>"><?php echo $posttitle;?></a><br>
<?php
	}
?>