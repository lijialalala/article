<?php
	require_once('../connect.php');
	header('content-type: text/html;charset=utf-8');
	print_r($_POST);
	$title = $_POST["title"];
	$author = $_POST['author'];
	$description = $_POST['description'];
	$content = $_POST['content'];
	$dateline = date('y-m-d');
	$insertSql = "insert into article(title, author, description, content, dateline) values('$title','$author','$description', '$content', '$dateline')";
	
	//check input 
	if( !isset($title) && (!empty($title)) ){
		echo "<script>alert('title cannot be null');window.location.href = 'article.add.php'</script>";
	}
	if(mysql_query($insertSql)){
		echo "<script>alert('success');window.location.href = 'article.add.php'</script>";
	}else{
		echo "<script>alert('fail');</script>" . mysql_error();
	}

