<?php
	session_start();
	
?>
<form action="" name="verify" method="post">
	<select name="verify_result">
		<option value="1">审核通过</option>
		<option value="0">驳回请求</option>
	</select>
</form>