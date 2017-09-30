<?php
namespace app\index\controller;
use think\Controller;

class Shopping extends Controller
{
    public function index()
    {	
    	$title="体验商城";
    	$shoppings=model('Shopping')->getShopping();
        return $this->fetch('',[
        	'shoppings' => $shoppings,
        	'title'=>$title,
        ]);
    }
}
