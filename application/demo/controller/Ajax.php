<?php
namespace app\demo\controller;

use think\Db;

class Ajax {
    public function login(){
        return view('index/ajax', ['name'=>'登陆', 'url'=> 'http://localhost/ajax']);
    }

//    public function ck(){
//        $name=$_POST["user"];
//        $com=$_POST["comment"];
//        $time=$_POST["addtime"];
//        $sql=Db::execute('insert into comments(user,comment,addtime) value (?,?,?)',[$name,$com,$time]);
//        $que=mysqli_query($sql);
//        if($que)  echo "1";
//    }

}