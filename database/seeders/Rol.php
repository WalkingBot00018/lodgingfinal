<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Rol extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rol')->insert([
            'Nombre' => 'Administrador',
            'Permisos' => 'gestionar usuarios, configurar el sistema, acceder a informes, administrar inventarios, garantizar la seguridad de los datos y brindar soporte técnico.',
            
          ]);


        DB::table('rol')->insert([
            'Nombre' => 'Recepcionista',
            'Permisos' => 'registrar huéspedes, gestionar reservas, asignar habitaciones, realizar check-in y check-out, atender consultas y solicitudes, y manejar facturación ',
            
        ]);



        DB::table('rol')->insert([
            'Nombre' => 'Mesero',
            'Permisos' => ' tomar pedidos, acceder al menú, gestionar mesas',
            
        ]);


        DB::table('rol')->insert([
            'Nombre' => 'RoomService',
            'Permisos' => 'para gestionar pedidos de servicio a la habitación, acceder al inventario de alimentos y bebidas, manejar la facturación de los servicios',
            
        ]);



        DB::table('rol')->insert([
            'Nombre' => 'Cliente',
            'Permisos' => 'reservar habitaciones, solicitar servicios, ver la factura',
            
        ]);




    }
}
//