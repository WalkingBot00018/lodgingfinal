<?php

namespace App\Models;
use App\Models\User;
use App\Models\Habitacion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    
    protected $table = 'reserva';
    protected $primaryKey = 'Nro_reserva';

    protected $fillable = [
        'Nro_doc',
        'Nro_Habitacion',
        'FechaEntrada',
        'FechaSalida',
        'Estado_Reserva',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'Nro_doc', 'Nro_doc');
    }

    public function habitacion()
    {
        return $this->belongsTo(Habitacion::class, 'Nro_Habitacion', 'Nro_Habitacion');
    }
}
