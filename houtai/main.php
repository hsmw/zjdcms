<?php
	@session_start();
?>
<center>
<div style="border:1px solid #ccc;margin-top:70px;height:611px;border-radius:3px;"><p><br><?php echo "\n"; ?>
<span style="color:#111;font-weight:bold;font-size:29px;"><?php echo "【欢迎您使用网站后台管理系统】"; ?></span><br><br>

<style>p{color:white}</style>
<div style="border-radius:9px;width:670px;margin:0 auto;border:1px solid lightgray;text-align: left;">
	<p style="font-size:23px;font-weight:bold;background-color:gray;color:white!important;text-align: center;border-bottom:1px dashed lightgray;color:green;">本管理系统后台使用PHP+MYSQL+APACHE实现，可用于WINDOWS\LINUX\MACS\UNIX等各种网络服务器平台<br>
<p><? echo '服务器文档根目录： '.getenv('DOCUMENT_ROOT'); ?>
<p><? echo '服务器端口： '.getenv('SERVER_PORT'); ?>
<p><? echo '当前执行文件： '.getenv('SCRIPT_NAME'); ?>
<p><? echo '用户UA： '.getenv('HTTP_USER_AGENT'); ?>
<p><? echo '请求方法： '.getenv('REQUEST_METHOD'); ?>
<p><? echo '服务器端协议： '.getenv('SERVER_PROTOCOL'); ?>
<p><? echo '浏览器语言： '.$_SERVER['HTTP_ACCEPT_LANGUAGE']; ?>
<p><? echo 'CGI规范的版本： '.$_SERVER['GATEWAY_INTERFACE']; ?>
<p style='color:orange'><? echo "服务器版本和虚拟主机名： ".$_SERVER['SERVER_SIGNATURE']; ?>
<br>
</div><br>
</div>
</center>

<?
/*$heap = new SplMaxHeap();
//插入到堆

$heap->insert('使用！！！');
$heap->insert('欢迎');
//从堆中提取数据
echo $heap->extract();
echo $heap->extract();


*/
?>

















