/*
	var navRight = document.getElementById("navRight");
	for(var i=0;i<4;i++){
		
		navRight.children[i].onclick=function(){
			for(var i=0;i<4;i++){
				navRight.children[i].setAttribute("class","");
			}
			
			console.log(this.children[0].href == String(window.location));
			if(this.children[0].href == String(window.location)){
                this.setAttribute("class","active");
            }
			console.log(this.setAttribute("class","active"));
			// return false;
		}
	}
	console.log(String(window.location));
*/


var navRight = document.getElementById("navRight");
console.log(navRight.children.length);
for(var i=0;i<navRight.children.length;i++){
	navRight.children[i].setAttribute("class","");//移除所有的li的class名字
	var li_index = navRight.children[i];//获取当前li
	console.log(li_index);
	if(li_index.children[0].href == String(window.location)){
		li_index.setAttribute("class","active");
	}
}