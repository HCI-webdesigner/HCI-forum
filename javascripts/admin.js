window.onload = function(){
	slideTab();
	getElementsByClass(containerName,targetName);
}

function slideTab(){
	var i=0;
	navButton = getElementsByClass("nav-bar","nav-button");
	innerContent = getElementsByClass("content","inner-content");
	innerContent[0].style.display = "block";
	for( i=0; i<navButton.length; i++){
		changeTab();
	}

	//这里好像是一个蛋疼的闭包。。。
	function changeTab(){
		var j=i;
		var k=0;
		navButton[j].onclick = function(){
			for( k=0; k<innerContent.length; k++){
				innerContent[k].style.display = "none";
			}
			innerContent[j].style.display = "block";
		}
	}
}

//jQuery $(".XXX")
function getElementsByClass(containerName,targetName){
	var i=0;
	var outer = document.getElementById(containerName);
	var all = outer.getElementsByTagName("*");
	var result =[];
	for( i=0; i<all.length; i++ ){
		if( all[i].className == targetName){
			result.push(all[i]);
		}
	}
	return result;
}