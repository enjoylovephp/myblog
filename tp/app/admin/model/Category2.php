<?php
namespace app\admin\model;
use think\Model;
class Category2 extends Model
{
    public function getAll(){
        return $this->select();
    }
    
    public function deleteCategory($id){
        $this->where('category1_id',$id)->delete();
    }
}

