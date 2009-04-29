
<html>
<head>
<title>js测试页面</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="js/common.js"></script>
<script type="text/javascript" src="js/Ajax.js"></script>
<script type="text/javascript" src="js/JsTestPhp.js"></script>
</head>
<body>
<input type="text" id="name"/>
<input type="button" value="Ajax测试" id="test" onclick="test_Click('name')"/>
<br/>
<input type="text" id="email"/>
<input type="button" value="email测试" id="emailtest" onclick="emailtest_Click('email')"/>
<br/>
<input type="password" id="pw1" />
<input type="password" id="pw2" />
<input type="button" value="测试" id="equeltest" onclick="equeltest_Click('pw1','pw2')"/>
<input type="button" value="测试" id="equeltest" onclick="GotoOtherPage('http://<? ?>www.baidu.com','操作成功')"/>
<a href="ajax/testajax.php">haha</a>
</body>
</html>
<!-- test -->