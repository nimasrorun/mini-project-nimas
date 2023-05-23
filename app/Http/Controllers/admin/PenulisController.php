<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Penulis;
use Illuminate\Http\Request;

class PenulisController extends Controller
{
    public function index(){
        $penulis = Penulis::get();
        return view('backend.layouts.listpenulis', compact('penulis'));
    }
}
