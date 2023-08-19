<?php

namespace App\Http\Controllers;

use App\Models\Event;
use DateTime;
use Illuminate\Http\Request;

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
        $sortedEvents = $events->sortBy('date');

        return $sortedEvents;
    }

    private function filterUpcomingEvents($events) {
        $currentDate = new DateTime('today');

        $filteredEvents = $events->filter(function ($event) use ($currentDate) {
            return strtotime($event->date) >= $currentDate->getTimestamp();
        });

        return $filteredEvents;
    }
    public function myEvent() {
        return view('myevents.myevents');
    }
    public function createEvent() {
        return view('events.create-event');
    }
}
