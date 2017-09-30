<?php
namespace app\index\controller;
use think\Controller;

class Equipment extends Controller
{
    public function index()
    {	
   		$title="环境设备";
    	$equipments=model('Equipment')->getEquipment();
        return $this->fetch('',[
        	'equipments' => $equipments,
        	'title'=>$title,
        ]);
    }
}
