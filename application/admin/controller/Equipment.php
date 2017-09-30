<?php
namespace app\admin\controller;
use think\Controller;

class Equipment extends Controller
{   
    public function index(){
        $equipments=model('Add')->getDataFrom('love_equipment');
        return $this->fetch('',[
            'equipments' => $equipments,
        ]);
    }
    public function add(){
        return $this->fetch();
        
    }
    public function save()
    {	
    	$data=[
			'name'=>input('post.name'),
			'image'=>input('post.img'),
			'content'=>input('post.content'),
			'status'=>input('post.status'),
		];
    	$equipments=model('Add')->add($data,'love_equipment');
    	$this->success('新增成功，正在跳转。。。','equipment/index');
    }
}
