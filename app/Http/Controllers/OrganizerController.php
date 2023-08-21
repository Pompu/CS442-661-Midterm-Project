<?php

namespace App\Http\Controllers;

use App\Models\Organizer;
use App\Models\OrganizerMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrganizerController extends Controller
{
    public function myOrg() {
        $organizers = DB::table('organizer_members')->where('organizer_id', Auth::user()->id)->get();
        return view('myorgs.myorgs',['organizers'=>$organizers]);
    }

    public function createOrgs() {
        return view('myorgs.create-orgs');
    }

    public function storeOrg(Request $request){
        $organizer = new Organizer();
        $organizer->user_id = Auth::user()->id;
        $organizer->name = $request->get('name');
        $organizer->save();
        $member = new OrganizerMember();
        $member->user_id = Auth::user()->id;
        $member->organizer_id = 1;
        $member->save();
        return view('myorgs.orgs-member',['organizer'=>$organizer,'members'=>$member]);
    }

    public function addMember(Request $request){
        $member = new OrganizerMember();
        $member->user_id = Auth::user()->id;
        $member->organizer_id = 1;
        $member->save();
        return view('myorgs.orgs-member',['member'=>$member]);;
    }
}
