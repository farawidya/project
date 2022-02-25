<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marketing extends Model
{
    use HasFactory;
    
    protected $table = 'm_user';
    protected $primaryKey = 'id_user';
    
    protected $fillable = [
        'id_akun',
        'Nama',
        'alamat',
        'email',
        'nohp',
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
    
