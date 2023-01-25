<?php /*a:2:{s:84:"D:\phpstudy_pro\WWW\blog.com\tp\./app/admin/view\admin\blog_category\add_second.html";i:1674106153;s:73:"D:\phpstudy_pro\WWW\blog.com\tp\./app/admin/view\admin\public\header.html";i:1666709422;}*/ ?>
<link rel="stylesheet" href="/static/layui/css/layui.css"/>
<script src="/static/layui/layui.js"></script>
<script src="/static/jquery-3.6.1.min.js"></script>
<form class="layui-form" name="form1" method="post" action="<?php echo url('BlogCategory/addSecondDeal/'); ?>">
	<div class="layui-form-item">
		<label class="layui-form-label">顶级分类：</label>
		<div class="layui-input-block">
			<select name="category2_id">
			<?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;if($d['category1_id'] == '0'): ?>
				<option value="<?php echo htmlentities($d['category2_id']); ?>"><?php echo htmlentities($d['category_name']); ?></option>
				<?php endif; ?>
			<?php endforeach; endif; else: echo "" ;endif; ?>
			</select>
		</div>
	</div>
	
	<div class="layui-form-item">
		<label class="layui-form-label">二级分类：</label>
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