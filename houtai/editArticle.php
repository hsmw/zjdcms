<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>编辑文章</title>
<link href="style/style.css" rel="stylesheet" type="text/css" />
</head>
<?php
require_once "header.php";
  require_once "../common/db.php";
  $dates=date('Y-m-d H:i');
  $pic=upload();
  if(empty($_GET['id'])){
      $result=mysql_query("update article set title='$_POST[editArticle]',pic='$pic',content='$_POST[content]',date='$dates' where id='$_POST[id]'");
	  
   echo '<script language="javascript">window.location= "articleList.php";</script>';
  }else{
      $result=mysql_query("select * from article where id='$_GET[id]'");
   	$row=mysql_fetch_assoc($result);

?>

<body id="page">
<h2>【编辑文章】</h2><br>
<form id="editarticle" action="editArticle.php" method="post"  enctype="multipart/form-data">

  <label style="color:red;">文章ID: <?php echo $_GET['id']; ?></label>
  <input name="id" type="hidden" size="100" value="<?php echo $_GET['id']; ?>" />
  <br><br><br>
  标题：<input style='width:620pt' name="editArticle" type="text" size="100" value="<?php echo $row['title']; ?>" />
  <!--<br><br><br>
   <label style="">所属分类:</label>
  <select name="cate">
  <?php 
  	 foreach($row2 as $row3){
  ?>
  	<option value="<?php echo $row3['id']; ?>" <?php if($row3['id']==$row['cateid']) echo 'selected="selected"'; ?>><?php echo $row3['id']; ?></option>
   <?php 
  	}
  ?> 
  </select>
  -->
  <br><br><br>
    插图：
    <input type='file' name=pic />[插图不可为空！]
  <br><br><br>
    内容：
  <textarea name="content" id=" content "  cols=100 rows=25  style="overflow-y:auto;" ><?php echo $row['content']; ?></textarea>
<script type="text/javascript">  
   // UE.getEditor(' content ')
</script>  

  <br><br><br>
  <input name="Submit" type="submit" class="bt" value="编辑" />

</form>
</body>
<?php
  }
?>
