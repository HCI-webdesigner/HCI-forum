<html>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</html>
<?php
	echo $message."<br>";
	foreach ($titleA as $key => $titlea) {
?>
	<a href="/HCI-forum/Controller/onePostCon.php?
	postId=<?php echo $postId[$key];?>"><h4><?php echo $titlea;?></h4></a><br>
	<h5><?php echo $contentA[$key];?></h5>
<?php
	}
?>