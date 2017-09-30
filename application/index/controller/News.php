<?php
namespace app\index\controller;
use think\Controller;

class News extends Controller
{
    public function index()
    {	
    	$title="动态资讯";
    	$news=model('News')->getNews();
        return $this->fetch('',[
        	'news' => $news,
        	'title'=>$title,
        ]);
    }
}
