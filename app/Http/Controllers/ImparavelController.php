<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImparavelController extends Controller
{
    public function index()
    {
        $data = [
            'testVar' =>  "var test",
            'var2' => 'test var 2'
        ];

        return view('imparavel.index', $data);
    }
}
