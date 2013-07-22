window.onload = function(){
	scrollToFix();
	clickToShowFrame();
	showStats();
}

function getELementByClass(outer,inner){
	var i=0;
	var result = [];
	var container;
	if(outer == 'body'){
		container = document.body;
	}
	else{
		container = document.getElementById(outer);
	}
	var all = container.getElementsByTagName('*');
	for(i=0;i<all.length;i++){
		if(all[i].className == inner){
			result.push(all[i]);
		}
	}
	return result;
}

function scrollToFix(){
	var nav = document.getElementById('nav-bar');
	window.onscroll = function(){
		if(document.body.scrollTop >= 140){
			nav.style.position = "fixed";
			nav.style.top = "19px";
		}
		else if(document.body.scrollTop <= 140){
			nav.style.position = "relative";
			nav.style.top = "";
		}
	}

}

function clickToShowFrame(){
	var i=0;
	var buttons = getELementByClass('body','buttons');
	var frameDiv = document.getElementById('frameDiv');
	var iframe = document.getElementById('iframe');

	for(i=0;i<buttons.length;i++){
		changeById();
	}
	function changeById(){
		var j=i;
		var areaId = buttons[i].id;
		buttons[j].onclick = function(){
			frameDiv.style.display = "block";
			iframe.src = 'http://localhost/HCI-forum/'+areaId+'?board=0';
			document.body.style.overflow = "hidden";
			scrollTo(0,0);
		}
	}

	var closeButton = document.getElementById('close-button');
	closeButton.onclick = function(){
		frameDiv.style.display = "none";
		document.body.style.overflow = "auto";
		window.location.reload();
	}

	var backButton = document.getElementById('back-button');
	backButton.onclick = function(){
		iframe.contentWindow.history.back();
	}

	var forwardButton = document.getElementById('forward-button');
	forwardButton.onclick = function(){
		iframe.contentWindow.history.forward();
	}
}

function showStats(){
	var request;
	if(window.XMLHttpRequest){
		request = new XMLHttpRequest();
	}
	else if(window.ActiveXObject){
		request = new ActiveXObject("Microsoft.XMLHTTP");
	}
	request.open('POST','/HCI-forum/Controller/stats.php',true);
	request.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	request.send('/HCI-forum/Controller/stats.php');
	request.onreadystatechange = function(){
		if(request.readyState == 4){
			var obj = eval("("+request.responseText+")");
			document.getElementById('areaNum').innerHTML = obj.area;
			document.getElementById('boardNum').innerHTML = obj.board;
			document.getElementById('postNum').innerHTML = obj.post;
			document.getElementById('usrNum').innerHTML = obj.usr;
		}
	}
}