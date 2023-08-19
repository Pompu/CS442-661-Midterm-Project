<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function register() {
        return view('historys.register');
    }
    public function certificate() {
        return view('historys.certificate');
    }
}
