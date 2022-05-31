<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'string|min:3|max:255|required',
            'desc' => 'string|required',
            'engine' => 'string|min:3|max:255|required',
            'fuel' => 'numeric|required',
            'price' => 'numeric|required',
        ]);

        Car::create($data);

        return redirect()->route('cars.index');
    }
}
