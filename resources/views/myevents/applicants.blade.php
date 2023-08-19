@extends('layouts.main')

@section('content')

<div>
    <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white text-black ">

    
      <!-- Sidebar -->
      <div class="absolute flex flex-col top-100 left-100 w-14 hover:w-64 md:w-64 bg-grey-200 h-full text-black transition-all duration-300 border-none z-10 sidebar">
        <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
          <ul class="flex flex-col py-4 space-y-1">

            <li class="px-5 hidden md:block">
              <div class="flex flex-row items-center h-8">
                <div class="text-sm font-light tracking-wide text-gray-400 uppercase">My Event</div>
              </div>
            </li>
            <li>
              <a href="{{ route('myevents.details') }}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-indigo-600  text-white-600 hover:text-white border-l-4 border-transparent hover:border-indigo-400 dark:hover:border-gray-800 pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                </span>
                <span class="ml-2 text-sm tracking-wide truncate">Dashboard</span>
              </a>
            </li>
            <li>
              <a href="{{ route('myevents.applicants') }}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-indigo-600 text-white-600 hover:text-white border-l-4 border-transparent hover:border-indigo-400 dark:hover:border-gray-800 pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                </span>
                <span class="ml-2 text-sm tracking-wide truncate">Applicants</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <!-- ./Sidebar -->
    
      <div class="h-full ml-14 mt-14 mb-10 md:ml-64">

      <!-- applicants -->
        <div class="max-w-2xl mx-auto">

        <div class="p-4 max-w-md bg-white rounded-lg border shadow-md sm:p-8 ">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-xl font-bold leading-none text-gray-900 ">Applicants</h3>
        </div>
        <div class="flow-root">
            <ul role="list" class="divide-y divide-gray-200 ">
            
                <li class="py-3 sm:py-4">
                    <div class="flex items-center space-x-4 text-blue-600" >
                        <div class="flex-shrink-0">
                            <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-1.jpg" alt="Neil image">
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-gray-900 truncate ">
                                FirstName
                            </p>
                            <p class="text-sm text-gray-500 truncate ">
                                email
                            </p>
                        </div>
                        <div class="inline-flex items-center text-base font-semibold text-gray-900 ">
                            status
                        </div>
                    </div>
                </li> 
                  
            </ul>
          </div>
          </div>
          </div>
        <!-- applicants -->

      </div>
    </div>
  </div>    

@endsection