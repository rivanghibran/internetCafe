{{-- <div id="carousel" class="relative w-full mt-12 mb-12 animate-fadeIn">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden mx-44 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
        <!-- Item 1 -->
        <div id="carousel-item-1" class="hidden animate-slide-in-left duration-700 ease-in-out z-10">
            <img
                src="img/home.jpg"
                class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2"
                alt="Image 1"
            />
        </div>
        <!-- Item 2 -->
        <div id="carousel-item-2" class="hidden animate-slide-in-left duration-700 ease-in-out z-10">
            <img
                src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg"
                class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2"
                alt="Image 2"
            />
        </div>
        <!-- Item 3 -->
        <div id="carousel-item-3" class="hidden animate-slide-in-left duration-700 ease-in-out z-10">
            <img
                src="img/p2.jpg"
                class="absolute left-1/2 top-3/4 block w-full -translate-x-1/2 -translate-y-1/2"
                alt="Image 3"
            />
        </div>
        <!-- Item 4 -->
        <div id="carousel-item-4" class="hidden animate-slide-in-left duration-700 ease-in-out z-10">
            <img
                src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg"
                class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2"
                alt="Image 4"
            />
        </div>
    </div>

    <!-- Slider indicators -->
    <div class="absolute bottom-5 left-1/2 z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse">
        <button
            id="carousel-indicator-1"
            type="button"
            class="h-3 w-3 rounded-full bg-gray-500"
            aria-current="false"
            aria-label="Slide 1"
        ></button>
        <button
            id="carousel-indicator-2"
            type="button"
            class="h-3 w-3 rounded-full bg-gray-500"
            aria-current="false"
            aria-label="Slide 2"
        ></button>
        <button
            id="carousel-indicator-3"
            type="button"
            class="h-3 w-3 rounded-full bg-gray-500"
            aria-current="false"
            aria-label="Slide 3"
        ></button>
        <button
            id="carousel-indicator-4"
            type="button"
            class="h-3 w-3 rounded-full bg-gray-500"
            aria-current="false"
            aria-label="Slide 4"
        ></button>
    </div>    
    

    <!-- Slider controls -->
    <button
    id="data-carousel-prev"
    type="button"
    class="group absolute left-0 top-0 z-30 flex h-full cursor-pointer items-center justify-center px-48 pt-10 focus:outline-none focus:ring-0"
>
        <span
            class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/30 group-hover:bg-white/50 group-focus:outline-none group-focus:ring-0 dark:bg-gray-800/30 dark:group-hover:bg-gray-800/60 dark:group-focus:ring-0"
        >
            <svg
                class="h-4 w-4 text-white dark:text-gray-800"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 6 10"
            >
                <path
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M5 1 1 5l4 4"
                />
            </svg>
            <span class="hidden">Previous</span>
        </span>
    </button>

    <button
        id="data-carousel-next"
        type="button"
        class="group absolute right-0 top-0 z-30 flex h-full cursor-pointer items-center justify-center px-48 pt-10 focus:outline-none focus:ring-0"
    >
        <span
            class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/30 group-hover:bg-white/50 group-focus:outline-none group-focus:ring-0 dark:bg-gray-800/30 dark:group-hover:bg-gray-800/60 dark:group-focus:ring-0"
        >
            <svg
                class="h-4 w-4 text-white dark:text-gray-800"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 6 10"
            >
                <path
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="m1 9 4-4-4-4"
                />
            </svg>
            <span class="hidden">Next</span>
        </span>
    </button>

</div> --}}


<div id="default-carousel" class="relative z-0 w-full mt-12 mb-12" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 mx-44 overflow-hidden rounded-lg md:h-96">
         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="img/home.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="img/bg1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="img/contoh.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="img/p1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="img/p2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 mx-44 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 mx-44 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>
