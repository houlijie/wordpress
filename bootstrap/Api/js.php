
<?php

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

$api->version('v1', function($api) {
    // 企业相关信息
    $api->group(['namespace' => 'WJSTest\Api\V1\Action\HomeController'], function($api) {
    	$api->get('/test', 'as' => 'front.wxapp.login',  'uses'=>'Wxapp@checkLogin'])
    });
});
