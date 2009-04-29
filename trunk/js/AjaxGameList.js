function GotoOtherClass()
{
	window.location.href="AjaxGameList.php?id="+$('gameClass').value;
}
function EditLink(i)
{
	window.location.href="EditLink.php?page=link&id="+i;
}
function DelLink(i)
{
    if(confirm("确认删除这个链接？"))
    {
        InitAjax();
	    var callBack=new CallBack(ShowDeleLink);
	    Ajax("../admin/DeleteLink.php","id="+i,callBack);
	    return true;
    }
    return false;
}
function ShowDeleLink(res)
{
    if("true"==res)
    {
        alert("删除成功！");
        window.location.href=window.location.href;
    }
    else
    {
        alert("删除失败请重试！");
    }
}
function CheckAll()
{
	var c= document.getElementsByName("checkbox");   
	for(i=0;i<c.length;i++)   
	{   
		c[i].checked=true;
	}
}
function ChangeCheck()
{
	var c= document.getElementsByName("checkbox");   
	for(i=0;i<c.length;i++)   
	{   
		if(c[i].checked)
			c[i].checked=false;
		else
			c[i].checked=true;		
	}
}
function DelChecked()
{
	var id="";
	var flag=true;
	var c= document.getElementsByName("checkbox");   
	for(i=0;i<c.length;i++)   
	{  
		if(c[i].checked){
		if(flag){
			id+=c[i].value;
			flag=false;
			}
		else
		    id+=";"+c[i].value;
		    }
	}
	DelLink(id);
}