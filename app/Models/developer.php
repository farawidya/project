<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class developer extends Model
{
    use HasFactory;
    
    protected $table = 'devlops';
    protected $primaryKey = 'devlop_id';
    
    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'no_telp',
        'gmail',
    ];
    
    // function image()
    // {
    //     if ($this->image && file_exists(public_path('images/post/' . $this->image)))
    //         return asset('images/post/' . $this->image);
    //     else
    //         return asset('images/no_image.png');
    // }
    
    // function delete_image()
    // {
    //     if ($this->image && file_exists(public_path('images/post/' . $this->image)))
    //         return unlink(public_path('images/post/' . $this->image));
    // }
    }