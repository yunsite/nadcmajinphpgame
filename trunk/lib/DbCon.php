<?php
$con = mysql_connect('202.114.20.55:3306', 'root', 'supernadc')
    or die('Could not connect: ' . mysql_error());
mysql_select_db('phpgame') or die('Could not select database');
mysql_query('set names \'utf8\'');
?>