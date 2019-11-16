<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index() {
        echo 'index';
    }

    public function show($id) {
        echo 'show';
    }

    public function create() {
        echo 'create';
    }

    public function destroy($id) {
        echo 'destroy';
    }

    public function edit($id) {
        echo 'edit';
    }

    public function update(Request $request, $id) {
        echo 'update';
    }

    public function store(Request $request) {
        echo 'store';
    }
}
