import "./bootstrap";
import "flowbite";

// document.addEventListener('DOMContentLoaded', () => {
//     const items = document.querySelectorAll('[data-carousel-item]');
//     let currentIndex = 0;
//     const intervalTime = 5000; // Durasi 5 detik

//     // Fungsi untuk menampilkan slide
//     function showSlide(index) {
//         items.forEach((item, i) => {
//             item.classList.add('hidden'); // Sembunyikan semua slide
//         });
//         items[index].classList.remove('hidden'); // Tampilkan slide yang aktif
//     }

//     // Fungsi untuk memulai carousel dengan interval
//     function startCarousel() {
//         setInterval(() => {
//             currentIndex = (currentIndex + 1) % items.length;
//             showSlide(currentIndex);
//         }, intervalTime);
//     }

//     // Event Listener untuk tombol prev/next
//     const prevButton = document.querySelector('[data-carousel-prev]');
//     const nextButton = document.querySelector('[data-carousel-next]');

//     if (prevButton && nextButton) {
//         prevButton.addEventListener('click', () => {
//             currentIndex = (currentIndex - 1 + items.length) % items.length;
//             showSlide(currentIndex);
//         });

//         nextButton.addEventListener('click', () => {
//             currentIndex = (currentIndex + 1) % items.length;
//             showSlide(currentIndex);
//         });
//     }

//     // Inisialisasi carousel
//     showSlide(currentIndex); // Tampilkan slide pertama
//     startCarousel(); // Mulai interval otomatis
// });

// import { Carousel } from 'flowbite';
// const carousel = new Carousel(carouselElement, items, options, instanceOptions);
// // goes to the next (right) slide
// carousel.next();
// // goes to the previous (left) slide
// carousel.prev();
// // jumps to the 3rd position (position starts from 0)
// carousel.slideTo(2);
// // starts or resumes the carousel cycling (automated sliding)
// carousel.cycle();
// // pauses the cycling (automated sliding)
// carousel.pause();

// const carouselElement = document.getElementById('carousel-example');

// const items = [
//     {
//         position: 0,
//         el: document.getElementById('carousel-item-1'),
//     },
//     {
//         position: 1,
//         el: document.getElementById('carousel-item-2'),
//     },
//     {
//         position: 2,
//         el: document.getElementById('carousel-item-3'),
//     },
//     {
//         position: 3,
//         el: document.getElementById('carousel-item-4'),
//     },
// ];

// // options with default values
// const options = {
//     defaultPosition: 1,
//     interval: 3000,

//     indicators: {
//         activeClasses: 'bg-white dark:bg-gray-800',
//         inactiveClasses:
//             'bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800',
//         items: [
//             {
//                 position: 0,
//                 el: document.getElementById('carousel-indicator-1'),
//             },
//             {
//                 position: 1,
//                 el: document.getElementById('carousel-indicator-2'),
//             },
//             {
//                 position: 2,
//                 el: document.getElementById('carousel-indicator-3'),
//             },
//             {
//                 position: 3,
//                 el: document.getElementById('carousel-indicator-4'),
//             },
//         ],
//     },

//     // callback functions
//     onNext: () => {
//         console.log('next slider item is shown');
//     },
//     onPrev: () => {
//         console.log('previous slider item is shown');
//     },
//     onChange: () => {
//         console.log('new slider item has been shown');
//     },
// };

// // instance options object
// const instanceOptions = {
//   id: 'carousel-example',
//   override: true
// };

const carousel = document.getElementById("carousel");
const prevButton = document.getElementById("data-carousel-prev");
const nextButton = document.getElementById("data-carousel-next");

// Mendapatkan indikator
const indicators = [
    document.getElementById("carousel-indicator-1"),
    document.getElementById("carousel-indicator-2"),
    document.getElementById("carousel-indicator-3"),
    document.getElementById("carousel-indicator-4"),
];

// Array untuk menyimpan elemen item carousel
const items = [
    document.getElementById("carousel-item-1"),
    document.getElementById("carousel-item-2"),
    document.getElementById("carousel-item-3"),
    document.getElementById("carousel-item-4"),
];

let currentIndex = 0;

// Fungsi untuk menunjukkan slide yang aktif dengan animasi
function showSlide(index, direction) {
    items.forEach((item, i) => {
        // Menyembunyikan semua item terlebih dahulu
        item.classList.add("hidden");
        item.classList.remove(
            "animate-slide-in-left",
            "animate-slide-out-left",
            "animate-slide-in-right",
            "animate-slide-out-right"
        );
        indicators[i].classList.remove("bg-gray-900");
        indicators[i].classList.add("bg-gray-500");
        indicators[i].setAttribute("aria-current", "false");
    });

    // Menampilkan item yang baru dengan animasi berdasarkan arah
    items[index].classList.remove("hidden");
    if (direction === "next") {
        items[index].classList.add("animate-slide-in-left"); // Masuk dari kiri
    } else if (direction === "prev") {
        items[index].classList.add("animate-slide-in-right"); // Masuk dari kanan
    }

    // Mengubah warna indikator aktif
    indicators[index].classList.remove("bg-gray-500");
    indicators[index].classList.add("bg-gray-900");
    indicators[index].setAttribute("aria-current", "true");
}

// Fungsi untuk berpindah ke slide berikutnya dengan animasi
function nextSlide() {
    const previousIndex = currentIndex;
    currentIndex = (currentIndex + 1) % items.length; // Loop ke awal
    items[previousIndex].classList.add("animate-slide-out-left"); // Keluar ke kiri
    setTimeout(() => showSlide(currentIndex, "next"), 500); // Menunggu animasi selesai
}

// function nextSlide() {
//   const previousIndex = currentIndex;
//   currentIndex = (currentIndex + 1) % items.length;

//   // Tambahkan kelas untuk animasi keluar ke kiri
//   items[previousIndex].classList.add('slide-out-left');

//   // Tunggu animasi selesai, lalu tampilkan slide berikutnya
//   setTimeout(() => {
//     items[previousIndex].classList.remove('slide-out-left');
//     items[currentIndex].classList.add('slide-in-right'); // Tambahkan kelas untuk animasi masuk dari kanan
//     showSlide(currentIndex);
//   }, 500);
// }

// Fungsi untuk berpindah ke slide sebelumnya dengan animasi
function prevSlide() {
    const previousIndex = currentIndex;
    currentIndex = (currentIndex - 1 + items.length) % items.length; // Loop ke akhir
    items[previousIndex].classList.add("animate-slide-out-right"); // Keluar ke kanan
    setTimeout(() => showSlide(currentIndex, "prev"), 500); // Menunggu animasi selesai
}

// Menghubungkan tombol dengan fungsionalitas
nextButton.addEventListener("click", nextSlide);
prevButton.addEventListener("click", prevSlide);

// Menghubungkan indikator dengan fungsionalitas
indicators.forEach((indicator, index) => {
    indicator.addEventListener("click", () => {
        currentIndex = index;
        showSlide(currentIndex, "next");
    });
});

// Menampilkan slide pertama pada awalnya
showSlide(currentIndex, "next");

// Autoplay (opsional)
setInterval(nextSlide, 5000); // Pergi ke slide berikutnya setiap 5 detik
