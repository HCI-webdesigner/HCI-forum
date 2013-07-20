<?php 
	foreach ($pusr as $key => $u) {
?>

			<li>
				<a href="/HCI-forum/Controller/onePostCon.php?postId=<?php echo $pid[$key];?>" class="list-a">
				<div class="post-link">
				<span class="type">
				[<?php
				switch ($ptype[$key]) {
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
				}?>]</span>
				<span calss="author"><?php echo $u;?>:</span>
				<span class="title"><?php echo $ptitle[$key];?></span>
				<span class="time"><?php echo $pdate[$key];?></span>
				</div>
				</a>
			</li>
		
<?	
	}
?>