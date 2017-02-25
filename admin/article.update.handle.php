<?php
	require_once('../connect.php');
	//获取id值
	$id = $_POST['id'];
	$title = $_POST["title"];
	$author = $_POST['author'];
	$description = $_POST['description'];
	$content = $_POST['content'];
	//更新发布时间
	$dateline = date('y-m-d');
	//where id
	$updateSql = "update article set title = '$title', author = '$author', description = '$description', content = '$content', dateline = '$dateline' where id = '$id'";
	if(!isset($title)&&(!empty($title))){
		echo "<script>alert('info miss');window.location.href = 'article.update.php';</script>";
	}
	if(mysql_query($updateSql)){
		echo "<script> alert('update success');window.location.href='article.manage.php' </script>" ;
	}else{
		echo "<script> alert('update fail');" . mysql_error();
	}

