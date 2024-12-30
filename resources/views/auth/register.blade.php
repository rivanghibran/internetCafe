<x-layoutform>
  <x-slot:title>{{ $title }}</x-slot:title>
  @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
  @endif
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
          <h2 class="mt-6 text-2xl font-bold tracking-tight text-white">Create new account</h2>
        </div>
        <!-- Form -->
        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-sm">
          <form class="space-y-6" action="{{ route('register') }}" method="POST">
            @csrf
            <!-- Input Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-500">Email</label>
                <div class="mt-2">
                  <input
                    id="email"
                    name="email"
                    type="email"
                    autocomplete="email"
                    required
                    class="block w-full rounded-md border border-gray-500 py-2 px-3 text-gray-900 shadow-sm focus:ring-purple-500 focus:border-purple-500 sm:text-sm"
                  />
                </div>
              </div>
            <!-- Input Username -->
            <div>
              <label for="name" class="block text-sm font-medium text-gray-500">Username</label>
              <div class="mt-2">
                <input
                  id="name"
                  name="name"
                  type="text"
                  autocomplete="name"
                  required
                  class="block w-full rounded-md border border-gray-500 py-2 px-3 text-gray-900 shadow-sm focus:ring-purple-500 focus:border-purple-500 sm:text-sm"
                />
                <!-- Menampilkan error jika ada -->
                @if ($errors->has('name'))
                  <div class="text-red-500 text-sm mt-1">{{ $errors->first('name') }}</div>
                @endif
              </div>
            </div>
            <!-- Input Password -->
            <div>
              <div class="flex items-center justify-between">
                <label for="password" class="block text-sm font-medium text-gray-500">Password</label>
              </div>
              <div class="mt-2">
                <input
                  id="password"
                  name="password"
                  type="password"
                  autocomplete="new-password"
                  required
                  class="block w-full rounded-md border border-gray-500 py-2 px-3 text-gray-900 shadow-sm focus:ring-pink-500 focus:border-pink-500 sm:text-sm"
                />
              </div>
            </div>
            <!-- Konfirmasi Password -->
            <div>
                <div class="flex items-center justify-between">
                  <label for="password_confirmation" class="block text-sm font-medium text-gray-500">Confirm Password</label>
                </div>
                <div class="mt-2">
                  <input
                    id="password_confirmation"
                    name="password_confirmation"
                    type="password"
                    autocomplete="new-password"
                    required
                    class="block w-full rounded-md border border-gray-500 py-2 px-3 text-gray-900 shadow-sm focus:ring-pink-500 focus:border-pink-500 sm:text-sm"
                  />
                </div>
              </div>
            <!-- Button -->
            <div>
              <button
                type="submit"
                class="flex w-full justify-center rounded-md bg-gradient-to-r from-purple-500 to-pink-500 px-4 py-2 text-sm font-semibold text-white shadow-md hover:bg-gradient-to-l focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500"
              >
                Sign up
              </button>
            </div>
          </form>
          <!-- Footer -->
          <p class="mt-6 text-center text-sm text-gray-300">
            Already have an account?
            <a href="/login" class="font-semibold text-pink-500 hover:text-pink-400">Sign in here.</a>
          </p>
        </div>
      </div>
    </div>
  </section>
</x-layoutform>
