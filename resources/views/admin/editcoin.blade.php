<x-layout-admin>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:username>{{ $username }}</x-slot:username>
    <main class="p-4 md:ml-64 h-screen pt-20">
        <div class="container">
            <!-- Dropdown -->
            <div class="mb-4">
                <button onclick="document.getElementById('addForm').classList.toggle('hidden')"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button">
                    Add
                </button>
                <button onclick="document.getElementById('subtractForm').classList.toggle('hidden')"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button">
                    Subtract
                </button>
                <button onclick="document.getElementById('resetForm').classList.toggle('hidden')"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button">
                    Reset All
                </button>
                <button onclick="document.getElementById('setAllForm').classList.toggle('hidden')"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button">
                    Set All
                </button>
            </div>

            <!-- Add Form -->
            <form id="addForm" action="{{ route('admin.coin.update', $coin->id) }}" method="POST"
                class="mt-4 hidden">
                @csrf
                <input type="hidden" name="action" value="add">
                <div class="space-y-4">
                    <input type="number" name="amount" placeholder="Enter amount"
                        class="block w-full p-2 border border-gray-300 rounded-lg">
                </div>
                <button type="submit"
                    class="w-full py-2 px-4 text-white bg-green-600 hover:bg-green-700 rounded-lg font-medium">
                    Submit
                </button>
            </form>

            <!-- Subtract Form -->
            <form id="subtractForm" action="{{ route('admin.coin.update', $coin->id) }}" method="POST"
                class="mt-4 hidden">
                @csrf
                <input type="hidden" name="action" value="subtract">
                <div class="space-y-4">
                    <input type="number" name="amount" placeholder="Enter amount"
                        class="block w-full p-2 border border-gray-300 rounded-lg">
                </div>
                <button type="submit"
                    class="w-full py-2 px-4 text-white bg-green-600 hover:bg-green-700 rounded-lg font-medium">
                    Submit
                </button>
            </form>

            <!-- Reset All Form -->
            <form id="resetForm" action="{{ route('admin.coin.update', $coin->id) }}" method="POST"
                class="mt-4 hidden">
                @csrf
                <input type="hidden" name="action" value="reset">
                <button type="submit"
                    class="w-full py-2 px-4 text-white bg-green-600 hover:bg-green-700 rounded-lg font-medium">
                    Reset All
                </button>
            </form>

            <!-- Set All Form -->
            <form id="setAllForm" action="{{ route('admin.coin.update', $coin->id) }}" method="POST"
                class="mt-4 hidden">
                @csrf
                <input type="hidden" name="action" value="set-all">
                <div class="space-y-4">
                    <input type="number" name="amount" placeholder="Enter amount"
                        class="block w-full p-2 border border-gray-300 rounded-lg">
                </div>
                <button type="submit"
                    class="w-full py-2 px-4 text-white bg-green-600 hover:bg-green-700 rounded-lg font-medium">
                    Submit
                </button>
            </form>
        </div>
    </main>
</x-layout-admin>
