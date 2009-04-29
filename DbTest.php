<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GB2312">
<title>数据库连接测试</title>

</head>
    <body>
    <?php
		require_once("lib\DbCon.php");
		$query = 'SELECT * FROM pg_userbase';
		$result = mysql_query($query) or die('Query failed: ' . mysql_error());
		echo "<table>\n";
		while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		    echo "\t<tr>\n";
		    foreach ($line as $col_value) {
		        echo "\t\t<td>$col_value</td>\n";
		    }
		    echo "\t</tr>\n";
		}
		echo "</table>\n";
		mysql_free_result($result);
		mysql_close($con);
		?>
    </body>
</html>