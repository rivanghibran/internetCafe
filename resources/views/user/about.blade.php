
<x-layout-user>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:username>{{ $username }}</x-slot:username>
    <h1 class="text-white font-xl text-bold mt-20 text-center"> Table Transaki</h1>
    <p class="text-white text-bold mt-4 text-center">daftar transaksi kamu, jika telah melakukan booking akan tampil</p>
    <div class="container mx-auto py-8">
        <h2 class="text-2xl font-bold mb-6">Transaksi Saya</h2>
        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Nama PC</th>
                      <th class="py-2 px-4 border-b">Total Harga</th>
                    <th class="py-2 px-4 border-b">Waktu Mulai</th>
                    <th class="py-2 px-4 border-b">Waktu Selesai</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $transaction)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $transaction->pc->nama_pc }}</td>
                        <td class="py-2 px-4 border-b">{{ $transaction->total }}</td>
                        <td class="py-2 px-4 border-b">{{ $transaction->waktu }}</td>
                        <td class="py-2 px-4 border-b">{{ $transaction->waktu_berhenti }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout-user>   
