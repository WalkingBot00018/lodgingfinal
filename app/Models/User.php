<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\models\rol;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $primaryKey = 'ID_Usuario';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'Nro_doc',
        'Nombre',
        'Apellido',
        'email',
        'password',
        'Estado',
        'Telefono',
        'ID_rol',
    ];

    public function rol()
    {
        return $this->belongsTo(rol::class, 'ID_rol', 'ID_rol');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    /**SCOPE*/
    public function scopeNro_doc($query, $Nro_doc)
    {
        if($Nro_doc)
            return $query->where('Nro_doc', 'LIKE', "%$Nro_doc%");
        
    }
    public function scopeNombre($query, $Nombre)
    {
        if($Nombre)
            return $query->where('Nombre', 'LIKE', "%$Nombre%");
        
    }

}
