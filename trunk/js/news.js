function editnews(i)
{
    window.location.href="editnews.php?id="+i;
}
function previewnews(i)
{
    window.location.href="getNewsByID.php?id="+i;
}
function delnews(i)
{
    if(confirm("确定删除此条新闻？"))
    {
        InitAjax();
	    var callBack=new CallBack(ShowDeleNews);
	    Ajax("../admin/deletenews.php","id="+i,callBack);
	    return true;
    }
    return false;
}
function ShowDeleNews(res)
{
    if("true"==res)
    {
        alert("新闻删除成功！");
        window.location.href=window.location.href;
    }
    else
    {
        alert("新闻删除失败！");
    }
}