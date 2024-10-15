<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class carrera extends Model
{
    use HasFactory;
    

    public function alumnos()
    {
        return $this->hasMany(Alumno::class);
    }
    
    // Define la relación con Departamento
    public function depto(): BelongsTo
    {
        return $this->belongsTo(Depto::class, 'depto_id');
    }
    protected $fillable = [
        'idCarrera',
        'nombreCarrera',
        'nombreMediano',
        'nombreCorto',
        'depto_id',
    ];

}
