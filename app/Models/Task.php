<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $table = 'm_project';
    protected $primaryKey = 'id_project';
    
    protected $fillable = [
         'id_project',
         'Nama Project',
         'Deadline Project',
         'Status Project',
    ];
    
    public function klien(){
        return $this->belongsTo('App\Models\client', 'id_m_klien', 'id_m_klien');
    }

//     function image()
//     {
//         if ($this->image && file_exists(public_path('images/post/' . $this->image)))
//             return asset('images/post/' . $this->image);
//         else
//             return asset('images/no_image.png');
//     }
    
//     function delete_image()
//     {
//         if ($this->image && file_exists(public_path('images/post/' . $this->image)))
//             return unlink(public_path('images/post/' . $this->image));
//     }
    
}
