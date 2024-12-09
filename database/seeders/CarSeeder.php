<?php

namespace Database\Seeders;

use App\Actions\GetCarsAction;
use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $getCars = new GetCarsAction();
        $cars = $getCars();

        foreach ($cars as $car) {
            Car::create($car);
        }
    }
}
