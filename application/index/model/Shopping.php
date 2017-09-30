<?php

namespace app\index\model;
use think\Model;
use think\Db;

Class Shopping extends Model{
	public function getShopping(){
		
		$res = Db::table('love_shopping')
			->where('status',1)
			->paginate();
		return $res;
	}
}