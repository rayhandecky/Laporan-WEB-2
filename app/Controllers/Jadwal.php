<?php

namespace App\Controllers;

class Jadwal extends BaseController
{
    public function index()
    {
        // Logika untuk menampilkan daftar jadwal keberangkatan umrah
        return view('jadwal/index');
    }

    public function detail($id)
    {
        // Logika untuk menampilkan detail jadwal keberangkatan berdasarkan ID
        return view('jadwal/detail', ['id' => $id]);
    }
}
