<?php

namespace App\Models;

use App\Models\carrera;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class depto extends Model
{
    use HasFactory;

    
    public function carreras()
    {
        return $this->hasMany(carrera::class);
    }
    

    protected $fillable = [
        'idDepto',
        'nombreDepto',
        'nombreMediano',
        'nombreCorto',
    ];
}
