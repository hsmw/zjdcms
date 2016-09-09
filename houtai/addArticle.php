<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加文章</title>
<link href="style/style.css" rel="stylesheet" type="text/css" />
</head>
<?php
  require_once "header.php";
  require_once "../common/db.php";
  $dates=date('Y-m-d H:i');
  $pic=upload();
  if(!empty($_POST['addArticle'])){
      $result=mysql_query("insert into article(title,cateid,pic,content,date) values('$_POST[addArticle]','$_POST[cate]','$pic','$_POST[content]','$dates')");
      
   echo '<script language="javascript">
    window.location= "articleList.php";
</script>';
  }else{

?>

<body id="page">  
<h2>【添加文章】</h2><br>
<form id="addarticle" action="addArticle.php" method="post" enctype="multipart/form-data">
  标题：<input style='width:610pt'  name="addArticle" type="text" size="100" />
  <br><br><br>
  <label style="color:red;">注： 文章ID将自动生成</label>
  <br><br><br>
  <label style="">所属分类:</label>
  <select name="cate">
  <?php 
  //global $row2;
  $result=mysql_query("SELECT id,title FROM cate");
  while($row=mysql_fetch_assoc($result)){
  ?>
  	<option value="<?php echo $row['id']; ?>"><?php echo $row['title']; ?></option>
   <?php 
  	}
  ?> 
  </select>
  
  <br><br><br>
    插图：
    <input type='file' name=pic />
  <br><br><br>
    内容：
  <textarea cols=101 rows=25  style="overflow-y:auto;" name="content" id=" content "></textarea>
<script type="text/javascript">  
    //UE.getEditor(' content ')
</script>  
<br><br><br>
  <input name="Submit" type="submit" class="bt" value="添加" />
  
</form>
</body>
<?php
  }
?>

