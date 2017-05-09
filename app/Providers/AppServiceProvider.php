<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //只绑定事物到服务容器，不要做别的事情
        //eg. $this->app->singleton('test', function($app){  return new Connection(config('test'))    })
    }

    public function boot() {
        app('Dingo\Api\Auth\Auth')->extend('basic', function ($app) {
           return new \Dingo\Api\Auth\Provider\Basic($app['auth'], 'email');
        });
        //在服务提供者中注册视图
    }
}
