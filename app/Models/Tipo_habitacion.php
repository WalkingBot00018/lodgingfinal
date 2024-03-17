<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_Habitacion extends Model
{
    use HasFactory;

    protected $table = 'tipo_habitacion';


    protected $fillable = [
        'Nro_habitacion',
        'Descripcion',
        'Precio',
        'Disponibilidad',
    ];

    public function Habitacion()
    {
        return $this->belongsTo(Habitacion::class, 'Nro_Habitacion', 'Nro_Habitacion');
    }
}
