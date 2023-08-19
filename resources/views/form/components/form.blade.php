<!-- component -->
<div class="flex items-center justify-center p-12">
    <!-- Author: FormBold Team -->
    <!-- Learn More: https://formbold.com -->
    <div class="mx-auto w-full max-w-[550px]">
        <form action="" method="POST">
            <div class="-mx-3 flex items-center justify-center">
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
           
            <div class="mb-6">
                <label for="large-input" class="block text-sm font-medium leading-6 text-gray-900">Reason</label>
                <input type="text" id="large-input" class="block w-full rounded-md border-0 py 10 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                <p class="mt-3 text-sm leading-6 text-gray-600">Tell me why do you wannt to join us.</p>
            </div>
           


            <div class="flex mb-4"></div>
            <button class=" hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                Submit
            </button>
        </form>

    </div>
</div>