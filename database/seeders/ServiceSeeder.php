<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        $services = [
            ['name' => 'Formateo e instalación de Windows', 'estimated_price' => 15000],
            ['name' => 'Reparación de notebooks y PC', 'estimated_price' => 20000],
            ['name' => 'Instalación de cámaras de seguridad', 'estimated_price' => 35000],
            ['name' => 'Creación de páginas web', 'estimated_price' => 80000],
        ];

        foreach ($services as $s) {
            Service::create([
                'name' => $s['name'],
                'description' => 'Servicio técnico profesional',
                'estimated_price' => $s['estimated_price']
            ]);
        }
    }
}
