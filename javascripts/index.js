window.onload = function(){
	ajaxLogin();
}

function ajaxLogin(){
	var button = document.getElementById("submit-button");
	button.onclick = startLogin;//待修改
}

function startLogin(){
	var usr = window.document.login_form.usr.value;
	var pwd = window.document.login_form.pwd.value;
	var url = "/HCI-forum/Controller/login.php?usr="+usr+"&pwd="+pwd;
	postRequest(url);
}

function postRequest(urlStr){
	var xmlHttp;
	if(window.XMLHttpRequest){
		xmlHttp = new XMLHttpRequest();
	}
	else if(window.ActiveXObject){
		xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlHttp.open('POST',urlStr,true);
	xmlHttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	xmlHttp.onreadystatechange = function(){
		if(xmlHttp.readyState == 4){
			updatePage(xmlHttp.responseText);
		}
	}
	xmlHttp.send(urlStr);
}

function updatePage(str){
	var obj = eval ("(" + str + ")");
	var login_box = document.getElementById("login");
	if(obj.correct == "yes"){
		login_box.innerHTML = "Hello," + obj.usr;
	}
	else{
		alert("登录失败");
	}
}