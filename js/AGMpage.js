function GameCheck()
{
	if(CheckNull("gameName")&&CheckNull("gameRank")&&CheckNull("gameUrl")&&CheckNull("gameClass"))
	{
		return true;
	}
	else
	{
		alert("信息填写不完整！");
		return false;
	}
}
function ClassCheck()
{
	if(CheckNull("className")&&CheckNull("classRank"))
	{
		return true;
	}
	else
	{
		alert("信息填写不完整！");
		return false;
	}
}