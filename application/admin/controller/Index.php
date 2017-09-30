<?php
namespace app\admin\controller;
use think\Controller;

class Index extends Controller
{
    public function index()
    {	
        $acnum=model('Add')->getNum('love_activity');
        $eqnum=model('Add')->getNum('love_equipment');
        $exnum=model('Add')->getNum('love_expert');
        $newsnum=model('Add')->getNum('love_news');
        $renum=model('Add')->getNum('love_recruit');
        $shopnum=model('Add')->getNum('love_shopping');

        $acall=model('Add')->getAll('love_activity');
        $eqall=model('Add')->getAll('love_equipment');
        $exall=model('Add')->getAll('love_expert');
        $newsall=model('Add')->getAll('love_news');
        $reall=model('Add')->getAll('love_recruit');
        $shopall=model('Add')->getAll('love_shopping');
        return $this->fetch('',[
            'acnum'=>$acnum,
            'eqnum'=>$eqnum,
            'exnum'=>$exnum,
            'newsnum'=>$newsnum,
            'renum'=>$renum,
            'shopnum'=>$shopnum,
            'acall'=>$acall,
            'eqall'=>$eqall,
            'exall'=>$exall,
            'newsall'=>$newsall,
            'reall'=>$reall,
            'shopall'=>$shopall,
        ]);
       
    }
    
}
