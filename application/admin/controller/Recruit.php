<?php
namespace app\admin\controller;
use think\Controller;

class Recruit extends Controller
{
    public function index(){
        $recruits=model('Add')->getDataFrom('love_recruit');
        return $this->fetch('',[
            'recruits' => $recruits,
        ]);
    }
	public function add(){
		return $this->fetch();
		
	}
    public function save()
    {	
   		$data=[
			'post'=>input('post.post'),
			'num'=>input('post.num'),
			'pay'=>input('post.pay'),
			'weal'=>input('post.weal'),
			'description'=>input('post.description'),
			'start_time'=>input('post.start_time'),
			'end_time'=>input('post.end_time'),
			'status'=>input('post.status'),
		];
    	$recruits=model('Add')->add($data,'love_recruit');
    	$this->success('新增成功，正在跳转。。。','recruit/index');
    }
}
