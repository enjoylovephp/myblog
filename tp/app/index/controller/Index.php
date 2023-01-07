<?php
namespace app\index\controller;

use app\BaseController;
use think\facade\View;
// use think\View;
use app\index\model\Article;
class Index extends BaseController
{
    public function index()
    {
        $article_data= Article::limit(100)->select();
        View::assign('article_data',$article_data);
        return view();
    }

    public function hello($name = 'ThinkPHP6')
    {
        return 'hello,' . $name;
    }
    
    public function read() {
        $id = input('id');
        
        $article_data = Article::where('article_id',$id)->find();
        View::assign('data',$article_data);
        return view();
//        dump($article_data);
    }
}
