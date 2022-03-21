<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tim extends Model
{
    use HasFactory;

    protected $table = 't_log_project';
    protected $primaryKey = 'id_log_project';
    
    protected $fillable = [
        'id_project',
        'id_user',
    ];
    
    
}