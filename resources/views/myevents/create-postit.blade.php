@extends('layouts.main')
@section('content')
<head>
     <link rel="stylesheet" href="{{ asset('css/app.css') }}">
 </head>
<div class="container">
    <div class="w-full">
        <div class="bg-white p-10 rounded-lg shadow md:w-3/4 mx-auto lg:w-1/2">
            <form action="{{ route('myevents.storePostit',['board' => $board])}}" method="POST">
                @csrf
                <h1>{{$board}}</h1>
                <h1>{{$board_details}}</h1>
                <div class="mb-5">
                    <label for="name" class="block mb-2 font-bold text-gray-700">Topic</label>
                    <input type="text" id="board_detail_topic" name="board_detail_topic" placeholder="Insert topic" class="border border-gray-300 shadow p-3 w-full rounded-lg mb-">
                </div>
                <div class="mb-5">
                    <label for="name" class="block mb-2 font-bold text-gray-700">Detail</label>
                    <input type="text" id="board_detail_details" name="board_detail_details" placeholder="Insert detail" class="border border-gray-300 shadow p-3 w-full rounded-lg mb-">
                </div>

                <button type="submit" class="block w-full bg-teal-500 text-white font-bold p-4 rounded-lg">
                    Submit</button>
            </form>
        </div>
    </div>
</div>