//导航样式

//实时时间
var showTime=document.getElementById('showTime');
showTimes(showTime);
function showTimes(obj){
		var week  = ['天','一','二','三','四','五','六'];
		var arr   = ['00','01','02','03','04','05','06','07','08','09'];
		var today = new Date(),
		y		  = today.getFullYear(),	//年
		m		  = today.getMonth()+1,		//月
		d	      = today.getDate(),		//日
		h		  = today.getHours(),		//时
		min		  = today.getMinutes(),		//分
		sec		  = today.getSeconds(),		//秒
		weeks     = today.getDay();		    //星期
		
		//给小于10数值处理下
		if(m<10){m=arr[m];}
		if(d<10){d=arr[d];}
		if(h<10){ h=arr[h];}
		if(min<10){min=arr[min];}
		if(sec<10){ sec=arr[sec];}
		
		var str   = y+'-'+m+'-'+d+' '+h+':'+min+':'+sec+' 星期'+week[weeks];
		obj.innerHTML=str;
		//把自己的函数名记录起来,下方就可以调用自身的函数
		
		setTimeout(function(){showTimes(obj);},1000);
}

