@extends('layouts.main')

@section('content')
<style>
  .dragging {
    opacity: 0.6;
  }
</style>

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
              <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-indigo-600  text-white-600 hover:text-white border-l-4 border-transparent hover:border-indigo-400 dark:hover:border-gray-800 pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                </span>
                <span class="ml-2 text-sm tracking-wide truncate">Dashboard</span>
              </a>
            </li>
            <li>
              <a href="/myevents/applicants" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-indigo-600 text-white-600 hover:text-white border-l-4 border-transparent hover:border-indigo-400 dark:hover:border-gray-800 pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                </span>
                <span class="ml-2 text-sm tracking-wide truncate">Applicants </span>
              </a>
            </li>
            <li>
              <a href="/boards" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-indigo-600 text-white-600 hover:text-white border-l-4 border-transparent hover:border-indigo-400 dark:hover:border-gray-800 pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                </span>
                <span class="ml-2 text-sm tracking-wide truncate">Event Board</span>
              </a>
              <a href="/boards/teams" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-indigo-600 text-white-600 hover:text-white border-l-4 border-transparent hover:border-indigo-400 dark:hover:border-gray-800 pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                </span>
                <span class="ml-2 text-sm tracking-wide truncate">Team Board</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <!-- ./Sidebar -->
      <div class="h-full ml-14 mt-14 mb-10 md:ml-64">
        <div class="px-10 mt-6">
          <h1 class="text-2xl font-bold text-center">Team Project Board</h1>
        </div>

        
        <!-- Board part-->
        <div class= "grid grid-cols-3 gap-15">
          <div class="max-w-2xl mx-5">
            <div class="p-4 max-w-md bg-white rounded-lg border shadow-md sm:p-8" style="flex-grow:1;">
              <div class="flex justify-between items-center mb-4 bg-red-400 rounded-lg border shadow-md sm:p-8">
                <h3 class="text-xl font-bold leading-none text-gray-900">Task1</h3>
              </div>
              <div class="board-container overflow-scroll max-h-[800px]">
                @foreach ($boards as $board)
                <div role="list" class="p-2 divide-y divide-gray-200"  draggable="true"> 
                  <div class="group bg-gray-900 p-4 transition-all duration-300 hover:rotate-1 lg:p-8">
                    <div class="mb-3 text-right">
                      <button class="text-gray-50 transition-all duration-300 hover:scale-110 hover:text-red-600">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6">
                          <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                        </svg>
                      </button>
                    </div>
                    <div class="my-4">
                      <h3 class="text-2xl font-medium text-gray-200">{{ $board->topic }}</h3>
                    </div>
                    <div class="flex items-center gap-x-2">
                      <div>
                        <span class="text-xs text-gray-300">{{ $board->detail }}</span>
                      </div>
                    </div>
                    <div class="flex items-center justify-between">
                      <span class="text-sm font-medium text-gray-50"></span>
                      <a class="font-medium text-blue-500 transition-all duration-300 group-hover:text-blue-500/80">Location Team</a>
                    </div>
                  </div>
                </div>
                @endforeach   
              </div>
            </div>
          </div>
          <div class="max-w-2xl mx-5">
            <div class="p-4 max-w-md bg-white rounded-lg border shadow-md sm:p-8" style="flex-grow:1;">
              <div class="flex justify-between items-center mb-4 bg-yellow-400 rounded-lg border shadow-md sm:p-8">
                <h3 class="text-xl font-bold leading-none text-gray-900">Task2</h3>
              </div>
              <div class="board-container overflow-scroll max-h-[800px] ">
                @foreach ($boards as $board)
                <div role="list" class="p-2 divide-y divide-gray-200" draggable="true"> 
                  <div class="group bg-gray-900 p-4 transition-all duration-300 hover:rotate-1 lg:p-8">
                    <div class="mb-3 text-right">
                      <button class="text-gray-50 transition-all duration-300 hover:scale-110 hover:text-red-600">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6">
                          <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                        </svg>
                      </button>
                    </div>
                    <div class="my-4">
                      <h3 class="text-2xl font-medium text-gray-200">{{ $board->topic }}</h3>
                    </div>
                    <div class="flex items-center gap-x-2">
                      <div>
                        <span class="text-xs text-gray-300">{{ $board->detail }}</span>
                      </div>
                    </div>
                    <div class="flex items-center justify-between">
                      <span class="text-sm font-medium text-gray-50"></span>
                      <a class="font-medium text-blue-500 transition-all duration-300 group-hover:text-blue-500/80">Location Team</a>
                    </div>
                  </div>
                </div>
                @endforeach  
              </div>
            </div>
          </div>
          <div class="max-w-2xl mx-5">
            <div class="p-4 max-w-md bg-white rounded-lg border shadow-md sm:p-8" style="flex-grow:1;">
              <div class="flex justify-between items-center mb-4 bg-green-400 rounded-lg border shadow-md sm:p-8">
                <h3 class="text-xl font-bold leading-none text-gray-900">Task3</h3>
              </div>
              <div class="board-container overflow-scroll max-h-[800px] ">
                @foreach ($boards as $board)
                <div role="list" class="p-2 divide-y divide-gray-200" draggable="true"> 
                  <div class="group bg-gray-900 p-4 transition-all duration-300 hover:rotate-1 lg:p-8">
                    <div class="mb-3 text-right">
                      <button class="text-gray-50 transition-all duration-300 hover:scale-110 hover:text-red-600">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6">
                          <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                        </svg>
                      </button>
                    </div>
                    <div class="my-4">
                      <h3 class="text-2xl font-medium text-gray-200">{{ $board->topic }}</h3>
                    </div>
                    <div class="flex items-center gap-x-2">
                      <div>
                        <span class="text-xs text-gray-300">{{ $board->detail }}</span>
                      </div>
                    </div>
                    <div class="flex items-center justify-between">
                      <span class="text-sm font-medium text-gray-50"></span>
                      <a class="font-medium text-blue-500 transition-all duration-300 group-hover:text-blue-500/80">Location Team</a>
                    </div>
                  </div>
                </div>
                @endforeach  
              </div>
            </div>
          </div>
        </div>
        
      <!-- applicants -->  
      </div>    
    </div>
  </div> 
</div>   
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const boardContainers = document.querySelectorAll('.board-container');

    let draggedItem = null;

    boardContainers.forEach(container => {
      container.addEventListener('dragstart', event => {
        draggedItem = event.currentTarget;
        event.dataTransfer.setData('text/plain', '');
        event.currentTarget.classList.add('dragging');
      });

      container.addEventListener('dragend', event => {
        draggedItem = null;
        event.currentTarget.classList.remove('dragging');
      });

      container.addEventListener('dragover', event => {
        event.preventDefault();
      });

      container.addEventListener('drop', event => {
        event.preventDefault();
        if (draggedItem) {
          const targetContainer = event.currentTarget;
          targetContainer.appendChild(draggedItem);
        }
      });
    });
  });
</script>
@endsection