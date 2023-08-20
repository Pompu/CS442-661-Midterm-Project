@extends('layouts.main')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <div class="flex justify-center items-center">
            <a href="{{ route('budgets.index', 'inprogress') }}">
                <button class="group relative h-12 w-48 overflow-hidden rounded-lg bg-white text-lg shadow hover:bg-purple-600 transition-colors" style="background-color: rgb(31, 41, 55); color: white; margin-right: 20px;">
                    <span>in progress</span>
                </button>
            </a>
            <a href="{{ route('budgets.index', 'completed') }}">
                <button class="group relative h-12 w-48 overflow-hidden rounded-lg bg-white text-lg shadow hover:bg-purple-600 transition-colors" style="background-color: rgb(31, 41, 55); color: white;">
                    <span>completed</span>
                </button>
            </a>
        </div>

        <div class="budget-container">
            @foreach ($budgets as $budget)
            <a href="{{ route('budgets.show', ['budget' => $budget]) }}">
                <div class="budget-item">
                    <div class="budget-image">
                        <img src="{{ asset('storage/' . $budget->event->image_path) }}" alt="{{ $budget->event->name }}">
                    </div>
                    <div class="budget-detail">
                        <h2 class="text-xl font-semibold">{{ $budget->event->name }}</h2>
                        <div>
                            <div>
                                <span class="font-semibold">สถานะ: </span>
                                @if($budget->status === "inprogress") <span class="text-red-600">รอดำเนินการ</span>
                                @elseif($budget->status === "completed") <span class="text-green-600">ดำเนินการแล้ว</span>
                                @endif
                            </div>
                            <div>
                                <span class="font-semibold">ค่าใช้จ่าย: </span>
                                <span>{{ $budget->cost }} </span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</body>
</html>
@endsection
