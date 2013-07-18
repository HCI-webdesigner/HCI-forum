<?php
	session_start();
	include_once('/var/www/HCI-forum/Model/DataAccess.php');
	$conn = new DataAccess("hciForum");
	$postId = $_GET['id'];
	$sql1 = "SELECT * FROM post WHERE id='$postId'";
	$query1=mysql_query($sql1);
	$postContent='';
	$postDate='<br/>';
	while($post_Row=mysql_fetch_array($query1)) {
		$post_Author = mysql_fetch_array(mysql_query("SELECT account FROM user WHERE id='$post_Row[user_id]'"));
		$postAuthor = '					<h2>'.$post_Author[0].':</h2>';
		$postTitle = '			<div id="postTitle">'.$post_Row['title'].'</div>';
		$pageTitle = $post_Row['title'];
		$postContent .= '<span class="content">'.$post_Row['content'].'</span>';
		$postDate .= '<span class="date">'.$post_Row['post_date'].'</span>';
	}

	$header = <<<EOT
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>
EOT;
	$header.=$pageTitle." - HCI技术论坛";
	$header.=<<<EOT
</title>
	<link rel="stylesheet" href="/HCI-forum/stylesheets/post.css" />
</head>
<body>
	<div id="body">
		<div id="header">
			<a href="/HCI-forum"><img src="/HCI-forum/images/logo.png" alt="logo" /></a>
		</div>
		<div id="main">

EOT;
	
	$postDiv =<<<EOT

				<div id="post">

EOT;
	$postDiv.=$postAuthor;
	$postDiv.=$postContent;
	$postDiv.=$postDate;
	$postDiv.=<<<EOT

				</div>
EOT;
	
	$commentDiv =<<<EOT


EOT;
	$sql2 = "SELECT * FROM comment WHERE post_id = ".$postId;
	$query2 = mysql_query($sql2);
	while ($comment_row = mysql_fetch_array($query2)) {
		$sql3 = "SELECT * FROM user WHERE id = ".$comment_row['user_id'];
		$query3 = mysql_query($sql3);
		$commentUser_row = mysql_fetch_array($query3);
		$commentDiv.=<<<EOT
				<div class="comment">

EOT;
		$commentDiv.="					<h3>".$commentUser_row['account'].":</h3>";
		$commentDiv.=<<<EOT

					<span class="comment-content">

EOT;
		$commentDiv.="						".$comment_row['content'];
		$commentDiv.=<<<EOT

					</span><br/>

EOT;
		$commentDiv.='					<span class="comment-date">'.$comment_row['comment_date'];
		$commentDiv.=<<<EOT
</span>
				</div>

EOT;
	}


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
	if($_SESSION['state']) {
		$header.="<a href='/HCI-forum/Controller/logout.php'>注销</a>";
	}
	echo $header;
	echo $postTitle;
	echo $postDiv;
	echo $commentDiv;
	if($_SESSION['state']) {
		echo $footer;
	}
	else {
		echo "<a href="."/HCI-forum/index.php".">"."登录后才可以评论."."<"."/a>";
	}
?>