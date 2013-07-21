window.onload = function(){
	getInfo();
	checkForm();
};

function getInfo(){
	var info = XHR('/HCI-forum/Controller/checkLogin.php');
	var form = document.getElementById('commentForm');
	info.onreadystatechange = function(){
		if(info.readyState == 4){
			if(info.responseText){
				var obj = eval("("+info.responseText+")");
				var hiddenUsr = document.createElement("input");
				hiddenUsr.type = 'text';
				hiddenUsr.name = 'usrId';
				hiddenUsr.value = obj.usrId;
				hiddenUsr.style.display = "none";
				form.appendChild(hiddenUsr);
			}
			else{
				alert("您还没有登陆哦！！！");
				location='/HCI-forum/';
			}
		}
	}
	var str=window.location.href;
	var es=/postId=/; 
	es.exec(str); 
	var right=RegExp.rightContext; 
	var hiddenPostId = document.createElement("input");
	hiddenPostId.type = 'text';
	hiddenPostId.name = 'postId';
	hiddenPostId.value = right;
	hiddenPostId.style.display = "none";
	form.appendChild(hiddenPostId);
}

function XHR(urlStr){//XHR == XMLHttpRequest
	var request;
	if(window.XMLHttpRequest){
		request = new XMLHttpRequest();
	}
	else if(window.ActiveXObject){
		request = new ActiveXObject("Microsoft.XMLHTTP");
	}
	request.open('POST',urlStr,true);
	request.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	request.send(urlStr);
	return request;
}

function checkForm(){
	var submit = document.getElementById('submit-button');
	var form = document.getElementById('content-form');
	submit.onclick = function(){
		if(form.value == ""){
			alert("您还没有写评论哦～～");
			return false;
		}
	}
}