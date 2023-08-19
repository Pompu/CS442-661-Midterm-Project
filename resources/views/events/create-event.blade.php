@extends('layouts.main')

@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
    <div class="container">
        <div class="text-2xl font-semibold">Create New Event</div>
        <div class="create-container ">

        <div class="max-h-full w-60 mx-14 shadow-md border-grey-300 border flex justify-center items-center rounded-2xl hover:bg-gray-300 h-96">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
            <p class="text-l font-bold"> Event Picture </p>
          </div>  
        <div class="ml-20">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="eventName">
              Event Name
            </label>
            <input class="shadow appearance-none border-gray-300 rounded w-80 py-2 px-3 text-gray-700 leading-tight focus:ring-violet-600" 
            id="eventName" type="text" placeholder="Event Name">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="eventDetail">
              Event Detail
            </label>
            <input class="shadow appearance-none border-gray-300 rounded w-80 h-20 py-2 px-3 text-gray-700 leading-tight focus:ring-violet-600" 
            id="eventDetail" type="text" placeholder="Event Detail">
        </div>        
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="eventDate">
              Event Date
            </label>
            <input class="shadow appearance-none border-gray-300 rounded w-80 py-2 px-3 text-gray-700 leading-tight focus:ring-violet-600" 
            id="eventDate" type="datetime-local" placeholder="Event Date">
        </div>        
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="eventBudget">
              Event Budget
            </label>
            <input class="shadow appearance-none border-gray-300 rounded w-80 py-2 px-3 text-gray-700 leading-tight focus:ring-violet-600" 
            id="eventBudget" type="number" placeholder="Event Budget">
        </div>        
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="eventCondition">
              Condition
            </label>
            <input class="shadow appearance-none border-gray-300 rounded w-80 py-2 px-3 text-gray-700 leading-tight focus:ring-violet-600" 
            id="eventCondition" type="text" placeholder="Event Condition">
        </div>
    </div>

    <div class="ml-40">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="address">
              Address
            </label>
            <input class="shadow appearance-none border-gray-300 rounded w-80 py-2 px-3 text-gray-700 leading-tight focus:ring-violet-600" 
            id="address" type="text" placeholder="Address">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="subdistrict">
                Subdistrict
            </label>
            <input class="shadow appearance-none border-gray-300 rounded w-80 py-2 px-3 text-gray-700 leading-tight ffocus:ring-violet-600" 
            id="subdistrict" type="text" placeholder="Subdistrict">
        </div>     
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="district">
                District
            </label>
            <input class="shadow appearance-none border-gray-300 rounded w-80 py-2 px-3 text-gray-700 leading-tight focus:ring-violet-600" 
            id="district" type="text" placeholder="District">
        </div> 
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="province">
                Province
            </label>
            <input class="shadow appearance-none border-gray-300 rounded w-80 py-2 px-3 text-gray-700 leading-tight focus:ring-violet-600" 
            id="province" type="text" placeholder="Province">
        </div>   
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="moreDetail">
                Detail
            </label>
            <input class="shadow appearance-none border-gray-300 rounded w-80 py-2 h-20 px-3 text-gray-700 leading-tight focus:ring-violet-600
            id="moreDetail" type="text" placeholder="More Detail">
        </div> 
        <button class="shadow appearance-none border rounded w-80 py-2 px-3 bg-emerald-400 text-grey-700 leading-tight focus:ring-violet-600 focus:shadow-outline font-bold text-sm" >
            Submit </button>
        </div>
    </div>
 </div>




@endsection