<?php

namespace App\Http\Controllers;

use App\Events\TaskEvent;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        event(new TaskEvent('usman.faisal60@gmail.com'));
        return 'Heyo';
    }
}
