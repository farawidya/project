<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    use HasFactory;

    protected $table = 'm_project';
    protected $primaryKey = 'id_project';

    protected $fillable = [
        'nama_project',
        'deskripsi_project',
        'waktu_mulai',
        'waktu_berakhir',
        
    ];

    protected $guarded = ['id_project'];
}
