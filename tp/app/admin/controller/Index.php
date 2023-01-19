<?php
namespace app\admin\controller;

use app\BaseController;
use think\facade\View;
use app\admin\model\Article;
use app\admin\model\ {
    Category1,
    Category2
};
use think\facade\Db;

// use think\View;
class Index extends BaseController
{

    public function index()
    {
        return view();
    }

    public function hello($name = 'ThinkPHP6')
    {
        $article = new Article();
        dump($article);
        // return 'hello,' . $name;
    }

    public function add()
    {
        // $category1 = Category1::select();
        $category2 = Db::query("SELECT c2.category_name as top,c1.category_name as second,c1.category2_id as category2_id,c1.category1_id as category1_id FROM `blog_category2` c1,blog_category2 c2 where c1.category1_id = c2.category2_id");
        //$category2_top = Category2::where("category2_id", 0)->select();
        //View::assign("category2_top", $category2_top);
        View::assign("category2", $category2);
        //dump($category2);
        return view();
    }

    public function addCategory1()
    {
        return view();
    }

    public function addCategory2()
    {
        $category1 = Category1::select();
        View::assign('category1', $category1);
        return view();
    }

    public function addCategory3()
    {
        return view();
    }

    public function getCategory()
    {}

    public function list()
    {
        $article_list = Article::field('article_id,title')->select();
        //dump($article_list);
        return view('list',['article_list'=>$article_list]);
    }
}
