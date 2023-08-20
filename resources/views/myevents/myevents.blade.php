@extends('layouts.main')


@section('content')


<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
    <div class="container">
        <div class="text-2xl font-semibold">My Events</div>
        <div class="event-container">
            @foreach ($myevents as $myevent)
            <a href="{{ route('myevents.details', ['myevent' => $myevent]) }}" class="event-item cursor-pointer">
                <div class="event-image" >
                    <img src="{{ asset('storage/' . $myevent->image_path) }}">
                </div>
                <div class="event-detail">
                    <label class="font-semibold text-violet-700">{{ $myevent->date }}</label>
                    <label class="event-name">{{ $myevent->name }}</label>
                    <label class="text-gray-600 text-sm">{{ $myevent->location_detail }}</label>
                </div>
            </a>
            @endforeach
        
            <a href=" {{ route('myevents.create-event')}}" class="event-item justify-center items-center" 
                method="POST" >
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
            <p class="text-sm font-bold"> Create Event</p>
            </a>
        </div>
    </div>

@endsection