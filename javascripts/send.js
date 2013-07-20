window.onload = function(){
	linkedSelect();
	getInfo();
};

function linkedSelect(){
	var i=0;
	var list2 = [];//初始化第二个列表
	list2.push(['HTML/HTML5','1','1']);//格式：list2['名称','对应的板块的值','自己的value']
	list2.push(['CSS','1','2']);
	list2.push(['Javascript','1','3']);
	list2.push(['设计和美工','1','4']);
	list2.push(['Java','2','5']);
	list2.push(['PHP','2','6']);
	list2.push(['JSP','2','8']);
	list2.push(['Python','2','9']);
	list2.push(['框架','2','10']);
	list2.push(['Android','3','11']);
	list2.push(['IOS','3','12']);
	list2.push(['系统运维','4','13']);
	list2.push(['系统安全','4','14']);
	list2.push(['资料','5','15']);
	list2.push(['书籍','5','16']);
	list2.push(['软件','5','17']);
	list2.push(['其他','5','18']);
	list2.push(['实习资讯','6','19']);
	list2.push(['求职信息','6','20']);
	list2.push(['经验交流','6','21']);
	list2.push(['讲座活动','6','22']);
	list2.push(['其他','6','23']);
	list2.push(['情感','7','24']);
	list2.push(['娱乐','7','25']);
	list2.push(['其他','7','26']);
	var s1 = document.getElementById("select-list1");
	var s2 = document.getElementById("select-list2");
	s1.onchange = function(){
		s2.innerHTML='<option value="0">--请--选--择--</option>';
		for(i=0;i<list2.length;i++){
			if(list2[i][1] == s1.value){
				s2.options.add(new Option(list2[i][0],list2[i][2]));
			}
		}
	}
}

function getInfo(){
	var info = XHR('/HCI-forum/Controller/checkLogin.php');
	info.onreadystatechange = function(){
		if(info.readyState == 4){
			if(info.responseText){
				var obj = eval("("+info.responseText+")");
				var form = document.getElementById('sendForm');
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