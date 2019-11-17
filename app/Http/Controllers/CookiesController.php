<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CookiesController extends Controller
{
    //
    public function setCookie() {
        $response = new Response('Hello world');
        $response->withCookie(cookie('somename', 'jhgdashgdhsaidu', 1));

        return $response;
    }

    public function getCookie(Request $request) {
        $response = $request->cookie('somename');

        return $response;
    }


}
