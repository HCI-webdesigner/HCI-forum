<?php
	session_start();
	class topPost {
		public $topPost = array();
		public $topList;
		function __construct($areaId) {
			include_once('/var/www/HCI-forum/Model/DataAccess.php');
			$conn = new DataAccess("hciForum");
			$sql = "SELECT post.* FROM post,board WHERE
					post.board_id=board.id AND board.area_id='$areaId' order by id desc limit 0,5";
			$query = mysql_query($sql);
			while($topPost=mysql_fetch_array($query)) {
				$temp_user = mysql_fetch_array(mysql_query("SELECT account from user WHERE id='$topPost[user_id]'"));
				$this->topList.=<<<EOT
				<li>
					<a href="
EOT;
					$this->topList.="/HCI-forum/View/postView.php?id=".$topPost[id];
					$this->topList.=<<<EOT
">
						<div>
							<span class="title">
EOT;
					$this->topList.=$temp_user[0].":";
					$this->topList.=$topPost['title'];
					$this->topList.=<<<EOT
</span>
							<span class="time">
EOT;
					$this->topList.=$topPost['post_date'];
					$this->topList.=<<<EOT
</span>
						</div>
					</a>
				</li>

EOT;
			}
		}
	}
?>