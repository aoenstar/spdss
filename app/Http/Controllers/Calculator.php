<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Calculator extends Controller
{
      public function index(Calculator $calculator): View
    {
         $a = request()->input('a');
         $b = request()->input('b');
         $c = request()->input('c');
         
         $result = $calculator->calculateAVG($a, $b,$c);
         $result2 = $calculator->calculateCW($a, $b,$c);
        return view('calculator', [
                'result' => $result,
                'result2' => $result2
                'a' => $a,
                'b' => $b,
                'c' => $c,
        ]);
    }
}
