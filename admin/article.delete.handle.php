<?php
	require_once('../connect.php');
	$id = $_GET['id'];
	$deleteSql = "delete from article where id = $id";
	if (mysql_query($deleteSql)) {
		echo "<script> alert('delete success'); window.location.href ='article.manage.php' </script>" ;
	}else{
		echo "delete fail " .mysql_error();
	}
?>