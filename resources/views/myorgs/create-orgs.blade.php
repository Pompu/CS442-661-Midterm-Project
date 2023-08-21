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
                    <input type="text" id="name" name="name" placeholder="Insert name" class="border border-gray-300 shadow p-3 w-full rounded-lg mb-">
                </div>

                <button type="submit" class="block w-full bg-teal-500 text-white font-bold p-4 rounded-lg">
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