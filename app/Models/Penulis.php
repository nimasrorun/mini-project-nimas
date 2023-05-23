<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Penulis extends User
{
    public $timestamps = false;
    protected $table = "penulis";
    protected $primaryKey = "id_penulis";
    protected $fillable = ['username', 'password'];

    public function artikels(){
        return $this->hasMany(Artikel::class);
    }
}
