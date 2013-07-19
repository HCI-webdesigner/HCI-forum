			<div id="postTitle"><?php echo $post_title;?></div>
			<div id="msg">
			<h2><?php echo $post_user;?>:</h2>
			<?php echo $post_content;?>
			</div>
<?php
	foreach ($commentUser as $key => $commentuser) {
?>
			<div class="comment">
				<h3><?php echo $commentuser;?>:</h3>
				<p><?php echo $commentContent[$key];?></p>
				<p><?php echo $commentDate[$key];?></p>
			</div>
<?php
	}
?>