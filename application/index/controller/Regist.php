<?php
namespace app\index\controller;
use app\index\model\User;
use think\View;
use think\Controller;
class Regist extends Controller{
    public function index(){
        $view = new View();
        return $view->fetch('regist');
    }
    //用户注册
//    public function regist(){
//        //实例化User
//        $user = new User;
//        $user->name = input('post.name');
//        $user->sex = input('post.sex');
//        $user->password = input('post.password');
//        $user->tel = input('post.tel');
//        //进行规则验证
//        $result = $this->validate(
//        [
//            'name' => $user->name,
//            'sex' => $user->sex,
//            'password' => $user->password,
//            'tel' => $user->tel,
//        ],
//        [
//            'name' => 'require',
//            'sex' => 'number|between:1,0',
//            'password' => 'require',
//            'tel' => 'require',
//        ]
//        );
//        //写入数据库
//        if($user->sava()){
//            return $this->success('注册成功~~');
//        }else{
//            return $this->success('注册失败,请重新注册!');
//        }
//    }
}
