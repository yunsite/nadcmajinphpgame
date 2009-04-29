<?php
require_once '../lib/global.php';
$id=stripslashes( $_GET['id'] );
$newsDbHelper=new DbHelper("pg_news");
if(1==($newsDbHelper->delete($id)))
{
    echo "true";
}
else
{
   echo "false";
}
?>