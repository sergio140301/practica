<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class depto extends Model
{
    use HasFactory;

    
    public function carreras()
    {
        return $this->hasMany(Carrera::class);
    }
    

    protected $fillable = [
        'idDepto',
        'nombreDepto',
        'nombreMediano',
        'nombreCorto',
    ];
}
