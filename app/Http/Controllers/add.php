<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class add extends Controller
{
    public function addNumbers(Request $request)
    {
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');

        $sum = $num1 + $num2;

        return view('addNumbers', ['num1' => $num1, 'num2' => $num2, 'sum' => $sum]);


    }
}
