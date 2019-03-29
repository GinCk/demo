<?php
namespace app\checkboom\controller;
class Check{
    public function start(){
        view('index/check',['name'=>'begin', 'url'=> 'http://localhost/check']);
    }
//    public function bb(){
//        return $_POST;
//    }
}
