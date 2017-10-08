<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('main.index');
    }

    public function fbvzSell()
    {
        return view('fbvz_sell');
    }


}
