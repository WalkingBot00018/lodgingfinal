<?php

namespace App\Models;
use App\models\Reserva;
use App\models\MetodoPago;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;
    protected $table = 'factura';

    protected $primaryKey = 'Nro_Factura';

    protected $fillable = [
        'Nro_Reserva',
        'FechaEmision',
        'Monto_Total',
        'Id_Metodo_Pago',
    ];
    public function Reserva()
    {
        return $this->belongsTo(Reserva::class, 'Nro_Factura', 'Nro_Reserva');
    }
    public function Metodopago()
    {
        return $this->belongsTo(MetodoPago::class, 'Nro_Factura', 'Id_Metodo_Pago');
    }
}
