@extends('layouts.main')

@section('content')
   
<div class="grid justify-items-center">
    <label class="text-2xl">
        Certificates
    </label>
</div>
{{-- loop --}}
<div class="mt-10 mx-20 grid gap-x-10 gap-y-10 grid-cols-3">
    <div class="group/img shadow-md border-black border animate-[fadeIn_2s]">
        <img class="w-full h-full object-cover opacity-90 group-hover/img:opacity-100"
        src="https://cdn.discordapp.com/attachments/982119215723053096/1142161915104202932/B1ZIgijJVCiOAAAAAElFTkSuQmCC.png">
    </div>
    <div class="group/img shadow-md border-black border animate-[fadeIn_2s]">
        <img class="w-full h-full object-cover opacity-90 group-hover/img:opacity-100"
        src="https://cdn.discordapp.com/attachments/982119215723053096/1142161915343274024/2Q.png">
    </div>
    <div class="group/img shadow-md border-black border animate-[fadeIn_2s]">
        <img class="w-full h-full object-cover opacity-90 group-hover/img:opacity-100"
        src="https://cdn.discordapp.com/attachments/982119215723053096/1142161915590750229/Z.png">
    </div>
    <div class="group/img shadow-md border-black border animate-[fadeIn_2s]">
        <img class="w-full h-full object-cover opacity-90 group-hover/img:opacity-100"
        src="https://cdn.discordapp.com/attachments/982119215723053096/1142161915813040209/AG8qgYkXnKT2AAAAAElFTkSuQmCC.png">
    </div>
</div>


@endsection