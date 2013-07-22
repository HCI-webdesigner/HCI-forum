window.onload = function(){

	checkLogin();//ajax check login info

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

function checkLogin(){
	var loginInfo;
	var infoBox = document.getElementById('info');
	loginInfo = XHR('/HCI-forum/Controller/checkLogin.php');
	loginInfo.onreadystatechange = function(){
		if(loginInfo.readyState == 4){
			if(loginInfo.responseText){
				var obj = eval("("+loginInfo.responseText+")");
				infoBox.innerHTML = 'Hello，'+obj.usr+'！<br/>';
				infoBox.innerHTML += '您的积分是:'+obj.score+'&nbsp;&nbsp;您的等级是:'+obj.level+'<br/>';
				infoBox.innerHTML += '您可以:&nbsp;&nbsp;<a href="/HCI-forum/View/sendView.html">发帖</a>';
				infoBox.innerHTML += '&nbsp;&nbsp;&nbsp;&nbsp;<a href="/HCI-forum/Controller/logout.php">注销</a>';
				if(obj.auth == '1'){
					infoBox.innerHTML += '&nbsp;&nbsp;&nbsp;&nbsp;<a href="/HCI-forum/Controller/adminCon.php">后台管理</a>';
				}
			}
			else{
				showForm();
			}
		}
	}
}

function showForm(){
	var info = document.getElementById('info');
	var form = document.createElement('form');
	var label1 = document.createElement('label');
	var label2 = document.createElement('label');
	var br = document.createElement("br");
	var usr = document.createElement('input');
	var pwd = document.createElement('input');
	var submit = document.createElement('input');
	var a = document.createElement('a');
	form.action = '/HCI-forum/Controller/login.php';
	form.name = 'login_form';
	form.method = 'post';
	label1.innerHTML = '名字：';
	label2.innerHTML = '密码：';
	usr.type = 'text';
	usr.name = 'usr';
	pwd.type = 'password';
	pwd.name = 'pwd';
	submit.type = 'submit';
	submit.id = 'submit-button';
	a.href = '/HCI-forum/View/registerView.html';
	a.innerHTML = '<div id="register-button">register</div>';
	form.appendChild(label1);
	form.appendChild(usr);
	form.appendChild(br);
	form.appendChild(label2);
	form.appendChild(pwd);
	form.appendChild(submit);
	form.appendChild(a);
	info.appendChild(form);
}