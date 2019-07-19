var speeds=80;
var tutaofahuo=document.getElementById('tutaofahuo');
var tutaofahuo1=document.getElementById('tutaofahuo1');
var tutaofahuo2=document.getElementById('tutaofahuo2');
tutaofahuo2.innerHTML=tutaofahuo1.innerHTML
function Marquee1(){
	if(tutaofahuo2.offsetHeight-tutaofahuo.scrollTop<=0)
	tutaofahuo.scrollTop-=tutaofahuo1.offsetHeight
	else{
		tutaofahuo.scrollTop++
	}
}
var MyMar1=setInterval(Marquee1,speeds)
tutaofahuo.onmouseover=function(){
	clearInterval(MyMar1)
}
tutaofahuo.onmouseout=function(){
	MyMar1=setInterval(Marquee1,speeds)
}
