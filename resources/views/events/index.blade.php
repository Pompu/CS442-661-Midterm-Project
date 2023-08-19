@extends('layouts.main')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
</head>
<body>
    <div class="container">
        <div class="event-container">
            @foreach ($events as $event)
            <a href="{{ route('events.show', ['event' => $event]) }}">
                <div class="event-item">
                    <div class="event-image">
                        <img src="{{ $event->image_path }}" alt="{{ $event->name }}">
                    </div>
                    <div class="event-detail">
                        <p class="font-semibold text-violet-700">{{ date("d M Y", strtotime($event->date)) }}</p>
                        <h2 class="event-name">  {{ $event->name }}</h2>
                        <p class="text-gray-600 text-sm">{{ $event->location }}</p>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</body>
</html>
@endsection
