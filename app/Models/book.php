<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;

    public function copies()
    {
        return $this->hasMany(Copy::class);
    }

    protected $fillable = [
        'code',
        'title',
        'ISBN',
        'editorial',
        'pages'
    ];
}
