<?php

declare(strict_types=1);

namespace App\Actions;

use Illuminate\Support\Facades\Storage;

class GetCarsAction
{
    public function __invoke()
    {
        $files = Storage::allFiles('cars');

        $cars = [];
        foreach ($files as $file) {
            $car = json_decode(Storage::get($file), true);
            $cars[] = $car;
        }

        return $cars;
    }
}
