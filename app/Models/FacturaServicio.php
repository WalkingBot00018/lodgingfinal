<?php

namespace App\Models;
use App\Models\Factura;
use App\Models\servicio;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacturaServicio extends Model
{
    use HasFactory;
    protected $table = 'factura_servicio';
    protected $primarykey = 'Nro_Factura_Servicio';
    protected $fillable = [
        'Nro_Factura',
        'ID_Servicio',
        'Cantidad',
    ];
    
    public function factura(){
        return $this->brlongsTo(Factura::class, 'Nro_Factura_Servicio', 'Nro_Factura');
    }
    public function servicio(){
        return $this->belongsTo(servicio::class, 'Nro_Factura_Servicio', 'ID_Servicio'
    );
    }
}
