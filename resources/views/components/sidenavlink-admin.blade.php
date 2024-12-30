@props(['active' => false])

<a {{ $attributes }}
   class="{{ $active 
       ? 'flex items-center p-2 w-full text-base font-medium text-gray-900 bg-gray-200 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700'  
       : 'flex items-center p-2 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700'}}"
   aria-current="{{ $active ? 'page' : false }}">
    {{ $slot }}
</a>

