<?php
namespace app\index\controller;
use think\Controller;

class Index extends Controller
{
    public function index()
    {	
    	$shoppings =model('Index')	->getShopping();
    	$experts   =model('Index')	->getExpert();
    	$equipments=model('Index')	->getEquipment();
    	$activities=model('Index')	->getActivity();
        return $this->fetch('',[
        	'shoppings'  => $shoppings,
        	'experts' 	 => $experts,
        	'equipments' => $equipments,
        	'activities' => $activities,
        ]);
    }
}
