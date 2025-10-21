<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Cek Angka</h2>
    </x-slot>

    <div class="p-6">
        <x-alert type="{{ $tipe }}">
            {{ $pesan }}
        </x-alert>

        <p class="mt-4">Angka yang kamu kirim: <strong>{{ $angka }}</strong></p>

        <a href="{{ url('/products') }}" class="bg-blue-500 text-white px-3 py-1 rounded mt-4 inline-block">Kembali ke Daftar Produk</a>
    </div>
</x-app-layout>