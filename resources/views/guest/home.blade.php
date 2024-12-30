<x-layout >
    {{-- title --}}
    <x-slot:title>{{ $title }}</x-slot:title>
    {{-- isi --}}
    <section class="bg-center bg-no-repeat bg-[url('/public/img/background.jpg')] bg-gray-700 bg-blend-multiply mt-10 bg-cover bg:blur-md">
        <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6 slide-down">
            <div class="mt-4 md:mt-0 text-right">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-white dark:text-white">Rasakan pengalaman bermain game yang lebih menyenangkan.</h2>
                <p class="mb-6 font-light text-gray-400 text-sm md:text-lg dark:text-gray-400">
                    Bergabunglah di GameZone dan nikmati pengalaman gaming yang seru dengan PC gaming canggih dan koneksi super cepat! Tantang teman-temanmu dalam berbagai game seru dan rasakan sensasi bermain yang luar biasa. Ayo, datang ke GameZone dan buktikan sendiri keseruannya!</p>
                <a href="/login" class="text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                    Get started
                </a>
            </div>
            <img class="w-full dark:hidden mt-10 rounded-md blur-custom drop-shadow-purple" src="img/home.jpg" alt="dashboard image">
            <img class="w-full hidden dark:block mt-10" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/cta/cta-dashboard-mockup-dark.svg" alt="dashboard image">
        </div>
        <p class="text-center mt-10 mb-20 text-lg font-normal text-gray-400 sm:px-16 lg:px-48"><x-paragraf-home></x-paragraf-home></p>
        <iframe class="drop-shadow-purple mx-auto w-full lg:max-w-xl h-64 rounded-lg sm:h-96 shadow-xl animate-fadeIn" src="https://www.youtube.com/embed/VcsOf075OMk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <br><br><br><br>
    </section>
</x-layout>
