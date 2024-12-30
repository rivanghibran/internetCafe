<x-layout-admin>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:username>{{ $username }}</x-slot:username>

    <main class="p-4 md:ml-64 h-screen pt-20">
        <div class="container">
            <h1 class="text-center text-2xl font-semibold mb-6">Edit User</h1>
            
            <form action="{{ route('admin.pc.update', $pc->id) }}" method="POST" class="max-w-lg mx-auto">
                @csrf
                <div class="mb-6">
                    <label for="nama_pc" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama PC</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-6 h-6 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd"/>
                              </svg>                              
                        </div>
                        <input type="text" id="nama_pc" name="nama_pc" class="bg-gray-50 border  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('nama_pc', $pc->nama_pc) }}" required>
                    </div>
                    @error('nama_pc')
                        <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                    @enderror
                </div>


                <div class="mb-6">
                    <label for="jenis_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID Jenis</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z"/>
                                <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z"/>
                            </svg>
                        </div>
                        <input type="number" id="jenis_id" name="jenis_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('jenis_id', $pc->jenis_id) }}" required>
                    </div>
                    @error('jenis_id')
                        <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="w-full py-2.5 mt-4 bg-blue-500 text-white font-medium rounded-lg hover:bg-blue-600 focus:ring-4 focus:ring-blue-300">Update</button>
                <a href="{{ route('admin.pc') }}" class="w-full mt-2 text-center block py-2.5 bg-gray-500 text-white rounded-lg hover:bg-gray-600">Cancel</a>
            </form>
        </div>
    </main>
</x-layout-admin>
