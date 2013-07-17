<?php
	$header = <<<EOT
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>帖子</title>
	<link rel="stylesheet" href="/HCI-forum/stylesheets/post.css" />
</head>
<body>
	<div id="body">
		<div id="header">
			<a href="/HCI-forum"><img src="/HCI-forum/images/logo.png" alt="logo" /></a>
		</div>
		<div id="main">

EOT;
	
	include_once('/var/www/HCI-forum/Model/DataAccess.php');
	$conn = new DataAccess("localhost","root", "zsl0917zsl","hciForum");
	$postId = $_GET['id'];
	$sql = "SELECT * FROM post WHERE id='$postId'";
	$query=mysql_query($sql);
	$postContent='';
	$postDate='<br/>';
	while($post_Row=mysql_fetch_array($query)) {
		$post_Author = mysql_fetch_array(mysql_query("SELECT account FROM user WHERE id='$post_Row[user_id]'"));
		$postAuthor = '					<h2>'.$post_Author[0].':</h2>';
		$postTitle = '			<div id="postTitle">'.$post_Row['title'].'</div>';
		$postContent .= '<span class="content">'.$post_Row['content'].'</span>';
		$postDate .= '<span class="date">'.$post_Row['post_date'].'</span>';
	}
	$postDiv =<<<EOT

				<div id="post">

EOT;
	$postDiv.=$postAuthor;
	$postDiv.=$postContent;
	$postDiv.=$postDate;
	$postDiv.=<<<EOT

				</div>
EOT;
	
	$footer = <<<EOT

			<div id="send-comment">
				<form action="">
					<label for="">发表评论：</label>
					<textarea name="" id="" cols="30" rows="10"></textarea><br />
					<input type="submit" />
					<input type="reset" />
				</form>
			</div>
			<div id="control-panel">+</div>
		</div>
		<div id="footer"></div>
	</div>
</body>
</html>
EOT;

	echo $header;
	echo $postTitle;
	echo $postDiv;
	echo $footer;
?>