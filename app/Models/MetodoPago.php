<?php

namespace App\Models;
use App\Models\Facturaservicio;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetodopagoModel extends Model
{
    use HasFactory;
    protected $table = 'metodo_pago';
    protected $primaryKey = 'Id_Metodo_Pago';

    protected $fillable = [
        'Tipo',
    ];

    public function factura(){
        return $this->hasMany(FacturaServicio::class, 'Id_Metodo_Pago', 'Id_Metodo_Pago');
    }
}
