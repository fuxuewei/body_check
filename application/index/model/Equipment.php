<?php

namespace app\index\model;
use think\Model;
use think\Db;

Class Equipment extends Model{
	public function getEquipment(){
		
		$res = Db::table('love_equipment')
			->where('status',1)
			->paginate();
		return $res;
	}
}