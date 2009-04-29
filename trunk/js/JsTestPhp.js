function test_Click(id)
{
if(!CheckNull(id))
{
	alert("不能为空");
}
else
{
	InitAjax();
	var callBack=new CallBack(ShowHello);
	Ajax("http://202.114.20.55/namecheck.aspx","name="+$(id).value,callBack);
}
}
function ShowHello(res)
{
if(!res)
{
	alert("请求错误");
}
else
{
	alert(res);
}
}
function emailtest_Click(id)
{
if(!CheckEmail(id))
{
	alert("格式错误");
}
}
function equeltest_Click(id1,id2)
{
if(!CheckEquel(id1,id2))
{
	alert("不相等");
}
}