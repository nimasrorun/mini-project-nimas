<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User;

class Admin extends User
{
    public $timestamps = false;
    protected $table = 'admin';
    protected $primaryKey = 'username';

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['username', 'password'];
}
