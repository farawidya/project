<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusTask extends Model
{
    use HasFactory;

    protected $table = 'm_status_task';
    protected $primaryKey = 'id_status_task';
}
