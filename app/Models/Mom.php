<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\MomController;

class Mom extends Model
{
    use HasFactory;
    
    protected $table = 'Mom';
    protected $primaryKey = 'mom_id';
    
    protected $fillable = [
        'nama_project',
        'tanggal',
        'tempat',
        'agenda',
        'hasil',
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
    
