<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPUnit\Event\Code\Test;

class TestController extends Controller
{
    public function test(Request $request)
    {
        $name = $request->input('name', "Jamuna");
        $id = 1;

        return view('test', ['id' => $id, 'name' => $name]);
    }

    public function Data()
    {

    }
}
