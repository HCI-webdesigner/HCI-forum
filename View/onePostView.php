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
	else if($post_user != $_SESSION['usr'] && $post_type == 2 && $_SESSION['id'] != 0) {
		$sql3 = "SELECT side FROM `debate` WHERE user_id='$_SESSION[id]' AND post_id='$postId'";
		$result=mysql_fetch_array(mysql_query($sql3));
		if(mysql_num_rows(mysql_query($sql3)) != 0) {
			if($result[0] == 1) {
				$_SESSION['side'] = 1;
				echo "正方";
			}
			else {
				$_SESSION['side'] = 2;
				echo "反方";
			}
		}
		else {
?>
	<a href="/HCI-forum/Controller/chooseSide.php?side=1&
	usr=<?php echo $_SESSION[usr];?>&post=<?php echo $postId;?>">正方</a>
	<a href="/HCI-forum/Controller/chooseSide.php?side=2&
	usr=<?php echo $_SESSION[usr];?>&post=<?php echo $postId;?>">反方</a>
<?php
	}
}
?>
			<div id="postTitle"><?php echo $post_title;?></div>
			<div id="msg">
			楼主 : 
			<h2><?php echo $post_user;?>:</h2>
			<p><?php echo $post_content;?></p>
			<p class="time">发表于:&nbsp;<?php echo $post_date;?></p>
			<a href="/HCI-forum/Controller/informPost.php?id=<?php echo $postId;?>">举报</a>
			<!--<input type="button" onclick="post_delete_judge(<?php echo $postId;?>)" value="删除" />-->
			</div>
<?php
	if($post_type == 2) {
		$debate_sql = "SELECT * FROM `debate` WHERE post_id='$postId' AND `content` <>''";
		$side1_sql = "SELECT * FROM `debate` WHERE side='1' AND `content` <>'' AND post_id='$postId'";
		$side2_sql = "SELECT * FROM `debate` WHERE side='2' AND `content` <>'' AND post_id='$postId'";
		$side1_num = mysql_num_rows(mysql_query($side1_sql));
		$side2_num = mysql_num_rows(mysql_query($side2_sql));
		$debate_query = mysql_query($debate_sql);
		$debateContent = array();
		$debateUser = array();
		$debateDate = array();
		$debateId = array();
		$debateSide = array();
		echo "side 1 :".$side1_num."<br>";
		echo "side 2 :".$side2_num."<br>";
		while($debate_rows = mysql_fetch_array($debate_query)) {
			array_push($debateContent, $debate_rows['content']);
			array_push($debateDate, $debate_rows['date']);
			array_push($debateId, $debate_rows['id']);
			array_push($debateSide, $debate_rows['side']);
			$debate_user = mysql_fetch_array(mysql_query("SELECT account FROM `user` WHERE id='$debate_rows[user_id]'"));
			array_push($debateUser, $debate_user[0]);
		}
		foreach ($debateUser as $key => $debateuser) {
			echo "作者 : ".$debateuser."<br>";
			echo "内容 : ".$debateContent[$key]."<br>";
			echo "辩论方 : ".$debateSide[$key]."<br>";
			echo "发表时间 : ".$debateDate[$key]."<br>";
		}
	}
	else {
		foreach ($commentUser as $key => $commentuser) {
			if($commentDeleted[$key]==0){
?>
			<div class="comment" id="<?php echo $key;?>">
				<h3><?php echo $commentuser;?>:</h3>
				<p><?php echo $commentContent[$key];?></p>
				<p class="time">发表于:&nbsp;<?php echo $commentDate[$key];?></p>
				<p>得分 : <?php echo $commentPoint[$key];?></p>
				<a href="/HCI-forum/Controller/informComment.php?id=<?php echo $commentId[$key];?>&post=<?php echo $postId;?>">举报</a>
				<input type="button" value="删除" onclick="comment_delete_judge(<?php echo $commentId[$key].",".$key;?>)"/>
			</div>
<?php
		}
		}
	}
?>