<?php
	foreach ($postUser as $key => $user) {
?>
	<h1><?php echo $user;?></h1>
	<h1><?php echo $postTitle[$key];?></h1>
	<h2>类型</h2>
	<h1><?php
		switch ($postType[$key]) {
		case '0':
			echo "普通帖";
			break;
		case '1':
			echo "问答帖";
		case '2':
			echo "辩论帖";
		case '3':
			echo "精华帖";
		default:
			break;
		}?></h1>
<?php
	}
?>
<html>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
</html>