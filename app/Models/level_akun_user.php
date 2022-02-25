<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class level_akun_user extends Model
{
    use HasFactory;

    protected $table = 'm_level_akun_user';
    protected $primaryKey = 'id_level_akun_user';
    
    protected $fillable = [
        'level',
    ];
}
