@extends('layouts.main')

@section('content')
    <div class="container mx-auto bg-gray-800 shadow-md rounded flex justify-center" style="margin-block: 30px">
        <div class="event-detail-image">
            <img src="{{ $budget->event->image_path }}" alt="{{ $budget->event->name }}">
        </div>

        <div style="margin-left: 50px">
                <div class = "event-detail-box-white">
                    <h1 class="font-semibold text-xl"> {{ $budget->event->name }} </h1>
                </div>

                <div class = "event-detail-box-white">
                    <div class="detail-container">
                        <span class="detail-icon"><img src="https://img.icons8.com/?size=512&id=6Z5IUAh18Fuc&format=png" width="20"></span>
                        <span class="detail-info"><p>{{ date('D d F Y g:i:s A', strtotime($budget->event->date)) }}</p></span>
                    </div>
                    <div class="detail-container">
                        <span class="detail-icon"><img src="https://img.icons8.com/?size=512&id=c0kUjxdWTRsk&format=png" width="20"></span>
                        <span class="detail-info"><p>{{ $budget->event->address }} {{ $budget->event->province }} {{ $budget->event->district }} {{ $budget->event->subdistrict }}</p></span>
                    </div>
                    <p style="margin-left:30px">{{ $budget->event->location_detail }}</p>
                </div>

                <div class="event-detail-box-white">
                    <p>{{ $budget->event->detail }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto bg-white shadow-md rounded" style="margin-block: 30px">
        <div class="mx-auto flex justify-center" style="margin-block:30px">
            <div class="text-4xl font-semibold">Budget</div>
        </div>

        <div style="margin-block:10px">
            <span class="font-semibold">สถานะ: </span>
            @if($budget->status === "inprogress") <span>รอดำเนินการ</span>
            @elseif($budget->status === "completed") <span>ดำเนินการแล้ว</span>
            @endif
        </div>
        <div style="margin-block:10px">
            <span class="font-semibold">ค่าใช้จ่าย: </span>
            <span>{{ $budget->cost }} บาท</span>
        </div>
        <div style="margin-block:10px">
            <span class="font-semibold">รายละเอียด: </span>
            <span>{{ $budget->description }}</span>
        </div>

        <div class="mx-auto flex justify-center" style="margin-block:30px">
            <form action="{{ route('budgets.update-status', ['budget' => $budget]) }}" method="POST">
                @csrf
                @method('PUT')
                <button type="submit" class="group relative h-12 w-48 overflow-hidden rounded-lg bg-white text-lg shadow" style="background-color: rgb(31, 41, 55); color: white;">
                    <div class="absolute inset-0 w-3 bg-purple-700 transition-all duration-250 ease-out group-hover:w-full"></div>
                    <span class="relative group-hover:text-white">ยืนยันการเบิก</span>
                </button>
            </form>
        </div>
    </div>
@endsection
