<?php
require_once '../lib/global.php';
$id=stripslashes( $_GET['id'] );
$newsDbHelper=new DbHelper("pg_gamelink");
$idlist=split(';',$id);
$id='';
for($i=0;$i<count($idlist);$i++)
{
	if($i==0)
		$id.=$idlist[$i];
	else
	    $id.=" or id=".$idlist[$i];
}
if(($newsDbHelper->delete($id))>0)
{
    echo "true";
}
else
{
   echo "false";
}
?>