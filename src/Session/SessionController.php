<?php

namespace src\Session;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index(Request $request)
    {
        var_export($request);
    }
}