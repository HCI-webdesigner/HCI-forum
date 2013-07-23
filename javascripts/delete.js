function delete(id) {
	var deleteRequest;

	if(window.XMLHttpRequest) {
		deleteRequest = new XMLHttpRequest();
	}
	else if(window.ActiveXObject){
		deleteRequest = new ActiveXObject("Microsoft.XMLHTTP");
	}
	deleteRequest.open('get', "deleteArea.php?id="+id, true);
}