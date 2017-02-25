<?php
	require_once('../connect.php');
	$sql = "select * from article order by dateline desc";
	$query = mysql_query($sql);
	//$i = 0;
	if($query&&mysql_num_rows($query)){
		while($row = mysql_fetch_array($query)){
			// $arr[$i] = $row;
			// $i++;
			//不需要i 直接生成2维数组
			$data[] = $row;
			print_r($data);
		}	
	}else{
		$data = array();
	}
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文章管理页面</title>
</head>
<body>
	<h1>文章管理列表</h1>
	<form id="form1" method="post" action="article.add.handle.php">
	<table>
		<tr>
			<th>编号</th>
			<th>标题</th>
			<th>操作</th>
		<p>遍历方法</p>
		</tr>
		<?php
			if(!empty($data)){
				foreach ($data as $value) {
		?>
		<tr>
			<td><?php echo $value['id']?></td>
			<td><?php echo $value['title']?></td>
			<td>
				<a href="article.delete.handle.php?id= <?=$value['id']?>" >删除</a>
				<a href="article.update.php?id= <?php echo $value['id']?>" >修改</a>
			</td>
		</tr>
		<?php
				}
			}
		?>

		<p>老方法</p>
		<tr>
			<td><?php echo $data[1]['id']?></td>
			<td><?php echo $data[1]['title']?></td>
			<td>
				<a href="article.delete.handle.php?id= <?php echo $data[1]['id']?>" >删除</a>
				<a href="article.update.php?id= <?php echo $data[1]['id']?>" >修改</a>
			</td>
		</tr>
		
	</table>
		
	</form>
</body>
</html>