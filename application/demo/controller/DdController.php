<?php
namespace app\demo\controller;

class DdController
{
    public function cc()
    {


        return view('index/cc', ['name'=>'thinkphp', 'url'=> 'http://localhost/cd']);
    }
    public function cd(){
        return $_POST;
    }
}
