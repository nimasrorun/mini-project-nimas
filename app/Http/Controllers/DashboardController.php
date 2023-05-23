<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $artikel = Artikel::get();
        return view('index', compact('artikel'));
    }
}
