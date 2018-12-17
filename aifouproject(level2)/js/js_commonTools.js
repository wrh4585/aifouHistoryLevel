//获取节点
function $(str){//#box .cls  p
	if(str.charAt(0)=="#"){
		return document.getElementById(str.substring(1));
	}else if(str.charAt(0)=="."){
		return document.getElementsByClassName(str.substring(1));
	}else{
		return document.getElementsByTagName(str);
	}
}	
//获取css属性（外部或外联样式）
//参数 ： domObj  样式属性名
//返回值： 样式属性值
function  getStyle(domObj,attr){
	if(domObj.currentStyle){
		return domObj.currentStyle[attr];
	}else{
		return window.getComputedStyle(domObj,false)[attr];
	}
}

//产生随机的十六进制颜色
//#20cd4f
function getColor(){
	var str="#";
	for(var i=0;i<6;i++){
		str+=(parseInt(Math.random()*16)).toString(16);
	}
	return str;
}
