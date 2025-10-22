<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    private $wisata = [
        ['id' => 1, 'name' => 'Gunung Bromo', 'location' => 'Jawa Timur', 'image' => 'bromo.jpg', 'price' => 'Rp 150.000'],
        ['id' => 2, 'name' => 'Candi Borobudur', 'location' => 'Jawa Tengah', 'image' => 'borobudur.jpg', 'price' => 'Rp 100.000'],
        ['id' => 3, 'name' => 'Raja Ampat', 'location' => 'Papua Barat', 'image' => 'rajaampat.jpg', 'price' => 'Rp 800.000'],
        ['id' => 4, 'name' => 'Labuan Bajo', 'location' => 'Nusa Tenggara Timur', 'image' => 'labuanbajo.jpg', 'price' => 'Rp 650.000'],
        ['id' => 5, 'name' => 'Candi Prambanan', 'location' => 'DI Yogyakarta', 'image' => 'prambanan.jpg', 'price' => 'Rp 90.000'],
    ];

    public function login(Request $req)
    {
        // jika sudah login di session, arahkan ke dashboard
        if ($req->session()->has('username')) {
            return redirect()->route('dashboard');
        }
        return view('login');
    }

    public function doLogin(Request $req)
    {
        $username = $req->input('username');

        // Simulasi login sederhana: simpan username di session
        $req->session()->put('username', $username);

        // redirect ke dashboard setelah login (session dipakai untuk menampilkan menu)
        return redirect()->route('dashboard');
    }

    public function dashboard(Request $req)
    {
        $username = $req->session()->get('username', 'Tamu');
        return view('dashboard', compact('username'));
    }

    public function pengelolaan(Request $req)
    {
        // protect simple: jika belum login, redirect ke login
        if (!$req->session()->has('username')) {
            return redirect()->route('login');
        }

        $data = $this->wisata;
        return view('pengelolaan', compact('data'));
    }

    public function profile(Request $req)
    {
        if (!$req->session()->has('username')) {
            return redirect()->route('login');
        }

        $username = $req->session()->get('username', 'Tamu');
        return view('profile', compact('username'));
    }

    public function logout(Request $req)
    {
        $req->session()->forget('username');
        return redirect()->route('login');
    }
}
