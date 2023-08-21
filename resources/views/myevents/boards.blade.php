@extends('layouts.main')

@section('content')
@include('myevents.sidebar')
<div>
  <div class=" min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white text-black ">
    <div class="h-full ml-14 mt-10 mb-14 md:ml-64">
      <div class="p-4">
        <h1 class="text-2xl font-bold text-center">{{ $myevent_details->name }}</h1>
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
            <a href="{{ route('myevents.create-postit', ['board'=> $board,'event' => $myevent, 'myevent_details' => $myevent_details] )}}" class="font-medium text-blue-800 hover:bg-blue-800 hover:text-white transition-colors duration-300 rounded-full p-3">ADD</a>
          </div>

          @foreach ($board_details as $board_detail)
          @if ($board_detail->board_header_id == $board->id)

          <div role="list" class="p-2 divide-y divide-gray-200">
            <div class="group bg-gray-900 p-6 transition-all duration-300 hover:rotate-1 lg:p-8">
              <form action="{{ route('myevents.delete_postit', ['board' => $board, 'event' => $myevent,'board_detail'=> $board_detail ,'myevent_details' => $myevent_details] ) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger text-red-400 hover:bg-red-400 hover:text-white transition-colors duration-300 rounded-full p-2">Delete</button>
              </form>
              <div class="mb-1 text-right">
                <div class="mx-auto flex justify-center" style="margin-block:30px">
                  <form action="{{ route('myevents.updatePostit', ['board' => $board, 'event' => $myevent,'board_detail'=> $board_detail ,'myevent_details' => $myevent_details] ) }}" method="POST">
                    @csrf
                    @method('PUT')
                    @if($index != 2)
                    <button type="submit" name="action" value="shift_right" class="text-gray-50 transition-all duration-300 hover:scale-110 hover:text-red-600">
                      go next
                    </button>
                    @endif
                    
                  </form>
                </div>
              </div>
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