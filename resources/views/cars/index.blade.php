@extends('layouts.main')

@section('content')
<table class="table">
    <div>
        <h2 class="text-center mt-3 mb-3">List of Cars</h2>
        <a href="{{ route('cars.create') }}" class="btn btn-success mb-3">Add New Car</a>
    </div>
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name of Car</th>
        <th scope="col">Description</th>
        <th scope="col">Engine</th>
        <th scope="col">Fuel</th>
        <th scope="col">Price</th>
    </tr>
    </thead>
    <tbody>
    @foreach($cars as $car)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $car->title }}</td>
            <td>{{ $car->desc }}</td>
            <td>{{ $car->engine }}</td>
            <td>{{ $car->fuel }}L</td>
            <td>{{ $car->price }}$</td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
