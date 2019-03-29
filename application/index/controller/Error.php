<?php
namespace app\index\controller;
class Error
{
    public function test()
    {
        return '我是当前访问控制器中的test方法';
    }
    public function  _empty($method)
    {
        return '你访问的方法'.$method.'不存在';
    }
}