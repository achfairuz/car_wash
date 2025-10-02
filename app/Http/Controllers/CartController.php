<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class CartController extends Controller
{

    public function index()
    {
        // Ambil user yang sedang login
        $userId = Auth::id(); // Mengambil ID pengguna yang sedang login
        $userRole = Auth::user()->role; // Mengambil role pengguna yang sedang login ('admin' atau 'user')

        // Query keranjang berdasarkan user_id
        $carts = Cart::where('user_id', $userId)->get();

        // Cek role dan arahkan ke view yang sesuai
        if ($userRole === 'admin') {
            // Jika role admin, arahkan ke view admin
            return view('form.carts', [
                'title' => 'Admin Shopping Cart',
                'carts' => $carts,
            ]);
        } elseif ($userRole === 'user') {
            // Jika role user, arahkan ke view user
            return view('form.carts', [
                'title' => 'Shopping Cart',
                'carts' => $carts,
            ]);
        }

        // Jika role tidak dikenal, arahkan ke halaman error atau akses ditolak
        abort(403, 'Unauthorized action.');
    }

    public function add(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'produk_id' => 'nullable|exists:produks,id', // Validasi untuk produk_id
            'service_id' => 'nullable|exists:services,id', // Validasi untuk service_id
            'quantity' => 'required|integer|min:1', // Validasi untuk quantity
        ]);

        // Ambil ID pengguna yang sedang login
        $userId = Auth::id();

        // Tentukan apakah menggunakan produk_id atau service_id
        $cartItem = Cart::where('user_id', $userId)
            ->where(function ($query) use ($validatedData) {
                if (isset($validatedData['produk_id'])) {
                    $query->where('produk_id', $validatedData['produk_id']);
                } elseif (isset($validatedData['service_id'])) {
                    $query->where('service_id', $validatedData['service_id']);
                }
            })
            ->first();

        if ($cartItem) {
            // Item sudah ada di keranjang, update quantity
            $cartItem->quantity += $validatedData['quantity'];
            $cartItem->save();
        } else {
            // Buat instance baru dari model Cart
            $cart = new Cart();
            $cart->user_id = $userId;
            $cart->quantity = $validatedData['quantity'];

            // Tentukan apakah menggunakan produk_id atau service_id
            if (isset($validatedData['produk_id'])) {
                $cart->produk_id = $validatedData['produk_id'];
            } elseif (isset($validatedData['service_id'])) {
                $cart->service_id = $validatedData['service_id'];
            }

            // Simpan ke database
            $cart->save();
        }

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Item berhasil ditambahkan ke keranjang!');
    }
    public function updateQuantity(Request $request, $id)
    {
        $cart = Cart::findOrFail($id);
        $cart->quantity = $request->quantity;
        $cart->save();

        return response()->json(['success' => true]);
    }


    public function destroy($id)
    {
        $cart = Cart::findOrFail($id);

        $cart->delete();

        return back()->with('success', 'Barang telah berhasil dihapus dari keranjang!');
    }
}
