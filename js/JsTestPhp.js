function test_Click(id)
{
if(!CheckNull(id))
{
	alert("����Ϊ��");
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
	alert("�������");
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
	alert("��ʽ����");
}
}
function equeltest_Click(id1,id2)
{
if(!CheckEquel(id1,id2))
{
	alert("�����");
}
}