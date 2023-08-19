<!-- component -->
<div class="flex items-center justify-center p-12">
    <!-- Author: FormBold Team -->
    <!-- Learn More: https://formbold.com -->
    <div class="mx-auto w-full max-w-[550px]">
        <form action="https://formbold.com/s/FORM_ID" method="POST">
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
            <div class="w-full px-3 sm:w-1/2">
                <div class="mb-5">
                    <label for="about" class="block text-sm font-medium leading-6 text-gray-900">About</label>
                </div>
            </div>
            <div class="mt-2">
                <textarea id="about" name="about" rows="3" value="{{ $user->about }}" readonly class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
            </div>

            <div class="flex mb-4"></div>
            <div class="w-full px-3 sm:w-1/2">
                <div class="mb-5">
                    <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Reason *</label>
                </div>
            </div>
            <div class="mt-2">
                <textarea id="about" name="about" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
            </div>
            <p class="mt-3 text-sm leading-6 text-gray-600">Tell me why you wanna join us.</p>


            <div class="flex mb-4"></div>
            <button class=" center hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                Submit
            </button>
        </form>

    </div>
</div>