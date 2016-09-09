<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>编辑分类</title>
<link href="style/style.css" rel="stylesheet" type="text/css" />
</head>
<?php
  require_once "../common/db.php";
  require_once "header.php";
  
  if(empty($_GET['id'])){
      $result=mysql_query("update cate set title='$_POST[editCate]' where id='$_POST[id]'");

   echo '<script language="javascript">window.location= "cateList.php";</script>';
  }else{
      $result=mysql_query("select * from cate where id='$_GET[id]'");
   	$row=mysql_fetch_assoc($result)
?>

<body id="page">
<h2>【编辑分类】</h2><br>
<form id="editcate" action="editCate.php" method="post">
	
  <label style="color:red;">分类ID: <?php echo $_GET['id']; ?></label>
  <input name="id" type="hidden" size="100" value="<?php echo $_GET['id']; ?>" />
  <br><br><br>
  分类标题：<input name="editCate" type="text" size="100" value="<?php echo $row[title]; ?>" />
  <br><br><br>
  
  <input name="Submit" type="submit" class="bt" value="编辑" />

</form>
</body>
<?php
  }
?>
