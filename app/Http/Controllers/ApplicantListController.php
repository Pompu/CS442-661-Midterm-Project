<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApplicantListController extends Controller
{
    public function applicants(Request $request) {
        $myevent = $request->myevent;
        $applications = DB::table('applications')->where('event_id', $myevent->event_id)->get();
        return view('myevents.applicants', [
            'applications' => $applications
        ]);
    }
}
