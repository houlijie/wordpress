<?php

use Illuminate\Http\Response;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->get('home', 'HomeController@index');

$app->get('user/create', 'userController@create');
$app->post('user/store', 'userController@store');

$app->get('user/{id}', ['uses'=>'userController@userInfo']);

$app->get('updateUserPwd/{id}', 'userController@updateUserPwd');

$app->group(['prefix' => 'api/v1'], function($app) {

    $app->get('articles/', 'ArticleController@index');
    $app->get('article/{id}', 'ArticleController@article');
    $app->post('article', 'ArticleController@createArticle');
    $app->put('article/{id}', 'ArticleController@updateArticle');
    $app->patch('article/{id}', 'ArticleController@modifyArticle');
    $app->delete('article/{id}', 'ArticleController@deleteArticle');
});

/**
 *
 * 响应方式
 *
 */

// 1、基本响应
$app->get('test', function(){
    return 'test';
});

// 2、实例化Response
$app->get('test1', function(){
    return (new Response($content, $status))->header('Content-Type', $value);
});

// 3、response函数

$app->get('test2', function(){
    return response($content, $status)->header('Content-Type', $value);
});

// 4、json响应

$app->get('test3', function(){
    return response()->json(['msg'=>'amazing !', 'success'=>true]);
});

// 5、文件下载

$app->get('test4', function(){
    return response()->download($pathfile, $name, $header);
});

// 6、重定向

$app->get('test5', function(){
    return redirect()->route('/');
});



