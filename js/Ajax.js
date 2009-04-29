 var ajax=false;//全局变量用于存储XMLHttpRequest对象
   /*
*@func:初始化Ajax
*@return:flase创建xmlhttprequest失败
*/
 function InitAjax()
 {
  if(window.XMLHttpRequest)
  {
    ajax=new XMLHttpRequest();
  }
  else if(window.ActiveXObject)
  {
    try
    {
      ajax=new ActiveXObject("Msxml2.XMLHTTP");
    }
    catch(e)
    {
      ajax=new ActiveXObject("Microsoft.XMLHTTP")
    }
  }
  if(!ajax)
  {
    return false;
  }
 }
  /*
*@func:Ajax请求
*@param:url-请求地址
*@param:queryStr-请求内容
*@param:callBack-回调函数
*@return:flase没有初始化Ajax
*/
function Ajax(url,queryStr,callBack)
{
  if(!ajax)
  {
    return false;
  }
  else
  {
    ajax.open("get",geturl=encodeURI(encodeURI(url+"?"+queryStr)),true);
    ajax.onreadystatechange=callBack.OnReadystateChange;
    ajax.send(null);
  }
}
  /*
*@func:回调函数对象
*/
function CallBack(callBack)
{  
  CallBack.prototype.OnReadystateChange=function()
  {
    if(ajax.readyState==4)
    {
      if(ajax.status==200)
      {
        callBack(ajax.responseText);
      }
      else
      {
        callBack(false);
      }
    }
  }
}