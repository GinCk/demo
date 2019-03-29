<?php
namespace app\demo\controller;

class NewController
{
    public function aa()
    {

        return view('index/aa', ['name'=>'qyl', 'url'=> 'http://localhost/bb']);
    }
    public function bb(){
        return $_POST;
    }
}