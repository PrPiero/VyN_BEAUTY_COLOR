<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::truncate();

        $service = new Service;
        $service->service ="Manicure";
        $service->price = "25";
        $service->save();

        $service = new Service;
        $service->service ="Pedicure";
        $service->price = "35";
        $service->save();

        $service = new Service;
        $service->service ="Pintado de Cabello";
        $service->price = "120";
        $service->save();

        $service = new Service;
        $service->service ="Laceado";
        $service->price = "300";
        $service->save();

        $service = new Service;
        $service->service ="Mechas";
        $service->price = "220";
        $service->save();

        $service = new Service;
        $service->service ="Reacondicionamiento";
        $service->price = "120";
        $service->save();

        $service = new Service;
        $service->service ="Corte de Cabello";
        $service->price = "40";
        $service->save();

        $service = new Service;
        $service->service ="Maquillaje";
        $service->price = "120";
        $service->save();

        $service = new Service;
        $service->service ="Botox";
        $service->price = "150";
        $service->save();

        $service = new Service;
        $service->service ="Uñas Acrílicas";
        $service->price = "150";
        $service->save();

        $service = new Service;
        $service->service ="Limpieza Facial";
        $service->price = "120";
        $service->save();

        $service = new Service;
        $service->service ="Peinados";
        $service->price = "80";
        $service->save();

        $service = new Service;
        $service->service ="Cepillados";
        $service->price = "35";
        $service->save();
    }
}
