<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemain;

class ControllerPemain extends Controller
{
    // Menampilkan semua barang
    public function index()
    {
        $pemain = pemain::all();
        return view('index', compact('pemain'));
    }

}