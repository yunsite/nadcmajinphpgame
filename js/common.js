
function $(id)
{
  return document.getElementById(id);
}

function Trim(str)
{
  return str.replace(/(^\s*)|(\s*$)/g, "");
}

function CheckNull(id)
{
  if(Trim($(id).value)==null||Trim($(id).value)=="")
  {
    return false;
  }
  else 
  {
    return true;
  }
}

function CheckEquel(id1,id2)
{
  if(Trim($(id1).value)==Trim($(id2).value))
  {
    return true;
  }
  else
  {
    return false;
  }
}
function CheckEmail(id)
{
  var myreg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
  if(!myreg.test($(id).value))
  {
    return false;
  }
  else
  {
    return true;
  }

}
function Redirect(url)
{
	window.location.href=url;
}
function GotoOtherPage(url,str)
{
	var Info=document.createElement("div");
	var headDiv=document.createElement("div");
	var bodyDiv=document.createElement("div");
	var linkDiv=document.createElement("div");
	Info.style.position="absolute";
 	Info.style.border="1px solid #1f8add";
 	Info.style.width="216px";
 	Info.style.height="72px";
 	Info.style.left=(document.body.clientWidth-parseInt(Info.style.width))/2+document.body.scrollLeft;
 	Info.style.top=(document.body.clientHeight-parseInt(Info.style.height))/2+document.body.scrollTop;
 	headDiv.style.backgroundColor="#beefff";
 	headDiv.style.height="24px"; 
 	headDiv.style.fontSize="12px";
 	headDiv.style.color="#00a8ff"; 
 	headDiv.style.lineHeight="24px";
 	headDiv.innerHTML="nadc提示您：";
 	bodyDiv.style.textAlign="center"; 
 	bodyDiv.style.color="#FF0000";
 	bodyDiv.style.fontSize="14px"; 
 	bodyDiv.style.height="24px"; 
 	bodyDiv.style.lineHeight="24px";
 	bodyDiv.innerHTML=str;
 	linkDiv.style.textAlign="center";
 	linkDiv.style.fontSize="14px"; 
 	linkDiv.innerHTML="<a href='"+url+"'>如果页面没跳转请点击</a>";
 	Info.appendChild(headDiv);
 	Info.appendChild(bodyDiv);
 	Info.appendChild(linkDiv);
 	document.body.appendChild(Info);
 	setTimeout("window.location.href='"+url+"'",100);
}