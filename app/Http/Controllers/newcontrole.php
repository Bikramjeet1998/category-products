<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newcontrole extends Controller
{
    function hello()
    {
        // echo "<h1>hello bikram</h1>";

        return view('test');
    }
    function some($name)
    {
        echo "$name";
        return view('some');
    }
    public function test()
    {
        return view('test');
    }
}
