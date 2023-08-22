@extends('layouts.main')

@section('content')
@include('myevents.sidebar')
<div>
  <div class=" min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white text-black ">
    <div class="h-full ml-14 mt-10 mb-14 md:ml-64">
      <div class="p-4">
        <h1 class="text-2xl font-bold text-center">Event Board</h1>
      </div>
      <div class="grid grid-cols-3 ">
        @foreach ($boards as $index => $board)

        <div class="overflow-auto max-h-[700px] max-w-md mx-5 p-4 bg-white rounded-lg border shadow-md sm:p-8 ">

          <div class="flex justify-between items-center mb-5 
              @if ($index % 3 == 0) bg-red-400
              @elseif ($index % 3 == 1) bg-yellow-400
              @else bg-green-400 @endif
              rounded-lg border shadow-md sm:p-8">
            <h3 class="text-xl center font-bold leading-none text-gray-900">{{ $board->header }}</h3>
            <a href="{{ route('myevents.create-postit', ['board'=> $board,'event' => $myevent, 'myevent_details' => $myevent_details, 'organizer' => $organizer ] )}}" class="font-medium text-blue-800 hover:bg-blue-800 hover:text-white transition-colors duration-300 rounded-full p-3">ADD</a>
          </div>

          @foreach ($board_details as $board_detail)
          @if ($board_detail->board_header_id == $board->id)

          <div role="list" class="p-2 divide-y divide-gray-200">
            <div class="group bg-gray-900 p-6 transition-all duration-300 hover:rotate-1 lg:p-8">
            <form action="{{ route('myevents.delete_postit', ['board' => $board, 'event' => $myevent,'board_detail'=> $board_detail ,'myevent_details' => $myevent_details, 'organizer' => $organizer] )}}"method="POST" class="text-left">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger text-red-400 hover:bg-red-400 hover:text-white transition-colors duration-300 rounded-full p-2">Delete</button>
              </form>
              <form action="{{ route('myevents.updatePostit', ['board' => $board, 'event' => $myevent,'board_detail'=> $board_detail ,'myevent' => $myevent, 'organizer' => $organizer] ) }}" method="POST" class="text-right">
                @csrf
                @method('PUT')
                <button type="submit" name="action" value="shift_left" class="text-gray-50 transition-all duration-300 hover:scale-110 
                  @if ($index % 3 == 0)hover:text-yellow-600
                  @elseif ($index % 3 == 1) hover:text-green-600
                  @else hover:text-red-600 @endif">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6">
                    <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                  </svg>
                </button>
                <button type="submit" name="action" value="shift_right" class="text-gray-50 transition-all duration-300 hover:scale-110 
                  @if ($index % 3 == 0)hover:text-green-600
                  @elseif ($index % 3 == 1) hover:text-red-600
                  @else hover:text-yellow-600 @endif">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6">
                    <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                  </svg>
                </button>
              </form>
              <div>
                <h3 class="text-2xl text-ellipsis font-medium text-gray-200 overflow-hidden">{{ $board_detail->topic }}</h3>
              </div>
              <div class="flex items-center ">
                <div>
                  <span class="text-l text-ellipsis text-gray-300 ">{{ $board_detail->detail }}</span>
                </div>
              </div>
            </div>
          </div>
          @endif
          @endforeach
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>



@endsection