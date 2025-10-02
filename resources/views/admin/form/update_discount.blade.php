<x-sidebar>
    <x-slot:title>update discount</x-slot:title>


    <div class="max-w-md mx-auto mt-10 bg-white shadow-lg rounded-lg p-6">
        <h2 class="text-xl font-bold mb-4">Update Discount</h2>

        <form action="{{ route('discount.update', $discount->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Kode -->
            <div class="mb-4">
                <label for="kode" class="block text-gray-700 font-semibold">Kode</label>
                <input type="text" name="kode" id="kode" value="{{ old('kode', $discount->kode) }}"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <!-- Quantity -->
            <div class="mb-4">
                <label for="quantity" class="block text-gray-700 font-semibold">Quantity</label>
                <input type="number" name="quantity" id="quantity" value="{{ old('quantity', $discount->quantity) }}"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <!-- Discount -->
            <div class="mb-4">
                <label for="discount" class="block text-gray-700 font-semibold">Discount (%)</label>
                <input type="number" name="discounts" id="discount"
                    value="{{ old('discount', $discount->discounts) }}"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">
                Update
            </button>
        </form>
    </div>

</x-sidebar>
