@props(['active' => false])

<a {{ $attributes }}
   class="{{ $active 
       ? 'block py-2 px-3 text-white bg-gray-900 rounded md:bg-gradient-to-r from-purple-500 to-pink-500 md:bg-clip-text md:text-transparent hover:md:bg-gradient-to-l md:text-shadow-purple hover:md:text-shadow-purple md:p-0'  
       : 'block py-2 px-3 text-gray-900 md:text-white rounded hover:bg-gray-100 md:hover:bg-gradient-to-r md:hover:from-purple-500 md:hover:to-pink-500 hover:md:text-shadow-purple md:bg-clip-text md:hover:text-transparent md:p-0 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent'}}"
   aria-current="{{ $active ? 'page' : false }}">
    {{ $slot }}
</a>

