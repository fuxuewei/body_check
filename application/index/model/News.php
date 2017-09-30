<?php

namespace app\index\model;
use think\Model;
use think\Db;

Class News extends Model{
	public function getNews(){
		
		$res = Db::table('love_news')
			->where('status',1)
			->paginate();
		return $res;
	}
}