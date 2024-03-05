<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class servicio extends Model
{
    use HasFactory;
      protected $table = 'servicio';

    protected $primaryKey = 'ID_Servicio';

    protected $fillable = [
        'Nombre',
        'Descripcion',
        'Nro_Habitacion',
        

    ];

    public function habitacion()
    {
        return $this->belongsTo(habitacion::class, 'ID_Servicio', 'Nro_Habitacion');
    }

    

}
