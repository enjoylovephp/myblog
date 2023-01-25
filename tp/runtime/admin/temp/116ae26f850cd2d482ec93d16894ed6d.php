<?php /*a:3:{s:71:"D:\phpstudy_pro\WWW\blog.com\tp\./app/admin/view\admin\index\index.html";i:1674148145;s:73:"D:\phpstudy_pro\WWW\blog.com\tp\./app/admin/view\admin\public\header.html";i:1666709422;s:71:"D:\phpstudy_pro\WWW\blog.com\tp\./app/admin/view\admin\public\head.html";i:1665169365;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>

</head>
<link rel="stylesheet" href="/static/layui/css/layui.css"/>
<script src="/static/layui/layui.js"></script>
<script src="/static/jquery-3.6.1.min.js"></script>
<body>
<div class="layui-container">
<div class="layui-row">
	<div class="layui-col-md12">
		<ul class="layui-nav">
			<li class="layui-nav-item"><a href="">logo</a></li>
			<li class="layui-nav-item"><a href="">精华</a></li>
			<li class="layui-nav-item"><a href="">热门</a></li>
			<li class="layui-nav-item"><a href="">点击量</a></li>
			<li class="layui-nav-item">
				<a href="">用户</a>
				<dl class="layui-nav-child">
					<dd><a href="">登录</a></dd>
					<dd><a href="">注册</a></dd>
				</dl>
			</li>
		</ul>
	</div>
</div>
	<div class="layui-row">
		<div class="layui-col-md2">
			<ul class="layui-nav layui-nav-tree" lay-filter="test">
				<li class="layui-nav-item layui-nav-itemed manager">
					<a href="javascript:;">管理文章</a>
					<dl class="layui-nav-child manager">
						<dd><a href="<?php echo url('index/add/'); ?>" target="iframe-content">添加文章</a></dd>
						<!--  <dd><a href="<?php echo url('index/update/'); ?>" data-url="update" target="iframe-content">修改文章</a></dd>-->
						<dd><a href="<?php echo url('index/list/'); ?>" data-url="delete" target="iframe-content">文章列表</a></dd>
					</dl>
				</li>
				<li class="layui-nav-item layui-nav-itemed">
					<a href="javascript:;">管理分类</a>
					<dl class="layui-nav-child">
                                            
						<dd><a href="<?php echo url('BlogCategory/addTop/'); ?>" target="iframe-content">添加顶级分类</a></dd>
                        <dd><a href="<?php echo url('BlogCategory/addSecond/'); ?>" target="iframe-content">添加二级分类</a></dd>               
						<!--  <dd><a href="<?php echo url('BlogCategory/update/'); ?>" target="iframe-content">修改分类</a></dd>-->
						<dd><a href="<?php echo url('BlogCategory/delete/'); ?>" target="iframe-content">删除分类</a></dd>
					</dl>
				</li>
			</ul>
		</div>		
		<div class="layui-col-md9">
			<iframe src="<?php echo url('index/add/'); ?>" height="1000" width="950" frameborder="0" name="iframe-content"></iframe>
		</div>	
	</div>
</div>
<script>
layui.use('element', function(){
  var element = layui.element;
});
var ifrm = document.getElementById('ifrm');
/*
$(".manager a").click(function(){
	var url = $(this).data("url");
//	alert("hello");
	ifrm.src="<?php echo url('index/"+url+"/'); ?>";
})
*/
</script>
<script>

</script>
</body>
</html>