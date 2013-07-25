<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<?php
	define("DS",DIRECTORY_SEPARATOR);
	define("ROOT",dirname(dirname(__FILE__)));
	include_once(ROOT . DS . "Model" . DS. "DataAccess.php");
	$conn = new DataAccess("hciForum");
	$commentId = array();
	$userId = array();
	$i = 1;
	if($_POST['sub']) {
		$point = $_POST['point'];
		$postId = $_POST['postId'];

		$commentSql = "SELECT * FROM `comment` WHERE post_id='$postId' AND deleted='0'";
		
		$query = mysql_query($commentSql);
		$cNum = mysql_num_rows($query);
		while($commentRows = mysql_fetch_array($query)) {
			$userSQL = "SELECT * FROM `user` WHERE id='$commentRows[user_id]'";
			$cUser = mysql_fetch_array(mysql_query($userSQL));
			array_push($commentId, $commentRows['id']);
			array_push($userId, $cUser['id']);
		}

		for(;$i<=$cNum;$i++) {
			$pointI = $_POST["point".$i];
			$cId = $commentId[$i-1];
			$uId = $userId[$i-1];
			$upSql = "SELECT `score` FROM `user` WHERE id='$uId'";
			$pResult = mysql_fetch_array(mysql_query($upSql));
			$luScore = $pResult[0]/100;
			$cSql = "UPDATE `comment` SET cpoint=cpoint+$pointI WHERE id='$cId'";
			$uSql = "UPDATE `user` SET score=score+$pointI WHERE id='$uId'";
			$pSql = "UPDATE `post` SET `point`=`point`-$pointI WHERE id='$postId'";
			// echo $cSql;
			// echo $uSql;
			// echo $pSql;
			if(mysql_query($cSql) && mysql_query($uSql) && mysql_query($pSql)) {
				$lSql = "SELECT `score` FROM `user` WHERE id='$uId'";
				$uScore = mysql_fetch_array(mysql_query($lSql));
				if(floor($uScore[0]/100) > floor($luScore)) {
					$lSql = "UPDATE `user` SET level=level+1 WHERE id='$uId'";
					mysql_query($lSql);
				}
				continue;
			}
			else
				break;
		}
		if($i > $cNum) {
			echo "<script language=javascript>alert('操作成功');location='/HCI-forum/Controller/onePostCon.php?postId=$postId';</script>";
		}
	}
?>