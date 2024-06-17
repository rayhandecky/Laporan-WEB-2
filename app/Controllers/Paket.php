<?php

namespace App\Controllers;

class Paket extends BaseController
{
    public function index()
    {
        // Logika untuk menampilkan daftar paket umrah
        return view('paket/index');
    }

    public function detail($id)
    {
        // Logika untuk menampilkan detail paket umrah berdasarkan ID
        return view('paket/detail', ['id' => $id]);
    }

    public function order()
    {
        // Logika untuk memproses pemesanan paket umrah
        // Anda bisa menambahkan validasi dan penyimpanan data ke database
        return redirect()->to('/paket');
    }
}
