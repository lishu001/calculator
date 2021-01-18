<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function test()
    {
        echo  66666;
    }

    public function test2()
    {
        return view('test2');
    }


}