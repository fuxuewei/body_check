<?php
namespace app\admin\controller;
use think\Controller;

class Shopping extends Controller
{
    public function index(){
        $shoppings=model('Add')->getDataFrom('love_shopping');
        return $this->fetch('',[
            'shoppings' => $shoppings,
        ]);
    }
	public function add(){
		return $this->fetch();
		
	}
    public function save()
    {	
   		$data=[
			'slogan'=>input('post.slogan'),
			'package_name'=>input('post.package_name'),
			'content'=>input('post.content'),
			'info'=>input('post.info'),
			'image'=>input('post.img'),
			'status'=>input('post.status'),
		];
    	$shoppings=model('Add')->add($data,'love_shopping');
    	$this->success('新增成功，正在跳转。。。','shopping/index');
    }
}
