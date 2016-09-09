<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加分类</title>
<link href="style/style.css" rel="stylesheet" type="text/css" />
</head>
<?php
  require_once "../common/db.php";
  require_once "header.php";
  
  if(!empty($_POST['addCate'])){

      $result=mysql_query("insert into cate(title) values('$_POST[addCate]')");
	  
      echo '<script language="javascript">
    window.location= "cateList.php";
</script>';
  }else{
?>

<body id="page">
<h2>【添加分类】</h2><br>
<form id="addcate" action="addCate.php" method="post">
  分类标题：<input name="addCate" type="text" size="100" />
  <br><br><br>
  <label style="color:red;">注： 分类ID将会自动生成</label><br><br><br>
  <input name="Submit" type="submit" class="bt" value="添加" />

</form>
</body>
<?php
  }
?>

