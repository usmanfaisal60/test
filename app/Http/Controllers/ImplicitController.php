<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImplicitController extends Controller
{
    public function getIndex() {
        return 'index';
    }
    public function getMango() {
        return '<h1>Here is your mango</h1>';
    }
}
