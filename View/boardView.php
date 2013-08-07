			
		<div id="nav">
		<ul>
			<a href="/HCI-forum/Controller/boardController.php?area=<?php echo $area;?>&board=0"><li>全部</li></a>
<?php
	foreach ($boardName as $key=>$boardname) {
?>
			<a href="/HCI-forum/Controller/boardController.php?area=<?php echo $area;?>&board=<?php echo $boardId[$key];?>"><li><?php echo $boardname; ?></li></a>
<?php	
	}
?>
		</ul>
		</div>