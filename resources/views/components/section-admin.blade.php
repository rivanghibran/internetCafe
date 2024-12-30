<main class="p-4 md:ml-64 h-screen pt-20">
  <h1 class="text-center font-semibold text-2xl mb-2">Halo Admin!</h1>
  <p class="text-center text-xl mb-24">Gunakan fitur fitur secara bijak.</p>
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-6 mb-4">
    <!-- Tombol Transaksi -->
    <button type="button" onclick="location.href='{{ route('admin.transaksi') }}'" class="w-full h-full hover:bg-white">
      <div class="text-center border-2 border-gray-300 rounded-lg dark:border-gray-600 h-full flex flex-col items-center justify-center">
          <svg class="mt-4 w-24 h-24 text-gray-500 dark:text-white mb-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
              <path fill-rule="evenodd" d="M5.617 2.076a1 1 0 0 1 1.09.217L8 3.586l1.293-1.293a1 1 0 0 1 1.414 0L12 3.586l1.293-1.293a1 1 0 0 1 1.414 0L16 3.586l1.293-1.293A1 1 0 0 1 19 3v18a1 1 0 0 1-1.707.707L16 20.414l-1.293 1.293a1 1 0 0 1-1.414 0L12 20.414l-1.293 1.293a1 1 0 0 1-1.414 0L8 20.414l-1.293 1.293A1 1 0 0 1 5 21V3a1 1 0 0 1 .617-.924ZM9 7a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2H9Zm0 4a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2H9Zm0 4a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2H9Z" clip-rule="evenodd"/>
          </svg>
          <span class="text-gray-500 dark:text-white mb-4">Transaction</span>
      </div>
  </button>

    <!-- Tombol Users -->
    <button  type="button" onclick="location.href='{{ route('admin.users') }}'" class="w-full h-full hover:bg-white">
      <div class="text-center border-2 border-gray-300 rounded-lg dark:border-gray-600 h-full flex flex-col items-center justify-center">
        <svg class="mt-4 w-24 h-24 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
          <path fill-rule="evenodd" d="M7 2a2 2 0 0 0-2 2v1a1 1 0 0 0 0 2v1a1 1 0 0 0 0 2v1a1 1 0 1 0 0 2v1a1 1 0 1 0 0 2v1a1 1 0 1 0 0 2v1a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H7Zm3 8a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm-1 7a3 3 0 0 1 3-3h2a3 3 0 0 1 3 3 1 1 0 0 1-1 1h-6a1 1 0 0 1-1-1Z" clip-rule="evenodd"/>
        </svg>
        <span class="text-gray-500 dark:text-white mb-4">Users</span>
      </div>
    </button>

      <!-- Tombol Users -->
      <button  type="button" onclick="location.href='{{ route('admin.usercoin') }}'" class="w-full h-full hover:bg-white">
        <div class="text-center border-2 border-gray-300 rounded-lg dark:border-gray-600 h-full flex flex-col items-center justify-center">
          <svg class="mt-4 w-24 h-24 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd" d="M12 14a3 3 0 0 1 3-3h4a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2h-4a3 3 0 0 1-3-3Zm3-1a1 1 0 1 0 0 2h4v-2h-4Z" clip-rule="evenodd"/>
            <path fill-rule="evenodd" d="M12.293 3.293a1 1 0 0 1 1.414 0L16.414 6h-2.828l-1.293-1.293a1 1 0 0 1 0-1.414ZM12.414 6 9.707 3.293a1 1 0 0 0-1.414 0L5.586 6h6.828ZM4.586 7l-.056.055A2 2 0 0 0 3 9v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2h-4a5 5 0 0 1 0-10h4a2 2 0 0 0-1.53-1.945L17.414 7H4.586Z" clip-rule="evenodd"/>
          </svg>          
          <span class="text-gray-500 dark:text-white mb-4">User's coin</span>
        </div>
      </button>

    <!-- Tombol PC List -->
    <button  type="button" onclick="location.href='{{ route('admin.pc') }}'" class="w-full h-full hover:bg-white">
      <div class="text-center border-2 border-gray-300 rounded-lg dark:border-gray-600 h-full flex flex-col items-center justify-center">
        <svg class="mt-4 w-24 h-24 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
          <path fill-rule="evenodd" d="M12 8a1 1 0 0 0-1 1v10H9a1 1 0 1 0 0 2h11a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1h-8Zm4 10a2 2 0 1 1 0-4 2 2 0 0 1 0 4Z" clip-rule="evenodd"/>
          <path fill-rule="evenodd" d="M5 3a2 2 0 0 0-2 2v6h6V9a3 3 0 0 1 3-3h8c.35 0 .687.06 1 .17V5a2 2 0 0 0-2-2H5Zm4 10H3v2a2 2 0 0 0 2 2h4v-4Z" clip-rule="evenodd"/>
        </svg>
        <span class="text-gray-500 dark:text-white mb-4">PC list</span>
      </div>
    </button>

    <!-- Tombol Banner Uploader -->
    {{-- <button  type="button" onclick="location.href='{{ route('admin.promo') }}'" class="w-full h-full hover:bg-white">
      <div class="text-center border-2 border-gray-300 rounded-lg dark:border-gray-600 h-full flex flex-col items-center justify-center">
        <svg class="mt-4 w-24 h-24 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
          <path fill-rule="evenodd" d="M13 10a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2H14a1 1 0 0 1-1-1Z" clip-rule="evenodd"/>
          <path fill-rule="evenodd" d="M2 6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12c0 .556-.227 1.06-.593 1.422A.999.999 0 0 1 20.5 20H4a2.002 2.002 0 0 1-2-2V6Zm6.892 12 3.833-5.356-3.99-4.322a1 1 0 0 0-1.549.097L4 12.879V6h16v9.95l-3.257-3.619a1 1 0 0 0-1.557.088L11.2 18H8.892Z" clip-rule="evenodd"/>
        </svg>
        <span class="text-gray-500 dark:text-white mb-4">Banner Uploader</span>
      </div>
    </button>
  </div>
</main> --}}
