@extends('layouts.main')

@section('content')

<div class="absolute min-w-full h-1/3 bg-blue-300">
    <div class="grid justify-items-center pt-10">
        <label class="text-2xl mb-10">
            Create Event
        </label>
    </div>

    <form action="{{ route('myevents.storeEvent') }}" method="POST">
        @csrf
        <div class="inline-flex">
            <div class="bg-white border-4 rounded-xl mx-5 pt-10">
                <div class="bg-white max-h-full w-80 mx-14 shadow-md border-black border flex justify-center items-center rounded-2xl hover:bg-gray-300 h-96">
                    <input type="file" accept="image/*" class="hidden" id="event-picture-input">
                    <label for="event-picture-input" class="cursor-pointer w-full h-full flex flex-col items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 mb-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                        <span class="text-xl">
                            Event Picture
                        </span>
                    </label>
                </div>
                <input class="mt-4 ml-14 shadow-lg bg-green-300 hover:bg-green-400 appearance-none border rounded w-80 py-2 px-3 text-gray-700 leading-tight cursor-pointer" 
                id="createSubmit" type="submit">
            </div>
            
            <div class="bg-white inline-flex border-4 rounded-xl py-10">

                <div class="ml-20">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="eventName">
                        Event Name
                        </label>
                        <input class="shadow appearance-none border rounded w-96 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                        id="eventName" type="text" placeholder="Event Name">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="eventDetail">
                        Event Detail
                        </label>
                        <input class="shadow appearance-none border rounded w-96 h-40 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                        id="eventDetail" type="text" placeholder="Event Detail">
                    </div>        
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="eventDate">
                        Event Date
                        </label>
                        <input class="shadow appearance-none border rounded w-auto py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                        id="eventDate" type="datetime-local" placeholder="Event Date">
                    </div>        
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="eventBudget">
                        Event Budget
                        </label>
                        <input class="shadow appearance-none border rounded w-auto py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                        id="eventBudget" type="number" placeholder="Event Budget">
                    </div>        
{{--                     <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="eventCondition">
                        Event Condition
                        </label>
                        <input class="shadow appearance-none border rounded w-auto py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                        id="eventCondition" type="text" placeholder="Event Condition">
                    </div> --}}
                </div>

                <div class="mx-20">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="address">
                            Address
                        </label>
                        <input class="shadow appearance-none border rounded w-96 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                        id="address" type="text" placeholder="Address">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="province">
                            Province
                        </label>
                        <select class="shadow appearance-none border rounded w-96 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline cursor-pointer" 
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
                        <select class="shadow appearance-none border rounded w-96 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline cursor-pointer" 
                        name="district" id="district">
                            <option value="" disabled selected>Select District</option>
                        </select>
                    </div> 
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="subdistrict">
                            Subdistrict
                        </label>
                        <select class="shadow appearance-none border rounded w-96 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline cursor-pointer" 
                        name="subdistrict" id="subdistrict">
                            <option value="" disabled selected>Select Subdistrict</option>
                        </select>
                    </div>     
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="moreAddressDetail">
                            More Address Detail
                        </label>
                        <input class="shadow appearance-none border rounded w-96 h-20 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                        id="moreAddressDetail" type="text" placeholder="More Address Detail">
                    </div> 
                </div>
            </div>
        </div>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
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