<?php

namespace App\Http\Controllers;

use App\Models\discounts;
use Illuminate\Http\Request;

class DiscountsController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode' => 'required',
            'quantity' => 'required|numeric|min:1',
            'discounts' => 'required|numeric|min:1|max:100',
        ]);

        // Simpan ke database (contoh saja)
        discounts::create($validated);

        return redirect()->back()->with('success', 'Discount berhasil disimpan!');
    }


    public function update(int $id)
    {
        $discount = Discounts::find($id);

        if (!$discount) {
            return redirect()->back()->with('error', 'Data diskon tidak ditemukan.');
        }

        return view('admin.form.update_discount', compact('discount'));
    }


    public function edit(Request $request, int $id)
    {
        $discount = Discounts::find($id);

        if (!$discount) {
            return redirect()->back()->with('error', 'Data diskon tidak ditemukan.');
        }

        $discount->update(
            $request->only([
                'kode',
                'quantity',
                'discounts'
            ])
        );

        return redirect()->route('discounts-admin')->with('success', 'Updatesuccessfull');
    }
}
