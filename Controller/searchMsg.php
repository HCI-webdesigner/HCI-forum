<?php
	define("DS", DIRECTORY_SEPARATOR);
	define("ROOT", dirname(dirname(__FILE__)));
	include_once(ROOT . DS . "Model" . DS . "DataAccess.php");
	$conn = new DataAccess("hciForum");

	if($_GET['key']) {
		$searchP = "SELECT * FROM `post` WHERE content LIKE '%$_GET[key]%' OR title LIKE '%$_GET[key]%'";
		$searchPQ = mysql_query($searchP);
		$titleA = array();
		$contentA = array();
		$postId = array();
		$row_nums = mysql_num_rows($searchPQ);
		if($row_nums != 0) {
			$message = "messages are as follow";
			while($post_rows = mysql_fetch_array($searchPQ)) {
				$post_rows['title'] = preg_replace("/($_GET[key])/i", "<font color=red><b>\\1</b>
					</font>", $post_rows['title']);	
				$post_rows['content'] = preg_replace("/($_GET[key])/i", "<font color=red><b>\\1</b>
					</font>", $post_rows['content']);
				array_push($titleA, $post_rows['title']);
				array_push($contentA, $post_rows['content']);
				array_push($postId, $post_rows['id']);
			}		
		}
		else {
			$message = "no message";
		}
	}
	include_once(ROOT . DS . "View" . DS . "searchView.php");
?>