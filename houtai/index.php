
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="style/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="style/js.js"></script>
<base target="frameBord" />
</head>
<?php 
require_once "header.php";
?>
<body id="index">
<h1></h1>
<script>
    var yansepanzi=["red","yellow","black","yellowgreen","green","#fff","lightgray"];
    function client(){
        var laoman=Math.round(Math.random()*10);
        document.getElementById("meme").style.color=yansepanzi[laoman] //+'<br>'+document.getElementById("x").innerText;
        document.getElementById("meme").style.fontWeight=laoman%2==1?"bold":"bold"
    }

    setInterval("client()",2000)
</script>
<div id="userInfo" style="color:blue;right: 1px;background: blue;width:94%;"><strong style='color:black'>技术支持</strong>
    <span style="color:yellow;font-weight:bolder" id="meme">QQ : 2936844782</span>
<img style="float:left;margin-left:93px;margin-top:0pt;z-index:10000000" src="ind_75(3).jpg" height=40  />
</div>
<ul id="globalNav" style="margin-right: 30px;background: orange">
	<li><a href="login.php" target="_top">EXIT系统</a></li>
	

	<li id="messagelist"><a href="messageList.php" target="frameBord">留言列表</a></li>
	
	<li id="articlelist"><a href="articleList.php" target="frameBord">文章列表</a></li>
	<li><a href="addArticle.php" target="frameBord">添加文章</a></li>
	<li id="catelist"><a href="cateList.php" target="frameBord">分类列表</a></li>
	<li ><a href="addCate.php" target="frameBord">添加分类</a></li>
	<li class="select"><a href="main.php" target="frameBord">系统信息</a></li>
</ul>
<iframe id="frameBord" name="frameBord" frameborder="0" width="100%" height="100%" src="main.php"></iframe>
</body>

