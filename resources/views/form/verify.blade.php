<x-app-layout>
    <div class=" items-center justify-center p-12">

        @include('form.components.event')
        <div class="flex mb-10"></div>
        <p class=" text-center  text-gray-900 text-4xl font-medium mb-1">Applied Event </p>
        <!-- component -->
        <div class="flex items-center justify-center p-12">
            <!-- Author: FormBold Team -->
            <!-- Learn More: https://formbold.com -->
            <div class="mx-auto w-full max-w-[550px]">
                <svg class="h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd" />

                </svg>

                <div class="flex mb-10"></div>
                <div class="-mx-3 flex items-center justify-center">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="sm:col-span-3">
                            <x-input-label for="name" :value="__('First name')" />
                            <div class="mt-2">
                                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" readonly value=""  />
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="sm:col-span-3">
                            <x-input-label for="name" :value="__('Last name')" />
                            <div class="mt-2">
                                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" readonly value=""  />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex mb-4"></div>
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" readonly value=""  />

                </div>

                <div class="flex mb-4"></div>
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label for="about" class="block text-sm font-medium leading-6 text-gray-900">About</label>
                    </div>
                </div>
                <div class="mt-2">
                    <textarea id="about" name="about" rows="3" value="" readonly class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                </div>

                <div class="flex mb-4"></div>
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Reason</label>
                    </div>
                </div>
                <div class="mt-2">
                    <textarea id="about" name="about" rows="3" readonly class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                </div>
                


                <div class="flex mb-4"></div>
                <button class="  hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                    Accept
                </button>
                <button class="  hover:shadow-form rounded-md bg-red-300 py-3 px-8 text-center text-base font-semibold text-white outline-none">
                    Reject
                </button>


            </div>
        </div>



    </div>
</x-app-layout>