<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>文章列表</title>
<link href="style/style.css" rel="stylesheet" type="text/css" />
</head>
<body id="page">
<h2>【文章列表】</h2>
<!--<span><b>&nbsp;分类([名称]：ID)：</b></span>-->
<style>td{height:23px!important;font-size:11px;padding:0pt!important} a{font-size:10pt}</style>
<span style='font-size:15px;color:white'>分类：</span>
<?php
  require_once "../common/db.php";
  require_once "header.php";


$result=mysql_query("select * from cate");
   	while($row2=mysql_fetch_assoc($result)){
?>
<b><? echo "[".$row2[id].": ".$row2['title']."] "; }?>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th>文章ID</th>
    <th>文章名称</th>
    <th>文章插图</th>
	<th>文章分类ID</th>
	<th>发布时间</th>
    <th>操作</th>
  </tr>
  <?php
  require_once "../common/db.php";

  $result=mysql_query("select * from article");
   	while($row=mysql_fetch_assoc($result)){
      ?>
  <tr>
    <td align="center"><?php echo $row['id']; ?></td>
    <td align="center"><?php echo $row['title'];?></td>
    <td align="center"><img src=<?php echo "../upload/".$row['pic'];?> width=20 height=20 /></td>
	<td align="center"><?php echo $row['cateid'];?></td>
	<td align="center"><?php echo $row['date'];?></td>
    <td align="center"><a href="deleteArticle.php?id=<?php echo $row['id'];?>">删除</a>&nbsp;&nbsp;&nbsp;<a href="editArticle.php?id=<?php echo $row['id'];?>">修改</a></td>
  </tr>
  <?php



  
  }



  ?>
</table>
<!--<div id="pageFlip">1 <a href="#">2</a> <a href="#">3</a></div>-->
</body>
</html>

