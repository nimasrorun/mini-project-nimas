<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index(){
        $artikel = Artikel::get();
        return view('backend.layouts.listartikel-admin', compact('artikel'));
    }
}
