<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2019/1/21
 * Time: 15:40
 */

namespace app\checkboom\controller;

use think\Db;

class Index extends \think\Controller
{
    public function index(){
        return $this ->fetch();
    }

    public function reg(){
        $user=$_POST["name"];
//        $time=$_POST["grade"];

        if($user=="")
        {
            return json([
                'data'=>null,
                'code'=>0,
                'message'=>'请输入昵称'
            ]);
        }
        else{
            $find = Db::query('select `name` from `checkboom` where `name` =?',[$user]);
            if(count($find))
            {
                return json([
                    'data'=>null,
                    'code'=>0,
                    'message'=>'昵称已存在'
                ]);
            }
            else{
                $insert = Db::execute('insert into `checkboom` (`name`) value (?)',[$user]);
                if($insert)
                {
                    return json([
                        'data'=>null,
                        'code'=>1,
                        'message'=>'打卡成功~'
                    ]);
                }
                else{
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
