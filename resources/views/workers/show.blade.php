@extends('layout.main')

@section('content')
    <div class="m-2">
        <a href="{{ route('workers.index') }}" class="btn btn-primary">Back</a>
    </div>
    <table class="table m-3">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Surname</th>
            <th scope="col">Email</th>
            <th scope="col">Age</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{ $worker->id }}</th>
                <td>{{ $worker->name }}</td>
                <td>{{ $worker->surname }}</td>
                <td>{{ $worker->email }}</td>
                <td>{{ $worker->age }}</td>
            </tr>
        </tbody>
    </table>
@endsection
