<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2019/1/21
 * Time: 15:27
 */

use think\Route;

//Route::get('/start','checkboom/Check/start');
//Route::post('/bb','checkboom/Check/bb');

Route::get('/index','checkboom/Index/index');
Route::post('/boom/reg','checkboom/Index/reg');

Route::post('/ff','checkboom/Index/ff');