window.onload = function(){
	scrollToFix();
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