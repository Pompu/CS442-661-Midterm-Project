<?php

namespace App\Http\Controllers;

use App\Models\Event;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class EventController extends Controller
{
    public function index() {
        $events = Event::get();

        $sortedEvents = $this->sortEvents($events);
        $filteredEvents = $this->filterUpcomingEvents($sortedEvents);

        return view('events.index', [
            'events' => $filteredEvents
        ]);
    }

    public function show(Event $event)
    {
        return view('events.show', [
            'event' => $event
        ]);
    }


    private function sortEvents($events) {
        $sortedEvents = $events->sortBy('dateTime');

        return $sortedEvents;
    }

    public function update(Request $request, Event $event)
    {
        $event->name = $request->get('name');
        $event->save();
        return redirect()->route('myevents.detail', ['event' =>  $event]);
    }

    private function filterUpcomingEvents($events) {
        $currentDateTime = now();

        $filteredEvents = $events->filter(function ($event) use ($currentDateTime) {
            return $event->dateTime >= $currentDateTime;
        });

        return $filteredEvents;
    }

    public function myEvent() {
        return view('myevents.myevents');
    }
    public function createEvent() {
        $provinces = DB::table('masterprovince')->get();
        return view('myevents.create-event', [ 'provinces' => $provinces ]);
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
        /* $request->validate([
            'name' => ['required', 'unique:App\Models\Artist,name']
        ]);
        $image_file = $request->file('image');
        $image_path = $image_file->storeAs("public");

        $artist = new Artist();
        $artist->image_path = $image_path;
        $artist->name = $request->get('name');
        $artist->save();

         */
        Log::info('Request Data:', $request->all());
        //return redirect()->route('myevents');
    }
}
