<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    public $timestamps = false;
    protected $table = 'artikel';
    protected $primaryKey = 'id_artikel';
    protected $fillable = ['id_artikel', 'judul_artikel', 'isi_artikel', 'id_penulis', 'tanggal', 'gambar_artikel'];

    public function Penulises(){
        return $this->belongsTo(Penulis::class);
    }
}
