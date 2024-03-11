<?php
namespace App\Models;
use App\models\Tipo_habitacion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    use HasFactory;
    
    protected $table = 'habitacion';

    protected $primaryKey = 'Nro_Habitacion';

    protected $fillable = [
        'Id_Tipo_Habitacion',
    ];

    public function tipoHabitacion()
    {
        return $this->belongsTo(Tipo_habitacion::class, 'Id_Tipo_Habitacion', 'Id_Tipo_Habitacion');
    }

    public function servicios()
    {
        return $this->hasMany(Servicio::class, 'Nro_Habitacion', 'Nro_Habitacion');
    }
}

//hola

