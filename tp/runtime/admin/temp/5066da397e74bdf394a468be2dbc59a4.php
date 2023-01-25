<?php /*a:1:{s:80:"D:\phpstudy_pro\WWW\blog.com\tp\./app/admin/view\admin\blog_category\delete.html";i:1674148249;}*/ ?>
<style>
.delete-right{
	float:right;
}
</style>
<ol>
<?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?>
<li>
<span><?php echo htmlentities($d['category_name']); ?></span>
<a href="<?php echo url('blogCategory/deleteCategory/',['id'=>$d['category2_id']]); ?>" class="delete-right">删除</a>
</li>
<?php endforeach; endif; else: echo "" ;endif; ?>
</ol>

