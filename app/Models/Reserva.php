<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    protected $table = 'reserva';
    protected $primaryKey = 'Nro_reserva';
   
    protected $fillable = [
        'ID_Usuario',
        'Nro_Habitacion',
        'FechaEntrada',
        'FechaSalida',
        'Estado_Reserva',
    ];


    public function User()
    {
        return $this->belongsTo(user::class, 'Nro_Reserva', 'ID_Usuario');
    }

    public function habitacion()
    {
        return $this->belongsTo(habitacion::class, 'Nro_Reserva', 'Nro_Habitacion');
    }
}
