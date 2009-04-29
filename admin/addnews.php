<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>添加新闻</title>
</head>
<body>
<form name="form1" action="setaddnews.php" method="post">
<table>
<tr>
	<td style="width:100px;">新闻标题:</td>
	<td><input id="tb_title" name="title" type="text" style="width:50%;" />
	<span>新闻的标题，不能为空</span></td>
</tr>
<tr>
	<td>作者：</td>
	<td><input id="tb_author" type="text" name="author" style="width:50%;" />
	新闻的作者，不能为空</td>
</tr>
<tr>
	<td>新闻类别�?/td>
	<td>
	  <select id="se_clazz" name="clazz">
	  <option value="1" selected="selected">动漫</option>
	  <option value="2">网游</option>
	  <option value="3">其他</option>
	  </select>
	
	新闻的类别，从列表中选择一�?/td>
</tr>
<tr>
	<td>新闻内容</td>
	<td style="height:500px;">
	<?php
		include("../FCKeditor/fckeditor.php") ;
		$oFCKeditor = new FCKeditor('FCKeditor1') ;
		$oFCKeditor->BasePath = '../FCKeditor/';
		$oFCKeditor->Height="100%";
		$oFCKeditor->Width="600px";
		$oFCKeditor->SkinPath='../FCKeditor/editor/skins/office2003/';
		$oFCKeditor->Value = '';
		$oFCKeditor->Create() ;
    ?>
</td>
	<td></td>
</tr>
<tr>
	<td >新闻标签</td>
	<td ><input id="tb_tag" name="tag" type="text" style="width:50%;" />
	<span>新闻的标签，多个标签用空格隔开</span></td>
</tr>
<tr>
<td></td>
<td><input type="submit" onclick="OnNewsAddClick();" value="添加新闻" /></td>
</tr>
</table>

</form>
</body>
</html>