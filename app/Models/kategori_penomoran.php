<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori_penomoran extends Model
{
    use HasFactory;
    
    protected $table = 'm_kategori_penomoran';
    protected $primaryKey = 'id_kategori_penomoran';
    
    protected $fillable = [
        'kategori',
    ];

    
}
