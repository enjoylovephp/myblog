<?php
namespace app\admin\controller;

use app\BaseController;
use app\admin\model\Article;
use think\facade\Db;
class BlogArticle extends BaseController
{

    public function add()
    {
        $title = input('post.title');
        $html = input('post.html');
        $category2 = input('post.category2');
        
        $hot = input('post.hot');
        $recommend = input('post.recommend');
        $data - [
            'title' => $title,
            'content' => $html,
            'publish_date' => date('Y-m-d H:i:s'),
            'publish_time' => time(),
            'user_id' => 0,
            'description' => mb_substr($html, 0, 140),
            'keyword' => mb_substr($title, 0, 60),
            'category2_id' => $category2,
            
            'hot'=>$hot,
            'recommend'=>$recommend
        ];
        $article = Article::create($data);
        return $article->id;
    }

    public function read()
    {
        $data = Article::select();
        return $data;
    }
    
    public function update() {
        return view();
    }
    
    public function delete(){
        return view();
    }
    
    public function deleteArticle(){
        $id = input('id');
        //dump($id);
        $result = Article::where('article_id',$id)->delete();
        if(isset($result) && !empty($result)){
            return "删除完成";
        }
    }
    public function updateArticle(){
        $id = input('id');
        //dump($id);
        $article_data = Article::where('article_id',$id)->find();
//         if(isset($result) && !empty($result)){
        $article2_id = $article_data['category2_id'];
        $category2 = Db::query("SELECT c2.category_name as top,c1.category_name as second,c1.category2_id as category2_id,c1.category1_id as category1_id FROM `blog_category2` c1,blog_category2 c2 where c1.category1_id = c2.category2_id");
//         dump($article_data);
        return view('update',['article_data'=>$article_data,'category2'=>$category2]);
//         }
    }
    
    public function articleUpdateDeal(){
        $id = input('post.id');
        
        
        $article = Article::where('article_id',$id)->find();
        
        $title = input('post.title');    
        $category2_id = input('post.category2');
        $hot = input('post.hot');
        $recommend = input('post.recommend');
        $html = input('post.html');
        
        $article->title = $title;
        $article->category2_id = $category2_id;
        $article->hot = $hot;
        $article->recommend = $recommend;
        $article->content = $html;
        
        $result = $article->save();
        echo $result;
    }
}
