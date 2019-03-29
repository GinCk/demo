<?php
namespace app\demo\controller;
use think\Db;
use \think\View;
class RegisterController
{
    public function register(){
        return view('index/register',['name'=>'注册','url'=>'http://localhost/register']);

    }

    public function reg(){
        // todo  写库 。。 注册逻辑
        $user=$_POST["name"];
        $psw=$_POST["password"];
        $sex=$_POST["sex"];

        if($user==""||$psw=="")
        {
            return json([
                'data'=>null,
                'code'=>0,
                'message'=>'请确认信息完整性'
            ]);
        }
//        else if($psw != $con){
//            return json([
//                'data'=>null,
//                'code'=>0,
//                'message'=>'密码不一致'
//            ]);
//        }
        else
        {

            $find = Db::query('select `name` from `user` where `name` =?',[$user]);
                if(count($find))
                {
//                    echo "<script>alert('用户名已存在');history.go(-1);</script>";
                    return json([
                        'data'=>null,
                        'code'=>0,
                        'message'=>'用户名已存在'
                    ]);
                }
                else
                {

                    $insert = Db::execute('insert into `user` (`name`,`password`,`sex`) value (?,?,?)',[$user,$psw,$sex]);
                    if($insert)
                    {
//                        echo "<script>alert('注册成功!');history.go(-1);</script>";
                        return json([
                            'data'=>null,
                            'code'=>1,
                            'message'=>'注册成功'
                        ]);
                    }

                    else
                    {
//                        echo "<script>alert('系统繁忙，请稍等~');history.go(-1);</script>";
                        return json([
                            'data'=>null,
                            'code'=>0,
                            'message'=>'系统繁忙'
                        ]);
                    }

                }
        }
    }

    public function ff(){
        return $_POST;
    }
}