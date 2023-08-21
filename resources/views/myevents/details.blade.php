@extends('layouts.main')

@section('content')
@include('myevents.sidebar')
<div x-data="setup()" :class="{ 'dark': isDark }">
    <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white text-black ">
        <div class="h-full ml-14 mt-14 mb-10 md:ml-64">
            
            <div class="grid grid-cols-2 gap-0">
                <div class="grid-column: 1" style=" display: flex; flex-direction: column; align-items: center;">
                    <div class="event-detail-image">
                        <img src="{{ asset('storage/' . $myevent['image_path']) }}" >
                    </div>
                </div>
                
            
                    <div class="grid grid-rows-2 "> 
                        <div class="event-detail-myevents border shadow-md text-base"> 
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="eventName">
                                Event Name : {{ $myevent['name'] }}
                            </label> 
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="eventDetail">
                                Event Detail : {{ $myevent['detail'] }}
                            </label>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="eventName">
                                Owner : {{ $owner }}
                            </label> 
                        </div>
                        </div>

                        <div class="event-detail-myevents border shadow-md text-base"> 
                        <div class="mb-4">
                            <label class="block text-gray-700  font-bold mb-2" for="address">
                                Address : {{ $myevent['address'] }}
                            </label>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="address">
                                Province : {{ $province }}
                            </label>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700  font-bold mb-2" for="address">
                                District : {{ $district }}
                            </label>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="address">
                                Subdistrict : {{ $subdistrict }}
                            </label>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="address">
                                Location : {{ $myevent['location_detail'] }}
                            </label>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="address">
                                Upcoming : {{ $myevent['date'] }}
                            </label>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    
@endsection