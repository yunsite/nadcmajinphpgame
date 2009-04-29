<body>
<?php
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

$newsDbHelper=new DbHelper("pg_news");

$newsDbHelper->insert('title,content,classid,date,picurl,tags,author,clicktimes,commentnum,scores',
                     "'$title','$content','$clazz','$addtime','$picurl','$tags','$author','$clicktimes','$commentnum','$scores'");

echo "<script type='text/javascript' src='../js/common.js'></script><script>GotoOtherPage('addnews.php','添加新闻成功！')</script>";
/*echo "<script>alert('新闻内容是:$sValue')</script>";
echo "<script>alert('新闻标题是:$title')</script>";*/
?>
</body>