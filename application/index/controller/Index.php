<?php
namespace app\index\controller;

//class Index
//{
//    public function index()
//    {
//        return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="ad_bd568ce7058a1091"></think>';
//    }
//
//    public function demo(){
//        return "我是index控制器下的demo方法";
//    }
//    public function _empty($method)
//    {
//        return '你访问的方法'.$method.'不存在';
//    }
//}
//class Index extends \think\Controller   //extends：继承基类controller
//{
//    public function index()
//    {
//        return '<h2>欢迎来到php中文网学习</h2>';
//    }
//    public function demo($name)
//    {
//        if ($name == 'demo')
//        {
//            $this->success('验证成功，正在跳转~~','ok');
//        }
//        else{
//            $this->error('验证失败，正在返回登陆页面','login');
//        }
//    }
//    public function ok()
//    {
//        return '欢迎登陆后台管理系统';
//    }
//    public function login()
//    {
//        return '登陆界面';
//    }
//
//    public function hello($name,$lesson)
//    {
//        return 'hello,欢迎来到' . $name . "学习" . $lesson . 'PHP';
//    }
//
//}

//自定义变量的输出
//class Index extends \think\Controller
//{
//    public function index()
//    {
//        $user = [
//            'name' =>'ck',
//            'age' =>'21',
//        ];
//        $book = new \stdClass();
//        $book -> name = 'tp5设计';
//        $book -> price = 99;
//        $this ->assign('domain','www.baidu.com');
//        $this ->assign('user',$user);
//        $this ->assign('book',$book);
//        return $this ->fetch();
//
//    }
//}

//class Index extends \think\Controller
//{
//    public function index(){
//        return $this ->fetch();
//
//}
//}

use think\View;
class Index extends \think\Controller
{
    public function index(){
        $view = new View();
        return $view ->fetch('index');

    }
}