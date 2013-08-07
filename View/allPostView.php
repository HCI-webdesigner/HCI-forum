			<ul>
<?php
	foreach ($postUser as $key => $user) {
		if($postDeleted[$key]==0){
?>
				<li id="<?php echo $key;?>">
					<a href="/HCI-forum/Controller/onePostCon.php?postId=<?php echo $postId[$key];?>" class="list-a" >
					<div class="post-link">
					<span class="type">
					[<?php
					switch ($postType[$key]) {
						case '0':
							echo "普通帖";
							break;
						case '1':
							echo "问答帖";
							break;
						case '2':
							echo "辩论帖";
							break;
						case '3':
							echo "精华帖";
							break;
						case '4':
							echo "普通帖";
							break;
						default:
							break;
					}?>]
					</span>
					<span calss="author">&nbsp;<?php echo $user;?>:</span>
					<span class="title"><?php echo $postTitle[$key];?></span>
					<span class="time"><?php echo $postDate[$key];?></span>
					</div>
					</a>
					<p align="right"><input type="button" onclick="post_delete_judge(<?php echo $postId[$key].",".$key;?>)" value="删除" />&nbsp;</p>
				</li>
<?php
        }
	}
?>
			</ul> 