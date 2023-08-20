<?php

namespace App\Http\Controllers;

use App\Models\BoardDetail;
use App\Models\Board;
use App\Models\Budget;
use App\Models\Event;
use App\Models\Organizer;
use App\Models\OrganizerMember;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class EventController extends Controller
{
    public function index(Request $request) {
        $currentDate = now();
        $events = Event::where('date', '>=', $currentDate)->orderBy('date')->get();

        if ($request->has('sort')) {
            if ($request->sort === 'oldest') {
                $events = $events->sortBy('date');
            } elseif ($request->sort === 'newest') {
                $events = $events->sortByDesc('date');
            }
        }

        if ($request->has('start_date') || $request->has('end_date')) {
            $startDate = $request->start_date ?? now()->format('Y-m-d');
            $endDate = $request->end_date ?? $events->max('date');

            $events = $events->filter(function ($event) use ($startDate, $endDate) {
                return $event->dateTime >= $startDate && $event->dateTime <= $endDate;
            });
        }
        //dd($events->rand(0, count($events)));
        // dd($events[Event::all()->random()]->getAttributes()['image_path'] );
        $array = [
            $events[0]->getAttributes()['image_path'],
            $events[1]->getAttributes()['image_path'],
            $events[2]->getAttributes()['image_path']
        ];
        return view('events.index', [
            'events' => $events,
            'image_path' => $array
        ]);
    }

    public function show(Event $event)
    {
        return view('events.show', [
            'event' => $event
        ]);
    }

    public function update(Request $request, Event $event)
    {
        $event->name = $request->get('name');
        $event->save();
        return redirect()->route('myevents.detail', ['event' =>  $event]);
    }

    private function filterUpcomingEvents($events) {
        $currentDate = new DateTime('today');

        $filteredEvents = $events->filter(function ($event) use ($currentDate) {
            return strtotime($event->date) >= $currentDate->getTimestamp();
        });

        return $filteredEvents;
    }
    public function applicants(Request $request) {
        $myevent = $request->myevent;
        return view('myevents.applicants', [
            'myevent' => $myevent
        ]);
    }
    public function getDetails(Request $request) {

        $myevent = $request->myevent;
        $province = DB::table('masterprovince')->where('id', $myevent['province_id'])->get();
        $district = DB::table('masterdistrict')->where('id', $myevent['district_id'])->get();
        $subdistrict = DB::table('mastersubdistrict')->where('id', $myevent['subdistrict_id'])->get();
        return view('myevents.details', [
            'myevent' => $myevent,
            'province' => $province[0]->name,
            'district' => $district[0]->name,
            'subdistrict' => $subdistrict[0]->name,
            'owner' =>  Auth::user()->name
        ]);
    }
    public function myEvent() {
        $myevents = DB::table('events')->where('user_id', Auth::user()->id)->get();
        return view('myevents.myevents', [ 'myevents' => $myevents ]);
    }

    public function createEvent() {
        $provinces = DB::table('masterprovince')->get();
        return view('myevents.create-event', [ 'provinces' => $provinces ]);
    }
    public function boards(Request $request) {
        $myevent = $request->myevent;
        $organize = DB::table('events')->where('organizer_id')->get();
        $boards = Board::where('organizer_id')->get();
        $board_details = BoardDetail::where('board_header_id')->get();
        return view('myevents.boards',[ 
            'boards' => $boards,
            'board_details' => $board_details,
            'myevent' => $myevent,
            'organize' => $organize
        ]);
    }
    public function getDistrict(Request $request) {
        $selectedValue = $request->input('province_id');

        $districts = DB::table('masterdistrict')
                        ->where('province_id', $selectedValue)
                        ->get();

        return response()->json(['districts' => $districts]);
    }
    public function getSubdistrict(Request $request) {
        $selectedValue = $request->input('district_id');

        $subdistricts = DB::table('mastersubdistrict')
                        ->where('district_id', $selectedValue)
                        ->get();

        return response()->json(['subdistricts' => $subdistricts]);
    }
    public function storeEvent(Request $request) {
        $path = $request->file('image')->store('event_images', 'public');

        /*$organizer = new Organizer();
        $organizer->user_id = Auth::user()->id;
        $organizer->name = $request->get('organizername');
        $organizer->save();*/

        $organizer = new Organizer();
        $organizer->user_id = Auth::user()->id;
        $organizer->name = 'testOrganize';
        $organizer->save();

        $event = new Event();
        $event->user_id = Auth::user()->id;
        $event->organizer_id = $organizer->id;
        $event->name = $request->get('eventname');
        $event->detail = $request->get('eventdetail');
        $event->date = $request->get('eventdate');
        $event->address = $request->get('eventaddress');
        $event->province_id = $request->get('province');
        $event->district_id = $request->get('district');
        $event->subdistrict_id = $request->get('subdistrict');
        $event->location_detail = $request->get('addressdetail');
        $event->image_path = $path;
        $event->save();

        $budget = new Budget();
        $budget->event_id = $event->id;
        $budget->cost = $request->get('eventbudget');
        $budget->save();



        $organizer_member = new OrganizerMember();
        $organizer_member->organizer_id = $organizer->id;
        $organizer_member->user_id = Auth::user()->id;
        $organizer_member->save();
        
        for ($i = 0; $i < 3; $i++){
            $board = new Board();
            $board->organizer_id = $organizer->id;
            $board->header = 'head{$i}';
            $board_detail = new BoardDetail();
            $board_detail->board_header_id = $board->id;
            $board_detail->topic = 'topic{$i}';
            $board_detail->detail = 'detail{$i}';
        }

        $organizer_member = new OrganizerMember();
        $organizer_member->organizer_id = $organizer->id;
        $organizer_member->user_id = Auth::user()->id;
        $organizer_member->save();

        /*$organizer_member = new OrganizerMember();
        $organizer_member->organizer_id = $organizer->id;
        $organizer_member->user_id = Auth::user()->id;
        $organizer_member->save();

        // ทำ 3 task (หัวข้อ)
        for ($i = 0; $i < 3; $i++){
            $board = new Board();
            $board->organizer_id = $organizer->id;
            $board->header = $request->get('boardheader');
            $board_detail = new BoardDetail();
            $board_detail->board_header_id = $board->id;
            $board_detail->topic = $request->get('boardtopic');
            $board_detail->topic = $request->get('boarddetail');
        }
        
        */
        
        return redirect()->route('myevents');
    }
}
