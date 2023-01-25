<?php /*a:3:{s:70:"D:\phpstudy_pro\WWW\blog.com\tp\./app/index/view\index\index\read.html";i:1673074921;s:73:"D:\phpstudy_pro\WWW\blog.com\tp\./app/index/view\index\public\header.html";i:1672932573;s:71:"D:\phpstudy_pro\WWW\blog.com\tp\./app/index/view\index\public\head.html";i:1672933083;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<style>
ul.index-content li {
	margin-bottom: 20px;
}
</style>

</head>
<link rel="stylesheet" href="/static/layui/css/layui.css"/>
<script src="/static/layui/layui.js"></script>
<script src="/static/jquery-3.6.1.min.js"></script>
<body>
	<div class="layui-container">
		<div class="layui-row">
	<div class="layui-col-md12">
		<ul class="layui-nav">
			<li class="layui-nav-item"><a href="/">Blog</a></li>
			<li class="layui-nav-item"><a href="">1</a></li>
			<li class="layui-nav-item"><a href="">2</a></li>
			<li class="layui-nav-item"><a href="">3</a></li>
			<li class="layui-nav-item">
				<a href="">user</a>
				<dl class="layui-nav-child">
					<dd><a href="">login</a></dd>
					<dd><a href="">register</a></dd>
				</dl>
			</li>
		</ul>
	</div>
</div>
		<div class="layui-row">
			<div class="layui-col-md9">
				<div class="layui-card">
					<div class="layui-card-header">
						<h1><?php echo htmlentities($data['title']); ?></h1>
					</div>
					<div class="layui-card-body" id="content"></div>
				</div>

			</div>
			<div class="layui-col-md3"></div>
		</div>
	</div>
	<script>
	document.getElementById('');
var HtmlUtil = {
      /*1.用正则表达式实现html转码*/
      htmlEncodeByRegExp:function (str){  
           var s = "";
           if(str.length == 0) return "";
           s = str.replace(/&/g,"&amp;");
           s = s.replace(/</g,"&lt;");
           s = s.replace(/>/g,"&gt;");
           s = s.replace(/ /g,"&nbsp;");
          s = s.replace(/\'/g,"&#39;");
          s = s.replace(/\"/g,"&quot;");
          return s;  
    },
    /*2.用正则表达式实现html解码*/
    htmlDecodeByRegExp:function (str){  
          var s = "";
          if(str.length == 0) return "";
          s = str.replace(/&amp;/g,"&");
          s = s.replace(/&lt;/g,"<");
          s = s.replace(/&gt;/g,">");
          s = s.replace(/&nbsp;/g," ");
          s = s.replace(/&#39;/g,"\'");
          s = s.replace(/&quot;/g,"\"");
          return s;  
    }
 };
let content = "<?php echo htmlentities($data['content']); ?>";
let html = HtmlUtil.htmlDecodeByRegExp(content);
$('#content').html(html)

</script>
</body>
</html>