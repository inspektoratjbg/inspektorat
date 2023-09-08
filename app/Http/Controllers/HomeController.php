<?php

namespace App\Http\Controllers;

use App\pegawai;
use App\gambar;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::getUser();
        $penggunaa = Auth::getUser();
        $pengguna = pegawai::where('nip', $penggunaa['name'])->first();
        $gambar = gambar::where('kategori_gambar', 'like', '%'.'profil'.'%')->limit(5)->get();
        // dd($pengguna->nama_pegawai);
        
        return view('home', compact(['pengguna', 'gambar']));
    }
}
