@extends('layouts.main')

@section('content')
    <div class="mx-auto flex flex-wrap py-5">
        <div class="grid-column: 1" style="margin-left: 250px; display: flex; flex-direction: column; align-items: center;">
            <div class="event-detail-image">
                <img src="{{ $event->image_path }}" alt="{{ $event->name }}">
            </div>

            @if (Auth::check())
                @if (auth()->user()->role === 'MEMBER')
                    <div style="margin-block: 50px">
                        <a href="{{ route('profile.apply') }}">
                            <button class="group relative h-12 w-48 overflow-hidden rounded-lg bg-white text-lg shadow" style="background-color: rgb(31, 41, 55); color: white;">
                                <div class="absolute inset-0 w-3 bg-purple-700 transition-all duration-250 ease-out group-hover:w-full"></div>
                                <span class="relative group-hover:text-white">Apply</span>
                            </button>
                        </a>
                    </div>
                @endif
            @endif
        </div>

        <div class="grid-column:2" style="margin-left: 100px">
            <div class = "event-detail-box">
                <h1 class="font-semibold text-xl"> {{ $event->name }} </h1>
            </div>

            <div class = "event-detail-box">
                <p>{{ date("D d F Y", strtotime($event->date))}}</p>
                <p>{{ $event->location }}</p>
            </div>

            <div class="event-detail-box">
                <p>{{ $event->detail }}</p>
            </div>
        </div>
    </div>

@endsection
