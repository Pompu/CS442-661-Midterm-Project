@extends('layouts.main')
@section('content')
<head>
     <link rel="stylesheet" href="{{ asset('css/app.css') }}">
 </head>
<div class="container">
    <div class="w-full">
        <div class="bg-white p-10 rounded-lg shadow md:w-3/4 mx-auto lg:w-1/2">
            <form action="{{ route('myorgs.storeOrgs') }}" method="POST">
                @csrf
    
                <div class="mb-5">
                    <label for="name" class="block mb-2 font-bold text-gray-700">Organizer Name</label>
                    <input type="text" id="name" name="name" placeholder="Insert name" class="border border-gray-300 shadow p-3 w-full rounded mb- focus:ring-indigo-600">
                </div>

                <button type="submit" class="shadow-lg bg-teal-500 hover:bg-teal-400 appearance-none border rounded w-full p-4 text-gray-700 text-sm font-bold leading-tight cursor-pointer">
                    Submit</button>
            </form>
        </div>
    </div>
</div>

<!-- <script>
    document.addEventListener("DOMContentLoaded",function(){
        const add=document.getElementById('addinput')
        const addcontainer=document.getElementById('create-container')
        let count=1
        add.addEventListener('click',function(){
            count++
            const row = document.createElement('div')
            row.className = ""
            row.innerHTML = `<input type="name">`
            addcontainer.appendChild(row)
        })
    })
</script> -->
@endsection