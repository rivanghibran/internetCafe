<x-layout-admin>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:username>{{ $username }}</x-slot:username>
    
    <!-- Main Content -->
    <main class="p-4 md:ml-64 h-screen pt-20">
        
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('admin.createpc') }}" method="GET" class="inline">
            <button type="submit" class="btn btn-primary text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 flex items-center space-x-2">
                <svg class="mr-2 w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M5 3a2 2 0 0 0-2 2v5h18V5a2 2 0 0 0-2-2H5ZM3 14v-2h18v2a2 2 0 0 1-2 2h-6v3h2a1 1 0 1 1 0 2H9a1 1 0 1 1 0-2h2v-3H5a2 2 0 0 1-2-2Z" clip-rule="evenodd"/>
                  </svg>                  
                Add PC
            </button>                       
        </form>
           
        <form action="{{ url('/admin/pc') }}"  method="GET" class= "max-w-md mx-auto mb-4">   
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="search" id="search" name="search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search by pc's name..." required />
                <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
            </div>
        </form>

        <div class="container mx-auto relative overflow-x-auto shadow-md sm:rounded-lg mb-4">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 border">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="text-center px-6 py-3">ID</th>
                        <th scope="col" class="text-center px-6 py-3">nama</th>
                        <th scope="col" class="text-center px-6 py-3">jenis</th>
                        <th scope="col" class="text-center px-6 py-3">harga/jam</th>
                        <th scope="col" class="text-center px-6 py-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pcs as $pc)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $pc->id }}
                            </td>
                            <td class="px-6 py-4 text-center">{{ $pc->nama_pc }}</td>
                            <td class="px-6 py-4 text-center">{{ $pc->jenisPc->jenis ?? 'N/A' }}</td>
                            <td class="px-6 py-4 text-center">{{ $pc->jenisPc->harga ?? 'N/A' }}</td>
                            <td class="px-6 py-4 text-center">
                                <a href="{{ route('admin.editpc', $pc->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                <form action="{{ route('admin.pc.delete', $pc->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <a href="#" class="ml-2 font-medium text-red-600 dark:text-red-500 hover:underline" onclick="return confirmDelete();">
                                        Remove
                                    </a>
                                </form>
                                <script>
                                    function confirmDelete() {
                                        if (confirm('Are you sure you want to delete this pc?')) {
                                            event.target.closest('form').submit();
                                        }
                                        return false;  
                                    }
                                </script>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-4 text-center text-gray-500 dark:text-gray-400">
                                No users found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        {{ $pcs->links() }}
    </main>
</x-layout-admin>
