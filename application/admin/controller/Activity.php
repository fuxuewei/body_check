<?php
namespace app\admin\controller;
use think\Controller;

class Activity extends Controller
{
	public function index(){
		$activities=model('Add')->getDataFrom('love_activity');
        return $this->fetch('',[
        	'activities' => $activities,
        ]);
	}
	public function add(){
		return $this->fetch();
		
	}
    public function save()
    {	
   		$data=[
			'title'=>input('post.title'),
			'image'=>input('post.img'),
			'description'=>input('post.description'),
			'start_time'=>input('post.start_time'),
			'end_time'=>input('post.end_time'),
			'status'=>input('post.status'),
		];
    	$activities=model('Add')->add($data,'love_activity');
    	$this->success('新增成功，正在跳转。。。','activitie/index');
    }
}
