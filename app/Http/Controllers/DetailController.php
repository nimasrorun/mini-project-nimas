<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Komentar;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function detail(Artikel $artikel){
        $komentar = Komentar::where('id_artikel', $artikel->id_artikel)->get();

        // return $komentar;
        return view('detail-artikel', compact('artikel', 'komentar'));
    }

    public function comment(Request $request, Artikel $artikel){
        Komentar::create([
            'id_artikel' => $artikel->id_artikel,
            'nama' => $request->nama,
            'email' => $request->email,
            'isi_komentar' => $request->isi_komentar
        ]);

        return redirect()->route('detail-artikel.index', $artikel->id_artikel);
    }
}
