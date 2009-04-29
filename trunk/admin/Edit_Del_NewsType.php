<?php

/* TODO: Add code here */
require_once('../lib/global.php');
$conn=new DbHelper("pg_newsclass");
$id=$_GET['id'];
$type=$_GET['type'];
$name =mysql_escape_string(stripslashes( $_GET['name'] ));


if($_GET['type']==1)
{
	$conn->update($id,"name='$name'");
}
if($_GET['type']==2)
{
	if(($conn->delete($id))>0)
		echo "true";
	else
		echo "false";
}

if($_GET['type']==3)
{
	$conn->insert('name',"'$name'");
	
}
echo "OK!";
echo "<script type='text/javascript' src='../js/common.js'></script><script>GotoOtherPage('EditNewsType.php','游戏类型修改成功！')</script>";


?>