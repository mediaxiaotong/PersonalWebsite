<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
网站后台路由
*/
//后台管理员登陆路由
Route::group(['prefix'=>'admin','namespace'=>'Admin'], function (){
    /*
    网站后台路由
    */
    //后台登陆试图路由
    Route::get('login', 'LoginController@loginView');
    //后台登陆表单数据提交
    Route::post('login', 'LoginController@login');
    //后台登陆验证码
    Route::get('code', 'LoginController@code');

    //测试路由项目完成删除
    Route::get('getcode', 'LoginController@getcode');
});

//进入主页路由
Route::group(['middleware' => ['admin.login'],'prefix'=>'admin','namespace'=>'Admin'], function () {
    //主页路由
    Route::get('index', 'IndexController@index');
    Route::get('info', 'IndexController@info');
    Route::get('quit', 'IndexController@quit');
    //修改密码
    Route::get('pass', 'AdminsController@index');
    Route::post('pass', 'AdminsController@pass');

    //异步修改分类排序
    Route::post('cate/changeorder', 'CategoryController@changeOrder');
    //分类路由
    Route::resource('category', 'CategoryController');
    //文章路由
    Route::resource('article', 'ArticleController');
    //文章图片上传
    Route::post('article/upload', 'ArticleController@upload');
    //友情链接
    Route::post('link/changeorder', 'LinkController@changeOrder');
    Route::resource('link', 'LinkController');
    //前台导航
    Route::post('nav/changeorder', 'NavController@changeOrder');
    Route::resource('nav', 'NavController');

    //网站配置
    Route::get('config/putfile', 'ConfigController@putFile');
    Route::post('config/changecontent', 'ConfigController@changeContent');
    Route::post('config/changeorder', 'ConfigController@changeOrder');
    Route::resource('config', 'ConfigController');


});

