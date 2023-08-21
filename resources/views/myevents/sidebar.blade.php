<div class="absolute flex flex-col top-100 left-100 w-14 hover:w-64 md:w-64 bg-grey-200 h-full text-black transition-all duration-300 border-none z-10 sidebar">
        <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
          <ul class="flex flex-col py-4 space-y-1">

            <li class="px-5 hidden md:block">
              <div class="flex flex-row items-center h-8">
                <div class="text-sm font-light tracking-wide text-gray-400 uppercase">My Event</div>
              </div>
            </li>
            <li>
              <a href="{{ route('myevents.details', ['myevent' => $myevent, 'event' => $myevent, 'organizer' => $organizer]) }}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-indigo-600  text-white-600 hover:text-white border-l-4 border-transparent hover:border-indigo-400 dark:hover:border-gray-800 pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                </span>
                <span class="ml-2 text-sm tracking-wide truncate">Dashboard</span>
              </a>
            </li>
            <li>
              <a href="{{ route('myevents.applicants', ['event' => $myevent,'myevent' => $myevent, 'organizer' => $organizer]) }}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-indigo-600 text-white-600 hover:text-white border-l-4 border-transparent hover:border-indigo-400 dark:hover:border-gray-800 pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                </span>
                <span class="ml-2 text-sm tracking-wide truncate">Applicants</span>
              </a>
            </li>
            <li>
              <a href="{{ route('myevents.boards', ['myevent' => $myevent,'event' => $myevent, 'organizer' => $organizer]) }}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-indigo-600 text-white-600 hover:text-white border-l-4 border-transparent hover:border-indigo-400 dark:hover:border-gray-800 pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M3 8.976C3 4.05476 4.05476 3 8.976 3H15.024C19.9452 3 21 4.05476 21 8.976V15.024C21 19.9452 19.9452 21 15.024 21H8.976C4.05476 21 3 19.9452 3 15.024V8.976Z" stroke="#323232" stroke-width="2"></path> <path d="M12 3V21" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M3 10H12" stroke="#323232" stroke-width="2" stroke-linecap="round"></path> <path d="M12 14H21" stroke="#323232" stroke-width="2" stroke-linecap="round"></path> </g></svg>
                </span>
                <span class="ml-2 text-sm tracking-wide truncate">Event Board</span>
              </a>
            </li>
            <li>
              <a href="{{ route('board.team', ['myevent' => $myevent, 'organizer' => $organizer]) }}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-indigo-600 text-white-600 hover:text-white border-l-4 border-transparent hover:border-indigo-400 dark:hover:border-gray-800 pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M15.6311 7.15517C15.9018 7.05482 16.1945 7 16.5001 7C17.8808 7 19.0001 8.11929 19.0001 9.5C19.0001 10.8807 17.8808 12 16.5001 12C16.1945 12 15.9018 11.9452 15.6311 11.8448" stroke="#323232" stroke-width="2" stroke-linecap="round"></path> <path d="M3 19C3.69137 16.6928 5.46998 16 9.5 16C13.53 16 15.3086 16.6928 16 19" stroke="#323232" stroke-width="2" stroke-linecap="round"></path> <path d="M17 15C19.403 15.095 20.5292 15.6383 21 17" stroke="#323232" stroke-width="2" stroke-linecap="round"></path> <path d="M13 9.5C13 11.433 11.433 13 9.5 13C7.567 13 6 11.433 6 9.5C6 7.567 7.567 6 9.5 6C11.433 6 13 7.567 13 9.5Z" stroke="#323232" stroke-width="2"></path> </g></svg>
                </span>
                <span class="ml-2 text-sm tracking-wide truncate">Team Board</span>
              </a>
            </li>
          </ul>
        </div>
      </div>