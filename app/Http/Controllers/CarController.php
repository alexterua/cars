<?php

namespace App\Http\Controllers;

use App\Http\Requests\Car\StoreRequest;
use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }

    public function create()
    {
        return view('cars.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        Car::create($data);

        return redirect()->route('cars.index');
    }
}
