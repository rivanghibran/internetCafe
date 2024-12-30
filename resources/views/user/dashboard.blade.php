
<x-layout-user>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:username>{{ $username }}</x-slot:username>
    <section class="bg-center bg-no-repeat bg-[url('/public/img/background.jpg')] bg-gray-700 bg-blend-multiply mt-10 bg-cover bg:blur-md">
        <section id="welcome" class="mt-19 ">
            <div class="md:mt-0 text-center">
                <h2 class="pt-20 mb-4 text-4xl tracking-tight font-extrabold text-white dark:text-white slide-down">
                    Welcome back, <span class="bg-gradient-to-r from-purple-500 to-pink-500 bg-clip-text text-transparent hover:bg-gradient-to-l">{{ $username }}</span>
                </h2>
                <p class="text-gray-200"> good to see you again, lets pay and play!</p>
            </div>
        </section>

        <section id="leaderboard" class="mt-24">
            <div class="md:mt-0 text-center">
                <div class="flex items-center justify-center">
                    <h2 class="mb-4 text-3xl tracking-tight font-bold text-white dark:text-white mr-2">
                        Leaderboard
                    </h2>
                    <img src="img/thropy.gif" alt="thropy" class="w-12 h-12 mb-4"> 
                </div>
                <p class="text-gray-200">tabel leaderboard top 5</p>
            </div>

            {{-- tabel leaderboard --}}
            <x-tabel-leaderboard></x-tabel-leaderboard>
        </section>
        
        <x-booking></x-booking>
        
    </section>
</x-layout-user>
