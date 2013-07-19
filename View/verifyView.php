<html>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</html>
<?php
	foreach ($verifyTitle as $key => $verifytitle) {
?>
	<a href="/HCI-forum/View/verifyPostView.php?id=<?php echo $verifyId[$key]; ?>"><?php echo $verifytitle;?></a>
	<?php echo $verifyUser[$key];?>
<?php
	}
?>