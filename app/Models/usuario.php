<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    use HasFactory;

    public function copies()
    {
        return $this->belongsToMany(copy::class, 'usuario_copy', 'usuario_id','copy_id');
    }
}
