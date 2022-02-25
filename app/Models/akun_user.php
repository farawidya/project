<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class akun_user extends Model
{
    use HasFactory;

    protected $table = 't_akun_user';
    protected $primaryKey = 'id_akun';
    
    protected $fillable = [
        'Username',
        'password',
    ];
    protected $hidden = [
        'password',
    ];
}
