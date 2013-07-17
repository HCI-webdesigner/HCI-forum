<?php
	session_start();
	class AllPost {
		public $allPost = array();
		function __construct($areaId, $boardId) {
			include_once('/var/www/HCI-forum/Model/DataAccess.php');
			$conn = new DataAccess("localhost", "root", "zsl0917zsl", "hciForum");
			$postList='';
			if($boardId == 0) {
				$sql = "SELECT post.* FROM post,board WHERE
					post.board_id=board.id AND board.area_id='$areaId'";
				$query = mysql_query($sql);
				while($allPost=mysql_fetch_array($query)) {
					$temp_user = mysql_fetch_array(mysql_query("SELECT account from user WHERE id='$allPost[user_id]'"));
					$postList.=<<<EOT
				<li>
					<a href="
EOT;
					$postList.="/HCI-forum/View/postView.php?id=".$allPost[id];
					$postList.=<<<EOT
" class="list-a">
						<div class="post-link">
							<span class="title">
EOT;
					$postList.=$allPost['title'];
					$postList.=<<<EOT
</span>
							<span class="time">
EOT;
					$postList.=$allPost['post_date'];
					$postList.=<<<EOT
</span>
						</div>
					</a>
				</li>

EOT;
				}
			}
			else {
				$sql = "SELECT post.* FROM post WHERE post.board_id='$boardId'";
				$query = mysql_query($sql);
				while($post_row=mysql_fetch_array($query)) {
					$temp_user=mysql_fetch_array(mysql_query("SELECT account FROM `user` WHERE id='$post_row[user_id]'"));
					$postList.=<<<EOT
				<li>
					<a href="
EOT;
					$postList.="/HCI-forum/View/postView.php?id=".$post_row[id];
					$postList.=<<<EOT
" class="list-a">
						<div class="post-link">
							<span class="title">
EOT;
					$postList.=$post_row['title'];
					$postList.=<<<EOT
</span>
							<span class="time">
EOT;
					$postList.=$post_row['post_date'];
					$postList.=<<<EOT
</span>
						</div>
					</a>
				</li>

EOT;
					/*echo $post_row['type'];
					echo "<a href="."/HCI-forum/View/postView.php?id=$post_row[id]>".$post_row['title']."</a>";
					echo "author :".$temp_user[0]."--"."post date: ".$post_row['post_date']."<br>";*/
				}
			}
			echo $postList;
		}
	}
?>