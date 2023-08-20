@extends('layouts.main')

@section('content')
@include('myevents.sidebar')

<div>
    <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white text-black ">
    <div class = "h-full ml-14 mt-14 mb-10 md:ml-64">
      @foreach ($boards as $board)
          <h1>======={{$board->header}}==========</h1>
          @foreach ($board_details as $board_detail)
            @if($board_detail->board_header_id == $board->id)
              <h2> - {{$board_detail->topic}}</h2>
              <h2>- {{$board_detail->detail}}</h2>
            @endif()
          @endforeach
        @endforeach
        
    </div>
      <div class="h-full ml-14 mt-14 mb-10 md:ml-64">
        <div class="px-10 mt-6">
          <h1 class="text-2xl font-bold text-center">{{$myevent['name']}} Project</h1>
        </div>
        <button class="font-medium text-blue-500 transition-all duration-300 group-hover:text-blue-500/80">ADD POST-IT</button>
        <!-- Board part-->
        
        <div class= "grid grid-cols-3 gap-15">
          <div class="max-w-2xl mx-5">
            <div class="p-4 max-w-md bg-white rounded-lg border shadow-md sm:p-8" style="flex-grow:1;">
              <div class="flex justify-between items-center mb-4 bg-red-400 rounded-lg border shadow-md sm:p-8">
                <h3 class="text-xl font-bold leading-none text-gray-900"></h3>
              </div>
              <div class="board-container overflow-scroll max-h-[800px]">
                
                <div role="list" class="p-2 divide-y divide-gray-200"> 
                  <div class="group bg-gray-900 p-4 transition-all duration-300 hover:rotate-1 lg:p-8">
                    <div class="mb-3 text-right">
                      <button class="text-gray-50 transition-all duration-300 hover:scale-110 hover:text-yellow-600">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6">
                          <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                        </svg>
                      </button>
                      <button class="text-gray-50 transition-all duration-300 hover:scale-110 hover:text-green-600">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6">
                          <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                        </svg>
                      </button>
                    </div>
                    <div class="my-4">
                      <h3 class="text-2xl font-medium text-gray-200"> </h3>
                    </div>
                    <div class="flex items-center gap-x-2">
                      <div>
                        <span class="text-xs text-gray-300"></span>
                      </div>
                    </div>
                    <div class="flex items-center justify-between">
                      <span class="text-sm font-medium text-gray-50"></span>
                      
                      <a class="font-medium text-blue-500 transition-all duration-300 group-hover:text-blue-500/80"></a>
                    </div>
                  </div>
                </div>
                       
      </div>    
    </div> 
  </div>  
</div>   
@endsection 
