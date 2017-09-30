<?php
namespace app\admin\controller;
use think\Controller;

class Expert extends Controller
{
    public function index(){
        $experts=model('Add')->getDataFrom('love_expert');
        return $this->fetch('',[
            'experts' => $experts,
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
			'info'=>input('post.info'),
			'status'=>input('post.status'),
		];
    	$experts=model('Add')->add($data,'love_expert');
    	$this->success('新增成功，正在跳转。。。','expert/index');
    }
}
