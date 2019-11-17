<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponseController extends Controller
{
    //
    public function index() {
        return response(view('welcome'), 401)
            ->header('Content-type', 'text/html');
    }
}
