<?php /*a:2:{s:79:"D:\phpstudy_pro\WWW\blog.com\tp\./app/admin/view\admin\blog_article\update.html";i:1674110118;s:73:"D:\phpstudy_pro\WWW\blog.com\tp\./app/admin/view\admin\public\header.html";i:1666709422;}*/ ?>
<link rel="stylesheet" href="/static/layui/css/layui.css"/>
<script src="/static/layui/layui.js"></script>
<script src="/static/jquery-3.6.1.min.js"></script>
<link href="https://unpkg.com/@wangeditor/editor@latest/dist/css/style.css" rel="stylesheet">
<style>
    #editor��wrapper {
        border: 1px solid #ccc;
        z-index: 100;
    }
    #toolbar-container {
        border-bottom: 1px solid #ccc;
    }
    #editor-container {
        height: 500px;
    }
    .key{

    }
</style>
<form class="layui-form">
	<div class="layui-form-item">
		<label class="layui-form-label">标题：</label>
		<div class="layui-input-block">
			<input type="text" class="layui-input" value="<?php echo htmlentities($article_data['title']); ?>" name="title"/>
		</div>
	</div>
	<div class="layui-form-item">
		<label class="layui-form-label">分类：</label>
		<div class="layui-input-block">
			<select name="category2" lay-filter="category2">
                <?php if(is_array($category2) || $category2 instanceof \think\Collection || $category2 instanceof \think\Paginator): $i = 0; $__LIST__ = $category2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate2): $mod = ($i % 2 );++$i;if($cate2['category1_id'] == $article_data['category1_id']): ?>
                		<option value="<?php echo htmlentities($cate2['category2_id']); ?>" selected><?php echo htmlentities($cate2['top']); ?>——<?php echo htmlentities($cate2['second']); ?></option>
                		<?php else: ?>
                		<option value="<?php echo htmlentities($cate2['category2_id']); ?>"><?php echo htmlentities($cate2['top']); ?>——<?php echo htmlentities($cate2['second']); ?></option>
                	<?php endif; ?>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
		</div>
	</div>
	<div class="layui-form-item">
		<div class="layui-input-block">
           <label>热门：</label>
           <?php if($article_data['hot'] == '1'): ?>
           		<input type="checkbox" name="hot" checked/>
           		<?php else: ?>
           		<input type="checkbox" name="hot"/>
           <?php endif; ?>
		</div>
	</div>
	
	<div class="layui-form-item">
		<div class="layui-input-block">
           <label>推荐：</label>
           <?php if($article_data['recommend'] == '1'): ?>
           		<input type="checkbox" name="recommend" checked/>
           		<?php else: ?>
           		<input type="checkbox" name="recommend"/>
           <?php endif; ?>
		</div>
	</div>
	
	<div class="layui-form-item">
		<div class="layui-input-block">
			<div id="editor��wrapper">
                <div id="toolbar-container"></div>
                <div id="editor-container"></div>
            </div>
		</div>
	</div>
	<div class="layui-form-item">
		<div class="layui-input-block">
			<button class="layui-btn" lay-submit lay-filter="*">更新</button>
		</div>
	</div>
</form>
<script src="https://unpkg.com/@wangeditor/editor@latest/dist/index.js"></script>
<script>

	const {createEditor, createToolbar} = window.wangEditor

   const editorConfig = {
      	placeholder: '',
        onChange(editor) {
        	const html = editor.getHtml()
        	//console.log('editor content', html)
        }
   }

   const editor = createEditor({
       selector: '#editor-container',
       html: '<?php echo htmlentities($article_data['content']); ?>',
       config: editorConfig,
       mode: 'simple', // or 'simple'
   })
   const toolbarConfig = {}

   const toolbar = createToolbar({
       editor,
       selector: '#toolbar-container',
       config: toolbarConfig,
       mode: 'default', // or 'simple'
   })
 
function html2Escape(sHtml) {
  var temp = document.createElement("div");
  (temp.textContent != null) ? (temp.textContent = sHtml) : (temp.innerText = sHtml);
  var output = temp.innerHTML;
  temp = null;
  return output;
}
function escape2Html(str) {
  var temp = document.createElement("div");
  temp.innerHTML = str;
  var output = temp.innerText || temp.textContent;
  temp = null;
  return output;
}
   var html = editor.getHtml();
   var text = escape2Html(html);
   //console.log(text);
   editor.setHtml(text);
   layui.use('form', function(){
  		var form = layui.form;
 		var category2;
 		
   form.on('submit(*)',function(data){
   		//console.log(data.field)
 		var title = data.field.title;
 		var category2 = data.field.category2;
 		var hot = (data.field.hot=='on')?1:0;
 		var recommend = (data.field.recommend=="on")?1:0;
   		var html = editor.getHtml();
   		//console.log(html);
      $.post("<?php echo url('BlogArticle/articleUpdateDeal/'); ?>",{id:<?php echo htmlentities($article_data['article_id']); ?>,title:title,category2:category2,hot:hot,recommend:recommend,html:html},function(data){
 		   //console.log(data);
 		   if(data){
 		   	alert('更新成功')
 		   }else{
 		   	alert('更新失败')
 		   }
      })
      return false;
  })
})
</script>