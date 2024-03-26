<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetodoPago extends Model
{
    protected $table = 'metodo_pago';
    protected $primaryKey = 'Id_Metodo_Pago';
    public $timestamps = false; // Desactiva las marcas de tiempo

    protected $fillable = [
        'Tipo',
    ];

    public function factura(){
        return $this->hasMany(FacturaServicio::class, 'Id_Metodo_Pago', 'Id_Metodo_Pago');
    }
}
