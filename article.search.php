<?php
	require_once 'connect.php';
	$key = $_GET['key'];
	$sql = "select * from article where title like '$key%'";
	$query = mysql_query($sql);

	if($query && !empty($query)){
		while ($row = mysql_fetch_assoc($query)) {
			$data[] = $row;
			//print_r($data);
		}	
	}else{
		$data = array();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文章列表</title>
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
	<h1>搜索文章结果</h1>
	<a href="article.list.php">返回</a>
	<?php
		if(!empty($data)){
			foreach ($data as $value) {
	?>
	<ul>
		<li>
			<h1 class="fl"><?php echo $value['title']?></h1>
			<p class="fl author">作者：<?php echo $value['author']?></p>
			<p class="description"><?php echo $value['description']?></p>
			<a class="more" href="article.show.php?id=<?php echo $value['id']?>">learn more</a>		
		</li>
	</ul>
	<?php
			}
		}
	?>

</body>
</html>