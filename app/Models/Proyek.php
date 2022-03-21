<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyek extends Model
{
    use HasFactory;

    protected $table = 'm_project';
    protected $primaryKey = 'id_project';

    protected $fillable = [
        'id_klien',
        'id_status_project',
        'nama_project',
        'deskripsi_project',
        'waktumulai',
        'waktuberakhir'
    ];

    public function klien(){
        return $this->belongsTo('App\Models\client', 'id_m_klien', 'id_m_klien');
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

    public function members()
    {
        return $this->belongsToMany('App\Models\Marketing', 't_log_project', 'id_project', 'id_user');
    }

    public function tim()
    {
        return $this->hasMany('App\Models\Tim', 'id_project', 'id_project');
    }

    public function logs()
    {
        return $this->hasMany('App\Models\log_project', 'id_project', 'id_project');
    }
}

