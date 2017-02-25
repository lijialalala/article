<?php
	//require_once('config.php');
	//连库
	mysql_connect('localhost', 'root', '') or die(mysql_error());
	mysql_select_db('comment') or die(mysql_error());
	mysql_query('set names utf8') or die(mysql_error());
	// if(!mysql_connect('localhost', 'root', '')){
	// 	echo mysql_error();
	// }
	//选库
	// if(!mysql_select_db('comment')){
	// 	echo mysql_error();
	// }
	// 字符集
	// if(!mysql_query('set names utf8')){
	// 	echo mysql_error();
	//}
