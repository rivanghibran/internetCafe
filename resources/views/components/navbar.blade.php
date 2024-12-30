    {{-- navbar --}}
    <nav class="bg-black bg-opacity-80 dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-700 dark:border-gray-600 drop-shadow">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="img/logo.webp" class="h-10 hover:drop-shadow-md " alt="Logo ">
            <span class=" text-white self-center text-2xl font-semibold whitespace-nowrap dark:text-white hover:md:text-shadow-purple ">Game<span class="bg-gradient-to-r from-purple-500 to-pink-500 bg-clip-text text-transparent hover:bg-gradient-to-l">Zone</span></span>
        </a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <a href="/login" class="text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                Sign in
            </a>
            <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
              <span class="sr-only">Open main menu</span>
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
              </svg>
          </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
          <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            <li>
                <x-navlink href="/" :active="request()->is('/')">Home</x-navlink>
            </li>
            <li>
                <x-navlink href="/about" :active="request()->is('about')">About</x-navlink>
            </li>
            <li>
                <x-navlink href="/promo" :active="request()->is('promo')">Promo</x-navlink>
            </li>
            <li>
                <x-navlink href="/contact" :active="request()->is('contact')">Contact</x-navlink>
            </li>
          </ul>
        </div>
        </div>
      </nav>