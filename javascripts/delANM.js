function delANM(id) {
	var delANMRequest;
	if(window.XMLHttpRequest) {
		delANMRequest = new XMLHttpRequest();
	}
	else if(window.ActiveXObject) {
		delANMRequest = new ActiveXObject("Microsoft.XMLHTTP");
	}
	delANMRequest.open('GET' , "/HCI-forum/Controller/delANM.php?id="+id, true);
	delANMRequest.onreadystatechange = function() {
		if(delANMRequest.readyState == 4 && delANMRequest.status == 200) {
			if(delANMRequest.responseText == '1') {
				alert('删除成功');
				window.location.reload();
			}
			else {
				alert('failed');
				window.location.reload();
			}
		}
	}

	delANMRequest.send();
}