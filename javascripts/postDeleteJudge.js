var xmlHttp1;

function post_delete_judge(id,divId)
{
var r=confirm("确定删除该贴？");
postdiv=divId;
if (r==true)
  {
  doStart1(id);

  }
  else{

  }
}


function createXHR1(){
  	if(window.ActiveXObject){
  		xmlHttp1=new ActiveXObject("Microsoft.xmlHttp");
  	}
  	else if (window.XMLHttpRequest) {
  		xmlHttp1=new XMLHttpRequest();
  	}
}
function doStart1(id){
	createXHR1();
	var url="/HCI-forum/postDelete.php?id=";
	xmlHttp1.open("GET",url+id,true);
	xmlHttp1.onreadystatechange=change1;
	xmlHttp1.send(null);
}
function change1(){
	console.log(xmlHttp1.responseText);
	if (xmlHttp1.readyState==4 && xmlHttp1.status==200) {
			if(xmlHttp1.responseText == '1') {
				alert('删除成功!');
				var node = document.getElementById(postdiv);
	            var parent = node.parentNode;
	            parent.removeChild(node);
			}
			else {
				alert('failed');
				window.location.reload();
			}
	}
}