<?php
	
	session_start();
	if($_SESSION['state']){
		$arr = array ('usr'=>$_SESSION['usr'],'score'=>$_SESSION['score'],'level'=>$_SESSION['level'],'auth'=>$_SESSION['auth']);
		echo json_encode($arr);
	}
	
?>