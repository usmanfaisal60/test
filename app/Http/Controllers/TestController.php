<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    private $obj;
    public function __construct(\MyClass $obj)
    {
        $this->obj = $obj;

    }

    public function index () {
        return '<h1>This is the actual response</h1>';
    }

    public function other() {
        return '<h1>This is coming from other function</h1>';
    }

    public function mangoTest() {
       dd($this->obj);
    }
}
