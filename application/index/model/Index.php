<?php

namespace app\index\model;
use think\Model;
use think\Db;

Class Index extends Model{

	protected $auto =[
		'time'
	];
	public function getShopping(){
		$res = Db::table('love_shopping')
			->where('status',1)
			->select();
		return $res;
	}
	public function getExpert(){
	 	$res = Db::table('love_expert')
			->where('status',1)
			->select();
		return $res;
	}
	public function getEquipment(){
		$res = Db::table('love_equipment')
			->where('status',1)
			->column('image','id');
	}
	public function getActivity(){
		$res = Db::table('love_activity')
			->where('status',1)
			->select();
		return $res;
	}
}