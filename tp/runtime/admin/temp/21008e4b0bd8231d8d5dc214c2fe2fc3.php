<?php /*a:2:{s:81:"D:\phpstudy_pro\WWW\blog.com\tp\./app/admin/view\admin\blog_category\add_top.html";i:1674104798;s:73:"D:\phpstudy_pro\WWW\blog.com\tp\./app/admin/view\admin\public\header.html";i:1666709422;}*/ ?>
<link rel="stylesheet" href="/static/layui/css/layui.css"/>
<script src="/static/layui/layui.js"></script>
<script src="/static/jquery-3.6.1.min.js"></script>
<form class="layui-form" name="form1" method="post" action="<?php echo url('BlogCategory/addTopDeal/'); ?>">
	<div class="layui-form-item">
		<label class="layui-form-label">增加顶级分类：</label>
		<div class="layui-input-block">
			<input type="text" class="layui-input" name="category_name"/>
		</div>
	</div>
	
	<div class="layui-form-item">
		<div class="layui-input-block">
			<button type="submit" class="layui-btn">提交</button>
		</div>
	</div>
</form>
