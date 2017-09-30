<?php

namespace app\admin\model;
use think\Model;
use think\Db;

Class Add extends Model{
	public function add($data=[],$table){
		$db=Db::table($table);
		$res=$db->insert($data);
    }
    public function getDataFrom($table){
		$res = Db::table($table)
			->paginate();
		return $res;
	}
	public function getNum($table){
        $res = Db::table($table)
            ->where('status','eq','1')
            ->count('id');
        return $res;
    }
    public function getAll($table){
        $res = Db::table($table)
            ->count('id');
        return $res;
    }
}