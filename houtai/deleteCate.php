<?php
require_once "../common/db.php";
  
   $sql="delete from cate where id='$_GET[id]'";
   $result=mysql_query($sql);
    echo '<script language="javascript">window.location= "cateList.php";</script>';
?>
