function comment_delete_judge(id,commentid)
{
var r=confirm("确定删除该评论？");
commentnode=commentid;
if (r==true)
  {
  doStart2(id);

  }
  else{

  }
}

var xmlHttp2;
function createXHR2(){
  	if(window.ActiveXObject){
  		xmlHttp2=new ActiveXObject("Microsoft.xmlHttp");
  	}
  	else if (window.XMLHttpRequest) {
  		xmlHttp2=new XMLHttpRequest();
  	}
}
function doStart2(id){
	createXHR2();
	var url="/HCI-forum/commentDelete.php?id=";
	xmlHttp2.open("GET",url+id,true);
	xmlHttp2.onreadystatechange=change2;
	xmlHttp2.send(null);
}
function change2(){
	console.log(xmlHttp2.responseText);
	if (xmlHttp2.readyState==4 && xmlHttp2.status==200) {
			if(xmlHttp2.responseText == '1') {
				alert('删除成功!');
				var node=document.getElementById(commentnode);
				var parent=node.parentNode;
				parent.removeChild(node);
			}
			else {
				alert('failed');
				window.location.reload();
			}
	}
}