<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidationController extends Controller
{
    public function submitForm(Request $request) {
        $validation = $this->validate($request, [
            'username' => 'required',
            'email' => 'required'
        ]);

        if ($validation) {
            return $validation;
        } else {
            return response('Inavlid form data', 400);
        }
//        $formData = array([
//            'username' => $request['username'],
//            'email' => $request['email']
//        ]);
//
//        return response(json_encode($formData), 200)
//            ->header('Content-type', 'text/plain');
    }
}
