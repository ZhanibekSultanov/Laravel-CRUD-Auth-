@extends('layout.main')

@section('content')
    <div class="m-3">
        <a href="{{ route('workers.index') }}" class="btn btn-primary">Back</a>
    </div>
    <form action="{{ route('workers.update',$worker->id) }}" method="POST" class="m-3">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" aria-describedby="name" value="{{ $worker->name }}">
        </div>
        <div class="mb-3">
            <label for="surname" class="form-label">Surname</label>
            <input type="text" class="form-control" name="surname" aria-describedby="surname" value="{{ $worker->surname }}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" aria-describedby="email" value="{{ $worker->email }}">
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control" name="age" aria-describedby="age" value="{{ $worker->age }}">
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
@endsection
