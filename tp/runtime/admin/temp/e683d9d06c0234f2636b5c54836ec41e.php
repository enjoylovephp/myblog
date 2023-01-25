<?php /*a:1:{s:72:"D:\phpstudy_pro\WWW\blog.com\tp\./app/admin/view\admin\index\delete.html";i:1673271055;}*/ ?>
<style>
.delete-right{
	float:right;
}
</style>
<ul>
<?php if(is_array($article_list) || $article_list instanceof \think\Collection || $article_list instanceof \think\Paginator): $i = 0; $__LIST__ = $article_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?>
<li><?php echo htmlentities($data['title']); ?><a href="" class="delete-right">删除</a></li>
<?php endforeach; endif; else: echo "" ;endif; ?>
</ul>