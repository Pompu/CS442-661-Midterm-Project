@extends('layouts.main')
@section('content')
<head>
     <link rel="stylesheet" href="{{ asset('css/app.css') }}">
 </head>
<div class="container">
    <div class="mx-auto grid grid-cols-2 gap-10 ">
        <div class="bg-white p-10 rounded-lg shadow ">
                    <label for="name" class="block mb-2 font-bold text-gray-700">Organizer Name</label>
                    <!-- <span>{{$organizer->name}}</span>  -->
                
                    @foreach($members as $member)
                    {{$member}}
                    @endforeach
                    
                    <label for="name" class="block mb-2 font-bold text-gray-700">Add your member</label>
                    <div class="relative mb-6">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z"/>
                                <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z"/>
                            </svg>
                        </div>
                        <div class="relative w-full">
                        <input type="text" id="input-group-1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  :bg-gray-700 " placeholder="name@flowbite.com">
                        <form action="{{ route('myorgs.orgs-member')}}" method="POST">
                        @csrf
                        <button type="submit" class="absolute top-0 right-0 p-2.5 h-full text-sm font-medium text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 "><svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                        </button>
                        </form>
                        </div>
                    </div>
        </div>
        <div class="bg-white p-10 rounded-lg shadow ">
            <label for="name" class="block mb-2 font-bold text-gray-700">Member list </label>   
        </div>
    </div>
</div>
@endsection