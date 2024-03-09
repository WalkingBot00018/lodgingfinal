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
        'Descripcion',
        'Precio',
        'Disponibilidad',
    ];
    public function habitacion(){
        return $this->hasMany(habitacion::class, 'Id_Tipo_Habitacion', 'Id_Tipo_Habitacion');
    }
}
