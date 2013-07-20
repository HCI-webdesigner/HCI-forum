
			<ul>
<?php
	foreach ($postUser as $key => $user) {
?>
				<li>
					<a href="/HCI-forum/Controller/onePost.php?postId=<?php echo $postId[$key];?>" class="list-a">
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
						default:
							break;
					}?>]
					</span>
					<span calss="author">&nbsp;<?php echo $user;?>:</span>
					<span class="title"><?php echo $postTitle[$key];?></span>
					<span class="time"><?php echo $postDate[$key];?></span>
					</div>
					</a>
				</li>
<?php
	}
?>
			</ul>