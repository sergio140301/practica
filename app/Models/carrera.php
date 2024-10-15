<?php

namespace App\Models;

use App\Models\depto;
use App\Models\alumno;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class carrera extends Model
{
    use HasFactory;
    

    public function alumnos()
    {
        return $this->hasMany(alumno::class);
    }
    
    // Define la relación con Departamento
    public function depto(): BelongsTo
    {
        return $this->belongsTo(depto::class, 'depto_id');
    }
    protected $fillable = [
        'idCarrera',
        'nombreCarrera',
        'nombreMediano',
        'nombreCorto',
        'depto_id',
    ];

}
