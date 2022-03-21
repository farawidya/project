<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwalmeeting extends Model
{
    use HasFactory;
    protected $table = 'm_jadwal_meeting';
    protected $primaryKey = 'id_jadwal_meeting';
    
    protected $fillable = [
        'id_project',
        'start_date',
        'end_date',
        'tempat',
        'agenda',
    ];
    public function proyek(){
        return $this->belongsTo('App\Models\Proyek', 'id_project', 'id_project');
    }

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
