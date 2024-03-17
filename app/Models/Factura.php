<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;

    protected $table = 'factura';


    protected $fillable = [
        'Nro_Factura',
        'Nro_Reserva',
        'FechaEmision',
        'Monto_Total',
        'Id_Metodo_Pago',
    ];

    public function Factura_Servicio(){
        return $this->hasMany(Factura_Servicio::class, 'Nro_Factura', 'Nro_Factura');
    }
}
