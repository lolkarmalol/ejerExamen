<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class copy extends Model
{
    use HasFactory;

    public function book()
    {
        return $this->belongsTo(book::class);
    }

    public function usuarios()
    {
        return $this->belongsToMany(Usuario::class, 'usuario_copy','copy_id', 'usuario_id');
    }

}
