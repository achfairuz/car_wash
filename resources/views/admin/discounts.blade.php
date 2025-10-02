<x-sidebar>
    <x-slot:title>Discounts</x-slot:title>

    <section class="bg-gray-200 min-h-screen py-10">
        <div class="container mx-auto bg-white shadow-lg rounded-lg p-8">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6">
                <h1 class="text-blue-600 font-bold text-2xl mb-4 md:mb-0">Buat Discount</h1>
                <form action="{{ route('discount.store') }}" method="POST"
                    class="flex flex-col md:flex-row md:items-center space-y-4 md:space-y-0 md:space-x-4">
                    @csrf
                    <div>
                        <input type="text" name="kode" placeholder="Kode Discount" value="{{ old('kode') }}"
                            class="border py-2 px-4 rounded-md w-full @error('kode') border-red-500 @enderror">
                        @error('kode')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <input type="number" name="quantity" placeholder="Jumlah" value="{{ old('quantity') }}"
                            class="border py-2 px-4 rounded-md w-full @error('quantity') border-red-500 @enderror">
                        @error('quantity')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <input type="number" name="discounts" placeholder="Discount (%)" value="{{ old('discount') }}"
                            class="border py-2 px-4 rounded-md w-full @error('discount') border-red-500 @enderror">
                        @error('discount')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit"
                        class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700 transition">Simpan</button>
                </form>
            </div>



            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Kode Discount
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Quantity
                            </th>

                            <th scope="col" class="px-6 py-3">
                                Discount
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($discounts as $discount)
                            <tr
                                class="text-white odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                                <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap ">
                                    {{ $no++ }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $discount['kode'] }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $discount['quantity'] }}

                                </td>
                                <td class="px-6 py-4">
                                    {{ $discount['discounts'] }} %

                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('form.update-discount', $discount['id']) }}"
                                        class="text-yellow-400">Update</a> | <a href="">delete</a>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>

        </div>
    </section>
</x-sidebar>
