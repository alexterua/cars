@extends('layouts.main')

@section('content')
    <div>
        <h2 class="text-center mt-3 mb-3">Add New Car</h2>
    </div>
    <div class="w-50">
        <form action="{{ route('cars.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="desc" class="form-label">Description</label>
                <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="engine" class="form-label">Engine</label>
                <input type="text" class="form-control" id="engine" name="engine">
            </div>
            <div class="mb-3">
                <label for="fuel" class="form-label">Fuel</label>
                <input type="number" class="form-control" id="fuel" name="fuel">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('cars.index') }}" class="btn btn-dark">Back</a>
        </form>
    </div>
@endsection
