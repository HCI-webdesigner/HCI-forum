			<div id="postTitle"><?php echo $post_title;?></div>
			<div id="msg">
				<?php echo $post_content;?>
				<?php echo "<br>用户 : ".$post_user;?>
			</div>
			评论: 
<?php
	foreach ($commentUser as $key => $commentuser) {
?>
	<div id="comment_user"><?php echo $commentuser;?></div>
	<div id="comment_content"><?php echo $commentContent[$key];?></div>
<?php
	}
?>