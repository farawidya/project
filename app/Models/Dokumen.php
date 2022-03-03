<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    use HasFactory;

    public function status_project()
    {
        return $this->belongsTo(Status_Project::class, 'foreign_key', 'status_project');
    }

    protected $table = 't_dokumen_status_project';
    protected $primaryKey = 'id_dokumen_status_project';
    
    protected $fillable = [
        'dokumen',
        
    ];

    protected $guarded = ['id_dokumen_status_project'];
}
