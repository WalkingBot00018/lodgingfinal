<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class habitacion extends Model
{
    use HasFactory;
    
    protected $table = 'habitacion';

    protected $primaryKey = 'ID_Habitacion';

    protected $fillable = [
        'Nro_Habitacion',
        'Id_Tipo_Habitacion',
        

    ];

    public function Tipo_habitacion()
    {
        return $this->belongsTo(Tipo_habitacion::class, 'Id_Tipo_Habitacion', 'Id_Tipo_Habitacion');
    }
    public function servicio()
    {
        return $this->hasMany(servicio::class, 'ID_Servicio', 'Nro_Habitacion');
    }
    
}
//hola

