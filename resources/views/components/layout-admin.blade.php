<!DOCTYPE html>
<html lang="en" class="h-full bg-gradient-to-b from-black via-gray-900 via-10% to-black to-50%">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    {{-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> alpine js--}}
    <style>
        /*animasi slide down */
        @keyframes slide-down {
            0% {
                transform: translateY(-100%); 
                opacity: 0;
            }
            100% {
                transform: translateY(0); 
                opacity: 1;
            }
        }
        .slide-down {
            animation: slide-down 2s ease-out forwards;
        }
    </style>

    <title>{{ $title }}</title>
    <username>{{ $username }}</username>
</head>
<body class="h-full">
    {{-- navbar --}}
    <x-side-navbar></x-side-navbar>
    <main>
        {{ $slot }}
    </main> 

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script> --}}
    {{-- <script src="/public/js/script.js"></script> --}}
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
    <script src="{{ mix('js/app.js') }}"></script>
    @vite(['resources/js/app.js'])

</body>
</html>