@extends('layouts.main')

@section('content')
@include('myevents.sidebar')
<div x-data="setup()" :class="{ 'dark': isDark }">
    <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white text-black ">
        <div class="h-full ml-14 mt-14 mb-10 md:ml-64">
            
            <div class="grid grid-cols-2 gap-0">
                <div class="max-h-full w-60 mx-14 shadow-md border-grey-300 border flex justify-center items-center rounded-2xl hover:bg-gray-300 h-96">
                    <img src="{{ asset('storage/' . $myevent['image_path']) }}">
                </div>  

                <div class="grid grid-rows-2"> 
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="eventName">
                            Event Name : {{ $myevent['name'] }}
                        </label> 
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="eventDetail">
                            Event Detail : {{ $myevent['detail'] }}
                        </label>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="eventName">
                            Owner : {{ $owner }}
                        </label> 
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="address">
                            Address : {{ $myevent['address'] }}
                        </label>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="address">
                            Province : {{ $province }}
                        </label>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="address">
                            District : {{ $district }}
                        </label>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="address">
                            Subdistrict : {{ $subdistrict }}
                        </label>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="address">
                            Location : {{ $myevent['location_detail'] }}
                        </label>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="address">
                            Upcoming : {{ $myevent['date'] }}
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    
@endsection