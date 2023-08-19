@extends('layouts.main')

@section('content')
@include('myevents.sidebar')
<div x-data="setup()" :class="{ 'dark': isDark }">
    <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white text-black ">
      <div class="h-full ml-14 mt-14 mb-10 md:ml-64">
        
        <div class="grid grid-cols-2 gap-0">
            <div class="max-h-full w-60 mx-14 shadow-md border-grey-300 border flex justify-center items-center rounded-2xl hover:bg-gray-300 h-96">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
            <p class="text-l font-bold"> Event Picture </p>
          </div>  
          <div class="grid grid-rows-2 gap-"> 
            <div class="mb-4">
              <label class="block text-gray-700 text-sm font-bold mb-2" for="eventName">
                Event Name
              </label> 
              <input class="shadow appearance-none border-gray-300 rounded w-96 py-2 px-3 text-gray-700 leading-tight focus:ring-violet-600 " 
              id="eventName" type="text" >
            </div>
            <div class="mb-4">
              <label class="block text-gray-700 text-sm font-bold mb-2" for="address">
                Address
              </label>
              <input class="shadow appearance-none border-gray-300 rounded w-96 py-2 px-3 text-gray-700 leading-tight focus:ring-violet-600 " 
              id="address" type="text" >
            </div>
            <div class="mb-4">
              <label class="block text-gray-700 text-sm font-bold mb-2" for="address">
                District
              </label>
              <input class="shadow appearance-none border-gray-300 rounded w-96 py-2 px-3 text-gray-700 leading-tight focus:ring-violet-600" 
              id="district" type="text" >
            </div>
            <div class="mb-4">
              <label class="block text-gray-700 text-sm font-bold mb-2" for="address">
                Province
              </label>
              <input class="shadow appearance-none border-gray-300 rounded w-96 py-2 px-3 text-gray-700 leading-tight focus:ring-violet-600" 
              id="province" type="text" >
            </div>
            
            <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="eventDetail">
              Event Detail
            </label>
        
            </div>
            <button class="shadow appearance-none border rounded w-96 py-2 px-3 bg-emerald-400 text-grey-700 leading-tight focus:ring-violet-600 focus:shadow-outline font-bold text-sm" >
            Submit </button>
        </div>
        
        </div>
      </div>
    </div>
  </div>    
@endsection