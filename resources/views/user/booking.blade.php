<x-layout-user>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:username>{{ $username }}</x-slot:username>
    <section class="bg-center bg-no-repeat bg-[url('/public/img/background.jpg')] bg-gray-700 bg-blend-multiply bg-cover bg:blur-md">
        <div class="flex min-h-screen items-center justify-center px-4 sm:px-6 lg:px-8 bg-transparent">
          <!-- Box Container -->
          <div class="flex flex-col justify-center px-6 py-12 lg:px-8 bg-black bg-opacity-60 rounded-lg shadow-md border-2 border-transparent bg-clip-border sm:p-8 max-w-md w-full items-center"
               style="border-image: linear-gradient(to right, #a855f7, #ec4899) 1;">
            <!-- Logo dan Judul -->
            <div class="sm:mx-auto sm:w-full sm:max-w-sm text-center">
              <img class="mx-auto h-10 w-auto" src="img/logo.webp" alt="Your Company">
              <span class="text-white text-2xl font-semibold whitespace-nowrap">
                Game
                <span class="bg-gradient-to-r from-purple-500 to-pink-500 bg-clip-text text-transparent">Zone</span>
              </span>
              <h2 class="mt-6 text-2xl font-bold tracking-tight text-white">Booking</h2>
            </div>
            <!-- Form -->
            <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-sm">
              <form class="space-y-6" action="{{ route('user.booking.create') }}" method="POST">
                @csrf
                <!-- Input nama_pc -->
                <div>
                    <label for="nama_pc" class="block text-sm font-medium text-gray-500">No.PC</label>
                    <p class="block text-sm font-medium text-gray-500">Masukan nama PC 1-20, contoh (PC3)</p>
                    <div class="mt-2">
                      <input
                        id="nama_pc"
                        name="nama_pc"
                        type="text"
                        autocomplete="nama_pc"
                        required
                        class="block w-full rounded-md border border-gray-500 py-2 px-3 text-gray-900 shadow-sm focus:ring-purple-500 focus:border-purple-500 sm:text-sm"
                      />
                    </div>
                </div>
                @if ($errors->has('nama_pc'))
                  <div class="text-red-500 text-sm mt-1">{{ $errors->first('nama_pc') }}</div>
                @endif
                <div>
                    <label for="waktu" class="block text-sm font-medium text-gray-500">Waktu Booking</label>
                    <div class="mt-2">
                      <input
                        id="waktu"
                        name="waktu"
                        type="datetime-local"
                        required
                        class="block w-full rounded-md border border-gray-500 py-2 px-3 text-gray-900 shadow-sm focus:ring-purple-500 focus:border-purple-500 sm:text-sm"
                      />
                      <!-- Menampilkan error jika ada -->
                      @if ($errors->has('waktu'))
                        <div class="text-red-500 text-sm mt-1">{{ $errors->first('waktu') }}</div>
                      @endif
                    </div>
                </div>
                <!-- Input jam -->
                <div>
                  <label for="jam" class="block text-sm font-medium text-gray-500">Waktu (jam)</label>
                  <div class="mt-2">
                    <input
                      id="jam"
                      name="jam"
                      type="number"
                      min="1"
                      max="1000"
                      step="1"
                      autocomplete="jam"
                      required
                      class="block w-full rounded-md border border-gray-500 py-2 px-3 text-gray-900 shadow-sm focus:ring-purple-500 focus:border-purple-500 sm:text-sm"
                    />
                    <!-- Menampilkan error jika ada -->
                    @if ($errors->has('jam'))
                      <div class="text-red-500 text-sm mt-1">{{ $errors->first('jam') }}</div>
                    @endif
                  </div>
                </div>
                <!-- Button -->
                <div>
                  <button
                    type="submit"
                    class="flex w-full justify-center rounded-md bg-gradient-to-r from-purple-500 to-pink-500 px-4 py-2 text-sm font-semibold text-white shadow-md hover:bg-gradient-to-l focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500"
                  >
                    book now
                  </button>
                </div>
              </form>
              @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
              @endif
            </div>
          </div>
        </div>
      </section>
</x-layout-user>