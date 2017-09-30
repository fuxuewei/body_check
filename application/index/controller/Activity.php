<?php
namespace app\index\controller;
use think\Controller;

class Activity extends Controller
{
    public function index()
    {	
    	$title="活动专区";
    	$activities=model('Activity')->getActivity();
        return $this->fetch('',[
        	'activities' => $activities,
        	'title'=>$title,
        ]);
    }
}
