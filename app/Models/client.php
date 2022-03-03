<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory;

    protected $table = 'm_klien';
    protected $primaryKey = 'id_m_klien';
    
    protected $fillable = [
        'nama_perusahaan',
        'nama_klien',
        'bidang',
        'email',
        'no_hp',
        'alamat',
    ];

}
