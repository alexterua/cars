<?php

namespace App\Http\Controllers;

use App\Http\Requests\Car\StoreRequest;
use App\Models\Car;
use App\Models\OldOwner;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }

    public function create()
    {
        $oldOwners = OldOwner::all();
        return view('cars.create', compact('oldOwners'));
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        Car::firstOrCreate($data);

        return redirect()->route('cars.index');
    }
}
