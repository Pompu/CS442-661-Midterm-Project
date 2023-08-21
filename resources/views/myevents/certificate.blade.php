@extends('layouts.main')

@section('content')


<form action="{{ route('myevents.uploadImage') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label title="Click to upload" for="button">

        <div class="group/img shadow-md border-black border animate-[fadeIn_2s]">
             <img type="file" name="preview" id="preview" 
                class="w-full h-full object-cover opacity-90 group-hover/img:opacity-100"
                src="#">
        </div>
        <input hidden="" type="file" name="image_path" id="button" onchange="loadFile(event)">
        <div> <x-primary-button>Upload</x-primary-button></div>

    </label>
    </form>




@endsection
<script>
    var loadFile = function(event) {

        var input = event.target;
        var file = input.files[0];
        var type = file.type;

        var output = document.getElementById('preview');


        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>