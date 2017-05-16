<?php

namespace App\Http\Controllers;

use App\Article;

/**
 * @SWG\Info(title="First SWG API", version="1.0") 
 *
 *
 */
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     * 
     *
     */
    public function __construct()
    {
        //
    }


    /**
     * Create a new controller instance.
     * 
     * @SWG\Post(
     *      path="/api/article",
     *      @SWG\Parameter(
     *          name="body",
     *          required=true,
     *          @SWG\SChema(ref=""),
     *      ),
     *      @SWG\Response(
     *          response="200",
     *          description="Article create api",
     *      ),
     * )
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     */
    public function index()
    {
        //内部调用api方式二
        /**
         * Create a new controller instance.
         * @request({"id":"1", "age": "13"}, headers={"x-Custom":"dddd"}, identifier="homeIndex")
         * 
         */
        $articles = $this->api->get('articles');

        return view('jsExample.timeExample');
    }

    public function upperWindow() {
        return view('jsExample.UpperWindow');
    }

    public function lowerWindow() {
        return view('jsExample.LowerWindow');
    }

    public function menu() {
        return view('jsExample.Menu');
    }

    //
}
