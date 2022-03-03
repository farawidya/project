<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori_penomoran extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'kategori',
    ];

    public function penomoran()
    {

        return $this->hasMany(Penomoran::class);
    }
}
