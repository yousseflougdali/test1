<?php

namespace App\Http\Controllers\Testc;

use Illuminate\Routing\Controller;

class TestController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified'])->except('test2');
    }
    public function test1()
    {
        return view('landing');
    }
    public function test2()
    {
        return 'hello world2';
    }
    public function test3()
    {
        return 'hello world3';
    }
    public function test4()
    {
        return 'hello world4';
    }

}
