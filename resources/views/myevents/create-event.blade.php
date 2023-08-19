@extends('layouts.main')

@section('content')
   
<div class="grid justify-items-center">
    <label class="text-2xl mb-20">
        Create Event
    </label>
</div>

<div class="inline-flex">
    <div>
        <div class="max-h-full w-80 mx-14 shadow-md border-black border flex justify-center items-center rounded-2xl hover:bg-gray-300 h-96">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
            <p class="text-xl">
                Event Picture
            </p>
        </div>
        <input class="mt-4 ml-14 shadow-lg bg-green-300 hover:bg-green-400 appearance-none border rounded w-80 py-2 px-3 text-gray-700 leading-tight" 
        id="createSubmit" type="submit">
    </div>
    
    <div class="ml-20">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="eventName">
              Event Name
            </label>
            <input class="shadow appearance-none border rounded w-96 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
            id="eventName" type="text" placeholder="Event Name">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="eventDetail">
              Event Detail
            </label>
            <input class="shadow appearance-none border rounded w-96 h-20 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
            id="eventDetail" type="text" placeholder="Event Detail">
        </div>        
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="eventDate">
              Event Date
            </label>
            <input class="shadow appearance-none border rounded w-auto py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
            id="eventDate" type="datetime-local" placeholder="Event Date">
        </div>        
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="eventBudget">
              Event Budget
            </label>
            <input class="shadow appearance-none border rounded w-auto py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
            id="eventBudget" type="number" placeholder="Event Budget">
        </div>        
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="eventCondition">
              Event Condition
            </label>
            <input class="shadow appearance-none border rounded w-auto py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
            id="eventCondition" type="text" placeholder="Event Condition">
        </div>
    </div>

    <div class="ml-20">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="address">
              Address
            </label>
            <input class="shadow appearance-none border rounded w-96 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
            id="address" type="text" placeholder="Address">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="subdistrict">
                Subdistrict
            </label>
            <input class="shadow appearance-none border rounded w-96 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
            id="subdistrict" type="text" placeholder="Subdistrict">
        </div>     
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="district">
                District
            </label>
            <input class="shadow appearance-none border rounded w-96 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
            id="district" type="text" placeholder="District">
        </div> 
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="province">
                Province
            </label>
            <input class="shadow appearance-none border rounded w-96 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
            id="province" type="text" placeholder="Province">
        </div>   
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="moreDetail">
                More Detail
            </label>
            <input class="shadow appearance-none border rounded w-96 h-20 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
            id="moreDetail" type="text" placeholder="More Detail">
        </div> 
    </div>

</div>


@endsection