<?php
namespace app\admin\controller;

use app\BaseController;
use app\admin\model\ {
    Category1,
    Category2
};

class BlogCategory extends BaseController
{

    public function add1()
    {
        $category1 = input("post.category1");
        // $cateogry2 = input("post.category2");
        // $cateogry3 = input("post.category3");
        $data = [
            'category_name' => $category1
        ];
        Category1::create($data);
    }

    public function add2()
    {
        $category2 = input('post.category2');
        $category1_id = substr(strrev($category2), 0, 1);
        $category2_name = substr($category2, 0, strlen($category2) - 1);
        $data = [
            'category1_id' => $category1_id,
            'category2_name' => $category2_name
        ];
        Category2::create($data);
    }

    public function add3()
    {}
    
    public function update() {
        return view();
    }
    
    public function delete() {
        return view();
    }
}

