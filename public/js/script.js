document.addEventListener('DOMContentLoaded', () => {
    const items = document.querySelectorAll('[data-carousel-item]');
    let currentIndex = 0;
    const intervalTime = 5000; // Durasi 5 detik

    // Fungsi untuk menampilkan slide
    function showSlide(index) {
        items.forEach((item, i) => {
            item.classList.add('hidden'); // Sembunyikan semua slide
        });
        items[index].classList.remove('hidden'); // Tampilkan slide yang aktif
    }

    // Fungsi untuk memulai carousel dengan interval
    function startCarousel() {
        setInterval(() => {
            currentIndex = (currentIndex + 1) % items.length;
            showSlide(currentIndex);
        }, intervalTime);
    }

    // Event Listener untuk tombol prev/next
    const prevButton = document.querySelector('[data-carousel-prev]');
    const nextButton = document.querySelector('[data-carousel-next]');

    if (prevButton && nextButton) {
        prevButton.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + items.length) % items.length;
            showSlide(currentIndex);
        });

        nextButton.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % items.length;
            showSlide(currentIndex);
        });
    }

    // Inisialisasi carousel
    showSlide(currentIndex); // Tampilkan slide pertama
    startCarousel(); // Mulai interval otomatis
});
// const carouselElement = document.getElementById('carousel');

// const items = [
//   {
//     position: 0,
//     el: document.getElementById('carousel-item-1'),
//   },
//   {
//     position: 1,
//     el: document.getElementById('carousel-item-2'),
//   },
//   {
//     position: 2,
//     el: document.getElementById('carousel-item-3'),
//   },
//   {
//     position: 3,
//     el: document.getElementById('carousel-item-4'),
//   },
// ];

// // object options with default values
// const options = {
//   defaultPosition: 1,
//   interval: 3000,

//   indicators: {
//     activeClasses: 'bg-white dark:bg-gray-800',
//     inactiveClasses:
//       'bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800',
//     items: [
//       {
//         position: 0,
//         el: document.getElementById('carousel-indicator-1'),
//       },
//       {
//         position: 1,
//         el: document.getElementById('carousel-indicator-2'),
//       },
//       {
//         position: 2,
//         el: document.getElementById('carousel-indicator-3'),
//       },
//       {
//         position: 3,
//         el: document.getElementById('carousel-indicator-4'),
//       },
//     ],
//   },

//   // callback functions
//   onNext: () => {
//     console.log('next slider item is shown');
//   },
//   onPrev: () => {
//     console.log('previous slider item is shown');
//   },
//   onChange: () => {
//     console.log('new slider item has been shown');
//   },
// };

// // instance options object (optional)
// const instanceOptions = {
//   id: 'carousel-example',
//   override: true, // set to false if you don't need to override existing carousels
// };

// const carousel = new Flowbite.Carousel(carouselElement, items, options, instanceOptions);

// carousel.cycle(); // start automatic slide transition

// // set event listeners for prev and next buttons (if needed)
// const $prevButton = document.getElementById('data-carousel-prev');
// const $nextButton = document.getElementById('data-carousel-next');

// if ($prevButton) {
//   $prevButton.addEventListener('click', () => {
//     carousel.prev();
//   });
// }

// if ($nextButton) {
//   $nextButton.addEventListener('click', () => {
//     carousel.next();
//   });
// }
