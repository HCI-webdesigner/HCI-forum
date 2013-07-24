function delBoard(id) {
	var delRequest;
	console.log(id);
	if(window.XMLHttpRequest) {
		delRequest = new XMLHttpRequest();
	}
	else if(window.ActiveXObject) {
		delRequest = new ActiveXObject("Microsoft.XMLHTTP");
	}

	delRequest.open('GET', "deleteBoard.php?id="+id, true);
	delRequest.onreadystatechange = function () {
		if(delRequest.readyState == 4 && delRequest.status == 200) {
			if(delRequest.responseText == '1') {
				alert("删除成功");
				window.location.reload();
			}
			else {
				alert('failed');
				window.location.reload();
			}
		}
	}
	delRequest.send();
}