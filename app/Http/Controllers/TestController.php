<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    public function index () {
        return '<h1>This is the actual response</h1>';
    }

    public function other() {
        return '<h1>This is coming from other function</h1>';
    }

    public function seeRequest(Request $req) {
        $path = $req->path();
        $pattern = $req->is('seeReq/*');
        $url = $req->url();

        echo "The request path is ".$path;
        echo "<br />is Method: ".$pattern;
        echo '<br />The request url is '.$url;
    }
}
