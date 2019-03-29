<?php
namespace app\demo\controller;
use think\Db;
use \think\View;
class LoginController
{
    public function login(){
        return view('index/login', ['name'=>'登陆', 'url'=> 'http://localhost/login']);

    }
    public function log(){

        $user=$_POST["name"];
        $psw=$_POST["password"];
        if($user==""||$psw=="")
        {
            return json([
                'data'=>null,
                'code'=>0,
                'message'=>'请输入用户名或密码'
            ]);
        }
        else
            {
                $check = Db::execute('select name,password from `user`  WHERE name=:name and password=:password',['name'=>$user,'password'=>$psw]);
                //select * from `user`  WHERE id=? and password = ?  select name,password from `user`  WHERE :name and :password
                if($check)
                {
                    return json([
                        'data'=>null,
                        'code'=>1,
                        'message'=>'登陆成功'
                    ]);
                }
                else
                    {
                        return json([
                            'data'=>null,
                            'code'=>0,
                            'message'=>'用户名或密码错误！'
                        ]);
                    }
            }
    }
    public function ee(){
        return $_POST;
    }

}