<?php

/* TODO: Add code here */

require_once("../lib/global.php");
$conn_gamelink=new DbHelper("pg_gamelink");
$conn_gameclass=new DbHelper("pg_gameclass");
$rs_gamelink=$conn_gamelink->get_many(" id>0");
$rs_gameclass=$conn_gameclass->get_many("id>0");


?>
<HTML>
	<HEAD>
		<META NAME="GENERATOR" Content="Microsoft Visual Studio .NET 7.1">
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<TITLE>新游戏发布信息</TITLE>
		
	</HEAD>
	<BODY>
	<table border="1">
	<tr>
	<td>编号</td>
	<td>游戏类别</td>
	<td>游戏名称</td>
	<td>链接地址</td>
	<td>首字母</td>
	</tr>
	<?
		while($row=mysql_fetch_object($rs_gamelink)){
	?>
	
	<tr>
	<td><?echo $row->id?></td>
	<td>
	<? 
	$row2=mysql_fetch_object($rs_gameclass);
	if($row->rank==$row2->rank) 
		echo $row2->classname; 
	else
		echo "暂无分类";
	?>
	</td>
	<td><?echo $row->gamename?></td>
	<td><?echo $row->gameurl?></td>
	<td><?echo $row->firstword ?></td>
	
	
	</tr>
	<?
}
	?>
	
	</table>
	</BODY>
</HTML>