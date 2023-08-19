@extends('layouts.main')
@section('content')

<div class="container mx-auto w-11/12 md:w-2/3 max-w-lg">
        <div class=" py-8 px-5 md:px-10 bg-white dark:bg-gray-800 dark:border-gray-700 shadow-md rounded border border-gray-400">
                <div class="w-full flex justify-center text-gray-600 mb-3">
                        <img src="{{ $event->image_path }}" alt="{{ $event->name }}">

                </div>

                <h1 class=" flex justify-center text-gray-800 dark:text-white  font-lg font-bold  leading-tight mb-4"> Apply </h1>
                <h2 class=" flex justify-center text-gray-800 dark:text-white  font-lg font-bold  leading-tight mb-4">{{ $event->name }}</h2>

                <div>
                      <!-- component -->
<div>
    <!-- Author: FormBold Team -->
    <!-- Learn More: https://formbold.com -->
    <div class="mx-auto w-full max-w-[550px]">
        <form action="{{ route('application.store' , ['event' => $event])  }}" method="POST">
            @csrf
            <div class="-mx-3 flex">
                <div class="w-full px-3 sm:w-1/2">
                    <div class="sm:col-span-3">
                        <x-input-label for="name" :value="__('First name')" />
                        <div class="mt-2">
                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" readonly value="{{ $user->name}}" required autofocus autocomplete="name" />
                        </div>
                    </div>
                </div>
                <div class="w-full px-3 sm:w-1/2">
                    <div class="sm:col-span-3">
                        <x-input-label for="name" :value="__('Last name')" />
                        <div class="mt-2">
                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" readonly value="{{ $user->name}}" required autofocus autocomplete="name" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex mb-4"></div>
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" readonly value="{{ $user->email }}" required autocomplete="username" />
                <x-input-error class="mt-2" :messages="$errors->get('email')" />
            </div>
            
            <div class="flex mb-4"></div>
            <div class="flex justify-center">
                <button type="submit" class=" hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                    Submit
                </button>

                <a href="javascript:history.back()" class=" hover:shadow-form rounded-md bg-grey-100 py-3 px-8 text-center text-base font-semibold text-white outline-none">
                    Cancel
                </a>
            </div>
        </form>

    </div>
</div>
                </div>




        </div>
</div>


@endsection('content')