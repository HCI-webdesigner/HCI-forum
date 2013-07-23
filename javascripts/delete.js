function del(id) {
	var deleteRequest;
	console.log(id);

	if(window.XMLHttpRequest) {
		deleteRequest = new XMLHttpRequest();
	}
	else if(window.ActiveXObject){
		deleteRequest = new ActiveXObject("Microsoft.XMLHTTP");
	}
	deleteRequest.open('GET', "deleteArea.php?id="+id, true);
//	deleteRequest.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	deleteRequest.onreadystatechange = function () {
		if(deleteRequest.readyState == 4 && deleteRequest.status == 200) {
			if(deleteRequest.responseText == '1') {
				alert('删除成功');
				window.location.reload();
			}
			else {
				alert('failed');
				window.location.reload();
			}
		}
	}
	deleteRequest.send();
}