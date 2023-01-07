<?php
namespace app\admin\controller;

use app\BaseController;
use app\admin\model\Article;

class BlogArticle extends BaseController
{

    public function add()
    {
        $title = input('post.title');
        $html = input('post.html');
        $category2 = input('post.category2');
        $data - [
            'title' => $title,
            'content' => $html,
            'publish_date' => date('Y-m-d H:i:s'),
            'publish_time' => time(),
            'user_id' => 0,
            'description' => mb_substr($html, 0, 140),
            'keyword' => mb_substr($title, 0, 60),
            'category2_id' => $category2
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
}
