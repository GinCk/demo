<?php
namespace app\demo\controller;

use think\Db;

class CeshiController
{
    public function ceshi2()
    {
        $msg = '';
//        $ceshi2=Db::table('newsurface')->where('id',1)->select();
//
//            $msg = json_encode($ceshi2);


        return view('index/ceshi2', ['name'=>$msg, 'url'=> 'http://localhost/bb']);
    }


    public function rr(){
        return $_POST;
    }
}