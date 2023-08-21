<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ApplicationController extends Controller
{


    public function form(Request $request, Event $event)
    {
        return view('application.form', [
            'user' => $request->user(),
            'event' => $event
        ]);
    }
    public function verify(Request $request, $event, $applicant,)
    {
        //$myevent = Event::findOrFail($myevent);
        
        
        $applicant = Application::findOrFail($applicant);
        $myevent = Event::findOrFail($event);
        //dd($request->myevent);
        return view('application.verify', [

            'myevent' => $request->myevent,
            'applicant' => $applicant,
        ]);
    }
    public function update(Request $request, $event,$applicant)
    {
        //dd($applicant);
        $action = $request->input('action');
        $applicant = Application::findOrFail($applicant);
        $myevent = $request->myevent;
        //dd($request->myevent);
        if ($action === 'accept') {
            $applicant->status = 'ACCEPT';
        } elseif ($action === 'reject') {
            $applicant->status = 'REJECT';
        }
        //dd($event);
        $applicant->save();
       
        return  redirect()->route('myevents.applicants', ['myevent' => $myevent,'event' => $myevent['id']]);

        
    }









    public function store(Event $event)
    {
        
         $application = new Application();
         $application->status = 'WAITING';
         $application->user_id = Auth::user()->id;
         $application->event_id = $event->id;
         $application->save();
            return redirect()->route('event');
        
    }
   
}
