<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ordersController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function process(Request $request)
    {
        $selectedCarts = $request->input('selectedCarts');
        $subtotal = $request->input('subtotal');
        $discount = $request->input('discount');
        $shipping = $request->input('shipping');
        $total = $request->input('total');


        return view('form.orders', compact('selectedCarts', 'subtotal', 'discount', 'shipping', 'total'));
    }
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
        $validate = $request->validate(
            [
                "user_id" => 'required|'
            ]
        );
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
