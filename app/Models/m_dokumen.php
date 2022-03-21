<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class m_dokumen extends Model
{
    use HasFactory;

    protected $table = 'm_dokumen';
    protected $primaryKey = 'id_dokumen';
    
    protected $fillable = [
        'judul_dokumen',
        'dokumen',
        
    ];

    protected $guarded = ['id_dokumen'];
}
