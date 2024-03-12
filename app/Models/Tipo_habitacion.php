<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_habitacion extends Model
{
    use HasFactory;

    protected $table = 'tipo_habitacion';

    protected $primaryKey = 'Id_Tipo_Habitacion';

    protected $fillable = [
        'Nro_Habitacion',
        'Descripcion',
        'Precio',
        'Disponibilidad',
    ];
    public function habitacion()
    {
        return $this->belongsTo(habitacion::class, 'Id_Tipo_Habitacion', 'ID_Habitacion');
    }
}
