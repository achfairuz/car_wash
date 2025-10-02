<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class userController extends Controller
{
    public function showLoginForm()
    {
        return view('login', ['title' => 'login']);
    }

    public function register(Request $request)
    {
        // Validasi input pengguna
        $validate = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'username' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Jika validasi gagal, kembalikan ke halaman sebelumnya dengan pesan error
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }

        // Buat user baru
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => 'user', // Atur peran default sebagai 'user'
            'email_verified_at' => now(), // Isi email_verified_at dengan waktu sekarang
            'remember_token' => Str::random(60), // Buat remember_token secara otomatis
        ]);

        // Redirect ke halaman login dengan pesan sukses
        return redirect()->route('login')->with('success', 'Registration successful!');
    }


    public function login(Request $request)
    {
        // Cek jika pengguna sudah login
        if (Auth::check()) {
            // Arahkan ke dashboard sesuai peran pengguna
            if (Auth::user()->role === 'admin') {
                return redirect()->route('dashboard-admin');
            } elseif (Auth::user()->role === 'user') {
                return redirect()->route('dashboard-user');
            }
        }

        // Validasi input
        $validate = Validator::make($request->all(), [
            'username' => 'required|string|max:255',
            'password' => 'required|string|min:6',
        ]);

        if ($validate->fails()) {
            return back()->withErrors($validate)->withInput();
        }

        // Ambil credentials dari input
        $credentials = $request->only('username', 'password');

        // Coba autentikasi
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            session(['id' => Auth::user()->id]);
            session(['username' => Auth::user()->username]);
            session(['role' => Auth::user()->role]);


            // Cek role pengguna setelah login berhasil
            if (Auth::user()->role === 'admin') {
                return redirect()->route('dashboard-admin');
            } elseif (Auth::user()->role === 'user') {
                return redirect()->route('dashboard-user');
            } else {
                return redirect()->route('login')->withErrors($validate)->withInput();
            }
        }

        // Jika login gagal
        return back()->withErrors([
            'loginError' => 'Username atau password salah.',
        ])->withInput();
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
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
        //
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
