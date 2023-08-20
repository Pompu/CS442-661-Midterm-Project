<nav class="relative px-4 py-2 flex justify-between items-center bg-white ">

<a href="/events" class="flex items-center">
<svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#8B5CF6" stroke-width="0.00024000000000000003"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M16.2857 20C19.4416 20 22 17.4717 22 14.3529C22 11.8811 20.393 9.78024 18.1551 9.01498C17.8371 6.19371 15.4159 4 12.4762 4C9.32028 4 6.7619 6.52827 6.7619 9.64706C6.7619 10.3369 6.88706 10.9978 7.11616 11.6089C6.8475 11.5567 6.56983 11.5294 6.28571 11.5294C3.91878 11.5294 2 13.4256 2 15.7647C2 18.1038 3.91878 20 6.28571 20H16.2857Z" fill="#8B5CF6"></path> </g></svg>
            <span class="self-center text-xl font-semibold whitespace-nowrap"> EVENT</span>
        </a>


  <ul class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">

    <li>
      <div class=" relative mx-auto text-gray-600">
        <input class="border border-gray-300 placeholder-current h-10 px-5 pr-16  rounded-lg text-sm focus:outline-none focus:ring-violet-600  " type="search" name="search" placeholder="Search">

        <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
          <svg class="text-gray-600  h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
            <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
          </svg>
        </button>

      </div>
    </li>
  </ul>


  <div class="hidden lg:flex">
    <a class=" py-1.5 px-2 m-1 text-center text-sm hover:text-violet-600" href="/">
      Home
    </a>
    @if(Auth::check())
    @include('layouts.subviews.dropdown')

    @else
    <a href="/login">
      <button class=" py-1.5 px-3 m-1 text-center bg-violet-700 border rounded-md text-white  hover:bg-violet-500 hover:text-gray-100 dark:text-gray-200 dark:bg-violet-700 hidden lg:block">
        Sign in
      </button>
    </a>
    <a class=" py-1.5 px-3 m-1 text-center bg-gray-100 border border-gray-300 rounded-md text-black  hover:bg-gray-100 dark:text-gray-300 dark:bg-gray-700 hidden lg:inline-block " href="/register">
      Register
    </a>
    @endif










  </div>

</nav>
