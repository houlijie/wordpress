<?php

namespace App\Http\Controllers;

use App\Article;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        //内部调用api方式二
        $articles = $this->api->get('articles');

        return view('jsExample.formExample');
    }

    //
}
