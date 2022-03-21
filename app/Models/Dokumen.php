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

    public function log()
    {
        return $this->belongsTo(log_project::class, 'foreign_key', 'id_project');
    }

    public function m_dokumen()
    {
        return $this->belongsTo(m_dokumen::class, 'foreign_key', 'dokumen');
    }

    protected $table = 't_dokumen_status_project';
    protected $primaryKey = 'id_dokumen_status_project';
    
    protected $fillable = [
        'id_status_project',
        'id_dokumen',
        'id_log_project',
        
    ];

    protected $guarded = ['id_dokumen_status_project'];

    // function dokumen()
    // {
    //     if ($this->dokumen && file_exists(public_path('dokumen/' . $this->dokumen)))
    //         return asset('dokumen/' . $this->dokumen);
    //     else
    //         return asset('dokumen/no_image.png');
    // }

    // function delete_image()
    // {
    //     if ($this->dokumen && file_exists(public_path('dokumen/' . $this->dokumen)))
    //         return unlink(public_path('dokumen/' . $this->dokumen));
    // }
}
