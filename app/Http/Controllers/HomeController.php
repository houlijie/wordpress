<?php

namespace App\Http\Controllers;

use App\Article;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     * 
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        //内部调用api方式二
        /**
         * Create a new controller instance.
         * @request({"id":"1", "age": "13"}, headers={"x-Custom":"dddd"}, identifier="homeIndex")
         * 
         */
        $articles = $this->api->get('articles');

        return view('jsExample.formExample');
    }

    //
}
