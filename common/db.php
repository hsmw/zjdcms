<?php
$db_connect=mysql_connect('localhost','root','root') ;
 
 //选择一个需要操作的数据库
  mysql_select_db('shujuku',$db_connect);
 
 function upload(){
    //var_dump($_FILES);
    $thisfiles=$_FILES["pic"]["name"];
    $thisfiles=time().$thisfiles;
     move_uploaded_file($_FILES["pic"]["tmp_name"],"../upload/".$thisfiles);
    return $thisfiles;
}
?>