<?php

namespace App\Http\Controllers;

use App\Models\BoardDetail;
use App\Models\Board;
use App\Models\Budget;
use App\Models\Event;
use App\Models\Organizer;
use App\Models\OrganizerMember;
use App\Models\Application;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class EventController extends Controller
{
    public function index(Request $request)
    {
        $currentDate = now();
        $events = Event::whereHas('budget', function ($query) {
            $query->where('status', 'completed');
        })->where('date', '>=', $currentDate)->get();

        $lastThreeEvents = $events->reverse()->take(3);
        $events = $events->sortBy('date');

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
                return $event->date >= $startDate && $event->date <= $endDate;
            });
        }
        //dd($events);
        // dd($events[Event::all()->random()]->getAttributes()['image_path'] );
        return view('events.index', [
            'events' => $events,
            'lastThreeEvents' => $lastThreeEvents
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

    private function filterUpcomingEvents($events)
    {
        $currentDate = new DateTime('today');

        $filteredEvents = $events->filter(function ($event) use ($currentDate) {
            return strtotime($event->date) >= $currentDate->getTimestamp();
        });

        return $filteredEvents;
    }
    public function applicants(Request $request)
    {
        $myevent = DB::table('events')->where('id', $request->myevent)->get();
        $applicants = Application::where('event_id', $request->myevent)->get();

        return view('myevents.applicants', [
            'myevent_details' => $myevent[0],
            'myevent' => $myevent[0]->id,
            'applicants' => $applicants,
            'organizer' => $request->organizer
        ]);
    }
    public function getDetails(Request $request) {
        $myevent = DB::table('events')->where('id', $request->myevent)->get();
        $province = DB::table('masterprovince')->where('id', $myevent[0]->province_id)->get();
        $district = DB::table('masterdistrict')->where('id', $myevent[0]->district_id)->get();
        $subdistrict = DB::table('mastersubdistrict')->where('id', $myevent[0]->subdistrict_id)->get();

        return view('myevents.details', [
            'myevent_details' => $myevent[0],
            'myevent' => $myevent[0]->id,
            'province' => $province[0]->name,
            'district' => $district[0]->name,
            'subdistrict' => $subdistrict[0]->name,
            'organizer' => $request->organizer,
            'owner' =>  Auth::user()->name
        ]);
    }
    public function myEvent(Request $request) {
        $myevents = Event::where('organizer_id', $request->organizer)->get();
        return view('myevents.myevents', [
            'myevents' => $myevents,
            'organizer' => $request->organizer
        ]);
    }

    public function createEvent(Request $request) {
        $provinces = DB::table('masterprovince')->get();
        return view('myevents.create-event', [
            'provinces' => $provinces,
            'organizer' => $request->organizer
        ]);
    }
    public function addPostit(Request $request, $event)
    {
        //dd($request->myevent);
        $board = Board::find($request->board);
        $myevent = $request->myevent;
        //dd($request->myevent);
        $board_details = BoardDetail::where('board_header_id', $board->id)->get();
        return view('myevents.create-postit', [
            'board' => $board,
            'board_details' => $board_details,
            'event' => $myevent['id'], 'myevent' => $myevent
        ]);
    }
    public function storePostit(Request $request)
    {

        $board = Board::find($request->board);
        $myevent = $request->myevent;
        //dd($myevent);
        $board_detail = new BoardDetail();
        $board_detail->board_header_id = $board->id;
        $board_detail->topic = $request->get('board_detail_topic');
        $board_detail->detail = $request->get('board_detail_details');
        $board_detail->save();

        return redirect()->route('myevents.boards', [
            'board' => $board, 'event' => $myevent['id'], 'myevent' => $myevent
        ]);
    }

    public function updatePostit(Request $request, $event)
    {

        $board = Board::find($request->board);
        $board_detail = BoardDetail::find($request->board_detail);
        $myevent = $request->myevent;
        $action = $request->input('action');
        $myevent = $request->myevent;
        if ($action === 'update') {
            $board_detail->board_header_id  = '21';
        } elseif ($action === 'shift_right') {
            $board_detail->board_header_id  = '23';
        }
        $board_detail->save();
        return redirect()->route('myevents.boards', [
            'board' => $board, 'event' => $event, 'myevent' => $myevent
        ]);
    }


    public function boards(Request $request)
    {
        $myevent = DB::table('events')->where('id', $request->myevent)->get();
        $organize = Event::where('organizer_id', $request->organizer)->get();
        $boards = Board::where('organizer_id', $request->organizer)->get();
        $board_details = BoardDetail::whereIn('board_header_id', $boards->pluck('id'))->get();
        return view('myevents.boards', [
            'boards' => $boards,
            'board_details' => $board_details,
            'myevent' => $myevent[0],
            'organize' => $organize,
            'organizer' => $request->organizer
        ]);
    }

    public function delete_postit(Request $request, $event)
    {
        $board = Board::find($request->board);
        $board_detail = BoardDetail::find($request->board_detail);
        $myevent = $request->myevent;
        //dd($myevent);
        $board_detail->delete();
        return redirect()->route('myevents.boards', [
            'board' => $board, 'event' => $event, 'myevent' => $myevent
        ]);
    }


    /*public function updatePostitStatus(Request $request) {
        $myevent = $request->myevent;

        $organize = Event::where('organizer_id',$myevent['organizer_id'])->get();
        $boards = Board::where('organizer_id',$myevent['organizer_id'])->get();
        $board_details = BoardDetail::whereIn('board_header_id', $boards->pluck('id'))->get();
        return view('myevents.boards',[
            'boards' => $boards,
            'board_details' => $board_details,
            'myevent' => $myevent,
            'organize' => $organize
        ]);
    }*/
    public function getDistrict(Request $request)
    {
        $selectedValue = $request->input('province_id');

        $districts = DB::table('masterdistrict')
            ->where('province_id', $selectedValue)
            ->get();

        return response()->json(['districts' => $districts]);
    }
    public function getSubdistrict(Request $request)
    {
        $selectedValue = $request->input('district_id');

        $subdistricts = DB::table('mastersubdistrict')
            ->where('district_id', $selectedValue)
            ->get();

        return response()->json(['subdistricts' => $subdistricts]);
    }
    public function storeEvent(Request $request){

        $request->validate([
            'eventname' => ['required', 'unique:App\Models\Event,name'],
            'eventdate' => ['required'],
            'eventaddress' => ['required'],
            'province' => ['required'],
            'district' => ['required'],
            'subdistrict' => ['required'],
            'image' => ['required'],
            'eventbudget' => ['required', 'integer'],
        ]);
        $path = $request->file('image')->store('event_images', 'public');

        $event = new Event();
        $event->organizer_id = $request->organizer;
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
        return redirect()->route('myevents');
    }
}
