window.onload = function(){

	changeContent();


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

function changeContent(){
	var i=0;
	var buttons = getELementByClass('nav','nav-btn');
	var iframe = document.getElementById('iframe');

	for(i=0;i<buttons.length;i++){
		changeById();
	}
	function changeById(){
		var j=i;
		var areaId = buttons[i].id;
		buttons[j].onclick = function(){
			iframe.src = 'http://localhost/HCI-forum/'+areaId;
		}
	}
}