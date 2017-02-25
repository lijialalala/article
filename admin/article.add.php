<?php
	header('content-type: text/html;charset=utf-8');
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<title>文章发表页面</title>
</head>
<body>
	<h1>发布文章</h1>
	<form id="form1" method="post" action="article.add.handle.php">
		<ul>
			<li>标题</li>
			<li><input type="text" name="title" /></li>
			<li>作者</li>
			<li><input type="text" name="author"></li>
			<li>简介</li>
			<textarea name="description" id="" cols="50" rows="5"></textarea>
			<li>内容</li>
			<li><textarea name="content" id="" cols="50" rows="5"></textarea></li>
			<input type="submit" name="button" id="button" />
		</ul>
	</form>
</body>
</html>