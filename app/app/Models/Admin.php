<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    use HasFactory;

    protected $table = 'admin';
    protected $primaryKey = 'id_admin';

    protected $fillable = [
        'nama_admin',
        'no_hp',
        'email',
        'username',
        'password',
    ];

    function image()
    {
        if ($this->images && file_exists(public_path('images/admin/' . $this->images)))
            return asset('images/admin/' . $this->images);
        else
            return asset('images/no_image.png');
    }

    function delete_image()
    {
        if ($this->image && file_exists(public_path('images/admin/' . $this->image)))
            return unlink(public_path('images/admin/' . $this->image));
    }
}