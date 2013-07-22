window.onload = function(){
	scrollToFix();
	clickToShowFrame();
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
	var spanButtons = getELementByClass('body','showFrame');
	var frameDiv = document.getElementById('frameDiv');
	var iframe = document.getElementById('iframe');

	for(i=0;i<spanButtons.length;i++){
		changeById();
	}
	function changeById(){
		var j=i;
		var areaId = spanButtons[i].id;
		spanButtons[j].onclick = function(){
			document.body.style.overflow = "hidden";
			frameDiv.style.display = "block";
			iframe.src = 'http://localhost/HCI-forum/Controller/adminPostCon.php?area='+areaId+'?board=0';
		}
	}

	var closeButton = document.getElementById('close-button');
	closeButton.onclick = function(){
		frameDiv.style.display = "none";
		document.body.style.overflow = "auto";
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