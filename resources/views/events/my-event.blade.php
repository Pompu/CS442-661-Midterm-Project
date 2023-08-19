@extends('layouts.main')

@section('content')
   
<div class="grid justify-items-center">
    <label class="text-2xl">
        My Events
    </label>
</div>

<div class="mt-10 mx-20 grid gap-x-10 gap-y-10 grid-cols-3">
    {{-- loop  --}}
    <div class="group/img shadow-md border-black border animate-[fadeIn_2s] rounded-2xl h-96 mx-auto">
        <img class="max-h-full max-w-full opacity-90 group-hover/img:opacity-100 rounded-2xl"
        src="https://cdn.discordapp.com/attachments/982119215723053096/1142118215275778138/IMG_2916.jpg">
    </div>
    <div class="group/img shadow-md border-black border animate-[fadeIn_2s] rounded-2xl h-96 mx-auto">
        <img class="max-h-full max-w-full opacity-90 group-hover/img:opacity-100 rounded-2xl"
        src="https://cdn.discordapp.com/attachments/982119215723053096/1142118215275778138/IMG_2916.jpg">
    </div>
    <div class="group/img shadow-md border-black border animate-[fadeIn_2s] rounded-2xl h-96 mx-auto">
        <img class="max-h-full max-w-full opacity-90 group-hover/img:opacity-100 rounded-2xl"
        src="https://cdn.discordapp.com/attachments/982119215723053096/1142118215275778138/IMG_2916.jpg">
    </div>

    <div class="max-h-full max-w-full mx-14 shadow-md border-black border flex justify-center items-center rounded-2xl hover:bg-gray-300 h-96">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
        </svg>
        <p class="text-xl">
            Create Event
        </p>
    </div>
</div>



@endsection