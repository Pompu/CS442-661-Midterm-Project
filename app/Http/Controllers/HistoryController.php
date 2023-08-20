<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HistoryController extends Controller
{
    public function register() {
        return view('historys.register');
    }
    public function certificate() {
        $certificates = DB::table('certificates')
                        ->where('user_id', Auth::user()->id)
                        ->get();
        return view('historys.certificate', ['certificates' => $certificates]);
    }
}
