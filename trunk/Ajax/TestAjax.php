<?php
header('Content-Type:text/html;charset=GB2312');
$name=$_GET['name'];
$name=urldecode($name);
$name =iconv("UTF-8","GB2312",$name); 
echo("$name,���ã��������Է�������Ajax�ʺ�");
?>