<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = \App\Models\Car::all();
        return view('cars-list', [
            'cars' => $cars,
        ]);
    }

    public function models()
    {
        $models = \App\Models\Car::groupBy('Model')->pluck('Model');
        return view('models', [
            'models' => $models,
        ]);
    }

    public function model($model)
    {
        $carOne = Car::where('Model', '=', $model)->inRandomOrder()->first();
        $carTwo = Car::where('Model', '=', $model)->inRandomOrder()->first();
        return view('model', [
            'carOne' => $carOne,
            'carTwo' => $carTwo,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCarRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car, $carId)
    {
        $car = Car::find($carId)->toArray();

        return view('car', [
            'car' => $car,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCarRequest $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        //
    }
}
