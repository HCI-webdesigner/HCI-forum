			<div id="postTitle"><?php echo $post_title;?></div>
			<div id="msg">
			<h2><?php echo $post_user;?>:</h2>
			<p><?php echo $post_content;?></p>
			<p class="time">发表于:&nbsp;<?php echo $post_date;?></p>
			</div>
<?php
	foreach ($commentUser as $key => $commentuser) {
?>
			<div class="comment">
				<h3><?php echo $commentuser;?>:</h3>
				<p><?php echo $commentContent[$key];?></p>
				<p class="time">发表于:&nbsp;<?php echo $commentDate[$key];?></p>
			</div>
<?php
	}
?>