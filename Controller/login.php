<?php

	$usr = $_GET["usr"];
	$pwd = $_GET["pwd"];//待修改
	if($usr=="admin" && $pwd=="admin"){
		$sendBack = array('correct' => 'yes','usr'=>$usr );
	}
	else{
		$sendBack = array('correct' => 'no','usr'=>'' );
	}
	echo json_encode($sendBack);

?>