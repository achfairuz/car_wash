<?php

namespace App\Http\Controllers;

use App\Models\service;
use Illuminate\Http\Request;

class serviceController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama_service' => 'required|string|max:255',
            'deskripsi_service' => 'nullable|string|max:255',
            'harga_service' => 'required|numeric|min:0',
            'kategori' => 'required|string|in:Sepeda Motor,Mobil',
        ]);

        service::create($validate);
        return redirect()->back()->with('success', 'Service Berhasil DiTambahkan!!!');
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
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'nama_service' => 'required|string|max:255',
            'deskripsi_service' => 'nullable|string|max:255',
            'harga_service' => 'required|numeric|min:0',
            'kategori' => 'required|string|in:Sepeda Motor,Mobil',
        ]);

        $service = service::findOrFail($id);

        $service->update($validate);

        return redirect()->back()->with('success', 'Service telah berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = service::findOrFail($id);

        $service->delete();

        return redirect()->back()->with('success', 'Service telah berhasil dihapus!');
    }
}
