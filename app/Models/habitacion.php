<?php
namespace App\Models;
use App\models\Tipo_habitacion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    use HasFactory;
    
    protected $table = 'habitacion';

    protected $primaryKey = 'ID_habitacion';

    protected $fillable = [
        'Nro_Habitacion',
    ];


    public function tipohabitacion(){
        return $this->hasMany(Tipo_habitacion::class, 'Id_Tipo_Habitacion', 'ID_Habitacion');
    }

    

    public function servicios()
    {
        return $this->hasMany(Servicio::class, 'Nro_Habitacion', 'Nro_Habitacion');
    }
}

//hola

