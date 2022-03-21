<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class log_project extends Model
{
    use HasFactory;

    protected $table = 't_log_project';
    protected $primaryKey = 'id_log_project';

    protected $fillable = [
        'id_project',
        'id_user',

    ];

    public function proyek(){
        return $this->belongsTo('App\Models\Proyek', 'id_project', 'nama_project');
    }

    public function marketing(){
        return $this->belongsTo('App\Models\Marketing', 'id_user', 'id_user');
    }

    public function dokumen(){
        return $this->hasMany(Dokumen::class());
    }

    public function tasks(){
        return $this->hasMany('App\Models\MTask', 'id_log_project', 'id_log_project');
    }

    public function user()
    {
        return $this->hasOne('App\Models\Marketing', 'id_user', 'id_log_project');
    }


    protected $guarded = ['id_log_project'];
}
