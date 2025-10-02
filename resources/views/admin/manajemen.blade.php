<x-sidebar>
    <x-slot:title>Admin Dashboard</x-slot:title>

    <div class="admin-content p-4 sm:p-6 bg-gray-100 min-h-screen" x-data="{ deleteService: false, updateService: false, serviceId: null, updateProduk: false, updateStok: false, deleteProduk: false, selectedProductId: null, selectedProduct: {}, selectedService: {}, openProduk: false, openService: false, error: false, message: '', selectedProductDeleteId: null }">
        <!-- Service Management Table -->
        <div class="service-table bg-white p-4 sm:p-6 rounded-md shadow-md mb-8">
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-4">
                <h2 class="text-lg sm:text-xl font-semibold text-blue-600 mb-2 sm:mb-0">Manajemen Service</h2>
                <button @click="openService = true"
                    class="bg-blue-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-blue-600 transition-colors duration-300 w-full sm:w-auto">
                    Tambah Service
                </button>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full bg-gray-50 rounded-md text-sm sm:text-base">
                    <thead class="bg-blue-100 text-blue-600">
                        <tr>
                            <th class="p-3 text-left">ID</th>
                            <th class="p-3 text-left">Icon</th>
                            <th class="p-3 text-left">Nama Service</th>
                            <th class="p-3 text-left">Deskripsi</th>
                            <th class="p-3 text-left">Kategori</th>
                            <th class="p-3 text-left">Harga</th>
                            <th class="p-3 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($services as $service)
                            <tr class="border-b">
                                <td class="p-3">{{ $noService++ }}</td>
                                <td class="p-3">
                                    @if ($service->kategori === 'Sepeda Motor')
                                        <img src="{{ asset('img/motorcycle.png') }}" alt="motorCycle_icon"
                                            class="w-20 h-16">
                                    @elseif ($service->kategori === 'Mobil')
                                        <img src="{{ asset('img/car.png') }}" alt="Car_icon" class="w-20 h-16">
                                    @else
                                        <div class="w-20 h-20 rounded-md bg-gray-400 p-2"><span>No Picture</span></div>
                                    @endif
                                </td>
                                <td class="p-3">{{ $service->nama_service }}</td>
                                <td class="p-3">{{ $service->deskripsi_service }}</td>
                                <td class="p-3">{{ $service->kategori }}</td>
                                <td class="p-3">Rp. {{ number_format($service->harga_service, 0, ',', '.') }}</td>
                                <td class="p-3 text-center">
                                    <button
                                        @click="updateService = true; serviceId = {{ $service->id }}; selectedService = {{ $service->toJson() }};"
                                        class="bg-yellow-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-yellow-600 transition-colors duration-300 mb-2 sm:mb-2 sm:mr-2">
                                        Edit
                                    </button>
                                    <button @click="deleteService = true; serviceId = {{ $service->id }};"
                                        class="bg-red-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-red-600 transition-colors duration-300">
                                        Hapus
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="p-3 text-center text-gray-500">Tidak ada data</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Shop Management Table -->
        <div class="shop-table bg-white p-4 sm:p-6 rounded-md shadow-md">
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-4">
                <h2 class="text-lg sm:text-xl font-semibold text-green-600 mb-2 sm:mb-0">Manajemen Shop</h2>
                <button @click="openProduk = true"
                    class="bg-green-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-green-600 transition-colors duration-300 w-full sm:w-auto">
                    Tambah Produk
                </button>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full bg-gray-50 rounded-md text-sm sm:text-base">
                    <thead class="bg-green-100 text-green-600">
                        <tr>
                            <th class="p-3 text-left">ID</th>
                            <th class="p-3 text-left">Nama Produk</th>
                            <th class="p-3 text-left">Gambar</th>
                            <th class="p-3 w-24 text-left">Deskripsi</th>
                            <th class="p-3 text-left">Stok</th>
                            <th class="p-3 text-left">Harga</th>
                            <th class="p-3 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($produks as $produk)
                            <tr class="border-b">
                                <td class="p-3">{{ $no++ }}</td>
                                <td class="p-3">{{ $produk->nama_produk }}</td>
                                <td class="p-3"><img src="{{ asset('img/product/' . $produk->image) }}"
                                        alt="Gambar Produk" class="h-24 w-24 object-cover"></td>
                                <td class="p-3 w-48 text-justify">
                                    <!-- Tampilkan deskripsi dengan batasan panjang -->
                                    <span x-data="{ isExpanded: false }">
                                        @php
                                            $limit = 100; // Panjang batas yang ditentukan
                                            $shortDesc = Str::limit($produk->deskripsi, $limit);
                                        @endphp
                                        <span x-show="!isExpanded">
                                            {{ $produk->deskripsi !== $shortDesc ? $shortDesc : $produk->deskripsi }}
                                            @if ($produk->deskripsi !== $shortDesc)
                                                <a href="#" @click.prevent="isExpanded = true"
                                                    class="text-blue-500 hover:underline">Lihat Selengkapnya</a>
                                            @endif
                                        </span>

                                        <span x-show="isExpanded">
                                            {{ $produk->deskripsi }}
                                            <a href="#" @click.prevent="isExpanded = false"
                                                class="text-blue-500 hover:underline">Tutup</a>
                                        </span>
                                    </span>
                                </td>

                                <td class="p-3">{{ $produk->stok }}</td>
                                <td class="p-3">Rp. {{ number_format($produk->harga_produk, 0, ',', '.') }}</td>
                                <td class="p-3 text-center">
                                    <!-- Tombol Edit Produk -->
                                    <button
                                        @click="updateProduk = true; selectedProductId = {{ $produk->id }}; selectedProduct = {{ $produk->toJson() }};"
                                        class="bg-yellow-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-yellow-600 transition-colors duration-300 mb-2 sm:mb-2 sm:mr-2">
                                        Edit
                                    </button>

                                    <!-- Tombol Tambah Stok -->
                                    <button @click="updateStok = true; selectedProductId={{ $produk->id }}"
                                        class="bg-green-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-green-600 transition-colors duration-300 mb-2 sm:mb-2 sm:mr-2">
                                        Tambah Stok
                                    </button>

                                    <!-- Tombol Hapus Produk -->
                                    <button @click="deleteProduk = true; selectedProductDeleteId = {{ $produk->id }}"
                                        class="bg-red-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-red-600 transition-colors duration-300">
                                        Hapus
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="p-3 text-center text-gray-500">Tidak ada data</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Modal Tambah Produk -->
        <div class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50" x-show="openProduk">
            <div class="content bg-slate-200 p-6 rounded-xl lg:max-w-xl w-full mx-6 md:max-w-md max-w-sm">
                <div class="title mb-6 flex justify-between">
                    <h1 class="text-center text-green-500 font-bold text-xl">Tambah Produk</h1>

                    <button class="text-3xl font-black" @click="openProduk = false">&times;</button>
                </div>
                <form action="{{ route('form-produk') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="body flex flex-col">
                        <div class="nama-produk flex flex-col">
                            <label for="nama_produk" class="text-sm font-medium text-gray-700">Nama Produk:</label>
                            <input type="text" name="nama_produk" id="nama_produk" placeholder="Nama Produk"
                                class="block w-full py-2 px-4 mt-1 rounded-md focus:border-blue-500">
                        </div>

                        <div class="image mt-4">
                            <label for="image" class="text-sm font-medium text-gray-700">Gambar:</label>
                            <div class="flex items-center mt-2">
                                <input type="file" name="image" id="image"
                                    class="block w-full py-2 px-4 border rounded-md bg-gray-100" accept="image/*"
                                    required>
                            </div>
                        </div>


                        <div class="deskripsi mt-4">
                            <label for="deskripsi" class="text-sm font-medium text-gray-700">Deskripsi:</label>
                            <input type="text" name="deskripsi" id="deskripsi" placeholder="Deskripsi Produk"
                                class="block w-full py-2 px-4 mt-1 rounded-md focus:border-blue-500">
                        </div>

                        <div class="stok mt-4">
                            <label for="stok" class="text-sm font-medium text-gray-700">Stok:</label>
                            <input type="number" name="stok" id="stok" placeholder="Stok Produk"
                                class="block w-full py-2 px-4 mt-1 rounded-md focus:border-blue-500">
                        </div>

                        <div class="harga mt-4">
                            <label for="harga_produk" class="text-sm font-medium text-gray-700">Harga:</label>
                            <input type="number" name="harga_produk" id="harga_produk" placeholder="Harga Produk"
                                class="block w-full py-2 px-4 mt-1 rounded-md focus:border-blue-500">
                        </div>
                    </div>
                    <div class="footer flex justify-end mt-6">
                        <button type="submit"
                            class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 font-semibold">Simpan</button>
                    </div>
                </form>
            </div>
        </div>


        {{-- Modal Update produk --}}
        <div class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50"
            x-show="updateProduk">
            <div class="bg-slate-200 p-6 rounded-xl lg:max-w-xl w-full mx-6 md:max-w-md max-w-sm"
                x-show="updateProduk" x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 translate-y-[-50%]"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-300 transform"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 translate-y-[-50%]">
                <div class="title mb-6 flex justify-between">
                    <h1 class="text-center text-green-500 font-bold text-xl">Edit Produk:
                        <span id="id_produk_span" x-text="selectedProduct.nama_produk"></span>
                    </h1>
                    <button class="text-3xl font-black" @click="updateProduk = false">&times;</button>
                </div>
                <form action="{{ route('produk.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="body flex flex-col">
                        <div class="nama-produk flex flex-col">
                            <input type="hidden" name="id_produk" id="id_produk"
                                class="block w-full py-2 px-4 mt-1 rounded-md focus:border-blue-500"
                                :value="selectedProductId">
                        </div>
                        <div class="nama-produk flex flex-col">
                            <label for="nama_produk" class="text-sm font-medium text-gray-700">Nama
                                Produk:</label>
                            <input type="text" name="nama_produk" id="nama_produk" placeholder="Nama Produk"
                                class="block w-full py-2 px-4 mt-1 rounded-md focus:border-blue-500"
                                x-bind:value="selectedProduct.nama_produk">
                        </div>
                        <div class="image mt-4">
                            <label for="image" class="text-sm font-medium text-gray-700">Gambar:</label>
                            <div class="flex items-center mt-2">

                                <img :src="'/img/product/' + selectedProduct.image" alt="Gambar Produk"
                                    class="w-20 h-20 object-cover mr-4">


                                <input type="file" name="image" id="image"
                                    class="block w-full py-2 px-4 border rounded-md bg-gray-100" accept="image/*">
                            </div>
                        </div>

                        <div class="deskripsi mt-4">
                            <label for="deskripsi" class="text-sm font-medium text-gray-700">Deskripsi:</label>
                            <input type="text" name="deskripsi" id="deskripsi" placeholder="Deskripsi Produk"
                                class="block w-full py-2 px-4 mt-1 rounded-md focus:border-blue-500"
                                x-bind:value="selectedProduct.deskripsi">
                        </div>
                        <div class="stok mt-4">
                            <label for="stok" class="text-sm font-medium text-gray-700">Stok:</label>
                            <input type="number" name="stok" id="stok" placeholder="Stok Produk"
                                class="block w-full py-2 px-4 mt-1 rounded-md focus:border-blue-500"
                                x-bind:value="selectedProduct.stok">
                        </div>
                        <div class="harga mt-4">
                            <label for="harga_produk" class="text-sm font-medium text-gray-700">Harga:</label>
                            <input type="number" name="harga_produk" id="harga_produk" placeholder="Harga Produk"
                                class="block w-full py-2 px-4 mt-1 rounded-md focus:border-blue-500"
                                x-bind:value="selectedProduct.harga_produk">
                        </div>
                    </div>
                    <div class="footer flex justify-end mt-6">
                        <button type="submit"
                            class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 font-semibold">Simpan</button>
                    </div>
                </form>
            </div>
        </div>

        {{-- Modal tambah stok produk --}}
        <div class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50"
            x-show="updateStok">
            <div class="bg-slate-200 p-6 rounded-xl lg:max-w-xl w-full mx-6 md:max-w-md max-w-sm" x-show="updateStok"
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 translate-y-[-50%]"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-300 transform"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 translate-y-[-50%]">
                <div class="title mb-6 flex justify-between">
                    <h1 class="text-center text-green-500 font-bold text-xl">Edit Produk:
                        <span id="id_produk_span" x-text="selectedProduct.nama_produk"></span>
                    </h1>
                    <button class="text-3xl font-black" @click="updateStok = false">&times;</button>
                </div>
                <div class="body">
                    <form :action="`{{ route('updateStok', '') }}/${selectedProductId}`" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="input">
                            <h1 x-text="selectedProductId"></h1>
                            <label for="stok" class="text-sm font-medium text-gray-700">Stok:</label>
                            <input type="number" name="tambah_stok" id="stok" placeholder="Tambah Stok Produk"
                                class="block w-full py-2 px-4 mt-1 rounded-md focus:border-blue-500">
                        </div>
                        <div class="foot mt-6">
                            <button type="submit"
                                class="px-4 py-2 bg-green-500 text-white rounded-lg w-full hover:bg-green-600 font-semibold">Tambah
                                Stok</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- Modal delete produk --}}
        <div class="" id="destroy" x-show="deleteProduk">
            <div class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50">
                <div class="bg-white  py-8 px-12 rounded-lg shadow-xl mx-4 md:mx-0">

                    <div class="head flex justify-end text-red-400">
                        <a href="#" class="text-end font-bold text-3xl"
                            @click="deleteProduk= false">&times;</a>
                    </div>
                    <div class="content flex flex-col justify-center">
                        <div class="svg flex flex-col justify-center text-center mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"
                                class="w-20 h-20 mx-auto" fill="red">
                                <path
                                    d="m40-120 440-760 440 760H40Zm138-80h604L480-720 178-200Zm302-40q17 0 28.5-11.5T520-280q0-17-11.5-28.5T480-320q-17 0-28.5 11.5T440-280q0 17 11.5 28.5T480-240Zm-40-120h80v-200h-80v200Zm40-100Z" />
                            </svg>
                        </div>

                        <div class="text">
                            <h1 class="font-semibold text-center text-xl">Apakah Anda Yakin <br> Ingin Menghapusnya?
                            </h1>


                            <div class="button-group flex flex-col sm:flex-row sm:justify-center gap-4 mt-8">
                                <!-- Tombol Batal -->
                                <button
                                    class="bg-gray-200 px-4 py-2 w-full sm:w-32 rounded-md shadow-md hover:bg-gray-300 transition-colors duration-300 font-semibold">
                                    Tidak
                                </button>

                                <!-- Formulir Hapus Produk -->
                                <form :action="`{{ route('produk.destroy', '') }}/${selectedProductDeleteId}`"
                                    method="POST" class="w-full sm:w-auto">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-500 text-white px-4 py-2 w-full sm:w-32 rounded-md shadow-md hover:bg-red-600 transition-colors duration-300">
                                        Hapus
                                    </button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>



        <!-- Form Tambah Service -->
        <div class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50"
            x-show="openService">
            <div class="content bg-slate-200 p-6 rounded-xl lg:max-w-xl w-full mx-6 md:max-w-md max-w-sm">
                <div class="title mb-6 flex justify-between">
                    <h1 class="text-center text-blue-500 font-bold text-xl">Tambah Service</h1>
                    <button class="text-3xl font-black" @click="openService = false">&times;</button>
                </div>
                <form action="{{ route('form-service') }}" method="POST">
                    @csrf
                    <div class="body flex flex-col">
                        <div class="nama-service flex flex-col">
                            <label for="nama_service" class="text-sm font-medium text-gray-700">Nama Service:</label>
                            <input type="text" name="nama_service" id="nama_service" placeholder="Nama Service"
                                class="block w-full py-2 px-4 mt-1 rounded-md focus:border-blue-500">
                        </div>

                        <div class="deskripsi-service mt-4">
                            <label for="deskripsi_service"
                                class="text-sm font-medium text-gray-700">Deskripsi:</label>
                            <input type="text" name="deskripsi_service" id="deskripsi_service"
                                placeholder="Deskripsi Service"
                                class="block w-full py-2 px-4 mt-1 rounded-md focus:border-blue-500">
                        </div>

                        <div class="harga-service mt-4">
                            <label for="harga_service" class="text-sm font-medium text-gray-700">Harga:</label>
                            <input type="number" name="harga_service" id="harga_service"
                                placeholder="Harga Service"
                                class="block w-full py-2 px-4 mt-1 rounded-md focus:border-blue-500">
                        </div>


                        <div class="kategori mt-4">
                            <label for="kategori" class="text-sm font-medium text-gray-700">kategori:</label>
                            <select name="kategori" id="kategori"
                                class="block w-full py-2 px-4 mt-1 rounded-md focus:border-blue-500">

                                <option value="Sepeda Motor" selected>
                                    Sepeda Motor
                                </option>
                                <option value="Mobil">
                                    Mobil
                                </option>

                            </select>
                        </div>
                    </div>
                    <div class="footer flex justify-end mt-6">
                        <button type="submit"
                            class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 font-semibold">Simpan</button>
                    </div>
                </form>
            </div>
        </div>

        {{-- Modal Update Service --}}
        <div class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50"
            x-show="updateService">
            <div class="content bg-yellow-100 p-6 rounded-xl lg:max-w-xl w-full mx-6 md:max-w-md max-w-sm">
                <div class="title mb-6 flex justify-between">
                    <h1 class="text-center text-yellow-500 font-bold text-xl">Update Service</h1>
                    <button class="text-3xl font-black text-yellow-500"
                        @click="updateService = false">&times;</button>
                </div>
                <form :action="`{{ route('service.update', '') }}/${serviceId}`" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="body flex flex-col">
                        <div class="nama-service flex flex-col">
                            <label for="nama_service" class="text-sm font-medium text-gray-700">Nama Service:</label>
                            <input type="text" name="nama_service" id="nama_service" placeholder="Nama Service"
                                class="block w-full py-2 px-4 mt-1 rounded-md focus:border-yellow-500"
                                x-bind:value="selectedService.nama_service">
                        </div>

                        <div class="deskripsi-service mt-4">
                            <label for="deskripsi_service"
                                class="text-sm font-medium text-gray-700">Deskripsi:</label>
                            <input type="text" name="deskripsi_service" id="deskripsi_service"
                                placeholder="Deskripsi Service"
                                class="block w-full py-2 px-4 mt-1 rounded-md focus:border-yellow-500"
                                x-bind:value="selectedService.deskripsi_service">
                        </div>

                        <div class="harga-service mt-4">
                            <label for="harga_service" class="text-sm font-medium text-gray-700">Harga:</label>
                            <input type="number" name="harga_service" id="harga_service"
                                placeholder="Harga Service"
                                class="block w-full py-2 px-4 mt-1 rounded-md focus:border-yellow-500"
                                x-bind:value="selectedService.harga_service">
                        </div>
                    </div>
                    <div class="kategori mt-4">
                        <label for="kategori" class="text-sm font-medium text-gray-700">Kategori:</label>
                        <select name="kategori" id="kategori"
                            class="block w-full py-2 px-4 mt-1 rounded-md focus:border-yellow-500"
                            x-bind:value="selectedService.kategori">

                            <option value="Sepeda Motor">
                                Sepeda Motor
                            </option>
                            <option value="Mobil">
                                Mobil
                            </option>

                        </select>
                    </div>

                    <div class="footer flex justify-end mt-6">
                        <button type="submit"
                            class="px-4 py-2 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600 font-semibold">Simpan</button>
                    </div>
                </form>
            </div>
        </div>

        {{-- Modal delete service --}}
        <div x-show="deleteService"
            class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50">
            <div class="bg-white py-8 px-12 rounded-lg shadow-xl mx-4 md:mx-0">
                <div class="head flex justify-end text-red-400">
                    <a href="#" class="text-end font-bold text-3xl" @click="deleteService = false">&times;</a>
                </div>
                <div class="content flex flex-col justify-center">
                    <div class="svg flex flex-col justify-center text-center mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" class="w-20 h-20 mx-auto"
                            fill="red">
                            <path
                                d="m40-120 440-760 440 760H40Zm138-80h604L480-720 178-200Zm302-40q17 0 28.5-11.5T520-280q0-17-11.5-28.5T480-320q-17 0-28.5 11.5T440-280q0 17 11.5 28.5T480-240Zm-40-120h80v-200h-80v200Zm40-100Z" />
                        </svg>
                    </div>
                    <div class="text">
                        <h1 class="font-semibold text-center text-xl">Apakah Anda Yakin <br> Ingin Menghapusnya?</h1>
                        <div class="button-group flex flex-col sm:flex-row sm:justify-center gap-4 mt-8">
                            <!-- Tombol Batal -->
                            <button
                                class="bg-gray-200 px-4 py-2 w-full sm:w-32 rounded-md shadow-md hover:bg-gray-300 transition-colors duration-300 font-semibold"
                                @click="deleteService = false">
                                Tidak
                            </button>
                            <!-- Formulir Hapus Service -->
                            <form :action="`{{ route('service.destroy', '') }}/${serviceId}`" method="POST"
                                class="w-full sm:w-auto">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="bg-red-500 text-white px-4 py-2 w-full sm:w-32 rounded-md shadow-md hover:bg-red-600 transition-colors duration-300">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Error -->
        <div x-data="{ popup: false, message: '', success: false }" x-init="@if (session('error')) popup = true; message = '{{ session('error') }}'; success = false; @endif
        @if (session('success')) popup = true; message = '{{ session('success') }}'; success = true; @endif" x-show="popup" @keydown.window.escape="popup = false"
            class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50">
            <div class="p-6 rounded-xl w-full mx-6 md:max-w-md max-w-sm"
                x-bind:class="{ 'bg-green-100': success, 'bg-red-100': (session('error')) }">
                <div class="flex justify-between items-center">
                    <h1 x-text="success ? 'Sukses' : 'Error'" class="text-xl font-bold"
                        x-bind:class="{ 'text-green-600': success, 'text-red-600': (session('error')) }"></h1>
                    <button @click="popup = false" class="text-3xl font-black">&times;</button>
                </div>
                <p class="mt-4" x-text="message"></p>
            </div>
        </div>

    </div>

</x-sidebar>
