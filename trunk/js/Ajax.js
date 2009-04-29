 var ajax=false;//ȫ�ֱ������ڴ洢XMLHttpRequest����
   /*
*@func:��ʼ��Ajax
*@return:flase����xmlhttprequestʧ��
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
*@func:Ajax����
*@param:url-�����ַ
*@param:queryStr-��������
*@param:callBack-�ص�����
*@return:flaseû�г�ʼ��Ajax
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
*@func:�ص���������
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