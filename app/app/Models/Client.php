<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'Client';
    protected $primaryKey = 'id_client';

    protected $fillable = [
        'nama_client',
        'no_hp',
        'email',
        'pekerjaan',
        'alamat',
    ];

    function image()
    {
        if ($this->image && file_exists(public_path('images/client/' . $this->image)))
            return asset('images/client/' . $this->image);
        else
            return asset('images/no_image.png');
    }

    function delete_image()
    {
        if ($this->image && file_exists(public_path('images/client/' . $this->image)))
            return unlink(public_path('images/client/' . $this->image));
    }
}
