window.onload=function(){
		var text=document.getElementById("content-form");
		var btn=document.getElementById("submit-button");
		btn.onclick=function(){
			var re=/妈的|你妈|fuck|操你/g;
			text.value.replace(re,"***"))
		}
	}