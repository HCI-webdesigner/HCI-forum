<?php
	if($post_type == 1) {
?>
			<div id="type">问题点数 : <?php echo $post_point;?></div>
<?php
	}
	if($post_user == $_SESSION['usr'] && $post_point != 0 && $post_type == 1) {
?>
	<a href="/HCI-forum/View/givePointV.php?id=<?php echo $postId;?>
	&point=<?php echo $post_point;?>">给分</a>
<?php
	}
	else if($post_user != $_SESSION['usr'] && $post_type == 2) {
?>
	<a href="HCI-forum/View/voteView.php?id=<?php echo $postId;?>">投票</a>
<?php
	}
?>
			<div id="postTitle"><?php echo $post_title;?></div>
			<div id="msg">
			楼主 : 
			<h2><?php echo $post_user;?>:</h2>
			<p><?php echo $post_content;?></p>
			<p class="time">发表于:&nbsp;<?php echo $post_date;?></p>
			<a href="/HCI-forum/Controller/informPost.php?id=<?php echo $postId;?>">举报</a>
			</div>
<?php
	foreach ($commentUser as $key => $commentuser) {
?>
			<div class="comment">
				<h3><?php echo $commentuser;?>:</h3>
				<p><?php echo $commentContent[$key];?></p>
				<p class="time">发表于:&nbsp;<?php echo $commentDate[$key];?></p>
				<p>得分 : <?php echo $commentPoint[$key];?></p>
				<a href="/HCI-forum/Controller/informComment.php?id=<?php echo $commentId[$key];?>&post=<?php echo $postId;?>">举报</a>
			</div>
<?php
	}
?>