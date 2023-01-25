<?php /*a:3:{s:71:"D:\phpstudy_pro\WWW\blog.com\tp\./app/index/view\index\index\index.html";i:1674409475;s:73:"D:\phpstudy_pro\WWW\blog.com\tp\./app/index/view\index\public\header.html";i:1672932573;s:71:"D:\phpstudy_pro\WWW\blog.com\tp\./app/index/view\index\public\head.html";i:1672933083;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<style>
ul.index-content li{margin-bottom:20px;}

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
					<span class="layui-breadcrumb" lay-separator="|">
						<?php if(is_array($category2_data) || $category2_data instanceof \think\Collection || $category2_data instanceof \think\Paginator): $i = 0; $__LIST__ = $category2_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?>
							<a href="javascript:;" class="data-change" data-category="<?php echo htmlentities($data['category2_id']); ?>"><?php echo htmlentities($data['category_name']); ?></a>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</span>
				</div>
				<div class="layui-card-body">
					
					<ul class="index-content">
						<?php if(is_array($article_data) || $article_data instanceof \think\Collection || $article_data instanceof \think\Paginator): $i = 0; $__LIST__ = $article_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?>
							<li><a href="<?php echo url('index/read',['id'=>$data['article_id']]); ?>"><h2><?php echo htmlentities($data['title']); ?></h2></a></li>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
			</div>
			
		</div>
		<div class="layui-col-md3">
			<div class="layui-card">
				<div class="layui-card-header">
					<h2>热门文章</h2>
				</div>
				<div class="layui-card-body">
					<ul class="index-content">
						<li><a href=""><h3>标题1</h3></a></li>
						<li><a href=""><h3>标题1</h3></a></li>
						<li><a href=""><h3>标题1</h3></a></li>
						<li><a href=""><h3>标题1</h3></a></li>
						<li><a href=""><h3>标题1</h3></a></li>
						<li><a href=""><h3>标题1</h3></a></li>
					</ul>
				</div>
			</div>
			
			<div class="layui-card">
				<div class="layui-card-header">
					<h2>精华文章</h2>
				</div>
				<div class="layui-card-body">
					<ul class="index-content">
						<li><a href=""><h3>标题1</h3></a></li>
						<li><a href=""><h3>标题1</h3></a></li>
						<li><a href=""><h3>标题1</h3></a></li>
						<li><a href=""><h3>标题1</h3></a></li>
						<li><a href=""><h3>标题1</h3></a></li>
						<li><a href=""><h3>标题1</h3></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
$('.data-change').each(function(i,elm){
	//console.log(data)
	$(elm).click(function(d){
		//console.log(d)
		console.log($(this).data('category'));
	})
	
})
</script>
</body>
</html>