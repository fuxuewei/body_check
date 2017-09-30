<?php

namespace app\index\model;
use think\Model;
use think\Db;

Class Expert extends Model{
	public function getExpert(){
		
		$res = Db::table('love_expert')
			->where('status',1)
			->paginate();
		return $res;
	}
}