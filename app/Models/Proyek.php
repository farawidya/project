<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyek extends Model
{
    use HasFactory;
    
    protected $table = 'proyek';
    protected $primaryKey = 'proyek_id';
    
    protected $fillable = [
        'nama_project',
        'nama_klien',
        'deskripsi_project',
        'waktu',
        'status_project',
    ];
    
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
    
