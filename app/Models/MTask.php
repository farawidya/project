<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MTask extends Model
{
    use HasFactory;

    protected $table = 'm_task';
    protected $primaryKey = 'id_task';

    public function statusTask()
    {
        return $this->hasOne('App\Models\StatusTask', 'id_status_task', 'id_task');
    }
}
