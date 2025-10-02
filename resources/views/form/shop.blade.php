<x-sidebar>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="content grid grid-cols-2 gap-6 lg:gap-10 md:gap-6 mx-4 mb-10 sm:mx-10 sm:grid-cols-3 lg:grid-cols-4">
        @foreach ($produks as $produk)
            <form action="{{ route('carts.add') }}" method="POST" class="w-full max-w-xs">
                @csrf

                <input type="hidden" name="jenis" value="produk">
                <input type="hidden" name="quantity" value="1">
                <input type="hidden" name="produk_id" value="{{ $produk->id }}">
                <div class="cart bg-white shadow-md rounded-md overflow-hidden mx-auto">
                    <div class="img">
                        <img src="{{ asset('img/product/' . $produk->image) }}" alt="{{ $produk->nama_produk }}"
                            class="w-full h-32 object-cover">
                    </div>
                    <div class="text p-2">
                        <div class="body mt-2">
                            <h1 class="font-bold text-sm sm:text-lg">{{ $produk->nama_produk }}</h1>
                            <p class="text-gray-600 text-xs sm:text-sm mt-1">{{ $produk->deskripsi }}</p>
                        </div>
                        <div class="foot mt-4 mb-2">
                            <button type="submit"
                                class="bg-blue-400 text-sm sm:text-base text-white py-1 px-2 w-full rounded-full hover:bg-blue-500 shadow-md">
                                Beli Sekarang
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        @endforeach
    </div>
</x-sidebar>
