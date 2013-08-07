window.onload = function {
	getInfo();
}

function getInfo() {
	var request;
	var info = document.getElementById('setting');
	if(window.XMLHttpRequest) {
		request = new XMLHttpRequest();
	}
	else if(window.ActiveXObject) {
		request = new ActiveXObject("Microsoft.XHTHTTP");
	}
	request.open('POST', "HCI-form/Controller/checkLogin.php", true);
	request.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	request.send("HCI-form/Controller/checkLogin.php");
	request.onreadystatechange() {
		if(request.readyState == 4) {
			if(request.responseText) {
				var obj = eval("("+request.responseText+")");
				info.innerHTML = "Hello, "+ obj.user + "<br>";
				info.innerHTML = '您可以:&nbsp;&nbsp;<a href="/HCI-forum/View/sendView.html">发帖</a>';
				info.innerHTML += '&nbsp;&nbsp;&nbsp;&nbsp;<a href="/HCI-forum/Controller/logout.php">注销</a>';
			}
			else {
				
			}
		}
	}
}