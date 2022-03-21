<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nomor extends Model
{
   use HasFactory;

    protected $table = 't_dokumen_penomoran';
    protected $primaryKey = 'id_dokumen_penomoran';

    protected $fillable = [
        'id_kategori_penomoran',
        'id_project',
        'id_dokumen',
        'tanggal',
        'penomoran',
    ];
    // protected $guarded = [
    //     'id'
    // ];

    function image()
    {
        if ($this->image && file_exists(public_path('images/post/' . $this->image)))
            return asset('images/post/' . $this->image);
        else
            return asset('images/no_image.png');
    }

    function delete_image()
    {
        if ($this->image && file_exists(public_path('images/post/' . $this->image)))
            return unlink(public_path('images/post/' . $this->image));
    }
}