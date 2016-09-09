<?php
require_once "../common/db.php";

 $sql="delete from article where id='$_GET[id]'";
   $result=mysql_query($sql);
    echo '<script language="javascript">window.location= "articleList.php";</script>';
?>

