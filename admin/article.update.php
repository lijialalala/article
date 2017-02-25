<?php
	require_once '../connect.php';
	header('content:text/html; charset = utf-8');
	if(!mysql_select_db('comment')){
		echo '<script>alert("select fail")</script>';
	}
	$id = $_GET['id'];
	$qu = mysql_query("select * from article where id = $id");
	$data = mysql_fetch_assoc($qu);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文章修改页面</title>
</head>
<body>
	<h1>修改文章</h1>
	<form id="form1" method="post" action="article.update.handle.php">
		<ul>
			<!--记得要传递id值 才知道是哪篇文章-->
			<input type="hidden" name="id" value="<?php echo $data['id']?>">
			<li>标题</li>
			<li><input type="text" name="title" value="<?php echo $data['title'];?>" /></li>
			<li>作者</li>
			<li><input type="text" name="author" value="<?php echo $data['author'];?>" /></li>
			<li>简介</li>
			<textarea name="description" id="" cols="50" rows="5"><?php echo $data["description"];?></textarea>
			<li>内容</li>
			<li><textarea name="content" id="" cols="50" rows="5"><?php echo $data["content"];?></textarea></li>
			<input type="submit" id="button" />
		</ul>
	</form>
</body>
</html>