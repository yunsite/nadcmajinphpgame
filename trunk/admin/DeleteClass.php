<?php
require_once '../lib/global.php';
$id=stripslashes( $_GET['id'] );
$classDbHelper=new DbHelper("pg_gameclass");
$idlist=split(';',$id);
$id='';
$classid='delete from pg_gamelink where ';
for($i=0;$i<count($idlist);$i++)
{
	if($i==0)
	{
		$id.=$idlist[$i];
		$classid.='classid='.$idlist[$i];
	}
	else
	{
	    $id.=" or id=".$idlist[$i];
	    $classid.=' or classid='.$idlist[$i];
	}
}
if($classDbHelper->querySql($classid)>0&&$classDbHelper->delete($id))
{
    echo "true";
}
else
{
   echo "false";
}
?>