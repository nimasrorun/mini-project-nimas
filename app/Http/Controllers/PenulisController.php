<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\File;

class PenulisController extends Controller
{
    public function index(){
        $artikel = Artikel::where('id_penulis', '=', Auth::guard('penulis_guard')->user()->id_penulis)->get();
        return view('list-artikel', compact('artikel'));
    }

    public function create(){
        return view('form-artikel');
    }
    
    public function store(Request $request){
        $date = Carbon::now();

        $file = $request->file('gambar_artikel');
        $path = public_path('img/img_artikel');

        if (!File::isDirectory($path)) {
            File::makeDirectory($path, 0777, true);
        }

        $fileName = "img_artikel_" . uniqid() . '.' . $file->getClientOriginalExtension();


        if ($file->move($path, $fileName)) {
            Artikel::create([
                'judul_artikel' => $request->judul_artikel,
                'isi_artikel' => $request->isi_artikel,
                'id_penulis' => '1',
                'tanggal' => $date->format('Y-m-d'),
                'gambar_artikel' => $fileName,
                
            ]);
        }

        return redirect()->route('list-artikel.index');
    }

    public function edit(Artikel $list_artikel){
        $artikel = $list_artikel;
        return view('form-artikel', compact('artikel'));
    }

    public function update(Request $request, Artikel $list_artikel){
        $artikel = $list_artikel;
        $path = public_path('img/img_artikel');
        $date = Carbon::now();

        if($request->hasFile('gambar_artikel')){
            $file = $request->file('gambar_artikel');

            $fileName = $artikel->gambar_artikel;

            if ($file->move($path, $fileName)) {
                $artikel->update([
                    'judul_artikel' => $request->judul_artikel,
                    'isi_artikel' => $request->isi_artikel,
                    'id_penulis' => 1,
                    'tanggal' => $date->format('Y-m-d'),
                    'gambar_artikel' => $fileName
                ]);
            }
        }else{
            $artikel->update([
                'judul_artikel' => $request->judul_artikel,
                'isi_artikel' => $request->isi_artikel,
                'id_penulis' => 1,
                'tanggal' => $date->format('Y-m-d')
            ]);
        }

        return redirect()->route('list-artikel.index');
    }

    public function destroy(Artikel $list_artikel){
        $path = public_path('img/img_artikel');
        $list_artikel->delete();
        File::delete($path . '/' . $list_artikel->gambar_artikel);
        
        return redirect()->route('list-artikel.index');
    }
}
