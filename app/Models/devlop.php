<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class devlop extends Model

{
    use HasFactory;
    
    protected $table = 'devlop';
    protected $primaryKey = 'developer_id';
    
    protected $fillable = [
        'Nama',
        'Jenis_kelamin',
        'no_telp',
        'gmail',
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
    