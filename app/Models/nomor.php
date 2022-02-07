<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nomor extends Model
{
   use HasFactory;

    protected $table = 'nomor';
    protected $primaryKey = 'nomor_id';

    protected $fillable = [
        'dokumen ',
        'penomoran',
        'kategori',
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