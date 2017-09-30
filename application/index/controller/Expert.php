<?php
namespace app\index\controller;
use think\Controller;

class Expert extends Controller
{
    public function index()
    {	
    	$title="专家团队";
    	$experts=model('Expert')->getExpert();
        return $this->fetch('',[
        	'experts' => $experts,
        	'title'=>$title,
        ]);
    }
}
