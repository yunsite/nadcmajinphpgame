<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
require_once('../lib/global.php');
if($_GET['id'])
{
	$conn=new DbHelper('pg_news');
	$rs=$conn->get_a($_GET['id']);
	if(!$rs)
	{
		echo "查询失败！";
		exit;
	}
	
}


?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>编辑新闻</title>
</head>
<body>
<form name="form1" action="UpdateNews.php" method="post">
<input type="hidden" name="id" value="<?php echo $_GET['id']?>" />
<table>
<tr>
	<td style="width:100px;">新闻标题:</td>
	<td><input id="tb_title" name="title" type="text" style="width:50%;" value="<?php echo $rs->title; ?>" /></td>
</tr>
<tr>
	<td>作者：</td>
	<td><input id="tb_author" type="text" name="author" style="width:50%;" value="<?php echo $rs->author; ?>"/></td>
</tr>
<tr>
	<td>新闻类别</td>
	<td>
	  <select id="se_clazz" name="clazz">
	  <option value="1" selected="selected">�动漫</option>
	  <option value="2">网游</option>
	  <option value="3">其他</option>
	  </select>
	
	
	</td>
</tr>
<tr>
	<td>�新闻内容</td>
	
	<td style="height:500px;">
	<?php
		include("../FCKeditor/fckeditor.php") ;
		$oFCKeditor = new FCKeditor('FCKeditor1') ;
		$oFCKeditor->BasePath = '../FCKeditor/';
		$oFCKeditor->Height="100%";
		$oFCKeditor->Width="600px";
		$oFCKeditor->SkinPath='../FCKeditor/editor/skins/office2003/';
		$oFCKeditor->Value = $rs->content;
		$oFCKeditor->Create() ;
    ?>
	</td>
</tr>
<tr>
	<td><input id="edit_btn" name="edit_btn" type="submit" value="修改"  style="cursor:pointer;"/></td>
</tr>

