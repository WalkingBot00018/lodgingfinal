<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class HabitacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('habitacion')->insert([
            ['Nro_Habitacion' => '101', 'Descripcion' => 'Habitación individual', 'Precio' => 50.00, 'Estado' => 'Disponible'],
            ['Nro_Habitacion' => '102', 'Descripcion' => 'Habitación doble', 'Precio' => 75.00, 'Estado' => 'Disponible'],
            ['Nro_Habitacion' => '103', 'Descripcion' => 'Habitación triple', 'Precio' => 100.00, 'Estado' => 'Disponible'],
            ['Nro_Habitacion' => '104', 'Descripcion' => 'Habitación familiar', 'Precio' => 125.00, 'Estado' => 'Disponible'],
            ['Nro_Habitacion' => '105', 'Descripcion' => 'Suite', 'Precio' => 150.00, 'Estado' => 'Disponible']
        ]);
        
    }
}
