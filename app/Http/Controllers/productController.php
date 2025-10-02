<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnCallback;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input dengan custom error message untuk gambar
        $validatedData = $request->validate([
            'nama_produk' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
            'image' => 'required|mimes:jpg,jpeg,png,gif|max:2048',
            'stok' => 'required|numeric|min:0',
            'harga_produk' => 'required|numeric|min:0',
        ], [
            'image.mimes' => 'Format gambar tidak valid. Harap unggah file dengan format jpg, jpeg, png, atau gif.',
            'image.max' => 'Ukuran gambar melebihi batas maksimum 2MB.',
        ]);

        // Proses upload gambar
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('img/product'), $imageName);
            // Tambahkan nama gambar ke data yang akan disimpan
            $validatedData['image'] = $imageName;
        }

        // Simpan data produk ke database
        produk::create($validatedData);

        return redirect()->back()->with('success', 'Produk berhasil ditambahkan!');
    }




    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // Validasi data
        $validated = $request->validate([
            'id_produk' => 'required|exists:produks,id',
            'nama_produk' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required|string',
            'stok' => 'required|integer',
            'harga_produk' => 'required|integer',
        ]);

        // Mencari produk berdasarkan ID
        $produk = Produk::findOrFail($request->id_produk);

        // Mengunggah gambar jika ada
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($produk->image && file_exists(public_path('img/product/' . $produk->image))) {
                unlink(public_path('img/product/' . $produk->image));
            }

            // Simpan gambar baru
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('img/product'), $imageName);
            $validated['image'] = $imageName;
        }

        // Perbarui data produk
        $produk->update($validated);

        // Redirect atau respon yang sesuai
        return redirect()->back()->with('success', 'Produk berhasil diupdate!');
    }


    public function updateStok(Request $request, $id)
    {
        // Validasi data
        $validated = $request->validate([
            'tambah_stok' => 'required|integer|min:1', // Validasi untuk memastikan nilai stok yang ditambahkan adalah integer positif
        ]);

        // Mencari produk berdasarkan ID
        $produk = Produk::findOrFail($id);

        // Tambahkan stok
        $produk->stok += $validated['tambah_stok'];

        // Simpan perubahan
        $produk->save();

        // Redirect atau respon yang sesuai
        return redirect()->back()->with('success', 'Stok produk berhasil ditambahkan!');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produk = produk::findOrFail($id);

        if ($produk->image && file_exists(public_path('img/product/') . $produk->image)) {
            unlink(public_path('img/product/') . $produk->image);
        }

        $produk->delete();

        return redirect()->back()->with('success', 'Produk telah berhasil dihapus!!!');
    }
}
