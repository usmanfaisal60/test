<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponseController extends Controller
{
    //
    public function index() {
        return response('<h1>This is a response</h1>', 401)
            ->header('Content-type', 'text/plain');
    }
}
