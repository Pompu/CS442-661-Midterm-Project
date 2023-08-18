@extends('layouts.main')

@section('content')
    <div class="bg-white shadow sm:rounded-lg overflow-hidden max-w-lg mx-auto mt-16">
        <div class="bg-indigo-500 py-2 px-4">
            <h2 class="text-xl font-semibold text-white-800"> Applicant List </h2>
        </div>
        <ul class="divide-y divide-gray-200">
            
            <li class="flex items-center py-4 px-6 hover:bg-gray-50">
                <span class="text-gray-700 text-lg font-medium mr-4">image</span>
                <div class="flex-1">
                    <h3 class="text-lg font-medium text-gray-800">Name</h3>
                    <p class="text-gray-600 text-base">คณะ </p>
                </div>
                <span class="text-gray-400">status</span>
            </li>
            
        </ul>
    </div>
   
@endsection