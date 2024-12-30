<x-layout-admin>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:username>{{ $username }}</x-slot:username>
    @if ($errors->any())
      <div class="bg-red-100 text-red-700 p-4 mb-4 rounded-md">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
  
    <section class="flex min-h-screen items-center justify-center bg-gray bg-cover">
      <div class="flex justify-center px-6 py-12 bg-gray bg-opacity-50 rounded-lg shadow-lg w-full max-w-md">
        <div class="w-full sm:max-w-sm text-left">
          <h2 class="text-gray-500 text-2xl font-bold mb-6 text-center">Create New User</h2>
  
          <form action="{{ route('admin.users.register') }}" method="POST" class="space-y-6">
            @csrf
  
            <!-- Username -->
            <div>
              <label for="name" class="block text-sm font-medium text-gray-500">Username</label>
              <input
                id="name"
                name="name"
                type="text"
                class="mt-2 block w-full rounded-md border border-gray-500 py-2 px-3 text-gray-900 focus:ring-purple-500 focus:border-purple-500"
                value=""
                required
              />
              @error('name')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
              @enderror
            </div>
  
            <!-- Email -->
            <div>
              <label for="email" class="block text-sm font-medium text-gray-500">Email</label>
              <input
                id="email"
                name="email"
                type="email"
                class="mt-2 block w-full rounded-md border border-gray-500 py-2 px-3 text-gray-900 focus:ring-purple-500 focus:border-purple-500"
                value=""
                required
              />
              @error('email')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
              @enderror
            </div>
  
            <!-- Password -->
            <div>
              <label for="password" class="block text-sm font-medium text-gray-500">Password</label>
              <input
                id="password"
                name="password"
                type="password"
                class="mt-2 block w-full rounded-md border border-gray-500 py-2 px-3 text-gray-900 focus:ring-purple-500 focus:border-purple-500"
                required
              />
            </div>
  
            <!-- Confirm Password -->
            <div>
              <label for="password_confirmation" class="block text-sm font-medium text-gray-500">Confirm Password</label>
              <input
                id="password_confirmation"
                name="password_confirmation"
                type="password"
                class="mt-2 block w-full rounded-md border border-gray-500 py-2 px-3 text-gray-900 focus:ring-purple-500 focus:border-purple-500"
                required
              />
            </div>
  
            <!-- Submit Button -->
            <div>
              <button
                type="submit"
                class="w-full py-2 px-4 bg-blue-700 text-white rounded-md shadow-md hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
              >
                Create User
              </button>
              <a href="{{ route('admin.users') }}" class="py-2 px-4 w-full mt-2 text-center block bg-gray-500 text-white rounded-lg hover:bg-gray-600">Cancel</a>
            </div>
          </form>
        </div>
      </div>
    </section>
  </x-layout-admin>
  