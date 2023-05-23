<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    public $timestamps = false;
    protected $table = 'komentar';
    protected $primaryKey = 'id_komentar';
    protected $fillable = ['id_artikel', 'nama', 'isi_komentar', 'email'];
}
