<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
    

    public function form(Request $request,Event $event)
    {
        return view('application.form', [
            'user' => $request->user(),
            'event' => $event
        ]);
    }

    public function store(Request $request, Event $event)
    {
        
         $application = new Application();
         $application->status = 'WATING';
         $application->user = Auth::user()->id;
         $application->event = $event->id;
         $application->save();
            return redirect()->route('event');
        
    }
}

