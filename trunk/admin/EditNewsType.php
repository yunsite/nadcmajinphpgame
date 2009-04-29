<?php
require_once("../lib/global.php");
$newDbHelper=new DbHelper("pg_newsclass");
$newsTypeInfos=$newDbHelper->get_many(" id>0");
?>
<HTML>
	<HEAD>
		<META NAME="GENERATOR" Content="Microsoft Visual Studio .NET 7.1">
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<TITLE>编辑新闻类别</TITLE>
		<script language="javascript" type="text/javascript">
		function Edit(i)
		{
		  window.location.href="Edit_Del_NewsType.php?id="+i+"&type=1&name="+document.getElementById("name_"+i).value;
		}
		
		function Del(i)
		{
			window.location.href="Edit_Del_NewsType.php?id="+i+"&type=2";
		}
		
		function Add(i)
		{
			window.location.href="Edit_Del_NewsType.php?id="+i+"&type=3&name="+document.getElementById("newtype").value;
		}
		</script>
	</HEAD>
	<BODY>
	<table border="1">
	<?
while($row=mysql_fetch_object($newsTypeInfos)){
	?>
	<tr>
	<td><?echo $row->id?></td>
	<td><input id="<?echo "name_".$row->id?>" type="text" value="<?echo $row->name?>"/></td>
	<td><input type="button" onclick="Edit(<?echo $row->id?>)" value="修改" /></td>
	<td><input type="button" value="删除" onclick="Del(<?echo $row->id?>)" /></td>
	</tr>
	<?
}
	?>
	<td>添加新的游戏类型</td>
	<td><input type="text" id="newtype"/></td>
	<td colspan ="2"><input type="button" value="添加" onclick="Add(<?echo $row->id?>)"/></td>
	</table>
	</BODY>
</HTML>