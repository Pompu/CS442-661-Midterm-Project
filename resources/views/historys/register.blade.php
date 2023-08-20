@extends('layouts.main')

@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <div class="text-2xl font-semibold">Event Applied</div>
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
        </div>
    </div>
</body>
</div>

@endsection
