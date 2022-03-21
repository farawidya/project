<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\MomController;

class Mom extends Model
{
    use HasFactory;
    
    protected $table = 't_mom';
    protected $primaryKey = 'id_mom';
    
    protected $fillable = [
        'id_jadwal_meeting',
        'hasil_pembahasan',
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
    
