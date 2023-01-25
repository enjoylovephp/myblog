<?php /*a:2:{s:69:"D:\phpstudy_pro\WWW\blog.com\tp\./app/admin/view\admin\index\add.html";i:1674105344;s:73:"D:\phpstudy_pro\WWW\blog.com\tp\./app/admin/view\admin\public\header.html";i:1666709422;}*/ ?>
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
<form class="layui-form" name="form1">
    <div class="layui-form-item">

        <label class="layui-form-label">标题：</label>

        <div class="layui-input-block">
            <input class="layui-input" type="text" name="title"/>
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">分类：</label>
        <div class="layui-input-block">
            <select name="category2" lay-filter="category2">
                <?php if(is_array($category2) || $category2 instanceof \think\Collection || $category2 instanceof \think\Paginator): $i = 0; $__LIST__ = $category2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate2): $mod = ($i % 2 );++$i;?>
                <option value="<?php echo htmlentities($cate2['category1_id']); ?>"><?php echo htmlentities($cate2['top']); ?>——<?php echo htmlentities($cate2['second']); ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </div>
    </div>
    <div class="layui-form-item">
        <div class="layui-input-block">
           <label>热门：</label><input type="checkbox" name="hot"/> 
           <label>推荐：</label><input type="checkbox" name="recommend"/> 
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
            <button type="click" class="layui-btn" id="release">发布</button>
        </div>
    </div>
</form>
<script src="https://unpkg.com/@wangeditor/editor@latest/dist/index.js"></script>
<script>
    const {createEditor, createToolbar} = window.wangEditor

    const editorConfig = {
        placeholder: '',
        /*
         onChange(editor) {
         const html = editor.getHtml()
         console.log('editor content', html)
         
         }
         */
    }

    const editor = createEditor({
        selector: '#editor-container',
        html: '<p><br></p>',
        config: editorConfig,
        mode: 'default', // or 'simple'
    })
    const toolbarConfig = {}

    const toolbar = createToolbar({
        editor,
        selector: '#toolbar-container',
        config: toolbarConfig,
        mode: 'default', // or 'simple'
    })

    $('#release').click(function () {
        let html = editor.getHtml();
        let title = form1.title.value;
        let category2 = form1.category2.value;
        
        let hot = form1.hot.checked;
        let recommend = form1.recommend.checked;
        
        //console.log(hot);
        //console.log(great);
        $.post("<?php echo url('BlogArticle/add/'); ?>", {html: html, title: title, category2: category2,hot:hot,recommend:recommend}, function (result) {
            console.log(result);
        })
    })

</script>