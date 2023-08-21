<?php

namespace App\Http\Controllers;

use App\Models\Organizer;
use App\Models\OrganizerMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class OrganizerController extends Controller
{
    public function myOrg() {
        $organizers = Organizer::where('user_id', Auth::user()->id)->get();
        //dd(Organizer::where('user_id', Auth::user()->id)->get());
        return view('myorgs.myorgs',['organizers' => $organizers]);
    }

    public function createOrgs() {
        return view('myorgs.create-orgs',['user' => Auth::user()]);
    }

    public function storeOrg(Request $request){
        $organizer = new Organizer();
        $organizer->user_id = Auth::user()->id;
        $organizer->name = $request->get('name');
        $organizer->save();
        return response()->json(['organizer' => $organizer]);
    }

    public function addMember(Request $request){
        $email = $request->get('name');
        $user = DB::table('users')->where('email', $email)->get();
        Log::info($user[0]->id);
        if (empty($user)) {
            return false;
        } else {
            $member = new OrganizerMember();
            $member->user_id = $user[0]->id;
            $member->organizer_id = $request->get('id');
            $member->save();
            return response()->json(['user' => $user[0]]);
        }
    }
}
