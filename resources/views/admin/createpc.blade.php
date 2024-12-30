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
                <h2 class="text-gray-500 text-2xl font-bold mb-6 text-center">Add New PC</h2>
  
                <form action="{{ route('admin.pc.create') }}" method="POST" class="space-y-6">
                    @csrf
  
                    <div>
                        <label for="nama_pc" class="block text-sm font-medium text-gray-500">Nama PC</label>
                        <input
                            id="nama_pc"
                            name="nama_pc"
                            type="text"
                            class="mt-2 block w-full rounded-md border border-gray-500 py-2 px-3 text-gray-900 focus:ring-purple-500 focus:border-purple-500"
                            value="{{ old('nama_pc') }}"
                            required
                        />
                        @error('nama_pc')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>
  
                    <div>
                        <label for="jenis_id" class="block text-sm font-medium text-gray-500">Jenis</label>
                        <input
                            id="jenis_id"
                            name="jenis_id"
                            type="number"
                            class="mt-2 block w-full rounded-md border border-gray-500 py-2 px-3 text-gray-900 focus:ring-purple-500 focus:border-purple-500"
                            value="{{ old('jenis_id') }}"
                            required
                        />
                        @error('jenis_id')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>
  
                    <div>
                        <button
                            type="submit"
                            class="w-full py-2 px-4 bg-blue-700 text-white rounded-md shadow-md hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                        >
                            Add PC
                        </button>
                        <a href="{{ route('admin.pc') }}" class="py-2 px-4 w-full mt-2 text-center block bg-gray-500 text-white rounded-lg hover:bg-gray-600">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-layout-admin>
