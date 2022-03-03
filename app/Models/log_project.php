<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class log_project extends Model
{
    use HasFactory;

    protected $table = 't_log_project';
    protected $primaryKey = 'id_log_project';

    protected $guarded = ['id_log_project'];
}
