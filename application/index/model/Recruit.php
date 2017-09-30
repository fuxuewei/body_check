<?php

namespace app\index\model;
use think\Model;
use think\Db;

Class Recruit extends Model{
	public function getRecruit(){
		$res = Db::table('love_recruit')
			->where('status',1)
			->select();
		return $res;
	}
}