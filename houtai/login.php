<?php
	@session_start();
	require_once "../common/db.php";

if(!empty($_POST['userName'])&&!empty($_POST['passWord'])){
	if(($_POST['userName']=='admin')&&($_POST['passWord']=='admin')){
	$_SESSION['authorized']="yes";
	$_SESSION['name']=$_POST['userName'];
	echo '<script language="javascript">alert("OK!");window.location= "index.php";</script>';
	
	}else{
	$_SESSION['authorized']="no";
	echo '<script language="javascript">window.location= "login.php";</script>';
	
	}
}else{
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="style/style.css" rel="stylesheet" type="text/css" />
</head>
<body id="login" bgcolor="orange" style="background:url(jbz.jpg) #ad3345 no-repeat">
<form action="login.php" id="loginForm" name="authorized" align="center" method="post" style="text-align:center;">

	<h2 style="color:#fff;background:orange;font-size:17px;">★后台管理系统登陆窗口★</h2><br><br><br>
	<label for="userName"><span style="background-color:white;color:gray;font-weight:bold;font-size:15px;"><b>管理员:</span><input id="userName" name="userName" type="text" /></label>
	<label for="passWord"><span style="color:gray;font-weight:bold;background-color:white;font-size:15px;"><b>密&nbsp;&nbsp;码:</span><input id="passWord" name="passWord" type="password" /></label>
	<br><br>
	<input style="background:darkcyan;color:white;border-radius:222;padding:3px 10pt" name="" type="submit" class="bt" value="登   陆" />
	

</form>
<p id="siteCopyRight" style="color:yellow;font-size:15px;">请正确输入密码和姓名！</p>
</body>
<?php
}
?>

