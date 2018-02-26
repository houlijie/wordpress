<?php

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cache;

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
$api = app('Dingo\Api\Routing\Router');
$dispatcher = app('Dingo\Api\Dispatcher');
$api->version('v1', ['middleware' => 'api.throttle', 'limit'=>5, 'expires' =>2, 'namespace'=>'App\Http\Controllers'], function($api){

    $api->get('article/{id}', ['as' => 'article.info', 'uses' => 'ArticleController@article']);
    $api->get('articles', 'ArticleController@articleList');

    $api->post('article', 'ArticleController@createArticle');
    $api->get('home', 'HomeController@index');
});

$api->version('v1', ['namespace'=>'App\Http\Controllers'], function($api){
    $api->get('/csstest', ['as' => 'css.index', 'uses' => 'CssController@index']);
});

$api->version('v1', ['namespace'=>'src\DesignPatterns'], function($api){
    // var_export(class_exists('src\DesignPatterns\TestController'));exit();
    $api->get('/patterns/factory', ['as' => 'abstract.factory.index', 'uses' => 'PatternsController@factoryTest']);
});

$api->version('v1', ['namespace'=>'App\Http\Controllers'], function($api){
    $api->get('/phptest/closer', ['as' => 'php.test.closer.test', 'uses' => 'PhpTestController@testCloser']);
    $api->get('/phptest/dognum', ['as' => 'php.test.dog.num.get', 'uses' => 'PhpTestController@getDogNum']);
});



//内部调用api方式二
// $app->get('home', function() use  ($dispatcher) {
//     //1、直接返回
//     // $articles = $dispatcher->get('api/articles');
//     // return view('jsExample.formExample')->with('articles', $articles);

//     //11、异常
//     try
//     {
//         $dispatcher->get('api/articles');
//     }catch(Dingo\Api\Exception\InternalHttpException $e)
//     {
//         $response = $e->getResponse();
//     }

//     //2、sending along data
//     // $dispatcher->with(['name'=>'json', 'age'=>13])->post('article');
//     //等同于：
//     // $dispatcher->post('article',['name'=>'json', 'age'=>13]);

//     // 3、指定特定的版本
//     $dispatcher->version('v2')->get('articles');
//     //4、指定特定的域名
//     $dispatcher->on('api.example.com')->get('articles');
//     //5、添加上传文件
//     $dispatcher->attach(Input::files())->post('article');
//     //6、传递一个文件路径的数组，数组的key是文件的id
//     $dispatcher->attach(['photos' => url('images/lumen.jpg')])->post('article');
//     //7、传递一个文件路径数据和meta数据
//     $dispatcher->attach([
//         'photo' => [
//             'path' => url('images/lumen.jpg'),
//             'mime' => 'image/jpeg',
//             'size' => '49430',
//         ],
//     ])->post('article');

//     //8、发送json数据
//     $data = [
//         'name' => 'json',
//         'age' => '13',
//     ];
//     $dispatcher->json($data)->post('article');

//     //9、伪装成认证用户
//     $dispatcher->be(auth()->user())->get('article');

//     //9、伪装成认证用户,如果想为一个请求添加认证用户
//     $dispatcher->be(auth()->user())->once()->get('article');

//     //10、取回原始响应对象
//     $response = $dispatcher->raw()->get('article');
// });


$app->get('/', function () use ($app) {
    return $app->version();
});


$app->get('home', 'HomeController@index');
$app->get('menu', 'HomeController@menu');
$app->get('LowerWindow', 'HomeController@lowerWindow');
$app->get('UpperWindow', 'HomeController@upperWindow');

$app->get('user/create', 'userController@create');
$app->post('user/store', 'userController@store');

// $app->get('user/{id}', ['uses'=>'userController@userInfo']);
$app->get('user/{id}', function () {
    return Cache::get('key');
});

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



