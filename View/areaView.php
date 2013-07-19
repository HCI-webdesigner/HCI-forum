<?php 
	foreach ($areaIconUrl as $key=>$v) {
?>
		<div class="board">

			<a href="/HCI-forum/Controller/boardController.php?area=<?php echo $areaId[$key]; ?>&board=0">
				<div class="board-logo">
					<img src="<?php echo $v; ?>">
					<h3><?php echo $areaName[$key]; ?></h3>
					<h5>帖子数:<?php echo $areaCount[$key]; ?></h5>
				</div>
			</a>
			<div class="top-posts">
				<ul>
					
				</ul>
			</div>
		</div>
<?	
	}
?>