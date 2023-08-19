@extends('layouts.main')


@section('content')


<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
    <div class="container">
        <div class="event-container">
            {{-- loop  --}}
            <div class="event-item">
                <div class="event-image" >
                    <img src="https://cdn.discordapp.com/attachments/982119215723053096/1142118215275778138/IMG_2916.jpg" alt="">
                </div>
                <div class="event-detail">
                    <p class="font-semibold text-violet-700">Date</p>
                    <h2 class="event-name">Name</h2>
                    <p class="text-gray-600 text-sm">Location</p>
                </div>
            </div>
        
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