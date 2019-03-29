<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2018/12/17
 * Time: 15:39
 */
use think\Route;

Route::get('/cc','demo/ddController/cc'); // 定义GET请求路由规则
Route::post('/cd','demo/ddController/cd'); // 定义POST请求路由规则

Route::get('/aa','demo/NewController/aa');
Route::post('/bb','demo/NewController/bb');

Route::get('/ceshi2','demo/CeshiController/ceshi2');
Route::post('/rr','demo/CeshiController/rr');

Route::get('/login','demo/LoginController/login');
Route::post('/login_process','demo/LoginController/login_process');
Route::post('/log','demo/LoginController/log');

Route::get('/register','demo/RegisterController/register');
Route::post('/reg','demo/RegisterController/reg');

Route::post('/ff','demo/RegisterController/ff');