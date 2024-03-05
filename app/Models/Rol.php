<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    protected $table = 'rol';

    protected $primaryKey = 'ID_rol';

    protected $fillable = [
        'Nombre',
        'Permisos',
    ];

    public function users(){
        return $this->hasMany(User::class, 'ID_rol', 'ID_rol');
    }
}
