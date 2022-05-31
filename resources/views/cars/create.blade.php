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
                @error('title')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="desc" class="form-label">Description</label>
                <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
                @error('desc')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="engine" class="form-label">Engine</label>
                <input type="text" class="form-control" id="engine" name="engine">
                @error('engine')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="fuel" class="form-label">Fuel</label>
                <input type="number" class="form-control" id="fuel" name="fuel">
                @error('fuel')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price">
                @error('price')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <div class="form-group">
                    <label>Old Owner (Бывший Владелец)</label>
                    <select name="old_owner_id" class="form-control">
                        @foreach($oldOwners as $oldOwner)
                            <option value="{{ $oldOwner->id }}"
                                {{ old('old_owner_id') == $oldOwner->id ? 'selected' : '' }}
                            >{{ $oldOwner->last_name }}</option>
                        @endforeach
                    </select>
                    @error('old_owner_id')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('cars.index') }}" class="btn btn-dark">Back</a>
        </form>
    </div>
@endsection
