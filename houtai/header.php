<script type="text/javascript" src="../js/jquery.js"></script> 
<script type="text/javascript" src="ueditor/ueditor.config.js"></script>   
<script type="text/javascript" src="ueditor/ueditor.all.js"></script> 

<?php
@session_start();
if($_SESSION['authorized']!='yes'){
	echo '<script language="javascript">alert("hello！");window.location= "login.php";</script>';
	exit();
}
?>
