@extends('layouts.main')

@section('content')

<div class="grid justify-items-center pt-10">
    <label class="text-2xl font-semibold">Create New Event</label>
    <div class="create-container">
        <form action="{{ route('myevents.storeEvent') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="inline-flex">
            <div class="bg-white border-4 rounded-xl pt-10">
                <div class="max-h-full w-60 mx-14 shadow-md border-grey-300 border flex flex-col justify-center items-center rounded-2xl hover:bg-gray-300 h-96" id="imageContainer">
                    <input type="file" accept="image/*" class="hidden" id="image" name="image">
                    <label for="image" class="cursor-pointer w-full h-full flex flex-col items-center justify-center text-l font-bold" id="label">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 mb-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                        Event Picture
                    </label>
                    <img id="imagePreview" class="hidden w-full h-full object-cover rounded-2xl">
                </div>
                <input class="mt-4 mx-14 shadow-lg bg-green-300 hover:bg-green-400 appearance-none border rounded w-60 py-2 px-3 text-gray-700 leading-tight cursor-pointer" 
                    id="createSubmit" type="submit">
            </div>

            <div class="ml-20">
                <div class="bg-white inline-flex border-4 rounded-xl py-10">
                    <div class="ml-20">
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="eventname">
                            Event Name
                            </label>
                            <input class="shadow appearance-none border-gray-300 rounded w-80 py-2 px-3 text-gray-700 leading-tight focus:ring-violet-600" 
                            id="eventname" name="eventname" type="text" placeholder="Event Name">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="eventdetail">
                            Event Detail
                            </label>
                            <input class="shadow appearance-none border-gray-300 rounded w-80 h-40 py-2 px-3 text-gray-700 leading-tight focus:ring-violet-600" 
                            id="eventdetail" name="eventdetail" type="text" placeholder="Event Detail">
                        </div>        
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="eventdate">
                            Event Date
                            </label>
                            <input class="shadow appearance-none border-gray-300 rounded w-80 py-2 px-3 text-gray-700 leading-tight focus:ring-violet-600" 
                            id="eventdate" name="eventdate" type="datetime-local" placeholder="Event Date">
                        </div>        
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="eventbudget">
                            Event Budget
                            </label>
                            <input class="shadow appearance-none border-gray-300 rounded w-80 py-2 px-3 text-gray-700 leading-tight focus:ring-violet-600" 
                            id="eventbudget" name="eventbudget" type="number" placeholder="Event Budget">
                        </div>        
                    </div>

                    <div class="ml-40 mr-20">
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="eventaddress">
                                Address
                            </label>
                            <input class="shadow appearance-none border-gray-300 rounded w-80 py-2 px-3 text-gray-700 leading-tight focus:ring-violet-600" 
                            id="eventaddress" name="eventaddress" type="text" placeholder="Address">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="province">
                                Province
                            </label>
                            <select class="shadow appearance-none border-gray-300 rounded w-80 py-2 px-3 text-gray-700 leading-tight focus:ring-violet-600 cursor-pointer" 
                            name="province" id="province">
                            <option value="" disabled selected>Select Province</option>
                                @foreach ($provinces as $province)
                                <option value="{{ $province->id }}">{{ $province->name }}</option>
                                @endforeach
                            </select>
                        </div>   
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="district">
                                District
                            </label>
                            <select class="shadow appearance-none border-gray-300 rounded w-80 py-2 px-3 text-gray-700 leading-tight focus:ring-violet-600 cursor-pointer" 
                            name="district" id="district">
                                <option value="" disabled selected>Select District</option>
                            </select>
                        </div> 
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="subdistrict">
                                Subdistrict
                            </label>
                            <select class="shadow appearance-none border-gray-300 rounded w-80 py-2 px-3 text-gray-700 leading-tight focus:ring-violet-600 cursor-pointer" 
                            name="subdistrict" id="subdistrict">
                                <option value="" disabled selected>Select Subdistrict</option>
                            </select>
                        </div>     
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="addressdetail">
                                Address Detail
                            </label>
                            <input class="shadow appearance-none border-gray-300 rounded w-80 py-2 h-20 px-3 text-gray-700 leading-tight focus:ring-violet-600" 
                            id="addressdetail" name="addressdetail" type="text" placeholder="Address Detail">
                        </div> 
                    </div>
                </div>
            </div>
            </div>
        </form>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
     const imageInput = document.getElementById('image');
    const imageContainer = document.getElementById('imageContainer');
    const imagePreview = document.getElementById('imagePreview');
    const label = document.getElementById('label');

    imageInput.addEventListener('change', function (event) {
        const selectedFile = event.target.files[0];

        if (selectedFile) {
            const imageUrl = URL.createObjectURL(selectedFile);
            imagePreview.src = imageUrl;
            imagePreview.classList.remove('hidden');
            label.classList.add('hidden');
            imageInput.classList.add('hidden');
        }
    });

    imageContainer.addEventListener('click', function () {
        if (!imagePreview.classList.contains('hidden')) {
            // Clicking on the image again will trigger a new image upload
            imageInput.click();
        }
    });

    $(document).ready(function() {
        $('#province').on('change', function() {
            var selectedProvinceId = $(this).val();
            
            $.ajax({
                url: '{{ route('myevents.getDistrict') }}',
                type: 'POST',
                data: {
                    province_id: selectedProvinceId,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    var districtsSelect = $('#district');
                    var subdistrictSelect = $('#subdistrict');
                    subdistrictSelect.empty();
                    districtsSelect.empty();

                    districtsSelect.append($('<option disabled selected></option>').val('').text('Select District'));
                    subdistrictSelect.append($('<option disabled selected></option>').val('').text('Select Subdistrict'));

                    $.each(response.districts, function(key, district) {
                        districtsSelect.append($('<option></option>').val(district.id).text(district.name));
                    });

                }
            });
        });
        $('#district').on('change', function() {
            var selectedDistrictId = $(this).val();

            $.ajax({
                url: '{{ route('myevents.getSubdistrict') }}',
                type: 'POST',
                data: {
                    district_id: selectedDistrictId,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    var subdistrictSelect = $('#subdistrict');
                    subdistrictSelect.empty();
                    
                    subdistrictSelect.append($('<option disabled selected></option>').val('').text('Select Subdistrict'));

                    $.each(response.subdistricts, function(key, subdistrict) {
                        subdistrictSelect.append($('<option></option>').val(subdistrict.id).text(subdistrict.name));
                    });

                }
            });
        });
    });
</script>

@endsection