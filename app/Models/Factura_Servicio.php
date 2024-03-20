<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura_Servicio extends Model
{
    use HasFactory;

    protected $table = 'factura_servicio';


    protected $fillable = [
        'Nro_Factura',
        'ID_Servicio',
        'Cantidad',
    ];

    public function Factura_Servicio()
    {
        return $this->belongsTo(Factura_Servicio::class, 'Nro_Factura', 'Nro_Factura');
    }

}
