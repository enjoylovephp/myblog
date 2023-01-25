<?php
namespace app\admin\controller;

use app\BaseController;
use app\admin\model\ {
    Category1,
    Category2
};
use think\Facade\View;
class BlogCategory extends BaseController
{
//     public $category2;
    
    public function initialize(){
//         $category2 = new Category2();
    }
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
    
    public function addTop(){
        $category2 = new Category2();
        $data = $category2->getAll();
        View::assign('data',$data);
        return view();
    }
    
    public function addSecond(){
        $category2 = new Category2();
        $data = $category2->getAll();
        View::assign('data',$data);
        return view();
    }
    
    public function update() {
        $category2 = new Category2();
        $data = $category2->getAll();
        View::assign('data',$data);
        return view();
    }
    
    public function delete() {
        $category2 = new Category2();
        $data = $category2->getAll();
        View::assign('data',$data);
        return view();
    }
    
    public function deleteCategory(){
        $category2 = new Category2();
        $id = input('id');
        $category2->deleteCategory($id);
    }
    
    public function addTopDeal(){
        $category_name = input('category_name');
        $data = [
            'category1_id'=>0,
            'category_name'=>$category_name
        ];
        $result = Category2::create($data);
        return $result;
    }
    
    public function addSecondDeal(){
        $category_name = input('category_name');
        $category2_id = input('category2_id');
        $data = [
            'category1_id'=>$category2_id,
            'category_name'=>$category_name,
        ];
        $result = Category2::create($data);
        return $result;
    }
}

