<?php

namespace app\index\model;
use think\Model;
use think\Db;

Class Activity extends Model{
	public function getActivity(){
		
		$res = Db::table('love_activity')
			->where('status',1)
			->paginate();
		return $res;
	}
}