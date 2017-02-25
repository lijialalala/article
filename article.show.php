<?php
	require_once('connect.php');
	//去除非数字字符
	//$id = $_POST['id'];
	$id = intval($_GET['id']);
	$sql = "select * from article where id = $id";
	$query = mysql_query($sql);
	if($query && mysql_num_rows($query)){
		$row = mysql_fetch_assoc($query);
	}else{
		echo "这篇文章不存在";
		exit;
	}
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文章详情页</title>
	<style type="text/css">
	*{
		margin: 0;
		padding: 0;
	}
	ul li{
		list-style: none;
		padding: 20px;
	}
	.fl{
		float: left;
	}
	.author{
		line-height: 50px;
	}
	.description{
		margin-top: 50px;
	}
	</style>
</head>
<body>
	<h1>文章内容</h1>                 
	<h1 class=""><?php echo $row['title']?></h1>
	<p class="fl author">作者：<?php echo $row['author']?></p>
	<p class="fl description"><?php echo $row['description']?></p>
</body>
</html>