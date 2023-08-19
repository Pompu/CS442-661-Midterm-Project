@extends('layouts.main')

@section('content')
   
<div class="grid justify-items-center">
    <div class="lilne">
        <label class="inline text-yellow-500 text-xl mx-3">
            waiting
        </label>
        <label>|</label>
        <label class="inline text-green-500 text-xl mx-3">
            accept
        </label>
        <label>|</label>
        <label class="inline text-red-500 text-xl mx-3">
            eject
        </label>
    </div>
</div>
{{-- loop --}}
<div class="mt-10 mx-20 grid gap-x-10 gap-y-10 grid-cols-3">
    <div class="group/img flex overflow-hidden shadow-md border-black rounded-2xl border bg-white h-64 animate-[fadeIn_2s]">
        <div class="flex-1 relative overflow-hidden">
            <img class="max-h-full max-w-full transition-opacity opacity-90 group-hover/img:opacity-100" 
            src="https://cdn.discordapp.com/attachments/982119215723053096/1142118214520807434/IMG_2918.jpg">
        </div>
        <div class="w-1/2 p-3">
            <p class="text-center text-xl mb-4 text-green-500">
                [Event Name]
            </p>
            <p class="mb-2">
                Date : 23/11/23 
            </p>
            <p class="mb-2">
                Time : 07:00 PM
            </p>
            <p class="break-words">
                Place : ..................................................................................
            </p>
        </div>
    </div>
    <div class="group/img flex overflow-hidden shadow-md border-black rounded-2xl border bg-white h-64 animate-[fadeIn_2s]">
        <div class="flex-1 relative overflow-hidden">
            <img class="max-h-full max-w-full transition-opacity opacity-90 group-hover/img:opacity-100" 
            src="https://cdn.discordapp.com/attachments/982119215723053096/1142118214919274497/IMG_2917.jpg">
        </div>
        <div class="w-1/2 p-3">
            <p class="text-center text-xl mb-4 text-yellow-500">
                [Event Name]
            </p>
            <p class="mb-2">
                Date : 23/11/23 
            </p>
            <p class="mb-2">
                Time : 07:00 PM
            </p>
            <p class="break-words">
                Place : ..................................................................................
            </p>
        </div>
    </div>
    <div class="group/img flex overflow-hidden shadow-md border-black rounded-2xl border bg-white h-64 animate-[fadeIn_2s]">
        <div class="flex-1 relative overflow-hidden">
            <img class="max-h-full max-w-full transition-opacity opacity-90 group-hover/img:opacity-100" 
            src="https://cdn.discordapp.com/attachments/982119215723053096/1142118214520807434/IMG_2918.jpg">
        </div>
        <div class="w-1/2 p-3">
            <p class="text-center text-xl mb-4 text-red-500">
                [Event Name]
            </p>
            <p class="mb-2">
                Date : 23/11/23 
            </p>
            <p class="mb-2">
                Time : 07:00 PM
            </p>
            <p class="break-words">
                Place : ..................................................................................
            </p>
        </div>
    </div>
    <div class="group/img flex overflow-hidden shadow-md border-black rounded-2xl border bg-white h-64 animate-[fadeIn_2s]">
        <div class="flex-1 relative overflow-hidden">
            <img class="max-h-full max-w-full transition-opacity opacity-90 group-hover/img:opacity-100" 
            src="https://cdn.discordapp.com/attachments/982119215723053096/1142118214919274497/IMG_2917.jpg">
        </div>
        <div class="w-1/2 p-3">
            <p class="text-center text-xl mb-4 text-green-500">
                [Event Name]
            </p>
            <p class="mb-2">
                Date : 23/11/23 
            </p>
            <p class="mb-2">
                Time : 07:00 PM
            </p>
            <p class="break-words">
                Place : ..................................................................................
            </p>
        </div>
    </div>
    <div class="group/img flex overflow-hidden shadow-md border-black rounded-2xl border bg-white h-64 animate-[fadeIn_2s]">
        <div class="flex-1 relative overflow-hidden">
            <img class="max-h-full max-w-full transition-opacity opacity-90 group-hover/img:opacity-100" 
            src="https://cdn.discordapp.com/attachments/982119215723053096/1142118215275778138/IMG_2916.jpg">
        </div>
        <div class="w-1/2 p-3">
            <p class="text-center text-xl mb-4 text-yellow-500">
                [Event Name]
            </p>
            <p class="mb-2">
                Date : 23/11/23 
            </p>
            <p class="mb-2">
                Time : 07:00 PM
            </p>
            <p class="break-words">
                Place : ..................................................................................
            </p>
        </div>
    </div>
</div>

@endsection