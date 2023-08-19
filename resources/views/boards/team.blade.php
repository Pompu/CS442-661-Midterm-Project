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
              <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-indigo-600 text-white-600 hover:text-white border-l-4 border-transparent hover:border-indigo-400 dark:hover:border-gray-800 pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                </span>
                <span class="ml-2 text-sm tracking-wide truncate">Applicants</span>
              </a>
            </li>
            <li>
              <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-indigo-600 text-white-600 hover:text-white border-l-4 border-transparent hover:border-indigo-400 dark:hover:border-gray-800 pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                </span>
                <span class="ml-2 text-sm tracking-wide truncate">Event Board</span>
              </a>
              <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-indigo-600 text-white-600 hover:text-white border-l-4 border-transparent hover:border-indigo-400 dark:hover:border-gray-800 pr-6">
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
                
              </div>
            </div>
          </div>
          <div class="max-w-2xl mx-5">
            <div class="p-4 max-w-md bg-white rounded-lg border shadow-md sm:p-8" style="flex-grow:1;">
              <div class="flex justify-between items-center mb-4 bg-yellow-400 rounded-lg border shadow-md sm:p-8">
                <h3 class="text-xl font-bold leading-none text-gray-900">Task2</h3>
              </div>
              <div class="board-container overflow-scroll max-h-[800px] ">
                
              </div>
            </div>
          </div>
          <div class="max-w-2xl mx-5">
            <div class="p-4 max-w-md bg-white rounded-lg border shadow-md sm:p-8" style="flex-grow:1;">
              <div class="flex justify-between items-center mb-4 bg-green-400 rounded-lg border shadow-md sm:p-8">
                <h3 class="text-xl font-bold leading-none text-gray-900">Task3</h3>
              </div>
              <div class="board-container overflow-scroll max-h-[800px] ">
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