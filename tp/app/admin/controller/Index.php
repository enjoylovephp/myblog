<?php
namespace app\admin\controller;

use app\BaseController;
use think\facade\View;
use app\admin\model\Article;
use app\admin\model\ {
    Category1,
    Category2
};

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
        $category2 = Category2::order("sort")->select();
        View::assign("category2", $category2);
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
}
