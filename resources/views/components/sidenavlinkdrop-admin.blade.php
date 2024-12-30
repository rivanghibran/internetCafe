@props(['active' => false])

<a {{ $attributes }}
   class="{{ $active 
       ? 'flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75'  
       : 'flex items-center p-2 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700'}}"
   aria-current="{{ $active ? 'page' : false }}">
    {{ $slot }}
</a>

