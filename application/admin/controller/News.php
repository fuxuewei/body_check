<?php
namespace app\admin\controller;
use think\Controller;

class News extends Controller
{
    public function index(){
        $news=model('Add')->getDataFrom('love_news');
        return $this->fetch('',[
            'news' => $news,
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
			'info'=>input('post.info'),
			'status'=>input('post.status'),
		];
    	$news=model('Add')->add($data,'love_news');
    	$this->success('新增成功，正在跳转。。。','news/index');
    }
}
