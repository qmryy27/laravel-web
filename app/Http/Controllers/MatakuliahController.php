<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    // Menampilkan data matakuliah
    public function index()
    {
        return "Menampilkan data matakuliah";
    }

    // Menampilkan detail matakuliah berdasarkan kode
    public function show($kode = null)
    {
        if ($kode) {
            return "Anda mengakses matakuliah " . $kode;
        }
        return "Masukkan kode matakuliah!";
    }
}
