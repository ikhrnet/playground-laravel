<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index() {
        $greeting = 'Hola!';

        return view('hello', compact('greeting'));
    }
}
