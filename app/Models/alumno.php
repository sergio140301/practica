<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class alumno extends Model
{
    use HasFactory;

         // Define la relación con Carrera
         public function carrera(): BelongsTo
         {
             return $this->belongsTo(Carrera::class);
         }
        protected $fillable = [
            'noctrl',
            'nombre',
            'apellidop',
            'apellidom',
            'sexo',
             'email',
            'carrera_id',];
    
}
