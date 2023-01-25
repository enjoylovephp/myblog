<?php /*a:1:{s:70:"D:\phpstudy_pro\WWW\blog.com\tp\./app/admin/view\admin\index\list.html";i:1674148335;}*/ ?>
<style>
.delete-right{
	float:right;
}
ul{
	list-style:none;
}
</style>
<ol>
<?php if(is_array($article_list) || $article_list instanceof \think\Collection || $article_list instanceof \think\Paginator): $i = 0; $__LIST__ = $article_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?>
<li>
<span><?php echo htmlentities($data['title']); ?></span>
<div class="delete-right">
<a href="<?php echo url('BlogArticle/updateArticle/',['id'=>$data['article_id']]); ?>">修改</a>
<a href="<?php echo url('BlogArticle/deleteArticle/',['id'=>$data['article_id']]); ?>">删除</a>
</div>
</li>
<?php endforeach; endif; else: echo "" ;endif; ?>
</ol>