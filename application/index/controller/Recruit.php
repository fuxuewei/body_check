<?php
namespace app\index\controller;
use think\Controller;

class Recruit extends Controller
{
    public function index()
    {	
    	$title="人才招聘";
    	$recruits=model('Recruit')->getRecruit();
        return $this->fetch('',[
        	'recruits' => $recruits,
        	'title'=>$title,
        ]);
    }
}
