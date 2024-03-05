<?php

namespace App\Models;
use App\models\habitacion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;
    protected $table = 'inventario';

    protected $primaryKey = 'ID_Inventario';

    protected $fillable = [
        'Nro_Habitacion',
        'Cantidad',
        'Nombre',
    ];
    public function habitacion()
    {
        return $this->belongsTo(habitacion::class, 'ID_Inventario', 'Nro_Habitacion');
    }

}
