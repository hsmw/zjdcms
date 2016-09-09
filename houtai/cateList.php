<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>分类列表</title>
<link href="style/style.css" rel="stylesheet" type="text/css" />
</head>
<body id="page">
<h2>【分类列表】</h2>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th>分类ID</th>
    <th>分类名称</th>
    <th>操作</th>
  </tr>
  <?php
  require_once "../common/db.php";
  require_once "header.php";
$result=mysql_query("SELECT id,title FROM cate");
  while($row=mysql_fetch_assoc($result)){
    ?>
  <tr>
    <td align="center"><? echo $row['id']; ?></td>
    <td align="center"><? echo $row['title'];?></td>
    <td align="center">&nbsp;&nbsp;&nbsp;<a href="deleteCate.php?id=<?php echo $row['id'];?>">删除</a>
    &nbsp;&nbsp;&nbsp;<a href="editCate.php?id=<?php echo $row['id'];?>">修改</a></td>
  </tr>
  <?php
  }
  ?>
</table>
<!--<div id="pageFlip">1 <a href="#">2</a> <a href="#">3</a></div>-->
</body>
</html>
