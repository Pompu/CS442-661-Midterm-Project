<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        return view('events.index');
    }
    public function myEvent() {
        return view('events.my-event');
    }
    public function createEvent() {
        return view('events.create-event');
    }
}
