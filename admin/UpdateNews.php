<?php

/* TODO: Add code here */
require_once '../lib/global.php';
$content =mysql_escape_string(stripslashes( $_POST['FCKeditor1'] ));
$title=mysql_escape_string(stripslashes($_POST['title']));
$author=mysql_escape_string(stripslashes($_POST['author']));
$clazz=mysql_escape_string(stripslashes($_POST['clazz']));
$tags=mysql_escape_string(stripslashes($_POST['tag']));
$clicktimes=mysql_escape_string(0);
$commentnum=mysql_escape_string(0);
$scores=mysql_escape_string(0);
$addtime=mysql_escape_string(date("Y-m-d H:i:s"));
$picurl=mysql_escape_string('testurl');

$id=mysql_escape_string(stripslashes( $_POST['id'] ));

$conn=new DbHelper('pg_news');

$conn->update($id,"title='$title',content='$content',classid='$clazz',date='$addtime',
				picurl='$picurl',tags='$tags',author='$author',clicktimes='$clicktimes',commentnum='$commentnum',scores='$scores'");
echo "OK!";
echo "<script type='text/javascript' src='../js/common.js'></script><script>GotoOtherPage('editnews.php?id=$id','新闻修改成功！')</script>";


?>