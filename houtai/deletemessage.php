<?php
require_once "../common/db.php";
  
   $sql="delete from message where id='$_GET[id]'";
   $result=mysql_query($sql);
    echo '<script language="javascript">window.location= "messageList.php";</script>';
?>
