<x-sidebar>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="flex flex-col items-center space-y-6 mb-6">
        @foreach ($services as $service)
            <form action="{{ route('carts.add') }}" method="POST" class="w-full max-w-4xl">
                @csrf
                <div class="cart bg-white shadow-md rounded-md p-6 flex flex-col md:flex-row gap-6 md:gap-8 lg:gap-12">
                    <!-- Image Section -->
                    <div class="flex items-center justify-center flex-shrink-0">
                        @if ($service->kategori === 'Sepeda Motor')
                            <img src="{{ asset('img/motorcycle.png') }}" alt="Motorcycle-Icon"
                                class="w-32 h-32 object-contain">
                        @elseif ($service->kategori === 'Mobil')
                            <img src="{{ asset('img/car.png') }}" alt="Car-Icon" class="w-32 h-32 object-contain">
                        @endif
                    </div>

                    <!-- Details Section -->
                    <div class="flex-1">
                        <h1 class="font-bold text-xl mb-2 text-blue-600">{{ $service->nama_service }}</h1>
                        <p class="text-gray-600 text-justify">{{ $service->deskripsi_service }}</p>
                    </div>

                    <!-- Footer Section -->
                    <div class="flex flex-col justify-end items-end text-right space-y-2">
                        <h1 class="text-xl font-bold text-blue-600">
                            <span class="text-2xl font-medium">Rp. </span>
                            {{ number_format($service->harga_service, 0, '.', ',') }}
                        </h1>
                        <input type="hidden" name="service_id" value="{{ $service->id }}">
                        <input type="hidden" name="jenis" value="service">
                        <input type="hidden" name="quantity" value="1">
                        <button type="submit"
                            class="bg-blue-400 py-2 px-4 text-white shadow-md hover:bg-blue-500 hover:shadow-lg w-full rounded-full">
                            Select
                        </button>
                    </div>
                </div>
            </form>
        @endforeach
    </div>
</x-sidebar>
